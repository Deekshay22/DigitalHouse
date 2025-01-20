<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/tdh.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        :root {
            --primary-color: #019297;
            --accent-color: #73ed7c;
            --dark-color: #019297;
            --white-color: #FFFFFF;
            --text-color: #8F8F8F;
            --divider-color: #DFE1DE;
            --dark-divider-color: #FFFFFF33;
        }

        body {
            font-family: 'Arial', sans-serif;
        }

        .contact-container {
            padding: 10px;
        }

        .contact-hero {
            background-image: linear-gradient(267.43deg, var(--accent-color) 4.95%, #3bc5ca 97.92%);
            font-size: 60px;
            color: var(--white-color);
            padding: 100px 20px;
            text-align: center;
            border-radius: 360px;
            margin: 50px auto;
            max-width: 800px;
            transition: all 0.5s ease-in-out;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
        }

        .contact-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 360px;
            z-index: -1;
            transition: opacity 0.5s ease-in-out;
        }

        .contact-hero:hover {
            transform: scale(1.05);
            background-image: linear-gradient(267.43deg, var(--white-color) 4.95%, #73ed7c 97.92%);
            color: var(--dark-color);
        }

        .contact-hero h1 {
            font-size: 4rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .contact-hero p {
            font-size: 1.5rem;
            color: var(--dark-color);
            margin: 0;
        }

        .contact-form input,
        .contact-form textarea {
            border-radius: 5px;
            border: 2px solid var(--dark-color);
        }

        .contact-btn {
            background: var(--dark-color);
            color: var(--white-color);
            border: none;
        }

        .contact-btn:hover {
            background: var(--accent-color);
            color: var(--dark-color);
        }
    </style>
</head>
<body>

    <div class="contact-container">
        <section class="contact-hero">
            <h1>Contact Us</h1>
            <p>We'd love to hear from you! Reach out to us for any inquiries, collaborations, or feedback.</p>
        </section>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-info-section">
                    <p><strong>Address:</strong> Raipur, India</p>
                    <p><strong>Email:</strong> contact@digitalhouse.com</p>
                    <p><strong>Phone:</strong> +91 1234567890</p>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6">
                <h2>Send Us a Message</h2>
                <form class="contact-form">
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea class="form-control" id="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn contact-btn w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script> -->
    <style>
        /* Scoped Styles for Contact Section */
            
        /* .contact-section */
         .contact-hero {
            background-image: linear-gradient(267.43deg, var(--accent-color) 4.95%, #3bc5ca 97.92%);
            font-size: 60px;
            color: var(--white-color);
            padding: 100px 20px;
            text-align: center;
            border-radius: 360px;
            margin: 50px auto;
            max-width: 800px;
            transition: all 0.5s ease-in-out;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
        }

        .contact-section .contact-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background-color: rgba(255, 255, 255, 0.2);
            /* background-color: rgba(7, 7, 7, 0.2); */
            border-radius: 360px;
            z-index: -1;
            transition: opacity 0.5s ease-in-out;
        }

        .contact-section .contact-hero:hover {
            transform: scale(1.05);
            background-image: linear-gradient(267.43deg, var(--white-color) 4.95%, #73ed7c 97.92%);
            color: var(--dark-color);
        }

        .contact-section .contact-hero h1 {
            font-size: 4rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .contact-section .contact-hero p {
            font-size: 1.5rem;
            color: var(--dark-color);
            margin: 0;
        }

        .contact-section .contact-form input,
        .contact-section .contact-form textarea {
            border-radius: 5px;
            /* border: 2px solid var(--dark-color); */
            border: 2px solid black;
        }

        .contact-section .contact-btn {
            background: var(--dark-color);
            color: var(--white-color);
            border: none;
        }

        .contact-section .contact-btn:hover {
            background: var(--accent-color);
            color: var(--dark-color);
        }

        .contact-section .contact-info-section {
            padding: 20px;

            background: var(--divider-color);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="contact-section">
        <!-- Contact Hero Section -->
         <!-- Deeksha -->
        <!-- <div class="contact-container">
            <section class="contact-hero">
                <h1>Contact Us</h1>
                <p><em> goal is to support your company's success in the digital sphere! 
                    It's simple to get in touch with us, whether you need a consultation, have questions, or are prepared to step up your marketing. </em>
                </p>
            </section>
        </div> -->

        <!-- Contact Information Section -->
         <!-- Deeksha -->
        <!-- <div class="container my-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-info-section">
                    <p>Why Choose The Digital House?
                We are your growth partner in addition to being a service provider! Our team of digital
                 marketing specialists is dedicated to providing customized strategies that complement your particular objectives.</p>
                        <p><strong>Address:</strong> Raipur, India</p>
                        <p><strong>Email:</strong>  thedigitalhouse06@gmail.com</p>
                        <p><strong>Phone:</strong> +91  86-020202-67</p>
                    </div>
                </div>
            </div> -->

            <div class="row mt-5">
                <div class="col-md-6">
                    <h2><b>Get in Touch Today!</b></h2>
                    <form class="contact-form">
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="email" 
                            placeholder=" Send us your queries or project details anytime!"
                            required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea class="form-control" id="message" placeholder=" Explore our services and success storie" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn contact-btn w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

