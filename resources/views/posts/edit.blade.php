@extends('layouts.app')

@section('content')
<div class="container"></div>
    <div class="row">
        <div class="card col-6" style="margin-left: auto; margin-right: auto;">
            <h1 style >Edytowanie - {{ $post->title }}</h1>
            <form method="POST" ACTION="{{route ('posts.update', $post) }}" enctype="multipart/form-data">
                @csrf

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Tytuł</span>
                    <input type="text" class="form-control" name="title" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{ $post->title}}">
                  </div>

                  <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupFile01">Zmien miniature</label>
                    <div class="mb3">
                        <img src="{{asset('uploads/'.$post->thumbnail) }}" class="img-fluid" style ="max-width: 150px"/>
                    </div>
                    
                    <input type="file" class="form-control" name="thumbnail" id="inputGroupFile01">
                  </div>

                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Treść posta</label>
                    <textarea class="form-control" id="exampleFormControlInput1" rows="3" name="content" required placeholder="lorem ipsum" {{ $post->content }}></textarea>
                  </div>

                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Skrócony opis</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="description" placeholder="lorem ipsum"  value="{{ $post->description}}">
                  </div>

                  <button type="submit" class="btn btn-success"  >Zatwierdź</button>

            </form>
        </div>
    </div>
</div>
@endsection