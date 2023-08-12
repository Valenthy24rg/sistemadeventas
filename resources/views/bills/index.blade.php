<div><a href="/">Home</a></div>
<a href="{{ route('bills.create') }}">New Product</a>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<table cellpadding="10" cellspacing="1" border="1">
    <thead>
    <tr>
        <td>N°</td>
        <td>Name</td>
        <td>Total</td>
        <td>Subtotal</td>
        <td>Employee</td>
        <td>Client</td>
        <td>Product</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($bills as $key => $bill)
        <tr>
            <td>{{ $bills->firstItem() + $key }}.</td>
            <td>{{ $bill->total }}</td>
            <td>{{ $bill->subtotal }}</td>
            <td>
                {{ $bill->employee->nombre }}
            </td>

            <td>
                {{ $bill->client->nombre }}
            </td>

            <td>
                {{ $bill->product->nombre }}
            </td>

            <td>
                <a href="{{ route('bills.edit', $bill) }}">Edit</a>

                <form action="{{ route('bills.delete', $bill) }}" method="post">
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">No data found in table</td>
        </tr>
    @endforelse
    </tbody>
</table>
