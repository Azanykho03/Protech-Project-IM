<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Conditioning Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/home.css" >
    
    <style>
        .product-card {
            border-radius: 12px;
            transition: transform 0.3s ease;
            height: 100%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            background-color: white;
            overflow: hidden;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
        }
        
        .product-img-container {
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            background-color: #f8f9fa;
        }
        
        .product-img {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain;
        }
        
        .product-info {
            padding: 1.5rem;
        }
        
        .product-title {
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
        }
        
        .product-desc {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
        
        .product-price {
            font-weight: 700;
            color: #dc3545;
            font-size: 1.3rem;
            margin-bottom: 1rem;
        }
        
        .btn-book-now {
            background-color: #dc3545;
            border-color: #dc3545;
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 5px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-book-now:hover {
            background-color: #c82333;
            border-color: #bd2130;
            transform: translateY(-2px);
        }
        
        .hero-section {
            background: linear-gradient(to right, rgba(26, 35, 126, 0.9), rgba(13, 22, 62, 0.9)), 
                        url('/assets/images/ac-unit-bg.jpg') no-repeat center center;
            background-size: cover;
            padding: 100px 0;
            color: white;
            margin-bottom: 3rem;
        }
        
        .featured-section {
            padding: 2rem 0 4rem;
            background-color: #f5f7fa;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            font-weight: 700;
            color: var(--primary-color);
            position: relative;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            width: 80px;
            height: 3px;
            background-color: var(--secondary-color);
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
        }
        
        @media (max-width: 768px) {
            .product-img-container {
                height: 160px;
            }
        }
    </style>
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
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Professional Air Conditioning Solutions</h1>
                    <p class="lead mb-4">Your Comfort, Our Priority</p>
                    <a href="#contact" class="btn btn-danger btn-lg">Book Service Now</a>
                </div>
                <div class="col-lg-6">
                    <!-- Hero image is in the background via CSS -->
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="featured-section">
        <div class="container">
            <h2 class="section-title">Featured Products</h2>
            
            <div class="row g-4">
                <!-- Product 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <img src="/assets/images/smart-inverter-ac.jpg" alt="Smart Inverter AC" class="product-img">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Smart Inverter AC</h3>
                            <p class="product-desc">Energy-efficient cooling with smart controls</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">$1,299</span>
                                <a href="#" class="btn btn-book-now">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <img src="/assets/images/split-system-classic.jpg" alt="Split System Classic" class="product-img">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Split System Classic</h3>
                            <p class="product-desc">Reliable cooling for any room size</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">$899</span>
                                <a href="#" class="btn btn-book-now">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <img src="/assets/images/portable-ac.jpg" alt="Portable AC Unit" class="product-img">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Portable AC Unit</h3>
                            <p class="product-desc">Flexible cooling solution for any space</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">$499</span>
                                <a href="#" class="btn btn-book-now">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <img src="/assets/images/commercial-hvac.jpg" alt="Commercial HVAC System" class="product-img">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Commercial HVAC System</h3>
                            <p class="product-desc">Professional grade cooling system</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">$2,499</span>
                                <a href="#" class="btn btn-book-now">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <img src="/assets/images/lg-air-conditioning.jpg" alt="LG Air Conditioning" class="product-img">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">LG Air Conditioning</h3>
                            <p class="product-desc">Energy-efficient cooling with smart controls</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">$1,299</span>
                                <a href="#" class="btn btn-book-now">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <img src="/assets/images/vibration-damper.jpg" alt="Vibration Damper" class="product-img">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Vibration Damper</h3>
                            <p class="product-desc">Energy-efficient cooling with smart controls</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">$1,299</span>
                                <a href="#" class="btn btn-book-now">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 7 -->
                <div class="col-md-6 col-lg-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <img src="/assets/images/smart-inverter-ac2.jpg" alt="Smart Inverter AC" class="product-img">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Smart Inverter AC</h3>
                            <p class="product-desc">Energy-efficient cooling with smart controls</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">$1,299</span>
                                <a href="#" class="btn btn-book-now">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 8 -->
                <div class="col-md-6 col-lg-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <img src="/assets/images/mitsubishi-electric-wifi.jpg" alt="Mitsubishi Electric WiFi" class="product-img">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Mitsubishi Electric WiFi</h3>
                            <p class="product-desc">Energy-efficient cooling with smart controls</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">$1,299</span>
                                <a href="#" class="btn btn-book-now">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 9 -->
                <div class="col-md-6 col-lg-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <img src="/assets/images/assembly-kit-ac.jpg" alt="Assembly kit AC 3/5 m" class="product-img">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Assembly kit AC 3/5 m</h3>
                            <p class="product-desc">Energy-efficient cooling with smart controls</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">$1,299</span>
                                <a href="#" class="btn btn-book-now">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 10 -->
                <div class="col-md-6 col-lg-4">
                    <div class="product-card">
                        <div class="product-img-container">
                            <img src="/assets/images/smart-inverter-ac3.jpg" alt="Smart Inverter AC" class="product-img">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Smart Inverter AC</h3>
                            <p class="product-desc">Energy-efficient cooling with smart controls</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">$1,299</span>
                                <a href="#" class="btn btn-book-now">Book Now</a>
                            </div>
                        </div>
                    </div>
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