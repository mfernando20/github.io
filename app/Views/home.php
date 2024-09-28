<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InterMover</title>
    <link rel="stylesheet" href="<?= base_url('public/css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    


</head>
<body>
    <!-- Header Section -->
    <header id="top">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <h1>InterMover</h1>
                </div>
                <nav>
                    <ul class="nav-links">
                        <li><a href="#top" id="home-link">Home</a></li>
                        <li><a href="#about-us">About Us</a></li>
                       
                        <li><a  id="contactus">Contact Us</a></li>
                        <li><a href="<?= base_url('/login') ?>" class="btn">Login</a></li>
                        <li><a href="<?= base_url('/register') ?>" class="btn">Register</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>






    <!-- Hero Section 
    <section class="hero">
        <div class="container">
            <h2>Welcome to InterMover</h2>
            <p>Your trusted moving service provider.</p>
        </div>
    </section>-->

    <!-- Welcome Section -->
    <section id="welcome" class="welcome-section">
        <div class="welcome-content">
            <div class="welcome-text">
                <h1 class="fade-in">Welcome To</h1>
                <h2 class="fade-in">InterMover</h2>
                <p class="fade-in">Leave anxiety and frustration behind, we are here to make your moving process sound and clear and help you adapt to the new beautiful start in Bologna.</p>
            </div>

            <div class="welcome-image fade-in">
                <img src="<?= base_url('public/img/1.png') ?>" alt="Moving Service">
            </div>

        </div>
    </section>




    <!-- About Us Section -->
    <section id="about-us" class="about-us fade-in">

        <div class="about-image">
            <img src="<?= base_url('public/img/3.jpg') ?>" alt="Moving Service">
        </div>

        <div class="about-text">
            <h2>About InterMover</h2>
            <p>We are a non-profit start-up that was founded by a group of international students who like you struggled through the process of adaptation, bureaucratic procedures, and loss in the endless amount of information. We are here to help you obtain a healthy experience of moving to Bologna and become a part of the community and enjoy your international studying experience fully!</p>
        </div>  

    </section>










    <script>
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        // Get the target element by ID from the href attribute
        const targetId = this.getAttribute('href'); // e.g., "#section1"

        // Skip if targetId is just '#'
        if (targetId === '#') {
            console.warn("Anchor with href '#' found, skipping.");
            return; // Exit the function early
        }

        // Now we can safely query for the target element
        const targetElement = document.querySelector(targetId);

        // If the target element exists, scroll to it
        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: 'smooth'
            });
        } else {
            console.warn(`Element with ID ${targetId} not found.`);
        }
    });
});





    const fadeInElements = document.querySelectorAll('.fade-in');

    const options = {
        root: null, // Use the viewport as the container
        threshold: 0.1 // Trigger when 10% of the element is in view
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
                entry.target.style.opacity = '1'; // Set opacity to 1
                entry.target.style.transform = 'translateY(0)'; // Set transform
                observer.unobserve(entry.target); // Stop observing once animated
            }
        });
    }, options);

    fadeInElements.forEach(element => {
        observer.observe(element); // Observe each fade-in element
    });


document.querySelector('#home-link').addEventListener('click', function (e) {
    e.preventDefault(); // Prevent default anchor behavior

    // Smoothly scroll back to the top
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});






    </script>


<!-- boxes -->
    <section id="database" class="database-section">
        <h2 class="section-title">Database</h2>

            <div class="database-container">
                <div class="database-box fade-in">
                    <i class="fas fa-home icon"></i>
                        <h3>Accommodation</h3>
                            <p>Find the database of the verified sources where to look for accommodation, that will suit your budget and requirements.</p>
                </div>

                <div class="database-box fade-in">
                    <i class="fas fa-bus icon"></i>
                        <h3>City Transport</h3>
                            <p>Discover transportation opportunities around Bologna and suburbs, including information regarding prices, discounts and purchase options.</p>
                </div>
        <div class="database-box fade-in">
            <i class="fas fa-file-alt icon"></i>
            <h3>Documents</h3>
            <p>Check all the requirements regarding paperwork required for your long-term stay, university and course enrolments, and others.</p>
        </div>
        <div class="database-box fade-in">
            <i class="fas fa-mobile-alt icon"></i>
            <h3>Mobile and Banks</h3>
            <p>Find the comparison of possible tariffs, pros and cons, necessary requirements, payment options and conditions of obtaining various services.</p>
        </div>
        <div class="database-box fade-in">
            <i class="fas fa-utensils icon"></i>
            <h3>City Life</h3>
            <p>Look for the perfect place for a meal or a shop to purchase home supplies, here you will find addresses and website links.</p>
        </div>
        <div class="database-box fade-in">
            <i class="fas fa-map-marker-alt icon"></i>
            <h3>City Services</h3>
            <p>Discover city services and the locations of necessary places such as hospitals, post offices, train stations, and information regarding them.</p>
        </div>
        <div class="database-box fade-in">
            <i class="fas fa-users icon"></i>
            <h3>Clubs</h3>
            <p>Find links to various groups and chats based on your interests. Get involved in the community to become a part of Bologna even faster.</p>
        </div>
        <div class="database-box fade-in">
            <i class="fas fa-graduation-cap icon"></i>
            <h3>University Life</h3>
            <p>Find out about various activities, fairs, and events the university provides and decide what you want to do to experience your university life fully.</p>
        </div>
        <div class="database-box fade-in">
            <i class="fas fa-plane icon"></i>
            <h3>Leisure Activities</h3>
            <p>Look for opportunities within and outside of Bologna to explore the region that is to become your new home, find out about interesting locations and destinations to explore according to your preferences.</p>
        </div>
    </div>
    </section>


    <section id="how-it-works" class="how-it-works">
  <div class="container">
    <h2>How It Works</h2>

    <div class="work-box" data-aos="fade-up">
      <div class="work-box-item">
        <div class="icon"><i class="fas fa-info-circle"></i></div>
        <h3>Verified Source of Information</h3>
        <p>Our goal is to bring structured information regarding all aspects that might be of need when you move to Bologna and start your life here and reduce the stress level that might rise.</p>
      </div>

      <div class="work-box-item" data-aos="fade-up">
        <div class="icon"><i class="fas fa-dollar-sign"></i></div>
        <h3>Free Access to All Database</h3>
        <p>The project is fee-free, you do not need to pay anything for usage of the information.</p>
      </div>

      <div class="work-box-item" data-aos="fade-up">
        <div class="icon"><i class="fas fa-users"></i></div>
        <h3>Direct Access to the Community</h3>
        <p>Become integrated into the local life right away, find out what to do and where to go just by adjusting a filter in the correct database.</p>
      </div>
    </div>
  </div>
