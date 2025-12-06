<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --light-bg: #f8f9fa;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header Styles */
        .navbar-custom {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-custom .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: white !important;
            margin-right: 2rem;
        }

        .navbar-custom .nav-link {
            color: rgba(255, 255, 255, 0.8) !important;
            margin: 0 0.5rem;
            transition: color 0.3s ease;
        }

        .navbar-custom .nav-link:hover {
            color: white !important;
        }

        /* Main Content */
        main {
            flex: 1;
        }

        /* Footer Styles */
        footer {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 3rem 0 1rem;
            margin-top: 4rem;
        }

        footer h5 {
            font-weight: 700;
            margin-bottom: 1rem;
            color: #fff;
        }

        footer p, footer a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: white;
        }

        .footer-section {
            margin-bottom: 2rem;
        }

        .footer-divider {
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            margin: 2rem 0;
            padding-top: 2rem;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Color Utility Classes */
        .text-primary {
            color: var(--primary-color) !important;
        }

        .text-secondary {
            color: var(--secondary-color) !important;
        }

        .bg-primary {
            background-color: var(--primary-color) !important;
        }

        .bg-secondary {
            background-color: var(--secondary-color) !important;
        }

        .btn-primary {
            background-color: var(--secondary-color) !important;
            border-color: var(--secondary-color) !important;
            color: white !important;
        }

        .btn-primary:hover {
            background-color: #2980b9 !important;
            border-color: #2980b9 !important;
        }

        .btn-outline-primary {
            color: var(--secondary-color) !important;
            border-color: var(--secondary-color) !important;
        }

        .btn-outline-primary:hover {
            background-color: var(--secondary-color) !important;
            border-color: var(--secondary-color) !important;
            color: white !important;
        }

        .badge {
            background-color: var(--secondary-color) !important;
        }

        .card-header {
            background-color: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
            color: white !important;
        }

        .table thead {
            background-color: var(--primary-color) !important;
            color: white !important;
        }

        .page-title {
            color: var(--primary-color) !important;
            font-weight: 700;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .navbar-custom .navbar-brand {
                font-size: 1.2rem;
            }
        }
    </style>

    <title>@yield('title', 'Employee Management')</title>
</head>

<body>
    <!-- Header/Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ URL('/') }}">
                <i class="bi bi-briefcase me-2"></i>Employee Manager
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('employee') }}">
                            <i class="bi bi-people me-1"></i>Employees
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('employee/create') }}">
                            <i class="bi bi-plus-circle me-1"></i>Add Employee
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('section')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 footer-section">
                    <h5><i class="bi bi-briefcase me-2"></i>Employee Manager</h5>
                    <p>A modern employee management system built with Laravel and Bootstrap.</p>
                </div>
                <div class="col-md-3 footer-section">
                    <h5>Quick Links</h5>
                    <p><a href="{{ URL('employee') }}">View Employees</a></p>
                    <p><a href="{{ URL('employee/create') }}">Add Employee</a></p>
                </div>
                <div class="col-md-3 footer-section">
                    <h5>Features</h5>
                    <p>Employee Management</p>
                    <p>Salary Tracking</p>
                    <p>Search & Filter</p>
                </div>
                <div class="col-md-3 footer-section">
                    <h5>Contact</h5>
                    <p>Email: info@employeemanager.com</p>
                    <p>Phone: +1 (555) 123-4567</p>
                </div>
            </div>
            <div class="footer-divider"></div>
            <div class="footer-bottom">
                <p class="mb-0">&copy; 2025 Employee Manager. All rights reserved. | Built with <i class="bi bi-heart-fill" style="color: #e74c3c;"></i></p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
