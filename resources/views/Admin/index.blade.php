@extends('Admin.master')
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
    <h3 class="title p-10 p-relative">Dashboard</h3>
    <!-- start wrapper -->
    <div class="wrapper d-grid gap-20-10 mlr-5">
      <!--start welcome and its body -->
      <div>
        <div
          class="welcome rad-6 tx-c-mobile block-mobile p-10 d-flex-compo"
        >
          <div class="intro-info w-fit d-flex-center">
            <img
              src="{{asset('DashBoard/images/Untitled.jpg')}}"
              alt=""
              class="avater hide-mobile"
            />
            <div class="info">
              <h2 class="m-0 fsz-20">israa osama</h2>
              <p class="m-0 mb-20 c-gray p-0 fsz-15 mt-5">anything here</p>
            </div>
          </div>
          <img src="{{asset('DashBoard/images/welcome.png')}}" alt="" class="hide-mobile" />
        </div>
        <div class="body d-flex-around bg-white p-20 tx-c block-mobile">
          <div class="w-fit">
            israa osama
            <span class="d-block c-gray fsz-15 mt-5">developer</span>
          </div>
          <div class="w-fit">
            80 <span class="d-block c-gray fsz-15 mt-5">projects</span>
          </div>
          <div class="w-fit">
            $500 <span class="d-block c-gray fsz-15 mt-5">Earned</span>
          </div>
        </div>
        <div class="link bg-white pb-10">
          <a
            href="profile.html"
            class="visit d-block fsz-15 rad-6 w-fit btn-shape"
            >Profile</a
          >
        </div>
      </div>
      <!--end welcome and its body -->
      <!-- start qiuck draft -->
      <div class="draft p-10 bg-white rad-6">
        <h2 class="fsz-20 m-0 mlr-10 capatilize">quick draft</h2>
        <p class="fsz-15 mt-0 c-gray mlr-10 capatilize">your thoughts</p>
        <input
          type="text"
          name="title"
          placeholder="The title"
          class="d-block bg-eee b-none p-10 w-full m-7"
        />
        <textarea
          name="your draft"
          class="d-block bg-eee b-none p-10 w-full m-7"
          placeholder="enter your draft"
        ></textarea>
        <input type="button" value="save" class="btn-shape fsz-15 save" />
      </div>
      <!-- end qiuck draft -->
      <!-- start target  -->
      <div class="target bg-white p-10 rad-6">
        <h2 class="capatilize m-0 mlr-10 fsz-20">yearly target</h2>
        <p class="fsz-15 m-0 mlr-10 capatilize c-gray mb-20">
          targets of the year
        </p>
        <div class="target-rows mb-20 blue d-flex align-center">
          <div class="icon d-flex-center">
            <i class="fa-solid fa-dollar-sign fa-lg c-blue"></i>
          </div>
          <div class="details">
            <span class="fsz-15 c-gray">Money</span>
            <span class="d-block mt-5 mb-10 fw-bold">$20.000</span>
            <div class="progress p-relative">
              <span class="bg-blue blue" style="width: 40%">
                <span class="bg-blue">40%</span>
              </span>
            </div>
          </div>
        </div>
        <div class="target-rows mb-20 orange d-flex align-center">
          <div class="icon d-flex-center">
            <i class="fa-solid fa-code fa-lg c-orange"></i>
          </div>
          <div class="details">
            <span class="fsz-15 c-gray">Projects</span>
            <span class="d-block mt-5 mb-10 fw-bold">25</span>
            <div class="progress p-relative">
              <span class="bg-orange orange" style="width: 25%">
                <span class="bg-orange">25%</span>
              </span>
            </div>
          </div>
        </div>
        <div class="target-rows mb-20 green d-flex align-center">
          <div class="icon d-flex-center">
            <i class="fa-solid fa-user fa-lg c-green"></i>
          </div>
          <div class="details">
            <span class="fsz-15 c-gray">Money</span>
            <span class="d-block mt-5 mb-10 fw-bold">$20.000</span>
            <div class="progress p-relative">
              <span class="bg-green green" style="width: 40%">
                <span class="bg-green">40%</span>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- end target  -->
      <!-- start statics -->
      <div class="static p-20 m-0 bg-white rad-6">
        <h2 class="m-0 fsz-20 capatilize">statics</h2>
        <p class="c-gray fsz-15 m-0 mlr-5 mt-5">all statics for that</p>
        <div class="static-each d-flex-center flex-wrap">
          <div class="static-one w-fit">
            <div class="icon">
              <i
                class="fa-regular fa-rectangle-list fa-2x mb-10 c-orange"
              ></i>
            </div>
            <h3 class="fsz-15 m-0 p-5">25000</h3>
            <p class="c-gray fsz-15 m-0 p-5">yearly tearget</p>
          </div>
          <div class="static-one w-fit">
            <div class="icon">
              <i class="fa-solid fa-spinner fa-2x mb-10 c-blue"></i>
            </div>
            <h3 class="fsz-15 m-0 p-5">500</h3>
            <p class="c-gray fsz-15 m-0 p-5">pending</p>
          </div>
          <div class="static-one w-fit">
            <div class="icon">
              <i class="fa-regular fa-circle-check fa-2x mb-10 c-green"></i>
            </div>
            <h3 class="fsz-15 m-0 p-5">1900</h3>
            <p class="c-gray fsz-15 m-0 p-5">closed</p>
          </div>
          <div class="static-one w-fit">
            <div class="icon">
              <i
                class="fa-regular fa-rectangle-xmark fa-2x mb-10 c-red"
              ></i>
            </div>
            <h3 class="fsz-15 m-0 p-5">100</h3>
            <p class="c-gray fsz-15 m-0 p-5">deleted</p>
          </div>
        </div>
      </div>
      <!-- end statics -->
      <!-- start news -->
      <div class="news bg-white p-20 rad-6">
        <h2 class="m-0 fsz-20">breaking news</h2>
        <div class="news-block mt-5">
          <div class="one-news d-flex-center block-mobile">
            <img src="./images/news-01.png" />
            <div class="info">
              <h3 class="m-0 fsz-15">a new news title</h3>
              <p class="fsz-12 c-gray m-0 mt-5">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Quod repudiandae, dicta voluptas quibusdam iusto magnam
                assumenda laborum laboriosam, necessitatibus voluptatem,
                eius facere culpa fugiat error tempore nam laudantium quam
                vero!
              </p>
            </div>
          </div>
          <div class="one-news d-flex-center block-mobile">
            <img src="./images/news-02.png" />
            <div class="info">
              <h3 class="m-0 fsz-15">a new news title</h3>
              <p class="fsz-12 c-gray m-0 mt-5">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Quod repudiandae, dicta voluptas quibusdam iusto magnam
                assumenda laborum laboriosam, necessitatibus voluptatem,
                eius facere culpa fugiat error tempore nam laudantium quam
                vero!
              </p>
            </div>
          </div>
          <div class="one-news d-flex-center block-mobile">
            <img src="./images/news-03.png" />
            <div class="info">
              <h3 class="m-0 fsz-15">a new news title</h3>
              <p class="fsz-12 c-gray m-0 mt-5">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Quod repudiandae, dicta voluptas quibusdam iusto magnam
                assumenda laborum laboriosam, necessitatibus voluptatem,
                eius facere culpa fugiat error tempore nam laudantium quam
                vero!
              </p>
            </div>
          </div>
          <div class="one-news d-flex-center block-mobile">
            <img src="./images/news-04.png" />
            <div class="info">
              <h3 class="m-0 fsz-15">a new news title</h3>
              <p class="fsz-12 c-gray m-0 mt-5">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Quod repudiandae, dicta voluptas quibusdam iusto magnam
                assumenda laborum laboriosam, necessitatibus voluptatem,
                eius facere culpa fugiat error tempore nam laudantium quam
                vero!
              </p>
            </div>
          </div>
          <div class="one-news d-flex-center block-mobile">
            <img src="./images/news-02.png" />
            <div class="info">
              <h3 class="m-0 fsz-15">a new news title</h3>
              <p class="fsz-12 c-gray m-0 mt-5">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Quod repudiandae, dicta voluptas quibusdam iusto magnam
                assumenda laborum laboriosam, necessitatibus voluptatem,
                eius facere culpa fugiat error tempore nam laudantium quam
                vero!
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- end news -->
      <!-- start tasks -->
      <div class="tasks p-20 m-0 bg-white">
        <h2 class="m-0 mb-10 capatilize fsz-20">today tasks</h2>
        <div class="task-row d-flex-around done">
          <div class="info">
            <p class="m-0 capatilize fsz-15 fw-bold">task title</p>
            <p class="m-0 p-5 c-gray">task body</p>
          </div>
          <i class="fa-regular fa-trash-can delete"></i>
        </div>
        <div class="task-row d-flex-around">
          <div class="info">
            <p class="m-0 capatilize fsz-15 fw-bold">task title</p>
            <p class="m-0 p-5 c-gray">task body</p>
          </div>
          <i class="fa-regular fa-trash-can delete"></i>
        </div>
        <div class="task-row d-flex-around done">
          <div class="info">
            <p class="m-0 capatilize fsz-15 fw-bold">task title</p>
            <p class="m-0 p-5 c-gray">task body</p>
          </div>
          <i class="fa-regular fa-trash-can delete"></i>
        </div>
        <div class="task-row d-flex-around">
          <div class="info">
            <p class="m-0 capatilize fsz-15 fw-bold">task title</p>
            <p class="m-0 p-5 c-gray">task body</p>
          </div>
          <i class="fa-regular fa-trash-can delete"></i>
        </div>
        <div class="task-row d-flex-around">
          <div class="info">
            <p class="m-0 capatilize fsz-15 fw-bold">task title</p>
            <p class="m-0 p-5 c-gray">task body</p>
          </div>
          <i class="fa-regular fa-trash-can delete"></i>
        </div>
      </div>
      <!-- end tasks -->
      <!-- start top search -->
      <div class="top-search bg-white p-20 rad-6">
        <h2 class="m-0 mb-10 capatilize fsz-20">top search</h2>
        <div class="keyword d-flex-compo">
          <p class="c-gray fsz-15 w-fit m-0">keyword</p>
          <p class="c-gray fsz-15 w-fit m-0">search count</p>
        </div>
        <ul>
          <li class="d-flex-compo mt-15">
            <p class="fsz-15 m-0">programming</p>
            <span class="btn-shape bg-eee c-black">220</span>
          </li>
          <li class="d-flex-compo mt-15">
            <p class="fsz-15 m-0">python</p>
            <span class="btn-shape bg-eee c-black">300</span>
          </li>
          <li class="d-flex-compo mt-15">
            <p class="fsz-15 m-0">css</p>
            <span class="btn-shape bg-eee c-black">230</span>
          </li>
          <li class="d-flex-compo mt-15">
            <p class="fsz-15 m-0">html</p>
            <span class="btn-shape bg-eee c-black">200</span>
          </li>
          <li class="d-flex-compo mt-15">
            <p class="fsz-15 m-0">javascript</p>
            <span class="btn-shape bg-eee c-black">320</span>
          </li>
          <li class="d-flex-compo mt-15">
            <p class="fsz-15 m-0">php</p>
            <span class="btn-shape bg-eee c-black">15</span>
          </li>
        </ul>
      </div>
      <!-- end top search -->
      <!-- start Latest Uploads -->
      <div class="latest-uploads bg-white p-20 rad-6">
        <h2 class="fsz-20 m-0 mb-10">Latest Uploads</h2>
        <div class="uploads">
          <div class="file-uploaded d-flex-compo mt-15 block-mobile">
            <img src="./images/pdf.svg" alt="" />
            <div class="info">
              <p class="fsz-15 m-0 mb-5">my-file.pdf</p>
              <span class="fsz-12 c-gray">israa osama</span>
            </div>
            <span class="btn-shape c-black bg-eee">2.5mb</span>
          </div>
          <div class="file-uploaded d-flex-compo mt-15 block-mobile">
            <img src="./images/dll.svg" alt="" />
            <div class="info">
              <p class="fsz-15 m-0 mb-5">my-file.pdf</p>
              <span class="fsz-12 c-gray">israa osama</span>
            </div>
            <span class="btn-shape c-black bg-eee">2.5mb</span>
          </div>
          <div class="file-uploaded d-flex-compo mt-15 block-mobile">
            <img src="./images/eps.svg" alt="" />
            <div class="info">
              <p class="fsz-15 m-0 mb-5">my-file.pdf</p>
              <span class="fsz-12 c-gray">israa osama</span>
            </div>
            <span class="btn-shape c-black bg-eee">2.5mb</span>
          </div>
          <div class="file-uploaded d-flex-compo mt-15 block-mobile">
            <img src="./images/psd.svg" alt="" />
            <div class="info">
              <p class="fsz-15 m-0 mb-5">my-file.pdf</p>
              <span class="fsz-12 c-gray">israa osama</span>
            </div>
            <span class="btn-shape c-black bg-eee">2.5mb</span>
          </div>
          <div class="file-uploaded d-flex-compo mt-15 block-mobile">
            <img src="./images/pdf.svg" alt="" />
            <div class="info">
              <p class="fsz-15 m-0 mb-5">my-file.pdf</p>
              <span class="fsz-12 c-gray">israa osama</span>
            </div>
            <span class="btn-shape c-black bg-eee">2.5mb</span>
          </div>
        </div>
      </div>
      <!-- end Latest Uploads -->
      <!-- start project progress -->
      <div class="progress bg-white p-20 rad-6">
        <h2 class="fsz-20 m-0 mb-10 capatilize">latest project progress</h2>
        <ul class="p-relative progress-list">
          <li class="mt-20 d-flex align-center done">got the project</li>
          <li class="mt-20 d-flex align-center done">
            Started The Project
          </li>
          <li class="mt-20 d-flex align-center done">
            The Project About To Finish
          </li>
          <li class="mt-20 d-flex align-center current">
            Test The Project
          </li>
          <li class="mt-20 d-flex align-center">
            Finish The Project & Get Money
          </li>
        </ul>
      </div>
      <!-- end project progress -->
      <!-- start reminders -->
      <div class="reminders bg-white p-20 rad-6">
        <h2 class="fsz-20 capatilize m-0 mb-10">reminders</h2>
        <ul>
          <div class="each-reminder p-relative d-flex align-center blue">
            <span></span>
            <li>
              <p class="fsz-15 m-0 mb-5">Check My Tasks List</p>
              <span class="c-gray fsz-12">28/09/2022 - 12:00am</span>
            </li>
          </div>
          <div class="each-reminder p-relative d-flex align-center orange">
            <span></span>
            <li>
              <p class="fsz-15 m-0 mb-5">Check My Tasks List</p>
              <span class="c-gray fsz-12">28/09/2022 - 12:00am</span>
            </li>
          </div>
          <div class="each-reminder p-relative d-flex align-center red">
            <span></span>
            <li>
              <p class="fsz-15 m-0 mb-5">Check My Tasks List</p>
              <span class="c-gray fsz-12">28/09/2022 - 12:00am</span>
            </li>
          </div>
          <div class="each-reminder p-relative d-flex align-center green">
            <span></span>
            <li>
              <p class="fsz-15 m-0 mb-5">Check My Tasks List</p>
              <span class="c-gray fsz-12">28/09/2022 - 12:00am</span>
            </li>
          </div>
        </ul>
      </div>
      <!-- end reminders -->
      <!-- start latest post  -->
      <div class="latest-post bg-white p-20 rad-6">
        <h2 class="fsz-20 m-0 mb-10 capatilize">latest posts</h2>
        <div class="post">
          <div class="title d-flex align-center m-15">
            <img src="{{asset('DashBoard/images/Untitled.jpg')}}" alt="" />
            <div class="info">
              <p class="fsz-15 m-0 mb-5 capatilize">israa osama</p>
              <p class="c-gray fsz-12 capatilize m-0">3 hours ago</p>
            </div>
          </div>
          <div class="body m-15">
            You can fool all of the people some of the time, and some of the
            people all of the time, but you can't fool all of the people all
            of the time.
          </div>
          <div class="foot d-flex-compo m-15">
            <div class="likes">
              <i class="fa-regular fa-heart"></i>
              <span class="c-gray fsz-12">1.8k</span>
            </div>
            <div class="comments">
              <i class="fa-regular fa-comments"></i>
              <span class="c-gray fsz-12">500</span>
            </div>
          </div>
        </div>
      </div>
      <!-- end latest post  -->
      <!-- start social media  -->
      <div class="social-media p-20 bg-white rad-6">
        <h2 class="fsz-20 capatilize m-0 mb-10">social media stats</h2>
        <div class="stats">
          <div class="social-site d-flex align-center blue">
            <div class="icon">
              <i
                class="fa-brands fa-twitter fa-2x c-white h-full center-flex"
              ></i>
            </div>
            <p class="m-0 fsz-15">90k Followers</p>
            <a class="btn-shape" href="#">follow</a>
          </div>
          <div class="social-site d-flex align-center blue">
            <div class="icon">
              <i
                class="fa-brands fa-facebook-f fa-2x c-white h-full center-flex"
              ></i>
            </div>
            <p class="m-0 fsz-15">2M Like</p>
            <a class="btn-shape" href="#">Like</a>
          </div>
          <div class="social-site d-flex align-center red">
            <div class="icon">
              <i
                class="fa-brands fa-youtube fa-2x c-white h-full center-flex"
              ></i>
            </div>
            <p class="m-0 fsz-15">1M subs</p>
            <a class="btn-shape" href="#">subsucribe</a>
          </div>
          <div class="social-site d-flex align-center blue">
            <div class="icon">
              <i
                class="fa-brands fa-linkedin fa-2x c-white h-full center-flex"
              ></i>
            </div>
            <p class="m-0 fsz-15">70k Followers</p>
            <a class="btn-shape" href="#">follow</a>
          </div>
        </div>
      </div>
      <!-- end social media  -->
    </div>
    <!-- end wrapper -->
    <!-- start project table -->
    <div class="projects bg-white rad-6 m-20 p-20">
      <h2 class="fsz-20 capatilize m-0 mb-20">projects</h2>
      <div class="responsive-table">
        <table>
          <thead>
            <td>Name</td>
            <td>Finish Date</td>
            <td>Client</td>
            <td>Price</td>
            <td>Team</td>
            <td>Status</td>
          </thead>
          <tbody>
            <tr>
              <td>Ministry Wikipedia</td>
              <td>22 Feb 2025</td>
              <td>Ministry</td>
              <td>$3500</td>
              <td>
                <img src="./images/team-01.png" alt="" />
                <img src="./images/team-02.png" alt="" />
                <img src="./images/team-03.png" alt="" />
                <img src="./images/team-04.png" alt="" />
              </td>
              <td>
                <span class="label bg-orange c-white btn-shape fsz-13"
                  >Pending</span
                >
              </td>
            </tr>
            <tr>
              <td>Elzero Shop</td>
              <td>21 Dec 2024</td>
              <td>Elzero</td>
              <td>$2500</td>
              <td>
                <img src="./images/team-01.png" alt="" />
                <img src="./images/team-02.png" alt="" />
                <img src="./images/team-03.png" alt="" />
              </td>
              <td>
                <span class="label bg-blue c-white btn-shape fsz-13"
                  >In Progress</span
                >
              </td>
            </tr>
            <tr>
              <td>Bouba App</td>
              <td>05 Sep 2023</td>
              <td>Bouba</td>
              <td>$300</td>
              <td>
                <img src="./images/team-03.png" alt="" />
                <img src="./images/team-04.png" alt="" />
              </td>
              <td>
                <span class="label bg-green c-white btn-shape fsz-13"
                  >completed</span
                >
              </td>
            </tr>
            <tr>
              <td>Mahmoud Website</td>
              <td>22 Mar 2022</td>
              <td>Mahmoud</td>
              <td>$3000</td>
              <td>
                <img src="./images/team-03.png" alt="" />
                <img src="./images/team-04.png" alt="" />
              </td>
              <td>
                <span class="label bg-green c-white btn-shape fsz-13"
                  >completed</span
                >
              </td>
            </tr>
            <tr>
              <td>Sayed Website</td>
              <td>22 May 2023</td>
              <td>Sayed</td>
              <td>$300</td>
              <td>
                <img src="./images/team-01.png" alt="" />
                <img src="./images/team-02.png" alt="" />
              </td>
              <td>
                <span class="label bg-red c-white btn-shape fsz-13"
                  >Rejected</span
                >
              </td>
            </tr>
            <tr>
              <td>Arena Application</td>
              <td>16 Mar 2021</td>
              <td>Arena Company</td>
              <td>$2600</td>
              <td>
                <img src="./images/team-01.png" alt="" />
                <img src="./images/team-02.png" alt="" />
                <img src="./images/team-03.png" alt="" />
                <img src="./images/team-04.png" alt="" />
              </td>
              <td>
                <span class="label bg-green c-white btn-shape fsz-13"
                  >completed</span
                >
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- end project table -->
</div>


@endsection
