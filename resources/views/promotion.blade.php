<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<style>
.section-bg-intake {
  background-image: url('/images/bg-header-intake.png');
  background-size: cover; /* 覆盖整个区域 */
  background-position: center; /* 居中显示 */
  width: 100%;
  height: 400px;
}

table { border-collapse: collapse; margin-bottom: 20px; }
th, td { border: 0; padding: 8px; text-align: left; }
th { 
  background-color: #f2f2f2; 
  font-weight: 700;
}
</style>

<body>

  <!-- top navbar -->
  @include('layouts.topbar')

  <!-- main content -->

  <section class="hero text-center section-bg-intake">
    <div class="container py-5">
      <!-- <h1 class="color-darkblue">Intake Dates</h1> -->
      <!-- <img src="https://placehold.co/600x400" alt="Illustration" class="img-fluid"> -->
    </div>
  </section>

  <section class="py-5">
    <div class="container">
      <div class="row">
        <h1 class="text-center color-darkpurple">2026 Promotional Course Prices</h1>

        <h2 class="color-darkpurple">Business Courses</h2>
      <table>
  <tr>
    <th style="width:32%">Course Name</th>
    <th>Course Code</th>
    <th>CRICOS Code</th>
    <th>Duration (Weeks)</th>
    <th>Tuition Fee (Onshore)</th>
    <th>Tuition Fee (Offshore)</th>
    <th>Material Fee</th>
  </tr>
  <tr>
    <td>Diploma of Leadership and Management</td>
    <td>BSB50420</td>
    <td>107477G</td>
    <td>52</td>
    <td>$6,000</td>
    <td>$10,000</td>
    <td>$300</td>
  </tr>
  <tr>
    <td>Advanced Diploma of Leadership and Management</td>
    <td>BSB60420</td>
    <td>107478F</td>
    <td>78</td>
    <td>$9,000</td>
    <td>$15,000</td>
    <td>$500</td>
  </tr>
  <tr>
    <td>Certificate IV in Marketing and Communication</td>
    <td>BSB40820</td>
    <td>107474K</td>
    <td>52</td>
    <td>$6,000</td>
    <td>$10,000</td>
    <td>$300</td>
  </tr>
  <tr>
    <td>Diploma of Marketing and Communication</td>
    <td>BSB50620</td>
    <td>107475J</td>
    <td>52</td>
    <td>$6,000</td>
    <td>$10,000</td>
    <td>$300</td>
  </tr>
  <tr>
    <td>Advance Diploma of Marketing and Communication</td>
    <td>BSB60520</td>
    <td>107476H</td>
    <td>78</td>
    <td>$9,000</td>
    <td>$15,000</td>
    <td>$500</td>
  </tr>
  <tr>
    <td>Graduate Diploma of Management (learning)</td>
    <td>BSB80120</td>
    <td>108241H</td>
    <td>104</td>
    <td>$16,000</td>
    <td>$24,000</td>
    <td>$500</td>
  </tr>
</table>

<h2 class="color-darkpurple">Childcare Courses</h2>
<table>
  <tr>
    <th style="width:32%">Course Name</th>
    <th>Course Code</th>
    <th>CRICOS Code</th>
    <th>Duration (Weeks)</th>
    <th>Tuition Fee (Onshore)</th>
    <th>Tuition Fee (Offshore)</th>
    <th>Material Fee</th>
  </tr>
  <tr>
    <td>Certificate III in Early Childhood Education and Care</td>
    <td>CHC30121</td>
    <td>108244E</td>
    <td>52</td>
    <td>$8,000</td>
    <td>$12,000</td>
    <td>$650</td>
  </tr>
  <tr>
    <td>Diploma of Early Childhood Education and Care</td>
    <td>CHC50125</td>
    <td>118650H</td>
    <td>78</td>
    <td>$12,000</td>
    <td>$18,000</td>
    <td>$650</td>
  </tr>
</table>

<h2 class="color-darkpurple">Community Services Courses</h2>
<table>
  <tr>
    <th style="width:32%">Course Name</th>
    <th>Course Code</th>
    <th>CRICOS Code</th>
    <th>Duration (Weeks)</th>
    <th>Tuition Fee (Onshore)</th>
    <th>Tuition Fee (Offshore)</th>
    <th>Material Fee</th>
  </tr>
  <tr>
    <td>Certificate III in Individual Support</td>
    <td>CHC33021</td>
    <td>112631D</td>
    <td>26</td>
    <td>$5,000</td>
    <td>$7,000</td>
    <td>$650</td>
  </tr>
  <tr>
    <td>Certificate IV in Ageing Support</td>
    <td>CHC43015</td>
    <td>111854H</td>
    <td>26</td>
    <td>$5,000</td>
    <td>$7,000</td>
    <td>$650</td>
  </tr>
  <tr>
    <td>Diploma of Community Services</td>
    <td>CHC52025</td>
    <td>118811G</td>
    <td>104</td>
    <td>$16,000</td>
    <td>$24,000</td>
    <td>$650</td>
  </tr>
</table>

<h2 class="color-darkpurple">Automative Courses</h2>
<table>
  <tr>
    <th style="width:32%">Course Name</th>
    <th>Course Code</th>
    <th>CRICOS Code</th>
    <th>Duration (Weeks)</th>
    <th>Tuition Fee (Onshore)</th>
    <th>Tuition Fee (Offshore)</th>
    <th>Material Fee</th>
  </tr>
  <tr>
    <td>Certificate III in Light Vehicle Mechanical Technology</td>
    <td>AUR30620</td>
    <td>108242G</td>
    <td>78</td>
    <td>$13,000</td>
    <td>$18,000</td>
    <td>$1,200</td>
  </tr>
  <tr>
    <td>Certificate IV in Automotive Mechanical Diagnosis</td>
    <td>AUR40216</td>
    <td>108243F</td>
    <td>26</td>
    <td>$4,000</td>
    <td>$6,000</td>
    <td>$500</td>
  </tr>
