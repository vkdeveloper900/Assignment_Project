<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$pageTitle ?? 'Laravel Database Management'}}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <!-- Heading -->
    <h1 class="text-center mb-4">Laravel Database Management</h1>

    <!-- Display Success Message -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


<!-- Buttons to Import, Update, and View Report -->
    <div class="text-center mb-4">
        <a href="{{ route('upload') }}" class="btn btn-primary btn-lg mx-2 ">Import</a>
        <a href="{{ route('businesses.duplicate') }}" class="btn btn-warning btn-lg mx-2">Duplicate</a>
        <a href="{{ route('businesses.reports') }}" class="btn btn-info btn-lg mx-2">Report</a>
    </div>

    <!-- Content Section -->
    @yield('content')
</div>

<!-- Latest Bootstrap JS + Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
