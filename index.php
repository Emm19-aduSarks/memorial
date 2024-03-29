<?php
                error_reporting(E_ALL);
                ini_set('display_errors', 1);

                $servername = "us-cluster-east-01.k8s.cleardb.net";
                $username = "b586684df8c103";
                $password = "dce474c6";
                $dbname = "heroku_2a9e6c922e8e543";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sqlTwo = "SELECT * FROM TributeAndName";
                $result = mysqli_query($conn, $sqlTwo);
                $tributes = mysqli_fetch_all($result, MYSQLI_ASSOC);
                      // Close the database connection
                      $conn->close();
?>
          

<!DOCTYPE html>
<html dir="ltr" lang="en-US">

  <head>
    <script src="https://kit.fontawesome.com/2ac6a790f8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Document Meta ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="zytheme"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Multi-purpose Makerting html5 landing page">
    <link  style="height:20px; width:30px;" href="IMAGES/heartLogo.png" rel="icon">

    <!-- Fonts ============================================= -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,400i,500,600,700' rel='stylesheet' type='text/css'>

    <!-- Stylesheets ============================================= -->
    <link href="CSS/styleOne.css" rel="stylesheet">
    <link href="CSS/styleTwo.css" rel="stylesheet">
    <link href="CSS/modal.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <script src="assets/js/respond.min.js"></script> <![endif]-->

    <!-- Document Title ============================================= -->
<title>Mrs Esther Kwatetso Apaloo</title>
<style>
            /* Add animation styles */
            @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-20px);
            }
            60% {
                transform: translateY(-10px);
            }
        }

        /* Apply animation to the ambulance image */
        #help_ambulance.bouncing {
            animation: bounce 2s infinite;
        }
</style>
  </head>

 <body class="body-scroll">
    <!-- Document Wrapper ============================================= -->
    <div id="wrapperParallax" class="wrapper clearfix">

      <!-- Header ============================================= -->
      <header id="navbar-spy" class="header header-1 header-transparent header-fixed">
        <nav id="primary-menu" class="navbar navbar-expand-lg navbar-dark">
          <div class="container">
            <a class="navbar-brand" href="index.php">
              <img style="width: 50px;" class="logo logo-dark" src="IMAGES/heartLogo.png" alt="Kolaso Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="toogle-inner"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
              <ul class="navbar-nav mr-auto">
                <li class="active">
                  <a style="color:white;" data-scroll="scrollTo" href="#speciality">Home</a>
                </li>
                <li>
                  <a style="color:white;" data-scroll="scrollTo" href="#patients">Tributes</a>
                </li>
                <li>
                  <a style="color:white;" data-scroll="scrollTo" href="#consultation">Add Tribute</a>
                </li>
                <li>
                  <a style="color:white;" data-scroll="scrollTo" href="#footerParallax">Contact</a>
                </li>
              </ul>
            </div>
            <!--/.nav-collapse -->
          </div>
        </nav>
      </header>

      <!-- Slider #1 ============================================= -->
      <section id="hero" class="section hero">
        <div class="bg-section">
          <img src="IMAGES/mainBg.png" alt="background">
        </div>
        <div class="container">
          <div class="row row-content">
            <div class="col-12 col-md-6 col-lg-6">
              <div class="hero-headline" style="color: white; font-family: 'Great Vibes', cursive;">In Loving Memory of Mrs Esther Kwatetso Apaloo,
                <br>
                Our
                <span class="typed-text" id="typedText" data-typed-string="Mother,Role Model,Guide"></span></div>

              <div class="hero-bio" style="color: white;">Forever in Our Hearts (1935-2024)</div>
 
              <div class="hero-action">
                <form class="form-inline mb-0 mailchimp" novalidate="true">
                  <input type="email" class="form-control" placeholder="Enter your e-mail">
                  <input type="submit" value="Get Started" class="btn btn--primary">
                </form>
             
                <div class="subscribe-alert"></div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6"></div>
          </div>
          <!-- .row end -->
         
        </div>
        <!-- .container end -->
<img style="width: 70px; position: fixed; bottom: 20px; right: 20px; z-index:100; cursor:pointer;" class="help_ambulance" id="help_ambulance" src="IMAGES/crossFuneral.svg">


