<?php include 'config/db_connection.php'; ?>
<?php
$tblname = "consultation";
$tblkey = "id";

// Check if the form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // echo "vaibhav";die;
    // Retrieve the values from the POST request
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $business = $_POST['address'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];

    $budget = $_POST['budget'];
    $specify_req = $_POST['specify_req'];
    $remark = $_POST['remark'];

    $designationArray = $_POST['designation'];
    $designationString = implode(",", $designationArray);
    $budgetArray = $_POST['budget'];
    $budgetString = implode(",", $budgetArray);


    // echo $filename;die;
    // Prepare the SQL query with placeholders
    $stmt = $conn->prepare("INSERT INTO $tblname (name, contact, business_address, email, city, state, country, designation, budget, specify_requirement, remark) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");


    // Bind the parameters to the query (s = string, s = string, s = string, s = string)
    $stmt->bind_param("sssssssssss", $name, $mobile, $business, $email, $city, $state, $country, $designationString, $budgetString, $specify_req, $remark);

    //Execute the query
    if ($stmt->execute()) {
        // Load SweetAlert styles and script
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.all.min.js'></script>";
        echo "<link href='https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.min.css' rel='stylesheet'>";
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Submited Successfully',
                    icon: 'success',
                    draggable: true
                });
            });
        </script>";
        

        // exit(); // Ensure script stops execution after success
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Cappuccino</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <style>
        .select2-container--default .select2-selection--multiple {
            border-width: 0;
            /* border-style: solid; */
            border-color: #e5e7eb;
            border-radius: 8px;
            padding: 6px;
        }

        .bg-yellow-500 {
            --tw-bg-opacity: 1;
            background-color: rgb(39 80 53);
        }

        .select2-container--default .select2-selection--multiple:hover {

            border: 2px solid #f59e0b;
            cursor: pointer;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: rgb(100, 171, 103) !important;
            color: white !important;
            border-radius: 5px;
        }


        .select2-container--default .select2-selection--multiple .select2-selection__placeholder {
            color: #aaa;
        }


        .select2-container--default .select2-results__option {
            background: white;
            /* color: black; */
        }


        .select2-container--default .select2-results__option--selected {
            background: #4CAF50 !important;
            color: white !important;
        }


        .select2-container--default .select2-results__option--highlighted {
            background: #45a049 !important;
            color: white !important;
        }
    </style>

</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Welcome to the Digital House</h2>
            <button class="text-gray-500 hover:text-gray-700">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <p class="text-gray-600 mb-4">
            Share your requirement with us and get a call back from our representative to discuss which plan suits your requirement better.</p>
        <form method="post" id="myForm">
            <div class="mb-4">
                <input type="text" placeholder="Full name..." class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" name="name">
            </div>
            <div class="mb-4">
                <input type="text" placeholder="Phone Number..." class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" name="mobile" maxlength="10">
            </div>
            <div class="mb-4">
                <input type="text" placeholder="Business Address" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" name="address">
            </div>
            <div class="mb-4">
                <input type="email" placeholder="Email..." class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" name="email">
            </div>
            <div class="mb-4">
                <input type="text" placeholder="City" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" name="city">
            </div>
            <div class="mb-4">
                <input type="text" placeholder="State" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" name="state">
            </div>
            <div class="mb-4">
                <input type="text" placeholder="Country" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" name="country">
            </div>

            <div class="mb-4">
                <select id="multiSelect2" multiple="multiple" style="width: 100%;" name="designation[]" required>
                    <option>Seo Smm</option>
                    <option>Content Marketing</option>
                    <option>Meta Ads</option>
                    <option>Google Ads</option>
                    <option>Youtube Ads</option>
                    <option>LinkedIn Ads</option>
                    <option>Graphic Designing</option>
                    <option>Video Editing</option>
                    <option>Web Development</option>
                </select>
            </div>


            <div class="mb-4">
                <select id="multiSelect3" multiple="multiple" style="width: 100%;" name="budget[]" required>
                    <option>0 - 25,000</option>
                    <option>25,000 - 50,000</option>
                    <option>50,000 - 75,000</option>
                </select>
                <!-- <p class="text-red-500 text-sm mt-1">Required</p> -->
            </div>
            <!-- <div class="relative w-80"> -->


            <div class="mb-4">
                <input type="text" placeholder="Please Specify your Requirement" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" name="specify_req">
            </div>
            <div class="mb-4">
                <input type="text" placeholder="Remark" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" name="remark">
            </div>

            <button type="submit" class="w-full bg-yellow-500 text-white p-3 rounded-lg font-bold hover:bg-yellow-600" name="submit">Send Message</button>
        </form>
    </div>

    <!--  -->



    <script>
        $(document).ready(function() {
            $('#multiSelect2').select2({
                placeholder: "What you want",
                allowClear: true
            });
        });

        $(document).ready(function() {
            $('#multiSelect3').select2({
                placeholder: "Budget",
                allowClear: true
            });
        });
        // 
    </script>

</body>

</html>