<?php require 'functions.php';

$isValid = true;
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = htmlspecialchars(addslashes($_POST['name']));
    if(preg_match($pattern['name'], $name)!= 1) {
        $isValid = false;
    }

    $email = htmlspecialchars(addslashes($_POST['email'])); 
    if(preg_match($pattern['email'], $email)!= 1) {
        $isValid = false;
    }
    
    $subject = htmlspecialchars(addslashes($_POST['subject']));
    if(preg_match($pattern['subject'], $subject)!= 1) {
        $isValid = false;
    }
   
    if($isValid) {
        if (isset($_POST["Mailer"])) {
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
            $subject = htmlspecialchars($_POST["subject"]);
            $message= htmlspecialchars($_POST["message"]);
    
            $sent = Mailer($email, $name, $subject, $message);
        }   
    }
}?>

<body id="index">
  <?php require "include/head.php";
    require_once "include/navbar.php";?>

  <div class="container col-md-7 justify-content-center py-4">
    <div id="projects">
      <h3>My Projects</h3>

      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner w-100">
          <div class="carousel-item active ">
            <div class="d-flex">
              <div class="col-xl-3 col-lg-4 col-md-6 mb-4 gallery-item">
                <div class="bg-white shadow-sm" style="height: 300px;"><img
                    src="https://bootstrapious.com/i/snippets/sn-gallery/img-1.jpg" alt=""
                    class="img-fluid card-img-top">
                  <div class="p-3">
                    <h5> <a href="#" class="text-dark">Red paint cup</a></h5>
                    <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 mb-4 gallery-item">
                <div class="bg-white shadow-sm" style="height: 300px;"><img
                    src="https://bootstrapious.com/i/snippets/sn-gallery/img-8.jpg" alt=""
                    class="img-fluid card-img-top">
                  <div class="p-3">
                    <h5> <a href="#" class="text-dark">Color in Guatemala.</a></h5>
                    <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 mb-4 gallery-item">
                <div class="bg-white shadow-sm" style="height: 300px;"><img
                    src="https://bootstrapious.com/i/snippets/sn-gallery/img-2.jpg" alt=""
                    class="img-fluid card-img-top">
                  <div class="p-3">
                    <h5> <a href="#" class="text-dark">Blorange</a></h5>
                    <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 mb-4 gallery-item">
                <div class="bg-white shadow-sm" style="height: 300px;"><img
                    src="https://bootstrapious.com/i/snippets/sn-gallery/img-4.jpg" alt=""
                    class="img-fluid card-img-top">
                  <div class="p-3">
                    <h5> <a href="#" class="text-dark">DOSE Juice</a></h5>
                    <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="d-flex">
              <div class="col-xl-3 col-lg-4 col-md-6 mb-4 gallery-item">
                <div class="bg-white shadow-sm" style="height: 300px;"><img
                    src="https://bootstrapious.com/i/snippets/sn-gallery/img-3.jpg" alt=""
                    class="img-fluid card-img-top">
                  <div class="p-3">
                    <h5> <a href="#" class="text-dark">Lorem ipsum dolor</a></h5>
                    <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 mb-4 gallery-item">
                <div class="bg-white shadow-sm" style="height: 300px;"><img
                    src="https://bootstrapious.com/i/snippets/sn-gallery/img-5.jpg" alt=""
                    class="img-fluid card-img-top">
                  <div class="p-3">
                    <h5> <a href="#" class="text-dark">Pineapple</a></h5>
                    <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 mb-4 gallery-item">
                <div class="bg-white shadow-sm" style="height: 300px;"><img
                    src="https://bootstrapious.com/i/snippets/sn-gallery/img-6.jpg" alt=""
                    class="img-fluid card-img-top">
                  <div class="p-3">
                    <h5> <a href="#" class="text-dark">Yellow banana</a></h5>
                    <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 mb-4 gallery-item">
                <div class="bg-white shadow-sm" style="height: 300px;"><img
                    src="https://bootstrapious.com/i/snippets/sn-gallery/img-7.jpg" alt=""
                    class="img-fluid card-img-top">
                  <div class="p-3">
                    <h5> <a href="#" class="text-dark">Teal Gameboy</a></h5>
                    <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="d-flex">
              <div class="col-xl-3 col-lg-4 col-md-6 mb-4 gallery-item">
                <div class="bg-white shadow-sm" style="height: 300px;"><img
                    src="https://bootstrapious.com/i/snippets/sn-gallery/img-8.jpg" alt=""
                    class="img-fluid card-img-top">
                  <div class="p-3">
                    <h5> <a href="#" class="text-dark">Color in Guatemala.</a></h5>
                    <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 mb-4 gallery-item">
                <div class="bg-white shadow-sm" style="height: 300px;"><img
                    src="https://bootstrapious.com/i/snippets/sn-gallery/img-4.jpg" alt=""
                    class="img-fluid card-img-top">
                  <div class="p-3">
                    <h5> <a href="#" class="text-dark">Lorem ipsum dolor</a></h5>
                    <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 mb-4 gallery-item">
                <div class="bg-white shadow-sm" style="height: 300px;"><img
                    src="https://bootstrapious.com/i/snippets/sn-gallery/img-1.jpg" alt=""
                    class="img-fluid card-img-top">
                  <div class="p-3">
                    <h5> <a href="#" class="text-dark">Red paint cup</a></h5>
                    <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 mb-4 gallery-item">
                <div class="bg-white shadow-sm" style="height: 300px;"><img
                    src="https://bootstrapious.com/i/snippets/sn-gallery/img-2.jpg" alt=""
                    class="img-fluid card-img-top">
                  <div class="p-3">
                    <h5> <a href="#" class="text-dark">Lorem ipsum dolor</a></h5>
                    <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev bg-dark" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next bg-dark" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <div id="about" class="py-4 w-100">
      <h3>About Me</h3>
      <div class="d-flex">
        <div class="col col-md-4">
          <img src="img/woman.jpg" class="w-100" alt="">
        </div>

        <div class="col col-md-8 ps-3">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas minima, ut tempora delectus nisi cumque
            nostrum quidem quaerat esse quo fuga? Tempora facilis suscipit eos, magnam necessitatibus odit minima!
            Fugiat.
            Ad vero dicta at porro debitis alias, possimus placeat corrupti, deleniti dignissimos assumenda, modi sequi
            cupiditate eum iure minima velit saepe fuga. Laboriosam asperiores, voluptas ex eaque dignissimos doloribus
            maxime.</p>
          <p>Reiciendis sunt quidem, quae molestiae voluptates ab at optio voluptatem deleniti, dolorem assumenda
            quaerat
            odit, magnam voluptate? Tenetur cupiditate ad optio assumenda asperiores ipsa doloremque adipisci
            consequatur voluptas, ipsum deserunt!
            Voluptatibus distinctio ab ratione et fugiat, repudiandae facilis harum ducimus hic vitae eveniet! Nesciunt
            ratione eveniet a, quaerat nulla voluptates natus in aspernatur cumque, aliquam nostrum sequi optio, maxime
            dignissimos!</p>
          <a href="download.php"><button style="float:right;" class="mt-2 btn btn-dark">Download Resume</button></a>
        </div>
      </div>
    </div>

    <div id="skills">
      <h4>My Skills</h4>
      <p>
        Graphic Design
      </p>

      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0"
          aria-valuemax="100">65%</div>
      </div>

      <p>3D Sculpturing and Modeling</p>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0"
          aria-valuemax="100">70%</div>
      </div>

      <p>Web Development</p>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0"
          aria-valuemax="100">75%</div>
      </div>
      <p>Mobile Application Development</p>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0"
          aria-valuemax="100">60%</div>
      </div>
      <p>User Interface Design / User Experience</p>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0"
          aria-valuemax="100">70%</div>
      </div>
    </div>

    <div id="contact" class="py-4">
      <div class="form-control">
        <h3>Contact Me</h3>
        <p>Like what you see? Send me a message:</p>
        <form id="ContactMeform" method="POST">
          <label for="name">Name:</label><br>
          <input id="contactName" type="text" name="name" required></br>
          <label for="email">Email:</label><br>
          <input id="contactEmail" type="email" name="email" required><br>
          <label for="subject">Subject:</label><br>
          <input id="contactSubject" type="text" name="subject" required><br>
          <label for="message">Message:</label><br>
          <textarea id="contactMessage" name="message" cols="30" rows="10" required></textarea><br>
          <button class="btn btn-dark" name="Mailer">Send Message</button>
          <button type="reset" class="btn btn-dark">Reset</button>
          <?php if(!$isValid) {
                echo '<p style="color:red;" class="pt-3">One or more inputs are incorrect! Please try again. </p>';
          }
          if (isset($sent)) {
              if($sent) {
                    echo "<p class='pt-3' style='color:green;'> Message Sent! </p>";
              }
              else{
                  echo "<p class='pt-3' style='color:red;'> Message not sent! </p>";
              }  
          }?>
        </form>
      </div>
    </div>
  </div>

  <?php require_once "include/footer.php";
    require "include/scripts.php";
    ?>
</body>

</html>