</section>
      <!-- Feature #1 ============================================= -->
      <section id="bar" class="bg-white pt-0 pb-0">
        <div class="container">
          <div class="row">
            <div class="col">
              <hr class="hr-bar">
            </div>
          </div>
        </div>
      </section>
      <!-- Feature #2 ============================================= -->
      <section id="feature2" class="section feature feature-left bg-white">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
              <div class="heading heading-1 mb-50 mt-30">
                <h2 class="heading-title">About Mrs Esther Kwatetso Apaloo (1935-2024)</h2>
                <p class="heading-desc">
                Mrs. Esther Kwatetso Apaloo, fondly referred to as Auntie Esther, departed from this world, leaving behind a profound void in our lives. Her warm presence and genuine kindness endeared her to everyone she encountered. Esther's passing serves as a poignant reminder of life's fragility and the importance of cherishing every moment.

Born on November 28, 1935, in Osu, Esther's upbringing instilled in her values of integrity, perseverance, and compassion. Despite facing challenges, she approached life with resilience and optimism, inspiring those around her to do the same.

Esther's dedication to her work was exemplary, earning her respect and admiration from colleagues and superiors alike. Her contributions to various institutions and organizations left an indelible mark, reflecting her commitment to excellence and service.

In addition to her professional achievements, Esther was deeply devoted to her faith and community. Her active involvement in church activities and charitable endeavors reflected her unwavering commitment to making a positive impact on the lives of others.

As we bid farewell to Esther, we find solace in the cherished memories she leaves behind. 

Fare thee well, Esther. Yaa wo dzogbann
The God you served so well will look after you. </div>
       
            </div>
            <!-- .col-md-6 end -->
            <div class="col-12 col-md-6 col-lg-6">
              <img id="abtImgMain" style="height:630px; margin-top:100px;" class="img-fluid img-shadow pull-right" src="IMAGES/mainAbout2.png" alt="about"/>
            </div>
            <!-- .col-md-6 end -->

          </div>
          <!-- .row end -->
        </div>
        <!-- .container end -->
      </section>

<!-- flowers design goes here -->


      <!-- #feature2 end -->

<!-- Testimonial ============================================= -->
<section id="patients" class="section testimonials bg-gray">
  <div class="container">
    <div class="row clearfix">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="heading heading-1 text-center">
          <h2 class="heading-title">Tributes <img style="height:90px;margin-top:-20px;" src="IMAGES/tributeImage.png"></h2>
        </div>

    <section  id="modalContainer" style="margin-top:-70px; margin-left:70px;" class="entireModal">
        <div class="modalCard" onclick="openPDF('tributes/Tribute to Gran-Gram.pdf')">
        <img class="small_image" src="IMAGES/grandchildrenMain.png" >
            <p class="modalText" style="color:#E74D7B;"><br>Grandchildren</p>
        </div>
        <div class="modalCard"  onclick="openPDF('tributes/Auntie Otsoo_Tribute by Femi and Ranti.pdf')">
        <img class="small_image" src="IMAGES/campbell.png" >
            <p class="modalText" style="color:#E74D7B;"><br>Campbell Grandnieces</p>
        </div>
        <div class="modalCard" onclick="openPDF('tributes/MEMORIES OF MAMIE ESTHER.pdf')">
        <img class="small_image" src="IMAGES/marie.png" >
            <p class="modalText" style="color:#E74D7B;"><br><br>Marie O. Obumadjugo</p>
        </div>


        <div style="margin-top:20px;" class="modalCard" onclick="openPDF('tributes/Tribute Grandmamam (1).pdf')">
        <img class="small_image" src="IMAGES/genevieve.png" >
            <p class="modalText" style="color:#E74D7B;"><br><br>Genevieve Apaloo</p>
        </div>
        <div style="margin-top:20px;"  class="modalCard" onclick="openPDF('tributes/A TRIBUTE IN MEMORY OF ESTHER KWATETSO APALOO (1).pdf')">
        <img class="small_image" src="IMAGES/rk.png" >
            <p class="modalText" style="color:#E74D7B;"><br><br>R.K. Apaloo </p>
        </div>
        
        <div style="margin-top:20px;"  class="modalCard" onclick="openPDF('tributes/FAREWELL AUNTIE ESTHER By Arafua Aning.pdf')">
        <i class="fas fa-cross iconCross"></i>
            <p class="modalText" style="color:#E74D7B;"><br><br>Arafua A. Aning</p>
        </div>

        <div style="margin-top:20px; margin-left:400px;" class="modalCard" onclick="openPDF('tributes/TRIBUTE BY THE ADU.pdf')">
        <i class="fas fa-cross iconCross"></i>
            <p class="modalText" style="color:#E74D7B;"> <br><br>Adu-Aryee <br> Family</p>
        </div>
    </section>

    <div id="paginationDots" style="text-align: center; margin-top: -100px;"></div>


      </div>
    </div>
    <?php
    foreach($tributes as $tribute):
    ?>
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div style="margin-bottom:12px;" class="carousel carousel-dots owl-carousel" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
          <!-- Testimonial #1 -->
          <div class="testimonial-panel" id="testimonialPanel">
            <div class="testimonial-body">
              <p><?php echo $tribute["Message"];?></p>
              <div class="testimonial-author">
                <h5><?php echo $tribute["Name"];?></h5>
              </div>
            </div>
          </div>
          <!-- .testimonial-panel End -->
        </div>
        <!-- .carousel End -->
      </div>
    </div>
    <?php
    endforeach;
    ?>
    <!-- .row End -->
  </div>
  <!-- .container End -->
