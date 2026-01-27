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
      <h1 class="">ESOS Framework & TPS Information</h1>
      <!-- <img src="https://placehold.co/600x400" alt="Illustration" class="img-fluid"> -->
    </div>
  </section>


  <section class="">
    <div class="">

    <div class="container">
      <div class="row fs-5">
        <div class="col-md-6" style="padding-top: 70px;">
          <h2 class="color-darkpurple fs-1">The Education Services for Overseas Students Act 2018 (ESOS Act) and associated legislation form the ESOS Framework</h2>
          <!-- <p class="color-darkblue" style="font-size: 32px;">Discover the unique advantages that make USG the preferred choice for students seeking quality education and career success</p> -->
          <p class="mt-3">This is the legal framework for the provision of education services to overseas students, and sets out the registration requirements and the ongoing standards for education providers that offer courses to overseas students.</p>
          <p class="">The framework provides a consistent national approach to the registration of education providers so that the quality of the training, and the care of students, remains high.</p>
          <p>For more information, please visit 
            <a href="https://internationaleducation.gov.au/Regulatory-Information/Pages/National-Code-2018-Factsheets-.aspx" target="_blank">https://internationaleducation.gov.au/Regulatory-Information/Pages/National-Code-2018-Factsheets-.aspx</a>
          </p>
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
          <h2 class="color-darkpurple fs-1">The Tuition Protection Service</h2>
          <!-- <p class="color-darkblue" style="font-size: 32px;">Discover the unique advantages that make USG the preferred choice for students seeking quality education and career success</p> -->
          <p class="mt-3">(TPS) is an initiative of the Australian Government to assist international students whose education providers are unable to fully deliver their course of study. The TPS ensures that international students are able to either:</p>
          <ul>
            <li>Complete their studies in another course or with another education provider or</li>
            <li>Receive a refund of their unspent tuition fees.</li>
          </ul>
          <p>For more information, please visit <a href="https://tps.gov.au/" target="_blank">https://tps.gov.au/</a></p>
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

