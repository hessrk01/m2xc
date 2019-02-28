
@extends('layouts.app')
 
@section('content')

    <div class="section container">

      
    <div class="hive-tag text-muted d-none d-lg-block">
      <h1>hive</h1>
      <h4>\ ˈhīv \</h4>
      <h5>noun</h5>
      <p class="h6">* a place swarming with activity</p>
      <p class="h6">* a crowd of busy, very active people</p>
      <p class="h6">* moving together</p>
    </div>

      

      @if($posts->count() == 0)
        Nothing here yet
      @else
        @foreach ($posts as $post)
            
        
        <div class="row mb-3">
          <div class="col-8">
            <h3 class="mb-3"><a href="hive/{{$post->slug }}">{{ $post->title }}</a></h3>
            <h6 class="my-2">By {{ $post->author}} / {{ $post->publish_date->format('F d, Y')}}</h6>
            @php $words = str_word_count(strip_tags($post->body)); $m = floor($words / 200); $s = floor($words % 200 / (200 / 60));
                     $est = $m . ' minute' . ($m == 1 ? '' : 's'). ', ' . $s . ' second' . ($s == 1 ? '' : 's'); 
                     echo('<h6 class="text-muted">Approximate reading time: ' . $est . '</h6>'); @endphp
            
            <p> {!! str_limit(strip_tags($post->body), 500) !!}</p>
          </div>
        </div>

        @endforeach
      @endif
      
    </div>

@endsection



