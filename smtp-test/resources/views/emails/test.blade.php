@component('mail::message')
# SMTP Test Email

This email was sent from **Laravel on localhost** using **SMTP**.

If you see this → **SMTP is working!**

@component('mail::button', ['url' => 'http://localhost:8000'])
Back to App
@endcomponent

Thanks,<br>
Laravel SMTP Tester
@endcomponent
