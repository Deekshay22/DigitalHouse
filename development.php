<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="The team of experienced digital marketers, video creators, website developers and designers offering best solution for your business.">
    <meta name="keywords" content="The Digital House, Currency Tower, Digital Marketing">
    <meta name="author" content="The Digital House">
    <title>Online Advertising | Website Design and Development Company</title>
    <?php include 'assets/includes/head.php' ?>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <style>
        /* Custom HR styling */
        
    </style>
    <style>
        :root {
      --dev-secondary-color: #F2F1ED;
      --dev-text-color: #8F8F8F;
      --dev-accent-color: #73ed7c;
      --dev-dark-color: #019297;
      --dev-white-color: #FFFFFF;
      --dev-divider-color: #DFE1DE;
      --dev-dark-divider-color: #FFFFFF33;
        }
        .DD-section {
            /* max-width: 900px; */
            background: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 2rem;
        }

        /* Custom HR styling */
        .DD-section .custom-hr {
            width: 100%;
            height: 3px;
            background-color: #ccc;
            border: none;
            transition: background-color 0.3s ease-in-out;
        }

        .DD-section .feature:hover .custom-hr {
            background-color: #007bff; /* Change color on hover */
        }

/* Hero Section */
.dev-container {
  margin: 2rem;
}
.dev-hero-section {
  /* background-image: linear-gradient(267.43deg, var(--dev-accent-color) 4.95%, #3bc5ca 97.92%); */
  background-image: linear-gradient(to right, var(--dark-color) 0%, var(--accent-color) 50%, var(--dark-color) 100%);
  background-size:200% auto;
  color: var(--dev-white-color);
  text-align: center;
  padding: 100px 20px;
  border-radius: 40px;
  font-family: "Philosopher", Sans-serif;
  font-size: 42px;
  font-weight: 700;
  color: #ffffff;
}

.dev-hero-section h1 {
  /* font-size: 3rem; */
  font-weight: bold;
}

.dev-hero-section p {
  font-size: 1.1rem;
  margin: 20px 0;
}

.dev-hero-section .btn-primary {
  background-color: var(--dev-white-color);
  color: black;
  padding: 10px 30px;
  border-radius: 25px;
  transition: color 0.3s ease;
}

.dev-hero-section .btn-primary:hover {
  color: var(--dev-accent-color);
  animation: experiencemoveobject 2s infinite linear alternate;
}

/* Flex Section */
.dev-flex-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  gap: 20px;
  margin: 40px;
  margin-top: 50px;
  margin-bottom: 50px;
}

.dev-flex-box {
  flex: 1 1 calc(30% - 20px); /* Adjusts to screen size */
  min-width: 250px;
  background-color: var(--dev-white-color);
  border-radius: 15px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
  padding: 20px;
  text-align: center;
  transition: background-color 0.3s ease, transform 0.45s ease;
}

.dev-flex-box:hover {
  /* background-color: var(--dev-accent-color); */
  background-color: linear-gradient(to right, var(--dark-color) 0%, var(--accent-color) 50%, var(--dark-color) 100%);
  opacity: 0.5;
  /* background-image: linear-gradient(to right, var(--dark-color) 0%, var(--accent-color) 50%, var(--dark-color) 100%); */
  transform: translateY(-10px);
  
}

.dev-icon-row {
  font-size: 3rem;
  color: var(--dev-dark-color);
  margin-bottom: 10px;
}

.dev-heading-row h3 {
  font-size: 1.5rem;
  color: #000000;
  /* color: var(--dev-text-color); */
}

.dev-content-row p {
  font-size: 1rem;
  color: var(--dev-text-color);
}

.dev-button-row .btn-primary {
  background-color: var(--dev-white-color);
  color: black;
  border-radius: 20px;
  padding: 10px 20px;
}

