<?php

include("db.php");

$str=mysqli_real_escape_string($con,$_GET["str"]);

//Get data's from the Table
if(isset($str))
{
$sql_query="SELECT * FROM wishes WHERE str='$str'";
$result_set=mysqli_query($con,$sql_query) or die('error');
$user_wish=mysqli_fetch_array($result_set);
}

?>
<?php

// redirect to 404 page
if($user_wish == false)
{
header('HTTP/1.1 404 Not Found');
echo 'Sorry, the user Wish does not exist <a href="/">Create New</a>';
}
else
{ 
?>

<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="HandheldFriendly" content="True" />
<meta name="theme-color" content="#9b59b6">
<meta name="robots" content="index,follow" />
<?php $current_page = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 echo '<link rel="canonical" href="'.$current_page.'" />'; ?>


    <!-- Seo Meta Tags -->
    <title>Happy New year 2019 - Expressing wishes Heart full on New Year</title>
    <meta name="description" content="Happy new year greetings 2019 from synkh technologies: wish your loved ones a pleasant Happy New Year wishes in 2019 with our attractive greeting and a Specially designed Web page."/>
    <link rel="shortcut icon" href="favicon.png" type="image/png" />

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Happy New year 2019 - Synkh technologies wishes Heart full on New Year" />
    <meta name="twitter:description" content="Happy new year greetings 2019 from synkh technologies: wish your loved ones a pleasant New Year wishes in 2019 with our attractive greeting and a Specially designed Web page." />
    <meta name="twitter:image" content="../image/happy-newyear2019-web2.png" />
    <meta name="twitter:url" content="<?php echo $current_page; ?>" />
    <meta name="twitter:site" content="@SynkhTechnolog1" />

    <!-- Facebook Open Graph data -->
    <meta property="og:title" content="Happy New year 2019 - Synkh technologies wishes Heart full on New Year" />
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?php echo $current_page; ?>" />
    <meta property="og:image" content="../image/happy-newyear2019-web2.png" />
    <meta property="og:image:alt" content="Happy new Year" />
    <meta property="og:description" content="Happy new year greetings 2019 from synkh technologies: wish your loved ones a pleasant Happy New Year wishes in 2018 with our attractive greeting and a Specially designed Web page." />
    <meta property="og:site_name" content="Happy New year" />
    <meta property="fb:app_id" content="YOUR FB APP ID" />
    <meta property="article:publisher" content="https://www.facebook.com/Synkh-Technologies-Pvt-Ltd-499923657178943/" />

    <!-- Google+ Meta Tags. -->
    <meta itemprop="name" content="Happy New year 2019 - Synkh technologies wishes Heart full on New Year">
    <meta itemprop="description" content="Happy new year greetings 2019 from synkh technologies: wish your loved ones a pleasant Happy New Year wishes in 2018 with our attractive greeting and a Specially designed Web page.">
    <meta itemprop="image" content="../image/happy-newyear2019-web2.png">

    <link rel="stylesheet" type="text/css" href="build/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu" type="text/css" media="all"/>
    <link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="build/css/main.css">
    <script src="build/js/jquery.fireworks.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body class="demo">
<br />

<!-- Ads -->
<div class="container">
<div class="row">
<div class="col-lg-6 col-lg-offset-3 text-center">

<!-- Your Google Adsense Code -->

</div>
</div>
</div>
<br />

<section class="post-content">
<div class="container">
<div class="row">
<div class="col-lg-6 col-lg-offset-3 text-center">

<div class="panel panel-info">
<div class="panel-heading panel-heading-custom"><img src="build/image/final logo.png"width="50%" height="25%"/><br><br>
<h4 class="phead section-heading"><b>Wishes From - <?php echo $user_wish['title']; ?></b></h4>
</div>
<div class="panel-body">
<h2 class="hello-head">Happy New Year</h2>
<div class="text-center">
<br />
<img class="animated infinite tada" src="build/image/happynewyear2019-web1.png" width="300" alt="Happy New Year">
</div>
<br />
<br />
<p class="post-title text-center">I may not be the most important person in your life.<br>
    I just hope when you hear my name, you smile  and say,<br>
    ” that’s my friend “<br/>
<b>Wish you Happy new year.</b></p>
<h3 class="animated infinite pulse text-center"><b><i class="fa fa-star" aria-hidden="true"></i> <?php echo $user_wish['title']; ?> <i class="fa fa-star" aria-hidden="true"></i></b></h3><br/>
</div>
</div>

<!-- Social Share -->
<div class="text-center" >
<div class="sharebuttons btn-group btn-group-lg">
<a class="btn btn-whatsapp" href="whatsapp://send?text=<?php echo rawurlencode($user_wish['title']); ?>%20💯%20Sending%20you%20a%20New%20Year%20Greetings%20🎁%20👉%20<?php echo $current_page; ?>" target="_blank"><i class="fa fa-whatsapp"></i> <span>Share</span></a>
<a class="btn btn-facebook" href="https://facebook.com/sharer.php?u=<?php echo $current_page; ?>" target="_blank"><i class="fa fa-facebook"></i> <span>Share</span></a>
</div>
</div>

</div>
</div>
</div>
</section>
<!-- Greeting Card End -->
<br />

<!-- Greeting Maker Form -->
<div class="container">
<div class="row">
<div class="col-lg-6 col-lg-offset-3 text-center">
<div class="panel panel-success">
<div class="panel-heading panel-heading-custom">
<h2 class="phead section-heading">Create your New year Greeting</h2>
</div>
<div class="panel-body">
<form method="post" action="http://synkhwishes.byethost5.com" class="form-inline">
<p class="para">Enter your name to wish your friends and Family memebers.</p>
<div class="form-group">
<input type="text" class="form-control" id="title" onkeydown="validateAlpha();" name="title" maxlength="25" placeholder="Enter Your Name" required>
</div>
<button type="submit" name="create-wish" class="btn btn-success">Create</button>
</form>
</div>
</div>
</div>
</div>
</div>
<br />
<footer class="home-footer text-center">
<p class="lnf footer-text">Copyright &copy;  <a href="http://www.synkh.co.in"> Synkh Technologies.</a></p>
</footer>

<!-- jQuery -->
<script src="build/js/jquery-min.js"></script>
<script src="build/js/bootstrap.min.js"></script>
<script src="build/js/jquery.fireworks.js"></script>

<script>

    function validateAlpha(){
    $('#error-display').hide();
    $('#title').keypress(function (e) {
    var regex = new RegExp("^[a-zA-Z0-9. ]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }

    e.preventDefault();
    return false;
    });
}
</script>
<script>
    $('.demo').fireworks({
       /* sound: true, // sound effect*/
        opacity: 0.1,
        width: '100%',
        height: '100%'
    });
</script>
</body>
</html>
<?php
}
?>