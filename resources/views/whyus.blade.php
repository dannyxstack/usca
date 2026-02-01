<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<style>
.benefits-card {
  border: none;
  padding: 20px;
  border-radius: 20px;
  height: 600px;
}
.benefits-card-img {
  border-radius: 50%;
  width: 160px;
  height: 160px;
}
.benefits-card-title {
  height: 100px;
}

/** svg colors **/

.svg-inverted-filter {
  filter: invert(100%); /* 反转所有颜色 */
}

.svg-inverted-brightness {
  filter: invert(100%) brightness(2); /* 反转并增加亮度 */
}


.svg-white-stroke path,
.svg-white-stroke circle,
.svg-white-stroke rect,
.svg-white-stroke line,
.svg-white-stroke polyline,
.svg-white-stroke polygon {
  fill: none !important;
  stroke: white !important;
  /* stroke-width: 2 !important; */
}
.svg-white-fill path {
  fill: white !important;
  stroke: none !important;
}
  /* 亮蓝色 ok */
  .img-light-blue {
  filter: 
      brightness(0) 
      saturate(100%) 
      invert(60%) 
      sepia(80%) 
      saturate(1000%) 
      hue-rotate(180deg) 
      /* hue-rotate(44c2d9)  */
      brightness(110%) 
      contrast(100%);
  }

/* grok 替换svg线条颜色为#44c2d9 */
.svg-color-lightblue {
  filter: brightness(0) saturate(100%) invert(66%) sepia(74%) saturate(407%) hue-rotate(143deg) brightness(92%) contrast(84%);
}

.svg-color-lightpurple {
  filter: brightness(0) saturate(100%) invert(66%) sepia(25%) saturate(542%) hue-rotate(264deg) brightness(86%) contrast(95%);
}


.purple-section {
  position: relative;
  min-height: 400px;
  padding: 2rem 0;
  overflow: hidden;
}

.purple-section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 80%;
  background-color: #c785b5;
  border-radius: 30px;
  z-index: 0;
}

.purple-section .content {
  position: relative;
  z-index: 1;
  /* background: white; */
  /* border-radius: 20px; */
  /* padding: 2rem; */
  /* box-shadow: 0 5px 15px rgba(0,0,0,0.1); */
  /* max-width: 800px; */
  /* margin: 0 auto; */
}

.campus-icon {
  width: 100px;
  height: 100px;
}

</style>