.dev-button-row .btn-primary:hover {
  color: var(--dev-accent-color);
}
/* section 3 */
        /* .DD-section3 {
            max-width: 1100px;
            background: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
        }

        .industry-card {
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .industry-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        .industry-card i {
            font-size: 2rem;
            color: #007bff;
            margin-bottom: 10px;
        }

        .industry-card h5 {
            font-weight: bold;
            color: #333;
        }

        .industry-card p {
            font-size: 0.95rem;
            color: #666;
        }

        .counting-text {
            font-size: 1.2rem;
            font-weight: bold;
            color: #007bff;
            margin-top: 20px;
        } */

            /* Section Styling */
        .DD-section3 {
            /* max-width: 900px; */
            max-width: 100%;
            background: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 2rem;
        }

        /* Custom <details> Styling */
        details {
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            transition: all 0.3s ease-in-out;
            cursor: pointer;
        }

        details[open] {
            background: #f1f1f1;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        /* Summary Styling */
        summary {
            font-size: 1.1rem;
            font-weight: bold;
            color: #333;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* Hover effect */
        details:hover {
            background: #f9f9f9;
        }

        /* "And Counting..." Text */
        .counting-text {
            font-size: 1.2rem;
            font-weight: bold;
            color: #007bff;
            text-align: center;
            margin-top: 20px;
        }

        /*  */
/* ADvertisement */
  .DD-section-two {
    max-width: 1100px;
    margin: auto;
    padding: 40px 0;
}

/* Grid Styling */
.DD-section-two .row {
    display: flex;
    justify-content: center;
    gap: 20px;
}

/* Logo Box */
.logo-box {
    background: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100px;
    transition: all 0.3s ease-in-out;
}

/* Hover Effect */
.logo-box:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

/* Logo Image */
.logo-box img {
    max-width: 120px;
    max-height: 50px;
    object-fit: contain;
}
    </style>
</head>

<body>
    <?php include 'assets/includes/header.php' ?>

    <div class="page-header bg-section">
        <div class="page-header-box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header-content">
                            <h1 class="wow fadeInUp"><span></span></h1>
                            <nav class="wow fadeInUp" data-wow-delay="0.25s">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">home</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Our Team</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="dev-container ">
    <div class="dev-hero-section">
      <h1>Code. Create. Conquer</h1>
      <p>At the Digital  House, we transform your vision into a stunning online presence. As a leading website development company, we specialize in creating custom websites and web applications to suit the unique needs of your business. Our team of experienced website developers based in Raipur, India is dedicated to providing robust solutions that help you build meaningful digital engagement and achieve sustainable growth.
      </p>
      <!-- <a href="#dev-services" class="btn btn-primary">Explore Solutions</a> -->
    </div>
  </div>

  <!-- DD 2 section -->
  <section class="DD-section container">
    <!-- bg-white shadow-lg rounded p-5 -->
        <div class="row align-items-center">
            
            <!-- Left Column (Heading) -->
            <div class="col-md-5 text-center text-md-start">
                <h1 class="fw-bold text-dark">
                    Why Choose Our Web Development Services?
                </h1>
                <hr class="custom-hr">
            </div>

            <!-- Right Column (Three Features) -->
            <div class="col-md-7">
                
                <!-- Feature 1 -->
                <div class="feature mb-4">
                    <h2 class="fs-5 fw-semibold text-dark">Comprehensive web development solutions</h2>
                    <hr class="custom-hr">
                    <p class="text-muted">
                        Our services include everything from simple business websites to complex web applications. 
                        We ensure that your website delivers a unique user experience.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="feature mb-4">
                    <h2 class="fs-5 fw-semibold text-dark">Tailored strategies for diverse businesses</h2>
                    <hr class="custom-hr">
                    <p class="text-muted">
                        Whether you’re a startup, small business, or established company, we build websites that match 
                        your audience and align with your goals.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="feature mb-4">
                    <h2 class="fs-5 fw-semibold text-dark">Competence in platform and technology</h2>
                    <hr class="custom-hr">
                    <p class="text-muted">
                        We use modern tools, including WordPress, Shopify, PHP, and custom CMS solutions to deliver 
                        exceptional website development services.
                    </p>
                </div>

            </div>
        </div>
    </section>

<!-- DD section 3 -->

  <header class="text-center py-8">
    <hr style="width:2px;">
            <h1 class="text-4xl font-bold">Our Key Offerings
            </h1> 
            <!-- <p class="teamP">welcome the team page where innovation begin</p> -->
  </header>

  <!-- Development Solutions Section -->
  <div class="dev-features-section" id="dev-services">
    <!-- <h2 style="justify-content:center;">Explore Development Solutions</h2> -->
    <div class="dev-flex-container">
      <!-- Development Flex Box 1 -->
      <div class="dev-flex-box">
        <div class="dev-icon-row">
          <i class="fas fa-laptop-code"></i>
        </div>
        <div class="dev-heading-row">
          <h3>Custom Website Development
          </h3>
        </div>
        <div class="dev-content-row">
          <p>Our customized web development services are tailored to your unique needs. We create scalable, high-performance websites that reflect your brand identity.
          </p>
        </div>
        <!-- <div class="dev-button-row">
          <button class="btn btn-primary">Learn More</button>
        </div> -->
      </div>

      <!-- Development Flex Box 2 -->
      <!-- <div class="dev-flex-box">
        <div class="dev-icon-row">
          <i class="fas fa-database"></i>
        </div>
        <div class="dev-heading-row">
          <h3>E-Commerce Development</h3>
        </div>
        <div class="dev-content-row">
          <p>As an experienced e-commerce website developer, we build secure and user-friendly online stores. From Shopify setup to WooCommerce integration, we ensure a seamless shopping experience for your customers..</p>
        </div>
        <div class="dev-button-row">
          <button class="btn btn-primary">Learn More</button>
        </div>
      </div> -->

      <!-- Development Flex Box 3 -->
      <!-- <div class="dev-flex-box">
        <div class="dev-icon-row">
          <i class="fas fa-cloud"></i>
        </div>
        <div class="dev-heading-row">
          <h3>Web Application Development</h3>
        </div>
        <div class="dev-content-row">
          <p>For projects that require advanced functionality, our custom web application development company provides cutting-edge solutions that are secure, fast, and reliable.
          </p>
        </div>
        <div class="dev-button-row">
          <button class="btn btn-primary">Learn More</button>
        </div>
      </div> -->

      <!-- Development Flex Box 4 -->
      <div class="dev-flex-box">
        <div class="dev-icon-row">
          <i class="fas fa-cloud"></i>
        </div>
        <div class="dev-heading-row">
          <h3>Responsive Website Design</h3>
        </div>
        <div class="dev-content-row">
          <p>In today’s mobile-first world, we prioritize responsive design to ensure your website will look and run flawlessly on all devices. Our web development services focus on customizing and user-related solutions.
          </p>
        </div>
        <!-- <div class="dev-button-row">
          <button class="btn btn-primary">Learn More</button>
        </div> -->
      </div>

      <!-- Development Flex Box 5 -->
      <div class="dev-flex-box">
        <div class="dev-icon-row">
          <i class="fas fa-cloud"></i>
        </div>
        <div class="dev-heading-row">
          <h3>CMS Development
          </h3>
        </div>
        <div class="dev-content-row">
          <p>As a highly regarded CMS development company, we specialize in user-friendly content management systems that simplify website updates and maintenance.
          </p>
        </div>
        <!-- <div class="dev-button-row">
          <button class="btn btn-primary">Learn More</button>
        </div> -->
      </div>

      <!-- Development Flex Box 6 -->
      <!-- <div class="dev-flex-box">
        <div class="dev-icon-row">
          <i class="fas fa-cloud"></i>
        </div>
        <div class="dev-heading-row">
          <h3>Cloud Solutions</h3>
        </div>
        <div class="dev-content-row">
          <p>Leverage secure and scalable cloud technologies for your business.</p>
        </div>
        <div class="dev-button-row">
          <button class="btn btn-primary">Learn More</button>
        </div>
      </div> -->
     

      <!-- toggle function without javascript  -->
      <!-- <details>
      <summary>Why Choose Our Web Development Services?</summary>
      <p>Our web development services cover everything from business websites to complex applications, ensuring an excellent user experience.</p>
      </details> -->

      <!-- Additional Boxes (Add more as needed) -->
    </div>
  </div>

  <!-- section3 -->
  <!-- <section class="DD-section3 container">
        <h2 class="fw-bold text-dark mb-4">Industries We Serve</h2>
        <div class="row g-4">
            
            <div class="col-md-4">
                <div class="industry-card p-3">
                    <i class="fas fa-shopping-cart"></i>
                    <h5>E-commerce</h5>
                    <p>Expertly crafted websites that drive sales and customer loyalty.</p>
                </div>
            </div>

          
            <div class="col-md-4">
                <div class="industry-card p-3">
                    <i class="fas fa-hospital"></i>
                    <h5>Healthcare</h5>
                    <p>Accessible web development solutions for the healthcare sector.</p>
                </div>
            </div>

       
            <div class="col-md-4">
                <div class="industry-card p-3">
                    <i class="fas fa-graduation-cap"></i>
                    <h5>Education</h5>
                    <p>Interactive platforms for schools, colleges, and e-learning providers.</p>
                </div>
            </div>

     
            <div class="col-md-4">
                <div class="industry-card p-3">
                    <i class="fas fa-plane"></i>
                    <h5>Travel & Hospitality</h5>
                    <p>Engaging websites to enhance guest experiences.</p>
                </div>
            </div>

    
            <div class="col-md-4">
                <div class="industry-card p-3">
                    <i class="fas fa-microchip"></i>
                    <h5>Technology</h5>
                    <p>Dynamic web applications for tech-driven businesses.</p>
                </div>
            </div>

    
            <div class="col-md-4">
                <div class="industry-card p-3">
                    <i class="fas fa-rocket"></i>
                    <h5>Startups</h5>
                    <p>Affordable, scalable web solutions for new ventures.</p>
                </div>
            </div>

        </div>
  </section> -->

  <section class="DD-section3 container">
        <h2 class="fw-bold text-dark mb-4 text-center">Industries We Serve</h2>

        <!-- E-commerce -->
        <details>
            <summary><i class="fas fa-shopping-cart"></i> E-commerce</summary>
            <p>Expertly crafted websites that drive sales and customer loyalty.</p>
        </details>

        <!-- Healthcare -->
        <details>
            <summary><i class="fas fa-hospital"></i> Healthcare</summary>
            <p>Accessible web development solutions for the healthcare sector.</p>
        </details>

        <!-- Education -->
        <details>
            <summary><i class="fas fa-graduation-cap"></i> Education</summary>
            <p>Interactive platforms for schools, colleges, and e-learning providers.</p>
        </details>

        <!-- Travel and Hospitality -->
        <details>
            <summary><i class="fas fa-plane"></i> Travel & Hospitality</summary>
            <p>Engaging websites to enhance guest experiences.</p>
        </details>

        <!-- Technology -->
        <details>
            <summary><i class="fas fa-microchip"></i> Technology</summary>
            <p>Dynamic web applications for tech-driven businesses.</p>
        </details>

        <!-- Startups -->
        <details>
            <summary><i class="fas fa-rocket"></i> Startups</summary>
            <p>Affordable, scalable web solutions for new ventures.</p>
        </details>

    </section>
<!--  -->

<section class="DD-section-two container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3">
            <!-- Logos -->
            <div class="col">
                <div class="logo-box"><img src="assets/images/development/wordpress.png" alt="WordPress"></div>
            </div>
            <div class="col">
                <div class="logo-box"><img src="assets/images/development/shopify.png" alt="Shopify"></div>
            </div>
            <div class="col">
                <div class="logo-box"><img src="assets/images/development/angular.png" alt="AngularJS"></div>
            </div>
            <div class="col">
                <div class="logo-box"><img src="assets/images/development/bigcommerce.png" alt="BigCommerce"></div>
            </div>
            <!-- <div class="col">
                <div class="logo-box"><img src="duda-logo.png" alt="Duda"></div>
            </div>
            <div class="col">
                <div class="logo-box"><img src="joomla-logo.png" alt="Joomla"></div>
            </div>
            <div class="col">
                <div class="logo-box"><img src="laravel-logo.png" alt="Laravel"></div>
            </div> -->
            <!-- <div class="col">
                <div class="logo-box"><img src="react-logo.png" alt="React JS"></div>
            </div>
            <div class="col">
                <div class="logo-box"><img src="opencart-logo.png" alt="OpenCart"></div>
            </div>
            <div class="col">
                <div class="logo-box"><img src="shopify-logo.png" alt="Shopify"></div>
            </div>
            <div class="col">
                <div class="logo-box"><img src="weebly-logo.png" alt="Weebly"></div>
            </div>
            <div class="col">
                <div class="logo-box"><img src="wix-logo.png" alt="Wix.com"></div>
            </div> -->
        </div>
    </section>




   

    <?php include 'assets/includes/footer.php' ?>

<?php include 'assets/includes/scripts.php' ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>