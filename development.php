<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="The team of experienced digital marketers, video creators, website developers and designers offering best solution for your business.">
    <meta name="keywords" content="The Digital House, Currency Tower, Digital Marketing">
    <meta name="author" content="The Digital House">
    <title>Online Advertising | Website Design and Development Company</title>
    <?php include 'assets/includes/head.php' ?>
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

/* body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  margin: 0;
  padding: 20px;
  background-color: var(--dev-secondary-color);
} */

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
}

.dev-hero-section h1 {
  font-size: 3rem;
  font-weight: bold;
}

.dev-hero-section p {
  font-size: 1.2rem;
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
      <h1>Development Excellence</h1>
      <p>Transform your online presence- Expert Web Development Services</p>
      <a href="#dev-services" class="btn btn-primary">Explore Solutions</a>
    </div>
  </div>

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
      <div class="dev-flex-box">
        <div class="dev-icon-row">
          <i class="fas fa-database"></i>
        </div>
        <div class="dev-heading-row">
          <h3>E-Commerce Development</h3>
        </div>
        <div class="dev-content-row">
          <p>As an experienced e-commerce website developer, we build secure and user-friendly online stores. From Shopify setup to WooCommerce integration, we ensure a seamless shopping experience for your customers..</p>
        </div>
        <!-- <div class="dev-button-row">
          <button class="btn btn-primary">Learn More</button>
        </div> -->
      </div>

      <!-- Development Flex Box 3 -->
      <div class="dev-flex-box">
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
        <!-- <div class="dev-button-row">
          <button class="btn btn-primary">Learn More</button>
        </div> -->
      </div>

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
      <div class="dev-flex-box">
        <div class="dev-icon-row">
          <i class="fas fa-cloud"></i>
        </div>
        <div class="dev-heading-row">
          <h3>Cloud Solutions</h3>
        </div>
        <div class="dev-content-row">
          <p>Leverage secure and scalable cloud technologies for your business.</p>
        </div>
        <!-- <div class="dev-button-row">
          <button class="btn btn-primary">Learn More</button>
        </div> -->
      </div>
     

      <!-- Additional Boxes (Add more as needed) -->
    </div>
  </div>

   

    <?php include 'assets/includes/footer.php' ?>

<?php include 'assets/includes/scripts.php' ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>