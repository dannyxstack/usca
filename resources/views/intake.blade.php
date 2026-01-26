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
  background-color: #f1e1ed; 
  font-weight: 700;
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

  <section class="hero text-center section-bg-intake">
    <div class="container py-5">
      <!-- <h1 class="color-darkblue">Intake Dates</h1> -->
      <!-- <img src="https://placehold.co/600x400" alt="Illustration" class="img-fluid"> -->
    </div>
  </section>

  <section class="py-5">
    <div class="container">
      <div class="row">

      <!-- 2026 -->
      <table style="display:none;">
  <thead>
    <tr>
      <th style="width:32%">Course</th>
      <th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th>
      <th>May</th><th>Jun</th><th>Jul</th><th>Aug</th>
      <th>Sep</th><th>Oct</th><th>Nov</th><th>Dec</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>BSB50420 Diploma of Leadership and Management (DLM)</td>
      <td>12-Jan</td><td>9-Feb</td><td>10-Mar</td><td>13-Apr</td>
      <td>11-May</td><td>9-Jun</td><td>13-Jul</td><td>10-Aug</td>
      <td>14-Sep</td><td>12-Oct</td><td>9-Nov</td><td>14-Dec</td>
    </tr>
    <tr>
      <td>BSB80120 Graduate Diploma of Management (Learning) (GDM)</td>
      <td>12-Jan</td><td>9-Feb</td><td>10-Mar</td><td>13-Apr</td>
      <td>11-May</td><td>9-Jun</td><td>13-Jul</td><td>10-Aug</td>
      <td>14-Sep</td><td>12-Oct</td><td>9-Nov</td><td>14-Dec</td>
    </tr>
    <tr>
      <td>CHC52021 Diploma of Community Services (DCS)</td>
      <td>12-Jan</td><td>9-Feb</td><td>10-Mar</td><td>13-Apr</td>
      <td>11-May</td><td>9-Jun</td><td>13-Jul</td><td>10-Aug</td>
      <td>14-Sep</td><td>12-Oct</td><td>9-Nov</td><td>14-Dec</td>
    </tr>
    <tr>
      <td>SIT30821 Certificate III in Commercial Cookery (C3CC)</td>
      <td>12-Jan</td><td>9-Feb</td><td>10-Mar</td><td>13-Apr</td>
      <td>11-May</td><td>9-Jun</td><td>13-Jul</td><td>10-Aug</td>
      <td>14-Sep</td><td>12-Oct</td><td>9-Nov</td><td>14-Dec</td>
    </tr>
    <tr>
      <td>SIT40521 Certificate IV in Kitchen Management (C4KM)</td>
      <td>12-Jan</td><td>9-Feb</td><td>10-Mar</td><td>13-Apr</td>
      <td>11-May</td><td>9-Jun</td><td>13-Jul</td><td>10-Aug</td>
      <td>14-Sep</td><td>12-Oct</td><td>9-Nov</td><td>14-Dec</td>
    </tr>
    <tr>
      <td>SIT50422 Diploma of Hospitality Management (DHM)</td>
      <td>12-Jan</td><td>9-Feb</td><td>10-Mar</td><td>13-Apr</td>
      <td>11-May</td><td>9-Jun</td><td>13-Jul</td><td>10-Aug</td>
      <td>14-Sep</td><td>12-Oct</td><td>9-Nov</td><td>14-Dec</td>
    </tr>
    <tr>
      <td>BSB50120 Diploma of Business (DOB)</td>
      <td>12-Jan</td><td>9-Feb</td><td>10-Mar</td><td>13-Apr</td>
      <td>11-May</td><td>9-Jun</td><td>13-Jul</td><td>10-Aug</td>
      <td>14-Sep</td><td>12-Oct</td><td>9-Nov</td><td>14-Dec</td>
    </tr>
  </tbody>
</table>

