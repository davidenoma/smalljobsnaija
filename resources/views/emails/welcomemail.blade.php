<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Mail</title>
</head>
<body>
    Welcome to SmallJobsNaija, {{ Auth::user()->username   }} 

<br><br>
<form action="https://smalljobsnaija.com.ng/user/home" method="GET" target="_new">
    <button type="submit">Check Out Your Dashboard</button><br>
    
</form>



Thanks, for letting us serve you.<br>
<br><br/>
SmallJobsNaija

<mailto:>admin@smalljobsnaija.com</mailto:>



    
</body>
</html>





