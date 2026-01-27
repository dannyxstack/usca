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
  <section class="hero text-center section-bg-apply">
    <div class="container py-5">
      <h1 class="">Enrolment and Orientation</h1>
      <!-- <img src="https://placehold.co/600x400" alt="Illustration" class="img-fluid"> -->
    </div>
  </section>


  <section class="">
    <div class="">

    <div class="container">
      <div class="row fs-5">
        <div class="col-md-6" style="padding-top: 70px;">
          <h2 class="color-darkpurple fs-1">Enrolment</h2>
          <!-- <p class="color-darkblue" style="font-size: 32px;">Discover the unique advantages that make USG the preferred choice for students seeking quality education and career success</p> -->
          <p class="mt-3">It is compulsory for you to finalise your enrolment by registering at Penfold before commencing your course. To register you must bring your passport and CoE letter. If you wish to have credit transferred from previous studies, you also need to bring your original documents to be sighted and photocopied for our records.</p>
          <p class="">Also, please note that, if you have not enrolled in your course within 14 days of the commencement date indicated on your CoE, Penfold is required, by law, to cancel your CoE.</p>
          <p>Please note that you are required to complete your address and emergency contact details and to inform Penfold of any changes, as it is a condition of your study visa. Failure to do so is a breach of one of the conditions of your student visa and can result in your visa’s cancellation.</p>
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
          <p class="mt-3">Classes at Penfold are generally run according to individual class timings over a period of two and half day a week. You need to find out your scheduled class days at the time of their enrolment.</p>
          <p>Orientation is conducted on the first day of the course. During Orientation, you will be introduced to Penfold staff, be fully informed of most aspects of life at Penfold, provided with useful information on Melbourne and be given opportunities to ask questions.</p>
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