<h1 class="text-center color-darkpurple"> 2026 ACADEMIC CALENDAR</h1>
<h2 class="text-center">Busness Courses 2026</h2>
<table>
  <thead>
    <tr>
      <th style="width:32%">Course</th>
      <th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th>
      <th>May</th><th>Jun</th><th>Jul</th><th>Aug</th>
      <th>Sep</th><th>Oct</th><th>Nov</th><th>Dec</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Diploma of Leadership and Management (DLM)</td>
      <td>27-Jan</td><td>23-Feb</td><td>23-Mar</td><td></td>
      <td>25-May</td><td>22-Jun</td><td>6-Jul</td><td>24-Aug</td>
      <td>21-Sep</td><td>12-Oct</td><td>23-Nov</td><td>14-Dec</td>
    </tr>
    <tr>
      <td>Advanced Diploma of Leadership and Management (ADLM)</td>
      <td>27-Jan</td><td>23-Feb</td><td>16-Mar</td><td>27-Apr</td>
      <td>25-May</td><td>22-Jun</td><td>27-Jul</td><td>24-Aug</td>
      <td>21-Sep</td><td>26-Oct</td><td>23-Nov</td><td>14-Dec</td>
    </tr>
    <tr>
      <td>Certificate IV in Marketing and Communication (C4MC)</td>
      <td>27-Jan</td><td>23-Feb</td><td>23-Mar</td><td></td>
      <td>25-May</td><td>22-Jun</td><td>6-Jul</td><td>24-Aug</td>
      <td>21-Sep</td><td>12-Oct</td><td>23-Nov</td><td>14-Dec</td>
    </tr>
    <tr>
      <td>Diploma of Marketing and Communication (DMC)</td>
      <td>27-Jan</td><td>23-Feb</td><td>23-Mar</td><td></td>
      <td>25-May</td><td>22-Jun</td><td>6-Jul</td><td>24-Aug</td>
      <td>21-Sep</td><td>12-Oct</td><td>23-Nov</td><td>14-Dec</td>
    </tr>
    <tr>
      <td>Advanced Diploma of Marketing and Communication (ADMC)</td>
      <td>27-Jan</td><td>23-Feb</td><td>23-Mar</td><td></td>
      <td>25-May</td><td>22-Jun</td><td>13-Jul</td><td>24-Aug</td>
      <td>21-Sep</td><td>12-Oct</td><td>23-Nov</td><td>14-Dec</td>
    </tr>
    <tr>
      <td>Graduate Diploma of Management (Learning) (GDM)</td>
      <td>27-Jan</td><td>9-Feb</td><td>23-Mar</td><td>27-Apr</td>
      <td>11-May</td><td>22-Jun</td><td>27-Jul</td><td>10-Aug</td>
      <td>21-Sep</td><td>26-Oct</td><td>16-Nov</td><td>14-Dec</td>
    </tr>
    <!-- DOB 2026 -->
    <tr>
      <td>BSB50120 Diploma of Business (DOB)</td>
      <td>12-Jan</td><td>9-Feb</td><td>10-Mar</td><td>13-Apr</td>
      <td>11-May</td><td>9-Jun</td><td>13-Jul</td><td>10-Aug</td>
      <td>14-Sep</td><td>12-Oct</td><td>9-Nov</td><td>14-Dec</td>
    </tr>

  </tbody>
</table>

<h2 class="text-center">Childcare Courses 2026</h2>
<table>
  <thead>
    <tr>
      <th style="width:32%">Course</th>
      <th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th>
      <th>May</th><th>Jun</th><th>Jul</th><th>Aug</th>
      <th>Sep</th><th>Oct</th><th>Nov</th><th>Dec</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Certificate III in Early Childhood Education and Care (C3ECEC)</td>
      <td></td><td>23-Feb</td><td>23-Mar</td><td>27-Apr</td>
      <td>18-May</td><td>22-Jun</td><td>27-Jul</td><td>17-Aug</td>
      <td>21-Sep</td><td>26-Oct</td><td>23-Nov</td><td>14-Dec</td>
    </tr>
    <tr>
      <td>Diploma of Early Childhood Education and Care (DECEC)</td>
      <td>27-Jan</td><td>9-Feb</td><td>23-Mar</td><td>27-Apr</td>
      <td>25-May</td><td>22-Jun</td><td>20-Jul</td><td>24-Aug</td>
      <td>21-Sep</td><td>12-Oct</td><td>23-Nov</td><td>14-Dec</td>
    </tr>
  </tbody>
</table>

<h2 class="text-center">Community Services Courses 2026</h2>
<table>
  <thead>
    <tr>
      <th style="width:32%">Course</th>
      <th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th>
      <th>May</th><th>Jun</th><th>Jul</th><th>Aug</th>
      <th>Sep</th><th>Oct</th><th>Nov</th><th>Dec</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Certificate III in Individual Support (C3IS)</td>
      <td>19-Jan</td><td>23-Feb</td><td>23-Mar</td><td>27-Apr</td>
      <td>25-May</td><td></td><td>6-Jul</td><td>24-Aug</td>
      <td>21-Sep</td><td>26-Oct</td><td>23-Nov</td><td>14-Dec</td>
    </tr>
    <tr>
      <td>Cert IV Ageing Support (C4AS)</td>
      <td>27-Jan</td><td>23-Feb</td><td>23-Mar</td><td>27-Apr</td>
      <td>25-May</td><td>22-Jun</td><td>20-Jul</td><td>24-Aug</td>
      <td>21-Sep</td><td>26-Oct</td><td>23-Nov</td><td>14-Dec</td>
    </tr>
    <tr>
      <td>Diploma of Community Services (DCS)</td>
      <td>27-Jan</td><td></td><td>16-Mar</td><td>27-Apr</td>
      <td>25-May</td><td>22-Jun</td><td>27-Jul</td><td>24-Aug</td>
      <td>14-Sep</td><td>26-Oct</td><td>23-Nov</td><td>14-Dec</td>
    </tr>
  </tbody>
