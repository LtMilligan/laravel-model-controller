@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">{{ $title }}</h1>
                <p>{{ $description }}</p>
            </div>
        </div>
    </div>
@endsection