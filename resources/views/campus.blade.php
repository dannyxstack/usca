<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<style>

.carousel {
  /* position设置无法让carousel的控制器移动后不生效 */
  /* position: unset; */
}

.section-bg-rect1 {
  background-image: url('/images/rect1.png');
  background-size: 130%; /* 覆盖整个区域 */
  background-position-x: -185px;
  background-position-y: 0px;
  background-repeat: no-repeat;
  /* width: 100%; */
  /* height: 90%; */
}

.section-bg-rect2 {
  background-image: url('/images/rect2.png');
  background-size: 120%; /* 覆盖整个区域 */
  background-repeat: no-repeat;
  background-clip: content-box;
  overflow: hidden;
  background-position-x: 200px;
  background-position-y: -20px;
  /* width: 100%; */
  height: 100%;
}

/* 图片墙容器 */
.photo-wall {
  position: relative;
  width: 100%;
  height: 700px;           /* 根据你的需求调整高度，建议比图片高一些 */
  max-width: 900px;        /* 防止在小屏幕上溢出，可根据设计调整 */
  margin: 40px auto;       /* 居中 + 上下间距 */
  border-radius: 16px;
  overflow: hidden;        /* 防止图片超出容器时难看 */
  /* box-shadow: 0 10px 30px rgba(0,0,0,0.08); */
  padding: 10px;
  padding-top: 50px;
}

.photo-wall img {
  width: 270px;
  height: 400px;
  object-fit: cover;       /* 保持图片比例，裁剪多余部分 */
  border-radius: 16px;     /* 所有图片圆角 */
  box-shadow: 0 4px 12px rgba(0,0,0,0.25);
  transition: all 0.4s ease;
}

.photo-wall img:hover {
  transform: scale(1.05);
  box-shadow: 0 6px 15px rgba(0,0,0,0.25);
  z-index: 10;             /* hover 时置顶 */
}

/* 三张图片的绝对定位 */
.photo-1 {
  position: absolute;
  left: 10px;
  top: 80px;
  z-index: 1;
}

.photo-2 {
  position: absolute;
  left: 200px;
  top: 150px;
  z-index: 3;              /* 最高层级，覆盖其他两张 */
}

.photo-3 {
  position: absolute;
  left: 400px;
  top: 60px;
  z-index: 2;
}


</style>

