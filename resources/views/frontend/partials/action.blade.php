

<button  onclick="emailwithagent('{{ $property->random_id }}','{{ $property->title }}','{{ $property->user->phone_number }}','{{ $property->user->mobile_number }}','{{ $property->user->name }}','{{ $property->user->username }}','{{ $property->agent_id }}','{{ $property->id }}')" class="_85d9f2e2 a8197536 a8375d37 send-email"
aria-label="Send email" data-bs-toggle="modal"
data-bs-target="#modalabcd">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
    class="e6b01fef">
    <path fill="#6CACE3"
        d="M28.7 5.3H3.3A3.3 3.3 0 0 0 0 8.6v14.8c0 1.8 1.4 3.3 3.3 3.3h25.4c1.8 0 3.3-1.4 3.3-3.3V8.7c0-1.9-1.4-3.3-3.3-3.4zm-17 12l-8 6.6c-.3.1-.6.1-1-.2-.2-.3 0-.7.2-1l8-6.6c.3-.3.7-.1 1 .1.2.4.1.8-.2 1zm17.5 6.4c-.3.2-.6.3-1 0l-8-6.6c-.2-.1-.2-.5 0-.8 0-.3.6-.3.8 0l8 6.6c.4.1.4.5.2.8zm0-14.5l-11 7.5c-.6.4-1.4.6-2 .7-.9 0-1.6-.3-2.2-.7L3 9.2c-.4-.2-.4-.6-.2-.9.2-.3.6-.4 1-.2l10.8 7.5c.8.5 1.9.5 2.7 0l11-7.5c.2-.3.6-.1.8 0 .3.4.3.8 0 1z">
    </path>
</svg>
</button>


<button onclick="callwithagent('{{ $property->random_id }}','{{ $property->title }}','{{ $property->user->phone_number }}','{{ $property->user->mobile_number }}','{{ $property->user->name }}','{{ $property->user->username }}')" class="_5b77d672 da62f2ae _8d1154ff call" type="button"
aria-label="Call" data-bs-toggle="modal"
data-bs-target="#callexampleModal"><svg
    xmlns="http://www.w3.org/2000/svg" width="16"
    height="16" viewBox="0 0 16 16" fill="#fff"
    class="_40c10793" aria-label="Send email">
    <path
        d="M13.3 10.3A7.6 7.6 0 0 1 11 10a.7.7 0 0 0-.7.1l-1 1.4a10.1 10.1 0 0 1-4.6-4.6L6 5.7A.7.7 0 0 0 6 5a7.4 7.4 0 0 1-.3-2.3A.7.7 0 0 0 5 2H2.8c-.4 0-.8.2-.8.7A11.4 11.4 0 0 0 13.3 14a.7.7 0 0 0 .7-.8V11a.7.7 0 0 0-.7-.6z">
    </path>
</svg>&nbsp;Call With Agent</button>