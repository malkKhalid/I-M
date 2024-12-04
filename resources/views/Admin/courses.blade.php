@extends('Admin.master')
@section('style')
        <!-- css files -->
        <link rel="stylesheet" href="{{asset('DashBoard/css/courses.css')}}" />
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
    <h3 class="title p-10 p-relative capatilize">Courses</h3>
    <div class="courses-page m-20 d-grid gap-20-10">
        <!-- srart course -->
        <div class="course bg-white rad-6 p-relative">
        <img src="{{asset('DashBoard/images/course-01.jpg')}}" alt="" class="cover" />
        <img src="{{asset('DashBoard/images/team-01.png')}}" alt="" class="instrctor" />
        <div class="p-20 tx-c">
            <h4 class="m-0 capatilize">mastaring web design</h4>
            <p class="desc c-gray mt-15 fsz-15">
            Master The Art Of Web Designing And Mocking, Prototyping And
            Creating Web Design Architecture
            </p>
        </div>
        <div class="info p-15 p-relative d-flex-compo">
            <span class="co-title bg-blue btn-shape c-white"
            >Course info</span
            >
            <span class="c-gray">
            <i class="fa-regular fa-user"></i>
            950
            </span>
            <span class="c-gray">
            <i class="fa-solid fa-dollar-sign"></i>
            165
            </span>
        </div>
        </div>
        <!-- end course -->
        <!-- srart course -->
        <div class="course bg-white rad-6 p-relative">
        <img src="{{asset('DashBoard/images/course-02.jpg')}}" alt="" class="cover" />
        <img src="{{asset('DashBoard/images/team-02.png')}}" alt="" class="instrctor" />
        <div class="p-20 tx-c">
            <h4 class="m-0 capatilize">Data Structure And Algorithms</h4>
            <p class="desc c-gray mt-15 fsz-15">
            Master The Art Of Data Strcuture And Famous Algorithms Like
            Sorting, Dividing And Conquering
            </p>
        </div>
        <div class="info p-15 p-relative d-flex-compo">
            <span class="co-title bg-blue btn-shape c-white"
            >Course info</span
            >
            <span class="c-gray">
            <i class="fa-regular fa-user"></i>
            500
            </span>
            <span class="c-gray">
            <i class="fa-solid fa-dollar-sign"></i>
            100
            </span>
        </div>
        </div>
        <!-- end course -->
        <!-- srart course -->
        <div class="course bg-white rad-6 p-relative">
        <img src="{{asset('DashBoard/images/course-03.jpg')}}" alt="" class="cover" />
        <img src="{{asset('DashBoard/images/team-03.png')}}" alt="" class="instrctor" />
        <div class="p-20 tx-c">
            <h4 class="m-0 capatilize">Responsive Web Design</h4>
            <p class="desc c-gray mt-15 fsz-15">
            Mastering Responsive Web Design And Media Queries And Know
            Everything About Breakpoints
            </p>
        </div>
        <div class="info p-15 p-relative d-flex-compo">
            <span class="co-title bg-blue btn-shape c-white"
            >Course info</span
            >
            <span class="c-gray">
            <i class="fa-regular fa-user"></i>
            1K
            </span>
            <span class="c-gray">
            <i class="fa-solid fa-dollar-sign"></i>
            150
            </span>
        </div>
        </div>
        <!-- end course -->
        <!-- srart course -->
        <div class="course bg-white rad-6 p-relative">
        <img src="{{asset('DashBoard/images/course-04.jpg')}}" alt="" class="cover" />
        <img src="{{asset('DashBoard/images/team-04.png')}}" alt="" class="instrctor" />
        <div class="p-20 tx-c">
            <h4 class="m-0 capatilize">Mastering Python</h4>
            <p class="desc c-gray mt-15 fsz-15">
            Mastering Python To Prepare For Data Science And AI And
            Automating Things in Your Life
            </p>
        </div>
        <div class="info p-15 p-relative d-flex-compo">
            <span class="co-title bg-blue btn-shape c-white"
            >Course info</span
            >
            <span class="c-gray">
            <i class="fa-regular fa-user"></i>
            950
            </span>
            <span class="c-gray">
            <i class="fa-solid fa-dollar-sign"></i>
            165
            </span>
        </div>
        </div>
        <!-- end course -->
        <!-- srart course -->
        <div class="course bg-white rad-6 p-relative">
        <img src="{{asset('DashBoard/images/course-05.jpg')}}" alt="" class="cover" />
        <img src="{{asset('DashBoard/images/team-05.png')}}" alt="" class="instrctor" />
        <div class="p-20 tx-c">
            <h4 class="m-0 capatilize">PHP Examples</h4>
            <p class="desc c-gray mt-15 fsz-15">
            PHP Tutorials And Examples And Practice On Web Application And
            Connecting With Databases
            </p>
        </div>
        <div class="info p-15 p-relative d-flex-compo">
            <span class="co-title bg-blue btn-shape c-white"
            >Course info</span
            >
            <span class="c-gray">
            <i class="fa-regular fa-user"></i>
            850
            </span>
            <span class="c-gray">
            <i class="fa-solid fa-dollar-sign"></i>
            120
            </span>
        </div>
        </div>
        <!-- end course -->
        <!-- srart course -->
        <div class="course bg-white rad-6 p-relative">
        <img src="{{asset('DashBoard/images/course-01.jpg')}}" alt="" class="cover" />
        <img src="{{asset('DashBoard/images/team-04.png')}}" alt="" class="instrctor" />
        <div class="p-20 tx-c">
            <h4 class="m-0 capatilize">mastaring web design</h4>
            <p class="desc c-gray mt-15 fsz-15">
            Master The Art Of Web Designing And Mocking, Prototyping And
            Creating Web Design Architecture
            </p>
        </div>
        <div class="info p-15 p-relative d-flex-compo">
            <span class="co-title bg-blue btn-shape c-white"
            >Course info</span
            >
            <span class="c-gray">
            <i class="fa-regular fa-user"></i>
            950
            </span>
            <span class="c-gray">
            <i class="fa-solid fa-dollar-sign"></i>
            165
            </span>
        </div>
        </div>
        <!-- end course -->
    </div>
    </div>

@endsection