<body>

  <!-- top navbar -->
  @include('layouts.topbar')

  <!-- main content -->
  <section class="hero text-center section-bg-campus">
    <div class="container py-5">
      <h1 class="">Our Campus</h1>
      <!-- <img src="https://placehold.co/600x400" alt="Illustration" class="img-fluid"> -->
    </div>
  </section>

  <section class="py-5 bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6 section-bg-rect1 pt-3">
          <!-- <img src="svg/Vector Header-05.svg" alt="Hand illustration" class="img-fluid" style="max-height: 600px;"> -->
          <!-- 示例：校园图片轮播 -->
          <div id="melPhotosCarousel" class="carousel slide">
            <!-- 轮播图片 -->
            <div class="carousel-inner">
              <div class="carousel-item college-carousel-item active">
                <img src="/images/campus-ex1.png" class="d-block w-100 campus-img">
              </div>
              <div class="carousel-item college-carousel-item">
                <img src="/images/campus-ex2.png" class="d-block w-100 campus-img" alt="Campus 2">
              </div>
              <div class="carousel-item college-carousel-item">
                <img src="/images/campus-ex3.png" class="d-block w-100 campus-img">
              </div>
            </div>
    
          </div>
        </div>
        <div class="col-md-6" style="padding-top: 70px;">
          <h2 class="color-lightpurple">Our Campus</h2>
          <!-- <p class="color-darkblue" style="font-size: 32px;">Discover the unique advantages that make USG the preferred choice for students seeking quality education and career success</p> -->
          <p class="color-darkpurple" style="font-size: 32px;">Melbourne</p>
          <p style="font-size: 20px;">Melbourne offers a world-class education, consistently ranked highly globally for liveability and student experience, boasting top universities like UniMelb & Monash, diverse learning opportunities from K-12 to tertiary, and innovative, future-focused schooling with flexible spaces and advanced tech, making it a premier destination for academic growth and skill development in a vibrant, multicultural city. </p>
          <!-- <p style="font-size: 20px;">The campus is located in the heart of the Melbourne Central Business District (CBD). Public transport (trains, trams and buses) is accessible to and from the campus 7 days a week. Penfold facilities boast modern classrooms and computer labs, as well as other training facilities that are ideal for you to gain the most out of your study.</p> -->
           <p class="mt-5"></p>
            <!-- 自定义指示器（核心部分） -->
            <div class="carousel-indicators custom-carousel-indicators custom-carousel-bg-grey mx-0">
              <button type="button" data-bs-target="#melPhotosCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#melPhotosCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#melPhotosCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

        </div>
      </div>

    </div>
  </section>

  <section class="bg-lightpurple">
    <div class="bg-white-round-left-bottom">

    <div class="container">
      <div class="row">
        <div class="col-md-5" style="padding-top: 70px;">
          <h2 class="color-lightpurple">Unity Skills College of Health</h2>
          <!-- <p class="color-darkblue" style="font-size: 32px;">Discover the unique advantages that make USG the preferred choice for students seeking quality education and career success</p> -->
          <p class="color-darkpurple fs-4">RTO Code: 45045 | Cricos: 03946C</p>
          <p class="fs-5">Prepare for meaningful careers in healthcare through our nationally-recognized programs, where you'll gain the practical skills and compassionate approach needed to support individuals and communities at every stage of life.</p>
          <p class="mt-5"></p>
            <!-- 自定义指示器（核心部分） -->
            <div class="carousel-indicators custom-carousel-indicators custom-carousel-bg-grey mx-0">
              <button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carousel2" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carousel2" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
        </div>
        <div class="col-md-7 px-5 section-bg-rect2 pt-3">
          <!-- <img src="svg/Vector Header-05.svg" alt="Hand illustration" class="img-fluid" style="max-height: 600px;"> -->
          <!-- 示例：校园图片轮播 -->
          <div id="carousel2" class="carousel slide">
            <!-- 轮播图片 -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="photo-wall">
                  <img src="/images/classroom1.jpg" class="photo-1">
                  <img src="/images/cookery1.png" class="photo-2">
                  <img src="/images/earlychildhood1.png" class="photo-3">
                </div>
              </div>
              <div class="carousel-item">
                <div class="photo-wall">
                  <img src="/images/agedcare1.png" class="photo-1">
                  <img src="/images/agedcare2.png" class="photo-2">
                  <img src="/images/agedcare3.png" class="photo-3">
                </div>
              </div>
              <div class="carousel-item">
                <div class="photo-wall">
                  <img src="/images/auto1.png" class="photo-1">
                  <img src="/images/auto2.png" class="photo-2">
                  <img src="/images/auto3.png" class="photo-3">
                </div>
              </div>
              <div class="carousel-item">
                <div class="photo-wall">
                  <img src="/images/business1.png" class="photo-1">
                  <img src="/images/marketing1.png" class="photo-3">
                </div>
              </div>
            </div>
    
          </div>
        </div>
      </div>
      </div>

    </div>
  </section>

  <section class=" bg-lightblue-campus" style="display:none;">
    <div class=" bg-lightblue-left-bottom">
    <div class="container">
      <div class="row pb-5">
        <div class="col-md-6" style="padding-top: 100px;">
          <h2 class="color-lightblue">Unity Skills College of Hospitality</h2>
          <!-- <p class="color-darkblue" style="font-size: 32px;">Discover the unique advantages that make USG the preferred choice for students seeking quality education and career success</p> -->
          <p class="color-darkblue fs-4">RTO Code: 41480 | Cricos: 03642G</p>
          <p class="fs-5">Master the art of world-class service and culinary excellence in our hospitality programs, designed to equip you with both technical expertise and business acumen for global career opportunities in Australia's vibrant tourism and hospitality industry.

          </p>
        </div>
        <div class="col-md-6">
          <!-- <img src="svg/Vector Header-05.svg" alt="Hand illustration" class="img-fluid" style="max-height: 600px;"> -->
          <!-- 示例：校园图片轮播 -->
          <div id="carousel3" class="carousel slide">
            <!-- 轮播图片 -->
            <div class="carousel-inner">
              <div class="carousel-item college-carousel-item active">
                <img src="/images/cookery1.png" class="d-block w-100 campus-img">
              </div>
              <div class="carousel-item">
                <img src="/images/business1.png" class="d-block w-100 campus-img" alt="Campus 2">
              </div>
              <div class="carousel-item college-carousel-item">
                <img src="/images/hospitality1.png" class="d-block w-100 campus-img">
              </div>
            </div>
    
            <!-- 自定义指示器（核心部分） -->
            <div class="carousel-indicators custom-carousel-indicators custom-carousel-bg-grey">
              <button type="button" data-bs-target="#carousel3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carousel3" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carousel3" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
          </div>
          
        </div>
      </div>

    </div>

    </div>
  </section>


  <section class="bg-lightpurple">
    <div class="">

      <div class="container py-5">
        <div class="row">
          <div class="col-md-6 mt-5">
            <h3 class="color-white pt-5">Melbourne Campus</h3>
            <h2 class="color-white fs-1">Public Transport</h2>
            <!-- <h1 class="color-white py-2" >Student Support Services</h2> -->
            <p class="color-white fs-5"><a href="https://maps.app.goo.gl/xfjuaYD7aieqqX4k6" target="_blank" rel="noopener noreferrer">123 Lonsdale Street</a> is conveniently located in Melbourne's most sought after education precinct within close proximity to all forms of public transport. </p>
          </div>
          <div class="col-md-6">
            <div class="campus-location-img-box">
              <a href="https://maps.app.goo.gl/xfjuaYD7aieqqX4k6" target="_blank" rel="noopener noreferrer">
                <img src="/images/location2.png" alt="College Location" class="img-fluid campus-location-img" style="max-height: 500px;">
              </a>
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

