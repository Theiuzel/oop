@extends('layout')

@section('content')
    <h1>Inventories</h1>

    <a href="{{ route('inventories.create') }}" class="btn btn-primary mb-3">Add Inventory</a>

    <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inventories as $inventory)
                <tr>
                    <td>{{ $inventory->product->name }}</td>
                    <td>{{ $inventory->quantity }}</td>
                    <td>
                        <a href="{{ route('inventories.edit', $inventory->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('inventories.destroy', $inventory->id) }}" method="POST" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
