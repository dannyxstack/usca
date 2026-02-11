<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

  <!-- top navbar -->
  @include('layouts.topbar')

  <!-- alert line -->
  @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>
  @endif
  
  @if($errors->any())
      <div class="alert alert-danger">
          <ul class="mb-0">
              @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  <!-- main content -->

  <section class="hero text-center section-bg-getintouch">
    <div class="container py-5">
      <h1 class="">Contact Us</h1>
      <!-- <img src="https://placehold.co/600x400" alt="Illustration" class="img-fluid"> -->
    </div>
  </section>

  <section class="py-5 bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-5" style="padding-top: 100px;">

          <h2 class="color-lightblue">Contact Us</h2>
          <!-- <p class="color-darkblue" style="font-size: 32px;">Discover the unique advantages that make USG the preferred choice for students seeking quality education and career success</p> -->
          <p class="color-darkblue fs-1">HOW CAN WE HELP?</p>
          <div class="fs-4">

            <p>At United Skills College of Health, we understand that choosing the right educational institution is one of the most significant decisions you'll make. That's why we're committed to providing personalized guidance every step of the way. Ready to start your next project with us? Send us a message and we will get back to you as soon as possible!</p>
            <!-- <p>Our dedicated team of education consultants brings decades of combined experience in international education, immigration pathways, and career development. We've helped thousands of students from diverse backgrounds achieve their academic and professional goals in Australia.</p> -->
            
            <!-- <p>Whether you're seeking detailed course information, clarification about entry requirements, guidance on visa processes, or simply want to understand how USG can transform your career prospects, we're here to listen and assist. Our multicultural support staff speak multiple languages and understand the unique challenges international students face when studying abroad.</p> -->
            
            <!-- <p>We believe in transparent communication and realistic planning. When you contact us, you'll receive honest advice about course suitability, career outcomes, and investment requirements. We take the time to understand your aspirations, academic background, and career objectives before recommending suitable pathways.</p> -->
            
            <!-- <p>Beyond initial inquiries, our support continues throughout your enrollment journey and extends well into your study experience at USG. From accommodation assistance to academic support services, we're committed to ensuring your Australian education experience is both rewarding and successful.</p> -->
          </div>
        </div>
        <div class="col-md-7">
          <div class=" rounded-5 px-3 fs-4 contact-form-box">
            <form class="p-4 bg-lightgrey" action="/contact" method="POST">
              @csrf
               
              <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control contact-input" id="firstname" name="firstname" placeholder="Your First Name">
              </div>
              <div class="mb-3">
                <label for="lastname" class="form-label">Last Name*</label>
                <input type="text" class="form-control contact-input" id="lastname" name="lastname" placeholder="Your Last Name">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email*</label>
                <input type="email" class="form-control contact-input" id="email" name="email" placeholder="Your Email" required>
              </div>
              <div class="mb-3">
                <label for="mobile" class="form-label">Mobile Phone Number</label>
                <input type="text" class="form-control contact-input" id="mobile" name="mobile" placeholder="Your Phone Number">
              </div>
              <div class="mb-3">
                <label for="nationality" class="form-label">Nationality*</label>
                <input type="text" class="form-control contact-input" id="nationality" name="nationality" placeholder="Your Nationality">
              </div>
              <div class="mb-3">
                <label for="enquiry_type" class="form-label">Enquiry Type*</label>
                <select class="form-select contact-input" id="enquiry_type" name="enquiry_type">
                  <option value="" selected>Select Enquiry Type</option>
                  <option value="courseinfo">Course Information</option>
                  <option value="admission">Admission Process</option>
                  <option value="payment">Payment</option>
                  <option value="others">Others</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">How Can We Help?*</label>
                <textarea class="form-control contact-input" id="message" name="message" rows="4" placeholder="Your Message" required></textarea>
              </div>
              <div class=" d-flex justify-content-end">
                <button type="submit" class="btn btn-primary bg-darkblue color-white fs-3 rounded-3" style="width: 140px;">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </section>


  <section class=" bg-darkblue">
    <div class=" bg-white-round-left-bottom">
    <div class="container">
      <div class="row py-5 text-center fs-4">
        <div class="col-md-4">
          <div class="card bg-grey-color text-center rounded-5 shadow-sm contact-card" >
            <div class="card-body">
              <!-- 1395 -->
              <img src="svg/Vector Header-22.svg" class="card-img-top contact-card-img1" alt="..."> 
              <h5 class="card-title color-darkblue fs-4">COURSES</h5>
              <p class="card-text fs-5">We provide detailed information about the course, including admission requirements, teaching methods, and career planning.</p>
              <a href="/allcourses" class="btn bg-white color-darkblue contact-card-btn fs-4">LEARN MORE</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-grey-color text-center rounded-5 shadow-sm contact-card" >
            <div class="card-body">
              <!-- 1395 -->
              <img src="svg/Vector Header-23.svg" class="card-img-top contact-card-img2" alt="..."> 
              <h5 class="card-title color-lightblue fs-4">STUDENT PORTAL</h5>
              <p class="card-text fs-5">After enrollment, Student Portal will provide students with more convenience in managing and planning their studies and courses.</p>
              <!-- <a href="#" class="btn bg-white color-lightblue contact-card-btn fs-4">LOGIN</a> -->
            </div>
          </div>
          
        </div>
        <div class="col-md-4">
          <div class="card bg-grey-color text-center rounded-5 shadow-sm contact-card" >
            <div class="card-body">
              <!-- 1395 -->
              <img src="svg/Vector Header-21.svg" class="card-img-top contact-card-img3" alt="..."> 
              <h5 class="card-title color-yellow fs-4">CAREERS</h5>
              <p class="card-text fs-5">We take the time to understand your aspirations, academic background, and career objectives before recommending suitable pathways.</p>
              <!-- <a href="#" class="btn bg-white color-yellow contact-card-btn fs-4">LEARN MORE</a> -->
            </div>
          </div>
          
        </div>
      </div>
      <div class="row pb-5">
        <p> </p>
      </div>

    </div>

    </div>
  </section>


  <section class="bg-darkblue">
    <div class="">

      <div class="container py-5">
        <div class="row">
          <div class="col-md-6">
            <div class="campus-location-img-box">
              <a href="https://maps.app.goo.gl/xfjuaYD7aieqqX4k6" target="_blank" rel="noopener noreferrer">
                <img src="/images/location2.png" alt="College Location" class="img-fluid campus-location-img" style="max-height: 500px;">
              </a>
            </div>
          </div>
          <div class="col-md-6 mt-3 ps-5">
            <p class="color-lightblue fs-4 mb-0">Location</p>
            <p class="color-white fs-2 mb-0">We're here to help</p>
            <!-- <h1 class="color-white py-2" >Student Support Services</h2> -->
            <p class="color-white fs-5">Welcome to our office. Please sign in at the front desk, and we will be happy to assist you. </p>
            <div class="fs-4 color-white mt-4">
              <p class=""><i class="fas fa-phone me-1 color-lightblue"></i> +61 3 8637 0343</p>
              <p class=""><i class="fas fa-envelope me-1 color-lightblue"></i> info@uscohealth.edu.au</p>
              <p class=""><i class="fas fa-map-marker-alt me-1 color-lightblue"></i> <a href="https://maps.app.goo.gl/xfjuaYD7aieqqX4k6" target="_blank" rel="noopener noreferrer">Level 3, 123 Lonsdale Street, Melbourne</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


 <!-- footer -->
 @include('layouts.footer')

 @push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // 表单提交前的字符数验证
    const messageTextarea = document.getElementById('message');
    const charCount = document.createElement('div');
    charCount.className = 'form-text text-end mt-1';
    charCount.textContent = '当前字符数: 0';
    messageTextarea.parentNode.appendChild(charCount);
    
    messageTextarea.addEventListener('input', function() {
        charCount.textContent = '当前字符数: ' + this.value.length;
        
        if (this.value.length < 10) {
            charCount.style.color = '#dc3545';
        } else if (this.value.length > 2000) {
            charCount.style.color = '#dc3545';
        } else {
            charCount.style.color = '#6c757d';
        }
    });
});
</script>
@endpush
 </body>
</html>

