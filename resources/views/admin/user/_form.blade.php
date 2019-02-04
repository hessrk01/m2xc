@csrf
<div class = "form-group">
    <label for="user-name">Full Name</label>
    <input type="text" name="name" value="{{ old('user', $user->name) }}" id="username" class = "form-control" required>
    @if ($errors -> has('user'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('name') }}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <label for="useremail">Email Address</label>
    <input type="text" name="email" value="{{ old('user', $user->email) }}" id="useremail" class = "form-control" required>
    @if ($errors -> has('email'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('email') }}</strong>
        </div>
    @endif
</div>
@can('adminview', $user)
<div class="form-group">
    <label for="admitted">Admitted</label>
    <label class="switch">
        <input type="checkbox" name="admitted" class="switchToggle" {{$user->admitted?'checked': ''}}/>
        <span class="slider round"></span>
    </label>
</div>
<div class="form-group">
    <label for="admitted">Admin</label>
    <label class="switch">
        <input type="checkbox" name="admin" class="switchToggle" {{$user->admin?'checked': ''}}/>
        <span class="slider round"></span>
    </label>
</div>
@endcan
<div class = "form-group">
    <button type="submit" class="btn btn-outline-primary btn-lg"> {{ $buttonText }}</button>
</div>