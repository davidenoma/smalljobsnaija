@component('mail::message')
Welcome to SmallJobsNaija, {{ Auth::user()->username   }} 

Welcome t our Service.

@component('mail::button', ['url' => 'https://smalljobsnaija.com.ng/user/home'])
Check out Your Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
