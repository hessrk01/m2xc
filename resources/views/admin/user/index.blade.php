
@extends('layouts.app')

@section('content')

    <div class="section container">
        <h2 class="p-2">Users</h2>
        <table class="table table-borderless table-hover">
            <thead>
                <tr>
                    <th scope="col">@sortablelink('name')</th>
                    <th scope="col">Email</th>
                    <th scope="col">@sortablelink('admitted')</th>
                    <th scope="col">@sortablelink('created_at', 'Created')</th>
                </tr>
            </thead>

            @foreach ($users as $user)
            <tbody>
                <tr>
                    <td scope="row">{{$user->name}}</td>
                    <td scope="row">{{$user->email}}</td>
                    <td scope="row">
                        <label class="switch">
                            <input type="checkbox" class="switchToggle" value="0" data-id="{{$user->id}}" {{$user->admitted?'checked': ''}}/>
                            <span class="slider round"></span>
                        </label></td>
                    <td scope="row">{{$user->created_at->diffForHumans()}}</td>
                    <td scope="row "><a href="#"><i class="fal fa-eye"></i></a></td>
                </tr>
            </tbody>
                
            @endforeach
        </table>

        {!! $users->appends(\Request::except('page'))->render() !!}
    </div>

@endsection

@push('script')
    <script>
        $(".switchToggle").change(function(){
            var data = {};
            data.id = $(this).attr("data-id");
            data.value = $(this).is(':checked') ? 1 : 0;
            console.log(data);
            $.ajax({
                type: "PUT",
                url: "/admin/admituser",
                data: {data, _token: '{{csrf_token()}}' },
            }).done(function(data) {
                    console.log(data);
            });
        });
    </script>

@endpush