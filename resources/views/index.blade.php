@extends('layout.base')

@section('pageContent')

<div class="container">
    @foreach ($data as $item)
    
    <div class="card">
        <img src="{{$item["thumb"]}}" alt="">
        <div class="title">{{$item["title"]}}</div>
    </div>
    @endforeach
    <button>
        ciao
    </button>
    
</div>

@endsection