<!DOCTYPE html>
<html>
<head>
    <title>Add New Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">Add New Product</h1>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">← Back</a>
    </div>

    <div class="card shadow-sm col-md-6 mx-auto">
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('products.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text"
                           name="name"
                           value="{{ old('name') }}"
                           class="form-control"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Price ($)</label>
                    <input type="number"
                           name="price"
                           step="1"
                           min="0"
                           max="10000"
                           value="{{ old('price') }}"
                           class="form-control"
                           required>
                    <small class="text-muted">Price must be between $0 and $10,000</small>
                </div>

                <button type="submit" class="btn btn-success w-100">
                    Save Product
                </button>

            </form>

        </div>
    </div>

</div>

</body>
</html>
