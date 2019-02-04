@extends('layouts.app')

@section('content')

    <div class="section container">
        <div class="row justify-content-center">
            <div class="col-8  shadow-lg p-5 m-5 bg-white rounded">
                <div class="d-flex align-items-center">
                    <h3>Change user password - {{$user->name}}</h3>
                    <div class="ml-auto">
                        <a href="{{ route('user.index') }}" class="btn btn-primary"> Back to all Users</a>
                    </div>
                </div>
                <form action = "{{ route('password.change', $user->id) }}" method="post">
                    @method('PUT')
                    @csrf

                    <div class="form-group">
                            <label for="password" class="form-label">{{ __('Password') }}</label>        
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif            
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        
                    </div>

                    <div class = "form-group">
                        <button type="submit" class="btn btn-outline-primary btn-lg">Change password</button>
                    </div>

                </form> 
            </div>
        </div>        
    </div>
    
@endsection