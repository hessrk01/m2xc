@component('mail::message')
# New User Registration

Someone has registered on M2xc.

@component('mail::panel')
<strong>{{ $name }}</strong> has registered with the email address of <strong> {{ $email }} </strong>

Created on: {{$created_at}} UTC. (-6 CST)

To admit this user, go to <a href="{{route('user.index')}}">M2xc User Admin</a>
If you do not recognize this user, you can choose to do nothing and the system will delete the record in 7 days.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
