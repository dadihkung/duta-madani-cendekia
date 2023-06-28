@extends('main')

@section('home-content')

    <!-- Hero Section -->
    <section class="top-content hero bg-primary text-light py-5" style="background-image: url('images/sisingaan.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1">
              <h1 class="text-white">Sumbangkan untuk Mewujudkan Impian Islami!</h1>
              <p style="width: 30rem;">Bergabunglah dengan misi kami untuk mendukung dan memberdayakan Pemuda Indonesia</p>
              <a href="#" class="btn btn-light btn-lg" style="background-color: #ffffff; border-color: #ffffff; color: #96bd96;">Donasi Sekarang</a>
            </div>
          </div>
        </div>
      </section>      

    <!-- About Section -->
    <section class="about py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="images/poto2.png" class="img-fluid rounded-4 shadow" alt="About Image">
                </div>
                <div class="col-lg-6">
                    <h2>About Us</h2>
                    <p>Yayasan Duta Madani Cendekia is a newly established charity organization in Indonesia dedicated to providing quality education to the country's youth, with a focus on nurturing them as exemplary Muslim individuals who positively influence others. This article delves into the vital work undertaken by Yayasan Duta Madani Cendekia and its potential impact on shaping the future of Indonesian society.</p>
                    <a href="#" class="btn btn-primary" style="background-color: #96bd96; border-color: #96bd96; color: #ffffff;">selengkapnya</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects bg-light py-5">
        <div class="container">
            <h2>Our Projects</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card h-100 shadow">
                        <img src="images/poto3.jpeg" class="card-img-top" alt="Quran Scholarship Image" style="height: 360px;">
                        <div class="card-body">
                            <h5 class="card-title">Quran Scholarship</h5>
                            <p class="card-text">Nurture a deep understanding of the Quran and provide opportunities for students to pursue Quranic studies through our Quran Scholarship program.</p>
                            <a href="#" class="btn btn-primary" style="background-color: #96bd96; border-color: #96bd96; color: #ffffff;">Learn More</a>
                        </div>
                    </div>
                </div>                
                <div class="col-lg-4">
                    <div class="card h-100 shadow">
                        <img src="images/poto1.png" class="card-img-top" alt="Leadership Training Image">
                        <div class="card-body">
                            <h5 class="card-title">Leadership Training</h5>
                            <p class="card-text">Equip students with leadership skills and empower them to become future leaders and positive influences in society.</p>
                            <a href="#" class="btn btn-primary" style="background-color: #96bd96; border-color: #96bd96; color: #ffffff;">Learn More</a>
                        </div>                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 shadow">
                        <img src="images/poto4.jpg" class="card-img-top" alt="Community Development Image" style="height: 360px;">
                        <div class="card-body">
                            <h5 class="card-title">Community Development Initiatives</h5>
                            <p class="card-text">Engage students in various community projects to foster a sense of social responsibility and create a positive impact on the community.</p>
                            <a href="#" class="btn btn-primary" style="background-color: #96bd96; border-color: #96bd96; color: #ffffff;">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Contact Us</h2>
                    <p>If you have any inquiries or would like to get in touch with us, please feel free to reach out using the contact information provided below.</p>
                    <ul>
                        <li><strong>Email:</strong> dmadanicendekia@gmail.com</li>
                        <li><strong>Phone:</strong> +62813-1229-6897</li>
                        <li><strong>Address:</strong> 8PQF+C3C, Kumpay, Kec. Jalancagak, Kabupaten Subang, Jawa Barat</li>
                    </ul>
                </div>                
                <div class="col-lg-6">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="background-color: #96bd96; border-color: #96bd96; color: #ffffff;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection