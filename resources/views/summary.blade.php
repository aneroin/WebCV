<!DOCTYPE HTML>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="css/normalize.css">
    <script src="js/modernizr-2.8.3.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/animate.css">
    <style>
        .btn-rel-container {
            display:inline-block;
            position: absolute;
            top: 75%;
            left: 0;
            width: 100%;
            padding: 0;
        }

        .stroke-v {
            border-style: none;
            /*border-left-style: solid;
            border-right-style: solid;*/
            border-width: 2px;
            border-color: rgba(0,0,0,0.6);
            margin-top: 6%;
        }

        .small-img {
            position: relative;
            display: block;
            max-width: 80px !important;
            height: auto !important;
            margin-top: 16%;
            margin-bottom: 16%;
            margin-left: auto;
            margin-right: auto;
            color: rgba(0,0,0,0.8);
            fill: currentColor;
        }
    </style>

</head>
<body style="background-color:#f0f0f0; container">
<!-- CONTENT -->

<!-- header -->
<section class="section no-pad-top">
    <div style="position:relative; display:inline-block; height:80%; width: 100%;">
        <div style="max-height:80%; max-height: 80vh; width: 100%; margin:0; padding:0; overflow:hidden; display: flex; align-items: flex-end;">
            <img class="img responsible-img" src="img/photo.png"
                 style="width:100%; width:100vw; bottom:0; height:auto; -webkit-filter: brightness(75%) sepia(40%) hue-rotate(200deg); filter: brightness(75%) sepia(40%) hue-rotate(200deg);">
            </img>
            <span class="btn-rel-container row">
                <a class="col s5 m4 l3 btn waves-effect waves-light grey animated fadeInLeft" href="/files/cv_light.pdf" target="_blank">get a CV</a>
                <a class="col s5 m4 l3 offset-s2 offset-m4 offset-l6 btn waves-effect waves-light teal animated fadeInRight" href="mailto:dev.pavlenko@gmail.com">offer a job</a>
            </span>
        </div>
    </div>
</section>
<!-- end header -->

<!-- pesonal -->
<section class="section container">
    <div class="row">
        <div class="col s12 m8 l6 center offset-m2 offset-l3">
            <h2 class="grey-text text-darken-2"><?php echo $person['firstname'].' '.$person['surname']?></h2>
            <h4 class="grey-text"><?php echo $person['profession'] ?></h4>
            <h5 class="grey-text text-lighten-1"><?php echo date_diff(DateTime::createFromFormat ("Y-m-d",date("Y-m-d")),DateTime::createFromFormat ("Y-m-d",date($person['birthday'])))->y?> years</h5>
        </div>
    </div>
</section>

<div class="divider"></div>

<section class="section container">
    <div class="row">
        <div class="col s12 m8 l6 center offset-m2 offset-l3">
            <div class="row">
                <div class="col s12 m4">
                    <b class="grey-text text-darken-3 flow-text"> <span class="material-icons">room</span> location </b>
                    <p>
                        <?php foreach($locations as $key => $value) {
                            echo "<a class=\"grey-text text-darken-2\" href=\"https://www.google.com/maps/@{$value['coords']},13z\" >{$value['text']}</a><br>";
                        } ?>
                    </p>
                </div>
                <div class="col s12 m4">
                    <b class="grey-text text-darken-3 flow-text"> <span class="material-icons">call</span> phone </b>
                    <p class="grey-text text-darken-2">
                        <?php foreach($phones as $key => $value) {
                            echo "<a class=\"grey-text text-darken-2\" href=\"tel:{$value['number']}\" >{$value['number']}</a><br>";
                        } ?>
                    </p>
                </div>
                <div class="col s12 m4">
                    <b class="grey-text text-darken-3 flow-text"> <span class="material-icons">email</span> mail </b>
                    <p class="grey-text text-darken-2">
                        <?php foreach($mails as $key => $value) {
                            echo "<a class=\"grey-text text-darken-2\" href=\"mailto:{$value['address']}\" >{$value['address']}</a><br>";
                        } ?>
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end personal -->

<div class="divider"></div>

