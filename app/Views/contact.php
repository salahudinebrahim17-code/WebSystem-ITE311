<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - ITE311 WebSystem</title>
    
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <style>
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        .navbar-nav .nav-link {
            font-weight: 500;
            transition: all 0.3s ease;
            margin: 0 5px;
        }
        .navbar-nav .nav-link:hover {
            color: #ffc107 !important;
            transform: translateY(-2px);
        }
        .navbar-nav .nav-link.active {
            color: #ffc107 !important;
        }
        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,.1);
        }
        .page-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 0;
        }
        .contact-card {
            transition: transform 0.3s ease;
        }
        .contact-card:hover {
            transform: translateY(-5px);
        }
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="bi bi-code-slash"></i> ITE311 WebSystem
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="bi bi-house-door"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">
                            <i class="bi bi-person-circle"></i> About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/contact">
                            <i class="bi bi-envelope"></i> Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 fw-bold mb-4">Contact Us</h1>
                    <p class="lead">Get in touch with our team for questions, support, or course inquiries.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="card contact-card h-100 border-0 shadow text-center">
                        <div class="card-body p-4">
                            <i class="bi bi-geo-alt-fill text-primary" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-3">Address</h5>
                            <p class="card-text">
                                University Campus<br>
                                Computer Science Department<br>
                                Building A, Room 301
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card contact-card h-100 border-0 shadow text-center">
                        <div class="card-body p-4">
                            <i class="bi bi-telephone-fill text-success" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-3">Phone</h5>
                            <p class="card-text">
                                Main Office: +63 (2) 123-4567<br>
                                Support: +63 (2) 123-4568<br>
                                Emergency: +63 (2) 123-4569
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card contact-card h-100 border-0 shadow text-center">
                        <div class="card-body p-4">
                            <i class="bi bi-envelope-fill text-warning" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-3">Email</h5>
                            <p class="card-text">
                                General: info@ite311.edu<br>
                                Support: support@ite311.edu<br>
                                Admissions: admissions@ite311.edu
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow">
                        <div class="card-body p-5">
                            <h2 class="text-center mb-4">Send us a Message</h2>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstName" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="subject" class="form-label">Subject</label>
                                        <select class="form-select" id="subject" required>
                                            <option value="">Choose a subject...</option>
                                            <option value="general">General Inquiry</option>
                                            <option value="course">Course Information</option>
                                            <option value="technical">Technical Support</option>
                                            <option value="enrollment">Enrollment</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" rows="5" placeholder="Please describe your inquiry in detail..." required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="newsletter">
                                            <label class="form-check-label" for="newsletter">
                                                I would like to receive course updates and newsletters
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg px-5">
                                            <i class="bi bi-send"></i> Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Office Hours -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Office Hours</h2>
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-6">
                                    <strong>Monday - Friday</strong><br>
                                    <span class="text-muted">8:00 AM - 5:00 PM</span>
                                </div>
                                <div class="col-6">
                                    <strong>Saturday</strong><br>
                                    <span class="text-muted">9:00 AM - 2:00 PM</span>
                                </div>
                                <div class="col-6">
                                    <strong>Sunday</strong><br>
                                    <span class="text-muted">Closed</span>
                                </div>
                                <div class="col-6">
                                    <strong>Holidays</strong><br>
                                    <span class="text-muted">Closed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Quick Links</h2>
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i class="bi bi-book"></i> Course Catalog
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i class="bi bi-calendar"></i> Academic Calendar
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i class="bi bi-question-circle"></i> FAQ
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i class="bi bi-file-text"></i> Student Handbook
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i class="bi bi-headset"></i> Technical Support
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5><i class="bi bi-code-slash"></i> ITE311 WebSystem</h5>
                    <p class="text-muted">Building the future of web development education.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="text-muted">&copy; 2025 ITE311 WebSystem. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
