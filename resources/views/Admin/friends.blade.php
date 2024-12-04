@extends('Admin.master')
@section('style')
   <!-- css files -->
   <link rel="stylesheet" href="{{asset('DashBoard/css/freinds.css')}}" />
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
        <h3 class="title p-10 p-relative capatilize">Freinds</h3>
        <div class="freinds-page m-20 d-grid gap-20-10">
          <!-- start freind  -->
          <div class="freind bg-white rad-6 p-20 p-relative">
            <div class="contact">
              <i class="fa-solid fa-phone"></i>
              <i class="fa-regular fa-envelope"></i>
            </div>
            <div class="tx-c">
              <img
                src="{{asset('DashBoard/images/friend-01.jpg')}}"
                alt=""
                class="rad-half mt-10 mb-10 w-100 h-100"
              />
              <h4 class="m-0 capatilize">Ahmad nasser</h4>
              <p class="c-gray mt-5 mb-0 fsz-13">javascript developer</p>
            </div>
            <div class="icons fsz-13 p-relative">
              <div class="mb-10">
                <i class="fa-regular fa-face-smile fa-fw"></i>
                <span>99 Freinds</span>
              </div>
              <div class="mb-10">
                <i class="fa-solid fa-code-commit fa-fw"></i>
                <span>15 Projects</span>
              </div>
              <div class="mb-10">
                <i class="fa-regular fa-newspaper fa-fw"></i>
                <span>30 Articles</span>
              </div>
              <span class="vip fw-bold c-orange">VIP</span>
            </div>
            <div class="info fsz-13 d-flex-compo">
              <span class="c-gray">joined 10/10/2020</span>
              <div>
                <a
                  href="profile.html"
                  class="capatilize bg-blue c-white btn-shape"
                  >profile</a
                >
                <a href="#" class="capatilize bg-red c-white btn-shape"
                  >remove</a
                >
              </div>
            </div>
          </div>
          <!-- end freind  -->
          <!-- start freind  -->
          <div class="freind bg-white rad-6 p-20 p-relative">
            <div class="contact">
              <i class="fa-solid fa-phone"></i>
              <i class="fa-regular fa-envelope"></i>
            </div>
            <div class="tx-c">
              <img
                src="{{asset('DashBoard/images/friend-02.jpg')}}"
                alt=""
                class="rad-half mt-10 mb-10 w-100 h-100"
              />
              <h4 class="m-0 capatilize">Ahmad nasser</h4>
              <p class="c-gray mt-5 mb-0 fsz-13">cloud developer</p>
            </div>
            <div class="icons fsz-13 p-relative">
              <div class="mb-10">
                <i class="fa-regular fa-face-smile fa-fw"></i>
                <span>30 Freinds</span>
              </div>
              <div class="mb-10">
                <i class="fa-solid fa-code-commit fa-fw"></i>
                <span>10 Projects</span>
              </div>
              <div class="mb-10">
                <i class="fa-regular fa-newspaper fa-fw"></i>
                <span>20 Articles</span>
              </div>
            </div>
            <div class="info fsz-13 d-flex-compo">
              <span class="c-gray">joined 10/10/2020</span>
              <div>
                <a
                  href="profile.html"
                  class="capatilize bg-blue c-white btn-shape"
                  >profile</a
                >
                <a href="#" class="capatilize bg-red c-white btn-shape"
                  >remove</a
                >
              </div>
            </div>
          </div>
          <!-- end freind  -->
          <!-- start freind  -->
          <div class="freind bg-white rad-6 p-20 p-relative">
            <div class="contact">
              <i class="fa-solid fa-phone"></i>
              <i class="fa-regular fa-envelope"></i>
            </div>
            <div class="tx-c">
              <img
                src="{{asset('DashBoard/images/friend-03.jpg')}}"
                alt=""
                class="rad-half mt-10 mb-10 w-100 h-100"
              />
              <h4 class="m-0 capatilize">Mona Ahmad</h4>
              <p class="c-gray mt-5 mb-0 fsz-13">java developer</p>
            </div>
            <div class="icons fsz-13 p-relative">
              <div class="mb-10">
                <i class="fa-regular fa-face-smile fa-fw"></i>
                <span>50 Freinds</span>
              </div>
              <div class="mb-10">
                <i class="fa-solid fa-code-commit fa-fw"></i>
                <span>15 Projects</span>
              </div>
              <div class="mb-10">
                <i class="fa-regular fa-newspaper fa-fw"></i>
                <span>20 Articles</span>
              </div>
            </div>
            <div class="info fsz-13 d-flex-compo">
              <span class="c-gray">joined 10/10/2020</span>
              <div>
                <a
                  href="profile.html"
                  class="capatilize bg-blue c-white btn-shape"
                  >profile</a
                >
                <a href="#" class="capatilize bg-red c-white btn-shape"
                  >remove</a
                >
              </div>
            </div>
          </div>
          <!-- end freind  -->
          <!-- start freind  -->
          <div class="freind bg-white rad-6 p-20 p-relative">
            <div class="contact">
              <i class="fa-solid fa-phone"></i>
              <i class="fa-regular fa-envelope"></i>
            </div>
            <div class="tx-c">
              <img
                src="{{asset('DashBoard/images/friend-04.jpg')}}"
                alt=""
                class="rad-half mt-10 mb-10 w-100 h-100"
              />
              <h4 class="m-0 capatilize">Omar Ahmed</h4>
              <p class="c-gray mt-5 mb-0 fsz-13">mobile developer</p>
            </div>
            <div class="icons fsz-13 p-relative">
              <div class="mb-10">
                <i class="fa-regular fa-face-smile fa-fw"></i>
                <span>99 Freinds</span>
              </div>
              <div class="mb-10">
                <i class="fa-solid fa-code-commit fa-fw"></i>
                <span>15 Projects</span>
              </div>
              <div class="mb-10">
                <i class="fa-regular fa-newspaper fa-fw"></i>
                <span>30 Articles</span>
              </div>
              <span class="vip fw-bold c-orange">VIP</span>
            </div>
            <div class="info fsz-13 d-flex-compo">
              <span class="c-gray">joined 10/10/2020</span>
              <div>
                <a
                  href="profile.html"
                  class="capatilize bg-blue c-white btn-shape"
                  >profile</a
                >
                <a href="#" class="capatilize bg-red c-white btn-shape"
                  >remove</a
                >
              </div>
            </div>
          </div>
          <!-- end freind  -->
          <!-- start freind  -->
          <div class="freind bg-white rad-6 p-20 p-relative">
            <div class="contact">
              <i class="fa-solid fa-phone"></i>
              <i class="fa-regular fa-envelope"></i>
            </div>
            <div class="tx-c">
              <img
                src="{{asset('DashBoard/images/friend-05.jpg')}}"
                alt=""
                class="rad-half mt-10 mb-10 w-100 h-100"
              />
              <h4 class="m-0 capatilize">Malak adham</h4>
              <p class="c-gray mt-5 mb-0 fsz-13">UIUX developer</p>
            </div>
            <div class="icons fsz-13 p-relative">
              <div class="mb-10">
                <i class="fa-regular fa-face-smile fa-fw"></i>
                <span>99 Freinds</span>
              </div>
              <div class="mb-10">
                <i class="fa-solid fa-code-commit fa-fw"></i>
                <span>40 Projects</span>
              </div>
              <div class="mb-10">
                <i class="fa-regular fa-newspaper fa-fw"></i>
                <span>23 Articles</span>
              </div>
              <span class="vip fw-bold c-orange">VIP</span>
            </div>
            <div class="info fsz-13 d-flex-compo">
              <span class="c-gray">joined 10/9/2020</span>
              <div>
                <a
                  href="profile.html"
                  class="capatilize bg-blue c-white btn-shape"
                  >profile</a
                >
                <a href="#" class="capatilize bg-red c-white btn-shape"
                  >remove</a
                >
              </div>
            </div>
          </div>
          <!-- end freind  -->
          <!-- start freind  -->
          <div class="freind bg-white rad-6 p-20 p-relative">
            <div class="contact">
              <i class="fa-solid fa-phone"></i>
              <i class="fa-regular fa-envelope"></i>
            </div>
            <div class="tx-c">
              <img
                src="{{asset('DashBoard/images/friend-01.jpg')}}"
                alt=""
                class="rad-half mt-10 mb-10 w-100 h-100"
              />
              <h4 class="m-0 capatilize">ayman mohamad</h4>
              <p class="c-gray mt-5 mb-0 fsz-13">python developer</p>
            </div>
            <div class="icons fsz-13 p-relative">
              <div class="mb-10">
                <i class="fa-regular fa-face-smile fa-fw"></i>
                <span>99 Freinds</span>
              </div>
              <div class="mb-10">
                <i class="fa-solid fa-code-commit fa-fw"></i>
                <span>15 Projects</span>
              </div>
              <div class="mb-10">
                <i class="fa-regular fa-newspaper fa-fw"></i>
                <span>30 Articles</span>
              </div>
            </div>
            <div class="info fsz-13 d-flex-compo">
              <span class="c-gray">joined 10/5/2020</span>
              <div>
                <a
                  href="profile.html"
                  class="capatilize bg-blue c-white btn-shape"
                  >profile</a
                >
                <a href="#" class="capatilize bg-red c-white btn-shape"
                  >remove</a
                >
              </div>
            </div>
          </div>
          <!-- end freind  -->
          <!-- start freind  -->
          <div class="freind bg-white rad-6 p-20 p-relative">
            <div class="contact">
              <i class="fa-solid fa-phone"></i>
              <i class="fa-regular fa-envelope"></i>
            </div>
            <div class="tx-c">
              <img
                src="{{asset('DashBoard/images/friend-03.jpg')}}"
                alt=""
                class="rad-half mt-10 mb-10 w-100 h-100"
              />
              <h4 class="m-0 capatilize">Osama ali</h4>
              <p class="c-gray mt-5 mb-0 fsz-13">cyber security</p>
            </div>
            <div class="icons fsz-13 p-relative">
              <div class="mb-10">
                <i class="fa-regular fa-face-smile fa-fw"></i>
                <span>40 Freinds</span>
              </div>
              <div class="mb-10">
                <i class="fa-solid fa-code-commit fa-fw"></i>
                <span>20 Projects</span>
              </div>
              <div class="mb-10">
                <i class="fa-regular fa-newspaper fa-fw"></i>
                <span>30 Articles</span>
              </div>
              <span class="vip fw-bold c-orange">VIP</span>
            </div>
            <div class="info fsz-13 d-flex-compo">
              <span class="c-gray">joined 10/10/2020</span>
              <div>
                <a
                  href="profile.html"
                  class="capatilize bg-blue c-white btn-shape"
                  >profile</a
                >
                <a href="#" class="capatilize bg-red c-white btn-shape"
                  >remove</a
                >
              </div>
            </div>
          </div>
          <!-- end freind  -->
        </div>
      </div>
@endsection
