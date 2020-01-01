<!DOCTYPE html>
<html class="no-js">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Ajay Square Welfare Association</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-theme.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="skin/default.css">
</head>

<body>
  <section id="header" class="appear"></section>
  <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="fa fa-bars color-white"></span>
					</button>
        <h1><a class="navbar-brand" href="index.php" data-0="line-height:90px;" data-300="line-height:50px;"><i class="fa fa-users fa-1x mar-bot5"></i> Ajay Square Association
					</a></h1>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#section-facilities">Facilities</a></li> 
          <li><a href="#section-events">Events</a></li>      
          <li><a href="#section-contact">Contact</a></li>   
          <li><a href="#section-map">Locate</a></li>       
        </ul>
      </div>
      <!--/.navbar-collapse -->
    </div>
  </div>

  <section class="featured">
    <div class="container">
      <div class="row mar-bot40">
        <div class="col-md-6 col-md-offset-3"> 
          <div class="align-center">
            <i class="fa fa-users fa-5x mar-bot20"></i>
            <h2 class="slogan">Welcome to Ajay Square Association</h2>
            <p>
            This is the official portal for all your plot needs. Please go through the site to more more about the community and discover more neighbours.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- services -->
  <section id="section-facilities" class="section appear clearfix">
    <table class="table table-bordered table-dark" cellspacing="1" width=90%>
      <thead class="thead-dark">
         <tr>
            <th scope="col">Name</th>
            <th scope="col">Facility</th>
            <th scope="col">Mobile</th>
            <th scope="col">Alternate Mobile</th>
        </tr>
      </thead>
      <tbody>
                <?php
                  require 'dbconfig.php';
                  $sevices = $database->select("services", "*");
                  foreach($sevices as $service)
                  {
                      $providerName = $service["providername"];
                      $serviceType = $service["servicetype"];
                      $providerMobile = $service["providermobile"];
                      $providerAltMobile = $service["altmobile"];
                      echo "<tr>";
                        echo "<td>$providerName</td>";
                        echo "<td>$serviceType</td>";
                        echo "<td>$providerMobile</td>";
                        echo "<td>$providerAltMobile</td>";
                      echo "</tr>";
                  }
                ?>
      </tbody>
    </table>        
  </section>
  <!-- /services -->

 <!-- events -->
  <section id="section-events" class="section appear clearfix">  
    <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FKolkata&amp;src=YWpheXNxdWFyZWFzc29jaWF0aW9uQGdtYWlsLmNvbQ&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=ZW4uaW5kaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%2322AA99&amp;color=%23329262&amp;color=%231F753C&amp;showTitle=0"
     width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>
  <!-- /events -->

  <!-- contact -->
  <section id="section-contact" class="section appear clearfix">
    <div class="container">
      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Contact us</h2>
            <p>We are here to help and answer any questions you might have. We look forward to hearing from you :)</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="cform" id="contact-form">
            <div id="sendmessage">
              Your message has been sent. Thank you!
            </div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validation"></div>
              </div>

              <button type="submit" name="submit" class="btn btn-theme pull-left">SEND MESSAGE</button>              
            </form>

          </div>
        </div>
        <!-- ./span12 -->
      </div>

    </div>
  </section>
  
  <!-- map -->
  <section id="section-map" class="appear clearfix">
    <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15559.707606877575!2d80.03853862823021!3d12.847997775536601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a52f6535f5d277b%3A0x72c526dbf7683483!2sGuduvanchery%20Railway%20Over%20Bridge%2C%20Guduvanchery%20Fly%20Over%2C%20Siripi%20Nagar%2C%20Guduvanchery%2C%20Tamil%20Nadu!3m2!1d12.8476652!2d80.05912049999999!4m5!1s0x3a52f71e151bf6c5%3A0xc88805479b0bda21!2sAjay%20Square%2C%20Unnamed%20Road%2C%20GR%20Nagar%2C%20Kutthanur%2C%20Tamil%20Nadu%20603202!3m2!1d12.844316599999999!2d80.0354802!5e0!3m2!1sen!2sin!4v1577376695670!5m2!1sen!2sin" 
     width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>

  <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="js/skrollr.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/jquery.localScroll.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/main.js"></script>
  <script src="contactform/contactform.js"></script>
</body>

</html>