<body>

  <!-- top navbar -->
  @include('layouts.topbar')

  <!-- main content -->

  <section class="hero text-center section-bg-whyus">
    <div class="container py-5">
      <h1 class="">WHY US</h1>
      <!-- <img src="https://placehold.co/600x400" alt="Illustration" class="img-fluid"> -->
    </div>
  </section>

  <section class="py-5">
    <div class="container text-center">
      <h2 class="color-darkpurple text-center">Company Milestones</h2>
      <p>A journey of growth, innovation, and commitment to excellence in vocational education</p>
      <img src="/images/usg-milestone1.png" alt="Usg History" class="img-fluid">
    </div>
  </section>


  <section class="bg-grey-color">
    <div class="bg-white-left-bottom">

    <div class="container text-center py-5">
      <h1 class="py-5 color-darkpurple">Benefits of studying with us</h1>
      <div class="row" style="display: ;">
        <div class="col-md-4">
          <div class="benefits-card">
            <div class="benefits-card-img mx-auto d-block bg-grey-color" >
              <img src="svg/Vector Header-15.svg" class="benefits-card-img svg-color-lightpurple" alt="Cost icon">
            </div>
            <h2 class="pt-4 color-darkpurple benefits-card-title">Cost Effective</h3>
            <p class="fs-5 text-start ms-3">Unity Skills College of Health training courses are cost competitive in the market place. Our pricing structure will provide you with confidence that you are receiving value for money on your investment.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="benefits-card">
            <div class="benefits-card-img mx-auto d-block bg-grey-color" >
              <img src="svg/Vector Header-17.svg" class="benefits-card-img svg-color-lightblue">
            </div>
            <h2 class="pt-4 color-darkpurple benefits-card-title">Campuses Easy to Access</h3>
            <p class="fs-5 text-start ms-3">The campus is located in the heart of the Melbourne Central Business District (CBD). Public transport (trains, trams and buses) is accessible to and from the campus 7 days a week. Unity Skills College of Health facilities boast modern classrooms and computer labs, as well as other training facilities that are ideal for you to gain the most out of your study.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="benefits-card">
            <div class="benefits-card-img mx-auto d-block bg-grey-color" >
              <img src="svg/Vector Header-20.svg" class="benefits-card-img svg-color-lightpurple">
            </div>
            <h2 class="pt-4 color-darkpurple benefits-card-title">The Academic Staff</h3>
            <p class="fs-5 text-start ms-3">Unity Skills College of Health trainers and assessors are experienced, enthusiastic and dedicated, they deliver well-prepared and stimulating lessons for the VET training programs. All trainers and assessors hold a Certificate IV in Training and Assessment qualification, together with their academic qualifications and vast experience within the relevant industry.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="benefits-card">
            <div class="benefits-card-img mx-auto d-block bg-grey-color">
              <img src="svg/Vector Header-14.svg" class="benefits-card-img svg-color-lightblue"></svg>
            </div>
            <h2 class="pt-2 color-darkpurple benefits-card-title">Modern Technology and Resources</h3>
            <p class="fs-5 text-start ms-3">Our computer labs are equipped with modern technology and are accessible to you during your studies. You will have free access to Wi-Fi for personal use (in accordance with policy) during your enrolment with us on campus.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="benefits-card">
            <div class="benefits-card-img mx-auto d-block bg-grey-color" >
              <img src="svg/Vector Header-16.svg" class="benefits-card-img svg-color-lightpurple">
            </div>
            <h2 class="pt-4 color-darkpurple benefits-card-title">Flexible Learning</h3>
            <p class="fs-5 text-start ms-3">We provide flexible study options and, where possible, schedule daytime, evening and weekend classes to meet the all of your needs. All scheduled classes are face-to-face classroom based on the campus.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="benefits-card">
            <div class="benefits-card-img mx-auto d-block bg-grey-color" >
              <img src="svg/Vector Header-19.svg" class="benefits-card-img svg-color-lightblue">
            </div>
            <h2 class="pt-4 color-darkpurple benefits-card-title">Student Support Services</h3>
            <p class="fs-5 text-start ms-3">Our Student Support Services strive to provide the very best welfare and academic support for you. With our commitment to ensuring a personalised service that meets your needs, our staff interact with you when you need. You can make appointments to receive the support you are seeking.</p>
          </div>
        </div>
      </div>

      <!-- 示例：校园图片轮播 -->
      <div id="benefitCarousel" class="carousel slide py-5" style="display: none;">
        <!-- 轮播图片 -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <!-- page 1 [1,2,3] -->
            <div class="row">
              <div class="col-md-4">
                <div class="benefits-card">
                  <div class="benefits-card-img mx-auto d-block bg-white" >
                    <img src="svg/Vector Header-15.svg" class="benefits-card-img svg-color-lightblue" alt="Cost icon">
                  </div>
                  <h2 class="pt-4 color-darkpurple benefits-card-title">Cost Effective</h3>
                  <p class="fs-5 text-start ms-3">Unity Skills College of Health training courses are cost competitive in the market place. Our pricing structure will provide you with confidence that you are receiving value for money on your investment.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="benefits-card">
                  <div class="benefits-card-img mx-auto d-block bg-darkblue" >
                    <img src="svg/Vector Header-17.svg" class="benefits-card-img svg-inverted-brightness">
                  </div>
                  <h2 class="pt-4 color-darkpurple benefits-card-title">Campuses Easy to Access</h3>
                  <p class="fs-5 text-start ms-3">The campus is located in the heart of the Melbourne Central Business District (CBD). Public transport (trains, trams and buses) is accessible to and from the campus 7 days a week. Unity Skills College of Health facilities boast modern classrooms and computer labs, as well as other training facilities that are ideal for you to gain the most out of your study.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="benefits-card">
                  <div class="benefits-card-img mx-auto d-block bg-white" >
                    <img src="svg/Vector Header-20.svg" class="benefits-card-img svg-color-lightblue">
                  </div>
                  <h2 class="pt-4 color-darkpurple benefits-card-title">The Academic Staff</h3>
                  <p class="fs-5 text-start ms-3">Unity Skills College of Health trainers and assessors are experienced, enthusiastic and dedicated, they deliver well-prepared and stimulating lessons for the VET training programs. All trainers and assessors hold a Certificate IV in Training and Assessment qualification, together with their academic qualifications and vast experience within the relevant industry.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- page 2 [2,3,4] -->
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-4">
                <div class="benefits-card">
                  <div class="benefits-card-img mx-auto d-block bg-darkblue" >
                    <img src="svg/Vector Header-17.svg" class="benefits-card-img svg-inverted-brightness">
                  </div>
                  <h2 class="pt-4 color-darkpurple benefits-card-title">Campuses Easy to Access</h3>
                  <p class="fs-5 text-start ms-3">The campus is located in the heart of the Melbourne Central Business District (CBD). Public transport (trains, trams and buses) is accessible to and from the campus 7 days a week. Unity Skills College of Health facilities boast modern classrooms and computer labs, as well as other training facilities that are ideal for you to gain the most out of your study.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="benefits-card">
                  <div class="benefits-card-img mx-auto d-block bg-white" >
                    <img src="svg/Vector Header-20.svg" class="benefits-card-img svg-color-lightblue">
                  </div>
                  <h2 class="pt-4 color-darkpurple benefits-card-title">The Academic Staff</h3>
                  <p class="fs-5 text-start ms-3">Unity Skills College of Health trainers and assessors are experienced, enthusiastic and dedicated, they deliver well-prepared and stimulating lessons for the VET training programs. All trainers and assessors hold a Certificate IV in Training and Assessment qualification, together with their academic qualifications and vast experience within the relevant industry.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="benefits-card">
                  <div class="benefits-card-img mx-auto d-block bg-darkblue" style1="background-color: #3f58a6;">
                    <img src="svg/Vector Header-14.svg" class="benefits-card-img svg-inverted-brightness"></svg>
                  </div>
                  <h2 class="pt-2 color-darkpurple benefits-card-title">Modern Technology and Resources</h3>
                  <p class="fs-5 text-start ms-3">Our computer labs are equipped with modern technology and are accessible to you during your studies. You will have free access to Wi-Fi for personal use (in accordance with policy) during your enrolment with us on campus.</p>
                </div>
              </div>
            </div>

          </div>
          <!-- page 3 [3,4,5] -->
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-4">
                <div class="benefits-card">
                  <div class="benefits-card-img mx-auto d-block bg-white" >
                    <img src="svg/Vector Header-20.svg" class="benefits-card-img svg-color-lightblue">
                  </div>
                  <h2 class="pt-4 color-darkpurple benefits-card-title">The Academic Staff</h3>
                  <p class="fs-5 text-start ms-3">Unity Skills College of Health trainers and assessors are experienced, enthusiastic and dedicated, they deliver well-prepared and stimulating lessons for the VET training programs. All trainers and assessors hold a Certificate IV in Training and Assessment qualification, together with their academic qualifications and vast experience within the relevant industry.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="benefits-card">
                  <div class="benefits-card-img mx-auto d-block bg-darkblue" style1="background-color: #3f58a6;">
                    <img src="svg/Vector Header-14.svg" class="benefits-card-img svg-inverted-brightness"></svg>
                  </div>
                  <h2 class="pt-2 color-darkpurple benefits-card-title">Modern Technology and Resources</h3>
                  <p class="fs-5 text-start ms-3">Our computer labs are equipped with modern technology and are accessible to you during your studies. You will have free access to Wi-Fi for personal use (in accordance with policy) during your enrolment with us on campus.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="benefits-card">
                  <div class="benefits-card-img mx-auto d-block bg-white" >
                    <img src="svg/Vector Header-16.svg" class="benefits-card-img svg-color-lightblue">
                  </div>
                  <h2 class="pt-4 color-darkpurple benefits-card-title">Flexible Learning</h3>
                  <p class="fs-5 text-start ms-3">We provide flexible study options and, where possible, schedule daytime, evening and weekend classes to meet the all of your needs. All scheduled classes are face-to-face classroom based on the campus.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- page 4 [4,5,6] -->
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-4">
                <div class="benefits-card">
                  <div class="benefits-card-img mx-auto d-block bg-darkblue" style1="background-color: #3f58a6;">
                    <img src="svg/Vector Header-14.svg" class="benefits-card-img svg-inverted-brightness"></svg>
                  </div>
                  <h2 class="pt-2 color-darkpurple benefits-card-title">Modern Technology and Resources</h3>
                  <p class="fs-5 text-start ms-3">Our computer labs are equipped with modern technology and are accessible to you during your studies. You will have free access to Wi-Fi for personal use (in accordance with policy) during your enrolment with us on campus.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="benefits-card">
                  <div class="benefits-card-img mx-auto d-block bg-white" >
                    <img src="svg/Vector Header-16.svg" class="benefits-card-img svg-color-lightblue">
                  </div>
                  <h2 class="pt-4 color-darkpurple benefits-card-title">Flexible Learning</h3>
                  <p class="fs-5 text-start ms-3">We provide flexible study options and, where possible, schedule daytime, evening and weekend classes to meet the all of your needs. All scheduled classes are face-to-face classroom based on the campus.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="benefits-card">
                  <div class="benefits-card-img mx-auto d-block bg-darkblue" >
                    <img src="svg/Vector Header-19.svg" class="benefits-card-img svg-inverted-brightness">
                  </div>
                  <h2 class="pt-4 color-darkpurple benefits-card-title">Student Support Services</h3>
                  <p class="fs-5 text-start ms-3">Our Student Support Services strive to provide the very best welfare and academic support for you. With our commitment to ensuring a personalised service that meets your needs, our staff interact with you when you need. You can make appointments to receive the support you are seeking.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 自定义指示器（核心部分） -->
        <div class="carousel-indicators custom-carousel-indicators custom-carousel-bg-gray">
          <button type="button" data-bs-target="#benefitCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#benefitCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#benefitCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#benefitCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
      </div>


    </div>
    </div>
  </section>

  <section class="bg-white-color" style="display: none;">
    <div class="bg-grey-right-bottom">

      <div class="container py-5">
        <div class="row">
          <div class="col-md-6 mt-5">
            <h2 class="color-lightpurple pt-5">Why USG</h2>
            <h1 class="color-darkpurple py-2" >What Makes USG Different</h2>
            <p class="fs-5">At USG, we combine practical, industry-focused training with comprehensive student support services 
              designed specifically for international students. U
              nlike traditional institutions, we provide hands-on learning experiences, 
              strong employer connections, and flexible study options that fit your lifestyle 
              while ensuring you gain the skills Australian employers actually need.</p>
            <a href="/allcourses" class="btn btn-lg footer-start-here-btn fs-4 mt-3 bg-darkpurple color-white">Explore</a>
          </div>
          <div class="col-md-6">
            <img src="svg/Vector Health  website-15.svg" alt="Support illustration" class="img-fluid" style="max-height: 500px;">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-grey-color">
    <div class="">

      <div class="container py-5">
        <div class="row">
          <div class="col-md-4 mt-5 px-5">
            <p class="" style="height: 80px;"></p>
            <img src="svg/Vector Header-10.png" alt="Support illustration" class="img-fluid" style="max-height: 600px;">
          </div>
          <div class="col-md-8 ">
            <h2 class="color-lightpurple pt-5">Why Australia</h2>
            <h1 class="color-darkpurple py-2" >Why Study in Australia?</h2>

            	<p class="fs-5">
                Australia is one of the world’s leading destinations for international education, offering students a unique combination of academic excellence, cultural diversity, and lifestyle opportunities. With globally recognized qualifications and a strong reputation for high-quality education, studying in Australia opens doors to worldwide career prospects.<br />
                <strong>Key Reasons to Study in Australia:</strong><br />
                ·       World-Class Education: Australian institutions consistently rank among the top globally, with qualifications respected internationally.<br />
                ·       Wide Range of Courses: From vocational training to university degrees, students can choose pathways that align with their career goals.<br />
                ·       Multicultural Environment: Australia is home to people from over 200 cultural backgrounds, creating a welcoming and inclusive learning environment.<br />
                ·       Strong Student Support: International students benefit from comprehensive support services, ensuring a smooth academic and personal transition.<br />
                ·       Work Opportunities: Students can gain valuable experience through part-time work while studying and post-study work options after graduation.<br />
                ·       Quality of Life: With its safe cities, beautiful landscapes, and vibrant lifestyle, Australia offers an excellent balance between study and leisure.<br />
                Studying in Australia is not just about gaining a qualification—it’s about building a global future with knowledge, skills, and unforgettable experiences.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="">
    <div class="">
      
      <div class="container py-5">
        <div class="row">
          <div class="col-md-12 px-5">
            <h1 class="color-darkpurple py-2" >Why Study in Melbourne?</h2>
            <p class="fs-5">
              Melbourne is one of the world’s most popular study destinations, renowned for its high-quality education, vibrant culture, and welcoming environment for international students. The city is home to top-ranked universities, TAFEs, and private colleges that offer globally recognised qualifications across diverse fields of study.<br />
              As Australia’s cultural capital, Melbourne offers a dynamic lifestyle filled with art, music, festivals, and a thriving food scene influenced by its multicultural community. The city is also known for its excellent public transport, safety, and student-friendly services.<br />
              Consistently ranked as one of the world’s most liveable cities, Melbourne provides students with opportunities to balance academic excellence with personal growth, networking, and career development. With strong industry connections, internships, and part-time work opportunities, studying in Melbourne is not just about education but also about building a successful future.</p>
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
                      <img src="/images/melbourne1.jpg" class="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="img-cover-container">
                      <img src="/images/melbourne2.png" class="">
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

  <section class="py-5 " style="display:;">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="svg/Vector Health  website-16.svg" class="campus-icon mb-2" alt="Campus Icon">
          <p></p>
          <h2 class="color-darkblue">Why USG Campuses Easy to Access</h2>
          <p>Our campuses are strategically located with convenience in mind. 
            Whether you're commuting by public transport, driving, or cycling, 
            we've made access simple. With multiple transport options nearby, 
            ample parking, and bike-friendly facilities, getting to class is stress-free. 
            Central locations mean you're never far from essential services, study spots, 
            or home—giving you more time to focus on what truly matters: 
            your education and future success.</p>
        </div>
        <div class="col-md-6">
          <div id="campusCarousel" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active"><img src="/images/campus-ex1.png" alt="Campus 1" class="d-block w-100"></div>
              <div class="carousel-item"><img src="/images/campus-ex2.png" alt="Campus 2" class="d-block w-100"></div>
              <div class="carousel-item"><img src="/images/campus-ex3.png" alt="Campus 3" class="d-block w-100"></div>
            </div>
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#campusCarousel" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#campusCarousel" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#campusCarousel" data-bs-slide-to="2"></button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="">
    <div class="">

      <div class="container py-5 px-5" style="height: 800px;">
        <p></p>
        <div class="row purple-section">
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <p></p>
            <div class="bg-white content rounded-5 mt-5 px-5">
              <h2 class="color-darkblue pt-5">Student Support Services</h2>
              
              <p class="fs-5">At Unity Skills, we believe your education extends beyond the classroom. 
                Our comprehensive Student Support Services are designed to empower you at every step of 
                your learning journey. 
                From personalized academic guidance and career counseling to mental wellness resources 
                and learning assistance, our dedicated support team ensures you have the tools and 
                confidence to thrive. We're not just teaching skills—we're building resilient, 
                successful professionals by providing the holistic support you need to overcome 
                challenges and achieve your goals. Your success story starts with our unwavering support.</p>
              <a href="/allcourses" class="btn btn-lg footer-start-here-btn fs-4 mt-3 bg-darkpurple color-white">Learn More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class=" content">
              <img src="svg/Vector Health  website-17.svg" alt="" class="img-fluid" style="max-height: 600px;">
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

