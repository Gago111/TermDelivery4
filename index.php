
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <title>.</title>
    <script src="scripts/main.js"></script>
    <link id="themecss" rel="stylesheet" type="text/css" href="//www.shieldui.com/shared/components/latest/css/light/all.min.css" />
        <script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <title>Personal Website seth</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <a href="#" class="scrollToTop">Scroll To Top</a>
<!-- <Script>
(document).ready(function(){

  //Check to see if the window is top if not then display button
  $(window).scroll(function(){
      if ($(this).scrollTop() > 100) {
          $('.scrollToTop').fadeIn();
      } else {
          $('.scrollToTop').fadeOut();
      }
  });

  //Click event to scroll to top
  $('.scrollToTop').click(function(){
      $('html, body').animate({scrollTop : 0},800);
      return false;
  });

}); -->
</Script>
  <body>
    <div class="header">
      <h1 class="h1">Mijn CV</h1>
    </div>
    <nav>
      <div class="toggle">
        <div class="menu"><i class="fa fa-bars aria-hidden=" true ""></i></div>
      </div>
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="#link-to-overmij">Over mij</a></li>
        <li><a href="#link-to-skilz">Mijn Vaardigheden</a></li>
        <li><a href="#link-to-hobby">Hobby's</a></li>
      </ul>
    </nav>
        <img class="img" src="img/4.jpg">
        <button><a href="#link-to-contact">Contact me</a></button>

          <h2 class="Aboutme"><a name="link-to-overmij">Over Mij </h2>
          <div id="slideshow">
   <div class="seth1">
     <img src="img/seth.jpg">
   </div>
   <div class="seth2">
     <img src="img/sethberb.jpg">
   </div>
   <div class="seth3">
     <img src="img/sethberb2.jpg">
   </div>
   <div class="seth4">
     <img src="img/SethBois.jpg">
   </div>

