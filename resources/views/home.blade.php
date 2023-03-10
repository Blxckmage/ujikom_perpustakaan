@extends('layouts.main')

@section('main')
    <div class="u-body container py-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center text-primary mb-5"><b>Welcome To Our Library</b></h1>
                <div class="text-center mb-5">
                    <img src="assets/svg/shapes/booklover.svg" class="img-fluid" alt="book stack"
                        style="max-width: 300px; height: auto;">
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card h-100">
                <header class="card-header d-flex align-items-center">
                    <h2 class="h3 card-header-title">Newly Released Books</h2>
                </header>

                <div class="card-body">
                    <div class="d-flex justify-content-between mb-4">
                        <div>
                            <span class="d-none d-lg-block text-muted small text-uppercase mb-1">Total Books</span>
                            <span class="h4 text-primary">{{ $allBooks->count() }}</span>
                        </div>

                        <div class="divider divider-vertical mx-2"></div>

                        <div>
                            <span class="d-none d-lg-block text-muted small text-uppercase mb-1">Total Author</span>
                            <span class="h4 text-info">2</span>
                        </div>

                        <div class="divider divider-vertical mx-2"></div>

                        <div>
                            <span class="d-none d-lg-block text-muted small text-uppercase mb-1">Total Category</span>
                            <span class="h4 text-success">3</span>
                        </div>

                        <div class="divider divider-vertical"></div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead class="table-active text-muted">
                                <tr class="small text-muted text-uppercase">
                                    <th>Book Name</th>
                                    <th>Book Author</th>
                                    <th>Book Category</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                        <td class="align-middle">
                                            <div class="media align-items-center">
                                                <div class="u-icon u-icon--sm bg-primary text-white rounded-circle mr-3">
                                                    <i class="fas fa-book"></i>
                                                </div>

                                                <div class="media-body">
                                                    <h4 class="mb-0">{{ $book->buku_judul }}</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle font-weight-semibold">
                                            {{ $book->buku_pengarang }}
                                        </td>
                                        <td class="align-middle font-weight-semibold">
                                            {{ $book->buku_pengarang }}
                                        </td>
                                        <td class="align-middle">
                                            <a href="/books/{{ $book->id }}" class="btn btn-primary btn-sm">Details</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
