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


</style>

<body>

  <!-- top navbar -->
  @include('layouts.topbar')

  <!-- main content -->

  <section class="hero text-center section-bg-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-5 color-white">

          <h1 class="color-white" style="margin-top: 100px;">
            Enrolment and Orientation <br>
          </h1>
        </div>
        <div class="col-md-7">
          <img src="/images/Enrolment.png" alt="" class="img-fluid rounded-5">
        </div>
      </div>
    </div>
  </section>

  <section class="">
    <div class="">

    <div class="container">
      <div class="row fs-5">
        <div class="col-md-6" style="padding-top: 70px;">
          <h2 class="color-darkpurple fs-1">Enrolment Requirements</h2>
          <!-- <p class="color-darkblue" style="font-size: 32px;">Discover the unique advantages that make USG the preferred choice for students seeking quality education and career success</p> -->
          <p class="mt-3">All students must complete enrolment with Unity Skills College of Health prior to course commencement. To finalise your enrolment, you are required to present your passport and Confirmation of Enrolment (CoE). </p>
          <p>If you intend to apply for Credit Transfer, please bring original academic documents for verification and copying. </p>
          <p>Students who do not complete enrolment within 14 days of the CoE commencement date may have their CoE cancelled in accordance with regulatory requirements. </p>
          <p>As part of your student visa conditions, you must provide your current residential address and emergency contact details, and notify Unity Skills College of Health of any changes within 7 days. Failure to comply may result in a breach of your visa conditions. </p>
        </div>
        <div class="col-md-6">
          <img src="/svg/Vector Header-09.svg" alt="" class="img-fluid" style="max-height: 500px;">

        </div>
      </div>
      </div>

    </div>
  </section>

  <section class="">
    <div class="">

    <div class="container">
      <div class="row pb-5 fs-5">
        <div class="col-md-6">
          <img src="/svg/Vector Header-12.svg" alt="" class="img-fluid" style="position: relative;max-height: 500px; top: -40px;">

        </div>
        <div class="col-md-6" style="padding-top: 70px;">
          <!-- <p class="pt-5"></p> -->
          <h2 class="color-darkpurple fs-1">Class Times and Orientation</h2>
          <!-- <p class="color-darkblue" style="font-size: 32px;">Discover the unique advantages that make USG the preferred choice for students seeking quality education and career success</p> -->
          <p class="mt-3">Classes at Unity Skills College of Health are typically scheduled across 2 or 2.5 days per week at a full contact of 20 hours on campus, depending on your course timetable. Your specific class schedule will be confirmed at the time of enrolment. </p>
          <p>Orientation is conducted on the first day of your course. During this session, you will be introduced to key staff, receive important information about studying at Unity Skills College of Health, gain useful insights about living in Melbourne, and have the opportunity to ask questions. </p>
          <p></p>
        </div>
      </div>
      </div>

    </div>
  </section>




 <!-- footer -->
 @include('layouts.footer')

 </body>
</html>

