
@extends('layouts.app')

@section('content')

    <div class="section container">
        
        <div class="row justify-content-center">
            <div class="col-12  shadow-lg p-5 m-5 bg-white rounded">
                    <div class="d-flex align-items-center">
                <h2 class="p-2">Hive Posts</h2>
                <div class="ml-auto">
                    <a href="{{ route('post.create') }}" class="btn btn-primary"> Create Hive Post</a>
                </div>
                    </div>
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th scope="col">@sortablelink('title')</th>
                            <th scope="col">@sortablelink('author')</th>
                            <th scope="col">@sortablelink('publish')</th>
                            <th scope="col">@sortablelink('publish_date', 'Published on')</th>
                            <th scope="col">@sortablelink('created_at', 'Created')</th>
                        </tr>
                    </thead>

                    @foreach ($posts as $post)
                    <tbody>
                        <tr>
                            <td scope="row">{{$post->title}}</td>
                            <td scope="row">{{$post->author}}</td>
                            <td scope="row">
                                @can('adminview', $post)
                                <label class="switch">
                                    <input type="checkbox" class="switchToggle" value="0" data-attr="admit" data-id="{{$post->id}}" {{$post->publish?'checked': ''}}/>
                                    <span class="slider round"></span>
                                </label>
                                @endcan
                            </td>
                            <td scope="row">{{$post->publish_date->toDateString()}}</td>
                            <td scope="row">{{$post->created_at->diffForHumans()}}</td>
                            <td scope="row"><a href="{{ route('post.edit', $post->id)}}" class="btn btn-primary">Edit</a>
                                
                                
                                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-secondary">Delete</a>
                                
                            </td>
                            
                        </tr>
                    </tbody>
                        
                    @endforeach
                </table>
                {{-- {!! $posts->appends(\Request::except('page'))->render() !!} --}}
            </div>
        </div>
    </div>

@endsection

@push('script')
    <script>
        $(".switchToggle").change(function(){
            var data = {};
            data.attr = $(this).attr("data-attr");
            data.id = $(this).attr("data-id");
            data.value = $(this).is(':checked') ? 1 : 0;
            console.log(data);
            var url;
            switch(data.attr){
                case "admin":
                    url = "/admin/adminuser";
                    break;
                case "admit":
                    url = "/admin/admituser";
                    break;
            }
            $.ajax({
                type: "PUT",
                url: url,
                data: {data, _token: '{{csrf_token()}}' },
            }).done(function(data) {
                    console.log(data);
            });
        });
    </script>

@endpush