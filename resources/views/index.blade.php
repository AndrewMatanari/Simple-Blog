<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss'])
    <title>Data Buku</title>
</head>
<body>
<div class="container-fluid">
    <div class="col-12">
        <h1 class="text-center mt-3">Data Buku</h1>
        <a href="{{ route('book.form') }}" class="btn btn-primary">Tambah Buku</a>
        <table class="table table-bordered table-striped table-hover mt-3 table-responsive w-100">
            <thead class="table-dark">
                <tr class="text-center">
                    <th class="text-center align-middle">Title</th>
                    <th>Page Count</th>
                    <th>Author Name</th>
                    <th>Author Email</th>
                    <th>Published Date</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr class="text-center">
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->page_count }}</td>
                        <td>{{ $book->author_name }}</td>
                        <td>{{ $book->author_email }}</td>
                        <td>{{ $book->published_date }}</td>
                        <td>{{ $book->description }}</td>
                        <td>
                            <a href="{{ route('book.edit', $book->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('book.delete', $book->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<footer class="text-center mt-3 mb-3">
    <p>Copyright &copy; {{ date('Y') }} Andrew Lawrance Matanari.</p>
</footer>
@vite(['resources/js/app.js'])
</body>
</html>
