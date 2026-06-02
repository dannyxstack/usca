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
                <tr>
                  <th>Agency Name</th>
                  <th>Business Address</th>
                  <th>Country</th>
                </tr>
              </thead>
              <tbody>
                @forelse($agents as $agent)
                <tr>
                  <td>{{ $agent->provider_entered_business_name }}</td>
                  <td>{{ $agent->address ?? '-' }}</td>
                  <td>{{ $agent->business_country ?? '-' }}</td>
                </tr>
                @empty
                <tr>
                  <td colspan="5" style="text-align: center;">No data.</td>
                </tr>
                @endforelse                
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