</table>

<h2 class="text-center">Automotive Courses 2026</h2>
<table>
  <thead>
    <tr>
      <th style="width:32%">Course</th>
      <th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th>
      <th>May</th><th>Jun</th><th>Jul</th><th>Aug</th>
      <th>Sep</th><th>Oct</th><th>Nov</th><th>Dec</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Certificate III in Light Vehicle Mechanical Technology (C3LVMT)</td>
      <td>27-Jan</td><td>23-Feb</td><td>16-Mar</td><td>20-Apr</td>
      <td>25-May</td><td>22-Jun</td><td>27-Jul</td><td>24-Aug</td>
      <td>21-Sep</td><td>26-Oct</td><td>23-Nov</td><td>14-Dec</td>
    </tr>
    <tr>
      <td>Certificate IV in Automotive Mechanical Diagnosis (C4AMD)</td>
      <td></td><td>23-Feb</td><td>9-Mar</td><td>27-Apr</td>
      <td>25-May</td><td>22-Jun</td><td>27-Jul</td><td>24-Aug</td>
      <td></td><td>19-Oct</td><td>23-Nov</td><td>14-Dec</td>
    </tr>
  </tbody>
</table>

<h2 class="text-center">Cookery & Hospitality Courses 2026</h2>
<table>
  <thead>
    <tr>
      <th style="width:32%">Course</th>
      <th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th>
      <th>May</th><th>Jun</th><th>Jul</th><th>Aug</th>
      <th>Sep</th><th>Oct</th><th>Nov</th><th>Dec</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>SIT30821 Certificate III in Commercial Cookery (C3CC)</td>
      <td>12-Jan</td><td>9-Feb</td><td>10-Mar</td><td>13-Apr</td>
      <td>11-May</td><td>9-Jun</td><td>13-Jul</td><td>10-Aug</td>
      <td>14-Sep</td><td>12-Oct</td><td>9-Nov</td><td>14-Dec</td>
    </tr>
    <tr>
      <td>SIT40521 Certificate IV in Kitchen Management (C4KM)</td>
      <td>12-Jan</td><td>9-Feb</td><td>10-Mar</td><td>13-Apr</td>
      <td>11-May</td><td>9-Jun</td><td>13-Jul</td><td>10-Aug</td>
      <td>14-Sep</td><td>12-Oct</td><td>9-Nov</td><td>14-Dec</td>
    </tr>
    <tr>
      <td>SIT50422 Diploma of Hospitality Management (DHM)</td>
      <td>12-Jan</td><td>9-Feb</td><td>10-Mar</td><td>13-Apr</td>
      <td>11-May</td><td>9-Jun</td><td>13-Jul</td><td>10-Aug</td>
      <td>14-Sep</td><td>12-Oct</td><td>9-Nov</td><td>14-Dec</td>
    </tr>
  </tbody>
</table>

<h2 class="text-center">English Courses 2026</h2>
<table>
  <thead>
    <tr>
      <th style="width:32%">Course</th>
      <th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th>
      <th>May</th><th>Jun</th><th>Jul</th><th>Aug</th>
      <th>Sep</th><th>Oct</th><th>Nov</th><th>Dec</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>General English Elementary to Upper Intermediate (GE)</td>
      <td>27-Jan</td><td>23-Feb</td><td>23-Mar</td><td>27-Apr</td>
      <td>25-May</td><td>22-Jun</td><td>27-Jul</td><td>24-Aug</td>
      <td>21-Sep</td><td>26-Oct</td><td>23-Nov</td><td>14-Dec</td>
    </tr>
    <tr>
      <td>English for Academic Purposes Intermediate to Advanced (EAP)</td>
      <td>27-Jan</td><td>23-Feb</td><td>23-Mar</td><td>27-Apr</td>
      <td>25-May</td><td>22-Jun</td><td>27-Jul</td><td>24-Aug</td>
      <td>21-Sep</td><td>26-Oct</td><td>23-Nov</td><td>14-Dec</td>
    </tr>
  </tbody>
</table>

