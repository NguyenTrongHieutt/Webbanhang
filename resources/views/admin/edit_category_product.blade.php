@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Chỉnh sửa loại sản phẩm
            </header>
            <div class="panel-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                <div class="position-center">
                    <form role="form" method="POST" action="{{ route('type_product.update', $type->id) }}">
                        @csrf
                        <div class="form-group">
                            <label for="typeName">Tên loại sản phẩm</label>
                            <input type="text" name="name" class="form-control" id="typeName" value="{{ old('name', $type->name) }}" placeholder="Nhập tên loại sản phẩm">
                        </div>
                        <div class="form-group">
                            <label for="typeDesc">Mô tả loại sản phẩm</label>
                            <textarea style="resize: none" rows="8" class="form-control" id="typeDesc" name="description" placeholder="Mô tả loại sản phẩm">{{ old('description', $type->description) }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-info">Cập nhật loại sản phẩm</button>
                      <a href="{{ url('/type-product/all') }}" class="btn btn-secondary" style="margin-left:10px;">Quay lại danh sách</a>
                        
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
