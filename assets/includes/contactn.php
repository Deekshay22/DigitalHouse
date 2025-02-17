<?php
$tblname = "contact_us";
$tblkey = "id";

// Check if the form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // echo "vaibhav";die;
    // Retrieve the values from the POST request
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $description = $_POST['description'];

    // Prepare the SQL query with placeholders
    $stmt = $conn->prepare("INSERT INTO $tblname (name, mobile, email, description) VALUES (?, ?, ?, ?)");

    // Bind the parameters to the query (s = string, s = string, s = string, s = string)
    $stmt->bind_param("ssss", $name, $mobile, $email, $description);

    // Execute the query
    if ($stmt->execute()) {
        // Success: show SweetAlert
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.all.min.js'></script>";
        echo "<link href='https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.min.css' rel='stylesheet'>";
        echo "<script>
                Swal.fire({
                    title: 'Message Send Successfully',
                    icon: 'success',
                    draggable: true
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
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/tdh.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        .h-64 {
            height: 20rem;
        }

        .text-center {
            /* background: var(--white-color); */
        }

        .flex-col {
            background: var(--white-color);
            /* background-images:url(../images/Learn/Contact.png); */

        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                /* grid-template-columns: repeat(2, minmax(0, 1fr)); */
            }
        }

        .p-3:hover {
            /* color: */
        }

        .contact {
            font-size: 20px;
        }

        .contacturl {
            /* background-image: url(../images/Contact/Contact.png);
    background-size: cover;
    background-repeat: no-repeat;
    border-radius: 0px; */
        }
    </style>
</head>

<body>
    <!-- "bg-gradient-to-b from-[#0a2540] to-[#0a2540] text-white" -->
    <div class="page-header bg-section">
        <div class="page-header-box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header-content">
                            <h1 class="wow fadeInUp">Contact<span> us</span></h1>
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
    <!-- bg-[#0f457a]  -->

    <main class="contacturl flex flex-col items-center">
        <header class="text-center py-8">
            <h1 class="text-4xl font-bold">"Don’t be a stranger—let’s build something great together!"</h1>
            <br>
            <p class="contact">We are your growth partner in addition to being a service provider! </p>
            <p class="contact">Our team of digital marketing specialists is dedicated to providing customized strategies that complement your particular objectives.</p>
        </header>
        <header class="text-center py-8">
            <h1 class="text-4xl font-bold">Get in Touch Today!</h1>
        </header>
        <div class="bg-[#0a2540] p-8 rounded-lg w-11/12 md:w-2/3 lg:w-1/2">
            <form class="space-y-4" method="post">
                <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                    <input class="p-3 rounded bg-[#0a2540] border border-[#ffffff] text-white focus:outline-none focus:ring-2 focus:ring-[#ffffff]" placeholder="Name" type="text" name="name" />
                    <input class="p-3 rounded bg-[#0a2540] border border-[#ffffff] text-white focus:outline-none focus:ring-2 focus:ring-[#ffffff]" placeholder="Phone Number" type="text" name="mobile" maxlength="10" />
                </div>
                <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                    <input class="p-3 rounded bg-[#0a2540] border border-[#ffffff] text-white focus:outline-none focus:ring-2 focus:ring-[#ffffff]" placeholder="Email" type="email" name="email" />
                    <!-- <input class="p-3 rounded bg-[#0a2540] border border-[#ffffff] text-white focus:outline-none focus:ring-2 focus:ring-[#ffffff]" placeholder="Address" type="text"/> -->
                </div>
                <textarea class="w-full p-3 rounded bg-[#0a2540] border border-[#ffffff] text-white focus:outline-none focus:ring-2 focus:ring-[#ffffff]" placeholder="Textarea" name="description"></textarea>
                <div class="g-recaptcha" data-sitekey="6Ld8zcgqAAAAAB0v7d_837czLG_9J2ETlmW7zKnj"></div>
                <button class="w-full py-3 bg-[#ffffff] text-[#0a2540] rounded-lg font-bold hover:bg-[#e0e0e0]" type="submit" name="submit">SEND MESSAGE</button>
            </form>
        </div>
        <!-- <div class="flex flex-col md:flex-row justify-around items-center w-full mt-8 space-y-4 md:space-y-0">
            <div class="flex items-center space-x-2">
                <i class="fas fa-map-marker-alt text-2xl text-[#ffffff]"></i>
                <span>Place x, 77 New XC Street, XYZ</span>
            </div>
            <div class="flex items-center space-x-2">
                <i class="fas fa-phone-alt text-2xl text-[#ffffff]"></i>
                <span>+123 456 7890</span>
            </div>
            <div class="flex items-center space-x-2">
                <i class="fas fa-envelope text-2xl text-[#ffffff]"></i>
                <span>youremail@domain.com</span>
            </div>
        </div> -->
        <div class="w-full mt-8">
            <!-- <img alt="Map showing the location" class="w-full h-64 object-cover" height="700" 
            src="https://storage.googleapis.com/a1aa/image/cOsInDwU7KIfICPWJNn3IajYFPtqrk1UqfLfqVaYfvHRU1bQB.jpg" width="1200"/> -->

            <iframe src="https://onlylinks.cc/qQWu" frameborder="1rem" class="w-full h-64 object-cover" height="700" width="1200"></iframe>
        </div>
    </main>