</section>




      
      <!-- #patients End-->
      <!-- Team Section ============================================= -->
      <!-- #doctors end -->
      <!-- Action ============================================= -->


      <section id="consultation" class="section feature feature-2 bg-gray" style="margin-top: -150px;">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
              <div class="feature-panel">
                <div class="feature-content">
                  <h3>Kindly add a tribute</h3>
                  <p class="mb-30">Your condolences and special messages are welcome. Kindly share your heartfelt tributes by typing in your name and adding a message.</p>
                  <ul>
                    <li>Share a cherished memory of Mrs Apaloo</li>
                    <li>Express your gratitude for the impact she had on your life</li>
                    <li>Reflect on the qualities that made Her special</li>
                    <li>Offer words of comfort to her family and loved ones</li>
                    <li>Share a favorite quote or saying that reminds you of Mrs Apaloo</li>
                  </ul>
                </div>
              </div>
              <!-- .feature-panel end -->
            </div>
            <!-- .col-md-6 end -->
            <div class="col-12 col-md-6 col-lg-5 offset-lg-1">
              <div class="form-wrapper">
                <div class="heading">
                  <h3 class="heading-title">Add a Tribute</h3>
                </div>
                <!-- .form-group end -->
                <form method="post" action="action.php" class="contactForm mb-0" id="myForm">
                    <div id="result" class="contact-result"></div>
                    <div class="form-group">
                        <label for="tributeName">Your Name*</label>
                        <input type="text" class="form-control" name="tributeName" id="tributeName" required="required">
                    </div>
                    <div class="form-group">
                        <label for="tributeMessage">Your Message*</label>
                        <textarea style="height: 100px; vertical-align: top; overflow: auto;" class="form-control" name="tributeMessage" id="tributeMessage" required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Add Your Tribute" name="submit" class="btn btn--primary btn--block">
                    </div>
                </form>
              </div>
            </div>
            <!-- .col-md-6 end -->
          </div>
          <!-- .row end -->
        </div>
        <!-- .container end -->
      </section>








<!-- Gallery -->

<div style="position: relative; display: flex; justify-content: center; align-items: center; height: 650px;">
    <img style="height:650px;" src="IMAGES/gallery_click.png" alt="background">
    <i id="playButton" class="fa-regular fa-circle-play" style="position: absolute; font-size: 48px; color: white; cursor:pointer;"></i>
</div>

<video id="myVideo" width="700px" height="600px" controls style="display: none;">
  <source src="IMAGES/video.mp4" type="video/mp4">
