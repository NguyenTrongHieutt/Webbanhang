@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê loại sản phẩm
    </div>

    <div class="row w3-res-tb mb-3">
      <div class="col-sm-8">
        <div class="input-group" style="max-width:400px;">
          <input type="text" id="typeSearchInput" class="form-control" placeholder="Nhập tên loại sản phẩm...">
          <button class="btn btn-primary" id="btnTypeSearch">Tìm</button>
          <button class="btn btn-secondary" id="btnTypeAll">Tất cả</button>
        </div>
      </div>
      <div class="col-sm-4 text-end">
        <button class="btn btn-light" id="btnPrevPage"><i class="fa fa-chevron-left"></i></button>
        <span id="pageIndicator" class="mx-2">1</span>
        <button class="btn btn-light" id="btnNextPage"><i class="fa fa-chevron-right"></i></button>
      </div>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên loại sản phẩm</th>
            <th>Mô tả</th>
            <th>Ngày thêm</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody id="typeListBody">
          <!-- Nội dung sẽ được render bằng JS -->
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Modal xác nhận xóa -->
<div class="modal fade" id="deleteTypeModal" tabindex="-1" aria-labelledby="deleteTypeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">&times;</button>
        <h4 class="modal-title" id="deleteTypeModalLabel">Xác nhận xóa</h4>
      </div>
      <div class="modal-body">
        Bạn có chắc chắn muốn xóa loại sản phẩm này? <br>
        <span id="deleteTypeError" class="text-danger"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
        <button type="button" class="btn btn-danger" id="confirmDeleteTypeBtn">Xóa</button>
      </div>
    </div>
  </div>
</div>

<script>
let currentPage = 1;
let currentKeyword = '';
let lastPage = 1;
const limit = 10;
let deleteTypeId = null;

function loadTypes(page = 1, keyword = '') {
    $.get('/admin/type-products/search', { page: page, keyword: keyword, limit: limit }, function(res) {
        let html = '';
        if (res.data && res.data.length > 0) {
            res.data.forEach(function(type) {
               html += `
<tr>
    <td>${type.name}</td>
    <td>${type.description ?? ''}</td>
    <td>${type.created_at ? type.created_at.substring(0,10).split('-').reverse().join('/') : ''}</td>
    <td>
        <a href="/type-product/edit/${type.id}" class="active" ui-toggle-class="">
            <i class="fa fa-pencil-square-o text-success text-active"></i>
        </a>
        <button class="btn btn-link btn-delete-type" data-id="${type.id}" style="padding:0 5px;" title="Xóa">
            <i class="fa fa-times text-danger"></i>
        </button>
    </td>
</tr>
`;
            });
        } else {
            html = `<tr><td colspan="4" class="text-center text-muted">Không có loại sản phẩm nào.</td></tr>`;
        }
        $('#typeListBody').html(html);
        $('#pageIndicator').text(res.current_page ?? page);
        currentPage = res.current_page ?? page;
        lastPage = res.last_page ?? 1;

        // Disable nút nếu ở trang đầu/cuối
        $('#btnPrevPage').prop('disabled', currentPage <= 1);
        $('#btnNextPage').prop('disabled', currentPage >= lastPage);
    });
}

// Hiện modal xác nhận xóa
$(document).on('click', '.btn-delete-type', function(e) {
    e.preventDefault();
    deleteTypeId = $(this).data('id');
    $('#deleteTypeError').text('');
    $('#deleteTypeModal').modal('show');
});

// Xác nhận xóa trong modal
$('#confirmDeleteTypeBtn').click(function() {
    if (!deleteTypeId) return;
    $.ajax({
        url: '/type-product/destroy/' + deleteTypeId,
        type: 'POST',
        data: {
            _token: '{{ csrf_token() }}',
            _method: 'DELETE'
        },
       success: function(res) {
    if (res.error) {
        $('#deleteTypeError').text(res.error);
    } else {
        $('#deleteTypeModal').modal('hide');
        loadTypes(currentPage, currentKeyword);
        deleteTypeId = null;
    }
},
error: function(xhr) {
    let msg = 'Xóa thất bại!';
    if (xhr.responseJSON && xhr.responseJSON.error) {
        msg = xhr.responseJSON.error;
    }
    $('#deleteTypeError').text(msg);
}
    });
});

$(document).ready(function() {
    loadTypes();

    $('#btnTypeSearch').click(function() {
        currentKeyword = $('#typeSearchInput').val();
        currentPage = 1;
        loadTypes(currentPage, currentKeyword);
    });

    $('#btnTypeAll').click(function() {
        $('#typeSearchInput').val('');
        currentKeyword = '';
        currentPage = 1;
        loadTypes(currentPage, '');
    });

    $('#btnPrevPage').click(function() {
        if (currentPage > 1) {
            loadTypes(currentPage - 1, currentKeyword);
        }
    });

    $('#btnNextPage').click(function() {
        if (currentPage < lastPage) {
            loadTypes(currentPage + 1, currentKeyword);
        }
    });

    // Cho phép nhấn Enter để tìm kiếm
    $('#typeSearchInput').keypress(function(e) {
        if (e.which === 13) {
            $('#btnTypeSearch').click();
        }
    });
});
</script>

@endsection