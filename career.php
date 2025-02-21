<?php include 'config/db_connection.php'; ?>
<?php
$tblname = "careers";
$tblkey = "id";

// Check if the form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
  // echo "vaibhav";die;
  // Retrieve the values from the POST request
  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $opportunitie = $_POST['opportunitie'];

  $fileInputName = 'file_upload';
  $targetDir = "uploads/";
  $maxFileSize = 5000000; //5mb
  $allowedTypes = ['pdf'];

  $filename = uploadFile($fileInputName, $targetDir, $maxFileSize, $allowedTypes);

  // echo $filename;die;
  // Prepare the SQL query with placeholders
  $stmt = $conn->prepare("INSERT INTO $tblname (name, mobile, email, opportunitie, file_upload) VALUES (?, ?, ?, ?, ?)");

  // Bind the parameters to the query (s = string, s = string, s = string, s = string)
  $stmt->bind_param("sssss", $name, $mobile, $email, $opportunitie, $filename);

  // Execute the query
  if ($stmt->execute()) {
    // Success: show SweetAlert

    echo "<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            title: 'Submit Successfully',
            icon: 'success',
            draggable: true
        });
        });
    </script>";
  } else {
    echo "Error: " . $stmt->error;
  }

  // Close the statement and connection
  $stmt->close();
}

// Close the database connection
$conn->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="description" content="Reach out to us for latest job opening at one of the best digital marketing and web development company in Raipur, Chhattisgarh, India.">
  <meta name="keywords" content="The Digital House, Currency Tower, Digital Marketing">
  <meta name="author" content="The Digital House">
  <title>Job Openings and Career at The Digital House</title>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <?php include 'assets/includes/head.php' ?>
</head>

