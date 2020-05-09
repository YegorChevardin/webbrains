@component('mail::message')
# You have a new feedback from {{ $email }}

Subject: {{ $subject }}

Name: {{ $name }}

Text: {{ $text }}

Have a nice day,<br>
{{ config('app.name') }}
@endcomponent
