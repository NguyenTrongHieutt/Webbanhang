<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Tìm và xem sản phẩm theo loại</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    #typeDropdown {
        position: relative;
        width: 300px;
    }
    #typeList {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: white;
        border: 1px solid #ccc;
        z-index: 9999;
        max-height: 200px;
        overflow-y: auto;
        display: none;
    }
    #typeList li {
        padding: 8px 12px;
        cursor: pointer;
    }
    #typeList li:hover {
        background-color: #f8f9fa;
    }
    .product-box {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 10px;
        margin: 10px;
        width: 180px;
        display: inline-block;
        vertical-align: top;
        background-color: #fdfdfd;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
    #paginationControls {
        display: none;
        margin-top: 5px;
        text-align: center;
    }
  </style>
</head>
<body class="p-4">

<div id="typeDropdown" class="mb-4">
  <div class="input-group">
    <input type="text" id="typeSearch" class="form-control" placeholder="Tìm loại sản phẩm..." readonly>
    <button class="btn btn-outline-secondary" type="button" id="showTypesBtn">▼</button>
  </div>

  <ul id="typeList" class="list-group"></ul>

  <div id="paginationControls">
    <button id="prevTypesBtn" class="btn btn-sm btn-light">◀</button>
    <span id="pageIndicator" class="mx-2"></span>
    <button id="nextTypesBtn" class="btn btn-sm btn-light">▶</button>
  </div>
</div>

<h4 id="selectedTypeName" class="mb-3"></h4>
<div id="productList" class="d-flex flex-wrap"></div>
<div id="productPagination" class="text-center mt-3" style="display: none;">
    <button id="prevProductsBtn" class="btn btn-sm btn-dark-outline">◀</button>
   <span id="productPageIndicator" class="mx-2 text-dark fw-bold"></span>

    <button id="nextProductsBtn" class="btn btn-sm btn-dark-outline">▶</button>
</div>
<script>
  let typePage = 0;
  const typeLimit = 8;

  let productPage = 0;
  const productLimit = 8;
  let currentTypeId = null;

  function loadTypes() {
    $.get('/type-products/load', { offset: typePage * typeLimit, limit: typeLimit }, function (data) {
      $('#typeList').empty();

      if (data.length > 0) {
        data.forEach(t => {
          $('#typeList').append(`<li class="list-group-item list-group-item-action" data-id="${t.id}">${t.name}</li>`);
        });
        $('#typeList').show();
        $('#paginationControls').show();
        $('#pageIndicator').text(`Trang ${typePage + 1}`);
        $('#prevTypesBtn').prop('disabled', typePage === 0);
        $('#nextTypesBtn').prop('disabled', data.length < typeLimit);
      } else {
        $('#typeList').hide();
        $('#paginationControls').hide();
      }
    });
  }

  function loadProducts() {
    if (!currentTypeId) return;

    $.get('/products/load-by-type', {
      type_id: currentTypeId,
      offset: productPage * productLimit,
      limit: productLimit
    }, function (data) {
      $('#productList').empty();

      if (data.length > 0) {
        data.forEach(p => {
          $('#productList').append(`
            <div class="product-box text-center">
              <img src="${p.image_url ?? '#'}" alt="${p.name_product}" class="img-fluid mb-2" style="height:120px; object-fit:cover;">
              <div><strong>${p.name_product}</strong></div>
              <div>Giá: $${p.price}</div>
              <div>Số lượng: ${p.quantity ?? 'N/A'} ${p.unit_type ?? ''}</div>
            </div>
          `);
        });

        $('#productPagination').show();
        $('#productPageIndicator').text(`Trang ${productPage + 1}`);
        $('#prevProductsBtn').prop('disabled', productPage === 0);
        $('#nextProductsBtn').prop('disabled', data.length < productLimit);
      } else {
        $('#productList').html('<p class="text-muted">Không có sản phẩm nào.</p>');
        $('#productPagination').hide();
      }
    });
  }

  $(document).ready(function () {
    $('#showTypesBtn').click(function () {
      if ($('#typeList').is(':visible')) {
        $('#typeList').hide();
        $('#paginationControls').hide();
      } else {
        typePage = 0;
        loadTypes();
      }
    });

    $('#prevTypesBtn').click(function () {
      if (typePage > 0) {
        typePage--;
        loadTypes();
      }
    });

    $('#nextTypesBtn').click(function () {
      typePage++;
      loadTypes();
    });

    $('#typeList').on('click', 'li', function () {
      const name = $(this).text();
      currentTypeId = $(this).data('id');
      $('#typeSearch').val(name);
      $('#typeList').hide();
      $('#paginationControls').hide();
      $('#selectedTypeName').text("Sản phẩm của loại: " + name);
      productPage = 0;
      loadProducts();
    });

    $('#prevProductsBtn').click(function () {
      if (productPage > 0) {
        productPage--;
        loadProducts();
      }
    });

    $('#nextProductsBtn').click(function () {
      productPage++;
      loadProducts();
    });

    $(document).click(function (e) {
      if (!$(e.target).closest('#typeDropdown').length) {
        $('#typeList').hide();
        $('#paginationControls').hide();
      }
    });
  });
</script>

</body>
</html>
