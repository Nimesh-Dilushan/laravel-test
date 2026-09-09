<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 30px;">

    <h1>Product Details</h1>

    <div style="border: 1px solid #ccc; padding: 20px; max-width: 400px; border-radius: 6px;">
        <p><strong>ID:</strong> {{ $product->id }}</p>
        <p><strong>Name:</strong> {{ $product->name }}</p>
        <p><strong>Description:</strong> {{ $product->description ?? 'No description available' }}</p>
        <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
        <p><strong>Stock:</strong> {{ $product->stock }}</p>
    </div>

    <br>
    <a href="{{ route('products.index') }}">← Back to all products</a>

</body>
</html>