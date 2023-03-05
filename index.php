<?php
session_start();
$title = "Welcome to Hämeenlinna!";
include"../webprogramming23_team3/header.php" ?>

<center>
      <img class="img-fluid" src="../webprogramming23_team3/pictures/backup_hameenlinna.jpg" alt="hameenlinna" id="header-image"/>
</center
<section>

<!-- Fahimeh's section-->

<div class="container" id="news">
      <div class="row g-3">
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card">
            <img
              src="pictures/hamko-haalarit.jpg"
              alt="HAMK"
              class="card-img-top"
              style="width: 100%"
            />
            <div class="card-body" id="news_card">
              <h5 class="card-title">HAMK New</h5>
              <p class="card-text">
                Joint application period closed on Wednesday 18.1.2023. All of
                HAMK’s Bachelor’s and Master’s Degree programmes in english were
                included in the application, with a total of 8160 applicants
                from all over the world. The number of applicants more than
                tripled compared to the previous year. New forestry degree
                programme also received almost 450 applications. HAMK’s newest
                degree programmes in the natural resources also attracted
                applicants.
              </p>
              <button type="button" class="btn btn-outline-warning">
                <a
                  href="https://www.hamk.fi/applicants/?lang=en"
                  target="_blank"
                  >More Info</a
                >
                <span>&rarr;</span>
              </button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card">
            <img
              src="pictures/hamko-hassuhamsu-300x199.jpg"
              alt="HAMKO"
              class="card-img-top"
              style="width: 100%"
            />
            <div class="card-body">
              <h5 class="card-title">Apply to Event Team</h5>
              <p class="card-text">
                The event team is a good way to gain experience in organizing
                events. That experience is useful in a surprising number of jobs
                and hobbies. Our event managers have a lot of fun coming up, and
                we are looking for enthusiastic participants to join the team.
                The biggest events of the year, which HAMKO organizes each year,
                are the Loppurysäys in the spring and the Alkupamaus in the
                autumn, and we also participate in organizing the Hämeenlinna
                Appro.
              </p>
              <button type="button" class="btn btn-outline-warning">
                <a
                  href="https://hamko.fi/en/apply-to-event-team-2/"
                  target="_blank"
                  >More Info</a
                >
                <span>&rarr;</span>
              </button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card">
            <img
              src="pictures/Where-to-See-the-Northern-Lights-in-Finland-Lapland.jpg"
              alt="LAPLAND"
              class="card-img-top"
              style="width: 100%;"
            />
            <div class="card-body">
              <h5 class="card-title">Lapland calls in February</h5>
              <p class="card-text">
                Fancy the ultimate Finnish experience? Go North to Finnish
                Lapland! Join Timetravels and HAMKO in going 300 kilometers
                beyond the Arctic Circle to the heartland of the Laplands
                wilderness, Vasatokka! The trip is from Monday, February 27 to
                Sunday, March 5 See the incredible nature, enjoy a variety of
                winter fun in the snow and sauna, learn about life and culture
                of the North and most importantly, meet Santa and the reindeers.
              </p>
              <button type="button" class="btn btn-outline-warning">
                <a
                  href="https://www.timetravels.com/adventure-to-northern-lapland-vasatokka-0122-lfv-00000208.html"
                  target="_blank"
                  >More Info</a
                >
                <span>&rarr;</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
      // checking session user_id to see if user is logged in
      if(isset($_SESSION['user_id']))
      {
        // if user is logged in, the button will show
        echo '<div class="newsartbtn">
        <button type="button" class="btn btn-warning">  <a href="newsarticle.php" target="_blank">Click here to add news </a></button>
        </div> ';
      }
    ?>

    <!-- End of Fahimeh's section-->


    <!-- Joonas' section -->
    <!-- Creating a section for ID=carousel-->
    <section id="carousel">
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#carouselExampleIndicators"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div
            class="carousel-item active"
            style="background-image: url('../webprogramming23_team3/pictures/slide_1.jpg')"
          >
            <div class="container">
              <h2>Häme castle</h2>
              <p>
                Built in the 13th century, as a military fortress. Now it is
                considered to be one of the biggest symbols of the city. The
                medieval festival of Hämeenlinna is held in it's surroundings at
                the end of every August.
              </p>
            </div>
          </div>
          <div
            class="carousel-item"
            style="
              background-image: url(https://www.discoveringfinland.com/wp-content/uploads/2010/09/Sibeliuksen-syntym%C3%A4koti_ulkoa.jpg);
            "
          >
            <div class="container">
              <h2>Sibelius' House</h2>
              <p>
                In 1955, a street in the center of Hämeenlinna was named after
                the master composer, Jean Sibelius, and his birthplace was
                opened to the public in 1965. Along with the city, the
                Hämeenlinna Sibelius Society cherishes the master composer's
                legacy in Hämeenlinna.
              </p>
            </div>
          </div>
          <div
            class="carousel-item"
            style="background-image: url('../webprogramming23_team3/pictures/slide_3.jpg')"
          >
            <div class="container">
              <h2>Häme University of Applied Science</h2>
              <p>
                The university's center is located in Hämeenlinna. Its
                programmes are coordinated with industry and commerce. HAMK also
                offers research and development services, professional teacher
                education, open University studies.
              </p>
            </div>
          </div>
          <div
            class="carousel-item"
            style="background-image: url('../webprogramming23_team3/pictures/slide_4.jpeg')"
          >
            <div class="container">
              <h2>Aulanko</h2>
              <p>
                Aulanko is part of Hämeenlinna, which is known for its park
                forest. The park has a nature reserve and versatile hobby and
                outdoor recreation areas. Aulango has, among other things, the
                hotel Scandic Aulanko and its connected spa, two golf courses,
              </p>
            </div>
          </div>
          <div
            class="carousel-item"
            style="background-image: url('../webprogramming23_team3/pictures/slide_5.jpeg')"
          >
            <div class="container">
              <h2>Iittala Village</h2>
              <p>
                Hämeenlinna's Iittala is known as a village of crafts, design
                and art, which is visited annually by more than 100,000 domestic
                and international visitors, enriching the life of the entire
                village at the same time.
              </p>
            </div>
          </div>
          <div
            class="carousel-item"
            style="background-image: url('../webprogramming23_team3/pictures/slide_6.jpeg')"
          >
            <div class="container">
              <h2>Know a cool place?</h2>
              <p>
                Know a cool place you would like to share with the rest of us?
                Have you found a hidden gem while exploring Hämeenlinna? Tip us
                via form below and we will add it here to share!
              </p>
            </div>
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
    </section>
    <div class="container">
      <div class="row">
        <div class="col-sm-2">
          <a
            href="https://www.kansallismuseo.fi/en/haemeenlinna"
            target="_blank"
          >
            <button type="button" class="btn btn-light">#Häme Castle</button>
          </a>
        </div>
        <div class="col-sm-2">
          <a
            href="https://www.hameenlinna.fi/en/tourism-and-events/jean-sibelius-and-hameenlinna/"
            target="_blank"
          >
            <button type="button" class="btn btn-light">#Sibelius</button>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="https://www.hamk.fi/en/" target="_blank">
            <button type="button" class="btn btn-light">#HAMK</button>
          </a>
        </div>
        <div class="col-sm-2">
          <a
            href="https://www.hameenlinna.fi/en/tourism-and-events/aulanko-the-beauty-of-finnish-nature/"
            target="_blank"
          >
            <button type="button" class="btn btn-light">#Aulanko</button>
          </a>
        </div>
        <div class="col-sm-2">
          <a
            href="https://iittalavillage.fi/en/the-iittala-glass-factory/"
            target="_blank"
          >
            <button type="button" class="btn btn-light">#Iittala</button>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="#footer">
            <input class="btn btn-light" type="submit" value="#I know!" />
          </a>
        </div>
      </div>
    </div>
<!-- PHP feature - Location form -->
  <!-- Version 2.0 with simple JS. 
  Now I use action="submit.php" for submitting data, if successfully submitted, redirect to new page submit_success.php-->
  <form id="my-form" action="submit.php" method="post" name="locForm">
  <label for="location">Location:</label>
  <input type="text" id="location" name="location" placeholder="Share your location!" required onblur="locationVal()">

  <label for="link">Link:</label>
  <input type="text" id="link" name="link" placeholder="Enter URL here" required onblur="validateForm()">

  <label for="description">Description:</label>
  <textarea id="description" name="description" placeholder="Description about the location"></textarea>

  <br><input class="formSubmit" name="submit" type="submit" value="Submit">
</form>

    <!-- End of Joonas' Section -->

    <!-- Vicky's Section-->
    <div class="container" alt="why" id="why">
      <h3 class="w-h"><br /><br />Why Hämeenlinna?<br /><br /></h3>
      <div class="container"></div>

      <div class="row">
        <!--first row-->
        <div class="col-md-4" align="center">
          <div class="reasons">
            Beautiful nature<br />(Aulanko <br />
            park)
          </div>
        </div>
        <div class="col-md-4" align="center"><!--empty space--></div>
        <div class="col-md-4" align="center">
          <div class="reasons">
            Opportunity <br />to study at a <br />
            modern university
          </div>
        </div>
      </div>

      <div class="row">
        <!--second row-->
        <div class="col-md-4" align="center"><!--empty space--></div>
        <div class="col-md-4" align="center">
          <div class="reasons">
            Rich culture<br />(the oldest inland city in Finland)
          </div>
        </div>
        <div class="col-md-4" align="center"><!--empty space--></div>
      </div>

      <div class="row">
        <!--third row-->
        <div class="col-md-4" align="center">
          <div class="reasons">
            Accessible, close to the capital<br />and other mayor cities
          </div>
        </div>
        <div class="col-md-4" align="center"><!--empty space--></div>
        <div class="col-md-4" align="center">
          <div class="reasons">
            Full of entertainment <br />
            (especially <br />for student)
          </div>
        </div>
      </div>
    </div> <!-- End of "WHY" container-->
      <!-- End of Vicky's Section-->

      <!-- SHammi's Section1-->

<section id="link4" style="padding: 100px 0px 100px 0px">
  <div class="container" alt="link-4">
    <div class="row">
      <div class="col-md-6">
      <h3>Useful links</h3>
    </div>
    <div class="col-md-6">
      <h3><a href="../webprogramming23_team3/login.php">Enter your organization data</a></h3>
    </div>

<div class ="container" alt ="trying">
  <div class ="row" alt ="r-and-s">
    <div class ="col-md-6" alt ="r">
      <!-- Reatuarant-->
      <div class="container wrapper">
        <div class="row ">
          <div
            class="card mb-3 bgcard"  style="max-width: 540px;  ">
            <div class="row g-0 " >
              <div class="col-md-4">
                <img  src="pictures/espresso-2.jpg"    class="img-fluid rounded-start"
                  alt="logo"
                  style="padding-top: 10px;">
              </div>
  
              <div class="col-md-8">
                <div class="card-body" >
                  <h5 class="card-title" class="linkCap">
                    Restaurants and Cafe
                  </h5>
                  <a
                    href="https://fi.espressohouse.com/loyda-meidat/sibeliuksenkatu-hameenlinna"
                    target="_blank"
                    class="deco"
                  >
                    Espresso-House </a
                  ><br />
  
                  <a
                    href="https://steakhousehml.fi/"
                    target="_blank"
                    class="deco"
                    
                  >
                    Steak-house </a
                  ><br />
  
                  <a
                    href="https://www.laurell.fi/"
                    target="_blank"
                    class="deco"
                    
                  >
                    Café Laurell
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  
  <!--restuant end-->
    </div>
    <div class ="col-md-6" alt ="s">
      <!-- Social and Health-->
<div class="container">
  <div class="row" >
    <div
      class="card mb-3 bgcard"  style="max-width: 540px; ">
      <div class="row g-0">
        <div class="col-md-4">
          <img  src="pictures/health.jpg"  class="img-fluid rounded-start"
            alt="logo"
            style="padding-top: 20px;">
        </div>

        <div class="col-md-8">
          <div class="card-body" >
            <h5 class="card-title" class="linkCap">
              Social and Health
            </h5>
            <a
              href="https://www.hameenlinna.fi/sosiaali-ja-terveys/terveyspalvelut/"
              target="_blank"
              class="deco"
            >
              Health Services </a
            ><br />

            <a
              href="https://www.hameenlinna.fi/sosiaali-ja-terveys/ikaihmisten-palvelut/"
              target="_blank"
              class="deco"
            >
              Elderly Services </a
            ><br />

            <a
              href="https://www.hameenlinna.fi/sosiaali-ja-terveys/vammaispalvelut/"
              target="_blank"
              class="deco"
             >
              Disability Services
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Social and Health section end-->
    </div>
  </div>
  <div class ="row" alt ="t-and-e">
    <div class ="col-md-6" alt ="t">
      <!-- Transport -->
    <div class="container wrapper">
      <div class="row" >
        <div
          class="card mb-3 bgcard"  style="max-width: 540px; ">
          <div class="row g-0">
            <div class="col-md-4">
              <img  src="pictures/transport.jpg"                 class="img-fluid rounded-start"
                alt="logo"
                style="padding-top: 10px;">
            </div>
    
            <div class="col-md-8">
              <div class="card-body" >
                <h5 class="card-title" class="linkCap">
                  Transport
                </h5>
                <a
                  href="https://kauppa.waltti.fi/en/"
                  target="_blank"
                  class="deco"
                >
                  Public Transport </a
                ><br />
    
                <a
                  href="https://www.vr.fi/en"
                  target="_blank"
                  class="deco"
                  
                >
                Vossloh Rail Services (VR) </a
                ><br />
    
                <a
                  href="https://www.onnibus.com/etusivu"
                  target="_blank"
                  class="deco"
                  
                >
                  OnniBus
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Transport end-->
    </div>
    <div class ="col-md-6" alt ="e">
      <!-- Early Childhood section start-->
<div class="container">
  <div class="row " >
    <div
      class="card mb-3 bgcard"  style="max-width: 540px; min-height: 136px;">
      <div class="row g-0">
        <div class="col-md-4" style="vertical-align: middle;">
          <img  src="pictures/earlychildhood.jpg"    class="img-fluid rounded-start"
            alt="early-logo"
            style="padding-top: 10px; ">
        </div>

        <div class="col-md-8">
          <div class="card-body" alt ="card-body-early">
            <h5 class="card-title" class="linkCap">
              Early Childhood Education
            </h5>
            <a
              href="https://www.hameenlinna.fi/varhaiskasvatus-ja-koulutus/esiopetus/"
              target="_blank"
              class="deco"
            >
              Preschool Education </a
            ><br />

            <a
              href="https://www.hameenlinna.fi/varhaiskasvatus-ja-koulutus/varhaiskasvatus/"
              target="_blank"
              class="deco"
              
            >
              Early Childhood Education </a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Early childhood section end-->
    </div>
  </div>
  <div class ="row" alt ="c-and-u">
    <div class ="col-md-6" alt ="c">
      <!-- Cultural section start-->
    <div class="container ">
      <div class="row" >
        <div class="card mb-3 bgcard"  style="max-width: 540px; min-height: 136px;" id="cardHeight">
          <div class="row g-0">
            <div class="col-md-4" style="padding-top: 10px;">
              <img  src="pictures/culture.jpg"   class="img-fluid rounded-start"
                alt="logo"
                style="padding-top: 10px;">
            </div>
    
            <div class="col-md-8">
              <div class="card-body" >
                <h5 class="card-title" class="linkCap">
                  Cultural and Leisure
                </h5>
                <a
                  href="https://www.hameenlinna.fi/matkailu-ja-tapahtumat/kohteita/museot/"
                  target="_blank"
                  class="deco"
                >
                  Museum </a
                ><br />
    
                <a
                  href="https://www.hameenlinna.fi/kulttuuri-ja-liikunta/liikunta-ja-ulkoilu/hiihtoladut/"
                  target="_blank"
                  class="deco"
                  
                >
                  Ski Slopes </a
                ><br />
    
                <a
                  href="https://kirjastonvaraamo.hameenlinna.fi/"
                  target="_blank"
                  class="deco"
                  
                >
                  Main Library
                </a> &nbsp;&nbsp;
                <a
                  href="https://www.hameenlinna.fi/hallinto-ja-talous/avustukset/minipilotit/"
                  target="_blank"
                  class="deco"
                  
                >
                  Mini Pilots
                </a>
    
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of cultural section -->

    </div>
    <div class ="col-md-6" alt ="u">
      <!-- University section start-->
<div class="container">
  <div class="row " >
    <div
      class="card mb-3 bgcard"  style="max-width: 540px; min-height: 136px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img  src="pictures/hamkkk.jpg"  class="img-fluid rounded-start"
          alt="hamk" style="padding-top: 10px; padding-bottom: 6px;"
          >
        </div>

        <div class="col-md-8 "  >
          <div class="card-body " alt ="card-body-uni" style="vertical-align: middle;" >
            <h5 class="card-title" class="linkCap">
              University of Applied Sciences
            </h5>
            <a
              href="https://www.hamk.fi/"
              target="_blank"
              class="deco"
            >
              HAMK University </a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end of uni section-->
    </div>
  </div>

</div>

<!-- <script>
function submitAlert() {
  alert("Submit successfully sent!");
}
</script> -->
<?php include "../webprogramming23_team3/footer.php" ?>