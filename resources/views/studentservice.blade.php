<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<style>
.section-bg-findagent {
  background-image: url('/images/bg-header-agent.png');
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
  <section class="hero text-center section-bg-findagent">
    <div class="container py-5">
      <h1 class="">Student Services</h1>
      <!-- <img src="https://placehold.co/600x400" alt="Illustration" class="img-fluid"> -->
    </div>
  </section>

  <section class="bg-white">
    <div class="py-5 bg-lightpurple-round-left-bottom color-white">

      <div class="container">
        <div class="row text-center" style="padding-top: 80px;">
          <div class="col-md-1"></div>
          <div class="col-md-10 text-start fs-4">
            <h1 class="fs-1">Student Services</h1>
            <p class="pt-3"></p>
            <p>Unity Skills College of Health provides a range of services to support students during their time studying with us. We understand the difficulties students may face in settling into a foreign environment and we have a Student Services Department (SSD) available to offer personal and friendly assistance to students. provides a range of services to support students during their time studying with us. We understand the difficulties students may face in settling into a foreign environment and we have a Student Services Department (SSD) available to offer personal and friendly assistance to students.</p>
            <p>All our staff have the responsibility to support their students and understand the process of referring students to the designated staff for different aspects of the services.</p>
            <p>Student Services Officers are the first point of contact for students via email (info@unityskills.com.au).</p>
            <p>The Student Services Officers will be responsible for:</p>
            <div>
            <ul>
              <li>Providing students with up-to-date details of Unity Skills College of Health support services.</li>
              <li>Handling student enquiries about course timetables, classroom arrangements, facilities and hospitality of Unity Skills College of Health.</li>
              <li>Organising student orientation.</li>
              <li>Receiving student complaints and referring complaints to the RTO Manager.</li>
              <li>Providing students with information about&nbsp;Penfold&nbsp;attendance and course progress requirements.</li>
              <li>Assisting students regarding WHS matters (advising the availability of sick bay and first aid kit).</li>
              <li>Providing information to students related to requests for leave, changes to courses and cancellations, and forwarding the request to the Admissions Manager for processing where relevant.</li>
            </ul>
            </div>
            <p></p>
          </div>
          <div class="col-md-1"></div>
        </div>

      </div>
    </div>
  </section>

  <section class="">
    <div class="">

    <div class="container">
      <div class="row fs-5">
        <div class="col-md-6">
          <img src="/svg/Vector Header-09.svg" alt="" class="img-fluid" style="max-height: 500px;">

        </div>
        <div class="col-md-6" style="padding-top: 70px;">
          <h2 class="color-darkpurple fs-1">Academic Support</h2>
          <!-- <p class="color-darkblue" style="font-size: 32px;">Discover the unique advantages that make USG the preferred choice for students seeking quality education and career success</p> -->
          <p class="fs-5 mt-3">All College academic staff are responsible for providing academic support to all students. Students can access one-on-one learning support with the Unity Skills College of Health Learning Advisor. Students can make appointments with the Learning Advisor via email (info@unityskills.com.au) or through the Student Services Officers.</p>
          <p class="fs-5">The Learning Advisor is responsible for:</p>
          <ul>
            <li>Accessing the LLN test reports and identifying specific learning support needs.</li>
            <li>Planning and delivering academic workshops on academic integrity, academic skills and learning styles.</li>
            <li>Referring students to welfare support and/or English support as appropriate.</li>
            <li>Helping students better understand their assessment requirements as appropriate.</li>
          </ul>
        </div>
      </div>
      </div>

    </div>
  </section>

  <section class="">
    <div class="">

    <div class="container">
      <div class="row pb-5 fs-5">
        <div class="col-md-6" style="padding-top: 70px;">
          <!-- <p class="pt-5"></p> -->
          <h2 class="color-darkpurple fs-1">Student Welfare Counsellor</h2>
          <!-- <p class="color-darkblue" style="font-size: 32px;">Discover the unique advantages that make USG the preferred choice for students seeking quality education and career success</p> -->
          <p class="fs-5 mt-3">The Student Welfare Counsellor is available for all Unity Skills College of Health students and provides counselling based on appointment.</p>
          <p class="fs-5">Students can contact the Student Welfare Counsellor via email (info@unityskills.com.au) for consultation on:</p>
          <ul>
            <li>Stress due to study</li>
            <li>Learning difficulties</li>
            <li>Physical and mental problems that affect their study and life and</li>
            <li>Advice on student workplace issues</li>
          </ul>
          <p class="mt-5"></p>
          <p></p>
        </div>
        <div class="col-md-6">
          <img src="/svg/Vector Header-12.svg" alt="" class="img-fluid" style="position: relative;max-height: 500px; top: -40px;">

        </div>
      </div>
      </div>

    </div>
  </section>




 <!-- footer -->
 @include('layouts.footer')

 </body>
</html>

