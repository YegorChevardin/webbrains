@component('mail::message')
# Thank you for choosing WebBrains!

We'll anser you as fust as we possibly can!

@component('mail::button', ['url' => '/'])
Back to our website
@endcomponent

We'll an,<br>
{{ config('app.name') }}
@endcomponent
