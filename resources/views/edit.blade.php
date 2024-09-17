<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss'])
    <title>Edit Data Buku</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <h1 class="mt-3 mb-3">Edit Data Buku</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('book.update', $book->id) }}" method="POST">
            @csrf
            @method('Post')
            <div class="col-20">
                <div class=" mb-3">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $book->title) }}">
                </div>
                <div class="col-4 mb-3">
                    <label for="page_count">Page Count</label>
                    <input type="number" name="page_count" id="page_count" class="form-control" value="{{ old('page_count', $book->page_count) }}">
                </div>
                <div class="col-4 mb-3">
                    <label for="author_name">Author Name</label>
                    <input type="text" name="author_name" id="author_name" class="form-control" value="{{ old('author_name', $book->author_name) }}">
                </div>
                <div class="col-4 mb-3">
                    <label for="author_email">Author Email</label>
                    <input type="email" name="author_email" id="author_email" class="form-control" value="{{ old('author_email', $book->author_email) }}">
                </div>
                <div class="col-4 mb-3">
                    <label for="published_date">Published Date</label>
                    <input type="date" name="published_date" id="published_date" class="form-control" value="{{ old('published_date', $book->published_date->format('Y-m-d')) }}">
                </div>
                <div class="col-4 mb-3">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" class="form-control" value="{{ old('description', $book->description) }}">
                </div>
            </div>
            <a href="{{ route('book') }}" class="btn btn-primary item-right">Back</a>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</div>
<footer class="text-center mt-3 mb-3">
    <p>Copyright &copy; {{ date('Y') }} Andrew Lawrance Matanari.</p>
</footer>
</body>
</html>
