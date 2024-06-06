@component('mail::message')
Hallo {{$user->name}},
    
<p>We Understand it happens. </p>

@component('mail::button', ['url' => url('reset/'.$user->remember_token)])
Setze dein Passwort zurück
@endcomponent

Falls Sie Probleme bei der Wiederherstellung Ihres Passworts haben, kontaktieren Sie uns bitte. </p>
Danke,<br>
{{ config('app.name') }}
@endcomponent


