<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - ITE311 WebSystem</title>
    
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
        .team-card {
            transition: transform 0.3s ease;
        }
        .team-card:hover {
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
                        <a class="nav-link" href="/">
                            <i class="bi bi-house-door"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/about">
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

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 fw-bold mb-4">About ITE311 WebSystem</h1>
                    <p class="lead">Learn about our mission, vision, and the team behind this innovative learning platform.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Content -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Our Mission</h2>
                    <p class="lead">To provide comprehensive and practical web development education that prepares students for real-world challenges in the technology industry.</p>
                    <p>ITE311 WebSystem is designed to bridge the gap between theoretical knowledge and practical application. Our course focuses on modern web technologies, industry best practices, and hands-on learning experiences.</p>
                </div>
                <div class="col-lg-6">
                    <div class="text-center">
                        <i class="bi bi-bullseye text-primary" style="font-size: 150px;"></i>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-6 order-lg-2">
                    <h2 class="fw-bold mb-4">Our Vision</h2>
                    <p class="lead">To become the leading platform for web development education, empowering the next generation of developers.</p>
                    <p>We envision a future where every student has access to high-quality, up-to-date web development education that prepares them for successful careers in technology.</p>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="text-center">
                        <i class="bi bi-eye text-success" style="font-size: 150px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Course Overview -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="display-5 fw-bold">Course Overview</h2>
                    <p class="lead text-muted">What you'll learn in ITE311</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-body text-center">
                            <i class="bi bi-filetype-html text-danger" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-3">HTML5 & CSS3</h5>
                            <p class="card-text">Modern markup and styling techniques for responsive web design.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-body text-center">
                            <i class="bi bi-filetype-js text-warning" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-3">JavaScript</h5>
                            <p class="card-text">Interactive web development with modern JavaScript ES6+.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-body text-center">
                            <i class="bi bi-filetype-php text-primary" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-3">PHP & CodeIgniter</h5>
                            <p class="card-text">Server-side development with PHP and CodeIgniter framework.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-body text-center">
                            <i class="bi bi-database text-success" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-3">Database Design</h5>
                            <p class="card-text">MySQL database design, migrations, and data management.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="display-5 fw-bold">Meet Our Team</h2>
                    <p class="lead text-muted">Experienced educators and industry professionals</p>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card team-card border-0 shadow">
                        <div class="card-body text-center p-4">
                            <div class="mb-3">
                                <i class="bi bi-person-circle text-primary" style="font-size: 4rem;"></i>
                            </div>
                            <h5 class="card-title">Prof. John Smith</h5>
                            <p class="text-muted">Lead Instructor</p>
                            <p class="card-text">10+ years of experience in web development and education.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card team-card border-0 shadow">
                        <div class="card-body text-center p-4">
                            <div class="mb-3">
                                <i class="bi bi-person-circle text-success" style="font-size: 4rem;"></i>
                            </div>
                            <h5 class="card-title">Dr. Sarah Johnson</h5>
                            <p class="text-muted">Database Specialist</p>
                            <p class="card-text">Expert in database design and data management systems.</p>
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
