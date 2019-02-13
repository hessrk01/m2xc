@extends('layouts.app')

@section('content')

    <div class="section container">
        <div class="row justify-content-center">
            <div class="col-12  shadow-lg p-5 m-5 bg-white rounded">
                <h2 class="p-2">Articles</h2>
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th scope="col">@sortablelink('title')</th>
                            <th scope="col">URL</th>
                            <th scope="col">@sortablelink('display')</th>
                            <th scope="col">Author(s)</th>
                            <th scope="col">@sortablelink('published_date', 'Published')</th>
                        </tr>
                    </thead>
                    @foreach($articles as $article)
                    <tbody>
                        <tr>
                            <td scope="row">{{$article->title}}</td>
                            <td scope="row">{{str_limit($article->url, 25)}}</td>
                            <td scope="row">
                                <label class="switch">
                                    <input type="checkbox" class="switchToggle" value="0" data-attr="admit" data-id="{{$article->id}}" {{$article->display?'checked': ''}}/>
                                    <span class="slider round"></span>
                                </label>
                            </td>
                            <td scope="row">{{str_limit($article->author, 20)}}</td>
                            <td scope="row">{{$article->published_date}}</td>
                            <td scope="row">
                                <a href="#" class="btn btn-primary">Edit</a>
                                {{-- <a href="#" class="btn btn-secondary">Edit</a> --}}
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
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