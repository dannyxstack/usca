<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<style>

  /* 整体 tabs 容器 */
.custom-tabs {
  border-bottom: none; /* 移除 Bootstrap 默认下边框 */
}

/* 所有 tab */
.custom-tabs .nav-link {
  border: none;                 /* 移除默认边框 */
  border-bottom: 3px solid transparent;
  color: #6c757d;               /* 普通状态颜色 */
  font-weight: 400;
  padding: 0.75rem 1.25rem;
  transition: all 0.2s ease;
}

/* hover 状态（不出现边框） */
.custom-tabs .nav-link:hover {
  color: #212529;
}

/* active 状态 */
.custom-tabs .nav-link.active {
  color: #c785b5;               /* 高亮文字 */
  font-weight: 600;
  border-bottom: 4px solid #c785b5; /* 粗下边框 */
  background-color: transparent;   /* 去掉白底 */
}

.course-right-card {
  border-radius: 10px;
  /* box-shadow: 2px 2px 6px 2px rgba(0, 0, 0, 0.2); */
  padding: 20px;
  /* 右侧悬挂紫色是#9C649B 加30%透明度。 */
  background-color: rgba(156, 100, 155, 0.3);
}

.sticky-sidebar {
  position: sticky;
  top: 80px; /* 距离顶部的吸附距离 */
}

.section-bg-course {
  background-image: url('/images/bg-header-course2.png');
  background-size: cover; /* 覆盖整个区域 */
  background-position: center; /* 居中显示 */
  width: 100%;
  height: 800px;
  display: flex;
}
.section-bg-course-pathway {
  background-image: url('/images/course-detail2.png');
  background-size: 75%;
  /* background-position-x: center; */
  background-position-y: 20px;
  background-repeat: no-repeat;
  width: 100%;
  min-height: 800px;
}
.section-bg-course-structure {
  background-image: url('/images/course-detail3.png');
  /* background-size: cover;*/
  background-position-x: center; /* 居中显示 */
  /* background-position-y: 20px; */
  background-repeat: no-repeat;
  width: 100%;
  min-height: 800px;
  /* background-color: #c785b5; */
}

.rounded-bottom {
  border-bottom-right-radius: 0.9rem !important;
  border-bottom-left-radius: 0.9rem !important;
}

.banner {
  position: relative;
  width: 100%;
  height: 660px;
  overflow: hidden;
}

.banner-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  /* background-image: url('https://picsum.photos/1920/1080'); */
  background-image: url('/images/courses/{{ $course->img }};');
  background-size: cover;
  background-position: center;
  /* 核心：正弦波遮罩的SVG路径 */
  -webkit-mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0 0 L0 70 Q 25 110 50 80 T 100 90 L100 0 Z" fill="white" /></svg>');
  mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0 0 L0 70 Q 25 110 50 80 T 100 90 L100 0 Z" fill="white" /></svg>');
  -webkit-mask-size: 100% 100%;
  mask-size: 100% 100%;
}

.banner-content {
  position: relative;
  z-index: 2;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  transform: translateY(-40px);
  color: white;
  text-shadow: 0 2px 4px rgba(0,0,0,0.5);
  padding: 0 20px;
}

.course-title {
  /* 横幅的颜色比较特殊用的是#CF8CBD 加70%透明。 */
  /* background-color: #9C649B; rgba(156, 100, 155, 0.3)*/
  background-color: rgba(207, 140, 189, 0.7); /* ##CF8CBD 半透明0.7 */
  color: #ffffff;
  /* opacity: 0.7; */
  /* display: flex; */

  border-radius: 20px;
  /* border-color: white; */
  box-shadow: 0px 2px 2px 2px rgba(250, 250, 250, 0.8);
  min-height: 250px;
}

.course-title h1 {
  font-size: 3.5rem !important;
}

/* .color-purple {
  color: #b889b0;
} */

/* 【Text Colors】
#43C4DB  
#9C649B  
#3F59A8  
#FFFFFF  
#949494  
#585858 */


.color-darkgrey {
  color:#585858;
}

.color-grey {
  color: #949494;
}

.color-lightblue {
  color: #43C4DB;
}

.color-darkblue {
  color: #3F59A8;
}

.color-purple {
  color: #9C649B;
}

.course-overview-card {
  /* 文字背后的浅灰色是#FBFBFB 加100%透明 */
  background-color: rgba(251,251,251,1.00);
  border-radius: 25px;
  /* border-bottom-left-radius: 15px;; */
  /* padding-left: 60px;
  padding-right: 40px;
  padding-top: 10px;
  padding-bottom: 15px; */
}

.course-detail-card {
  background-color: rgba(251,251,251,1.00);
  border-radius: 20px;
  /* box-shadow: 4px 4px 10px 2px rgba(0, 0, 0, 0.2); */
  padding: 20px;
}

</style>

