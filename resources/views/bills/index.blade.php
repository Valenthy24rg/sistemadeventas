@extends('app')
@section('content')


    <div><a class="btn btn-success" href="/">Home</a></div>
    <a class="btn btn-secondary" href="{{ route('bills.create') }}">New Bill</a>

    @if(session('message'))
        <div style="color: green;">{{ session('message') }}</div>
    @endif

    <table class="table table-bordered table-hover" cellpadding="10" cellspacing="1" border="1">
        <thead>
        <tr>
            <td>N°</td>
            <td>Subtotal</td>
            <td>Total</td>
            <td>Employee</td>
            <td>Client</td>
            <td>Product</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
        @forelse($bills as $key => $bill)
            <tr>
                <td>{{$bills->firstItem() + $key }}.</td>
                <td>{{$bill->subtotal }}</td>
                <td>{{$bill->total }}</td>
                <td>{{$bill->employee->name}}</td>
                <td>{{$bill->client->nombre}}</td>
                <td>{{$bill->product->name}}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('bills.edit', $bill) }}"><i
                            class="bi bi-pencil-square"></i></a>
                    <form action="{{ route('bills.delete', $bill) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
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


<div><a class="btn btn-success" href="/">Home</a></div>
<a class="btn btn-secondary" href="{{ route('bills.create') }}">New Bill</a>



<table class="table table-bordered table-hover" cellpadding="10" cellspacing="1" border="1">
    <thead>
    <tr>
        <td>N°</td>
        <td>Name</td>
        <td>Subtotal</td>
        <td>Total</td>
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
            <td>{{ $bill->subtotal }}</td>
            <td>{{ $bill->total }}</td>
            <td>
                {{ $bill->employee->nombre }}
            </td>

            <td>
                {{ $bill->client->nombre }}
            </td>

            <td>
                {{ $bill->product->name }}
            </td>

            <td>{{ $city->created_at->format('F d, y') }}</td>

            <td>
                <a class="btn btn-primary" href="{{ route('bills.edit', $bill) }}"><i class="bi bi-pencil-square"></i></a>

                <form action="{{ route('bills.delete', $bill) }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                    @if(session('message'))
                        <div style="color: green;">{{ session('message') }}</div>
                    @endif
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
@endsection
