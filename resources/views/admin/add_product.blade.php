@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm sản phẩm mới
            </header>
            <div class="panel-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                <form role="form" method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name_product">Tên sản phẩm</label>
                        <input type="text" name="name_product" class="form-control" id="name_product" value="{{ old('name_product') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="id_type_product">Loại sản phẩm</label>
                       <select name="id_type_product" class="form-control" id="id_type_product" required>
    <option value="">--Chọn loại sản phẩm--</option>
</select>
                        <small class="form-text text-muted">Nếu không có loại sản phẩm, hãy <a href="{{ route('add_category_product') }}">thêm loại mới</a>.</small>
                    </div>
                    <div class="form-group">
                        <label for="price">Giá $</label>
                        <input type="number" name="price" class="form-control" id="price" value="{{ old('price') }}" required step="0.01" min="0">
                    </div>
                    <div class="form-group">
                        <label for="quantity">Số lượng</label>
                        <input type="number" name="quantity" class="form-control" id="quantity" value="{{ old('quantity') }}" required step="0.01" min="0">
                    </div>
                    <div class="form-group">
                        <label for="unit_type">Đơn vị tính</label>
                        <input type="text" name="unit_type" class="form-control" id="unit_type" value="{{ old('unit_type') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="image_url">Ảnh sản phẩm</label>
                        <input type="file" name="image_url" class="form-control" id="image_url" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-info">Thêm sản phẩm</button>
                </form>
            </div>
        </section>
    </div>
</div>
@endsection