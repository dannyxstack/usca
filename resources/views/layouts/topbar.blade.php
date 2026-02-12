<!-- top navbar -->
  <div class="top-bar" style="display:none;">
    <div class="container d-flex justify-content-end align-items-center">
      <form id="siteSearchForm" class="search-form d-inline-flex" action="https://www.google.com/search" onsubmit="performSiteSearch(event)">
        <input type="text" id="siteSearchInput" name="q" class="form-control me-2" placeholder="Search...">
        <button type="submit" class="btn btn-light" style="background-color: #ebebeb;">
          <i class="bi bi-search search-icon" style="color:#42c3da"></i>
        </button>
      </form>
      <a href="/apply" class="btn btn-apply me-2">APPLY NOW </a>
    </div>
  </div>
  
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
          <li class="nav-item"><a class="nav-link" href="/index">Home</a></li>
          <li class="nav-item"><a class="nav-link @if(isset($menu1)&&$menu1=='why-us') em @endif" href="/why-us">Why Us</a></li>
          <li class="nav-item dropdown">
            <!-- 1-2 layer -->
            <a class="nav-link dropdown-toggle @if(isset($menu1)&&$menu1=='all-courses') em @endif" href="/all-courses" >Courses</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item @if(isset($title)&&$title=='All Courses') em @endif" href="/all-courses">All Courses</a></li>
              
              <li><hr class="dropdown-divider"></li>


              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle @if(isset($course)&&$course->class=='Aged Care and Community Services') em @endif" 
                  href="#" role="button" >Aged Care and Community Services</a>
                <ul class="dropdown-menu">
                  <li>
                    <!-- <a class="dropdown-item" href="/course/CHC33021">CHC33021 Certificate III in Individual Support</a>
                    <a class="dropdown-item" href="/course/CHC43015">CHC43015 Certificate IV in Ageing Support</a>
                    <a class="dropdown-item" href="/course/CHC52021">CHC52021 Diploma of Community Services</a> -->
                    @foreach ( $allCourses as $courseItem)
                      @if ($courseItem->class == 'Aged Care and Community Services' )
                        <a class="dropdown-item @if(isset($course)&&$course->kname==$courseItem->kname) em @endif" href="/course/{{ $courseItem->kname }}">{{ $courseItem->code }} {{ $courseItem->name }}</a>
                      @endif
                    @endforeach
                  </li>
                </ul>
              </li>

              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle @if(isset($course)&&$course->class=='Early Childhood Education') em @endif" 
                  href="#" role="button" >Early Childhood Education</a>
                <ul class="dropdown-menu">
                  <li>
                    <!-- <a class="dropdown-item" href="/course/CHC30121">CHC30121 Certificate III in Early Childhood Education and Care</a>
                    <a class="dropdown-item" href="/course/CHC50121">CHC50121 Diploma of Early Childhood Education and Care</a> -->
                    @foreach ( $allCourses as $courseItem)
                      @if ($courseItem->class == 'Early Childhood Education' )
                        <a class="dropdown-item @if(isset($course)&&$course->kname==$courseItem->kname) em @endif" href="/course/{{ $courseItem->kname }}">{{ $courseItem->code }} {{ $courseItem->name }}</a>
                      @endif
                    @endforeach

                  </li>
                </ul>
              </li>

              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle @if(isset($course)&&$course->class=='Marketing and Communication') em @endif" 
                  href="#" role="button" >Marketing and Communication</a>
                <ul class="dropdown-menu">
                  <li>
                    <!-- <a class="dropdown-item" href="/course/BSB40820">BSB40820 Certificate IV in Marketing and Communication</a>
                    <a class="dropdown-item" href="/course/BSB50620">BSB50620 Diploma of Marketing and Communication</a>
                    <a class="dropdown-item" href="/course/BSB60520">BSB60520 Advanced Diploma of Marketing and Communication</a> -->
                    @foreach ( $allCourses as $courseItem)
                      @if ($courseItem->class == 'Marketing and Communication' )
                        <a class="dropdown-item @if(isset($course)&&$course->kname==$courseItem->kname) em @endif" href="/course/{{ $courseItem->kname }}">{{ $courseItem->code }} {{ $courseItem->name }}</a>
                      @endif
                    @endforeach
                  </li>
                </ul>
              </li>

              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle @if(isset($course)&&$course->class=='Business and Management') em @endif" 
                  href="#" role="button" >Business and Management</a>
                <ul class="dropdown-menu">
                  <li>
                    <!-- <a class="dropdown-item" href="/course/BSB50420">BSB50420 Diploma of Leadership and Management</a>
                    <a class="dropdown-item" href="/course/BSB60420">BSB60420 Advanced Diploma of Leadership and Management</a>
                    <a class="dropdown-item" href="/course/BSB80120">BSB80120 Graduate Diploma of Management (Learning)</a> -->

                    @foreach ( $allCourses as $courseItem)
                      @if ($courseItem->class == 'Business and Management' )
                        <a class="dropdown-item @if(isset($course)&&$course->kname==$courseItem->kname) em @endif" href="/course/{{ $courseItem->kname }}">{{ $courseItem->code }} {{ $courseItem->name }}</a>
                      @endif
                    @endforeach
                  </li>
                </ul>
              </li>

              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle @if(isset($course)&&$course->class=='Automotive') em @endif" 
                  href="#" role="button" >Automotive</a>
                <ul class="dropdown-menu">
                  <li>
                    <!-- <a class="dropdown-item" href="/course/AUR30620">AUR30620 Certificate III in Light Vehicle Mechanical Technology</a>
                    <a class="dropdown-item" href="/course/AUR40216">AUR40216 Certificate IV in Automotive Mechanical Diagnosis</a> -->

                    @foreach ( $allCourses as $courseItem)
                      @if ($courseItem->class == 'Automotive' )
                        <a class="dropdown-item @if(isset($course)&&$course->kname==$courseItem->kname) em @endif" href="/course/{{ $courseItem->kname }}">{{ $courseItem->code }} {{ $courseItem->name }}</a>
                      @endif
                    @endforeach
                  </li>
                </ul>
              </li>

              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle @if(isset($course)&&$course->class=='English Courses') em @endif" 
                  href="#" role="button" >English Courses</a>
                <ul class="dropdown-menu">
                  <li>
                    <!-- <a class="dropdown-item" href="/course/general-english">General English(GE) Elementary to Upper Intermediate</a>
                    <a class="dropdown-item" href="/course/english-for-academic-purposes">English for Academic Purposes(EAP) Intermediate to Advanced</a> -->

                    @foreach ( $allCourses as $courseItem)
                      @if ($courseItem->class == 'English Courses' )
                        <a class="dropdown-item @if(isset($course)&&$course->kname==$courseItem->kname) em @endif" href="/course/{{ $courseItem->kname }}">{{ $courseItem->code }} {{ $courseItem->name }}</a>
                      @endif
                    @endforeach
                  </li>
                </ul>
              </li>

              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item @if(isset($title)&&$title=='Intake Dates') em @endif" href="/intake-dates">Intake Dates</a></li>
              <li><a class="dropdown-item @if(isset($title)&&$title=='Promotional Prices') em @endif" href="/promotional-prices">Promotional Prices</a></li>


            </ul>
  
          </li>
          <!-- <li class="nav-item"><a class="nav-link" href="/colleges">Colleges</a></li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle @if(isset($menu1)&&$menu1=='agent') em @endif" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Education Agents</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item @if(isset($title)&&$title=='Agent List') em @endif" href="/agent-list">Agents</a></li>
              <li><a class="dropdown-item @if(isset($title)&&$title=='Find An Agent') em @endif" href="/find-an-agent">Find An Agent</a></li>
              <li><a class="dropdown-item" href="https://form.jotform.com/252581213016043">Become an Agent</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle @if(isset($menu1)&&$menu1=='student-experience') em @endif" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Student Experience</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item @if(isset($title)&&$title=='Enrolment and Orientation') em @endif" href="/enrolment-and-orientation">Enrolment and Orientation</a></li>
              <li><a class="dropdown-item @if(isset($title)&&$title=='Student Services') em @endif" href="/student-services">Student Services</a></li>
              <li><a class="dropdown-item @if(isset($title)&&$title=='Policies, Procedures and Forms') em @endif" href="/policies">Policies, Procedures and Forms</a></li>
              <li><a class="dropdown-item @if(isset($title)&&$title=='ESOS Framework & TPS Information') em @endif" href="/esos-framework-and-tps-information">ESOS Framework & TPS Information</a></li>
              <li><a class="dropdown-item" href="https://penfold.edu.au/wp-content/uploads/2025/10/Unity-Skills-Colleg-of-Health-International-Student-Prospectus_V3.0.pdf">Student Handbook</a></li>
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link @if(isset($menu1)&&$menu1=='contact') em @endif" href="/contact">Contact Us</a></li>
          <li class="nav-item"><a class="nav-link @if(isset($menu1)&&$menu1=='apply') em @endif" href="/apply">Apply Now</a></li>
        </ul>
      </div>
    </div>
  </nav>

