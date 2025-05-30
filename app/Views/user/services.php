<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Conditioning Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/home.css" >
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar py-2">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="contact-info">
                <a href="tel:+1234567890" class="me-3 text-white text-decoration-none">
                    <i class="fas fa-phone me-2"></i>+1 234 567 890
                </a>
                <a href="mailto:contact@apcs.com" class="text-white text-decoration-none">
                    <i class="fas fa-envelope me-2"></i>contact@apcs.com
                </a>
            </div>
            <div class="social-links">
                <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="/assets/images/Air-TechLogo.jpg" alt="Logo" class="rounded-circle me-2" width="40" height="40">
                <span class="brand-text">AIR<span class="text-danger">PROTECH</span></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="#hero">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#our-services">Our Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#featured-products">Featured Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#why-choose-us">Why Choose Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li> 
                    <!-- User Profile -->
                    <li class="nav-item dropdown ms-3">
                        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/assets/images/Profile.jpg" alt="Online Image" class="rounded-circle me-2" width="36" height="36">
                            <div class="d-flex flex-column lh-sm">
                                <span class="fw-semibold small text-dark">Arlon Rondina</span>
                                <small class="text-success">● Online</small>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="/user/profile">Profile</a></li>
                            <li><a class="dropdown-item" href="/user/settings">Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="/logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
<section class="hero-section text-white py-5" style="background: url('/assets/images/backgroundhero.jpg') no-repeat center center; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h1 class="fw-bold mb-3">Professional AC Services & Solutions</h1>
                <p class="mb-4">Expert installation, maintenance, and repair services for all your air conditioning needs</p>
                <a href="#" class="btn btn-danger rounded-3 px-4 py-2 fw-medium">Book Service Now</a>
            </div>
        </div>
    </div>
</section>

    <!-- Service Categories -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="mb-3">
                                <i class="fas fa-tools fa-2x text-primary"></i>
                            </div>
                            <h5 class="fw-bold">Installation</h5>
                            <p class="text-muted mb-0">24/7 Professional Service</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="mb-3">
                                <i class="fas fa-wrench fa-2x text-primary"></i>
                            </div>
                            <h5 class="fw-bold">Repair</h5>
                            <p class="text-muted mb-0">24/7 Professional Service</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="mb-3">
                                <i class="fas fa-tools fa-2x text-primary"></i>
                            </div>
                            <h5 class="fw-bold">Maintenance</h5>
                            <p class="text-muted mb-0">24/7 Professional Service</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="mb-3">
                                <i class="fas fa-user-md fa-2x text-primary"></i>
                            </div>
                            <h5 class="fw-bold">Emergency Service</h5>
                            <p class="text-muted mb-0">24/7 Professional Service</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Services Section -->
    <section id="our-services" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">Our Services</h2>
            
            <div class="row g-4">
                <!-- AC Installation -->
                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-tools fa-2x text-primary"></i>
                            </div>
                            <h5 class="fw-bold">AC Installation</h5>
                            <p class="text-muted mb-3">Professional installation of all AC brands</p>
                            <div>
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Repair & Maintenance -->
                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-wrench fa-2x text-primary"></i>
                            </div>
                            <h5 class="fw-bold">Repair & Maintenance</h5>
                            <p class="text-muted mb-3">Expert repair and regular maintenance services</p>
                            <div>
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Emergency Services -->
                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-exclamation-circle fa-2x text-primary"></i>
                            </div>
                            <h5 class="fw-bold">Emergency Services</h5>
                            <p class="text-muted mb-3">24/7 emergency repair and support</p>
                            <div>
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Parts Replacement -->
                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-cog fa-2x text-primary"></i>
                            </div>
                            <h5 class="fw-bold">Parts Replacement</h5>
                            <p class="text-muted mb-3">Genuine spare parts replacement</p>
                            <div>
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- System Upgrade -->
                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-arrow-circle-up fa-2x text-primary"></i>
                            </div>
                            <h5 class="fw-bold">System Upgrade</h5>
                            <p class="text-muted mb-3">Upgrade your AC system for better efficiency</p>
                            <div>
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Regular Checkup -->
                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-clipboard-check fa-2x text-primary"></i>
                            </div>
                            <h5 class="fw-bold">Regular Checkup</h5>
                            <p class="text-muted mb-3">Scheduled maintenance and inspection</p>
                            <div>
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Process -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">Simple Booking Process</h2>
            <div class="row text-center">
                <div class="col-md-3">
                    <div class="mb-3">
                        <div class="rounded-circle bg-primary d-inline-flex justify-content-center align-items-center" style="width: 70px; height: 70px;">
                            <i class="fas fa-tools fa-2x text-white"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold">Choose Service</h5>
                    <div class="text-muted mt-2">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="mb-3">
                        <div class="rounded-circle bg-primary d-inline-flex justify-content-center align-items-center" style="width: 70px; height: 70px;">
                            <i class="far fa-clock fa-2x text-white"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold">Select Schedule</h5>
                    <div class="text-muted mt-2">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="mb-3">
                        <div class="rounded-circle bg-primary d-inline-flex justify-content-center align-items-center" style="width: 70px; height: 70px;">
                            <i class="fas fa-tools fa-2x text-white"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold">Provide Details</h5>
                    <div class="text-muted mt-2">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="mb-3">
                        <div class="rounded-circle bg-primary d-inline-flex justify-content-center align-items-center" style="width: 70px; height: 70px;">
                            <i class="fas fa-check-circle fa-2x text-white"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold">Confirmation</h5>
                </div>
            </div>
        </div>
    </section>

     <!-- Contact Section -->
     <section id="contact" class="contact py-5" class="col-md-4" data-aos="fade-up" data-aos-delay="150">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="section-title mb-4">Contact Us</h2>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" data-aos="fade-up" data-aos-delay="300">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control"  data-aos="fade-up" data-aos-delay="300">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea class="form-control" rows="4" data-aos="fade-up" data-aos-delay="300 "></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" data-aos="fade-up" data-aos-delay="300">Send Message</button>
                        </form>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.30596073366!2d-74.25986652089843!3d40.69714941932609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1647043435011!5m2!1sen!2sus" 
                            class="w-100 h-100 rounded" 
                            style="min-height: 400px; border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>

   
    <!-- Footer -->
    <footer class="footer text-white py-5">
        <div class="container">
            <div class="row">
                <!-- Brand & Description -->
                <div class="col-md-3 mb-4">
                    <h3 class="h5 mb-3"><span style="color: white;">AIR</span><span class="text-danger">PROTECH</span></h3>
                    <p class="text-white-50">Your trusted partner for all air conditioning needs. Professional service guaranteed.</p>
                </div>
        
                <!-- Quick Links -->
                <div class="col-md-3 mb-4">
                    <h4 class="h6 mb-3">Quick Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="#hero" class="text-white-50 text-decoration-none">Home</a></li>
                        <li><a href="#our-services" class="text-white-50 text-decoration-none">Services</a></li>
                        <li><a href="#featured-products" class="text-white-50 text-decoration-none">Products</a></li>
                        <li><a href="#why-choose-us" class="text-white-50 text-decoration-none">Why Choose Us</a></li>
                        <li><a href="#contact" class="text-white-50 text-decoration-none">Contact</a></li>
                    </ul>
                </div>
        
                <!-- Contact Info -->
                <div class="col-md-3 mb-4">
                    <h4 class="h6 mb-3">Contact Info</h4>
                    <ul class="list-unstyled text-white-50">
                        <li><i class="fas fa-phone text-primary me-2"></i> 1-800-AIR-COOL</li>
                        <li><i class="fas fa-envelope text-primary me-2"></i> info@airprotech.com</li>
                        <li><i class="fas fa-map-marker-alt text-primary me-2"></i> 123 Cooling Street, AC City</li>
                    </ul>
                </div>
        
                <!-- Newsletter -->
                <div class="col-md-3 mb-4">
                    <h4 class="h6 mb-3">Newsletter</h4>
                    <p class="text-white-50">Subscribe for updates and special offers</p>
                    <div class="input-group">
                        <input type="email" class="form-control bg-dark text-white border-0" placeholder="Your email">
                        <button class="btn btn-primary">Subscribe</button>
                    </div>
                </div>
            </div>
            <div class="border-top border-white-50 mt-4 pt-4 text-center text-white-50">
                <p class="mb-0">&copy; 2025 Air-Protech. All rights reserved.</p>
            </div>
        </div>
    </footer>
        
    <!-- JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <!-- Smooth scrolling script -->
    <script src="/assets/js/home.js"></script>

    <script>
        AOS.init({
            duration: 1000, 
            easing: 'ease-in-out', 
            once: true, 
        });
    </script>
</body>
</html>