</video>
<script>
  document.getElementById('playButton').addEventListener('click', function() {
    // Create a SweetAlert2 dialog with a video player
    Swal.fire({
      // title: "Video Alert",
      html: '<video controls style="width: 100%;" height="auto" src="IMAGES/video.mp4"></video>',
      showCloseButton: false,
      showConfirmButton: false,
      customClass: {
        popup: 'swal-video-popup',
        htmlContainer: 'swal-video-container'
      },
      width: '95%', // Set the width of the dialog
      padding: '0', // Remove padding to eliminate space around the content
      background: 'transparent', // Set background to transparent
      backdrop: 'rgba(0, 0, 0, 0.5)' // Set backdrop color to semi-transparent black
    });
  });
</script>




<!-- Gallery -->
      <!-- #consultation end -->
      <!-- Footer ============================================= -->
      <footer id="footerParallax" class="footer">
        <div class="footer-top">
          <div class="container">
            <div class="row widget-boxes text-center">
              <div class="col-12 col-md-4 col-lg-4">
                <div class="widget-info-box">
                  <div class="info-img">
                  <i style="color:#E74D7B" class="fa-solid fa-phone fa-xl"></i>
                  </div>
                  <h4>Phone</h4>
                  <p>+233</p>
                </div>
                <!-- .widget-info-box end -->
              </div>
              <!-- .col-md-4 end -->
              <div class="col-12 col-md-4 col-lg-4">
                <div class="widget-info-box">
                  <div class="info-img">
                  <i style="color:#E74D7B" class="fa-solid fa-map-location-dot fa-xl"></i>                 
                </div>
                  <h4>Address</h4>
                  <p>Ebenezer Presbyterian, Osu</p>
                </div>
                <!-- .widget-info-box end -->
              </div>
              <!-- .col-md-4 end -->
              <div class="col-12 col-md-4 col-lg-4">
                <div class="widget-info-box">
                  <div class="info-img">
                  <i style="color:#E74D7B" class="fa-solid fa-clock fa-xl"></i>                  
                </div>
                  <h4> Time</h4>
                  <p>Tuesday 11:00am</p>
                </div>
                <!-- .widget-info-box end -->
              </div>
              <!-- .col-md-4 end -->
            </div>
            <!-- .row end -->
          </div>
          <!-- .container end -->
        </div>
        <!-- .footer-top end -->
        <div class="footer-bar">
          <div class="container">
            <div class="row">
              <div class="col">
                <hr>
              </div>
            </div>
          </div>
          <!-- .container end -->
        </div>
        <!-- .footer-bar end -->
        <div class="footer-bottom">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="footer-copyright">
                  <span>&copy; Apaloo Family 2024, All Rights Reserved.</span>
                </div>
              </div>
              <!-- .col-md-6 end -->
              <div class="col-12 col-md-6 col-lg-6">
                <div class="footer-social">
                  <a class="facebook" href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                  <a class="twitter" href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a class="dribbble" href="#">
                    <i class="fa fa-dribbble"></i>
                  </a>
                  <a class="instagram" href="#">
                    <i class="fa fa-instagram"></i>
                  </a>
                </div>
              </div>
              <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->
          </div>
          <!-- .container end -->
        </div>
        <!-- .footer-bottom end -->
      </footer>
      <!-- #footer end -->
    </div>
    <!-- #wrapper end -->



    <!-- Footer Scripts ============================================= -->
    <script src="JS/jquery-3.3.1.min.js"></script>
    <script src="JS/plugins.js"></script>
    <script src="JS/functions.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=UA-89540131-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-89540131-1');
    </script>
    <!-- JavaScript to handle form submission and show SweetAlert -->
<script>
    document.getElementById('myForm').addEventListener('submit', function (e) {
        // e.preventDefault(); // Prevent the form from submitting traditionally

        // You can perform AJAX submission here if needed

        // Show SweetAlert upon successful submission
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: 'Your tribute has been added successfully!',
            showConfirmButton: false,
            timer: 2000, // Auto close the alert after 2 seconds
            iconColor: '#E74D7B' 
        });
    });
</script>

<script>
// Add event listener to the image element
document.getElementById('help_ambulance').addEventListener('click', function() {
    // Redirect to the "program.html" page
    window.location.href = 'program.html';
});
</script>