<body>

  <!-- top navbar -->
  @include('layouts.topbar')

  <!-- main content -->

  <section class="banner" >
    <div class="banner-bg" style="background-image: url('/images/courses/{{ $course->img }}');"></div>
    <div class="banner-content">

      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="course-title text-start px-4 py-4 ">
              
                <h1 class="" style="font-weight: 800;">
                  {{ $course->code ?? '' }} {{ $course->name ?? '' }}<br>
                </h1>
              <p>
                <div class="color-darkblue fs-4 fw-bolder" >CRICOS CODE: {{ $course->cricos_code ?? '' }}</div>
              </p>
  
            </div>
          </div>
          <div class="col-md-3">
  
          </div>
        </div>
      </div>
    </div>

  </section>

  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <!-- middle content -->

        <ul class="nav custom-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button
              class="nav-link active"
              id="tab-overview"
              data-bs-toggle="tab"
              data-bs-target="#overview"
              type="button"
              role="tab">
              Course Overview
            </button>
          </li>

          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="tab-entryreq"
              data-bs-toggle="tab"
              data-bs-target="#entryreq"
              type="button"
              role="tab">
              Entry Requirements
            </button>
          </li>

          <li class="nav-item" role="presentation" @if (empty($course->pathways)) style="display: none;" @endif>
            <button
              class="nav-link"
              id="tab-pathways"
              data-bs-toggle="tab"
              data-bs-target="#pathways"
              type="button"
              role="tab">
              Pathways
            </button>
          </li>
          <!-- <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="tab-jobpathways"
              data-bs-toggle="tab"
              data-bs-target="#jobpathways"
              type="button"
              role="tab">
              Employment Pathways
            </button>
          </li> -->
          <li class="nav-item" role="presentation" @if (empty($course->course_structure)) style="display: none;" @endif>
            <button
              class="nav-link"
              id="tab-units"
              data-bs-toggle="tab"
              data-bs-target="#units"
              type="button"
              role="tab">
              Units
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="tab-resources"
              data-bs-toggle="tab"
              data-bs-target="#resources"
              type="button"
              role="tab">
              Facilities and Resources
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="tab-rpl"
              data-bs-toggle="tab"
              data-bs-target="#rpl"
              type="button"
              role="tab">
              RPL
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="tab-policy"
              data-bs-toggle="tab"
              data-bs-target="#policy"
              type="button"
              role="tab">
              Policy
            </button>
          </li>
        </ul>

        <div class="tab-content">
          
          <section class="tab-pane fade show active" id="overview">
            <div class="">
              <div class="py-5 container color-darkgrey">
              <div class="row">
                <div class="col-md-6" style="" >
                  <div class="course-overview-card px-5 py-5">
                    <div class="color-lightblue fs-6 fw-bold" style="">{{ $course->code ?? '' }}</div>
                    <div class="color-darkblue fs-5 fw-bold">{{$course->name}}</div>
                    <p class="mt-4 fs-6" >{!! nl2br(e($course->overview )) !!}</p>
                    <!-- <a href="{{ $course->apply_link }}" class="btn btn-primary btn-lg footer-start-here-btn fs-4 mt-3 bg-darkblue">Start Here</a> -->
                  </div>
                  <div class="mt-5 px-4 fs-6">
                    <h2 class="fs-5 color-darkblue mb-2 fw-bold">Assessment Methodology</h2>
                    <div class="mt-3 pt-3">
                    {!! nl2br(e($course->assessment_methodology)) !!}
                    </div>
                  </div>
                </div>
                <div class="col-md-6" >
                  <div class="course-detail-card fs-6 px-5 py-5">
                    <!-- <h4 class="color-darkblue">{{ $course->code ?? '' }}</h4> -->
                    <div class="color-darkblue fs-5 fw-bold">{{ $course->name ?? '' }}</div>
                    <hr>
                    <p><span class="fw-bold">Qualification CRICOS Code:</span> {{ $course->cricos_code ?? '' }}</p>
                    <hr>
                    <p><span class="fw-bold">Qualification Status:</span> {{ $course->status ?? '' }}</p>
                    <hr>
                    @if (isset($course->aqf_level) && !empty($course->aqf_level))
                    <p><span class="fw-bold">AQF Level:</span> {{ $course->aqf_level ?? '' }}</p>
                    @endif
                    <hr>
                    <p><span class="fw-bold">Mode of Delivery:</span> {{ $course->mode_of_delivery ?? '' }}</p>
                    <hr>
                    <p><span class="fw-bold">Total Core Units:</span> {{ $course->total_core_units ?? '' }}</p>
                    <hr>
                    <p><span class="fw-bold">Total Electives Units:</span> {{ $course->total_electives_units ?? '' }}</p>
                    <hr>
                    <p><span class="fw-bold">Placement:</span> {{ $course->placement ?? '' }}</p>
                    <hr>
                    <p><span class="fw-bold">Location of course:</span>  {{ $course->location ?? '' }}</p>
                    <hr>
                    <p><span class="fw-bold">Total Course Duration:</span>  {{ $course->duration ?? '' }}</p>
                    <hr>
                    @if (isset($course->course_fees) && !empty($course->course_fees))
                    <p><span class="fw-bold">Total Course Fee:</span> AUD {{ number_format($course->course_fees['total']) }}</p>
                    <hr>
                    <p><span class="fw-bold">Tuition Fee:</span> AUD {{ number_format($course->course_fees['tuition']) }}</p>
                    <hr>
                    <p><span class="fw-bold">Material Fee:</span> AUD {{ number_format($course->course_fees['material']) }}</p>
                    <hr>
                    <p><span class="fw-bold">Application Fee:</span> AUD {{ number_format($course->course_fees['application']) }} (Non-refundable)</p>
                    @endif
                  </div>
                </div>
              </div>

              
            </div>

            </div>
          </section>


          <section class="course-requirement-gray-bg tab-pane fade" id="entryreq">

              <div class="container py-4">
                <div class="row">
                  <div class="col-md-6 text-end">
                    <img src="/svg/Vector Header-07.svg" alt="Support illustration" class="img-fluid" style="max-height: 500px;">
                  </div>
                  <div class="col-md-6 pt-5">
                    <h1 class="color-darkblue mt-5 pt-5 fs-1" >Entry Requirements</h2>
                    <p class="fs-4">{{ $course->entry_req_desc }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <div class="course-requirement-box">

                      <div class="px-2 fs-5 mt-2 text-start px-5">
                        <div class="px-2">
                          {!! nl2br(e($course->entry_req_items)) !!}
                        </div>
                      </div>
                      <div class="px-2 py-2" style="background-color: #e7e7fb; @if (empty($course->entry_req_notes)) display: none; @endif" >
                        <div class="px-5">

                          <p class="color-darkblue fs-3"><svg viewBox="0 0 57.5 70.3599" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="57.500000" height="70.359863" fill="none" customFrame="#000000">
                            <path id="Path 9866" d="M57.4729 10.594C56.9702 8.58954 54.1041 8.21799 48.9012 7.54341C45.9188 7.15682 42.229 6.67472 38.0031 5.76295C38.4168 4.57968 38.8036 3.17442 37.9762 1.82261C37.4691 0.994823 36.5578 0.414288 35.3405 0.143371C34.31 -0.0876745 33.3888 -0.039187 32.6021 0.286789C31.2921 0.832273 30.3736 2.17006 30.2039 3.77745C30.1813 3.99082 30.1737 4.20902 30.1765 4.43174C27.0033 3.9917 24.1193 3.40751 21.7686 2.9295C16.6454 1.88615 13.82 1.31145 13.0192 3.1455C12.99 3.21196 12.9693 3.28118 12.9564 3.35231L12.3303 6.91336C9.8735 6.60754 7.84871 6.55745 7.26934 8.05398C7.24291 8.12175 7.22509 8.19302 7.21589 8.26429L0.0076149 63.2035C-0.0115172 63.3512 0.00557025 63.5016 0.0569786 63.6408C0.78356 65.594 3.584 65.8287 8.66774 66.2557C11.7277 66.5132 15.5359 66.8334 19.9571 67.6278C24.1268 68.015 28.4782 68.6617 32.2499 69.223C37.1327 69.9497 40.1355 70.3598 41.9903 70.3598C43.2098 70.3598 43.9336 70.1829 44.3685 69.8013C44.651 69.5532 44.8128 69.2209 44.8293 68.8573L45.085 66.9083C45.2122 66.9128 45.3345 66.9154 45.4512 66.9154C46.3981 66.9154 46.9993 66.7641 47.3908 66.4503C47.6839 66.2151 47.8593 65.89 47.8921 65.527L57.4864 10.9742C57.5085 10.8479 57.5035 10.718 57.4729 10.594ZM32.3369 6.20065C32.0545 5.34555 31.9511 4.61605 32.0196 3.96921C32.0938 3.26395 32.4752 2.31742 33.3032 1.9726C33.7324 1.79487 34.283 1.77705 34.9433 1.92456C35.3561 2.01671 36.0972 2.24995 36.4195 2.77615C36.8416 3.46505 36.6034 4.26232 36.162 5.4932C36.0173 5.89673 35.8675 6.31326 35.7648 6.72905C35.4924 7.83302 35.6856 8.7664 36.309 9.3554C36.7347 9.75908 37.2482 9.89534 37.7131 10.0179C39.1921 10.4115 41.2452 11.2493 42.6236 13C43.2133 13.7504 43.6469 14.6454 43.8715 15.5631C43.9007 15.722 43.9779 16.3797 44.0377 16.9771L24.5446 13.3017C24.6081 12.5858 24.9532 11.8027 25.4752 11.255C26.0778 10.6212 26.9678 10.1635 27.9818 9.96515C28.2514 9.91228 28.528 9.87519 28.8055 9.83809C29.7104 9.71541 30.7367 9.57652 31.6016 8.93333C32.1386 8.5317 32.4609 8.02624 32.5351 7.46921C32.5986 6.98711 32.4574 6.56285 32.3369 6.20065ZM22.7469 14.0968C22.7883 14.387 22.9423 14.6388 23.1819 14.8072C23.4114 14.9662 23.6561 15.0013 23.8243 15.0239L44.8392 18.9862C44.8977 18.9974 44.9562 19.0031 45.0146 19.0031C45.2622 19.0031 45.5046 18.9019 45.6786 18.7199C46.0287 18.3542 45.9534 17.1693 45.8344 16.2644L49.4346 16.8794L42.2742 57.3175L11.4111 52.0198L18.5679 11.6038L22.8702 12.3397C22.7187 12.929 22.6682 13.5306 22.7469 14.0968ZM8.53046 12.2803L11.9958 8.81503L11.7937 9.96398L8.38748 13.3702L8.53046 12.2803ZM2.36598 59.2607L3.36917 58.2575C3.37618 58.2933 3.37866 58.3301 3.38991 58.3651C3.48309 58.6533 3.62738 58.9039 3.81169 59.1292L2.1675 60.7734L2.36598 59.2607ZM3.61686 56.4608L2.59994 57.4779L2.89817 55.2048L4.03835 54.0646L3.61686 56.4608ZM4.36886 52.1847L3.13214 53.4219L3.41926 51.2332L4.77458 49.8782L4.36886 52.1847ZM5.10493 47.9993L3.65323 49.4507L3.90706 47.5156L5.46377 45.9591L5.10493 47.9993ZM5.79427 44.0797L4.14103 45.7328L4.37266 43.9671L6.12171 42.2179L5.79427 44.0797ZM6.45221 40.3383L4.60662 42.184L4.90499 39.9108L6.87356 37.9423L6.45221 40.3383ZM7.20406 36.0627L5.13896 38.128L5.42609 35.9395L7.60978 33.756L7.20406 36.0627ZM7.94028 31.8765L5.65991 34.1567L5.89169 32.3903L8.26772 30.0146L7.94028 31.8765ZM8.59822 28.1351L6.12565 30.6075L6.40168 28.5037L8.98831 25.9171L8.59822 28.1351ZM9.31882 24.0379L6.63565 26.7209L6.91168 24.6171L9.70891 21.8195L9.31882 24.0379ZM10.0394 19.9398L7.14564 22.834L7.27767 21.8281L10.2258 18.8798L10.0394 19.9398ZM10.5563 17.0007L7.51163 20.0453L7.72107 18.4489L10.8523 15.3176L10.5563 17.0007ZM11.1828 13.4381L7.95503 16.6661L8.15351 15.153L11.4632 11.8435L11.1828 13.4381ZM10.6697 8.59217L8.76442 10.4975L8.99868 8.71222C9.14312 8.62868 9.5484 8.52717 10.6697 8.59217ZM1.93353 62.5564L4.66358 59.8262C5.18365 60.1196 5.85021 60.3458 6.66135 60.5376L3.3994 63.7995C2.63441 63.6323 2.08118 63.4248 1.8554 63.1522L1.93353 62.5564ZM4.72083 64.0269L7.95065 60.7972C8.5306 60.8982 9.1662 60.9927 9.85583 61.087L6.69304 64.2498C5.99041 64.1827 5.3243 64.1105 4.72083 64.0269ZM8.11481 64.377L11.2236 61.2681C11.4391 61.2958 11.6537 61.3236 11.8783 61.3524C12.1905 61.3922 12.5156 61.4342 12.8434 61.4765L9.80004 64.5195C9.46735 64.4911 9.13728 64.4632 8.82036 64.4364C8.58376 64.4167 8.34863 64.3969 8.11481 64.377ZM39.0421 68.32L40.967 66.3949C41.367 66.4625 41.7419 66.5233 42.0975 66.5781L40.2328 68.4434C39.8583 68.409 39.4602 68.3674 39.0421 68.32ZM37.6624 68.1505C37.1604 68.0856 36.6433 68.0156 36.1162 67.9417L38.167 65.8909C38.6873 65.9885 39.1824 66.0799 39.6489 66.1642L37.6624 68.1505ZM34.7609 67.7483C34.2507 67.674 33.7391 67.5986 33.231 67.5233L35.3935 65.3611C35.9059 65.4602 36.3937 65.554 36.865 65.6441L34.7609 67.7483ZM31.8824 67.3229C31.5461 67.2728 31.2093 67.223 30.8662 67.1723L33.1164 64.922C33.445 64.9851 33.7727 65.0476 34.0956 65.11L31.8824 67.3229ZM29.5152 66.9743C28.8831 66.8827 28.2402 66.7922 27.5928 66.7019L29.9627 64.3322C30.5864 64.4455 31.2038 64.5598 31.8147 64.6749L29.5152 66.9743ZM26.2295 66.5161C25.5633 66.4273 24.8921 66.342 24.2181 66.2592L26.7103 63.767C27.3594 63.8739 28.0053 63.9841 28.6484 64.0972L26.2295 66.5161ZM22.8329 66.0955C22.1268 66.0153 21.4202 65.9404 20.7145 65.8715L23.3346 63.2517C24.0134 63.3458 24.694 63.4478 25.3747 63.5536L22.8329 66.0955ZM19.3619 65.6753C18.7166 65.5663 18.0842 65.4658 17.4673 65.3751L20.2213 62.6208C20.8166 62.734 21.4271 62.8577 22.0481 62.9894L19.3619 65.6753ZM16.1084 65.1852C15.4174 65.0939 14.7401 65.0091 14.0891 64.9356L16.9682 62.057C17.5954 62.155 18.2477 62.2652 18.9116 62.3817L16.1084 65.1852ZM12.6897 64.7861C12.1876 64.7352 11.6985 64.6884 11.2236 64.6448L14.2117 61.6573C14.6695 61.7194 15.1385 61.7845 15.6217 61.8545L12.6897 64.7861ZM41.6848 68.5399L43.2329 66.9917L43.0394 68.465C42.7647 68.5412 42.2915 68.5601 41.6848 68.5399ZM46.1207 65.0568C44.8934 65.3472 39.9979 64.3931 35.6542 63.5515C31.8997 62.8242 27.6453 62.0005 23.4599 61.4251C19.0102 60.4258 15.1849 59.9354 12.1101 59.5417C8.86885 59.1266 5.79676 58.733 5.20848 57.955L14.7186 3.87442C15.386 3.49426 18.5786 4.143 21.4049 4.71813C23.9153 5.22915 27.0265 5.85993 30.4744 6.31545C30.5214 6.48559 30.563 6.65208 30.6218 6.83026C30.664 6.95586 30.7338 7.16544 30.7252 7.2297C30.7217 7.24883 30.6754 7.34654 30.5106 7.46921C30.025 7.83068 29.3132 7.92692 28.5609 8.02901C28.2479 8.07107 27.9355 8.11386 27.6317 8.17374C26.2297 8.44685 25.026 9.07806 24.1525 9.99655C23.9692 10.1892 23.8071 10.4015 23.6555 10.6215L17.9811 9.65144C17.4819 9.56805 17.0155 9.89884 16.9286 10.3923L9.45362 52.6052C9.41083 52.844 9.46574 53.091 9.6055 53.289C9.74527 53.4882 9.9585 53.6227 10.1974 53.6642L42.8596 59.2706C42.9124 59.2792 42.9644 59.2836 43.0151 59.2836C43.45 59.2836 43.8352 58.972 43.9129 58.5297L51.3921 16.2934C51.4348 16.0544 51.3799 15.8077 51.2402 15.6088C51.1004 15.4105 50.8872 15.2757 50.6477 15.2342L45.4043 14.3385C45.0906 13.4462 44.6351 12.6048 44.0583 11.8714C42.3683 9.72476 39.9302 8.71923 38.1274 8.23946C37.905 8.18032 37.6517 8.11328 37.5641 8.02959C37.4953 7.96504 37.4582 7.77825 37.4801 7.51843C41.8384 8.4654 45.6171 8.95845 48.6665 9.35394C51.8492 9.76609 55.1345 10.1918 55.643 10.9143L46.1207 65.0568ZM22.2477 20.987L23.1626 19.4766C23.4243 19.0446 23.9863 18.909 24.4162 19.1687C24.8477 19.4303 24.9854 19.9915 24.7244 20.4224L23.0465 23.192C22.8832 23.4623 22.5908 23.6282 22.2749 23.6319C21.9625 23.6319 21.6622 23.4721 21.4947 23.2084L20.5077 21.6518C20.2374 21.2259 20.3645 20.6625 20.7902 20.3924C21.2152 20.1228 21.7792 20.2483 22.0496 20.6747L22.2477 20.987ZM25.1265 22.9224C25.2264 22.4296 25.702 22.1088 26.2019 22.2079C28.6079 22.693 31.8084 23.2839 34.9034 23.8559C38.0205 24.4321 41.2445 25.0275 43.6754 25.5174C44.1696 25.6174 44.4892 26.0986 44.39 26.5928C44.3022 27.0263 43.9215 27.3253 43.4958 27.3253C43.4366 27.3253 43.3753 27.3196 43.3147 27.3075C40.8979 26.8204 37.6816 26.2255 34.5717 25.6508C31.469 25.0782 28.2614 24.4848 25.8411 23.9977C25.3468 23.898 25.0274 23.4166 25.1265 22.9224ZM19.2276 28.1909C18.9573 27.7653 19.0829 27.2013 19.5079 26.9309C19.9336 26.6592 20.4971 26.7862 20.768 27.2112L20.9671 27.5249L21.9475 25.9069C22.2092 25.4746 22.7712 25.3385 23.2011 25.5989C23.6325 25.8604 23.7701 26.4217 23.5091 26.8525L21.7656 29.7292C21.6016 29.9995 21.31 30.1656 20.9941 30.1692C20.6817 30.1692 20.3816 30.0095 20.2139 29.7448L19.2276 28.1909ZM24.9211 28.7457C27.3315 29.2315 30.5384 29.8241 33.6397 30.3966C36.751 30.9715 39.9686 31.5663 42.3954 32.0547C42.8895 32.1546 43.2091 32.6358 43.1099 33.13C43.0223 33.5628 42.6414 33.8625 42.2157 33.8625C42.1565 33.8625 42.0959 33.8568 42.0346 33.8445C39.622 33.3589 36.4124 32.7655 33.3081 32.1921C30.1997 31.6176 26.9856 31.0243 24.5604 30.5358C24.0662 30.4358 23.7466 29.9545 23.8458 29.4603C23.9457 28.9677 24.4192 28.6467 24.9211 28.7457ZM17.8028 35.4469C17.5325 35.0213 17.6595 34.4579 18.0853 34.1876C18.5103 33.9181 19.0743 34.0434 19.3446 34.4699L19.5428 34.7824L20.3131 33.5109C20.5748 33.0788 21.1368 32.9431 21.5666 33.2028C21.9981 33.4646 22.1357 34.0257 21.8747 34.4564L20.3415 36.9874C20.1783 37.2575 19.8866 37.4237 19.5706 37.4273C19.2582 37.4273 18.958 37.2675 18.7905 37.0044L17.8028 35.4469ZM41.6851 40.3883C41.5974 40.8211 41.2166 41.1204 40.7908 41.1204C40.7317 41.1204 40.6711 41.1148 40.6097 41.1027C38.2036 40.6178 35.0032 40.0266 31.9083 39.4547C28.7912 38.8784 25.5672 38.2831 23.1363 37.7932C22.6421 37.6934 22.3227 37.212 22.4217 36.7177C22.5216 36.2243 23.0029 35.9062 23.497 36.0031C25.9138 36.4903 29.13 37.085 32.2399 37.6597C35.3427 38.2325 38.5503 38.8259 40.9706 39.3128C41.4648 39.4125 41.7842 39.894 41.6851 40.3883ZM21.0297 40.7569L19.2861 43.6343C19.122 43.9045 18.8304 44.0716 18.5145 44.0743C18.2021 44.0743 17.9012 43.9146 17.7343 43.6501L16.7473 42.0939C16.4771 41.6681 16.6041 41.1049 17.0298 40.8346C17.4541 40.5651 18.0188 40.6904 18.2891 41.117L18.4873 41.4294L19.4679 39.8114C19.7296 39.3792 20.291 39.2435 20.7217 39.5032C21.1531 39.7648 21.2907 40.326 21.0297 40.7569ZM40.6305 47.035C40.5427 47.468 40.162 47.7676 39.7362 47.7676C39.6769 47.7676 39.6163 47.7619 39.555 47.7497C37.1384 47.2627 33.9221 46.668 30.8115 46.093C27.7094 45.5205 24.5018 44.9271 22.0808 44.4402C21.5867 44.3403 21.2672 43.8589 21.3663 43.3647C21.4662 42.8721 21.9425 42.5516 22.4417 42.6502C24.8477 43.1351 28.0481 43.7263 31.1431 44.2982C34.2608 44.8745 37.4842 45.4699 39.9159 45.9598C40.4101 46.0597 40.7295 46.5411 40.6305 47.035Z" fill="rgb(0,0,0)" fill-rule="nonzero" />
                          </svg> Please Note:</p>
                          <p class="fs-5">{!! nl2br(e($course->entry_req_notes)) !!}</p>
                        </div>
                        
                      </div>

                      <div class="mx-5 px-5">
                        <a href="{{ $course->apply_link }}" class="btn btn-primary btn-lg footer-start-here-btn fs-4 mt-3 bg-darkblue">Start Here</a>
                      </div>

                    </div>
                  </div>
                  <div class="col-md-1"></div>
                </div>
              </div>
          </section>

          <section class="tab-pane fade" id="pathways" @if (empty($course->pathways)) style="display: none;" @endif>
            <div class="">

              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h2 class="color-darkblue pt-3 fs-1">Pathways</h2>
                    <p class="fs-4">{!! nl2br(e($course->pathways)) !!}</p>
                    <p class="py-2"> </p>
                  </div>
                  <!-- <div class="col-md-7">
                    <img src="images/agedcare2.png" alt="Support illustration" class="img-fluid course-pathway-img">
                  </div> -->
                </div>
              </div>

              @if (isset($course->employment_pathways) && !empty($course->employment_pathways))
              <div class="section-bg-course-pathway pb-3">
                <div class="row">
                  <div class="col-md-4"> </div>
                  
                  <div class="col-md-8 fs-4 ps-5">
                    <div class="px-5 course-emp-pathway">
                      <h2 class="color-darkblue fs-2 ms-2 mb-2">Employment Pathways:</h2>
                      
                      <p>
                        {!! nl2br(e($course->employment_pathways)) !!}
                      </p>
                      
                      <a href="{{ $course->apply_link }}" class="btn btn-primary btn-lg footer-start-here-btn fs-4 mt-3 mb-4 ms-3 bg-darkblue">Start Here</a>


                    </div>
                  </div>
                </div>
                <div class="row mb-4">
                  <p></p>
                </div>
              </div>
              @endif

            </div>
          </section>

          <section class="section-bg-course-structure py-5 tab-pane fade rounded-bottom" id="units" @if (empty($course->course_structure)) style="display: none;" @endif>

            <div class="container py-5">
              <div class="row mb-5">
                <h1 class="color-white fs-1">Course Structure:</h1>
                <p class="color-white fs-4">A total of {{ $course->total_core_units+$course->total_electives_units }} Units ({{ $course->total_core_units }} Core and {{ $course->total_electives_units }} electives) must be completed and deemed competent to achieve the 
                  qualification {{ $course->name }}. Participants who achieve competency in any unit/
                  s will receive a Statement of Attainment (provided USI is verified) for that unit/s without completing all {{ $course->total_core_units+$course->total_electives_units }} 
                  units in the qualification. Students completing all the required units of competency will attain full 
                  qualification.</p>
                <p class="mb-5"><br></p>
              </div>

              <!-- Core -->
              <div class="row mt-5 color-white">
                <div class="col-md-3 ps-0">
                  <span class="course-str-label bg-lightblue color-white text-start fs-3" > Core </span>
                </div>
                <div class="col-md-9">
                </div>
              </div>

              <div class="row mt-4 fs-3 color-white">
                <div class="col-md-3 ps-5">Code</div>
                <div class="col-md-9">Title</div>
              </div>

              @foreach ($coreUnits as $unit)      
              <div class="row pt-2 ps-3 fs-4">
                <div class="col-md-3 course-code1">{{ $unit['code'] }}</div>
                <div class="col-md-9 course-code2">{{ $unit['title'] }}</div>
              </div>
              @endforeach
              <div class="row">
                <p class="mb-2"></p>
              </div>


              <!-- Electives -->
              @if (count($electiveUnits) > 0)

              <div class="row mt-5 bg-white rounded-5 shadow">
                <div class="col-md-3 ps-0 pt-4 ps-2">
                  <span class="course-str-label bg-lightblue color-white text-start fs-3" > Electives </span>
                </div>
                <div class="col-md-9">
                </div>
                <div class="row mt-4 fs-3 color-lightblue">
                  <div class="col-md-3 ps-5">Code</div>
                  <div class="col-md-9">Title</div>
                </div>

                @foreach ($electiveUnits as $unit)      
                <div class="row mt-2 ps-3 fs-4">
                  <div class="col-md-3 course-code3">{{ $unit['code'] }}</div>
                  <div class="col-md-8 course-code4">{{ $unit['title'] }}</div>
                </div>
                @endforeach

                <p class="mt-2"></p>
              </div>
              @endif
          
              <div class="row ps-4">
                <p></p>

                <p class="text-center mt-4">The Performance Evidence in the units marked with a * include tasks which explicitly need to be assessed during the work placement. In order to be 
                  deemed competent in the unit of competency, the student must satisfactorily complete the workplace-based assessment. Should in case the 
                  workplace-based assessment is assessed as not-satisfactory, the student will not be able to achieve competency and the qualification cannot be 
                  issued. An estimate of 5 hours per unit is allocated for workplace assessment and is included in the work placement hours. Please refer to the 
                  individual assessment kit for further details. According to CHC implementation guide, the total number of hours may be applied collectively across 
                  all units of competency that include the requirement for workplace hours</p>
              </div>
            </div>
          </section>


          <section class="tab-pane fade" id="resources" >
            <div class="">
              <div class="container ">
                <div class="row">
                  <!-- <div class="col-md-1"></div> -->
                  <div class="col-md-7">
                    <p class="py-2"> </p>
                    <h2 class="fs-1 color-darkblue">Facilities and Resources</h2>
                    <div class="fs-5">
                      <p class="">Your classes will be conducted in modern classrooms and you will be able to access Wi-Fi. There are also areas for you to relax, as well as conduct additional study.</p>

                        <p>You will be provided with a Student Guide relevant to each unit in your course. Recommended textbooks are also available onsite for you to use and borrow if you wish. You may also purchase these textbooks if you require.</p>
                        
                        @if (isset($course->reference_textbooks) && !empty($course->reference_textbooks))
                        <p>The recommended textbook for this course is:</p>
                        
                        {!! nl2br(e($course->reference_textbooks)) !!}
                        @endif
                    </div>
                  </div>
                  <div class="col-md-5">
                    <p class="" style="height: 100px;"> </p>
                    <img src="/images/classroom1.jpg" alt="facilities" class="img-fluid rounded-5">
                  </div>
                  <p class="pb-5"> </p>
                </div>
              </div>
            </div>
          </section>

          <section class="tab-pane fade" id="rpl">
            <div class="">
              <div class="container ">
                <div class="row">
                  <!-- <div class="col-md-1"></div> -->
                  <div class="col-md-6 pe-0">
                    <img src="/images/agedcare3.png" alt="RPL illustration" class="img-fluid course-rpl-img" style="height: 120%;">
                  </div>
                  <div class="col-md-6 ps-0">
                    <p class="" style="height: 20px;"> </p>
                    <div class="bg-lightblue p-4 color-white course-rpl-box">
                      <h2 class="fs-1">Recognition of Prior Learning (RPL)/
                        Credit Transfer (CT)
                        </h2>
                      <p class="fs-4">Unity Skills College of Health will offer Recognition of Prior Learning (RPL)
                        and Credit Transfer (CT) to all prospective students 
                        through the enrolment process. Unity Skills College of Health has 
                        documented policies and procedures for these processes 
                        and students are provided details of how to apply for RPL or 
                        Credit Transfer through the enrolment process. For further 
                        details, please refer to RPL and Credit Transfer Policy and 
                        Procedure.</p>
                    </div>
                  </div>
                  <p class="pb-3"> </p>
                </div>
              </div>
            </div>
          </section>

          <section class="tab-pane fade" id="policy">
            <div class="">
              <div class="container ">
                <div class="row">
                  <!-- <div class="col-md-1"></div> -->
                  <div class="col-md-12">
                    <h2 class="fs-1 color-darkblue mt-3">Course Progress Policy</h2>
                    <div class="fs-5">
                      
                      <p>Unity Skills College of Health will monitor, records and assesses the course progress of each student for the course in which the student is enrolled. Course Progress Policy defines the requirements for student satisfactory course progress, the processes for monitoring, recording and assessing the student course progress and the processes for the Unity Skills College of Health intervention strategies for identifying and assisting students to achieve satisfactory course progress. The procedure sets out the processes for reporting student unsatisfactory course progress on PRISMS according to ESOS Act Section 19.</p>
                      <p>Unity Skills College of Health assess student’s progress at the end of each compulsory Term. The Term is 11 weeks long for all qualifications on CRICOS scope. While every attempt would be made to keep consistency in term weeks, however number of weeks in the defined term may also factor in the duration and the completion of units of competency, which enable Unity Skills College of Health to determine student participation and course progress in any given successfully completed term. One Term is considered the minimum length of time in which it is reasonable for the Administration Manager to make an assessment of a student’s course progress.</p>
                      <ul>
                      <li>Satisfactory course progress is achieved where a student successfully completes at least 50% of course requirements in a successfully completed Term.</li>
                      <li>Unsatisfactory progress is defined as not successfully completing or demonstrating competency in more than 50% of the course requirements in a successfully completed Term.</li>
                      <li>Course breach is defined as not successfully completing or demonstrating competency in more than 50% of the course requirements in TWO consecutives successfully completed Terms or NOT responding to intervention meeting invitation within 10 working days from the receiving the invitation.</li>
                      </ul>
                      <p>Unity Skills College of Health will also monitor overseas student attendance (but would not report, unless otherwise required) in the process of course progress monitoring and reporting. However overseas students must meet their visa obligations regarding attendance, wherever applicable.</p>
                      <p>You will also be provided with further information about course progress and attendance requirements at your orientation.  For further details, please refer to Course Progress Policy and Procedure.</p>

                    </div>
                  </div>
                  <p class="pb-5"> </p>
                </div>
                <div class="row">
                  <!-- <div class="col-md-1"></div> -->
                  <div class="col-md-12">
                    <h2 class="fs-1 color-darkblue">Further Information</h2>
                    <div class="fs-5">
                      <p>For all further details, please refer to International Student Handbook available on <a href="http://www.penfold.edu.au/">www.penfold.edu.au</a> for all related policies and procedures and other important information related to international students including Covid-19, living cost, life and study in Melbourne, etc.</p>
                      <p>Please contact the Administration Manager at <a href="mailto:info@unityskills.com.au">info@unityskills.com.au</a> or at +61 (03) 8637 0343 for further information.</p>
                    </div>
                  </div>
                  <p class="pb-5"> </p>
                </div>
              </div>
            </div>
          </section>

        </div>


      </div>
      <!-- right part -->
      <div class="col-md-2">
        <div class="bg-lightpurple course-right-card sticky-sidebar fs-5">
          <p class=""><b>Cricos Code:</b><br>
          {{ $course->cricos_code }}
          </p>
          <p class=""><b>Mode of Delivery:</b><br>
          {{ $course->mode_of_delivery }}
          </p>
          <p class=""><b>Duration:</b><br>
          {{ $course->duration }}
          </p>
          <p class=""><b>Next Intake:</b><br>
          February 2026
          </p>

          @if (isset($course->course_fees) && !empty($course->course_fees))
          <p><b>Tuition Fee:</b><br>
           AUD {{ number_format($course->course_fees['tuition']) }}</p>
          @endif

          <a href="/promotion" class="" style="color: crimson">Click here for Promotional Pricelist</a>

          <a href="{{ $course->apply_link }}" class="btn btn-primary btn-lg footer-start-here-btn fs-5 mt-3 bg-darkblue">Apply now -&gt;</a>
          
          <br>
          <a href="/contact" class="btn btn-primary btn-lg footer-start-here-btn fs-5 mt-3 bg-darkpurple">Enquery now -&gt;</a>
          
        </div>
      </div>
    </div>
  </div>


  <section class="py-5 mt-5 bg-lightpurple" >
    <div class="container">
      <h3 class="color-lightblue">Similar Courses</h3>
      <h2 class="color-darkblue fs-1">Explore more courses?</h2>


      <!-- Eg. Carousel -->
      <div id="similarCourseCarousel" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <!-- carousel current page -->
            <div class="row my-4">

              @foreach ($randomCourses1 as $courseItem)
              <div class="col-md-3">
                <div class="card course-pathway-card ps-1 py-2">
                  <div class="card-body">
                    <h5 class="card-title fs-4 color-lightblue">{{ $courseItem['code'] }}</h5>
                    <h6 class="card-title fs-3 color-darkblue course-pathway-card-body">{{ $courseItem['name'] }}</h6>
                    <a href="/course/{{ $courseItem['code'] }}" class="btn fs-4 bg-lightblue course-pathway-btn color-white mt-4">Learn More</a>
                  </div>
                </div>
              </div>
              @endforeach

            </div>
      
          </div>
          <div class="carousel-item">
            <div class="row my-4">

            @foreach ($randomCourses2 as $courseItem)
            <div class="col-md-3 pe-0">
              <div class="card course-pathway-card ps-1 py-2">
                <div class="card-body">
                  <h5 class="card-title fs-4 color-lightblue">{{ $courseItem['code'] }}</h5>
                  <h6 class="card-title fs-2 color-darkblue course-pathway-card-body">{{ $courseItem['name'] }}</h6>
                  <a href="/course/{{ $courseItem['code'] }}" class="btn fs-4 bg-lightblue course-pathway-btn color-white mt-4">Learn More</a>
                </div>
              </div>
            </div>
            @endforeach

            </div>
          </div>
          <div class="carousel-item">
            <div class="row my-4">

              @foreach ($randomCourses3 as $courseItem)
              <div class="col-md-3 pe-0">
                <div class="card course-pathway-card ps-1 py-2">
                  <div class="card-body">
                    <h5 class="card-title fs-4 color-lightblue">{{ $courseItem['code'] }}</h5>
                    <h6 class="card-title fs-2 color-darkblue course-pathway-card-body">{{ $courseItem['name'] }}</h6>
                    <a href="/course/{{ $courseItem['code'] }}" class="btn fs-4 bg-lightblue course-pathway-btn color-white mt-4">Learn More</a>
                  </div>
                </div>
              </div>
              @endforeach

            </div>

          </div>
          <div class="carousel-item">
            <div class="row my-4">

              @foreach ($randomCourses4 as $courseItem)
              <div class="col-md-3 pe-0">
                <div class="card course-pathway-card ps-1 py-2">
                  <div class="card-body">
                    <h5 class="card-title fs-4 color-lightblue">{{ $courseItem['code'] }}</h5>
                    <h6 class="card-title fs-2 color-darkblue course-pathway-card-body">{{ $courseItem['name'] }}</h6>
                    <a href="/course/{{ $courseItem['code'] }}" class="btn fs-4 bg-lightblue course-pathway-btn color-white mt-4">Learn More</a>
                  </div>
                </div>
              </div>
              @endforeach

            </div>

          </div>
        </div>

        <!-- Carousel Indicator Controls -->
        <div class="carousel-indicators custom-carousel-indicators custom-carousel-bg-white">
          <button type="button" data-bs-target="#similarCourseCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#similarCourseCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#similarCourseCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#similarCourseCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
      </div>
      

    </div>
  </section>


 <!-- footer -->
 @include('layouts.footer')

 </body>
</html>

