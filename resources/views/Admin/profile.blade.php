@extends('Admin.master')
@section('style')
   <!-- css files -->
   <link rel="stylesheet" href="{{asset('DashBoard/css/profile.css')}}" />
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
            <img src="{{asset('DAshBoard/images/Untitled.jpg')}}" />
        </div>
        </div>
        <!-- end head -->
        <h3 class="title p-10 p-relative capatilize">profile</h3>
        <div class="profile-page m-20 d-grid gap-20-10">
        <!-- start personal data -->
        <div
            class="personal-data d-flex align-center p-20 rad-6 bg-white block-mobile"
        >
            <div class="name">
            <img src="{{asset('DAshBoard/images/Untitled.jpg')}}" alt="personal image" />
            <h2 class="m-0 mt-10 fsz-20 capatilize">Israa Osama</h2>
            <p class="c-gray fsz-15 mt-5 mb-10">level 20</p>
            <div class="level rad-6 p-relative bg-eee">
                <span style="width: 70%"></span>
            </div>
            <div class="rate">
                <i class="fa-solid fa-star c-orange fs-13"></i>
                <i class="fa-solid fa-star c-orange fs-13"></i>
                <i class="fa-solid fa-star c-orange fs-13"></i>
                <i class="fa-solid fa-star c-orange fs-13"></i>
                <i class="fa-solid fa-star c-orange fs-13"></i>
            </div>
            <p class="c-gray fsz-13 mt-5 mb-10">5M rating</p>
            </div>
            <div class="personal-info">
            <!-- start info row -->
            <div class="info-row d-flex-compo">
                <p class="fsz-13 c-gray capatilize m-0 w-full">
                general information
                </p>
                <div class="fsz-13">
                <span class="capatilize c-gray">full name:</span>
                <span class="capatilize">israa osama</span>
                </div>
                <div class="fsz-13">
                <span class="capatilize c-gray">gender:</span>
                <span class="capatilize">female</span>
                </div>
                <div class="fsz-13">
                <span class="capatilize c-gray">country:</span>
                <span class="capatilize">palestine</span>
                </div>
                <div>
                <label>
                    <input class="toggle-checkbox" type="checkbox" checked />
                    <div class="toggle-switch"></div>
                </label>
                </div>
            </div>
            <!-- end info row -->
            <!-- start info row -->
            <div class="info-row d-flex-compo">
                <p class="fsz-13 c-gray capatilize m-0 w-full">
                general information
                </p>
                <div class="fsz-13">
                <span class="capatilize c-gray">full name:</span>
                <span class="capatilize">israa osama</span>
                </div>
                <div class="fsz-13">
                <span class="capatilize c-gray">gender:</span>
                <span class="capatilize">female</span>
                </div>
                <div class="fsz-13">
                <span class="capatilize c-gray">country:</span>
                <span class="capatilize">palestine</span>
                </div>
                <div>
                <label>
                    <input class="toggle-checkbox" type="checkbox" />
                    <div class="toggle-switch"></div>
                </label>
                </div>
            </div>
            <!-- end info row -->
            <!-- start info row -->
            <div class="info-row d-flex-compo">
                <p class="fsz-13 c-gray capatilize m-0 w-full">
                general information
                </p>
                <div class="fsz-13">
                <span class="capatilize c-gray">full name:</span>
                <span class="capatilize">israa osama</span>
                </div>
                <div class="fsz-13">
                <span class="capatilize c-gray">gender:</span>
                <span class="capatilize">female</span>
                </div>
                <div class="fsz-13">
                <span class="capatilize c-gray">country:</span>
                <span class="capatilize">palestine</span>
                </div>
                <div>
                <label>
                    <input class="toggle-checkbox" type="checkbox" checked />
                    <div class="toggle-switch"></div>
                </label>
                </div>
            </div>
            <!-- end info row -->
            <!-- start info row -->
            <div class="info-row d-flex-compo">
                <p class="fsz-13 c-gray capatilize m-0 w-full">
                general information
                </p>
                <div class="fsz-13">
                <span class="capatilize c-gray">full name:</span>
                <span class="capatilize">israa osama</span>
                </div>
                <div class="fsz-13">
                <span class="capatilize c-gray">gender:</span>
                <span class="capatilize">female</span>
                </div>
                <div class="fsz-13">
                <span class="capatilize c-gray">country:</span>
                <span class="capatilize">palestine</span>
                </div>
                <div>
                <label>
                    <input class="toggle-checkbox" type="checkbox" />
                    <div class="toggle-switch"></div>
                </label>
                </div>
            </div>
            <!-- end info row -->
            </div>
        </div>
        <!-- end personal data -->
        <!-- start other data -->
        <div class="other-data d-flex gap-20">
            <!-- start skills -->
            <div class="skills bg-white p-20 rad-6">
            <h2 class="m-0 fsz-20 capatilize">my skills</h2>
            <p class="mt-5 mb-20 c-gray fsz-15 capatilize">
                complte skills list
            </p>
            <ul class="m-0 tx-c-mobile">
                <li>
                <span>HTML</span>
                <span>MAML</span>
                <span>Puges</span>
                </li>
                <li>
                <span>CSS</span>
                <span>SASS</span>
                <span>Styled</span>
                </li>
                <li>
                <span>JavaScript</span>
                <span>Typescript</span>
                </li>
                <li>
                <span>PHP</span>
                <span>Laravel</span>
                </li>
                <li>
                <span>Jest</span>
                <span>Jasmine</span>
                </li>
                <li>
                <span>Vuejs</span>
                <span>Reactjs</span>
                </li>
            </ul>
            </div>
            <!-- end skills -->
            <!-- start activities -->
            <div class="activities bg-white p-20 rad-6">
            <h2 class="m-0 fsz-20 capatilize">my activities</h2>
            <p class="mb-20 mt-5 c-gray fsz-15 capatilize">
                latest activities done by the user
            </p>
            <div class="row d-flex-compo">
                <div class="icon">
                <img src="{{asset('DashBoard/images/activity-01.png')}}" alt="" />
                </div>
                <div class="info">
                <p class="m-0 fsz-15 capatilize">Store</p>
                <p class="c-gray fsz-13 mt-5 mb-0">
                    Bought The Typescript Course
                </p>
                </div>
                <div class="date">
                <p class="fsz-13 m-0">18:10</p>
                <p class="c-gray capatilize fsz-13 m-0">yesterday</p>
                </div>
            </div>
            <div class="row d-flex-compo">
                <div class="icon">
                <img src="{{asset('DashBoard/images/activity-02.png')}}" alt="" />
                </div>
                <div class="info">
                <p class="m-0 fsz-15 capatilize">Academy</p>
                <p class="c-gray fsz-13 mt-5 mb-0">Got The PHP Certificate</p>
                </div>
                <div class="date">
                <p class="fsz-13 m-0">18:10</p>
                <p class="c-gray capatilize fsz-13 m-0">yesterday</p>
                </div>
            </div>
            <div class="row d-flex-compo">
                <div class="icon">
                <img src="{{asset('DashBoard/images/activity-03.png')}}" alt="" />
                </div>
                <div class="info">
                <p class="m-0 fsz-15 capatilize">Badges</p>
                <p class="c-gray fsz-13 mt-5 mb-0">
                    Unlocked The 10 Skills Badge
                </p>
                </div>
                <div class="date">
                <p class="fsz-13 m-0">18:10</p>
                <p class="c-gray capatilize fsz-13 m-0">yesterday</p>
                </div>
            </div>
            <div class="row d-flex-compo">
                <div class="icon">
                <img src="{{asset('DashBoard/images/activity-01.png')}}" alt="" />
                </div>
                <div class="info">
                <p class="m-0 fsz-15 capatilize">Store</p>
                <p class="c-gray fsz-13 mt-5 mb-0">
                    Bought The Typescript Course
                </p>
                </div>
                <div class="date">
                <p class="fsz-13 m-0">18:10</p>
                <p class="c-gray capatilize fsz-13 m-0">yesterday</p>
                </div>
            </div>
            </div>
            <!-- end activities -->
        </div>
        <!-- end other data -->
        </div>
    </div>

@endsection

