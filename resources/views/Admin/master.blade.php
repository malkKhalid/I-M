<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- css files -->
    <link rel="stylesheet" href="{{asset('DashBoard/css/framwork.css')}}" />
    <link rel="stylesheet" href="{{asset('DashBoard/css/main.css')}}" />
    <!-- font awasome for icons  -->
    {{-- <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    /> --}}
    <link rel="stylesheet" href="{{asset('fontawesome/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('DashBoard/css/all.min.css')}}" />
    @yield('style')
    <link rel="stylesheet" href="{{asset('DashBoard/css/node_modules/normalize.css/')}}" />
    <!-- end css files -->

    <title>Document</title>
  </head>
  <body>
    <div class="page d-flex p-relative">
      <!-- start sidebar -->
      <div class="sidebar bg-white p-20 p-relative">
        <a href="{{route('home')}}"><h3 class="p-relative tx-c mt-0">Elzero</h3></a>
        <ul>
          <li>
            <a
              href="{{route('admin.index')}}"
              class="{{( request()->url() == route('admin.index')) ? 'active' : ''}} d-flex align-center fsz-15 c-black rad-6 p-10"
            >
              <i class="fa-regular fa-chart-bar fa-fw"></i>
              <span class="hide-mobile">Dashboard</span>
            </a>
          </li>
          <li>
            <a
              href="{{route('admin.settings')}}"
              class="{{( request()->url() == route('admin.settings')) ? 'active' : ''}} d-flex align-center fsz-15 c-black rad-6 p-10"
            >
              <i class="fa-solid fa-gear fa-fw"></i>
                <span class="hide-mobile">settings</span>
            </a>
          </li>
          <li>
            <a
              href="{{route('admin.profile')}}"
              class="{{( request()->url() == route('admin.profile')) ? 'active' : ''}} d-flex align-center fsz-15 c-black rad-6 p-10"
            >
              <i class="fa-regular fa-user fa-fw"></i>
             <span class="hide-mobile">profile</span></a>

          </li>
          <li>
            <a
              href="{{route('admin.projects')}}"
              class="{{( request()->url() == route('admin.projects')) ? 'active' : ''}} d-flex align-center fsz-15 c-black rad-6 p-10"
            >
              <i class="fa-solid fa-diagram-project fa-fw"></i>
              <span class="hide-mobile">projects</span>
            </a>
          </li>
          <li>
            <a
              href="{{route('admin.courses')}}"
              class="{{( request()->url() == route('admin.courses')) ? 'active' : ''}} d-flex align-center fsz-15 c-black rad-6 p-10"
            >
              <i class="fa-solid fa-graduation-cap fa-fw"></i>
              <span class="hide-mobile">Courses</span>
            </a>
          </li>
          <li>
            <a
              href="{{route('admin.friends')}}"
              class="{{( request()->url() == route('admin.friends')) ? 'active' : ''}} d-flex align-center fsz-15 c-black rad-6 p-10"
            >
              <i class="fa-regular fa-circle-user fa-fw"></i>
              <span class="hide-mobile">Freinds</span>
            </a>
          </li>
          <li>
            <a
              href="{{route('admin.files')}}"
              class="{{( request()->url() == route('admin.files')) ? 'active' : ''}} d-flex align-center fsz-15 c-black rad-6 p-10"
            >
              <i class="fa-regular fa-file fa-fw"></i>
              <span class="hide-mobile">Files</span>
            </a>
          </li>
          <li>
            <a
              href="{{route('admin.plan')}}"
              class="{{( request()->url() == route('admin.plan')) ? 'active' : ''}} d-flex align-center fsz-15 c-black rad-6 p-10"
            >
              <i class="fa-regular fa-credit-card fa-fw"></i>
              <span class="hide-mobile">Plans</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- end sidebar -->

      @yield('content')
    </div>
    <script src="{{asset('fontawesome/all.js')}}"></script>

  </body>
</html>
