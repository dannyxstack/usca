<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

  @include('layouts.topbar')

  <section class="py-5 bg-white">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-md-8 text-center py-5">
          <h1 class="color-darkblue">Course is not yet open.</h1>
          <p class="fs-4 color-darkgrey mt-4">
            {{ $course->code ?? '' }} {{ $course->name ?? '' }}
          </p>
          <a href="/all-courses" class="btn btn-primary btn-lg footer-start-here-btn fs-4 mt-3 bg-darkblue">
            View All Courses
          </a>
        </div>
      </div>
    </div>
  </section>

  @include('layouts.footer')

</body>
</html>
