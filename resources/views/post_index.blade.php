@extends('layouts.site')

@section('content')
<h1>Blog - lista postów</h1>
@foreach ($posts as $post)
    <div class="row">
        <div class="col-6">
            <a href="{{route ('post', $post->slug ) }}">
                <h3>{{ $post->title}}</h3>
            </a>
            <p>
                Data dodania: <small>{{ $post->created_at->format('d/m/Y') }}</small>
            </p>
            <p>{{ $post->description }}</p>
        </div>
   
    
@endforeach
<div class="row">
    <div class="col-6">
        @if ($posts->CurrentPage() > 1)
        <a href="{{ $posts->previousPageUrl() }}" class="float-start">
            <button class="btn btn-primary">Poprzednie</button>
        </a>
        @endif
        @if ($posts->hasMorePages())
        <a href="{{ $posts->nextPageUrl() }}" class="float-end">
            <button class="btn btn-primary">Następne</button>
        </a>
        @endif
    </div>
</div>
@endsection