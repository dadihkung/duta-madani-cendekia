<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Duta Madani Cendekia</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>

      @media (max-width: 767px) {
    .header-top {
      height: 80px;
    }
    .hero h1 {
      font-size: 24px;
    }

    .hero p.lead {
      font-size: 16px;
    }

    .about h3 {
      font-size: 20px;
    }

    .about .project-image img,
    .about .feature-text h3 {
      margin-top: 10px;
    }

    .team h2 {
      font-size: 20px;
    }

    .team .card-title {
      font-size: 16px;
    }

    .team .card-text {
      font-size: 12px;
    }
  }
    </style>
    </head>
  <body>
    <div class="header-content fixed-top shadow">
      <div class="header-top d-flex align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 text-center text-sm-start mb-2 mb-sm-0">
              <a href="#" class="text-decoration-none me-3 text-white">FAQ</a>
              <a href="#" class="text-decoration-none me-3 text-white">Forum</a>
              <a href="#" class="text-decoration-none text-white">Contact</a>
            </div>
            <div class="col-md-6 col-sm-6 text-center text-sm-end">
              <a href="#" class="text-decoration-none me-3 text-white"><i class="bi bi-facebook"></i></a>
              <a href="#" class="text-decoration-none me-3 text-white"><i class="bi bi-twitter"></i></a>
              <a href="#" class="text-decoration-none text-white"><i class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>                  
      <nav class="navbar navbar-expand-lg navbar-light d-flex align-items-center px-5" role="navigation">
        <a class="navbar-brand" style="color: #96bd96; font-size: 20px;" href="#">Duta Madani Cendekia</a>
        <button class="navbar-toggler d-lg-none d-block" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="width: 40px; height: 40px; background-color: #96bd96; border-color: #96bd96;">
          <span class="navbar-toggler-icon" style="width: 15px; height: 15px; color: white;"></span>
        </button>
               

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="http://127.0.0.1:8000/home" style="color: #96bd96;">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="getInvolvedDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false" style="color: #96bd96;">Get Involved</a>
              <ul class="dropdown-menu" aria-labelledby="getInvolvedDropdown">
                <li><a class="dropdown-item" href="#">Donate</a></li>
                <li><a class="dropdown-item" href="#">Fundraise</a></li>
                <li><a class="dropdown-item" href="#">Campaign</a></li>
                <li><a class="dropdown-item" href="#">Philanthropy</a></li>
                <li><a class="dropdown-item" href="#">Volunteer</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="projectsDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false" style="color: #96bd96;">Projects</a>
              <ul class="dropdown-menu" aria-labelledby="projectsDropdown">
                <li><a class="dropdown-item" href="#">Water World</a></li>
                <li><a class="dropdown-item" href="#">Cloth Giving</a></li>
                <li><a class="dropdown-item" href="#">Medical Mission</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://127.0.0.1:8000/profile" style="color: #96bd96;">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html" style="color: #96bd96;">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html" style="color: #96bd96;">Contact</a>
            </li>
          </ul>
        </div>
      </nav>      
        </div>

    <div class="homepage" style="margin-top: 6rem;">
        @yield('home-content')
    </div>
    
    <div class="aboutus-page mt-5 bg-white">
        @yield('profile-content')
    </div>

    <footer class="footer text-center" style="background-color: #96bd96">
        <div class="container">
            <h3 class="footer-logo" style="color: #ffffff;">Charity Website</h3>
            <ul class="footer-links">
                <li><a href="#" style="color: #ffffff;">Home</a></li>
                <li><a href="#" style="color: #ffffff;">About Us</a></li>
                <li><a href="#" style="color: #ffffff;">Projects</a></li>
                <li><a href="#" style="color: #ffffff;">Donate</a></li>
                <li><a href="#" style="color: #ffffff;">Contact</a></li>
            </ul>
            <div class="footer-social">
                <a href="#" style="color: #ffffff;"><i class="bi bi-facebook"></i></a>
                <a href="#" style="color: #ffffff;"><i class="bi bi-twitter"></i></a>
                <a href="#" style="color: #ffffff;"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>