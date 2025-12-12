<?php
include("database.php");

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['name'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    if (!empty($name) && !empty($email) && !empty($message)) {
        $sql = "INSERT INTO student (name, email, message) VALUES ('$name', '$email', '$message')";
        mysqli_query($conn, $sql);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact - College Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <style>
        #successMessage {
            display: none;
            color: green;
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="./images/kuvempu.png"></a>
            <div class="nav-links" id="navLinks">  
                <i class="fa fa-close" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="course.html">COURSES</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Contact Us</h1>
    </section>

    <section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.7799556606706!2d75.63017817485553!3d13.731767886657964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbb038e27fb4f9b%3A0x48baa6319ba953f!2sKuvempu%20University!5e0!3m2!1sen!2sus!4v1746543885909!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
    </section>

    <section class="contact-us">
        <div class="contact-col">
            <h3>College Contact Information</h3>
            <p><strong>Address:</strong><br>Kuvempu University<br>Shankaraghatta, Shivamogga<br>Karnataka, India</p>
            <p><strong>Phone:</strong> 8852568912</p>
            <p><strong>Email:</strong> kuvempu@university.com</p>
        </div>

        <div class="contact-col">
            <h2>For Admission Enquiry</h2><br>
            <form id="contactForm" onsubmit="return handleSubmit(event)">
                <input type="hidden" name="access_key" value="7d0b3e0f-a87c-4359-bb12-b354051985a0">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea rows="8" name="message" placeholder="Your Message" required></textarea>
                <button type="submit" class="submit">Submit</button>
                <div id="successMessage">✅ Message submitted successfully!</div>
            </form>
        </div>
    </section>

    <section class="footer">
        <h4>About Our University</h4>
        <p>We are dedicated to providing quality education and fostering a supportive environment for all students.</p>
        <div class="icons">
            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
            <a href="https://x.com/"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
            <a href="https://in.linkedin.com/school/"><i class="fa fa-linkedin"></i></a>
        </div>
        <p>Kuvempu <i class="fa fa-heart-o"></i> University</p>
    </section>

    <script>
        function showMenu() {
            document.getElementById("navLinks").style.right = "0";
        }
        function hideMenu() {
            document.getElementById("navLinks").style.right = "-200px";
        }

        function handleSubmit(event) {
            event.preventDefault();
            const form = document.getElementById('contactForm');
            const formData = new FormData(form);

            
            fetch("https://api.web3forms.com/submit", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(result => {
                if (result.success) {
                    document.getElementById("successMessage").style.display = "block";
                    form.reset();
                } else {
                    alert("Failed to submit to Web3Forms.");
                }
            })
            .catch(() => alert("Error submitting to Web3Forms."));

            
            fetch("contact.php", {
                method: "POST",
                body: formData
            });

            return false;
        }
    </script>
</body>
</html>