</table>

<h2 class="color-darkpurple">English Courses</h2>
<table>
  <tr>
    <th style="width:32%">Course Name</th>
    <th>CRICOS Code</th>
    <th>Duration (Weeks)</th>
    <th>Tuition Fee (Onshore)</th>
    <th>Tuition Fee (Offshore)</th>
    <th>Material Fee</th>
  </tr>
  <tr>
    <td>General English(GE) Elementary to Upper Intermediate</td>
    <td>111178F</td>
    <td>10 Weeks per level</td>
    <td>$180 p/w</td>
    <td>$200 p/w</td>
    <td>$200 per level</td>
  </tr>
  <tr>
    <td>English for Academic Purposes(EAP) Intermediate to Advanced</td>
    <td>111180A</td>
    <td>10 Weeks per level</td>
    <td>$200 p/w</td>
    <td>$220 p/w</td>
    <td>$200 per level</td>
  </tr>
</table>

<h2 class="color-darkpurple">Hospitality Courses</h2>
<table>
  <tr>
    <th style="width:32%">Course Name</th>
    <th>Course Code</th>
    <th>CRICOS Code</th>
    <th>Duration (Weeks)</th>
    <th>Tuition Fee (Onshore)</th>
    <th>Tuition Fee (Offshore)</th>
    <th>Material Fee</th>
  </tr>
  <tr>
    <td>Certificate III in Commercial Cookery</td>
    <td>SIT30821</td>
    <td>109873A</td>
    <td>52</td>
    <td>$10,500</td>
    <td>$17,500</td>
    <td>$1,200</td>
  </tr>
  <tr>
    <td>Certificate IV in Kitchen Management</td>
    <td>SIT40521</td>
    <td>109548C</td>
    <td>26</td>
    <td>$4,000</td>
    <td>$6,000</td>
    <td>$400</td>
  </tr>
  <tr>
    <td>Diploma of Hospitality Management</td>
    <td>SIT50422</td>
    <td>114305B</td>
    <td>26</td>
    <td>$4,000</td>
    <td>$6,000</td>
    <td>$400</td>
  </tr>
</table>


<h2 class="color-darkpurple">Business Courses (College of Hospitality)</h2>
<table>
  <tr>
    <th style="width:32%">Course Name</th>
    <th>Course Code</th>
    <th>CRICOS Code</th>
    <th>Duration (Weeks)</th>
    <th>Tuition Fee (Onshore)</th>
    <th>Tuition Fee (Offshore)</th>
    <th>Material Fee</th>
  </tr>
  <tr>
    <td>Diploma of Leadership and Management</td>
    <td>BSB50420</td>
    <td>104346j</td>
    <td>52</td>
    <td>$6,000</td>
    <td>$10,000</td>
    <td>$300</td>
  </tr>
  <tr>
    <td>Diploma of Business</td>
    <td>BSB50120</td>
    <td>110133E</td>
    <td>52</td>
    <td>$6,000</td>
    <td>$10,000</td>
    <td>$300</td>
  </tr>
  <tr>
    <td>Graduate Diploma of Management (learning)</td>
    <td>BSB80120</td>
    <td>113168C</td>
    <td>104</td>
    <td>$16,000</td>
    <td>$24,000</td>
    <td>$500</td>
  </tr>
</table>

<h2 class="color-darkpurple">Community Services Courses (College of Hospitality)</h2>
<table>
  <tr>
    <th style="width:32%">Course Name</th>
    <th>Course Code</th>
    <th>CRICOS Code</th>
    <th>Duration (Weeks)</th>
    <th>Tuition Fee (Onshore)</th>
    <th>Tuition Fee (Offshore)</th>
    <th>Material Fee</th>
  </tr>
  <tr>
    <td>Diploma of Community Services</td>
    <td>CHC52025</td>
    <td>118768E</td>
    <td>104</td>
    <td>$16,000</td>
    <td>$24,000</td>
    <td>$650</td>
  </tr>
</table>
      </div>
    </div>
  </section>

  <section class="py-5 bg-white">
    <div class="container">
      <div class="row"></div>
      <div class="row">
        <div class="col-md-6 py-3">
          <h2 class="color-darkpurple fw-bold">Enjoy exclusive partnership discounts and begin your learning journey!</h2>
          <p></p>
          <p class="fs-5">All course prices shown on this page are special discounted prices offered jointly by our university and our partner institutions, 
              aiming to help more international students access high-quality Australian education at a more affordable cost. <br>
              These discounted prices are lower than the official government-guided prices 
              published by Australia and are only valid for applications submitted through our official partner channels.<br>
              Please note that course fees may vary depending on individual circumstances, 
              enrollment time, and application process. <br>
              To ensure you receive the most accurate and favorable pricing, 
              we strongly recommend that you contact our official admissions advisors or 
              authorized agents directly for a one-on-one consultation. <br>
              Our professional team will 
              provide you with detailed answers to questions about course details, cost breakdowns, 
              application procedures, and scholarship opportunities, and assist you throughout the entire application process.

          </p>
        </div>
        <div class="col-md-6">
          <img src="/images/marketing1.png" alt="" class="img-fluid" style="max-height: 600px;border-radius: 20px;" >
        </div>
      </div>

    </div>
  </section>




 <!-- footer -->
 @include('layouts.footer')

 </body>
</html>

