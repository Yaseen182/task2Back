<!DOCTYPE html>
<html>
<head>
    <title>Products List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">Products List</h1>
        <a href="{{ route('products.create') }}" class="btn btn-success">+ Add New Product</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body p-0">

            <table class="table table-bordered table-hover m-0">
                <thead class="table-dark">
                    <tr>
                        <th width="10%">ID</th>
                        <th>Name</th>
                        <th width="15%">Price ($)</th>
                        <th width="20%">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($products as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->name }}</td>
                            <td>{{ $p->price }}</td>
                            <td>
                                <a href="{{ route('products.edit', $p->id) }}" 
                                   class="btn btn-primary btn-sm">Edit</a>

                                <form action="{{ route('products.destroy', $p->id) }}" 
                                      method="POST" 
                                      style="display:inline;">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" 
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Delete product?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>

</div>

</body>
</html>
