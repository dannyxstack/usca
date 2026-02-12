<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<style>
.section-bg-course {
  background-image: url('/images/bg-header-course-detail.png');
  background-size: cover; /* 覆盖整个区域 */
  background-position: center; /* 居中显示 */
  width: 100%;
  height: 800px;
}
.card {
  margin-top: 15px;
}
</style>

<body>

  <!-- top navbar -->
  @include('layouts.topbar')

  <!-- main content -->

  <section class="text-start section-bg-course">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-6 color-white">

          <h1 class="color-white" style="margin-top: 100px;">
            ALL COURSES <br>
            At <span class="color-white">Unity Skills College Of Health</span>
          </h1>
          <div class="text-start fs-4">
            <!-- <a href="#" class="btn btn-primary btn-lg footer-start-here-btn fs-4 mt-3 bg-darkblue">Start now</a> -->
            <p>Explore our comprehensive range of nationally-recognized qualifications designed to equip you with industry-relevant skills for today's competitive job market.</p>
          </div>
        </div>
        <div class="col-md-6">
          <img src="/svg/Vector Health  website-21.svg" alt="Courses Banner" class="img-fluid rounded-5">
        </div>
      </div>

      <!-- <img src="https://placehold.co/600x400" alt="Illustration" class="img-fluid"> -->
    </div>
  </section>

  <section class="bg-white" id="aged-care">
    <div class="">
      <div class="container">
        <div class="row">
          <div class="col-md-5 pt-5">
            <h2 class="color-darkpurple pt-5 fs-1">Aged Care & Community Services</h2>
            <p class="fs-4">Gain the essential skills and nationally-recognized qualifications to provide meaningful support in aged care and community services, where every day makes a difference in someone's life.</p>
          </div>
          <div class="col-md-7">
            <img src="/images/courses/Certificate III in Individual Support.png" alt="Support illustration" class="img-fluid course-pathway-img">
          </div>
        </div>
        <div class="row my-5">
          @foreach ( $allCourses as $course)
            @if ($course->class == 'Aged Care and Community Services')
            <div class="col-md-4 pe-0">
              <div class="card course-pathway-card ps-1 py-2">
                <div class="card-body">
                  <h5 class="card-title fs-5 color-lightpurple">{{$course->code}}</h5>
                  <h6 class="card-title fs-3 color-darkpurple course-pathway-card-body">{{ $course->name }}</h6>
                  <a href="/course/{{ $course->kname }}" class="btn fs-4 bg-lightpurple course-pathway-btn color-white mt-2">Learn More</a>
                </div>
              </div>
            </div>
            @endif
          @endforeach
        </div>
        <div class="row">
          <p></p>
        </div>
      </div>
 
    </div>
  </section>

  <section class="bg-lightpurple" id="childcare">
    <div class="">
      <div class="container  py-5 color-white">
        <div class="row">
          <div class="col-md-5 pt-5">
            <h2 class="pt-5 fs-1">Early Childhood Education</h2>
            <p class="fs-4">Shape young minds and build foundational futures with our early childhood education courses, where you'll learn to nurture, educate, and inspire the next generation in their most formative years.</p>
          </div>
          <div class="col-md-7">
            <img src="/images/earlychildhood1.png" alt="Support illustration" class="img-fluid course-pathway-img">
            <p> </p>
          </div>
        </div>
        <div class="row">
          @foreach ( $allCourses as $course)
            @if ($course->class == 'Aged Care and Community Services')
            <div class="col-md-4 pe-0">
              <div class="card course-pathway-card ps-1 py-2">
                <div class="card-body">
                  <h5 class="card-title fs-5 color-lightpurple">{{$course->code}}</h5>
                  <h6 class="card-title fs-3 color-darkpurple course-pathway-card-body">{{ $course->name }}</h6>
                  <a href="/course/{{ $course->kname }}" class="btn fs-4 bg-lightpurple course-pathway-btn color-white mt-2">Learn More</a>
                </div>
              </div>
            </div>
            @endif
          @endforeach
        </div>
        <div class="row>">
          <p></p>
        </div>
      </div>
 
    </div>
  </section>

  <section class="bg-white" id="marketing">
    <div class="">
      <div class="container py-5">
        <div class="row py-5">
          <div class="col-md-5 pt-5">
            <h2 class="color-purple pt-5 fs-1">Marketing and Communication</h2>
            <p class="fs-4">Master the art of digital storytelling and strategic communication with our marketing courses, designed to equip you with cutting-edge skills for today's dynamic business landscape.</p>
          </div>
          <div class="col-md-7">
            <img src="/images/marketing1.png" alt="Support illustration" class="img-fluid course-pathway-img">
          </div>
        </div>
        <div class="row">
          @foreach ( $allCourses as $course)
            @if ($course->class == 'Marketing and Communication')
            <div class="col-md-4 pe-0">
              <div class="card course-pathway-card ps-1 py-2">
                <div class="card-body">
                  <h5 class="card-title fs-5 color-lightpurple">{{$course->code}}</h5>
                  <h6 class="card-title fs-3 color-darkpurple course-pathway-card-body">{{ $course->name }}</h6>
                  <a href="https://uscohealth.edu.au/course/{{ $course->kname }}" class="btn fs-4 bg-lightpurple course-pathway-btn color-white mt-2">Learn More</a>
                </div>
              </div>
            </div>
            @endif
          @endforeach
        </div>
      </div>
 
    </div>
  </section>

  <section class="bg-darkpurple" id="business">
    <div class="">
      <div class="container py-5 color-white">
        <div class="row">
          <div class="col-md-5 pt-5">
            <h2 class=" pt-5 fs-1">Business and Management</h2>
            <p class="fs-4">Develop leadership excellence and strategic vision through our business and management programs, preparing you to drive organizational success in competitive Australian markets.</p>
          </div>
          <div class="col-md-7">
            <img src="/images/business1.png" alt="Support illustration" class="img-fluid course-pathway-img">
            <p></p>
          </div>
        </div>
        <div class="row">
          @foreach ( $allCourses as $course)
            @if ($course->class == 'Business and Management')
            <div class="col-md-4 pe-0">
              <div class="card course-pathway-card ps-1 py-2">
                <div class="card-body">
                  <h5 class="card-title fs-5 color-lightpurple">{{$course->code}}</h5>
                  <h6 class="card-title fs-3 color-darkpurple course-pathway-card-body">{{ $course->name }}</h6>
                  <a href="https://uscohealth.edu.au/course/{{ $course->kname }}" class="btn fs-4 bg-lightpurple course-pathway-btn color-white mt-2">Learn More</a>
                </div>
              </div>
            </div>
            @endif
          @endforeach
        </div>
      </div>
 
    </div>
  </section>

  <section class="bg-white" id="automotive">
    <div class="">
      <div class="container py-5">
        <div class="row">
          <div class="col-md-5 pt-5">
            <h2 class="color-darkpurple pt-5 fs-1">Automotive</h2>
            <p class="fs-4">Accelerate your career in Australia's automotive industry with hands-on training in modern vehicle technology, diagnostics, and repair techniques.</p>
          </div>
          <div class="col-md-7">
            <img src="/images/auto2.png" alt="Support illustration" class="img-fluid course-pathway-img">
            <p> </p>
          </div>
        </div>
        <div class="row">
          @foreach ( $allCourses as $course)
            @if ($course->class == 'Automotive')
            <div class="col-md-4 pe-0">
              <div class="card course-pathway-card ps-1 py-2">
                <div class="card-body">
                  <h5 class="card-title fs-5 color-lightpurple">{{$course->code}}</h5>
                  <h6 class="card-title fs-3 color-darkpurple course-pathway-card-body">{{ $course->name }}</h6>
                  <a href="https://uscohealth.edu.au/course/{{ $course->kname }}" class="btn fs-4 bg-lightpurple course-pathway-btn color-white mt-2">Learn More</a>
                </div>
              </div>
            </div>
            @endif
          @endforeach
        </div>
      </div>
 
    </div>
  </section>

  <section class="bg-lightpurple2" id="cookery" style="display: none;">
    <div class="">
      <div class="container py-5">
        <div class="row">
          <div class="col-md-5 pt-5">
            <h2 class="color-darkpurple pt-5 fs-1">Cookery and Hospitality</h2>
            <p class="fs-4">Culinary arts meet professional excellence in our cookery and hospitality courses, where you'll master both kitchen craftsmanship and customer service for global career opportunities.</p>
          </div>
          <div class="col-md-7">
            <img src="/images/cookery1.png" alt="Support illustration" class="img-fluid course-pathway-img">
            <p> </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 pe-0">
            <div class="card course-pathway-card ps-1 py-2">
              <div class="card-body">
                <h5 class="card-title fs-5 color-lightpurple">SIT30821</h5>
                <h6 class="card-title fs-3 color-darkpurple course-pathway-card-body">Certificate III in Commercial Cookery</h6>
                <a href="/course/SIT30821" class="btn fs-4 bg-lightpurple course-pathway-btn color-white mt-2">Learn More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 pe-0">
            <div class="card course-pathway-card ps-1 py-2" >
              <div class="card-body">
                <h5 class="card-title fs-5 color-lightpurple">SIT40521</h5>
                <h6 class="card-title fs-3 color-darkpurple course-pathway-card-body">Certificate IV in Kitchen Management</h6>
                <a href="/course/SIT40521" class="btn fs-4 bg-lightpurple course-pathway-btn color-white mt-2">Learn More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 pe-0">
            <div class="card course-pathway-card ps-1 py-2" >
              <div class="card-body">
                <h5 class="card-title fs-5 color-lightpurple">SIT50422</h5>
                <h6 class="card-title fs-3 color-darkpurple course-pathway-card-body">Diploma of Hospitality</h6>
                <a href="/course/SIT50422" class="btn fs-4 bg-lightpurple course-pathway-btn color-white mt-2">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
 
    </div>
  </section>

  <section class="bg-lightpurple2" id="english-courses">
    <div class="">
      <div class="container py-5 color-white">
        <div class="row">
          <div class="col-md-5 pt-5">
            <h2 class="color-white pt-5 fs-1">English Courses</h2>
            <p class="fs-4">Build confidence and fluency with our English language programs, specifically designed to help international students achieve academic success and professional communication skills in Australia.</p>
          </div>
          <div class="col-md-7">
            <img src="/images/english1.png" alt="Support illustration" class="img-fluid course-pathway-img">
            <p> </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 pe-0">
            <div class="card course-pathway-card ps-1 py-2">
              <div class="card-body">
                <h5 class="card-title fs-5 color-lightpurple"></h5>
                <h6 class="card-title fs-3 color-darkpurple course-pathway-card-body">General English(GE) Elementary to Upper Intermediate</h6>
                <a href="/course/general-english" class="btn fs-4 bg-lightpurple course-pathway-btn color-white mt-2">Learn More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 pe-0">
            <div class="card course-pathway-card ps-1 py-2" >
              <div class="card-body">
                <h5 class="card-title fs-5 color-lightpurple"></h5>
                <h6 class="card-title fs-3 color-darkpurple course-pathway-card-body">English for Academic Purposes(EAP) Intermediate to Advanced</h6>
                <a href="/course/english-for-academic-purposes" class="btn fs-4 bg-lightpurple course-pathway-btn color-white mt-2">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
 
    </div>
  </section>


 <!-- footer -->
 @include('layouts.footer')

 </body>
</html>

