@component('mail::message')
Bien venue sur chamal info
<br>
Message from:{{$name}}
<br>
email: {{$adresse}}
<hr>
{{$message}}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
