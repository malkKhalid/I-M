@extends('Admin.master')
@section('style')
   <!-- css files -->
   <link rel="stylesheet" href="{{asset('DashBoard/css/projects.css')}}" />
   <!-- end css files -->
@endsection
@section('content')
<div class="content w-full">
    <!-- start head -->
    <div class="head d-flex-compo bg-white p-20">
      <div class="search p-relative">
        <input type="search" placeholder="Type a Keyword" class="p-10" />
      </div>
      <div class="icons d-flex align-center">
        <span class="notification p-relative">
          <i class="fa-regular fa-bell fa-lg"></i>
        </span>
        <img src="{{asset('DashBoard/images/Untitled.jpg')}}" />
      </div>
    </div>
    <!-- end head -->
    <h3 class="title p-10 p-relative capatilize">Projects</h3>
    <div class="projects-page m-20 d-grid gap-20-10">
      <!-- start project  -->
      <div class="project bg-white p-20 rad-6 p-relative">
        <span class="date fsz-13 c-gray">24/11/2024</span>
        <h4 class="m-0">Israa Dashboard</h4>
        <p class="mt-10 mb-10 fsz-13">project discription</p>
        <div class="team">
          <a href="#"><img src="{{asset('DashBoard/images/team-01.png')}}" alt="" /></a>
          <a href="#"><img src="{{asset('DashBoard/images/team-02.png')}}" alt="" /></a>
          <a href="#"><img src="{{asset('DashBoard/images/team-03.png')}}" alt="" /></a>
          <a href="#"><img src="{{asset('DashBoard/images/team-04.png')}}" alt="" /></a>
        </div>
        <div class="techs d-flex">
          <span class="fsz-13 rad-6 bg-eee btn-shape capatilize"
            >Programming</span
          >
          <span class="fsz-13 rad-6 bg-eee btn-shape capatilize"
            >Design</span
          >
          <span class="fsz-13 rad-6 bg-eee btn-shape capatilize"
            >Hosting</span
          >
          <span class="fsz-13 rad-6 bg-eee btn-shape capatilize"
            >Marketing</span
          >
        </div>
        <div class="info d-flex-compo">
          <div class="progress bg-eee">
            <span class="bg-red" style="width: 70%"></span>
          </div>
          <div class="fsz-13 c-gray">
            <i>$</i>
            2500
          </div>
        </div>
      </div>
      <!-- end project  -->
      <!-- start project  -->
      <div class="project bg-white p-20 rad-6 p-relative">
        <span class="date fsz-13 c-gray">30/11/2024</span>
        <h4 class="m-0">E-Commerce</h4>
        <p class="mt-10 mb-10 fsz-13">project discription</p>
        <div class="team">
          <a href="#"><img src="{{asset('DashBoard/images/team-01.png')}}" alt="" /></a>
          <a href="#"><img src="{{asset('DashBoard/images/team-03.png')}}" alt="" /></a>
        </div>
        <div class="techs d-flex">
          <span class="fsz-13 rad-6 bg-eee btn-shape capatilize"
            >Programming</span
          >
          <span class="fsz-13 rad-6 bg-eee btn-shape capatilize"
            >Design</span
          >
          <span class="fsz-13 rad-6 bg-eee btn-shape capatilize"
            >Hosting</span
          >
          <span class="fsz-13 rad-6 bg-eee btn-shape capatilize"
            >Marketing</span
          >
        </div>
        <div class="info d-flex-compo">
          <div class="progress bg-eee">
            <span class="bg-green" style="width: 90%"></span>
          </div>
          <div class="fsz-13 c-gray">
            <i>$</i>
            2500
          </div>
        </div>
      </div>
      <!-- end project  -->
      <!-- start project  -->
      <div class="project bg-white p-20 rad-6 p-relative">
        <span class="date fsz-13 c-gray">30/10/2024</span>
        <h4 class="m-0 capatilize">Ahmad web page</h4>
        <p class="mt-10 mb-10 fsz-13">project discription</p>
        <div class="team">
          <a href="#"><img src="{{asset('DashBoard/images/team-02.png')}}" alt="" /></a>
          <a href="#"><img src="{{asset('DashBoard/images/team-03.png')}}" alt="" /></a>
          <a href="#"><img src="{{asset('DashBoard/images/team-04.png')}}" alt="" /></a>
        </div>
        <div class="techs d-flex">
          <span class="fsz-13 rad-6 bg-eee btn-shape capatilize"
            >Programming</span
          >
          <span class="fsz-13 rad-6 bg-eee btn-shape capatilize"
            >Design</span
          >
          <span class="fsz-13 rad-6 bg-eee btn-shape capatilize"
            >Hosting</span
          >
        </div>
        <div class="info d-flex-compo">
          <div class="progress bg-eee">
            <span class="bg-red" style="width: 100%"></span>
          </div>
          <div class="fsz-13 c-gray">
            <i>$</i>
            400
          </div>
        </div>
      </div>
      <!-- end project  -->
      <!-- start project  -->
      <div class="project bg-white p-20 rad-6 p-relative">
        <span class="date fsz-13 c-gray">2/2/2024</span>
        <h4 class="m-0 capatilize">Fuad Dashboard</h4>
        <p class="mt-10 mb-10 fsz-13">project discription</p>
        <div class="team">
          <a href="#"><img src="{{asset('DashBoard/images/team-01.png')}}" alt="" /></a>
          <a href="#"><img src="{{asset('DashBoard/images/team-04.png')}}" alt="" /></a>
        </div>
        <div class="techs d-flex">
          <span class="fsz-13 rad-6 bg-eee btn-shape capatilize"
            >Programming</span
          >
          <span class="fsz-13 rad-6 bg-eee btn-shape capatilize"
            >Design</span
          >
          <span class="fsz-13 rad-6 bg-eee btn-shape capatilize"
            >Hosting</span
          >
          <span class="fsz-13 rad-6 bg-eee btn-shape capatilize"
            >Marketing</span
          >
        </div>
        <div class="info d-flex-compo">
          <div class="progress bg-eee">
            <span class="bg-blue" style="width: 100%"></span>
          </div>
          <div class="fsz-13 c-gray">
            <i>$</i>
            2300
          </div>
        </div>
      </div>
      <!-- end project  -->
      <!-- start project  -->
      <div class="project bg-white p-20 rad-6 p-relative">
        <span class="date fsz-13 c-gray">24/11/2024</span>
        <h4 class="m-0 capatilize">school web page</h4>
        <p class="mt-10 mb-10 fsz-13">project discription</p>
        <div class="team">
          <a href="#"><img src="{{asset('DashBoard/images/team-02.png')}}" alt="" /></a>
          <a href="#"><img src="{{asset('DashBoard/images/team-03.png')}}" alt="" /></a>
          <a href="#"><img src="{{asset('DashBoard/images/team-04.png')}}" alt="" /></a>
        </div>
        <div class="techs d-flex">
          <span class="fsz-13 rad-6 bg-eee btn-shape capatilize"
            >Programming</span
          >
          <span class="fsz-13 rad-6 bg-eee btn-shape capatilize"
            >Design</span
          >
          <span class="fsz-13 rad-6 bg-eee btn-shape capatilize"
            >Hosting</span
          >
          <span class="fsz-13 rad-6 bg-eee btn-shape capatilize"
            >Marketing</span
          >
        </div>
        <div class="info d-flex-compo">
          <div class="progress bg-eee">
            <span class="bg-red" style="width: 60%"></span>
          </div>
          <div class="fsz-13 c-gray">
            <i>$</i>
            2500
          </div>
        </div>
      </div>
      <!-- end project  -->
    </div>
</div>
@endsection


