@extends('layouts.site')

@section('content')
<div class="row">
    <div class="col">
        <h1>{{ $post->title }}</h1>
        <p>
            <small>
            <i>
                Data dodania: {{ $post->created_at->format('d.m.Y') }}
            </i>
            </small>
        </p>
        <p>
            {{ $post->content }}
        </p>
    </div>
</div>
@endsection