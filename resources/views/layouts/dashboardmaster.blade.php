<!doctype html>
<!-- include(app_path().'/includes/myconfig.php'); -->

<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-100008897-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-100008897-2');
</script>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Noma Integrated Technology">
    <meta name="description" content="Quickly find top talents who search for jobs near me to meet your needs! " >
    <meta name="keywords" content="search for jobs, work for home, vacancy for job, google for jobs, online jobs for students,hot nigerian jobs, jobs near me, jobs in lagos, jobs in Nigeria,
    jobs near me, jobs in nigeria, online jobs, jobs, job vacancy, job openings near me jobs in dubai, career, jobs in canada, job hunting, 
    looking for a job, online jobs for teens, jobs for students, apply for jobs, apply for jobs online, post jobs for free, vacancy for teachers, earn money online without investment for students, jobs for writers, jobs for computer science, jobs for nurses, websites for jobs, 
    "> 
    

    <!-- Scripts -->
    {{-- <script src="{{ asset('/assets/js/app.js') }}" defer></script> --}}
    
    <link href="https://fonts.googleapis.com/css?family=DM+Sans|Libre+Franklin|Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.min.css">
    <link rel="stylesheet" href="/assets/fonts/icons/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" id="css-main" href="/assets/css/codebase.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css" type="text/css">  
        <link rel="stylesheet" type="text/css" id="css-theme" href="/assets/css/earth.css">
        

        <link rel="icon" href="/assets/img/logo-crop.png" sizes="192x192" >

    <link rel="icon" src="/assets/img/logo-crop.png" sizes="192x192" >
    
  <title>  @yield('title') </title>
  
  
</head>
<body >
   
  
        @yield('content')
        {{-- @include('layouts.footer') --}}
        {{-- <footer style="position: fixed" class="footer"> <a target="_new"href="https://nomatechnology.com"> Noma Technology  &#169; 2016 </a> </footer> --}}
        {{-- <script src="https://kit.fontawesome.com/8238e9d63d.js" crossorigin="anonymous"></script> --}}
        <script src="/assets/js/codebase.core.min.js"></script>
        <script src="/assets/js/codebase.app.min.js"></script>
        <script src="/assets/js/codebase/app.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBp8XdPDEu9dRjuZQRfgIFyPBRMLm5JcOE&libraries=places"></script>
<script src="/assets/js/jquery.min.js"></script>
<script>
  jQuery(function () {
   Codebase.helpers('table-tools');
});
</script>
<script>
  var searchInput = 'search_input';

  $(document).ready(function(){
var autocomplete;
autocomplete = new google.maps.places.Autocomplete((document.getElementById('location')),{
  types : ['geocode'],
  
})
autocomplete.setComponentRestrictions(
            {'country': ['ng']});
  });
</script>
        <!-- Page JS Code -->
        
     
    </body>

  

</html>