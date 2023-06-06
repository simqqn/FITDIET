@extends('layouts.site')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3>O nas</h3>
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-fluid" src="img/dietetyk.jpg"/>
                </div>
                <div class="col-lg-8">
                    <h3>{{ $authorName }}</h3>
                    <p>{{ $authorDescription }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
