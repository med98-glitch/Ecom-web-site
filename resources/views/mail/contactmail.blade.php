@component('mail::message')
Bien venue sur chamal info
<br>
message de:{{$name}}
<br>
email: {{$adresse}}
<hr>
{{$message}}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
