

<style> <?php include 'style.css'; ?> </style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="sub-header">
        <nav>
          <a href="index.html"><img src="../eduford_img/logo.png"></a>
          <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="HideMenu()"></i>
            <ul>
              <li><a href="index.html">HOME</a></li>
              <li><a href="aboutus.html">ABOUT</a></li>
              <li><a href="Courses.html">COURSES</a></li>
              <li><a href="blogs.html">BLOGS</a></li>
              <li><a href="contact.html">CONTACT</a></li>
            </ul>
          </div>
          <i class="fa fa-ellipsis-v" onclick="ShowMenu()"></i>

        </nav>
        <div class="text-box">
            <h1>Contact Us</h1>
      </section> 
      <!--Contact Us-->
      <section class="location">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497698.6600798865!2d77.35073573336324!3d12.954517008640542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1624989383720!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </section>
      <section class="contact-us">
          <div class="row">
              <div class="contact-col">
                  <div>
                      <i class="fa fa-home"></i>
                      <span>
                          <h5>XYZ Building, Main Market</h5>
                          <p>Banglore,Karnataka,India</p>
                      </span>
                  </div>
                  <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>099999999999</h5>
                        <p>Monday to Saturday, 10Am to 6PM</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>contact@eduford.com</h5>
                        <p>Email us your queries</p>
                    </span>
                </div>
              </div>
              <div class="contact-col">
                  <form action="style.php" method="POST">
                     <input type="text" placeholder="Enter your Name" name="name" required>
                     <input type="email" placeholder="Enter your Email"name="email" required>
                     <input type="text" placeholder="Enter the subject" name="subject" required>
                     <textarea rows="8" placeholder="Enter the message" name="msg" required></textarea>
                     <button type="submit" class="hero-btn red-btn" name="submit" value="submit">Send Message</button>
                  </form>
              </div>
          </div>
      </section>
      <!--Footer-->
    <section class="footer">
        <h3>About Us</h3>
        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti<br> quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,</p>
         <div class="icons">
             <i class="fa fa-facebook"></i>
             <i class="fa fa-twitter"></i>
             <i class="fa fa-linkedin"></i>
             <i class="fa fa-instagram"></i>
         </div>
    </section>
    <!---Javascript for menu toggle-->>
    <script>
        var navLinks=document.getElementById("navLinks");
           function ShowMenu()
           {
               navLinks.style.right="0";
           }
           function HideMenu()
           {
               navLinks.style.right="-200px";
           }
    </script>

</div>
</body>
</html>