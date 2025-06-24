@extends('admin_layout')
@section('admin_content')
<div class="container">
    <h2>Chỉnh sửa sản phẩm</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif
    <form method="POST" action="{{ route('product.update', $product->product_id) }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Tên sản phẩm</label>
            <input type="text" name="name_product" class="form-control" value="{{ old('name_product', $product->name_product) }}" required>
        </div>
        <div class="form-group">
            <label>Loại sản phẩm</label>
            <select name="id_type_product" class="form-control" id="edit_type_product" required>
                @if($product->typeProduct)
                    <option value="{{ $product->id_type_product }}" selected>{{ $product->typeProduct->name }}</option>
                @endif
            </select>
            <small class="form-text text-muted">
                Nếu không có loại sản phẩm, hãy 
                <a href="{{ route('add_category_product') }}">thêm loại mới</a>.
            </small>
        </div>
        <div class="form-group">
            <label>Giá</label>
            <input type="number" name="price" class="form-control" value="{{ old('price', $product->price) }}" required step="0.01" min="0">
        </div>
        <div class="form-group">
            <label>Số lượng</label>
            <input type="number" name="quantity" class="form-control" value="{{ old('quantity', $product->quantity) }}" required step="0.01" min="0">
        </div>
        <div class="form-group">
            <label>Đơn vị tính</label>
            <input type="text" name="unit_type" class="form-control" value="{{ old('unit_type', $product->unit_type) }}" required>
        </div>
        <div class="form-group">
            <label>Ảnh sản phẩm hiện tại</label><br>
            @if($product->image_url)
                <img src="{{ asset('images/product/' . $product->image_url) }}" width="100">
            @else
                <span>Chưa có ảnh</span>
            @endif
        </div>
        <div class="form-group">
            <label>Chọn ảnh mới (nếu muốn thay đổi)</label>
            <input type="file" name="image_url" class="form-control" accept="image/*">
        </div>
        <button type="submit" class="btn btn-info">Cập nhật</button>
        <a href="{{ route('all_product') }}" class="btn btn-secondary">Quay lại</a>
    </form>
</div>

<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    $('#edit_type_product').select2({
        placeholder: "Chọn loại sản phẩm",
        allowClear: true,
        width: '100%',
        ajax: {
            url: '/api/type-products/search',
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return { q: params.term };
            },
            processResults: function (data) {
                return {
                    results: data.map(function(item) {
                        return { id: item.id, text: item.name };
                    })
                };
            },
            cache: true
        }
    });

    // Nếu đã có loại sản phẩm, giữ lại khi reload
    var selectedTypeId = "{{ $product->id_type_product }}";
    var selectedTypeName = "{{ $product->typeProduct ? $product->typeProduct->name : '' }}";
    if(selectedTypeId && selectedTypeName){
        var option = new Option(selectedTypeName, selectedTypeId, true, true);
        $('#edit_type_product').append(option).trigger('change');
    }
});
</script>
@endsection