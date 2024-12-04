@extends('Admin.master')
@section('style')
    <!-- css files -->
    <link rel="stylesheet" href="{{ asset('DashBoard/css/plan.css') }}" />
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
                <img src="{{ asset('DashBoard/images/Untitled.jpg') }}" />
            </div>
        </div>
        <!-- end head -->
        <h3 class="title p-10 p-relative capatilize">Plan</h3>
        <div class="plan-page d-grid gap-20-10">
            <!-- start plan -->
            <div class="plan green bg-white p-20">
                <div class="top bg-green tx-c p-20">
                    <h2 class="m-0 c-white">Free</h2>
                    <div class="price c-white"><span>$</span>0.00</div>
                </div>
                <ul>
                    <li>
                        <i class="fa-solid fa-check fa-fw yes"></i>
                        <span>Access All Text Lessons</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-check fa-fw yes"></i>
                        <span>Access All Videos Lessons</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-check fa-fw yes"></i>
                        <span>Appear On Leaderboard</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-xmark fa-fw"></i>
                        <span>Browse Content Without Ads</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-xmark fa-fw"></i>
                        <span>Access All Assignments</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-xmark fa-fw"></i>
                        <span>Get Daily Prizes</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-xmark fa-fw"></i>
                        <span>Earn Certificate</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-xmark fa-fw"></i>
                        <span>1 GB Space For Hosting Files</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-xmark fa-fw"></i>
                        <span>Access Badge System</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                </ul>
                <a href="#" class="btn-shape bg-green c-white d-block w-fit">Join</a>
            </div>
            <!-- end plan -->
            <!-- start plan  -->
            <div class="plan blue bg-white p-20">
                <div class="top bg-blue tx-c p-20">
                    <h2 class="m-0 c-white">Basic</h2>
                    <div class="price c-white"><span>$</span>7.99</div>
                </div>
                <ul class="list-none p-0">
                    <li>
                        <i class="fa-solid fa-check fa-fw yes"></i>
                        <span>Access All Text Lessons</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-check fa-fw yes"></i>
                        <span>Access All Videos Lessons</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-check fa-fw yes"></i>
                        <span>Appear On Leaderboard</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-check fa-fw yes"></i>
                        <span>Browse Content Without Ads</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-check fa-fw yes"></i>
                        <span>Access All Assignments</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-check fa-fw yes"></i>
                        <span>Get Daily Prizes</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-check fa-fw yes"></i>
                        <span>Earn Certificate</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-xmark fa-fw"></i>
                        <span>1 GB Space For Hosting Files</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-xmark fa-fw"></i>
                        <span>Access Badge System</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                </ul>
                <a href="#" class="btn-shape bg-blue c-white d-block w-fit">Join</a>
            </div>
            <!-- end plan  -->
            <!-- start plan  -->
            <div class="plan orange bg-white p-20">
                <div class="top bg-orange tx-c p-20">
                    <h2 class="m-0 c-white">Premium</h2>
                    <div class="price c-white"><span>$</span>19.99</div>
                </div>
                <ul class="list-none p-0">
                    <li>
                        <i class="fa-solid fa-check fa-fw yes"></i>
                        <span>Access All Text Lessons</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-check fa-fw yes"></i>
                        <span>Access All Videos Lessons</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-check fa-fw yes"></i>
                        <span>Appear On Leaderboard</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-check fa-fw yes"></i>
                        <span>Browse Content Without Ads</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-check fa-fw yes"></i>
                        <span>Access All Assignments</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-check fa-fw yes"></i>
                        <span>Get Daily Prizes</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-check fa-fw yes"></i>
                        <span>Earn Certificate</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-check fa-fw yes"></i>
                        <span>1 GB Space For Hosting Files</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-check fa-fw yes"></i>
                        <span>Access Badge System</span>
                        <i class="fa-solid fa-circle-info help"></i>
                    </li>
                </ul>
                <p class="c-gray m-0 tx-c">This Is Your Current Plan</p>
            </div>
            <!-- end plan  -->
        </div>
    </div>
@endsection
