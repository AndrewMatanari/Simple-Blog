{{-- validasi --}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss'])
    <title>Form Data Buku</title>
</head>
<body>
<div class="Container-fliud">
    <div class="row">
        <h1 class="mt-3 mb-3">Form Data Buku</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
        @endif
        <form action="{{ route('book.create')}}" method="POST">
            @csrf
            <div class="col-20">
                <div class="col-4 mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="col-4 mb-3">
                    <label for="page_count" class="form-label">Page Count</label>
                    <input type="number" name="page_count" id="page_count" class="form-control">
                </div>
                <div class="col-4 mb-3">
                    <label for="author_name" class="form-label">Author Name</label>
                    <input type="text" name="author_name" id="author_name" class="form-control">
                </div>
                <div class="col-4 mb-3">
                    <label for="author_email" class="form-label">Author Email</label>
                    <input type="email" name="author_email" id="author_email" class="form-control">
                </div>
                <div class="col-4 mb-3">
                    <label for="published_date" class="form-label">Published Date</label>
                    <input type="date" name="published_date" id="published_date" class="form-control">
            </div>
            <div class="col-4 mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control">
            </div>
        </div>
        <a href="{{ route('book') }}" class="btn btn-primary mt-3">Back</a>
        <button type="submit" class="btn btn-success mt-3">Submit</button>
        </form>
        <footer class="text-center mt-3 mb-3">
            <p>Copyright &copy; {{ date('Y') }} Andrew Lawrance Matanari.</p>
        </footer>
</body>
</html>
