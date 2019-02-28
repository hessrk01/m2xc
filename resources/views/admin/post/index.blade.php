
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
                                    <input type="checkbox" class="switchToggle" value="0" data-attr="publish" data-id="{{$post->id}}" {{$post->publish?'checked': ''}}/>
                                    <span class="slider round"></span>
                                </label>
                                @endcan
                            </td>
                            <td scope="row">{{$post->display_publish_date}}</td>
                            <td scope="row">{{$post->created_at->diffForHumans()}}</td>
                            <td scope="row"><a href="{{ route('post.edit', $post)}}" class="btn btn-primary">Edit</a>                                
                                <button class="deletePost btn btn-warning" data-id="{{ $post->id }}" data-token="{{ csrf_token() }}" >Delete</button>
                                <a href="{{ route('hive.show', $post->slug) }}" target="_blank" class="btn btn-info">Show</a>
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
                case "publish":
                    url = "/admin/post/changePublish";
                    break;
            }
            $.ajax({
                method: "PUT",
                url: url,
                data: {data, _token: '{{csrf_token()}}' },
            }).done(function(data) {
                    console.log(data);
            });
        });
    </script>

    <script>
        $('.deletePost').click(function() {
            var id = $(this).data('id');
            var token = $(this).data('token');
            bootbox.confirm({
                message: 'Deleting a post is permanent. Are you sure?',
                buttons: {
                    confirm: {
                        label: 'Delete',
                        className: 'btn-danger',
                    },
                    cancel: {
                        label: 'Cancel',
                    }
                },
                callback: function(result) {
                    console.log('always called' + result);
                    if(result)
                    {
                        var url = '{{route ('post.index')}}' + '/' + id;
                        $.ajax(
                        {
                            url: url,
                            method: 'DELETE',
                            data: {
                                'id':id,
                                '_token': token
                            },
                            success: function(data) {
                                location.reload('{{route('post.index')}}');
                            }
                        });
                    }
                }
            });
        });

    </script>

    <script>
        $('.bootbox').click(function(){
            bootbox.confirm("Are you sure?", function(result){ /* your callback code */ })
        });
    </script>

@endpush