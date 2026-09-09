<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 30px;">

    <h1>Edit Product: {{ $product->name }}</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label>Name:</label><br>
            <input type="text" name="name" value="{{ old('name', $product->name) }}" required>
        </p>

        <p>
            <label>Description:</label><br>
            <textarea name="description">{{ old('description', $product->description) }}</textarea>
        </p>

        <p>
            <label>Price:</label><br>
            <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}" required>
        </p>

        <p>
            <label>Stock:</label><br>
            <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" required>
        </p>

        <button type="submit">Update Product</button>
        <a href="{{ route('products.index') }}">Cancel</a>
    </form>

</body>
</html>