<h1 class="text-center color-darkpurple"> 2027 ACADEMIC CALENDAR</h1>
<h2 class="text-center">Business Courses 2027</h2>
<table>
  <thead>
    <tr>
      <th style="width:32%">Course</th>
      <th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th>
      <th>May</th><th>Jun</th><th>Jul</th><th>Aug</th>
      <th>Sep</th><th>Oct</th><th>Nov</th><th>Dec</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Diploma of Leadership and Management (DLM)</td>
      <td>25-Jan</td><td>22-Feb</td><td>22-Mar</td><td>26-Apr</td>
      <td>24-May</td><td>28-Jun</td><td>26-Jul</td><td></td>
      <td>27-Sep</td><td>25-Oct</td><td>29-Nov</td><td>20-Dec</td>
    </tr>
    <tr>
      <td>Advanced Diploma of Leadership and Management (ADLM)</td>
      <td>25-Jan</td><td>22-Feb</td><td>29-Mar</td><td></td>
      <td>24-May</td><td>28-Jun</td><td></td><td>30-Aug</td>
      <td>27-Sep</td><td></td><td>29-Nov</td><td>13-Dec</td>
    </tr>
    <tr>
      <td>Certificate IV in Marketing and Communication (C4MC)</td>
      <td>25-Jan</td><td></td><td>22-Mar</td><td>26-Apr</td>
      <td></td><td>28-Jun</td><td>26-Jul</td><td>9-Aug</td>
      <td>27-Sep</td><td>25-Oct</td><td>29-Nov</td><td></td>
    </tr>
    <tr>
      <td>Diploma of Marketing and Communication (DMC)</td>
      <td>25-Jan</td><td>22-Feb</td><td>29-Mar</td><td>26-Apr</td>
      <td>24-May</td><td>28-Jun</td><td>26-Jul</td><td></td>
      <td>27-Sep</td><td>25-Oct</td><td>29-Nov</td><td></td>
    </tr>
    <tr>
      <td>Advanced Diploma of Marketing and Communication (ADMC)</td>
      <td>25-Jan</td><td>22-Feb</td><td>22-Mar</td><td>19-Apr</td>
      <td>24-May</td><td>28-Jun</td><td>26-Jul</td><td>30-Aug</td>
      <td>27-Sep</td><td>25-Oct</td><td>29-Nov</td><td>13-Dec</td>
    </tr>
    <tr>
      <td>Graduate Diploma of Management (Learning) (GDM)</td>
      <td>25-Jan</td><td>22-Feb</td><td>22-Mar</td><td>26-Apr</td>
      <td>24-May</td><td>28-Jun</td><td>26-Jul</td><td>23-Aug</td>
      <td>27-Sep</td><td>25-Oct</td><td>29-Nov</td><td></td>
    </tr>
    <!-- DOB 2027 -->
    <tr>
      <td>Diploma of Business (DOB)</td>
      <td>11-Jan</td><td>8-Feb</td><td>9-Mar</td><td>12-Apr</td>
      <td>10-May</td><td>15-Jun</td><td>12-Jul</td><td>9-Aug</td>
      <td>13-Sep</td><td>11-Oct</td><td>8-Nov</td><td>13-Dec</td>
    </tr>

  </tbody>
</table>

<h2 class="text-center">Childcare Courses 2027</h2>
<table>
  <thead>
    <tr>
      <th style="width:32%">Course</th>
      <th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th>
      <th>May</th><th>Jun</th><th>Jul</th><th>Aug</th>
      <th>Sep</th><th>Oct</th><th>Nov</th><th>Dec</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Certificate III in Early Childhood Education and Care (C3ECEC)</td>
      <td>25-Jan</td><td>22-Feb</td><td>22-Mar</td><td>26-Apr</td>
      <td>24-May</td><td>28-Jun</td><td>26-Jul</td><td>30-Aug</td>
      <td>27-Sep</td><td>25-Oct</td><td>29-Nov</td><td>13-Dec</td>
    </tr>
    <tr>
      <td>Diploma of Early Childhood Education and Care (DECEC)</td>
      <td>25-Jan</td><td>22-Feb</td><td>22-Mar</td><td></td>
      <td>24-May</td><td>14-Jun</td><td>26-Jul</td><td>30-Aug</td>
      <td>27-Sep</td><td>25-Oct</td><td>29-Nov</td><td>20-Dec</td>
    </tr>
  </tbody>
</table>

