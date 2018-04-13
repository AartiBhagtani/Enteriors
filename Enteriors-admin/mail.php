<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- googlefont -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-pink.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- Bootstrap:  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <!-- stylesheet -->
    <link rel="stylesheet" href="css/style.css"></link>
    <link rel="stylesheet" href="css/form.css"></link>
    <!-- title -->
    <title>Enteriors - Solution for interior designing</title>
    <!-- validate modules included in html5:  -->
    <!-- validation jquery -->
    <!-- form js -->

  </head>
  <body>
    <!-- Login mdl-dialog -->

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="header mdl-layout__header">
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title">Enteriors</span>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
        <!-- Navigation. We hide it in small screens. -->
        <nav class="mdl-navigation mdl-layout--large-screen-only">
          <a class="mdl-navigation__link" href="index.html">Home</a>
          <a class="mdl-navigation__link" href="photo_gallery.html">Photo Gallery</a>
          <a class="mdl-navigation__link" href="form.html">Form</a>
          <a class="mdl-navigation__link" href="testimonials.html">Testimonals</a>
          <a class="mdl-navigation__link" href="Records.html">Show Records</a>
          <a class="mdl-navigation__link" href="mail.php">Send Email</a>
        </nav>
      </div>
    </header>
    <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Enteriors</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="index.html">Home</a>
      <a class="mdl-navigation__link" href="photo_gallery.html">Photo Gallery</a>
      <a class="mdl-navigation__link" href="form.html">Form</a>
      <a class="mdl-navigation__link" href="testimonials.html">Testimonals</a>
      <a class="mdl-navigation__link" href="Records.html">Show Records</a>
      <a class="mdl-navigation__link" href="mail.php">Send Email</a>
  </nav>
</div>
<main  class="mdl-layout__content">
  <div id="regForm">
    <form class="send_mail" action="next2.php" method="post">
      Name : <input type="text" name="name"><br>
      Phone : <input type="number" name="phone" value="phone"><br>
      Email : <input type="email" name="email"><br>
      Message : <br>
      <textarea name="textarea" rows="8" cols="80"></textarea><br>
      <button type="submit" name="button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
        Submit
      </button>
    </form>
  </div>
</main>
<!--
<footer>
  <p>Copyright StayWell Interiors 2018</p>
</footer>:
-->
  </body>
</html>
