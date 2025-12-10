<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">Edit Product</h1>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">← Back</a>
    </div>

    <div class="card shadow-sm col-md-6 mx-auto">
        <div class="card-body">

            <form action="{{ route('products.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" 
                           name="name" 
                           value="{{ $product->name }}" 
                           class="form-control" 
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Price ($)</label>
                    <input type="number" 
                           name="price" 
                           step="0.01" 
                           value="{{ $product->price }}" 
                           class="form-control" 
                           required>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Update Product
                </button>

            </form>

        </div>
    </div>

</div>

</body>
</html>
