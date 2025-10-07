@php
    $appName = config('app.name');
@endphp

Dear {{ $user->name }},<br />
<br />
Someone, presumably you, requested a password reset on {{ $appName }}.<br />
<br />
If this was not you, simply disregard this email.<br />
<br />
If this was you, please copy and paste the code below into the password reset form where you signed up.<br />
<br />
Code:&nbsp;&nbsp; <b>{{ $user->verification_code }}</b><br />
<br />
Thanks,<br />
PwdDb<br />
