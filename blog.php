<?php
include("database.php");
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>College Website</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
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
        <h1>Explore Our Certificate & Online Programs for 2025</h1>
    </section>
    

    
    <section class="blog-content">
        <div class="row">
            <div class="blog-left">
                <img src="./images/graduation.jpg" alt="Certificate Programs">
                <h2>Certificate & Online Programs for 2025</h2>
                
                <p>Our university offers a variety of certificate and online programs designed to enhance your skills and knowledge in today's competitive job market. Whether you are looking to advance your career or explore new fields, we have the right program for you.</p>
                <br>
                <p>With flexible online learning options, you can study at your own pace and from anywhere in the world. Our programs are crafted by industry experts to ensure you receive the most relevant and up-to-date information.</p>
                <br>
                <p>Join our community of learners and take the first step towards achieving your professional goals. Our dedicated faculty and support staff are here to assist you every step of the way.</p>
                <br>
                <p>Enroll today and unlock your potential with our comprehensive certificate programs!</p>
                
                <div class="comment-box">
                    <h3>Leave a comment</h3>
                    
                    
                   
                    <form class="comment-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <input type="text" name="name"  placeholder="Enter Name" required>
                        <input type="email" name="email" placeholder="Enter email" required>
                        <textarea rows="5" name="comment" placeholder="Your Comment" required></textarea>
                        
                        <button type="submit" class="submit" onclick="callAlert('COMMENTED')">POST COMMENT</button>
                        <script>
                            function callAlert(msg) {
                                var name = document.querySelector('.comment-form input[type="text"]').value;
                                var email = document.querySelector('.comment-form input[type="email"]').value;
                                var comment = document.querySelector('.comment-form textarea').value;
                        
                                if (name === "" || email === "" || comment === "") {
                                    alert("Please fill in all fields before submitting.");
                                } else {
                                    alert("Comment Posted");
                                }
                            }
                        </script>
                        
                    </form>
                </div>
            </div>
            
            <div class="blog-right">
    <h3>Post Categories</h3>
    <div>
        <span>Business Analytics</span>
        <span>21</span>
    </div>
    <div>
        <span>Data Science</span>
        <span>28</span>
    </div>
    <div>
        <span>Machine Learning</span>
        <span>15</span>
    </div>
    <div>
        <span>Computer Science</span>
        <span>34</span>
    </div>
    <div>
        <span>AutoCAD</span>
        <span>42</span>
    </div>
    <div>
        <span>Journalism</span>
        <span>22</span>
    </div>
    <div>
        <span>Commerce</span>
        <span>13</span>
    </div>

    <div>
        <span>Cybersecurity</span>
        <span>18</span>
    </div>
    <div>
        <span>Artificial Intelligence</span>
        <span>25</span>
    </div>
    <div>
        <span>Web Development</span>
        <span>30</span>
    </div>
    <div>
        <span>Digital Marketing</span>
        <span>27</span>
    </div>
    <div>
        <span>Graphic Design</span>
        <span>17</span>
    </div>
</div>

    </section> 
    

<section class="news-events">
    <h2>News & Events</h2>
    <div class="event">
        <h3>Upcoming Webinar: Career Opportunities in Data Science</h3>
        <p>Date: January 15, 2025</p>
        <p>Join us for an informative webinar where industry experts will discuss the latest trends and career opportunities in Data Science. Register now!</p>
    </div>
    <div class="event">
        <h3>Open House: Explore Our Campus</h3>
        <p>Date: January 20, 2025</p>
        <p>We invite prospective students to our Open House event. Come and explore our campus, meet faculty, and learn about our programs.</p>
    </div>
    <div class="event">
        <h3>Application Deadline for Spring Semester</h3>
        <p>Date: January 31, 2025</p>
        <p>Don't miss the application deadline for the Spring semester. Ensure your application is submitted on time!</p>
    </div>
</section>



<section class="student">
    <h1>What Our Student Says</h1>
    <p>Hear from our students about their experiences</p>
        <div class="row">
            <div class="student-col">
                <img src="./images/young-indian-girl-happy-smile-photo_53876-178991.avif">
                <div> 
                    <p>"I had a great experience at Amity University. The campus is well-equipped with modern infrastructure, including libraries, labs, and sports facilities. The faculty members are knowledgeable and approachable, always ready to help students with doubts. Amity offers ample opportunities for extracurricular activities, from cultural events to technical fests, which helped me develop my skills beyond academics. The placement cell is also quite active, ensuring good job opportunities for students. Overall, it’s a great place to learn and grow."</p>
                    <h3>Smitha</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
            </div>
            <div class="student-col">
                <img src="./images/profile-image-indian-university-student_1161356-77662.avif">
                   <div>
                    <p>"Amity University has a beautiful campus and a wide range of courses to choose from, which is great for students with diverse interests. However, the fee structure can be on the higher side compared to some other universities. While the faculty is generally good, some departments could improve their teaching methodologies. Placements are decent but vary significantly depending on the course and branch. Overall, it’s a decent option, but students should weigh the costs and benefits carefully before enrolling."</p>
                    <h3> Arjun</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
            </div>
            
        </div>
</section>

  

<section class="footer">
        <h4>About Our University</h4>
        <p>We are committed to providing quality education and fostering a supportive environment for all students. Our mission is to empower learners to achieve their academic and professional aspirations.</p>
        <div class="icons">
            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
            <a href="https://x.com/"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
            <a href="https://in.linkedin.com/school/"><i class="fa fa-linkedin"></i></a>
        </div>
        <p>Kuvempu <i class="fa fa-heart-o"></i> University</p>
</section>    


<script>
    var navLinks = document.getElementById("navLinks");

    function showMenu() {
        navLinks.style.right = "0";
    }

    function hideMenu() {
        navLinks.style.right = "-200px";
    }
</script>  
    
</body>
</html>
<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);

   
    if (!empty($name) && !empty($email) && !empty($comment)) {
        
        $sql = "INSERT INTO user (name, email, comment) VALUES ('$name', '$email', '$comment')";
        
        if (mysqli_query($conn, $sql)) {
            echo "comment posted";
        } else {
            echo "Error: " . mysqli_error($conn) ;
        }
    } else {
        echo "All fields are required.";
    }
}


mysqli_close($conn);
?>
