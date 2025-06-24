<h2>Tạo đơn hàng</h2>
<form method="POST" action="{{ route('orders.store') }}">
    @csrf
    <label>Khách hàng:</label>
    <select name="customer_id">
        @foreach($customers as $customer)
            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
        @endforeach
    </select>

    <label>Sản phẩm:</label>
    <select name="product_id">
        @foreach($products as $product)
            <option value="{{ $product->id }}">{{ $product->name }}</option>
        @endforeach
    </select>

    <label>Số lượng:</label>
    <input type="number" name="quantity" min="1">

    <button>Tạo</button>
</form>