<h2 class="text-center">Community Services Courses 2027</h2>
<table>
  <thead>
    <tr>
      <th style="width:32%">Course</th>
      <th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th>
      <th>May</th><th>Jun</th><th>Jul</th><th>Aug</th>
      <th>Sep</th><th>Oct</th><th>Nov</th><th>Dec</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Certificate III in Individual Support (C3IS)</td>
      <td>25-Jan</td><td>22-Feb</td><td>15-Mar</td><td>26-Apr</td>
      <td>24-May</td><td>28-Jun</td><td>26-Jul</td><td>30-Aug</td>
      <td>27-Sep</td><td>25-Oct</td><td>22-Nov</td><td>13-Dec</td>
    </tr>
    <tr>
      <td>Cert IV Ageing Support (C4AS)</td>
      <td>25-Jan</td><td>22-Feb</td><td>22-Mar</td><td>26-Apr</td>
      <td>24-May</td><td>21-Jun</td><td>26-Jul</td><td>30-Aug</td>
      <td>13-Sep</td><td>25-Oct</td><td>29-Nov</td><td>13-Dec</td>
    </tr>
    <tr>
      <td>Diploma of Community Services (DCS)</td>
      <td>25-Jan</td><td>22-Feb</td><td>29-Mar</td><td>26-Apr</td>
      <td>24-May</td><td>28-Jun</td><td>26-Jul</td><td>30-Aug</td>
      <td>27-Sep</td><td>25-Oct</td><td>29-Nov</td><td></td>
    </tr>
  </tbody>
</table>

<h2 class="text-center">Automotive Courses 2027</h2>
<table>
  <thead>
    <tr>
      <th style="width:32%">Course</th>
      <th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th>
      <th>May</th><th>Jun</th><th>Jul</th><th>Aug</th>
      <th>Sep</th><th>Oct</th><th>Nov</th><th>Dec</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Certificate III in Light Vehicle Mechanical Technology (C3LVMT)</td>
      <td>25-Jan</td><td>22-Feb</td><td>22-Mar</td><td></td>
      <td>24-May</td><td>28-Jun</td><td></td><td>23-Aug</td>
      <td>27-Sep</td><td></td><td>29-Nov</td><td>13-Dec</td>
    </tr>
    <tr>
      <td>Certificate IV in Automotive Mechanical Diagnosis (C4AMD)</td>
      <td>25-Jan</td><td>22-Feb</td><td>22-Mar</td><td></td>
      <td>24-May</td><td>28-Jun</td><td>12-Jul</td><td>30-Aug</td>
      <td>27-Sep</td><td>18-Oct</td><td>29-Nov</td><td>13-Dec</td>
    </tr>
  </tbody>
</table>

<h2 class="text-center">Cookery & Hospitality Courses 2027</h2>
<table>
  <thead>
    <tr>
      <th style="width:32%">Course</th>
      <th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th>
      <th>May</th><th>Jun</th><th>Jul</th><th>Aug</th>
      <th>Sep</th><th>Oct</th><th>Nov</th><th>Dec</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>SIT30821 Certificate III in Commercial Cookery (C3CC)</td>
      <td>11-Jan</td><td>8-Feb</td><td>9-Mar</td><td>12-Apr</td>
      <td>10-May</td><td>15-Jun</td><td>12-Jul</td><td>9-Aug</td>
      <td>13-Sep</td><td>11-Oct</td><td>8-Nov</td><td>13-Dec</td>
    </tr>
    <tr>
      <td>SIT40521 Certificate IV in Kitchen Management (C4KM)</td>
      <td>11-Jan</td><td>8-Feb</td><td>9-Mar</td><td>12-Apr</td>
      <td>10-May</td><td>15-Jun</td><td>12-Jul</td><td>9-Aug</td>
      <td>13-Sep</td><td>11-Oct</td><td>8-Nov</td><td>13-Dec</td>
    </tr>
    <tr>
      <td>SIT50422 Diploma of Hospitality Management (DHM)</td>
      <td>11-Jan</td><td>8-Feb</td><td>9-Mar</td><td>12-Apr</td>
      <td>10-May</td><td>15-Jun</td><td>12-Jul</td><td>9-Aug</td>
      <td>13-Sep</td><td>11-Oct</td><td>8-Nov</td><td>13-Dec</td>
    </tr>
  </tbody>
</table>

<h2 class="text-center">English Courses 2027</h2>
<table>
  <thead>
    <tr>
      <th style="width:32%">Course</th>
      <th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th>
      <th>May</th><th>Jun</th><th>Jul</th><th>Aug</th>
      <th>Sep</th><th>Oct</th><th>Nov</th><th>Dec</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>General English Elementary to Upper Intermediate (GE)</td>
      <td>25-Jan</td><td>22-Feb</td><td>22-Mar</td><td>26-Apr</td>
      <td>24-May</td><td>28-Jun</td><td>26-Jul</td><td>23-Aug</td>
      <td>27-Sep</td><td>25-Oct</td><td>29-Nov</td><td>13-Dec</td>
    </tr>
    <tr>
      <td>English for Academic Purposes Intermediate to Advanced (EAP)</td>
      <td>25-Jan</td><td>22-Feb</td><td>22-Mar</td><td>26-Apr</td>
      <td>24-May</td><td>28-Jun</td><td>26-Jul</td><td>23-Aug</td>
      <td>27-Sep</td><td>25-Oct</td><td>29-Nov</td><td>13-Dec</td>
    </tr>
  </tbody>
