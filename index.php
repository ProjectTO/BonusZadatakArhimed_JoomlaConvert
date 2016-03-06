<?php
/**
 * @package     Joomla.Site
 * @subpackage  Arhimed
 * 
 * @copyright   Copyright (C) 2016 Open Source, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die; ?>

<?php echo '<?xml version="1.0" encoding="utf-8"?'.'>'; ?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Bonus zadatak 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="templates/arhimed/slick/slick-theme.css"/>

    <link rel="stylesheet" type="text/css" href="templates/arhimed/slick/slick.css"/>


    <link rel="stylesheet" href="templates/arhimed/css/animate.css">

    <link rel="stylesheet" type="text/css" href="templates/arhimed/css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="templates/arhimed/css/main.css">

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script> -->

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>

    <!-- <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.0/angular-messages.js"></script> -->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-messages/1.5.0/angular-messages.min.js"></script>
   



</head>
<body ng-app="MainApp">
<div ng-controller="MainController" ng-cloak>
<div class="slika"><a name="here"></a>
<div class="colCenter">
    <div class="logo left"><a href="index.html"><img src="templates/arhimed/img/logo.png"/></a></div>
    <div class="menu right">
      <ul>
        <li class="active"><a href="#here">Uloguj se</a></li>
        <li><a href="#here2">Usluge</a></li>
        <li><a href="#here3">Trial</a></li>
        <li><a href="#here4">Kontakt</a></li>
      </ul>
    </div>
</div>

<div class="colCenter">
  <div class="content left">

    <?php if ($this->countModules('mainTitle')) : ?>
<div>
  <h3>
<jdoc:include type="modules" name="mainTitle" style="none" />
</h3>
</div>
<?php endif; ?>

      <div class="rotatorHome">
        <div id="demo">
        <div><p>Naslov</p>Rotate text over to see glimpse and other effects.</div>
        <div><p>Naslov drugi</p>this text glimpse and other effects. glimpse and other effects. glimpse and other effects.glimpse and other effects.</div>
      </div>
      

      </div>
    </div>

    <div class="loginForm right">
      <a href="index.html"><img src="templates/arhimed/img/login.png"/></a>
      <form name="userInfo">
      <input type="text" class="noFocus" placeholder="Korisničko ime" name="username" ng-model="user.username" ng-minlength="4" 
        ng-maxlength="12" required/>
        <div ng-messages="userInfo.username.$error" role="alert" style="color: red;"ng-if="userInfo.username.$dirty">
        <div ng-message="minlength">Your name is too short.</div>
        <div ng-message="maxlength">Your name is too long.</div>
        <div ng-message="required">Your name is required.</div>
    </div>
    <!-- <div ng-messages="userInfo.username.$error">
          <div ng-message="required">
            You've got to charge something! You can't just <b>give away</b> a Missile Defense
            System.
          </div>
        </div> -->

      <input type="password" class="noFocus" placeholder="Šifra" name="password" ng-model="user.password" ng-minlength="7" 
        ng-maxlength="20" required/>
      <div ng-messages="userInfo.password.$error" role="alert" style="color: red;" ng-if="userInfo.password.$dirty">
        <div ng-message="required">Your password is required.</div>
        <div ng-message="minlength">Your password is too short.</div>
        <div ng-message="maxlength">Your password is too long.</div>
    </div>

      <button id="toto">ULOGUJ SE</button>

    </form>

      <p>Ne mozes se logovati? <a href="#">Kontaktiraj nas.</a></p>
    </div>
  </div>


</div>
<div id="change" class="slika2"><a name="here2"></a>
<div class="menuOrder">
<div class="colCenter">
    <div class="logo2 left"><a href="index.html"><img src="templates/arhimed/img/logo2.png"/></a></div>
    <div class="menu2 right">
      <ul>
        <li><a href="#here">Uloguj se</a></li>
        <li class="active"><a href="#here2">Usluge</a></li>
        <li><a href="#here3">Trial</a></li>
        <li><a href="#here4">Kontakt</a></li>
      </ul>
    </div>
</div>
</div>
<div class="colCenter">
  <div class="circle">
    <div class="rotatorCircle">
        <div id="rote">
        <div name="title" title="slikaArhiva"><img src="templates/arhimed/img/ikonice/arhivaMedijaLarge.png"/><h3>Arhiva medija</h3><p>Prva digitalizovana arhiva medijskih sadržaja
u Crnoj Gori koja sadrži jedinstvenu bazu
članaka i emisija. Klijenti bazu mogu pretraživati
po velikom broju parametara, uključujući i
ključne riječi, osobe, institucije, teme, medij
ili period objave.</p>
</div>
        <div title="slikaPressClipping"><img src="templates/arhimed/img/ikonice/pressClippingLarge.png"/><h3>Press clipping</h3><p>Prva digitalizovana arhiva medijskih sadržaja
u Crnoj Gori koja sadrži jedinstvenu bazu
članaka i emisija. Klijenti bazu mogu pretraživati
po velikom broju parametara, uključujući i
ključne riječi, osobe, institucije, teme, medij
ili period objave.</p>
</div>
      <div title="slikaPressDigest"><img src="templates/arhimed/img/ikonice/pressDigestLarge.png"/><h3>Press digest</h3><p>Prva digitalizovana arhiva medijskih sadržaja
u Crnoj Gori koja sadrži jedinstvenu bazu
članaka i emisija. Klijenti bazu mogu pretraživati
po velikom broju parametara, uključujući i
ključne riječi, osobe, institucije, teme, medij
ili period objave.</p>
</div>
      <div title="slikaAlertClipping"><img src="templates/arhimed/img/ikonice/alertClippingLarge.png"/><h3>Alert clipping</h3><p>Prva digitalizovana arhiva medijskih sadržaja
u Crnoj Gori koja sadrži jedinstvenu bazu
članaka i emisija. Klijenti bazu mogu pretraživati
po velikom broju parametara, uključujući i
ključne riječi, osobe, institucije, teme, medij
ili period objave.</p>
</div>
      <div title="slikaMediaAnalysis"><img src="templates/arhimed/img/ikonice/analizaMedijaLarge.png"/><h3>Analiza medija</h3><p>Prva digitalizovana arhiva medijskih sadržaja
u Crnoj Gori koja sadrži jedinstvenu bazu
članaka i emisija. Klijenti bazu mogu pretraživati
po velikom broju parametara, uključujući i
ključne riječi, osobe, institucije, teme, medij
ili period objave.</p></div>
      <div title="slikaMonitoring"><img src="templates/arhimed/img/ikonice/monitoringLarge.png"/><h3>Monitoring reklamiranja</h3><p>Prva digitalizovana arhiva medijskih sadržaja
u Crnoj Gori koja sadrži jedinstvenu bazu
članaka i emisija. Klijenti bazu mogu pretraživati
po velikom broju parametara, uključujući i
ključne riječi, osobe, institucije, teme, medij
ili period objave.</p></div>
      <div title="slikaSocial"><img src="templates/arhimed/img/ikonice/socialMediaLarge.png"/><h3>Social media analize</h3><p>Prva digitalizovana arhiva medijskih sadržaja
u Crnoj Gori koja sadrži jedinstvenu bazu
članaka i emisija. Klijenti bazu mogu pretraživati
po velikom broju parametara, uključujući i
ključne riječi, osobe, institucije, teme, medij
ili period objave.</p></div>
      <div title="slikaIstrazivanje"><img src="templates/arhimed/img/ikonice/istrazivanjeTrzistaLarge.png"/><h3>Istrazivanje trzista</h3><p>Prva digitalizovana arhiva medijskih sadržaja
u Crnoj Gori koja sadrži jedinstvenu bazu
članaka i emisija. Klijenti bazu mogu pretraživati
po velikom broju parametara, uključujući i
ključne riječi, osobe, institucije, teme, medij
ili period objave.</p></div>
      <div title="slikaPrevod"><img src="templates/arhimed/img/ikonice/prevodLarge.png"/><h3>Prevod</h3><p>Prva digitalizovana arhiva medijskih sadržaja
u Crnoj Gori koja sadrži jedinstvenu bazu
članaka i emisija. Klijenti bazu mogu pretraživati
po velikom broju parametara, uključujući i
ključne riječi, osobe, institucije, teme, medij
ili period objave.</p></div>
      <div title="slikaTranskript"><img src="templates/arhimed/img/ikonice/transkriptLarge.png"/><h3>Transkript</h3><p>Prva digitalizovana arhiva medijskih sadržaja
u Crnoj Gori koja sadrži jedinstvenu bazu
članaka i emisija. Klijenti bazu mogu pretraživati
po velikom broju parametara, uključujući i
ključne riječi, osobe, institucije, teme, medij
ili period objave.</p></div>
      </div>
      </div>

  </div>
</div>
<div class="dotes">
  <div class="colCenter ovdje">

  </div>
</div>
</div>

<div class="slika3"><a name="here3"></a>
<div class="menuOrder">
<div class="colCenter">
    <div class="logo2 left"><a href="index.html"><img src="templates/arhimed/img/logo2.png"/></a></div>
    <div class="menu2 right">
      <ul>
        <li><a href="#here">Uloguj se</a></li>
        <li><a href="#here2">Usluge</a></li>
        <li class="active"><a href="#here3">Trial</a></li>
        <li><a href="#here4">Kontakt</a></li>
      </ul>
    </div>
</div>
</div>
<div class="colCenter">
  <div class="content left" style="margin-top: -40px !important;">

    <?php if ($this->countModules('trialTitle')) : ?>
<div>
  <h3>
<jdoc:include type="modules" name="trialTitle" style="none"/>
</h3>
</div>
<?php endif; ?>

      <div class="wow bounceInUp special" data-wow-duration="2s"><div class="tex">7</div><div class="partR">&nbsp;&nbsp;&nbsp;DANA</div><div class="secPar">GRATIS</div><p>za sve kompanije<br/> i institucije !</p></div>

    
    </div>

    <div class="loginForm right placeholderWhite" style="background-color: rgba(0, 0, 0, 0.6) !important;">

      <h4><font color="white">Isprobajte</font> <font color="red"><b>Press Clipping</b></font></h4>
      <form name="press">

      <input type="text" class="noFocus" placeholder="Vaše ime" name="name" ng-model="pressInformation.name" required/>

       <div ng-messages="press.name.$error" role="alert" style="color: red;" ng-if="press.name.$dirty">
        <div ng-message="required">Your name is required.</div>
    </div>
      <input type="text" class="noFocus" placeholder="Kompanija"name="company" ng-model="pressInformation.company" required/>
      <div ng-messages="press.company.$error" role="alert" style="color: red;" ng-if="press.company.$dirty">
        <div ng-message="required">Your company is required.</div>
    </div>
      <input type="email" class="noFocus" placeholder="Email" name="email" ng-model="pressInformation.email" required/>
      <div ng-messages="press.email.$error" role="alert" style="color: red;" ng-if="press.email.$dirty">
        <div ng-message="required">Your email is required.</div>
        <div ng-message="email">This field must be a valid email address.</div>
    </div>
      <input type="text" class="noFocus" placeholder="Telefon" name="mobile" ng-model="pressInformation.mobile" required/>
      <div ng-messages="press.mobile.$error" role="alert" style="color: red;" ng-if="press.mobile.$dirty">
        <div ng-message="required">Your mobile is required.</div>
    </div>
      <input type="text" class="noFocus noStar" placeholder="Poruka" name="message" ng-model="pressInformation.message"/>
            
      <button onclick="chan()">ULOGUJ SE</button>

      </form>

    </div>
  </div>
</div>
<div class="slika4"><a name="here4"></a>
<div class="menuOrder">
<div class="colCenter">
    <div class="logo2 left"><img src="templates/arhimed/img/logo2.png"/></div>
    <div class="menu2 right">
      <ul>
        <li><a href="#here">Uloguj se</a></li>
        <li><a href="#here2">Usluge</a></li>
        <li><a href="#here3">Trial</a></li>
        <li class="active"><a href="#here4">Kontakt</a></li>
      </ul>
    </div>
</div>
</div>

<div class="colCenter" style="position: relative !important;">

  <div id="map" class="wow slideInUp" data-wow-duration="1s" data-wow-delay="1s"></div>

<div class="loginForm wow slideInLeft" style="width: 420px !important; position: absolute; bottom: -160px;left: -30px;" data-wow-duration="2s" data-wow-delay="1s">
  <h2 style="color: #BB0007; margin-top: -10px">Imate pitanje za nas?</h2>

    <input type="text" class="noFocus" style="width: 47% !important;" placeholder="Vaše ime" ng-model="question.name"/>
    <input type="text" class="noFocus" style="width: 47% !important; margin-left: 20px;" placeholder="Email" ng-model="question.email"/>
    <input type="text" class="noFocus" style="width: 47% !important;" placeholder="Telefon" ng-model="question.mobile"/>
    <input type="text" class="noFocus" style="width: 47% !important; margin-left: 20px;" placeholder="Poruke" ng-model="question.message"/>

      <button id="clickMe" style="width: 70% !important">POŠALJI PORUKU</button>
    </div>

 <?php if ($this->countModules('contactInfo')) : ?>
 <div id="thisChange" class="right contact wow slideInRight" data-wow-duration="2s" data-wow-delay="1s">
<jdoc:include type="modules" name="contactInfo" style="none"/>
</div>
<?php endif; ?>
    
 

</div>


</div>

<div class="wrapFooter">
<div class="footer">
  <div class="colCenter">
  <a href="https://www.facebook.com/arhimed.me" target="_blank"><div class="social facebook wow bounceInLeft" data-wow-duration="1s" data-wow-delay="2s">&#62220;</div></a>
  <a href="https://twitter.com/arhimed_me" target="_blank"><div class="social twitter wow bounceInLeft" data-wow-duration="1s" data-wow-delay="3s">&#62217;</div></a>
  <a href="https://www.linkedin.com/company/arhimed" target="_blank"><div class="social linkedin wow bounceInLeft" data-wow-duration="1s" data-wow-delay="4s">&#62232;</div></a>
 
 <?php if ($this->countModules('footerCopyright')) : ?>
<a href="http://www.bild-studio.com/" style="color: #363636;" target="_blank">
<div class="right copyright">
<jdoc:include type="modules" name="footerCopyright" style="none"/>
</div>
</a>
<?php endif; ?>
</div>

</div>
</div>
</div>


</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

 <!-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/X.Y.Z/angular-cookies.js"></script> -->

<script type="text/javascript" src="templates/arhimed/js/app.js"></script>

<script type="text/javascript" src="templates/arhimed/js/controllers/MainController.js"></script>

<script type="text/javascript" src="templates/arhimed/js/jquery-2.0.2.js"></script>

<script type="text/javascript" src="templates/arhimed/js/jquery.stellar.min.js"></script>

<script type="text/javascript" src="templates/arhimed/slick/slick.js"></script>

<script type="text/javascript" src="templates/arhimed/snazzymaps/snazzy.js"></script>

<script type="text/javascript" src="templates/arhimed/js/slideSlow.js"></script>

<script type="text/javascript" src="templates/arhimed/js/wow.min.js"></script>

<script type="text/javascript" src="templates/arhimed/js/slickSetting.js"></script>

<script type="text/javascript" src="templates/arhimed/js/fullScreen.js"></script>

<script type="text/javascript" src="templates/arhimed/js/wowInitialize.js"></script>


</body>
</html>