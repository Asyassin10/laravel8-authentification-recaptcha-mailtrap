@component('mail::message')
# please activate your account

@component('mail::panel')
to activate your account
@endcomponent
@component('mail::button', ['url' => $url])
click here
@endcomponent

Thanks,<br>
team
{{ config('app.name') }}
@endcomponent