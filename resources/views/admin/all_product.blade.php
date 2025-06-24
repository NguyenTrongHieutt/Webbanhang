@extends('admin_layout')
@section('admin_content')
<style>
    .container {
        background: #fff !important;
        color: #222 !important;
        border-radius: 8px;
        padding: 24px 18px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.07);
    }
    .table {
        background: #fff !important;
        color: #222 !important;
    }
    .table th, .table td {
        color: #222 !important;
    }
</style>
<div class="container">
    <h2>Danh sách sản phẩm</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form method="GET" action="{{ route('all_product') }}" class="form-inline mb-3">
        <input type="text" name="keyword" class="form-control" placeholder="Tìm theo tên..." value="{{ request('keyword') }}">
        <select name="type_id" class="form-control ml-2" id="search_type_id">
    <option value="">--Tất cả loại--</option>
        </select>
        <button type="submit" class="btn btn-primary ml-2">Tìm kiếm</button>
        <a href="{{ route('all_product') }}" class="btn btn-secondary ml-2">Tất cả</a>
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Loại</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Đơn vị</th>
                <th>Ảnh</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
    @foreach($products as $p)
    <tr>
        <td>{{ $p->product_id }}</td>
        <td>{{ $p->name_product }}</td>
        <td>{{ optional($types->where('id', $p->id_type_product)->first())->name }}</td>
        <td>${{ number_format($p->price, 2) }}</td>
        <td>{{ $p->quantity }}</td>
        <td>{{ $p->unit_type }}</td>
        <td>
            @if($p->image_url)
                <img src="{{ asset('images/product/' . $p->image_url) }}" width="60">
            @endif
        </td>
        <td>
            <a href="{{ route('product.edit', $p->product_id) }}" class="btn btn-warning btn-sm">Sửa</a>
            <form action="{{ route('product.destroy', $p->product_id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bạn có chắc chắn muốn xóa?');">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-danger btn-sm btn-delete-product" data-id="{{ $p->product_id }}">Xóa</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
    </table>
    {{ $products->links() }}
</div>
<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    $('#search_type_id').select2({
        placeholder: "Chọn loại sản phẩm",
        allowClear: true,
        width: '200px',
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

    // Giữ lại giá trị đã chọn khi reload/trang có sẵn type_id
// Giữ lại giá trị đã chọn khi reload/trang có sẵn type_id
var selectedTypeId = "{{ request('type_id') }}";
var selectedTypeName = "{{ optional($types->where('id', request('type_id'))->first())->name }}";
if(selectedTypeId && selectedTypeName){
    var option = new Option(selectedTypeName, selectedTypeId, true, true);
    $('#search_type_id').append(option).trigger('change');
}
 // Xử lý nút xóa
    $('.btn-delete-product').on('click', function() {
        var productId = $(this).data('id');
        var action = "{{ route('product.destroy', ':id') }}".replace(':id', productId);
        $('#deleteProductForm').attr('action', action);
        $('#deleteProductModal').modal('show');
    });
});
</script>
<!-- Modal xác nhận xóa -->
<div class="modal fade" id="deleteProductModal" tabindex="-1" aria-labelledby="deleteProductModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="deleteProductForm" method="POST">
        @csrf
        @method('DELETE')
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteProductModalLabel">Xác nhận xóa sản phẩm</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Bạn có chắc chắn muốn xóa sản phẩm này không?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
            <button type="submit" class="btn btn-danger">Xóa</button>
          </div>
        </div>
    </form>
  </div>
</div>
@endsection