</table>

<h1 class="text-center color-darkpurple"> 2028 ACADEMIC CALENDAR</h1>
<h2 class="text-center">Business Courses 2028</h2>
<table>
  <thead>
    <tr>
      <th style="width:32%">Course</th>
      <th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th>
      <th>May</th><th>Jun</th><th>Jul</th><th>Aug</th>
      <th>Sep</th><th>Oct</th><th>Nov</th><th>Dec</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Diploma of Leadership and Management (DLM)</td>
      <td>24-Jan</td><td>14-Feb</td><td>27-Mar</td><td>24-Apr</td>
      <td>29-May</td><td>26-Jun</td><td>24-Jul</td><td>28-Aug</td>
      <td></td><td>30-Oct</td><td>27-Nov</td><td></td>
    </tr>
    <tr>
      <td>Advanced Diploma of Leadership and Management (ADLM)</td>
      <td>17-Jan</td><td>28-Feb</td><td>27-Mar</td><td></td>
      <td>29-May</td><td>26-Jun</td><td></td><td>28-Aug</td>
      <td>25-Sep</td><td>16-Oct</td><td>27-Nov</td><td>18-Dec</td>
    </tr>
    <tr>
      <td>Certificate IV in Marketing and Communication (C4MC)</td>
      <td>24-Jan</td><td>21-Feb</td><td>27-Mar</td><td>24-Apr</td>
      <td>29-May</td><td></td><td>24-Jul</td><td>28-Aug</td>
      <td></td><td>30-Oct</td><td>27-Nov</td><td>11-Dec</td>
    </tr>
    <tr>
      <td>Diploma of Marketing and Communication (DMC)</td>
      <td>24-Jan</td><td>14-Feb</td><td>27-Mar</td><td>24-Apr</td>
      <td>22-May</td><td>26-Jun</td><td>24-Jul</td><td>28-Aug</td>
      <td></td><td>30-Oct</td><td>27-Nov</td><td></td>
    </tr>
    <tr>
      <td>Advanced Diploma of Marketing and Communication (ADMC)</td>
      <td>24-Jan</td><td></td><td>27-Mar</td><td>24-Apr</td>
      <td>8-May</td><td>26-Jun</td><td>24-Jul</td><td></td>
      <td>25-Sep</td><td>30-Oct</td><td>13-Nov</td><td>18-Dec</td>
    </tr>
    <tr>
      <td>Graduate Diploma of Management (Learning) (GDM)</td>
      <td>24-Jan</td><td>28-Feb</td><td></td><td>24-Apr</td>
      <td>29-May</td><td></td><td>24-Jul</td><td>28-Aug</td>
      <td></td><td>30-Oct</td><td>27-Nov</td><td>11-Dec</td>
    </tr>
    <!-- DOB 2028 -->
    <tr>
      <td>Diploma of Business (DOB)</td>
      <td>10-Jan</td><td>14-Feb</td><td>14-Mar</td><td>10-Apr</td>
      <td>8-May</td><td>13-Jun</td><td>10-Jul</td><td>14-Aug</td>
      <td>11-Sep</td><td>9-Oct</td><td>13-Nov</td><td>11-Dec</td>
    </tr>

  </tbody>
</table>

<h2 class="text-center">Childcare Courses 2028</h2>
<table>
  <thead>
    <tr>
      <th style="width:32%">Course</th>
      <th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th>
      <th>May</th><th>Jun</th><th>Jul</th><th>Aug</th>
      <th>Sep</th><th>Oct</th><th>Nov</th><th>Dec</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Certificate III in Early Childhood Education and Care (C3ECEC)</td>
      <td>24-Jan</td><td>28-Feb</td><td>27-Mar</td><td>24-Apr</td>
      <td>29-May</td><td>26-Jun</td><td>24-Jul</td><td>28-Aug</td>
      <td>25-Sep</td><td>30-Oct</td><td>27-Nov</td><td>18-Dec</td>
    </tr>
    <tr>
      <td>Diploma of Early Childhood Education and Care (DECEC)</td>
      <td>24-Jan</td><td>14-Feb</td><td>27-Mar</td><td>24-Apr</td>
      <td>8-May</td><td>26-Jun</td><td>24-Jul</td><td>7-Aug</td>
      <td>25-Sep</td><td>16-Oct</td><td>27-Nov</td><td>18-Dec</td>
    </tr>
  </tbody>
</table>