<script>
        // Add event listener for the DOMContentLoaded event
        document.addEventListener('DOMContentLoaded', function() {
            // Start the bouncing animation when the document is ready
            document.getElementById('help_ambulance').classList.add('bouncing');
        });

        // Add click event listener to toggle bouncing animation on click
        document.getElementById('help_ambulance').addEventListener('click', function() {
            // Toggle the 'bouncing' class to start or stop the animation
            this.classList.toggle('bouncing');
        });
</script>

<script>
  // JavaScript function to open PDF based on modal card clicked
  function openPDF(pdfName) {
    window.open(pdfName, '_blank');
  }
</script>

<script>
  // Modal cards data
const modalCards = [
    { imageSrc: "IMAGES/grandchildrenMain.png", text: "Grandchildren", pdf: "tributes/Tribute to Gran-Gram.pdf" },
    { imageSrc: "IMAGES/campbell.png", text: "Campbell Grandnieces", pdf: "tributes/Auntie Otsoo_Tribute by Femi and Ranti.pdf" },
    { imageSrc: "IMAGES/marie.png", text: "Marie O. Obumadjugo", pdf: "tributes/MEMORIES OF MAMIE ESTHER.pdf" },
    { imageSrc: "IMAGES/genevieve.png", text: "Genevieve Apaloo", pdf: "tributes/Tribute Grandmamam (1).pdf" },
    { imageSrc: "IMAGES/rk.png", text: "R.K. Apaloo", pdf: "tributes/A TRIBUTE IN MEMORY OF ESTHER KWATETSO APALOO (1).pdf" },
    { imageSrc: "IMAGES/arafua.png", text: "Arafua A. Aning", pdf: "tributes/FAREWELL AUNTIE ESTHER By Arafua Aning.pdf" },
    { imageSrc: "IMAGES/squareGranny.png",text: "Adu-Aryee Family", pdf: "tributes/TRIBUTE BY THE ADU.pdf" }
];

// Function to generate modal cards
function generateModalCards(startIndex) {
    const modalContainer = document.getElementById("modalContainer");
    modalContainer.innerHTML = ""; // Clear previous content

    const endIndex = Math.min(startIndex + 3, modalCards.length); // Calculate end index

    for (let i = startIndex; i < endIndex; i++) {
        const modalCardData = modalCards[i];
        const modalCard = document.createElement("div");
        modalCard.classList.add("modalCard");

        if (modalCardData.imageSrc) {
            const image = document.createElement("img");
            image.classList.add("small_image");
            image.src = modalCardData.imageSrc;
            modalCard.appendChild(image);
        }

        const text = document.createElement("p");
        text.classList.add("modalText");
        text.style.color = "#E74D7B";
        text.innerHTML = "<br><br>" + modalCardData.text;
        modalCard.appendChild(text);

        modalCard.onclick = function () {
            openPDF(modalCardData.pdf);
        };

        modalContainer.appendChild(modalCard);
    }
}

// Function to enable horizontal scrolling on smaller screens
function enableHorizontalScrolling() {
    const modalContainer = document.getElementById("modalContainer");
    modalContainer.style.overflowX = "scroll";
}
if (window.innerWidth <= 758) {
    enableHorizontalScrolling();
}

// Function to generate pagination dots
function generatePaginationDots(currentPage) {
    const paginationDots = document.getElementById("paginationDots");

    if (window.innerWidth > 758) {
        paginationDots.innerHTML = ""; // Clear previous dots

        const numPages = Math.ceil(modalCards.length / 3);

        for (let i = 1; i <= numPages; i++) {
            const dot = document.createElement("span");
            dot.innerHTML = i === currentPage ? " ● " : " ○ ";
            dot.onclick = function () {
                generateModalCards((i - 1) * 3);
                generatePaginationDots(i);
            };
            paginationDots.appendChild(dot);
        }
    } else {
        paginationDots.style.display = "none"; // Hide pagination dots on small screens
    }
}

// Initial generation
generateModalCards(0);
generatePaginationDots(1);


</script>
   
  </body>

</html>
