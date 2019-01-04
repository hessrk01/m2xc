
@extends('layouts.app')

@section('content')

    <div class="section container">
        <h2 class="p-2">Users</h2>
        <table class="table table-borderless table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Admitted</th>
                    <th scope="col">Created</th>
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
                    <td scope="row">{{$user->created_at}}</td>
                    <td scope="row "><a href="#"><i class="fal fa-eye"></i></a></td>
                </tr>
            </tbody>
                
            @endforeach
        </table>

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
            // $.post("/change")
            // if(this.checked) {
            //     alert($(this).attr("data-id"));
            // } else {
            //     alert ("changed back");
            // }
        });

        // $(".switchToggle").on("change", function() {
        //     var taskId = $(this).attr("data-id"); // gets task ID of clicked checkbox
        //     var state = $(this).is(':checked'); // gets if checkbox is checked or not
        //     alert(taskId);
        // //$.post("/changestatustask", {'idTask':taskId, 'checkboxStatus':state}, function() {
        //     // you can add some code here in response to ajax request
        // //);
        // });
    </script>

@endpush