<h2 class="text-center">Community Services Courses 2028</h2>
<table>
  <thead>
    <tr>
      <th style="width:32%">Course</th>
      <th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th>
      <th>May</th><th>Jun</th><th>Jul</th><th>Aug</th>
      <th>Sep</th><th>Oct</th><th>Nov</th><th>Dec</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Certificate III in Individual Support (C3IS)</td>
      <td>24-Jan</td><td>28-Feb</td><td>27-Mar</td><td>24-Apr</td>
      <td>29-May</td><td>26-Jun</td><td>24-Jul</td><td>28-Aug</td>
      <td>25-Sep</td><td>23-Oct</td><td>27-Nov</td><td>18-Dec</td>
    </tr>
    <tr>
      <td>Cert IV Ageing Support (C4AS)</td>
      <td>24-Jan</td><td>28-Feb</td><td>27-Mar</td><td>24-Apr</td>
      <td>29-May</td><td>26-Jun</td><td>24-Jul</td><td>14-Aug</td>
      <td>25-Sep</td><td>23-Oct</td><td>27-Nov</td><td>18-Dec</td>
    </tr>
    <tr>
      <td>Diploma of Community Services (DCS)</td>
      <td>24-Jan</td><td>28-Feb</td><td>27-Mar</td><td>10-Apr</td>
      <td>29-May</td><td>26-Jun</td><td>10-Jul</td><td>28-Aug</td>
      <td>25-Sep</td><td>9-Oct</td><td>27-Nov</td><td>18-Dec</td>
    </tr>
  </tbody>
</table>

<h2 class="text-center">Automotive Courses 2028</h2>
<table>
  <thead>
    <tr>
      <th style="width:32%">Course</th>
      <th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th>
      <th>May</th><th>Jun</th><th>Jul</th><th>Aug</th>
      <th>Sep</th><th>Oct</th><th>Nov</th><th>Dec</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Certificate III in Light Vehicle Mechanical Technology (C3LVMT)</td>
      <td>24-Jan</td><td>28-Feb</td><td>27-Mar</td><td>10-Apr</td>
      <td>29-May</td><td>26-Jun</td><td>17-Jul</td><td>28-Aug</td>
      <td>25-Sep</td><td>16-Oct</td><td>27-Nov</td><td>11-Dec</td>
    </tr>
    <tr>
      <td>Certificate IV in Automotive Mechanical Diagnosis (C4AMD)</td>
      <td>24-Jan</td><td>14-Feb</td><td>27-Mar</td><td>24-Apr</td>
      <td>22-May</td><td>26-Jun</td><td>24-Jul</td><td>28-Aug</td>
      <td></td><td>30-Oct</td><td>27-Nov</td><td>18-Dec</td>
    </tr>
  </tbody>
</table>

<h2 class="text-center">Cookery & Hospitality Courses 2028</h2>
<table>
  <thead>
    <tr>
      <th style="width:32%">Course</th>
      <th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th>
      <th>May</th><th>Jun</th><th>Jul</th><th>Aug</th>
      <th>Sep</th><th>Oct</th><th>Nov</th><th>Dec</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>SIT30821 Certificate III in Commercial Cookery (C3CC)</td>
      <td>10-Jan</td><td>14-Feb</td><td>14-Mar</td><td>10-Apr</td>
      <td>8-May</td><td>13-Jun</td><td>10-Jul</td><td>14-Aug</td>
      <td>11-Sep</td><td>9-Oct</td><td>13-Nov</td><td>11-Dec</td>
    </tr>
    <tr>
      <td>SIT40521 Certificate IV in Kitchen Management (C4KM)</td>
      <td>10-Jan</td><td>14-Feb</td><td>14-Mar</td><td>10-Apr</td>
      <td>8-May</td><td>13-Jun</td><td>10-Jul</td><td>14-Aug</td>
      <td>11-Sep</td><td>9-Oct</td><td>13-Nov</td><td>11-Dec</td>
    </tr>
    <tr>
      <td>SIT50422 Diploma of Hospitality Management (DHM)</td>
      <td>10-Jan</td><td>14-Feb</td><td>14-Mar</td><td>10-Apr</td>
      <td>8-May</td><td>13-Jun</td><td>10-Jul</td><td>14-Aug</td>
      <td>11-Sep</td><td>9-Oct</td><td>13-Nov</td><td>11-Dec</td>
    </tr>
  </tbody>
</table>

