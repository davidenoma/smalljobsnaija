@component('mail::message')
Welcome to SmallJobsNaija, {{ $welcomeAddress   }} 

We care about connecting and finding talents near by. <br>
Please stay tuned for new features.


@component('mail::button', ['url' => 'https://smalljobsnaija.com.ng/user/home'])
Check out Your Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
