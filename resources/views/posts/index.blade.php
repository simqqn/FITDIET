@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col" style="text-align: right;"><a href="{{ route('posts.create') }}" class="btn btn-success">Dodaj post</a></div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Miniatura</th>
                            <th>Data dodania</th>
                            <th>Tytuł</th>
                            <th>Akcja</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img style ="max-height: 150px; max-width: 150px;" src="/uploads/{{ $post->thumbnail }}" class="img-fluid thumbnail"/>
                            </td>
                            <td>{{ $post->created_at->format('d.m.Y') }}</td>
                            <td>{{ $post->title }}</td>
                            <td>
                                <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edytuj</a>
                                <a href="#" class="btn btn-danger">Usuń</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection 