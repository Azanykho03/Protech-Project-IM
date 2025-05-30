<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register - Air-Protech Cooling Services</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/login_register.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand navbar-light bg-white px-3">
            <div class="container-fluid">
            <img src="/assets/images/Air-TechLogo.jpg" alt="Logo" class="rounded-circle me-2" width="40" height="40">
                <a class="navbar-brand" href="#">AIR<span class="brand-red">PROTECH</span></a>
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="/">Home</a>
                    <a class="nav-link" href="#">About</a>
                    <a class="nav-link" href="#">Services</a>
                    <a class="nav-link" href="#">Contact</a>
                </div>
            </div>
        </nav>
    </header>

    <div class="main-content py-4">
        <div class="container">
            <div class="login-container" id="loginContainer">
                <div class="container-inner">
                    <!-- LOGIN PANEL -->
                    <div class="panel login-panel">
                        <div class="left-panel">
                            <div>
                                <h2 class="mb-0">APCS</h2>
                                <p class="mb-2">Air-Protech Cooling Services</p>
                                <p class="company-tagline">Premium HVAC solutions for homes and businesses since 1995</p>

                                <i class="fas fa-snowflake snowflake-icon"></i>

                                <h1 class="mt-4">Join Our Community</h1>
                                <p class="mb-3">Connect. Share. Grow.</p>

                                <ul class="feature-list">
                                    <li><i class="fas fa-check-circle"></i> 24/7 Technical Support</li>
                                    <li><i class="fas fa-check-circle"></i> Professional HVAC Installation</li>
                                    <li><i class="fas fa-check-circle"></i> Energy-efficient Solutions</li>
                                    <li><i class="fas fa-check-circle"></i> Preventive Maintenance Plans</li>
                                </ul>
                            </div>

                            <div class="trusted-by">
                                <p>TRUSTED BY</p>
                                <div class="company-logos">
                                    <span>ACME Corp</span>
                                    <span>GlobalTech</span>
                                    <span>EcoSmart</span>
                                </div>
                            </div>

                            <i class="fas fa-fan fan-icon fa-spin" style="--fa-animation-duration: 15s;"></i>
                            <i class="fas fa-fan fan-icon-2 fa-spin" style="--fa-animation-duration: 10s;"></i>
                            <i class="fas fa-fan fan-icon-3 fa-spin" style="--fa-animation-duration: 20s;"></i>
                            
                            <svg class="wave-shape" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="#ffffff" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,224C384,224,480,192,576,181.3C672,171,768,181,864,192C960,203,1056,213,1152,202.7C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                            </svg>
                        </div>

                        <div class="right-panel">
                            <div class="form-fade" id="loginForm">
                                <h2 class="text-center mb-2">Welcome Back</h2>
                                <p class="text-center text-muted mb-4">Log in to your account</p>

                                <form id="loginFormElement">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Address</label>
                                        <div class="input-icon-wrapper">
                                            <i class="fas fa-envelope input-icon"></i>
                                            <input type="email" class="form-control input-with-icon" id="email" placeholder="Enter your email" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-icon-wrapper">
                                            <i class="fas fa-lock input-icon"></i>
                                            <input type="password" class="form-control input-with-icon" id="password" placeholder="Enter your password" required>
                                            <button type="button" class="password-toggle" id="togglePassword">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember">
                                            <label class="form-check-label" for="remember">Remember me</label>
                                        </div>
                                        <a href="#" class="toggle-link">Forgot password?</a>
                                    </div>
                                    <div class="d-grid mb-3">
                                        <button type="submit" class="btn btn-primary">Log In</button>
                                    </div>

                                    <div class="service-highlights">
                                        <div class="service-highlight">
                                            <i class="fas fa-bolt"></i>
                                            <p>Fast Service</p>
                                        </div>
                                        <div class="service-highlight">
                                            <i class="fas fa-shield-alt"></i>
                                            <p>Secure System</p>
                                        </div>
                                        <div class="service-highlight">
                                            <i class="fas fa-headset"></i>
                                            <p>24/7 Support</p>
                                        </div>
                                    </div>

                                    <div class="text-center mt-4">
                                        <p>Don't have an account? <a class="toggle-link" id="showRegister">Register now</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- REGISTER PANEL -->
                    <div class="panel register-panel">
                        <div class="left-panel">
                            <div>
                                <h2 class="mb-0">APCS</h2>
                                <p class="mb-2">Air-Protech Cooling Services</p>
                                <p class="company-tagline">Your comfort is our priority</p>

                                <i class="fas fa-snowflake snowflake-icon"></i>

                                <h1 class="mt-4">Welcome to APCS</h1>
                                <p class="mb-3">Professional cooling solutions for all needs</p>

                                <ul class="feature-list">
                                    <li><i class="fas fa-check-circle"></i> Easy Scheduling & Booking</li>
                                    <li><i class="fas fa-check-circle"></i> Special Member Discounts</li>
                                    <li><i class="fas fa-check-circle"></i> Warranty Management</li>
                                    <li><i class="fas fa-check-circle"></i> Maintenance Reminders</li>
                                </ul>
                            </div>

                        <div>
                            <svg class="wave-shape" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="#ffffff" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,224C384,224,480,192,576,181.3C672,171,768,181,864,192C960,203,1056,213,1152,202.7C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                            </svg>
                        </div>


                            <i class="fas fa-fan fan-icon fa-spin" style="--fa-animation-duration: 15s;"></i>
                            <i class="fas fa-fan fan-icon-2 fa-spin" style="--fa-animation-duration: 10s;"></i>
                            <i class="fas fa-fan fan-icon-3 fa-spin" style="--fa-animation-duration: 20s;"></i>
                            

                        </div>

                        <div class="right-panel">
                            <div class="form-fade" id="registerForm">
                            <h2 class="text-center mb-2">Create Account</h2>
                                <form id="registerFormElement">
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="firstName" class="form-label">First Name</label>
                                            <div class="input-icon-wrapper">
                                                <i class="fas fa-user input-icon"></i>
                                                <input type="text" class="form-control input-with-icon" id="firstName"  name="first_name" placeholder="First name" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="middleName" class="form-label">Middle Name</label>
                                            <div class="input-icon-wrapper">
                                                <i class="fas fa-user input-icon"></i>
                                                <input type="text" class="form-control input-with-icon" id="middleName" name="middle_name" placeholder="Middle name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <div class="input-icon-wrapper">
                                            <i class="fas fa-user input-icon"></i>
                                            <input type="text" class="form-control input-with-icon" id="lastName" name="last_name" placeholder="Last name" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="registerEmail" class="form-label">Email Address</label>
                                        <div class="input-icon-wrapper">
                                            <i class="fas fa-envelope input-icon"></i>
                                            <input type="email" class="form-control input-with-icon" id="registerEmail" name="email" placeholder="Enter your email" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="registerPassword" class="form-label">Create Password</label>
                                        <div class="input-icon-wrapper">
                                            <i class="fas fa-lock input-icon"></i>
                                            <input type="password" class="form-control input-with-icon" id="registerPassword" name="password" placeholder="Create a password" required>
                                            <button type="button" class="password-toggle" id="toggleRegisterPassword">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                        <div class="form-text mt-2">Password must be at least 8 characters and include uppercase, lowercase, number and special character.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                                        <div class="input-icon-wrapper">
                                            <i class="fas fa-lock input-icon"></i>
                                            <input type="password" class="form-control input-with-icon" id="confirmPassword" name="confirm_password" placeholder="Confirm password" required>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="terms" required>
                                            <label class="form-check-label" for="terms">
                                                I agree to the <a href="#" class="toggle-link">Terms of Service</a> and <a href="#" class="toggle-link">Privacy Policy</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-grid mb-4">
                                        <button type="submit" class="btn btn-primary">Create Account</button>
                                    </div>

                                    <div class="position-fixed top-0 end-0 p-3" style="z-index: 1055">

                                    <div id="liveToast" class="toast text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="d-flex">
                                        <div class="toast-body" id="toastMessage">Success</div>
                                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="text-center mt-3">
                                        <p>Already have an account? <a class="toggle-link" id="showLogin">Log in</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="py-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    © 2025 AirProtech Aircon. All rights reserved.
                </div>
                <div class="d-flex">
                    <a href="#" class="me-3">Privacy Policy</a>
                    <a href="#" class="me-3">Terms of Service</a>
                    <a href="#">Help</a>
                </div>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>

        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1055">
  <div id="liveToast" class="toast text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body" id="toastMessage">Success</div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>

    </footer>

    <script>
            function showToast(title, message, type = 'success') {
                const toastEl = document.getElementById('liveToast');
                const toastMsg = document.getElementById('toastMessage');

                toastEl.classList.remove('bg-success', 'bg-danger', 'bg-warning');
                toastEl.classList.add(`bg-${type}`);
                toastMsg.innerText = message;

                const toast = new bootstrap.Toast(toastEl);
                toast.show();
            }
</script>


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- ANIMATION PART -->
    <script src="/assets/js/login_register.js"></script>
    <!-- HANDLER -->
    <script src="/assets/js/form_handler.js"></script>
    <script>
        // handleFormSubmission('loginFormElement','/login_register');
        handleFormSubmission('registerFormElement','/login_register');
    </script>
    
</body>

</html>