@extends('layouts.app')

@section('content')

    <div class="section container">
        <h2 class="p-2">User</h2>

        name: {{$user->name}}
        </br>
        email: {{$user->email}}
        </br>

        admitted: {{$user->admitted}}
    </div>
@endsection