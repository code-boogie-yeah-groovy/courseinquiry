@component('mail::message')
# Hi {{ $name }}, welcome to {{ config('app.name') }}!

You can now login to our website. Your password is {{ $password }}.

@component('mail::button', ['url' => ''])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
