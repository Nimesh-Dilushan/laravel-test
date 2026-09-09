<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products CRUD</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 30px;">

    <h1>Create Product</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <p><input type="text" name="name" placeholder="Name" required></p>
        <p><textarea name="description" placeholder="Description"></textarea></p>
        <p><input type="number" step="0.01" name="price" placeholder="Price" required></p>
        <p><input type="number" name="stock" placeholder="Stock" required></p>
        <button type="submit">Add Product</button>
    </form>

    <hr style="margin: 25px 0;">

    <h2>Product List</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>${{ number_format($item->price, 2) }}</td>
                    <td>{{ $item->stock }}</td>
                    <td>
                        <a href="{{ route('products.show', $item->id) }}">View</a> | 
                        <a href="{{ route('products.edit', $item->id) }}">Edit</a> | 
                        <form action="{{ route('products.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Delete this product?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">No products found.</td></tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>