</div>
<script type="text/javascript">
         $("#slideshow > div:gt(0)").hide();

         setInterval(function() {
           $('#slideshow > div:first')
             .fadeOut(1000)
             .next()
             .fadeIn(1000)
             .end()
             .appendTo('#slideshow');
         }, 3000);
         </script>

        </div>
            <section>
            <div class="info1">
              <h4>Name</h4>
              <p>Seth Hitijahubessy</p>
              <hr>
            </div>
            <div class="info2">
              <h4>Geslacht</h4>
              <p>Man</p>
              <hr>
            </div>
            <div class="info3">
              <h4>Adres</h4>
              <p>30, Golden Street, Nederland</p>
              <hr>
          </div>
          <div class="info4">
            <h4>Telefoon Nummer</h4>
            <p>06123456789</p>
            <hr>
        </div>
        <div class="info5">
          <h4>Email Adres</h4>
          <p>mail@example.com</p>
          <hr>
      </div>
    </section>




    <style>
     .parallax {
       background-image: url("img/2.jpg");

    /* Set a specific height */
    height: 300px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
     }
    </style>

    <style>
     .parallax2 {
       background-image: url("img/3.jpg");

    /* Set a specific height */
    height: 300px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
     }
    </style>

    <br>

      <div class="box1">
    <div class="progressBar">

      <div class="title htmlColor">Rekenen</div>
      <div class="progress html"></div>
      <div class="progress_value">90%</div>
    </div>
    <div class="progressBar">
      <div class="title cssColor">Boekhouding</div>
      <div class="progress css"></div>
      <div class="progress_value">75%</div>
    </div>
    <div class="progressBar">
      <div class="title jsColor">Flexibel</div>
      <div class="progress js"></div>
      <div class="progress_value">66%</div>
    </div>
    </div>
    <div class="box2">
    <div class="progressBar">
      <div class="title phpColor">Nederlands</div>
      <div class="progress php"></div>
      <div class="progress_value">70%</div>
    </div>
    <div class="progressBar">
      <div class="title ajaxColor">Engels</div>
      <div class="progress ajax"></div>
      <div class="progress_value">85%</div>
    </div>
    <div class="progressBar">
      <div class="title seoColor">Advies</div>
      <div class="progress seo"></div>
      <div class="progress_value">99%</div>
    </div>
    </div>
    <br><br><br><br>
       <h2 class="skilz"><a name="link-to-skilz">Mijn Skills </h2>
    <br>
    <div class="parallax"></div>
    <script>
    $(document).ready(function(){
            $('.html').animate({width:'90%'},2000);
            $('.css').animate({width:'75%'},2000);
            $('.js').animate({width:'66%'},2000);
            $('.php').animate({width:'70%'},2000);
            $('.ajax').animate({width:'85%'},2000);
            $('.seo').animate({width:'99%'},2000);
          });
          </script>
          <br><br>

          <h1 class="mijndiensten"> Mijn diensten </h1>
          <br>  <br>

          <div class="container">
            <div class="services"><i class="fas fa-laptop"></i>
            <h4 class="advies"> Boekhouding </h4>


            <div class="overlay">
              <div class="text">Hello World</div>
            </div>
          </div>
        </div>


        <div class="container">
          <div class="services"><i class="fas fa-calculator"></i>
          <h4 class="advies"> Berkeningen </h4>


          <div class="overlay">
            <div class="text">Hello World</div>
          </div>
        </div>
      </div>



      <div class="container">
        <div class="services"><i class="fas fa-hands-helping"></i>
        <h4 class="advies"> Advies </h4>


        <div class="overlay">
          <div class="text">Hello World</div>
        </div>
      </div>
    </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  <div class="parallax2">
    <h2 class="hobbys"><a name="link-to-hobby">Mijn Hobby's </h2>
    <div class="icons-parent">
    <div class="icon1"><i class="fas fa-futbol"></i>
      <p> Voetbal </p>
    </div>
    <div class="icon1"><i class="fas fa-basketball-ball"></i>
      <p> Basketball </p>
    </div>
    <div class="icon1"><i class="fa fa-book"></i>
      <p> Lezen </p>
    </div>
    <div class="icon1"><i class="fa fa-gamepad"></i>
      <p> Gamen </p>
    </div>
    <div class="icon1"><i class="fa fa-music"></i>
      <p> Muziek </p>
    </div>
    </div>
  </div>

  <div class="container2">
 <h1 class="opleiding"> Mijn Opleiding </h1>
    <div class="school">
      <div class="school-info1">
        <p class="last-year"> 2014 - 2017 </p>
        <h5 class="friese"> Friese poort Wilaanderburen </h5>
      </div>

      <div class="school-info2">
        <p class="second-year"> 2010 - 2014 </p>
        <h5 class="pieter"> Pieter Yelles De Dyk </h5>
      </div>

      <div class="school-info3">
        <p class="first-year"> 2002 - 2010 </p>
        <h5 class="basis"> Basisschool </h5>
      </div>
    </div>
  </div>
    <div class="contactme1">
      <div class="contactMeInfo">
          <h2 class="Adres"><p> Adres </p></h2>
          <h2 class="Telefoon"><p>Telfoon<p></h2>
          <h2 class="mail"><p> Mail </p></h2>
      </div>
        <h5 class="test1">123 San Sebastian, Hill Towers 4567 New York City <br>USA </h5>
          <h5 class="test2"> +222 111 333 4444 <br> +222 111 333 5555 </h5>
            <h5 class="test3">mail@example.com <br> mail2@example.com </h5>
    </div>

            <h1 class="Contactmetitle">Contact Me</h1> <?php
            session_start();
            ?> <div id="message_div"> <?php
            echo $_SESSION["confirm-message"];
            ?> </div>
            <?php
            $_SESSION["confirm-message"] = "";

             ?>
              <script>
              function hideMessage() {
                  document.getElementById("message_div").style.display = "none";
              };
              setTimeout(hideMessage, 4000);
              </script>

              <div class="section2">
              <h3><a name="link-to-contact"> Neem Contact Op</a></h3>
              <form action="mail.php" method="GET">
            <div class="name">
              <input type="text" placeholder="Name" name="name" required="">
            </div>
            <div class="Email">
            <input type="text" name="email" value="" placeholder="Mail">
            </div>
            <div class="Onderwerp">
            <input type="text" placeholder="Onderwerp" name="onderwerp" required="">
            </div>
            <textarea placeholder="Message" name="message" required></textarea>
              <input name="upload" type="submit" value="Stuur">
            </form>
            </div>

              <div class="footer">
                <a href="#"><div class="icon"><i class="fab fa-facebook-f"></i></a></div>
                <a href="#"><div class="icon"><i class="fab fa-twitter"></i></a></div>
                <a href="#"><div class="icon"><i class="fab fa-linkedin-in"></i></a></div>
                <a href="#"><div class="icon"><i class="fab fa-google-plus-g"></i></a></div>
                </div>

              <div class="copyrights">
                <p> &#169; Portfolio. All rights reserved | Inspired by a template | Made by Gago </p>
              </div>
              </div>
  </body>
</html>
