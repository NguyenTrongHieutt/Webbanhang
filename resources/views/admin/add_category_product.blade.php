@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm loại sản phẩm
                        </header>
                        <div class="panel-body">
                            @if(session('success'))
                                  <div class="alert alert-success">
                                   {{ session('success') }}
                                  </div>
                              @endif
                               @if(session('error'))
                              <div class="alert alert-danger">
                                    {{ session('error') }}
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
    <form role="form" method="POST" action="{{ route('type_product.store') }}">
        @csrf
      <div class="form-group">
                            <label for="typeName">Tên loại sản phẩm</label>
                            <input type="text" name="name" class="form-control" id="typeName" placeholder="Nhập tên loại sản phẩm" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="typeDesc">Mô tả loại sản phẩm</label>
                            <textarea style="resize: none" rows="8" class="form-control" id="typeDesc" placeholder="Mô tả loại sản phẩm" name="description">{{ old('description') }}</textarea>
                        </div>
        <button type="submit" class="btn btn-info">Thêm loại sản phẩm</button>
    </form>
</div>

                        </div>
                    </section>

            </div>
@endsection