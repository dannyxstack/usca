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
      <h1 class="">Policies, Procedures and Forms</h1>
      <!-- <img src="https://placehold.co/600x400" alt="Illustration" class="img-fluid"> -->
    </div>
  </section>

  <section class="pt-5 bg-white">
    <div class="container">
      <div class="row pt-5 pb-3">
        <div class="col-md-6">
          <h1 class="color-darkpurple">Policies, Procedures and Forms</h1>
        </div>
        <div class="col-md-6 text-end">
          <!-- <a href="" class="btn color-white bg-darkblue rounded-5 fs-4">Become an Agent</a> -->
        </div>
      </div>
      <div class="row">
        <!-- <p class="fs-4">We look forward to the possibility of collaborating with you and becoming a trusted partner agent of our college.</p> -->
        <p class="fs-5">At United Skills College of Health, we uphold the highest standards of educational integrity and regulatory compliance. 
          Our comprehensive policies, procedures, and forms framework ensures full adherence to Australian education laws, 
          CRICOS requirements, and industry best practices, providing transparent governance for all stakeholders.</p>
      </div>
      <hr>

    </div>
  </section>

  <section class="">
    <div class="container" >
      <div class="row fs-4">

        <h3 class="color-darkpurple py-2 fs-2">Policies and Procedures</h3>
        <p><a href="http://penfold.edu.au/wp-content/uploads/2025/09/PP2.8-Fees-and-Refunds-v3.0.pdf">Fees and Refund Policies and Procedures</a><br>
        <a href="http://penfold.edu.au/wp-content/uploads/2025/09/PP1.9-Plagiarism-and-AI-v3.0.pdf">Plagiarism and AI Policies and Procedures</a><br>
        <a href="http://penfold.edu.au/wp-content/uploads/2025/09/PP2.11-Discrimination-and-Harassment-v3.0.pdf">Discrimination and Harassment Policies and Procedures</a><br>
        <a href="http://penfold.edu.au/wp-content/uploads/2025/09/PP2.9-Complaints-Handling-v3.0.pdf">Complaints and Appeal Policies and Procedures</a><br>
        <a href="http://penfold.edu.au/wp-content/uploads/2025/09/PP2.2-Enrolment-v3.0.pdf">Enrolment Policies and Procedures</a></p>
        <p></p>
        <hr>
        <h3 class="color-darkpurple py-2 fs-2">Forms</h3>
        <p><a href="https://form.jotform.com/252428889922068">International and Domestic Student Application form</a><br>
        <a href="https://form.jotform.com/252528632879066">Student Request Form</a><br>
        <a href="https://form.jotform.com/252600641106040">Leave Request Form</a><br>
        <a href="https://form.jotform.com/252600862463051">Deferral, Suspension, and Cancellation form</a><br>
        <a href="https://form.jotform.com/252601063166045">Withdrawal Form </a><br>
        <a href="https://form.jotform.com/252470988101054">Fees Refund Request Form</a></p>
        <p></p>
      </div>
      <div class="row"> 
        <p></p>
      </div>

    </div>
  </section>





 <!-- footer -->
 @include('layouts.footer')

 </body>
</html>