<!-- education -->
<section class="section container">

    <?php
    $even = 0;
    foreach($educations as $key => $value): ?>

        <div class="row animate" data-animation=<?php echo $even%2==0 ? "fadeInRight" : "fadeInLeft"; ?>>
            <div class="col s5"><b class="grey-text text-darken-3 left"><?php echo $value['current'] ? "NOW" : DateTime::createFromFormat ("Y-m-d",date($value['from_date']))->format('Y')."-".DateTime::createFromFormat ("Y-m-d",date($value['to_date']))->format('Y'); ?> </b></div><div class="col s5 offset-s2"><span class="right"><i class="grey-text text-darken-1"><?php echo $value['degree'].': ' ?></i><b class="grey-text text-darken-3"><?php echo $value['name'] ?></b></span></div>
            <h6>
                <div class="col s12 grey-text text-darken-2"><?php echo $value['description']; ?></div>
            </h6>
        </div>
    <?php $even++; endforeach;?>

</section>
<!-- end education -->

<div class="divider"></div>

<!-- technologies -->
<section class="section container">
    <div class="row valign-wrapper">
        <div class="col s2 m3 l3 left">
            <img class="small-img responsive-img animate valign" src="img/technologies/java.svg" data-animation="fadeInLeft" />
            <img class="small-img responsive-img animate valign" src="img/technologies/csharp.svg" data-animation="fadeInLeft" />
            <img class="small-img responsive-img animate valign" src="img/technologies/php.svg" data-animation="fadeInLeft" />
        </div>
        <div class="col s8 m6 l6 stroke-v animate grey-text text-darken-2" data-animation="fadeIn">
            <div>
                <p><b class="grey-text text-darken-3">Enterprise Development:</b></p>
                <p>with Java, including Servlets and JSP applications.</p>
                <p>with C#, using ASP.NET MVC.</p>
            </div>
            <br>
            <div>
                <p><b class="grey-text text-darken-3">Service Development:</b></p>
                <p>with Java, using Spring REST and common JBoss applications.</p>
                <p>with C#, using ASP.NET Core RESTful.</p>
            </div>
            <br>
            <div>
                <p><b class="grey-text text-darken-3">Web Development:</b></p>
                <p>with Java using Spring Boot or JSP / JSF.</p>
                <p>with PHP using any popular framework (Laravel, CodeIgniter, FuelPHP).</p>
                <p>with PHP for any specific purpose from the scratch.</p>
            </div>
        </div>
        <div class="col s2 m3 l3 right">
            <img class="small-img responsive-img animate valign" src="img/technologies/js.svg" data-animation="fadeInRight" />
            <img class="small-img responsive-img animate valign" src="img/technologies/html.svg" data-animation="fadeInRight" />
            <img class="small-img responsive-img animate valign" src="img/technologies/css.svg" data-animation="fadeInRight" />
        </div>
    </div>
</section>
<!-- end technologies -->

<div class="divider"></div>

<!-- mailto -->
<!-- TODO:BACKEND
<section class="section container">
  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12 m6 l4 offset-l2">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s12 m6 l4">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12  m6 l4 offset-l2">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Company Name</label>
        </div>
        <div class="input-field col s12 m6 l4">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m12 l8 offset-l2">
          <textarea id="message" class="materialize-textarea"></textarea>
          <label for="message">Your message</label>
        </div>
      </div>
    </form>
  </div>
</section>
-->
<!-- end mailto -->

<div class="divider"></div>

<!-- buttons -->
<section class="section container">
    <div class="row animate" data-animation="fadeInDown">
        <div class="col s6 center">
            <a class="btn btn-flat grey darken-3 white-text btn-small" href="files/cv.pdf" target="_blank">print CV</a>
        </div>
        <div class="col s6 center">
            <a class="btn btn-flat grey darken-3 white-text" href="mailto:dev.pavlenko@gmail.com">send Email</a>
        </div>
    </div>
</section>

<!-- end buttons -->

<!-- END CONTENT -->
</body>
<footer class="page-footer">
    <div class="footer-copyright">
        <div class="container">
            Presonal Page by Andrii Pavlenko © 2017
        </div>
    </div>
    <!--Get Jquery from CDN or use local one-->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.12.0.min.js"><\/script>')</script>
    <!--Init Plugins for jquery-->
    <script src="js/plugins.js"></script>
    <!--Init Materialize-->
    <script src="js/init.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/viewport.js"></script>
    <!--Scripts for this instance-->
    <script src="js/main.js"></script>
</footer>
</html>
