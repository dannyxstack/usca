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

.table th {
  background-color: #f1e1ed;
}
.table {
  border-color: #f1e1ed;
}

.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
    background-color: #f7f2f6 !important;
    --bs-table-bg-state: #f7f2f6;
}

</style>

<body>

  <!-- top navbar -->
  @include('layouts.topbar')

  <!-- main content -->

  <section class="hero text-center section-bg-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-4 color-white">

          <h1 class="color-white" style="margin-top: 100px;">
            Agent List <br>
          </h1>
        </div>
        <div class="col-md-8">
          <img src="/images/banner11.png" alt="" class="img-fluid rounded-5">
        </div>
      </div>
    </div>
  </section>




  <section class="py-5 bg-white">
    <div class="container">
      <div class="row pt-5 pb-3">
        <div class="col-md-6">
          <h1 class="color-darkpurple">Agent List</h1>
        </div>
        <div class="col-md-6 text-end">
          <a href="https://form.jotform.com/252581213016043" class="btn color-white bg-darkpurple rounded-5 fs-4">Become an Agent</a>
        </div>
      </div>
      <div class="row">
        <!-- <p class="fs-4">We look forward to the possibility of collaborating with you and becoming a trusted partner agent of our college.</p> -->
        <p class="fs-5">We are proud to collaborate with a network of dedicated education agents who share our commitment to providing exceptional educational opportunities for international students. 
          Our agents play a crucial role in guiding prospective students through the application process, 
          offering valuable insights into our programs, and ensuring a smooth transition to studying at our institution.</p>
      </div>

    </div>
  </section>

  <section class="bg-grey-color">
    <div class="bg-white-left-bottom" >

      <div class="container">
        <div class="row text-center">
          <div class="col-md-12 fs-5">
            <table class="table table-bordered table-hover mb-5 shadow">
              <thead class="bg-darkblue color-white" style="background-color: #1a3a6c; color: white;">
                <tr class="bg-darkblue color-white">
                  <th>Agent Name</th>
                  <th>Director</th>
                  <th>Email</th>
                  <th>Address</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Aussie-ASEAN Edu</td>
                  <td>Mohammad Saghir Khan</td>
                  <td>s.khan@ozaseaneducation.com</td>
                  <td>Level 8, Suite 813, 365 Lt. Collins Street, Melbourne VIC 3000 Australia</td>
                </tr>
                
                <tr>
                  <td>Au-Assess Education Service</td>
                  <td>Sharon Wang</td>
                  <td>sharon.wang@gmail.com</td>
                  <td>Shop 1, 294 High Street, Preston, VIC 3072</td>
                </tr>
                
                <tr>
                  <td>Auease Group Pty Ltd</td>
                  <td>Yuchen Huang</td>
                  <td>marketing@auease.com.au</td>
                  <td>Suite 508, 2 Queen Street, Melbourne, VIC 3000</td>
                </tr>
                
                <tr>
                  <td>Aussome Education Migration Services</td>
                  <td>Jessica Wang</td>
                  <td>info@aussomelink.com</td>
                  <td>48 Piccadilly Cres, Keysborough VIC 3173</td>
                </tr>
                
                <tr>
                  <td>AU-CHN Visa Service Pty Ltd</td>
                  <td>Emma Wang</td>
                  <td>admin@auchn.com.au</td>
                  <td>Suite 416, 480 Collins, Melbourne, VIC 3000</td>
                </tr>
                
                <tr>
                  <td>Australia Visa Link Pty Ltd</td>
                  <td>Cathleen Zhan</td>
                  <td>info@ozvisalink.com</td>
                  <td>Suite 2, Level 5, 190 Queen Street, Melbourne VIC 3000</td>
                </tr>
                
                <tr>
                  <td>AEES Global Pty Limited</td>
                  <td>Kasif Akbar</td>
                  <td>kasif@aeesglobal.com.au</td>
                  <td>365 Little Collins Street, Suite 406, Melbourne 3000</td>
                </tr>
                
                <tr>
                  <td>Auspac International Pty Ltd</td>
                  <td>Sandra Shen</td>
                  <td>sa@auspacinternational.com</td>
                  <td>121 King William St, Adelaide SA 5000</td>
                </tr>
                
                <tr>
                  <td>AMS Brisbane Pty Ltd</td>
                  <td>Qin Li</td>
                  <td>anna@amsbrisbane.com</td>
                  <td>37/223 Calam Rd, Sunnybank Hills QLD 4109</td>
                </tr>
                
                <tr>
                  <td>Basya Pty Ltd</td>
                  <td>Queenie Liu</td>
                  <td>basyamelb@gmail.com</td>
                  <td>Suite 412, Level 4, 343 Little Collins Street, Melbourne VIC 3000</td>
                </tr>
                
                <tr>
                  <td>Compass Education And Migration Pty Ltd</td>
                  <td>Lisa Ding</td>
                  <td>lisa@zhinanzhen.org</td>
                  <td>Level 5, 303 Collins Street, Melbourne, VIC 3000</td>
                </tr>
                
                <tr>
                  <td>Down Under Education</td>
                  <td>Yosaeng Sawangsaen</td>
                  <td>krumam.due@gmail.com</td>
                  <td>72/14 Office 4, Moo6 Rangsit-pathum Rd, Bang-Phun, Pathum Thani Thailand</td>
                </tr>
                
                <tr>
                  <td>Evicon Australia And Solutions West Pty Ltd</td>
                  <td>Kashif Khan</td>
                  <td>info@evicon.com.au</td>
                  <td>103 Howard St, North Melbourne VIC 3051</td>
                </tr>
                
                <tr>
                  <td>Future Care Consultants</td>
                  <td>Sarim Hussain</td>
                  <td>info@fcconsultants.com.au</td>
                  <td>Level 39, 385 Bourke Street, Melbourne VIC 3000</td>
                </tr>
                
                <tr>
                  <td>Golden Key Education and Migration Group</td>
                  <td>Anggie Zhao</td>
                  <td>info@goldenkeygrp.com</td>
                  <td>5/45 Railway Rd, Blackburn VIC 3130</td>
                </tr>
                
                <tr>
                  <td>International Student Access Pty Ltd</td>
                  <td>Giuseppe Migliorino</td>
                  <td>pino@culper.optusnet.com.au</td>
                  <td>267/278 Abercrombie St, Darlington NSW 2008</td>
                </tr>
                
                <tr>
                  <td>International Migration Consultants</td>
                  <td>Hasan Ahmad Malik</td>
                  <td>hasan@imcedu.co.uk</td>
                  <td>House No. 21, Block E2, Main Boulevard, Wapda Town, Lahore, Punjab, Pakistan</td>
                </tr>
                
                <tr>
                  <td>iWise Education Pty Ltd</td>
                  <td>Rooh Ullah</td>
                  <td>educationiwise@gmail.com</td>
                  <td>126 Manningham Rd, Bulleen VIC 3105</td>
                </tr>
                
                <tr>
                  <td>Level Up Studies</td>
                  <td>Lainey Xu</td>
                  <td>admissions@levelupstudies.com</td>
                  <td>Level 1, 105 Queen Street, Melbourne VIC 3000</td>
                </tr>
                
                <tr>
                  <td>Monkey King Student Service Center</td>
                  <td>Allen Xu</td>
                  <td>admin@monkeyking.com.au</td>
                  <td>Level 11, 230 Collins Street, Melbourne VIC 3000</td>
                </tr>
                
                <tr>
                  <td>MEK Consultancy Group Pty Ltd</td>
                  <td>Mike Gu</td>
                  <td>education@mekgroup.com.au</td>
                  <td>Suite 3, Level 8, 179 Queen Street, Melbourne VIC 3000</td>
                </tr>
                
                <tr>
                  <td>Neway Consulting Studio Pty Ltd</td>
                  <td>Cindy Liu</td>
                  <td>cindy.liu@neway.com.au</td>
                  <td>432 Burwood Road, Hawthorn VIC 3122</td>
                </tr>
                
                <tr>
                  <td>Overseas Education & Career Consultants (OECC)</td>
                  <td>Gaurav</td>
                  <td>gaurav@oeccglobaleducation.com</td>
                  <td>203/227 Collins St, Melbourne VIC 3000</td>
                </tr>
                
                <tr>
                  <td>Owlet Groups Pty Ltd</td>
                  <td>Akshay Naram</td>
                  <td>akshay.naram@gmail.com</td>
                  <td>1/861 Sydney Rd, Brunswick VIC 3056</td>
                </tr>
                
                <tr>
                  <td>Panda International Education</td>
                  <td>May Jin</td>
                  <td>pandaquaji@gmail.com</td>
                  <td>1/27 Oxford St, Epping NSW 2121</td>
                </tr>
                
                <tr>
                  <td>PIML Education and Immigration Consultants</td>
                  <td>Syed Naveed Ul Hassa Shah</td>
                  <td>melbourne@pimlpk.com</td>
                  <td>2 Browne Ave, St Albans VIC 3021</td>
                </tr>
                
                <tr>
                  <td>Rose Consultants</td>
                  <td>Akbar Muhammad</td>
                  <td>akbar@roseconsultant.com</td>
                  <td>Office No.14, Al-Latif Centre Main Boulevard Gulberg III, Lahore, Gulberg Punjab Pakistan</td>
                </tr>
                
                <tr>
                  <td>Swetaben Swetang Shah</td>
                  <td>Sweta SHAH</td>
                  <td>shahsweta541986@gmail.com</td>
                  <td>21 Mimosa Ave, Kilsyth VIC 3137</td>
                </tr>
                
                <tr>
                  <td>The Newstone Group Pty Ltd</td>
                  <td>Melody Li</td>
                  <td>admission@thenewstone.com</td>
                  <td>Level 2/350 Collins St, Melbourne VIC 3000</td>
                </tr>
                
                <tr>
                  <td>Think Higher Pty Ltd</td>
                  <td>Aneel Khowaja</td>
                  <td>info@thinkhigher.com.au</td>
                  <td>809g/530 Little Collins St, Exchange Tower, Melbourne VIC 3000</td>
                </tr>
                
                <tr>
                  <td>VSTAR Immigration and Education Services</td>
                  <td>Jason Zhaojiang Lu</td>
                  <td>partners@vstarimmi.com.au</td>
                  <td>Level 8/460 Bourke St, Melbourne VIC 3000</td>
                </tr>
                
                <tr>
                  <td>ZTA International Pty Ltd</td>
                  <td>Tauqeer Haider Chaudhary</td>
                  <td>info@ztaedu.com.au</td>
                  <td>Suite 1302, Level 13/55 Swanston St, Majorca Building, Melbourne VIC 3004</td>
                </tr>
                
                <tr>
                  <td>Matsumoto International Education</td>
                  <td>David Zhu</td>
                  <td>cyrilzhu2022@163.com</td>
                  <td>7-11 Shipley St, Box Hill VIC 3128</td>
                </tr>
                
                <tr>
                  <td>Rk Education and Visa Services</td>
                  <td>Ranjit Kayastha</td>
                  <td>info@rkeducation.com.au</td>
                  <td>Suite 3.07, Level 3, 365 Collins St, Melbourne, VIC 3000</td>
                </tr>
              </tbody>
            </table>
      
          </div>
        </div>
        <div class="row pb-5"> </div>
      </div>


    </div>
  </section>


 <!-- footer -->
 @include('layouts.footer')

 </body>
</html>

