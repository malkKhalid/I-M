@extends('Admin.master')
@section('style')
   <!-- css files -->
   <link rel="stylesheet" href="{{asset('DashBoard/css/files.css')}}" />
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
        <h3 class="title p-10 p-relative capatilize">Files</h3>
        <div class="file-page d-flex p-20">
          <!-- start file stasts -->
          <div class="files-stats bg-white p-10 rad-6">
            <h2 class="fsz-20 capatilize m-0 mb-10">File statistics</h2>
            <div class="file-row d-flex-compo">
              <div class="icon d-flex-center blue">
                <i class="fa-regular fa-file-pdf fa-lg"></i>
              </div>
              <div class="info">
                <span class="capatilize fw-bold fsz-15">pdf files</span>
                <span class="c-gray fsz-13 mt-5 d-block">120</span>
              </div>
              <span class="c-gray bg-eee btn-shape">3.4MB</span>
            </div>
            <div class="file-row d-flex-compo">
              <div class="icon d-flex-center orange">
                <i class="fa-regular fa-file-pdf fa-lg"></i>
              </div>
              <div class="info">
                <span class="capatilize fw-bold fsz-15">ppx files</span>
                <span class="c-gray fsz-13 mt-5 d-block">200</span>
              </div>
              <span class="c-gray bg-eee btn-shape">5MB</span>
            </div>
            <div class="file-row d-flex-compo">
              <div class="icon d-flex-center red">
                <i class="fa-regular fa-images fa-lg"></i>
              </div>
              <div class="info">
                <span class="capatilize fw-bold fsz-15">images files</span>
                <span class="c-gray fsz-13 mt-5 d-block">80</span>
              </div>
              <span class="c-gray bg-eee btn-shape">3MB</span>
            </div>
            <div class="file-row d-flex-compo">
              <div class="icon d-flex-center green">
                <i class="fa-regular fa-file-zipper fa-lg"></i>
              </div>
              <div class="info">
                <span class="capatilize fw-bold fsz-15">zip files</span>
                <span class="c-gray fsz-13 mt-5 d-block">40</span>
              </div>
              <span class="c-gray bg-eee btn-shape">1.5MB</span>
            </div>
            <span class="bg-blue c-white p-10 pointer rad-6 upload">
              <i>i</i>
              Upload
            </span>
          </div>
          <!-- end file stasts -->
          <!-- start files  -->
          <div class="files d-grid gap-10-20 flex-grow-1">
            <!-- start file-card -->
            <div class="file-card bg-white rad-6 p-10">
              <i class="fa-solid fa-download c-grey p-absolute"></i>
              <div class="icon">
                <img src="{{asset('DashBoard/images/pdf.svg')}}" alt="" />
              </div>
              <p class="capatilize tx-c m-0 fsz-15">my pdf file</p>
              <p class="capatilize tx-c m-0 mt-5 fsz-13 c-gray">israa osama</p>
              <div class="info d-flex-compo">
                <span class="fsz-13 c-gray">06/06/2021</span>
                <span class="fsz-13 c-gray">1MB</span>
              </div>
            </div>
            <!-- end file-card -->
            <!-- start file-card -->
            <div class="file-card bg-white rad-6 p-10">
              <i class="fa-solid fa-download c-grey p-absolute"></i>
              <div class="icon">
                <img src="{{asset('DashBoard/images/avi.svg')}}" alt="" />
              </div>
              <p class="capatilize tx-c m-0 fsz-15">project 1</p>
              <p class="capatilize tx-c m-0 mt-5 fsz-13 c-gray">israa osama</p>
              <div class="info d-flex-compo">
                <span class="fsz-13 c-gray">01/03/2021</span>
                <span class="fsz-13 c-gray">1.5MB</span>
              </div>
            </div>
            <!-- end file-card -->
            <!-- start file-card -->
            <div class="file-card bg-white rad-6 p-10">
              <i class="fa-solid fa-download c-grey p-absolute"></i>
              <div class="icon">
                <img src="{{asset('DashBoard/images/dll.svg')}}" alt="" />
              </div>
              <p class="capatilize tx-c m-0 fsz-15">project 2</p>
              <p class="capatilize tx-c m-0 mt-5 fsz-13 c-gray">
                Ahmad mohamad
              </p>
              <div class="info d-flex-compo">
                <span class="fsz-13 c-gray">06/06/2021</span>
                <span class="fsz-13 c-gray">0.5MB</span>
              </div>
            </div>
            <!-- end file-card -->
            <!-- start file-card -->
            <div class="file-card bg-white rad-6 p-10">
              <i class="fa-solid fa-download c-grey p-absolute"></i>
              <div class="icon">
                <img src="{{asset('DashBoard/images/eps.svg')}}" alt="" />
              </div>
              <p class="capatilize tx-c m-0 fsz-15">Dashboard project</p>
              <p class="capatilize tx-c m-0 mt-5 fsz-13 c-gray">mona bana</p>
              <div class="info d-flex-compo">
                <span class="fsz-13 c-gray">25/11/2021</span>
                <span class="fsz-13 c-gray">2MB</span>
              </div>
            </div>
            <!-- end file-card -->
            <!-- start file-card -->
            <div class="file-card bg-white rad-6 p-10">
              <i class="fa-solid fa-download c-grey p-absolute"></i>
              <div class="icon">
                <img src="{{asset('DashBoard/images/psd.svg')}}" alt="" />
              </div>
              <p class="capatilize tx-c m-0 fsz-15">project 4</p>
              <p class="capatilize tx-c m-0 mt-5 fsz-13 c-gray">israa osama</p>
              <div class="info d-flex-compo">
                <span class="fsz-13 c-gray">8/8/2022</span>
                <span class="fsz-13 c-gray">2.3MB</span>
              </div>
            </div>
            <!-- end file-card -->
            <!-- start file-card -->
            <div class="file-card bg-white rad-6 p-10">
              <i class="fa-solid fa-download c-grey p-absolute"></i>
              <div class="icon">
                <img src="{{asset('DashBoard/images/pdf.svg')}}" alt="" />
              </div>
              <p class="capatilize tx-c m-0 fsz-15">IOT research</p>
              <p class="capatilize tx-c m-0 mt-5 fsz-13 c-gray">Sami ahmad</p>
              <div class="info d-flex-compo">
                <span class="fsz-13 c-gray">06/06/2021</span>
                <span class="fsz-13 c-gray">1.3MB</span>
              </div>
            </div>
            <!-- end file-card -->
            <!-- start file-card -->
            <div class="file-card bg-white rad-6 p-10">
              <i class="fa-solid fa-download c-grey p-absolute"></i>
              <div class="icon">
                <img src="{{asset('DashBoard/images/avi.svg')}}" alt="" />
              </div>
              <p class="capatilize tx-c m-0 fsz-15">project 5</p>
              <p class="capatilize tx-c m-0 mt-5 fsz-13 c-gray">osama</p>
              <div class="info d-flex-compo">
                <span class="fsz-13 c-gray">06/03/2023</span>
                <span class="fsz-13 c-gray">2MB</span>
              </div>
            </div>
            <!-- end file-card -->
            <!-- start file-card -->
            <div class="file-card bg-white rad-6 p-10">
              <i class="fa-solid fa-download c-grey p-absolute"></i>
              <div class="icon">
                <img src="{{asset('DashBoard/images/eps.svg')}}" alt="" />
              </div>
              <p class="capatilize tx-c m-0 fsz-15">project 7</p>
              <p class="capatilize tx-c m-0 mt-5 fsz-13 c-gray">israa osama</p>
              <div class="info d-flex-compo">
                <span class="fsz-13 c-gray">03/04/2023</span>
                <span class="fsz-13 c-gray">1MB</span>
              </div>
            </div>
            <!-- end file-card -->
            <!-- start file-card -->
            <div class="file-card bg-white rad-6 p-10">
              <i class="fa-solid fa-download c-grey p-absolute"></i>
              <div class="icon">
                <img src="{{asset('DashBoard/images/dll.svg')}}" alt="" />
              </div>
              <p class="capatilize tx-c m-0 fsz-15">ahmad website</p>
              <p class="capatilize tx-c m-0 mt-5 fsz-13 c-gray">lama ziad</p>
              <div class="info d-flex-compo">
                <span class="fsz-13 c-gray">06/06/2021</span>
                <span class="fsz-13 c-gray">1MB</span>
              </div>
            </div>
            <!-- end file-card -->
            <!-- start file-card -->
            <div class="file-card bg-white rad-6 p-10">
              <i class="fa-solid fa-download c-grey p-absolute"></i>
              <div class="icon">
                <img src="{{asset('DashBoard/images/pdf.svg')}}" alt="" />
              </div>
              <p class="capatilize tx-c m-0 fsz-15">my pdf file</p>
              <p class="capatilize tx-c m-0 mt-5 fsz-13 c-gray">soad ali</p>
              <div class="info d-flex-compo">
                <span class="fsz-13 c-gray">06/06/2021</span>
                <span class="fsz-13 c-gray">1MB</span>
              </div>
            </div>
            <!-- end file-card -->
            <!-- start file-card -->
            <div class="file-card bg-white rad-6 p-10">
              <i class="fa-solid fa-download c-grey p-absolute"></i>
              <div class="icon">
                <img src="{{asset('DashBoard/images/dll.svg')}}" alt="" />
              </div>
              <p class="capatilize tx-c m-0 fsz-15">project 4</p>
              <p class="capatilize tx-c m-0 mt-5 fsz-13 c-gray">israa osama</p>
              <div class="info d-flex-compo">
                <span class="fsz-13 c-gray">02/05/2021</span>
                <span class="fsz-13 c-gray">2.5MB</span>
              </div>
            </div>
            <!-- end file-card -->
            <!-- start file-card -->
            <div class="file-card bg-white rad-6 p-10">
              <i class="fa-solid fa-download c-grey p-absolute"></i>
              <div class="icon">
                <img src="{{asset('DashBoard/images/eps.svg')}}" alt="" />
              </div>
              <p class="capatilize tx-c m-0 fsz-15">my pdf file</p>
              <p class="capatilize tx-c m-0 mt-5 fsz-13 c-gray">malak ahmad</p>
              <div class="info d-flex-compo">
                <span class="fsz-13 c-gray">06/06/2021</span>
                <span class="fsz-13 c-gray">1MB</span>
              </div>
            </div>
            <!-- end file-card -->
            <!-- start file-card -->
            <div class="file-card bg-white rad-6 p-10">
              <i class="fa-solid fa-download c-grey p-absolute"></i>
              <div class="icon">
                <img src="{{asset('DashBoard/images/psd.svg')}}" alt="" />
              </div>
              <p class="capatilize tx-c m-0 fsz-15">demma mohamad</p>
              <p class="capatilize tx-c m-0 mt-5 fsz-13 c-gray">israa osama</p>
              <div class="info d-flex-compo">
                <span class="fsz-13 c-gray">06/06/2021</span>
                <span class="fsz-13 c-gray">1MB</span>
              </div>
            </div>
            <!-- end file-card -->
            <!-- start file-card -->
            <div class="file-card bg-white rad-6 p-10">
              <i class="fa-solid fa-download c-grey p-absolute"></i>
              <div class="icon">
                <img src="{{asset('DashBoard/images/avi.svg')}}" alt="" />
              </div>
              <p class="capatilize tx-c m-0 fsz-15">ali ali</p>
              <p class="capatilize tx-c m-0 mt-5 fsz-13 c-gray">israa osama</p>
              <div class="info d-flex-compo">
                <span class="fsz-13 c-gray">06/07/2022</span>
                <span class="fsz-13 c-gray">1MB</span>
              </div>
            </div>
            <!-- end file-card -->
            <!-- start file-card -->
            <div class="file-card bg-white rad-6 p-10">
              <i class="fa-solid fa-download c-grey p-absolute"></i>
              <div class="icon">
                <img src="{{asset('DashBoard/images/pdf.svg')}}" alt="" />
              </div>
              <p class="capatilize tx-c m-0 fsz-15">my pdf file</p>
              <p class="capatilize tx-c m-0 mt-5 fsz-13 c-gray">lama salem</p>
              <div class="info d-flex-compo">
                <span class="fsz-13 c-gray">06/06/2021</span>
                <span class="fsz-13 c-gray">1MB</span>
              </div>
            </div>
            <!-- end file-card -->
            <!-- start file-card -->
            <div class="file-card bg-white rad-6 p-10">
              <i class="fa-solid fa-download c-grey p-absolute"></i>
              <div class="icon">
                <img src="{{asset('DashBoard/images/eps.svg')}}" alt="" />
              </div>
              <p class="capatilize tx-c m-0 fsz-15">new form</p>
              <p class="capatilize tx-c m-0 mt-5 fsz-13 c-gray">ahmad ahmad</p>
              <div class="info d-flex-compo">
                <span class="fsz-13 c-gray">06/03/2022</span>
                <span class="fsz-13 c-gray">1.5MB</span>
              </div>
            </div>
            <!-- end file-card -->
            <!-- start file-card -->
            <div class="file-card bg-white rad-6 p-10">
              <i class="fa-solid fa-download c-grey p-absolute"></i>
              <div class="icon">
                <img src="{{asset('DashBoard/images/dll.svg')}}" alt="" />
              </div>
              <p class="capatilize tx-c m-0 fsz-15">my pdf file</p>
              <p class="capatilize tx-c m-0 mt-5 fsz-13 c-gray">israa osama</p>
              <div class="info d-flex-compo">
                <span class="fsz-13 c-gray">06/06/2021</span>
                <span class="fsz-13 c-gray">1MB</span>
              </div>
            </div>
            <!-- end file-card -->
          </div>
          <!-- end files  -->
        </div>
      </div>
@endsection

