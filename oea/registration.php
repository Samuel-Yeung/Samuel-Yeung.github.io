<?php


print("<!doctype html>
<html class=\"no-js\" lang=\"en\">
<head>
<meta charset=\"utf-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
<title>Foundation | Welcome</title>
<link rel=\"stylesheet\" href=\"css/foundation.css\" />
<link rel=\"stylesheet\" href=\"css/main.css\" />
<style type=\"text/css\">
.panel h4 {
margin-top: -4px;
margin-bottom: 16px;
font-size: 1.6rem;
font-weight: bold;
}
.panel fieldset p {
margin-top: 6px;
margin-bottom: 0px;
font-size: .8rem;
color: #666;
}
</style>
<script src=\"js/modernizr.js\">


</script>
</head>
<body>

<div class=\"row\">
<div class=\"large-7 large-centered columns\">
<div class=\"panel\">
<form method=\"post\" action=\"register.html\">

<h2>Event Registration</h2>

<h3>OEA Finals</h3>

<p>Date:     March 22, 2014<br>
Location:   <br>  
London Riding Center,<br>
6699 Baily Road, London, ON, Canada</p>  

<p>Organizer:     Jane Charlobious<br>
Email:     jane.charlobious@lrc.com</p>


<fieldset>
<legend>Rider Information</legend>

<p>First Name :</p>
<h4>$name_first</h4>
<p>Last Name :</p>
<h4>$name_last</h4>

<p>Address :</p>
<h4>$address</h4>
<p>City :</p>
<h4>$city</h4>

<p>Province :</p>
<h4>$province</h4>


<p>Postal Code :</p>
<h4>$postal_code</h4>

<p>Gender :</p>
<h4>$gender</h4>


<p>Age :</p>
<h4>$age</h4>


<p>CEA Licence Number :</p>
<h4>$number_licence</h4>

</fieldset>


<fieldset>
<legend>Horse Information</legend>

<p>Name :</p>
<h4>$horse_name</h4>


<p>Gender :</p>
<h4>$horse_gender</h4>


<p>Age :</p>
<h4>$horse_age</h4>


</fieldset>

<input type=\"submit\" name=\"submit\" id=\"submit\" value=\"Return\" class=\"small success button myButton\">
</form>
</div>
</div>
</div>



<script src=\"js/jquery.js\"></script>
<script src=\"js/foundation.min.js\"></script>
<script src=\"js/foundation/foundation.orbit.js\"></script>

<script>
$(document).foundation({
orbit: {
animation: 'fade', // Sets the type of animation used for transitioning between slides, can also be 'fade'
timer_speed: 3000, // Sets the amount of time in milliseconds before transitioning a slide
pause_on_hover: true, // Pauses on the current slide while hovering
animation_speed: 1500, // Sets the amount of time in milliseconds the transition between slides will last
navigation_arrows: true,
slide_number: false,


bullets: true, // Does the slider have bullets visible?
circular: true, // Does the slider should go to the first slide after showing the last?
timer: true, // Does the slider have a timer visible?
variable_height: false, // Does the slider have variable height content?
swipe: true,

}
});
</script>
</body>
</html>
");


?>