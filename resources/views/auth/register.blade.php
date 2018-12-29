@extends('layouts.app')

@section('content')
<div class="section container">
    <div class="row justify-content-center d-flex">
        <div class="col-6 shadow-lg p-5 m-5 bg-white rounded">
            
                <h2><div class="pb-2">{{ __('Register') }}</div></h2>
                    <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-label">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

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

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                    </form>
                    {{-- <div class="d-flex  flex-column">
                        <h5 class="text-center">Or</h5>
                        <a href="#" class="btn">
                            <img src={{ asset('img/login/badges/LinkedIn-Sign-In-Large---Default.png')}} class="linkedinImage"/>
                        </a>    
                    </div> --}}
            
        </div>
    </div>
</div>
@endsection
