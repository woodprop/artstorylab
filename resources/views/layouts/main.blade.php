<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="minimum-scale=1.0, target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="320">
    <title>ARTSTORYLAB | @yield('title')</title>
    <link rel="stylesheet" href="css/fakeLoader.css">
    <link rel="stylesheet" href="js/fancyBox/source/jquery.fancybox.css" media="screen"/>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles2.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/adaptive2.css">
    <link rel="stylesheet" href="css/adaptive.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/jquery.fullPage.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css'>
</head>

<body>
<div id="fakeloader">
</div>

@yield('content')


<script src="js/jquery-1.12.1.js"></script>
<script src="js/fakeLoader.min.js"></script>
<script>
    $(document).ready(function(){
        $("#fakeloader").fakeLoader({
            timeToHide:1200,
            bgColor:"#000",
            spinner:"spinner1",
            // imagePath:"template/img/loader.png" //If you want can you insert your custom image
        });
    });
</script>
<script src="js/jquery.fullPage.js"></script>
<script src="js/scrolloverflow.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.arcticmodal.js"></script>
<script src="js/fancyBox/source/jquery.fancybox.js"></script>
<script src="js/mask.js"></script>
<script src="js/script.js"></script>
</body>
</html>
