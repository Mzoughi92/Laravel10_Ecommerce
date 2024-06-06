@component('mail::message')

Hallo<b>{{ $user->name }}</b>
<p>Sie sind fast bereit, die Vorteile von zu genießen.</p>

<p>Klicken Sie einfach auf die Schaltfläche unten, um Ihre E-Mail-Adresse zu bestätigen.</p>

<p>
    @component('mail::button', ['url' => url('activate/'.base64_encode($user->id))])
    verifizieren
    @endcomponent
</p>

<p> Dadurch wird Ihre E-Mail-Adresse bestätigt und Sie nehmen offiziell am Web-Applikation teil</p>

@endcomponent