<body>
  <?php include 'assets/includes/header.php' ?>

  <div class="page-header bg-section">
    <div class="page-header-box">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header-content">
              <h1 class="wow fadeInUp">Career<span>s</span></h1>
              <nav class="wow fadeInUp" data-wow-delay="0.25s">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">home</a></li>
                  <li class="breadcrumb-item" aria-current="page">about us</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="career-container" id="services-container"> -->
  </div>
  <!-- career info -->

  <header class="text-center py-16 px-6 bg-gradient-to-r from-blue-50 to-gray-100 shadow-md">
    <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight relative inline-block">
      Your passion deserves a purpose—find it with us
      <span class="block w-16 h-1 bg-blue-500 mx-auto mt-2 rounded"></span>
    </h1>
    <div class="max-w-3xl mx-auto mt-6 space-y-4">
      <p class="text-lg text-gray-700 leading-relaxed">
        At <span class="font-semibold text-blue-600">Digital House</span>, we view marketing as an
        <span class="italic text-blue-500">art and science</span> that propels change, not just a strategy.
        <br>Our forward-thinking digital marketing agency, based in <span class="font-semibold text-blue-600">Raipur, India</span>,
        is committed to developing creative solutions that support brands' expansion and success in the digital sphere.
      </p>
      <p class="text-lg text-gray-700 leading-relaxed">
        Joining our team means being a part of a
        <span class="font-semibold text-blue-600">vibrant, encouraging, and cooperative</span> environment where
        <span class="text-blue-500">strategy and creativity</span> coexist.
        <br>We empower our employees to realize their full potential and deliver exceptional outcomes.
      </p>
    </div>
  </header>
  <div class="infocc">
    <div class="career-coninfo-form-container" career-coninfo>
      <h2>Contact Us</h2>
      <form class="career-INfo" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="career-coninfo-name">Name</label>
          <input type="text" class="form-control" id="career-coninfo-name" placeholder="Enter your name" required name="name">
        </div>
        <div class="form-group">
          <label for="career-coninfo-email">Email</label>
          <input type="email" class="form-control" id="career-coninfo-email" placeholder="Enter your email" required name="email">
        </div>
        <div class="form-group">
          <label for="career-coninfo-phone">Phone</label>
          <input type="tel" class="form-control" id="career-coninfo-phone" placeholder="Enter your phone number" name="mobile">
        </div>
        <div class="form-group">
          <label for="career-coninfo-phone">Which Opportunitie</label>

          <select name="opportunitie" id="" class="form-control">
            <option value="">------Select------</option>
            <option value="Digital Marketer">Digital Marketer</option>
            <option value="UI/UX Developer">UI/UX Developer</option>
            <option value="Web Develope">Web Develope</option>
            <option value="Graphic Designer">Graphic Designer</option>
          </select>
        </div>
        <div class="form-group">
          <label for="career-coninfo-message">Upload resume</label>
          <input type="file" class="form-control" name="file_upload" id="career-coninfo-message" rows="4" placeholder="Write your message here">
          <p style="color:red;"><small>Only .pdf can be support. File size less than 5mb</small></p>
        </div>
        <br>
        <div class="g-recaptcha" data-sitekey="6Ld8zcgqAAAAAB0v7d_837czLG_9J2ETlmW7zKnj"></div>
        <!-- <button type="submit" class="btn btn-primary btn-block btn-default">Submit</button> -->
        <button type="submit" name="submit" class=" btn-primary career-job-button btn-block btn-default">Submit</button>
      </form>
    </div>
  </div>

  <!-- job opportunity -->
  <div class="career-job-container">
    <h2 class="career-job-heading">Job Opportunities</h2>
    <div class="career-job-grid">
      <!-- Job Cards -->
      <div class="career-job-card">
        <div class="career-job-icon">
          <i class="fas fa-briefcase"></i>
        </div>
        <h3 class="career-job-title">Digital Marketer</h3>
        <p class="career-job-description">Leverage agile frameworks data to provide a robust synopsis for high-level overviews.</p>
        <!-- <button >Apply Now</button> -->
        <a href="career.php" class="career-job-button btn-default">Apply Now</a>
      </div>

      <div class="career-job-card">
        <div class="career-job-icon">
          <i class="fas fa-cogs"></i>
        </div>
        <h3 class="career-job-title">UI/UX Developer</h3>
        <p class="career-job-description">Leverage agile frameworks data to provide a robust synopsis for high-level overviews.</p>
        <!-- <button class="career-job-button btn-default">Apply Now</button> -->
        <a href="career.php" class="career-job-button btn-default">Apply Now</a>
      </div>

      <div class="career-job-card">
        <div class="career-job-icon">
          <i class="fas fa-laptop-code"></i>
        </div>
        <h3 class="career-job-title">Web Developer</h3>
        <p class="career-job-description">Leverage agile frameworks data to provide a robust synopsis for high-level overviews.</p>
        <!-- <button class="career-job-button btn-default">Apply Now</button> -->
        <a href="career.php" class="career-job-button btn-default">Apply Now</a>
      </div>

      <div class="career-job-card">
        <div class="career-job-icon">
          <i class="fas fa-tasks"></i>
        </div>
        <h3 class="career-job-title">Graphic Designer</h3>
        <p class="career-job-description">Leverage agile frameworks data to provide a robust synopsis for high-level overviews.</p>
        <!-- <button class="career-job-button btn-default">Apply Now</button> -->
        <a href="career.php" class="career-job-button btn-default">Apply Now</a>
      </div>

      <!-- <div class="career-job-card">
      <div class="career-job-icon">
        <i class="fas fa-database"></i>
      </div>
      <h3 class="career-job-title">Database Design</h3>
      <p class="career-job-description">Leverage agile frameworks data to provide a robust synopsis for high-level overviews.</p>
      <button class="career-job-button">Apply Now</button>
    </div> -->

      <!-- <div class="career-job-card">
      <div class="career-job-icon">
        <i class="fas fa-react"></i>
      </div>
      <h3 class="career-job-title">React Developer</h3>
      <p class="career-job-description">Leverage agile frameworks data to provide a robust synopsis for high-level overviews.</p>
      <button class="career-job-button">Apply Now</button>
    </div> -->
    </div>
  </div>



  <?php include 'assets/includes/footer.php' ?>

  <?php include 'assets/includes/scripts.php' ?>
</body>

</html>