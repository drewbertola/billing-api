@php
    $appName = config('app.name');
@endphp

Dear {{ $user->name }},<br />
<br />
Someone presumably you, signed up for a new account on {{ $appName }}.<br />
<br />
If this was not you, simply disregard this email.<br />
<br />
If this was you, please copy and paste the code below into the verification form where you signed up.<br />
<br />
Code:&nbsp;&nbsp; <b>{{ $user->verification_code }}</b><br />
<br />
Thanks,<br />
{{ $appName }}<br />
