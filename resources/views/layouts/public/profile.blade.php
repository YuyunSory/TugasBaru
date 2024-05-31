@extends('layouts.public.app')
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
        <img src="{{asset('/img/yuyun2.jpeg')}}" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
        <h3> Front End Developer</h3>
        <p class="fst-italic">
          Saya adalah seorang mahasiswa Sistem Informasi yang memiliki keinginan kuat untuk berkarir di bidang Front End
        </p>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>19 June 2004</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 812 3765 8829</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Yogyakarta</span></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>19</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Program Srudi:</strong> <span>Information System</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>University:</strong> <span>Mercu Buana Yogyakarta</span></li>
            </ul>
          </div>
        </div>
        <p>
          Saya memiliki pengalaman dalam merancang dan mengembangkan antarmuka pengguna yang menarik dan responsif
          menggunakan berbagai teknologi web seperti HTML, CSS, dan JavaScript. Saya juga memiliki pemahaman yang kuat tentang prinsip desain web,
          serta kemampuan untuk memastikan pengalaman pengguna yang optimal melalui pengujian lintas-platform dan pengoptimalan kinerja.
        </p>
      </div>
    </div>

  </div><!-- End About Me -->

  @endsection