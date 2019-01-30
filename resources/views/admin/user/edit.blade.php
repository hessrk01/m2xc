@extends('layouts.app')

@section('content')

    <div class="section container">
        <div class="row justify-content-center">
            <div class="col-8  shadow-lg p-5 m-5 bg-white rounded">
                <div class="d-flex align-items-center">
                    <h3>Edit User</h3>
                    <div class="ml-auto">
                        <a href="{{ route('user.index') }}" class="btn btn-primary"> Back to all Users</a>
                    </div>
                </div>
                <form action = "{{ route('user.update', $user->id) }}" method="post">
                    @method('PUT')
                    @include ("admin.user._form", ['buttonText' => "Update User"])
                </form> 
            </div>
        </div>        
    </div>
    
@endsection