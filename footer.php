</div>
</section>

    <!-- Teamwork / Footer-->
    <div class="footer" alt="link-5">
      <div id="footer" alt="link-5">
        <div class="container">
          <div class="row">
            <a href="#">
              <img
                class="hameenlinna-logo"
                src="../webprogramming23_team3/pictures/hameenlinna-logo.png"
                width="60"
              />
            </a>
          </div>
          <div class="row">
            <div class="col-md-4 item">
              <h3>Contact information</h3>
              <p>
                Visahill 313<br />
                PL 010<br />
                13100 Hämeenlinna<br />
                Puh. 03 1234
                <a class="email" href="#footer"
                  ><br /><br />visahill@visamaki.fi</a
                >
              </p>
              <p><a class="terms" href="#footer">Website terms of use</a></p>
            </div>
            <div class="col-md-4 item text-center">
              <div class="shortcuts">
                <h3>Shortcuts:</h3>
                <p>
                  <a class="nav-link" href="#news"
                    ><b>News<br /></b
                  ></a>
                </p>
                <p>
                  <a class="nav-link" href="#carousel"
                    ><b>Sights<br /></b
                  ></a>
                </p>
                <p>
                  <a class="nav-link" href="#why"
                    ><b>Why Hämeenlinna<br /></b
                  ></a>
                </p>
                <p>
                  <a class="nav-link" href="#link4"
                    ><b>Useful links<br /></b
                  ></a>
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="social">
                <h3>Follow us</h3>
                <p>
                  <a
                    href="https://www.facebook.com/Hameenlinna/"
                    target="_blank"
                  >
                    <img
                      src="../webprogramming23_team3/pictures/facebook.png"
                      alt="facebook"
                      width="50"
                      height="50"
                  /></a>
                  <a
                    href="https://www.instagram.com/visithameenlinna/?hl=hu"
                    target="_blank"
                  >
                    <img
                      src="../webprogramming23_team3/pictures/insta.png"
                      alt="instagram"
                      width="50"
                      height="50"
                  /></a>
                </p>
                <p>
                  <a href="https://twitter.com/hmlkaupunki" target="_blank">
                    <img
                      src="../webprogramming23_team3/pictures/twitter.png"
                      alt="twitter"
                      width="50"
                      height="50"
                  /></a>
                  <a
                    href="https://www.youtube.com/user/HameenlinnanKaupunki"
                    target="_blank"
                  >
                    <img
                      src="../webprogramming23_team3/pictures/youtube.png"
                      alt="twitter"
                      width="50"
                      height="50"
                  /></a>
                </p>
                <p>

                <a href="news_create.php" >
                  <button type="button" class="btn btn-light">Subscribe</button>
                </a> 

                </p>
              </div>
            </div>
            <div class="row justify-content-center">
              <p class="copyright">Team 3 &copy; 2023<br>
              <?php
               $name = $_SERVER['PHP_SELF'];
                $filename = basename($name);
                echo "Last modified: " . date ("F d Y H:i:s.", filemtime($filename));
              ?>
              </p>  
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>