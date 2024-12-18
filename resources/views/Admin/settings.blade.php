
@extends('Admin.master')
@section('style')
        <!-- css files -->
        <link rel="stylesheet" href="{{asset('DashBoard/css/setting.css')}}" />
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
        <h3 class="title p-10 p-relative capatilize">settings</h3>
        <!-- start settting widgets -->
        <div class="setting-control m-20 d-grid gap-20-10">
          <!-- start site control -->
          <div class="site-control p-20 bg-white rad-6">
            <h2 class="m-0 fsz-20 capatilize">Site Control</h2>
            <p class="c-gray fsz-15 mt-5">
              control the website if there is maintainance
            </p>
            <div class="d-flex-compo">
              <div>
                <span class="capatilize fsz-15">Website control</span>
                <p class="c-gray fsz-13 m-0 mt-5 mb-10">
                  open/close website and type the reason
                </p>
              </div>
              <div>
                <label>
                  <input class="toggle-checkbox" type="checkbox" checked />
                  <div class="toggle-switch"></div>
                </label>
              </div>
            </div>
            <textarea
              class="close-message rad-6 p-10 mt-5 d-block w-full"
              placeholder="type the reason "
            ></textarea>
          </div>
          <!-- end site control -->
          <!-- start general info -->
          <div class="general-info bg-white p-20 rad-6">
            <h2 class="fsz-20 m-0 capatilize">General Iinfo</h2>
            <p class="c-gray fsz-15 m-0 mt-5">
              General info about your account
            </p>
            <div class="gi-row mt-10 mb-10">
              <p class="c-gray fsz-15 m-0 capatilize">First Name</p>
              <input
                type="text"
                placeholder="First Name "
                class="mt-5 w-full p-7 b-eee rad-6"
              />
            </div>
            <div class="gi-row mt-10 mb-10">
              <p class="c-gray fsz-15 m-0 capatilize">last Name</p>
              <input
                type="text"
                placeholder="Last Name "
                class="mt-5 w-full p-7 b-eee rad-6"
              />
            </div>
            <div class="gi-row mt-10 mb-10">
              <p class="c-gray fsz-15 m-0 capatilize">email</p>
              <input
                type="email"
                placeholder="osama@gmail.come "
                class="mt-5 w-full p-7 b-eee rad-6"
              />
              <button class="btn-shape bg-blue c-white b-none pointer">
                change
              </button>
            </div>
          </div>
          <!-- end general info -->
          <!-- start sec info -->
          <div class="info bg-white p-20 rad-6">
            <h2 class="m-0 fsz-20 capatilize">security info</h2>
            <p class="c-gray fsz-15 m-0 mt-5">
              security information about your account
            </p>
            <div class="info-row d-flex-compo p-10">
              <div>
                <p class="fsz-15 m-0 capatilize">password</p>
                <p class="fsz-13 c-gray m-0 mt-5">
                  last password changed on 12-11-2023
                </p>
              </div>
              <span class="btn-shape c-white bg-blue pointer">change</span>
            </div>
            <div class="info-row d-flex-compo p-10">
              <div>
                <p class="fsz-15 m-0 capatilize">two factor authentication</p>
                <p class="fsz-13 c-gray m-0 mt-5">
                  Enable/Desable two factor authentication
                </p>
              </div>
              <div>
                <label>
                  <input class="toggle-checkbox" type="checkbox" checked />
                  <div class="toggle-switch"></div>
                </label>
              </div>
            </div>
            <div class="info-row d-flex-compo p-10">
              <div>
                <p class="fsz-15 m-0 capatilize">devices</p>
                <p class="fsz-13 c-gray m-0 mt-5">check the usage devices</p>
              </div>
              <span class="btn-shape bg-eee pointer">Devices</span>
            </div>
          </div>
          <!-- end sec info -->
          <!-- start social info -->
          <div class="social-info bg-white p-20 rad-6">
            <h2 class="m-0 capatilize fsz-20">social information</h2>
            <p class="m-0 fsz-15 c-gray mt-5">
              social information about your account
            </p>
            <div class="social-app d-flex align-center m-10">
              <i class="fa-brands fa-twitter center-flex c-grey"></i>
              <input
                class="w-full"
                type="text"
                placeholder="Twitter Username"
              />
            </div>
            <div class="social-app d-flex align-center m-10">
              <i class="fa-brands fa-facebook-f center-flex c-grey"></i>
              <input
                class="w-full"
                type="text"
                placeholder="Twitter Username"
              />
            </div>
            <div class="social-app d-flex align-center m-10">
              <i class="fa-brands fa-linkedin center-flex c-grey"></i>
              <input
                class="w-full"
                type="text"
                placeholder="Twitter Username"
              />
            </div>
            <div class="social-app d-flex align-center m-10">
              <i class="fa-brands fa-youtube center-flex c-grey"></i>
              <input
                class="w-full"
                type="text"
                placeholder="Twitter Username"
              />
            </div>
          </div>
          <!-- end social info -->
          <!-- start widget control -->
          <div class="widget-control bg-white p-20 rad-6">
            <h2 class="m-0 fsz-20 capatilize">widget control</h2>
            <p class="c-gray m-0 mt-5 fsz-15">show / hide widgets</p>
            <ul>
              <li>
                <input type="checkbox" name="" id="quick-draft" checked />
                <label for="quick-draft" class="capatilize fsz-15"
                  >quick draft</label
                >
              </li>
              <li>
                <input type="checkbox" name="" id="Yearly-Targets" />
                <label for="Yearly-Targets" class="capatilize fsz-15"
                  >Yearly Targets</label
                >
              </li>
              <li>
                <input
                  type="checkbox"
                  name=""
                  id="Tickets-Statistics"
                  checked
                />
                <label for="Tickets-Statistics" class="capatilize fsz-15"
                  >Tickets Statistics</label
                >
              </li>
              <li>
                <input type="checkbox" name="" id="Latest-News" />
                <label for="Latest-News" class="capatilize fsz-15"
                  >Latest News</label
                >
              </li>
              <li>
                <input type="checkbox" name="" id="Top-Search-Items" checked />
                <label for="Top-Search-Items" class="capatilize fsz-15"
                  >Top Search Items</label
                >
              </li>
            </ul>
          </div>
          <!-- end widget control -->
          <!-- start backup control -->
          <div class="backup bg-white p-20 rad-6">
            <h2 class="m-0 fsz-20 capatilize">backup manager</h2>
            <p class="fsz-15 c-gray m-0 mt-5">
              Control Backup Time And Location
            </p>
            <div class="date">
              <input type="radio" name="time" id="dialy" checked />
              <label for="dialy" class="capatilize">dialy</label>
            </div>
            <div class="date">
              <input type="radio" name="time" id="monthly" />
              <label for="monthly" class="capatilize">monthly</label>
            </div>
            <div class="date">
              <input type="radio" name="time" id="yearly" />
              <label for="yearly" class="capatilize">yearly</label>
            </div>
            <div class="servers d-flex-compo">
              <input type="radio" name="servers" id="server-one" checked />
              <div class="server mb-10 rad-6 w-full">
                <label for="server-one" class="d-block m-15">
                  <i class="fa-solid fa-server d-block mb-10 w-full"></i>
                  Megaman
                </label>
              </div>
              <input type="radio" name="servers" id="server-two" />
              <div class="server mb-10 rad-6 w-full">
                <label for="server-two" class="d-block m-15">
                  <i class="fa-solid fa-server d-block mb-10 w-full"></i>
                  Zero
                </label>
              </div>

              <input type="radio" name="servers" id="server-three" />
              <div class="server mb-10 rad-6 w-full">
                <label for="server-three" class="d-block m-15">
                  <i class="fa-solid fa-server d-block mb-10 w-full"></i>
                  Sigma
                </label>
              </div>
            </div>
          </div>
          <!-- end backup control -->
        </div>
        <!-- end settting widgets -->
      </div>

@endsection
