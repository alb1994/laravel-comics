
    
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($comics as $id => $comic)
            <div class="col-6">
                <a href="{{ route('comics.show', $id) }}">
                    {{ $comic['series'] }}
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
    