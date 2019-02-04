
@extends('layouts.app')

@section('content')

    <div class="section container">
        
        <div class="row justify-content-center">
            <div class="col-12  shadow-lg p-5 m-5 bg-white rounded">
                <h2 class="p-2">Users</h2>
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th scope="col">@sortablelink('name')</th>
                            <th scope="col">Email</th>
                            <th scope="col">@sortablelink('admitted')</th>
                            <th scope="col">@sortablelink('admin')</th>
                            <th scope="col">@sortablelink('created_at', 'Created')</th>
                        </tr>
                    </thead>

                    @foreach ($users as $user)
                    <tbody>
                        <tr>
                            <td scope="row">{{$user->name}}</td>
                            <td scope="row">{{$user->email}}</td>
                            <td scope="row">
                                @can('adminview', $user)
                                <label class="switch">
                                    <input type="checkbox" class="switchToggle" value="0" data-attr="admit" data-id="{{$user->id}}" {{$user->admitted?'checked': ''}}/>
                                    <span class="slider round"></span>
                                </label>
                                @endcan
                            </td>
                            <td scope="row">
                                @can('adminview', $user)
                                    <label class="switch">
                                        <input type="checkbox" class="switchToggle" value="0" data-attr="admin" data-id="{{$user->id}}" {{$user->admin?'checked': ''}}/>
                                        <span class="slider round"></span>
                                    </label>
                                @endcan
                            </td>
                            <td scope="row">{{$user->created_at->diffForHumans()}}</td>
                            <td 
                            
                                @can('view', $user)
                                scope="row"><a href="{{ route('user.edit', $user->id)}}" class="btn btn-primary">Edit</a>
                                @endcan
                                @can('view', $user)
                                <a href="{{ route('password.edit', $user->id) }}" class="btn btn-secondary">Change Password</a>
                                @endcan
                            </td>
                            
                        </tr>
                    </tbody>
                        
                    @endforeach
                </table>
                {!! $users->appends(\Request::except('page'))->render() !!}
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