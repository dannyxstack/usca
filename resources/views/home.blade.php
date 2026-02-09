<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<style>
.btn-apply {
  background-color: #0dcaf0;
  color: white;
  border-radius: 20px;
}
</style>

<body>


  
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg shadow-sm sticky-top">
    <div class="container">
      <a class="navbar-brand py-3" href="/">
        <img src="/images/LOGO_US_Health Landscape-01.s.png" alt="Unity Skills College of Health Logo" height="60">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link em" href="/index">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="/whyus">Why Us</a></li>
          <li class="nav-item dropdown">
            <!-- 1-2 layer -->
            <a class="nav-link dropdown-toggle" href="/allcourses" >Courses</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/allcourses">All Courses</a></li>
              
              <li><hr class="dropdown-divider"></li>


              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle" href="#" role="button" >Aged Care and Community Services</a>
                <ul class="dropdown-menu">
                  <li>
                    <!-- <a class="dropdown-item" href="/course/CHC33021">CHC33021 Certificate III in Individual Support</a>
                    <a class="dropdown-item" href="/course/CHC43015">CHC43015 Certificate IV in Ageing Support</a>
                    <a class="dropdown-item" href="/course/CHC52021">CHC52021 Diploma of Community Services</a> -->
                    @foreach ( $allCourses as $course)
                      @if ($course->class == 'Aged Care and Community Services' )
                        <a class="dropdown-item" href="/course/{{ $course->kname }}">{{ $course->code }} {{ $course->name }}</a>
                      @endif
                    @endforeach
                  </li>
                </ul>
              </li>

              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle" href="#" role="button" >Early Childhood Education</a>
                <ul class="dropdown-menu">
                  <li>
                    <!-- <a class="dropdown-item" href="/course/CHC30121">CHC30121 Certificate III in Early Childhood Education and Care</a>
                    <a class="dropdown-item" href="/course/CHC50121">CHC50121 Diploma of Early Childhood Education and Care</a> -->
                    @foreach ( $allCourses as $course)
                      @if ($course->class == 'Early Childhood Education' )
                        <a class="dropdown-item" href="/course/{{ $course->kname }}">{{ $course->code }} {{ $course->name }}</a>
                      @endif
                    @endforeach

                  </li>
                </ul>
              </li>

              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle" href="#" role="button" >Marketing and Communication</a>
                <ul class="dropdown-menu">
                  <li>
                    <!-- <a class="dropdown-item" href="/course/BSB40820">BSB40820 Certificate IV in Marketing and Communication</a>
                    <a class="dropdown-item" href="/course/BSB50620">BSB50620 Diploma of Marketing and Communication</a>
                    <a class="dropdown-item" href="/course/BSB60520">BSB60520 Advanced Diploma of Marketing and Communication</a> -->
                    @foreach ( $allCourses as $course)
                      @if ($course->class == 'Marketing and Communication' )
                        <a class="dropdown-item" href="/course/{{ $course->kname }}">{{ $course->code }} {{ $course->name }}</a>
                      @endif
                    @endforeach
                  </li>
                </ul>
              </li>

              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle" href="#" role="button" >Business and Management</a>
                <ul class="dropdown-menu">
                  <li>
                    <!-- <a class="dropdown-item" href="/course/BSB50420">BSB50420 Diploma of Leadership and Management</a>
                    <a class="dropdown-item" href="/course/BSB60420">BSB60420 Advanced Diploma of Leadership and Management</a>
                    <a class="dropdown-item" href="/course/BSB80120">BSB80120 Graduate Diploma of Management (Learning)</a> -->
                    @foreach ( $allCourses as $course)
                      @if ($course->class == 'Business and Management' )
                        <a class="dropdown-item" href="/course/{{ $course->kname }}">{{ $course->code }} {{ $course->name }}</a>
                      @endif
                    @endforeach
                  </li>
                </ul>
              </li>

              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle" href="#" role="button" >Automotive</a>
                <ul class="dropdown-menu">
                  <li>
                    <!-- <a class="dropdown-item" href="/course/AUR30620">AUR30620 Certificate III in Light Vehicle Mechanical Technology</a>
                    <a class="dropdown-item" href="/course/AUR40216">AUR40216 Certificate IV in Automotive Mechanical Diagnosis</a> -->
                    @foreach ( $allCourses as $course)
                      @if ($course->class == 'Automotive' )
                        <a class="dropdown-item" href="/course/{{ $course->kname }}">{{ $course->code }} {{ $course->name }}</a>
                      @endif
                    @endforeach
                  </li>
                </ul>
              </li>

              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle" href="#" role="button" >English Courses</a>
                <ul class="dropdown-menu">
                  <li>
                    <!-- <a class="dropdown-item" href="/course/general-english">General English(GE) Elementary to Upper Intermediate</a>
                    <a class="dropdown-item" href="/course/english-for-academic-purposes">English for Academic Purposes(EAP) Intermediate to Advanced</a> -->
                    @foreach ( $allCourses as $course)
                      @if ($course->class == 'English Courses' )
                        <a class="dropdown-item" href="/course/{{ $course->kname }}"> {{ $course->name }}</a>
                      @endif
                    @endforeach
                  </li>
                </ul>
              </li>

              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/intakedates">Intake Dates</a></li>
              <li><a class="dropdown-item" href="/promotion">Promotional Prices</a></li>


            </ul>
  
          </li>
          <!-- <li class="nav-item"><a class="nav-link" href="/colleges">Colleges</a></li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Education Agents</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/agentlist">Agents</a></li>
              <li><a class="dropdown-item" href="/findagent">Find An Agent</a></li>
              <li><a class="dropdown-item" href="https://form.jotform.com/252581213016043">Become an Agent</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Student Experience</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/enrolment-and-orientation">Enrollment and Orientation</a></li>
              <li><a class="dropdown-item" href="/student-services">Student Services</a></li>
              <li><a class="dropdown-item" href="/policies">Polices, Procudures and Forms</a></li>
              <li><a class="dropdown-item" href="/esos-framework-and-tps-information">ESOS Framework & TPS Information</a></li>
              <li><a class="dropdown-item" href="https://penfold.edu.au/wp-content/uploads/2025/10/Unity-Skills-Colleg-of-Health-International-Student-Prospectus_V3.0.pdf">Student Handbook</a></li>
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
          <li class="nav-item align-items-center  d-flex justify-content-end">
            <!-- <a class="nav-link" href="/apply">Apply Now</a> -->
            <a href="/apply" class="btn btn-apply me-2">APPLY NOW </a>

          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- main content -->

  <section class="hero text-center section-bg-home">
    <div class="container py-5">
      <h1 class="color-darkblue">
        DISCOVER WHAT YOU <br>
        CAN <span class="color-lightblue">ACHIEVE</span>
      </h1>
      <div class="text-start">
        <a href="/allcourses" class="btn btn-primary btn-lg footer-start-here-btn fs-4 mt-3 bg-lightblue">Start now</a>
      </div>

      <!-- <img src="https://placehold.co/600x400" alt="Illustration" class="img-fluid"> -->
    </div>
  </section>

  <section class="bg-darkpurple">
    <div class="bg-white-round-right-bottom">
      <div class="container">
        <div class="row text-center">

        </div>
        <div class="row ">
          <div class="col-md-12" style="padding-top: 100px;">
            <h2 class="color-lightblue">Start Exploring</h2>
            <p class="fs-3">Discover the full range of courses at United Skills College of Health</p>
            <p class="fs-4">Your educational path begins here, find the perfect course for you.</p>
          </div>
        </div>

        <!-- 示例：校园图片轮播 -->
        <div id="courseCarousel1" class="carousel slide text-center">
          <!-- 轮播图片 -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row  py-2 px-2">
                <div class="col-md-3">
                  <div class="carousel-img-item bg-white shadow-sm">

                    <div class="img-cover-container">
                      <a href="/allcourses#business">
                        <img src="svg/Vector Health  website-05.svg" class="">
                      </a>
                    </div>
                    <div class="fs-2">
                      <a href="/allcourses#business">
                        Business
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="carousel-img-item bg-white shadow-sm">
                    <div class="img-cover-container">
                      <a href="/allcourses#automotive">
                        <img src="svg/Vector Health  website-04.svg" class="">
                      </a>
                    </div>
                    <div class="fs-2 pt-3">
                      <a href="/allcourses#automotive">
                        Automotive
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="carousel-img-item bg-white shadow-sm">
                    <div class="img-cover-container">
                      <a href="/allcourses#childcare">
                        <img src="svg/Vector Health  website-02.svg" class="">
                      </a>
                    </div>
                    <div class="fs-2">
                      <a href="/allcourses#childcare">
                        Childcare
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="carousel-img-item bg-white shadow-sm">
                    <div class="img-cover-container">
                      <a href="/allcourses#aged-care">
                        <img src="svg/Vector Health  website-03.svg" class="">
                      </a>
                    </div>
                    <div class="fs-2">
                      <a href="/allcourses#aged-care">
                        Community Services
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 第2页 -->
            <div class="carousel-item">
              <div class="row ">
                <div class="col-md-3">
                  <div class="carousel-img-item bg-white">
                    <div class="img-cover-container">
                      <a href="/allcourses#automotive">
                        <img src="svg/Vector Health  website-04.svg" class="">
                      </a>
                    </div>
                    <div class="fs-2 pt-3">
                      <a href="/allcourses#automotive">
                        Automotive
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="carousel-img-item bg-white">
                    <div class="img-cover-container">
                      <a href="/allcourses#childcare">
                        <img src="svg/Vector Health  website-02.svg" class="">
                      </a>
                    </div>
                    <div class="fs-2">
                      <a href="/allcourses#childcare">
                        Childcare
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="carousel-img-item bg-white">
                    <div class="img-cover-container">
                      <a href="/allcourses#aged-care">
                        <img src="svg/Vector Health  website-03.svg" class="">
                      </a>
                    </div>
                    <div class="fs-2">
                      <a href="/allcourses#aged-care">
                        Community Services
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="carousel-img-item bg-white">
                    <div class="img-cover-container">
                      <a href="/allcourses#cookery">
                        <img src="svg/Vector Health  website-17.svg" class="">
                      </a>
                    </div>
                    <div class="fs-2">
                      <a href="/allcourses#cookery">
                        Cookery & Hospitality
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 第三页 -->
            <div class="carousel-item">
              <div class="row ">
                <div class="col-md-3">
                  <div class="carousel-img-item bg-white">
                    <div class="img-cover-container">
                      <a href="/allcourses#childcare">
                        <img src="svg/Vector Health  website-02.svg" class="">
                      </a>
                    </div>
                    <div class="fs-2">
                      <a href="/allcourses#childcare">
                        Childcare
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="carousel-img-item bg-white">
                    <div class="img-cover-container">
                      <a href="/allcourses#aged-care">
                        <img src="svg/Vector Health  website-03.svg" class="">
                      </a>
                    </div>
                    <div class="fs-2">
                      <a href="/allcourses#aged-care">
                        Community Services
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="carousel-img-item bg-white">
                    <div class="img-cover-container">
                      <a href="/allcourses#cookery">
                        <img src="svg/Vector Health  website-17.svg" class="">
                      </a>
                    </div>
                    <div class="fs-2">
                      <a href="/allcourses#cookery">
                        Cookery & Hospitality
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="carousel-img-item bg-white">
                    <div class="img-cover-container">
                      <a href="/allcourses#marketing">
                        <img src="svg/Vector Health  website-19.svg" class="">
                      </a>
                    </div>
                    <div class="fs-2 pt-3">
                      <a href="/allcourses#marketing">
                        Marketing & Communication
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- 自定义指示器（核心部分） -->
          <div class="carousel-indicators custom-carousel-indicators custom-carousel-bg-white">
            <button type="button" data-bs-target="#courseCarousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#courseCarousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#courseCarousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
        </div>

        <div class="row pb-5"></div>

      </div>

    </div>
  </section>

  <section class="bg-white">
    <div class="bg-darkpurple-round-left-bottom">

    <div class="container py-5 color-white">
      <h1 class="py-5 text-center">Why Us</h1>
      <div class="row text-center">
        <div class="col-md-3">
          <div class="home-excellent-img">
            <img src="/images/vec-computer.png">
          </div>
          <h2 class="color-white home-excellent-num">10+</h2>
          <p class="fs-4">Years of Excellence</p>
        </div>
        <div class="col-md-3">
          <div class="home-excellent-img">
            <img src="/images/vec-books.png">
          </div>
          <h2 class="color-white home-excellent-num">2+</h3>
          <p class="fs-4">Campus</p>
        </div>
        <div class="col-md-3">
            <div class="home-excellent-img">
              <img src="/images/vec-meeting.png">
            </div>
            <h2 class="color-white home-excellent-num">5000+</h3>
            <p class="fs-4">Graduates</p>
        </div>
        <div class="col-md-3">
          <div class="home-excellent-img">
            <img src="/images/vec-building.png">
          </div>
          <h2 class="color-white home-excellent-num">50+</h3>
          <p class="fs-4">Industry Partners</p>
        </div>
      </div>



    </div>
    </div>
  </section>


  <section class="">
    <div class="">

      <div class="container py-5">
        <div class="row">
          <div class="col-md-12 mt-5 px-5">
            <h2 class="color-darkpurple pt-5">Our Campus</h2>
            <p class="fs-4">Our campus provides diverse elements like learning spaces (libraries, labs, theaters), health/wellness centers (clinics, gyms, gardens), cultural spots (galleries, museums, outdoor venues), social hubs (cafes, student centers, quads), and specialized facilities (farms, aviation centers, art studios).</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-8 text-center pb-5">

          <!-- 示例：校园图片轮播 -->
          <div id="campusPhotosCarousel" class="carousel slide">
            <!-- 轮播图片 -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row ">
                  <div class="col-md-4">
                    <div class="img-cover-container">
                      <img src="/images/campus-ex1.png" class="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="img-cover-container">
                      <img src="/images/melbourne1.png" class="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="img-cover-container">
                      <img src="/images/campus-ex3.png" class="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row ">
                  <div class="col-md-4">
                    <div class="img-cover-container">
                      <img src="/images/classroom1.jpg" class="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="img-cover-container">
                      <img src="/images/cookery1.png" class="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="img-cover-container">
                      <img src="/images/earlychildhood1.png" class="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row ">
                  <div class="col-md-4">
                    <div class="img-cover-container">
                      <img src="/images/agedcare1.png" class="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="img-cover-container">
                      <img src="/images/agedcare2.png" class="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="img-cover-container">
                      <img src="/images/agedcare3.png" class="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row ">
                  <div class="col-md-4">
                    <div class="img-cover-container">
                      <img src="/images/auto1.png" class="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="img-cover-container">
                      <img src="/images/auto2.png" class="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="img-cover-container">
                      <img src="/images/auto3.png" class="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row ">

                  <div class="col-md-6">
                    <div class="img-cover-container">
                      <img src="/images/business1.png" class="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-cover-container">
                      <img src="/images/marketing1.png" class="">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- 自定义指示器（核心部分） -->
            <div class="carousel-indicators custom-carousel-indicators custom-carousel-bg-white">
              <button type="button" data-bs-target="#campusPhotosCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#campusPhotosCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#campusPhotosCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#campusPhotosCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#campusPhotosCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
          </div>
          

        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </section>

  <!-- section partners -->
  <section class="" style="">
    <div class="">

      <div class="container py-5">
        <div class="row">
          <div class="col-md-4 mt-5 px-5">
            <h2 class="color-darkpurple pt-5 fs-1">Partner Companies</h2>
          </div>
          <div class="col-md-8 mt-5 px-5 fs-4">
            <p>Partnerships between higher-education institutions and employers can be invaluable for helping businesses respond to growing talent needs and cutting training costs.
            By building closer relationships with businesses, universities can help students gain practical skills through internships, co-ops, and mentorship programs.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2"></div>
        
        <div class="col-md-8 text-center pb-5">
          <img src="/images/partner_logo-1.png" class="img-fluid partner-logo-img" alt="Partner Companies">
          <img src="/images/partner_logo-2-2.jpg" class="img-fluid partner-logo-img" alt="Partner Companies">
          <img src="/images/partner_logo-3.jpg" class="img-fluid partner-logo-img" alt="Partner Companies">
          <img src="/images/partner_logo-4.png" class="img-fluid partner-logo-img" alt="Partner Companies">
          <img src="/images/partner_logo-5.png" class="img-fluid partner-logo-img" alt="Partner Companies">
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </section>


 <!-- footer -->
 @include('layouts.footer')

 </body>
</html>

