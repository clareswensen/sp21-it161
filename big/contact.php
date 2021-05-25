<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Web Developer Examples and Resources by Clare Swensen</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/big.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script> 
 </head>
 <body>
   <main>
    <header>
      <h1><a href="index.html">Web Developer Examples and Resources by Clare Swensen</a></h1>
      <nav id="cssmenu">
          <ul>
             <li><a href="../index.html"><i class="fa fa-fw fa-institution"></i>IT161</a></li>
             <li><a href="index.html"><i class="fa fa-fw fa-home"></i> BIG</a></li>
             <li><a href="accessibility.html"><i class="fa fa-fw fa-globe"></i> Accessibility</a></li>
             <li><a href="smo.html"><i class="fa fa-fw fa-thumbs-o-up"></i> SMO</a></li>
             <li><a href="gallery.html"><i class="fa fa-fw fa-camera-retro"></i> Images</a></li>
             <li><a href="#">Google Tools</a>
                <ul>
                   <li><a href="seo.html"><i class="fa fa-fw fa-desktop"></i> SEO</a></li>
                   <li><a href="calendar.html"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
                   <li><a href="map.html"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
                </ul>
             </li>
             <li><a href="webcam.html"></i> Webcam</a></li>
             <li><a href="contact.php"><i class="fa fa-fw fa-server"></i> Contact</a></li>
          </ul>
      </nav>
    </header>
     
      <section class="fullwidth">
        <h2 class="subheader">Contact Clare</h2>
        <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "clare.swensen@seattlecentral.edu";  //place your/your client's email address here
        $toName = "Clare Swensen"; //place your client's name here
        $website = "Clare Swensen Big Website IT161";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
      </section>
  
     
     <footer>
      <p><small>&copy; 2021 by <a href="contact.php">Contact Clare Swensen</a>, All Rights Reserved ~ <a href="https://validator.w3.org/nu/?doc=https://web-students.net/site198/it161/index.html" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
   </main> 
</body>
</html>