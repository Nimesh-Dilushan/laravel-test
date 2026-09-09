<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 30px;">

    <h1>Add Product</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div style="margin-bottom: 12px;">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name') <div style="color: red; font-size: 12px;">{{ $message }}</div> @enderror
        </div>

        <div style="margin-bottom: 12px;">
            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="3">{{ old('description') }}</textarea>
            @error('description') <div style="color: red; font-size: 12px;">{{ $message }}</div> @enderror
        </div>

        <div style="margin-bottom: 12px;">
            <label for="price">Price ($):</label><br>
            <input type="number" step="0.01" id="price" name="price" value="{{ old('price') }}" required>
            @error('price') <div style="color: red; font-size: 12px;">{{ $message }}</div> @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label for="stock">Stock:</label><br>
            <input type="number" id="stock" name="stock" value="{{ old('stock', 0) }}" required>
            @error('stock') <div style="color: red; font-size: 12px;">{{ $message }}</div> @enderror
        </div>

        <button type="submit">Submit</button>
    </form>

    <table border="1" cellpadding="6" cellspacing="0">
        <thead>
            <tr>
                <th>Product Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>



</body>
</html>