<h2 class="text-center">English Courses 2028</h2>
<table>
  <thead>
    <tr>
      <th style="width:32%">Course</th>
      <th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th>
      <th>May</th><th>Jun</th><th>Jul</th><th>Aug</th>
      <th>Sep</th><th>Oct</th><th>Nov</th><th>Dec</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>General English Elementary to Upper Intermediate (GE)</td>
      <td>24-Jan</td><td>28-Feb</td><td>27-Mar</td><td>24-Apr</td>
      <td>29-May</td><td>26-Jun</td><td>24-Jul</td><td>28-Aug</td>
      <td>25-Sep</td><td>23-Oct</td><td>27-Nov</td><td>18-Dec</td>
    </tr>
    <tr>
      <td>English for Academic Purposes Intermediate to Advanced (EAP)</td>
      <td>24-Jan</td><td>28-Feb</td><td>27-Mar</td><td>24-Apr</td>
      <td>29-May</td><td>26-Jun</td><td>24-Jul</td><td>28-Aug</td>
      <td>25-Sep</td><td>23-Oct</td><td>27-Nov</td><td>18-Dec</td>
    </tr>
  </tbody>
</table>


      </div>
    </div>
  </section>

  <section class="py-5 bg-white">
    <div class="container">
      <div class="row"></div>
      <div class="row">
        <div class="col-md-6">
          <img src="/images/orientation1.png" alt="" class="img-fluid" style="max-height: 600px;border-radius: 20px;" >
        </div>
        <div class="col-md-6">
          <h2 class="color-darkpurple fw-bold">What to Bring to Your Orientation Day?</h2>
          <p class="fs-5">The first step of your enrollment is to attend the Student Orientation day. 
            This is a compulsory requirement to your enrollment and to study in Australia. 
            The date and time will be confirmed over email.

          </p>
          <p class="fs-5">
            Wondering what to bring?
          </p>
          <p class="fs-5">
            1. Copy of your Letter of Offer or Confirmation of Enrolment (COE)<br>
            2. Passport<br>
            3. Laptop & Pen<br>
          </p>
        </div>
      </div>

    </div>
  </section>


  <section class="">
    <div class="">

      <div class="container py-5" style="border-radius: 10px; background-color: #b8e9f1;">
        <div class="row">
          <div class="col-md-6 fs-6 px-4">
            <span class="color-darkpurple fs-6 fw-bold">Our Facilities</span>
            <h2 class="color-darkblue fw-bold">MELBOURNE CBD CAMPUS</h2>
            <p>Our Melbourne campus is conveniently located in the heartof the CBD at Level 3, 123 Londales st.</p>
            <p>
              This new modern, spacious campus features state-of-the-art facilities, including:<br>
              - Multiple classrooms equipped with computers,projectors, screens, and internet access.<br>
              - Simulation Lab designed to replicate a real aged carefacility environment for practical training.<br>
              - Student kitchen with fridges, microwaves, and tea andcoffee amenities.<br>
              - Wireless internet available for students at all times, bothinside and outside class hours.<br>
              - Quiet self-study areas with access to learning resourcesfor independent and extra-curricular study.<br>
              - Meeting rooms for academic consultations and studentcounselling sessions.<br>
              - Common areas for dining, socialising,and relaxation..Access to library resources for research and studysupport.
            </p>
          </div>
          <div class="col-md-6">
            <!-- 示例：校园图片轮播 -->
            <div id="examplePhotosCarousel" class="carousel slide" >
              <!-- 轮播图片 -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/images/melbourne1.jpg" class="d-block w-100 rounded-4" alt="Campus 2">
                </div>
                <div class="carousel-item">
                  <img src="/images/classroom1.jpg" class="d-block w-100 rounded-4">
                </div>
                <div class="carousel-item">
                  <img src="/images/melbourne2.png" class="d-block w-100 rounded-4" alt="Campus 3">
                </div>
              </div>

              <!-- 自定义指示器（核心部分） -->
              <div class="carousel-indicators custom-carousel-indicators custom-carousel-bg-white">
                <button type="button" data-bs-target="#examplePhotosCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#examplePhotosCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#examplePhotosCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <p></p>
  <section class="py-5">
    <div class="">

      <div class="container py-5" style="border-radius: 10px; background-color: #b8e9f1;">
        <div class="row">
          <div class="col-md-6">
            <img src="/images/melbourne3.png" alt="" class="img-fluid" style="max-height: 100%;border-radius: 20px;" >

          </div>
          <div class="col-md-6 fs-6 px-4">
            <span class="color-darkpurple fs-6 fw-bold">Study In Australia</span>
            <h2 class="color-darkblue fw-bold">LIFE IN MELBOURNE</h2>
            <p>There's more to life at Allied Institute than just study. 
              While you are with us you will have a full lifestyle, and with that comes some expenses. 
              Accommodation, food and transport are three of the major money spenders outside of your course.</p>
          </div>
        </div>
      </div>
    </div>
  </section>



 <!-- footer -->
 @include('layouts.footer')

 </body>
</html>

