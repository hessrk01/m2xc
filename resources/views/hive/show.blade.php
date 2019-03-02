
@extends('layouts.app')

@section('content')

    <div class="section container">
        <div>
            <h1 class="text-primary mt-5">{{$post->title}}</h1>
        </div>
        <div>
            @if(is_null($post->publish_date))
                <h5>Unpublished by {{ $post->author }}</h5>
            @else
                <h5>{{ $post->publish_date->format('F d, Y')}} by {{ $post->author }}</h5>
            @endif
        </div>
        <div class="mt-4">
            {!!$post->body!!}
        </div>
        
    </div>

@endsection