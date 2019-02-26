
@extends('layouts.app')
 
@section('content')

    <div class="section container">


      @if($posts->count() == 0)
        Nothing here yet
      @else
        @foreach ($posts as $post)
            
        
        <div class="row mt-4">
          <div class="col-10">
            <h3 class="mb-3"><a href="hive/{{$post->slug }}">{{ $post->title }}</a></h3>
            <h6 class="my-2">By {{ $post->author}} / {{ $post->publish_date->format('F d, Y')}}</h6>
            @php $words = str_word_count(strip_tags($post->body)); $m = floor($words / 200); $s = floor($words % 200 / (200 / 60));
                     $est = $m . ' minute' . ($m == 1 ? '' : 's'). ', ' . $s . ' second' . ($s == 1 ? '' : 's'); 
                     echo('<h6 class="text-muted">Approximate reading time: ' . $est . '</h6>'); @endphp
            
            <p> {!! str_limit($post->body, 500) !!}</p>
          </div>
        </div>

        @endforeach
      @endif
      
    </div>

@endsection



