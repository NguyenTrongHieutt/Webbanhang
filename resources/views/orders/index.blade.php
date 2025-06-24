<h2>Danh sách đơn hàng</h2>
<a href="{{ route('orders.create') }}">Tạo đơn hàng</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<ul>
@foreach($orders as $order)
    <li>
        {{ $order->customer->name }} đặt {{ $order->quantity }} x {{ $order->product->name }}
        <a href="{{ route('orders.edit', $order->id) }}">Sửa</a>
        <form method="POST" action="{{ route('orders.destroy', $order->id) }}" style="display:inline;">
            @csrf
            @method('DELETE')
            <button>Xoá</button>
        </form>
    </li>
@endforeach
</ul>