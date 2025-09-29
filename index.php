<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Business Solutions</title>
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --accent: #4cc9f0;
            --light: #f8f9fa;
            --dark: #212529;
            --success: #4bb543;
            --warning: #ffcc00;
            --danger: #dc3545;
            --gray: #6c757d;
            --transition: all 0.3s ease;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: #f5f7fb;
            color: var(--dark);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: var(--transition);
        }

        ul {
            list-style: none;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .btn {
            display: inline-block;
            padding: 12px 28px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            text-align: center;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--secondary);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }

        .btn-outline:hover {
            background-color: var(--primary);
            color: white;
        }

        /* Header Styles */
        header {
            background-color: white;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
            display: flex;
            align-items: center;
        }

        .logo span {
            color: var(--accent);
        }

        .nav-menu {
            display: flex;
        }

        .nav-menu li {
            margin-left: 30px;
        }

        .nav-menu a {
            font-weight: 500;
            position: relative;
            padding: 5px 0;
        }

        .nav-menu a:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary);
            transition: var(--transition);
        }

        .nav-menu a:hover:after,
        .nav-menu a.active:after {
            width: 100%;
        }

        .nav-menu a.active {
            color: var(--primary);
        }

        .mobile-toggle {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Section Styles */
        section {
            padding: 100px 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .section-title p {
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto;
        }

        /* Home Section */
        #home {
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        #home:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIwIDAgMTAwMCAxMDAwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Ik0wIDUwMEMwIDIyMy44NTggMjIzLjg1OCAwIDUwMCAwQzc3Ni4xNDIgMCAxMDAwIDIyMy44NTggMTAwMCA1MDBDNTAwIDUwMCAwIDUwMCAwIDUwMFoiIGZpbGw9IiM0Y2M5ZjAiIGZpbGwtb3BhY2l0eT0iMC4xIi8+PC9zdmc+');
            background-size: cover;
            opacity: 0.3;
        }

        .home-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
        }

        #home h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        #home p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .home-btns {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }

        .btn-light {
            background-color: white;
            color: var(--primary);
        }

        .btn-light:hover {
            background-color: rgba(255, 255, 255, 0.9);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Features Section */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background: white;
            border-radius: 10px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            color: white;
            font-size: 2rem;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--dark);
        }

        .feature-card p {
            color: var(--gray);
        }

        /* About Section */
        #about {
            background-color: white;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .about-text h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--dark);
        }

        .about-text p {
            margin-bottom: 20px;
            color: var(--gray);
        }

        .about-image {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: var(--transition);
        }

        .about-image:hover img {
            transform: scale(1.05);
        }

        /* Contact Section */
        #contact {
            background-color: #f5f7fb;
        }

        .contact-form {
            max-width: 700px;
            margin: 0 auto;
            background: white;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark);
        }

        .form-control {
            width: 100%;
            padding: 15px;
            border: 1px solid #e1e5ee;
            border-radius: 5px;
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-control:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 70px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-column h3 {
            font-size: 1.3rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background-color: var(--accent);
        }

        .footer-column ul li {
            margin-bottom: 12px;
        }

        .footer-column ul li a:hover {
            color: var(--accent);
            padding-left: 5px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .social-links a:hover {
            background-color: var(--accent);
            transform: translateY(-5px);
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            #home h1 {
                font-size: 2.8rem;
            }

            .about-content {
                grid-template-columns: 1fr;
            }

            .about-image {
                order: -1;
            }
        }

        @media (max-width: 768px) {
            .nav-menu {
                position: fixed;
                top: 80px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 80px);
                background: white;
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
                padding-top: 50px;
                transition: var(--transition);
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            }

            .nav-menu.active {
                left: 0;
            }

            .nav-menu li {
                margin: 15px 0;
            }

            .mobile-toggle {
                display: block;
            }

            #home h1 {
                font-size: 2.3rem;
            }

            .home-btns {
                flex-direction: column;
                align-items: center;
            }

            .contact-form {
                padding: 30px;
            }
        }

        @media (max-width: 576px) {
            #home {
                padding: 80px 0;
            }

            #home h1 {
                font-size: 2rem;
            }

            section {
                padding: 70px 0;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .feature-card {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <a href="#home" class="logo">Modern<span>Solutions</span></a>
            <div class="mobile-toggle">☰</div>
            <ul class="nav-menu">
                <li><a href="#home" class="nav-link active">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </header>

    <!-- Home Section -->
    <section id="home">
        <div class="container home-content">
            <h1>Transform Your Business with Modern Solutions</h1>
            <p>We provide cutting-edge services and technologies to help your business thrive in the digital age. Our team of experts is dedicated to delivering exceptional results.</p>
            <div class="home-btns">
                <a href="#about" class="btn btn-light">Learn More</a>
                <a href="#contact" class="btn btn-outline">Get Started</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features">
        <div class="container">
            <div class="section-title">
                <h2>Our Core Services</h2>
                <p>We offer a comprehensive range of services designed to meet your business needs and drive growth.</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🚀</div>
                    <h3>Digital Strategy</h3>
                    <p>Develop a comprehensive digital roadmap to achieve your business objectives and maximize online presence.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💻</div>
                    <h3>Web Development</h3>
                    <p>Create responsive, user-friendly websites and applications that deliver exceptional user experiences.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📈</div>
                    <h3>Growth Marketing</h3>
                    <p>Implement data-driven marketing strategies to accelerate growth and increase customer engagement.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>About Our Company</h2>
                    <p>Founded in 2010, Modern Solutions has been at the forefront of digital innovation, helping businesses of all sizes transform their operations and achieve remarkable growth.</p>
                    <p>Our team of experienced professionals combines technical expertise with creative thinking to deliver solutions that not only meet but exceed our clients' expectations.</p>
                    <a href="#contact" class="btn btn-primary">Get In Touch</a>
                </div>
                <div class="about-image">
                    <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3Qgd2lkdGg9IjYwMCIgaGVpZ2h0PSI0MDAiIGZpbGw9IiM0MzYxZWUiLz48cGF0aCBkPSJNMCwyMDBDNjYuNjY2NywyMDAgMTMzLjMzMywyMDAgMjAwLDIwMEMyNjYuNjY3LDIwMCAzMzMuMzMzLDIwMCA0MDAsMjAwQzQ2Ni42NjcsMjAwIDUzMy4zMzMsMjAwIDYwMCwyMDBWMzUwQzUzMy4zMzMsMzUwIDQ2Ni42NjcsMzUwIDQwMCwzNTBDMzMzLjMzMywzNTAgMjY2LjY2NywzNTAgMjAwLDM1MEMxMzMuMzMzLDM1MCA2Ni42NjY3LDM1MCAwLDM1MFYyMDBaIiBmaWxsPSIjM2EzN2M5Ii8+PGNpcmNsZSBjeD0iMzAwIiBjeT0iMjAwIiByPSI2MCIgZmlsbD0iI2ZmZiIvPjxjaXJjbGUgY3g9IjMwMCIgY3k9IjIwMCIgcj0iMzAiIGZpbGw9IiM0MzYxZWUiLz48L3N2Zz4=" alt="About Us">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Get In Touch</h2>
                <p>Have a project in mind or need assistance? We'd love to hear from you.</p>
            </div>
            <div class="contact-form">
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" class="form-control" placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Modern Solutions</h3>
                    <p>Providing innovative digital solutions to help businesses thrive in the modern world.</p>
                    <div class="social-links">
                        <a href="#"><i>f</i></a>
                        <a href="#"><i>t</i></a>
                        <a href="#"><i>in</i></a>
                        <a href="#"><i>ig</i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#features">Services</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#features">Web Development</a></li>
                        <li><a href="#features">Digital Marketing</a></li>
                        <li><a href="#features">UI/UX Design</a></li>
                        <li><a href="#features">Brand Strategy</a></li>
                        <li><a href="#features">Consulting</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact Info</h3>
                    <ul>
                        <li>123 Business Avenue</li>
                        <li>New York, NY 10001</li>
                        <li>info@modernsolutions.com</li>
                        <li>+1 (555) 123-4567</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 Modern Solutions. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        document.querySelector('.mobile-toggle').addEventListener('click', function() {
            document.querySelector('.nav-menu').classList.toggle('active');
        });

        // Smooth Scrolling for Navigation Links
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Close mobile menu if open
                document.querySelector('.nav-menu').classList.remove('active');
                
                // Get target section
                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);
                
                // Scroll to section
                window.scrollTo({
                    top: targetSection.offsetTop - 80, // Adjust for header height
                    behavior: 'smooth'
                });
                
                // Update active link
                document.querySelectorAll('.nav-link').forEach(item => {
                    item.classList.remove('active');
                });
                this.classList.add('active');
            });
        });

        // Update active link on scroll
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');
            
            let current = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                
                if (scrollY >= (sectionTop - 100)) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });

        // Form validation
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;
            
            if(name && email && message) {
                alert('Thank you for your message! We will get back to you soon.');
                this.reset();
            } else {
                alert('Please fill in all required fields.');
            }
        });
    </script>
</body>
</html>
