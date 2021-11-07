@extends('layout.base')

@section('pageContent')
{{-- @dd($data["icons"]) --}}
<div class="container">
    @foreach ($data["comics"] as $item)
    
    <div class="card">
        <img src="{{$item["thumb"]}}" alt="">
        <div class="title">{{$item["title"]}}</div>
    </div>
    @endforeach
    <button>
        Load more
    </button>
    
</div>
<section class="icons">
    
    <div class="container">
        @foreach ($data["icons"] as $item)
        <div class="icon">
            <img src="{{$item["url"]}}" alt="{{$item["text"]}}"">
            <p>{{$item["text"]}}</p>
        </div>
        
        @endforeach

    </div>

</section>

@endsection