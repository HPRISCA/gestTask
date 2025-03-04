@extends('layouts.UserApp')
@section('content')
<!-- ======= About Section ======= -->
<section id="about" class="about">

<!-- ======= About Me ======= -->
<div class="about-me container">

  <div class="section-title">
    <h2>About</h2>
    <p>Learn more about me</p>
  </div>

  <div class="row">
    <div class="col-lg-4" data-aos="fade-right">
      <img src="Personal/assets/img/me.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
      <h3>UI/UX &amp; Graphic Designer</h3>
      <p class="fst-italic">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua.
      </p>
      <div class="row">
        <div class="col-lg-6">
          <ul>
            <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>1 May 1995</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+123 456 7890</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>New York, USA</span></li>
          </ul>
        </div>
        <div class="col-lg-6">
          <ul>
            <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>30</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>email@example.com</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
          </ul>
        </div>
      </div>
      <p>
        Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
        Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
      </p>
    </div>
  </div>

</div><!-- End About Me -->

<!-- ======= Counts ======= -->
<div class="counts container">

  <div class="row">

    <div class="col-lg-3 col-md-6">
      <div class="count-box">
        <i class="bi bi-emoji-smile"></i>
        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
        <p>Happy Clients</p>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
      <div class="count-box">
        <i class="bi bi-journal-richtext"></i>
        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
        <p>Projects</p>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
      <div class="count-box">
        <i class="bi bi-headset"></i>
        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
        <p>Hours Of Support</p>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
      <div class="count-box">
        <i class="bi bi-award"></i>
        <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
        <p>Awards</p>
      </div>
    </div>

  </div>

</div><!-- End Counts -->

</section><!-- End About Section -->
@endsection