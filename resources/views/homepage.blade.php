@extends('templates.layout')

@section('title', 'Homepage')

@section('content')  
    <div  class="comics-panel">
        <div class="panel-heading">COMICS & GRAPHIC NOVELS</div>

        <div class="container comics">
            <div class="row">
                @foreach($comics as $comic)
                    <div class="col-2 comic">
                        <a href="{{ route('comic', [ 'id' => $loop->iteration, 'comicTitle' => Str::slug($comic['title'], '-') ]) }}">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }} cover">
                            <h3>{{ strtoupper($comic['title'])}}</h3>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection