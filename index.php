<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MaQlens B</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/styling.css" rel="stylesheet">

<style>
    #train {
      position: relative;
      cursor: pointer;
    }
  </style>
  <style>
    progress {
      width: 5%;
    }
  </style>

</head>
<body>

<progress id="elem"></progress>
<script>
  elem.onclick = function() {
    animate({
      duration: 1000,
      timing: function(timeFraction) {
        return timeFraction;
      },
      draw: function(progress) {
        elem.style.width = progress * 100 + '%';
      }
    });
  };
</script>

  <script>
    function animateText(textArea) {
      let text = textArea.value;
      let to = text.length,
        from = 0;

      animate({
        duration: 5000,
        timing: bounce,
        draw: function(progress) {
          let result = (to - from) * progress + from;
          textArea.value = text.slice(0, Math.ceil(result))
        }
      });
    }
    
    function bounce(timeFraction) {
      for (let a = 0, b = 1; 1; a += b, b /= 2) {
        if (timeFraction >= (7 - 4 * a) / 11) {
          return -Math.pow((11 - 6 * a - 11 * timeFraction) / 4, 2) + Math.pow(b, 2)
        }
      }
    }
  </script>



</body>


  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a onmouseover="style.color='cyan'" href="index.html">Morris Bosire</a></h1>
      <h2>I'm a Dithyrambic <span>Sofware Engineer</span> From : East Africa [ Kenya ]</h2>
      <h2 onmouseover="style.color='brown'" >Self-Reflex as : <span onmouseout="style.color='cyan'" >Lenscasto</span> </h2>

       <!-- ======= supreme Section ======= -->

  
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#services">Services</a></li>
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="https://twitter.com/Lenscasto" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/maury.bellatryx" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://instagram.com/Lenscasto" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/morris-k-79aa3023a" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <br>
        <a href="summary.php" class="notification1"> <span>SUMMARY</span> <span class="badge">7</span></a>
    <style>
    .notification1 {
    background-color: #555;
    color: white;
    text-decoration: none;
    padding: 40px 70px;
    position: relative;
    display: inline-block;
    border-radius: 2px;
  }
  
  .notification1:hover {
    background: red;
  }
  
  .notification1 .badge {
    position: absolute;
    top: -10px;
    right: -10px;
    padding: 5px 10px;
    border-radius: 50%;
    background: red;
    color: white;
  }
  
</style>
      </div>

    <!--Display button-->

    </div>
  </header><!-- End Header -->






  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p onmouseout="style.color='#8300ff'" >Ultimate Touch about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/mi.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>Full time Scientist &amp; Software Engineer</h3>
          <p class="fst-italic">
            Culturing the Trends in Tech, Resolving in Code before we run crazy...  Programming in 7+ Languages is a kick off I bet on for lifetime Before the Dawn; I'm gonna Resolve your Problem.
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
      
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>lenscasto@gmail.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Nairobi City, Kenya</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>24 June 1998</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+254 799167780</span></li>
                
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                 <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Masters' in Computer Science</span></li>
                 <li><i class="bi bi-chevron-right"></i> <strong>Tribute:</strong> <span>Remote Programming</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Ground Zero:</strong> <span>Fullstack Dev.</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Remote Jobs:</strong> <span>Readily Available</span></li>
              </ul>
            </div>
          </div>
          <p>
            Being Elevated in the Swift growing Economy where the Rule of "Survival for the Fittest Applies". As a Gen Z; This constantly replenishes the core assault of humman innocense and raises the vehement of success that drives me every second.
            With the Love of Venture, Risk Taking and Willingness to participate in every event ; This stimulates the native nature of my consistence in seeking and grasping adamant scientific concepts to revamp life for satiation  
          </p>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    <div class="counts container">

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
            <p>Happy Clients</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="21" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-award"></i>
            <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1" class="purecounter"></span>
            <p>Awards</p>
          </div>
        </div>

      </div>

    </div><!-- End Counts -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">Front End Development <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Back-End Development <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Cloud <i class="val">75%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">Graphic Design<i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Desktop and Android Development <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Video Editing <i class="val">55%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div><!-- End Skills -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Interests</h2>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line" style="color: #ffbb2c;"></i>
            <h3>Web-Development</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
            <h3>Data Analysia</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
            <h3>Android & Edge Computing</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
            <h3>Machine Learning</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-database-2-line" style="color: #47aeff;"></i>
            <h3>Data Managemnt</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
            <h3>Artificial Intelligence</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
            <h3>Administrative Roles</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
            <h3>Graphic Design</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-anchor-line" style="color: #b2904f;"></i>
            <h3>Blogging & Reaserch</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-disc-line" style="color: #b20969;"></i>
            <h3>Video/Audio Editing</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-base-station-line" style="color: #ff5828;"></i>
            <h3>Tech Trends</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
            <h3>Cyber-Security</h3>
          </div>
        </div>
      </div>

    </div><!-- End Interests -->

    <!-- ======= Testimonials ======= -->
    <div class="testimonials container">

      <div class="section-title">
        <h2>Testimonials</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                I love The Viscosity of your work , With this great Hipe you gonna reap High.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/test1.png" class="testimonial-img" alt="">
              <h3>Haula Male</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                The Best part of you is that you can make it real. Flip the foto further.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/test2.png" class="testimonial-img" alt="">
              <h3>Lennag Roser</h3>
              <h4>Designer</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                With Tireless combat on your weakness you can overcome your fate of poverty and count on the expensive wine tables with ease.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/test3.png" class="testimonial-img" alt="">
              <h3>Khedi Harman</h3>
              <h4>Store shopkeeper</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Every Foundation needs a tough decison to make it out, staying late night puzzling out handy get money is a bonus at the end of it all.  
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/test4.png" class="testimonial-img" alt="">
              <h3>Simol Bilgany</h3>
              <h4>Blogger</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                As a Man there is always a choice of either working hard or going home hungry. If the stomach is hungry who is gonna feed you tommorow is the dillemma. 
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/test5.jpg" class="testimonial-img" alt="">
              <h3>Liket vaam</h3>
              <h4>Hair Dresser</h4>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

      <div class="owl-carousel testimonials-carousel">

      </div>

    </div><!-- End Testimonials  -->

  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p onmouseout="style.color='#8300ff'" >Glance at My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Introduction</h3>
          <div class="resume-item pb-0">
            <h4>Morris Bosire</h4>
            <p><em>Self-trained to handle the most difficult tasks in a Diligent and Highly convergent unison; With my Master in Computer Science ,I'm deeply rooted Mathematics, Problem-solving, Coding, 
              Research and Experimentation, Computer and technology knowledge, Programming, Technical writing and Software development aimed to leverage in-depth knowledge of data science and Artificial intelligence and Ede Computing, 
             to puzzle out technological objections while delivering valuable work expertise in a team oriented environment flawlessness.</em></p>
            <p>
            <ul>
              <li>Nairobi City , Kenya , EA </li>
              <li>(+254) 799167780</li>
              <li>lenscasto@gmail.com</li>
            </ul>
            </p>
          </div>

          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <h4>Master of Computer Science</h4>
            <h5>2023 - 2024</h5>
            <p><em>Kenyatta University, Nairobi City, KE</em></p>
            <p>A Great advance in computer science with latest developments in Computing, practical experience in coursework and research projects including : 
              Advanced Computer Architectures, Cyber Security  and Computer Forensics , Operating systems and design, Numerical Computer analysis ,Advanced digital image processing , 
              Software engineering technologies , Network Technologies , Machine Learning and Artificial Intelligence, mobile computing and advanced distributed systems.</p>
          </div>
          <div class="resume-item">
            <h4>Bachelor of Computer Science </h4>
            <h5>2017 - 2021</h5>
            <p><em>Multimedia University Of Kenya, KE</em></p>
            <p>As one of my great steps in covering programming languages, computer systems, algorithms, data structures, 
              software development, computer architecture, software engineering, and artificial intelligence, mathematics, physics, machine learning, computer networks, and Cyber-Security    </p>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Professional Experience</h3>
          <div class="resume-item">
            <h4>Software Engineer </h4>
            <h5>2018 - Present</h5>
            <p><em>Remote Jobs: Nairobi City, Kenya , EA </em></p>
            <p>
            <ul>
             <li>Designing and developing software applications. This includes determining the requirements of the application, designing the architecture, and writing the code.</li>
             <li>Testing and debugging software. This involves running the application through a series of tests to ensure that it is working as expected.</li>
             <li>	Deploying and maintaining software. This includes making sure that the application is available to users and that it is up-to-date with the latest security patches.</li>
             <li>Collaborating with other Remote engineers. This may involve working on a team to develop a new application, or providing support to other engineers who are working on existing applications</li>. 
             <li>Staying up-to-date on the latest technologies. This is essential for me as a software engineer as the field is constantly changing</li>
            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>Information Communication Technology Officer</h4>
            <h5>Jan 2022 - Nov 2022</h5>
            <p><em>KISE: Nairobi City, Kenya , EA</em></p>
            <p>
            <ul>
            <li>	Developing and testing simple computer programs according to instructions and specifications;</li>
            <li>	Assisting in the implementation of the computer systems;</li>
            <li>	Providing user support and training of users and Draw hardware specification.</li>
            <li>	Perfoming Repairs and maintenance of ICT equipment and associated peripherals;</li>
            <li>	Monitoring the performance of ICT equipment; and Reporting any faults for further ac-tion to principal ICT officer & ( Develop reports on ICT standards )</li>
            <li>	Configuring the Organization LAN and WAN.</li>
            <li>	Providing data backup Services for all ICT equipment and also Data Protection to ensure they are secure</li>
            <li>	Ensure that the website and associated applications are updated from time to time.</li>
            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>Information Technology Specialist</h4>
            <h5>Feb 2021 - Dec 2021</h5>
            <p><em>KBC: Nairobi City, Kenya , EA</em></p>
            <p>
            <ul>
            <li>  Reporting to Principal ICT Officer and Developing reports ICT Operations </li>
            <li>	User support { KBC Team }, and Software Training {Departments and Production Rooms}</li>
            <li>	Live Steaming of Programs for Radio and TV</li>
            <li>	Hardware and Software Maintenance and Repair and Data Backup and Protection</li>
            <li>	Software Training { Broadcast and Streaming software }</li>
            <li>	Develop and install application systems when necessary</li>
            <li>	Configuring and installing the local Area network and Wide Area Network.</li>
            <li>	Performing frequent Website and associated applications update.</li>
            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>Computing and Information Technology specialist</h4>
            <h5>June 2019 - August 2019</h5>
            <p><em>Robisearch LTD Company: Nairobi City, Kenya , EA</em></p>
            <p>
            <ul>
            <li>	System Demo, Support and installation i.e. (Point of Sell (POS), Bio-metric Time Attendance and PMS to Company Clients </li>
            <li>	Software Design and Development {Front End Software Engineering} i.e.  (Websites and Desktop APPS) </li>
            <li>	Reporting to Principal ICT Officer and Writing Reports</li>
            <li> Performing frequent Website and associated applications update</li>
            <li> Developing and installing application systems</li>
            <li>	Installing and Configuring local Area network and Wide Area Network.</li>
            <li>	Data Backup, Repair and maintenance of ICT infrastructure</li>
            </ul>
            </p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p onmouseout="style.color='#8300ff'" >My Services</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4><a href="">Full - Stack Development</a></h4>
            <p>This encompases : Website, Desktop and Android Development</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4><a href="">Edge Computing</a></h4>
            <p>Microsoft Azure , Docker and Kuberinates </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4><a href="">Graphic Design</a></h4>
            <p>Logo, Banners and Ads Fun arts and more  </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4><a href="">Video Editing & Blogging</a></h4>
            <p>Educative , Entertainment and Commercial</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-slideshow"></i></div>
            <h4><a href="">Cyber - Security</a></h4>
            <p>WAN , LAN Configuration anad management</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-arch"></i></div>
            <h4><a href="">Administrative Assistance</a></h4>
            <p>Team Laeder Roles and Management </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p onmouseout="style.color='#8300ff'" >My Works</p>
      </div>
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
             
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/port1.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/port1.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/port2.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/port2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/port3.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/port3.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/port4.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/port4.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/port5.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/port5.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/port6.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/port6.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/port7.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/port7.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/port8.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/port8.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/port9.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/port9.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p onmouseout="style.color='#8300ff'" >Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>Ongata Rongai, 00215 ,Nairobi City, KE</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <a href="#https://twitter.com/Lenscasto" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/maury.bellatryx" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://instagram.com/Lenscasto" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://github.com/lenscasto" class="github"><i class="bi bi-github"></i></a>
              <a href="https://www.linkedin.com/in/morris-k-79aa3023a" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>lenscasto@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>+254 79916 7780</p>
          </div>
        </div>
      </div>

      <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>


      
    </div>
  </section><!-- End Contact Section -->



  






  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed by <a href="https://www.linkedin.com/in/morris-k-79aa3023a">Lenscasto</a>
    <button type="button" onclick ="window.print()">Print this page</button>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src = "assets/js/main.js"></script>
  <script src = "assets/js/minor.js"></script>
 

</body>

</html>