</section>


<section id="faq" class="faq-section">
  <div class="container">
    <h2 class="faq-title" data-aos="fade-up">Frequently Asked Questions</h2>

    <div class="faq-item" data-aos="fade-up">
      <h3 class="faq-question">1. What is InterMover?</h3>
      <div class="faq-answer">
        <p>InterMover is a non-profit start-up aimed at helping international students adapt to life in Bologna with ease.</p>
      </div>
    </div>

    <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
      <h3 class="faq-question">2. How does InterMover help with accommodation?</h3>
      <div class="faq-answer">
        <p>We provide verified resources and links to trusted sites that offer a variety of accommodation options suitable for different budgets.</p>
      </div>
    </div>

    <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
      <h3 class="faq-question">3. Do I need to pay to access the database?</h3>
      <div class="faq-answer">
        <p>No, all information provided by InterMover is free of charge. We are a fee-free project.</p>
      </div>
    </div>

    <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
      <h3 class="faq-question">4. How do I join the community?</h3>
      <div class="faq-answer">
        <p>You can join our online community through our website by registering or subscribing to our mailing list.</p>
      </div>
    </div>

    <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
      <h3 class="faq-question">5. What services does InterMover offer?</h3>
      <div class="faq-answer">
        <p>We provide assistance with accommodation, city transport, university life, documents, and more.</p>
      </div>
    </div>

    <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
      <h3 class="faq-question">6. Can InterMover help with finding a job?</h3>
      <div class="faq-answer">
        <p>We provide resources for job-seeking students, including links to local job boards and tips for finding employment in Bologna.</p>
      </div>
    </div>

    <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
      <h3 class="faq-question">7. How can I contact InterMover for more help?</h3>
      <div class="faq-answer">
        <p>You can reach out to us via the contact form on our website or through our social media channels for assistance.</p>
      </div>
    </div>
  </div>
</section>



<!-- Contact Us Overlay Panel -->
    <div id="contactUsOverlay" class="overlay">
        <div class="overlay-content">
            <span class="close-btn">&times;</span>
            <h2>Contact Us</h2>
            <form id="contactForm">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit" id="contactUs_submit">Submit</button>
            </form>
        </div>
    </div>

<script>
    document.getElementById('contactForm').addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent default form submission

        // Gather form data
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        // Send data using fetch API
        fetch('<?= base_url('contact_us/store') ?>', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                user_name: name,
                user_email: email,
                message: message
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Message sent successfully!');
                document.getElementById('contactForm').reset(); // Reset form
                document.getElementById('contactUsOverlay').style.display = 'none'; // Close overlay
            } else {
                alert('Error sending message: ' + data.error);
            }
        })
        .catch((error) => {
            console.error('Error:', error);
            alert('An error occurred while sending your message.');
        });
    });
</script>


























    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    
    <script>
        AOS.init({
            duration: 1200, // Animation duration
        });

        document.querySelectorAll('.faq-item').forEach(item => {
  item.addEventListener('click', () => {
    // Toggle 'active' class to show/hide the answer
    item.classList.toggle('active');
  });
});



// Get the overlay and the "About Us" button
var aboutUsOverlay = document.getElementById('contactUsOverlay');
var aboutUsLink = document.getElementById('contactus');

// Get the close button
var closeBtn = document.querySelector('.close-btn');

// When the user clicks on the "About Us" button
aboutUsLink.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the link's default behavior
    contactUsOverlay.style.display = 'block'; // Show the overlay
});

// When the user clicks on the close button
closeBtn.addEventListener('click', function() {
    contactUsOverlay.style.display = 'none'; // Hide the overlay
});

// When the user clicks outside the overlay content, close the overlay
window.onclick = function(event) {
    if (event.target == contactUsOverlay) {
        contactUsOverlay.style.display = 'none'; // Hide the overlay
    }
}








   

































    </script>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <p>&copy; 2024 InterMover. All rights reserved.</p>
        </div>
    </footer>

   <!--<script src="<?= base_url('public/js/script.js') ?>"></script>-->
</body>
</html>
