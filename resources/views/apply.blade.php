<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<style>
.section-bg-apply {
  background-image: url('/images/bg-header-apply.png');
  background-size: cover; /* 覆盖整个区域 */
  background-position: center; /* 居中显示 */
  width: 100%;
  height: 800px;
}

.section-bg-apply-domestic {
  background-image: url('/images/bg-sec-apply.png');
  background-size: 100%;
  background-position: center;
  background-repeat: no-repeat;
  /* width: 100%; */
  height: 600px;
}

</style>

<body>

  <!-- top navbar -->
  @include('layouts.topbar')

  <!-- main content -->
  <section class="hero text-center section-bg-apply">
    <div class="container py-5">
      <h1 class="">Apply Now</h1>
      <!-- <img src="https://placehold.co/600x400" alt="Illustration" class="img-fluid"> -->
    </div>
  </section>


  <section class="">
    <div class="">

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="/svg/Vector Health  website-22.svg" alt="" class="img-fluid" style="max-height: 600px;">

        </div>
        <div class="col-md-6" style="padding-top: 70px;">
          <h5 class="color-lightpurple fs-4">Representative agents</h5>
          <h2 class="color-darkpurple fs-1">INTERNATIONAL STUDENT</h2>
          <p class="fs-5 mt-3">Please note that international student applications must be submitted through one of our 
            accredited education agents in your region. 
            This ensures you receive proper guidance on visa requirements, course selection, and documentation. 
            To proceed, please contact your agent or use our "Find An Agent" service to connect with a 
            verified partner who can assist with your enrollment.</p>
          <p class="mt-5"></p>
          <a href="https://form.jotform.com/252428889922068" class="btn btn-lg footer-start-here-btn fs-4 mt-3 bg-darkpurple color-white">Apply Now</a>
          <p></p>
        </div>
      </div>
      </div>

    </div>
  </section>

  <section class="pb-5">
    
    <div class="container">
      <div class="section-bg-apply-domestic py-5">
      <div class="row pb-5">
        <div class="col-md-1"></div>
        <div class="col-md-5">

          <div class="rounded-5 bg-white py-5 px-5" style="margin-top: 80px;">

            <h2 class="color-darkpurple fs-1">DOMESTIC STUDENT</h2>
            <p class="fs-5 mt-3">Australian citizens, permanent residents, and eligible visa holders can apply 
              directly through our online application system. Have your personal details, 
              academic records, and any required supporting documents ready for a streamlined submission process. 
              For assistance with your application, our student support team is available to guide you through each step.</p>
            <p class="mt-5"></p>
            <a href="https://form.jotform.com/252428889922068" class="btn btn-lg footer-start-here-btn fs-4 mt-3 bg-darkpurple color-white">Apply Now</a>
            <p></p>
          </div>

        </div>
        <div class="col-md-6" style="padding-top: 70px;">
        </div>
      </div>
      </div>

    </div>
  </section>




 <!-- footer -->
 @include('layouts.footer')

 </body>
</html>

