<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - ITE311 WebSystem</title>
    
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
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 100px 0;
        }
        .feature-card {
            transition: transform 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
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
                        <a class="nav-link active" aria-current="page" href="/">
                            <i class="bi bi-house-door"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">
                            <i class="bi bi-person-circle"></i> About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">
                            <i class="bi bi-envelope"></i> Contact
                        </a>
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
                    <h1 class="display-4 fw-bold mb-4">Welcome to ITE311 WebSystem</h1>
                    <p class="lead mb-4">A modern Learning Management System built with CodeIgniter 4 and Bootstrap. Explore our comprehensive web development course platform.</p>
                    <div class="d-flex gap-3">
                        <a href="/about" class="btn btn-warning btn-lg">
                            <i class="bi bi-info-circle"></i> Learn More
                        </a>
                        <a href="/contact" class="btn btn-outline-light btn-lg">
                            <i class="bi bi-envelope"></i> Get in Touch
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-center">
                        <i class="bi bi-laptop" style="font-size: 200px; opacity: 0.8;"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="display-5 fw-bold">Course Features</h2>
                    <p class="lead text-muted">Everything you need for modern web development</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 feature-card border-0 shadow">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-bootstrap-fill text-primary" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-3">Bootstrap Framework</h5>
                            <p class="card-text">Learn responsive web design with the world's most popular CSS framework.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 feature-card border-0 shadow">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-code-slash text-success" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-3">CodeIgniter 4</h5>
                            <p class="card-text">Master PHP development with this powerful and lightweight framework.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 feature-card border-0 shadow">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-database-fill text-warning" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-3">Database Design</h5>
                            <p class="card-text">Learn database design, migrations, and data management techniques.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 mb-4">
                    <div class="h2 fw-bold text-primary">50+</div>
                    <p class="text-muted">Students Enrolled</p>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="h2 fw-bold text-success">15+</div>
                    <p class="text-muted">Course Modules</p>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="h2 fw-bold text-warning">100+</div>
                    <p class="text-muted">Practice Exercises</p>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="h2 fw-bold text-info">24/7</div>
                    <p class="text-muted">Support Available</p>
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
