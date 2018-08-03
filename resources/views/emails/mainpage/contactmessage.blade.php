@component('mail::message')
# Hi Ferry,

{{ ucfirst($contact->name) }}, email you about {{ $contact->subject }}.

The message is as follows,
{{ ucfirst($contact->message) }} 

@component('mail::button', ['url' => 'mailto:' . $contact->email])
Reply
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
