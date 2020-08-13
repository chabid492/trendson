
<!DOCTYPE html>
<html>
  <head>
    <title>@yield("title")</title>
    <meta name="_token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ URL::asset("website/adminassets/vendor/bootstrap/css/bootstrap.min.css") }}">

     <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="{{ URL::asset('webasset/img/favicon.png?3') }}">
    
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
   {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> --}}

    <!-- Latest compiled JavaScript -->
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> --}}


    <!-- Google fonts - Popppins for copy-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
    <!-- orion icons-->
    <link rel="stylesheet" href="{{ URL::asset("website/adminassets/css/orionicons.css") }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ URL::asset('website/adminassets/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ URL::asset('website/adminassets/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ URL::asset('website/adminassets/img/favicon.png?3') }}">
  </head>
  <body>
    <!-- navbar-->
      <header class="header sticky-top">
      <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow">
        <a href="#" onclick="return false;" id="showSidebar" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead">
          <i class="fas fa-align-left"></i>
        </a>
        <a href="{{ url('admin') }}" class="navbar-brand font-weight-bold text-uppercase text-base">Trend'son</a>
        <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
          <li class="nav-item">
            <span class="text-gray">{{-- {{ Auth::user()->name }} --}} Admin</span>
          </li>
          <li class="nav-item dropdown mr-3 ml-3">
            <a id="notifications" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-gray-400 px-1">
              <i class="fa fa-bell"></i><span id="newNotify"  class=""></span>
            </a>
            <div aria-labelledby="notifications" class="dropdown-menu"><a href="{{ url('/show/query') }}" class="dropdown-item">
                 
                <div class="d-flex align-items-center">
                  <div class="icon icon-sm bg-green text-white"><i class="fas fa-envelope"></i></div>

                  <div class="text ml-2">

                    
                    <p class="mb-0">You have 
                      
                      <input type="button" style="color: red;background: none;border: none; font-weight: bold;" id="showMsg" value="">
                      
                      <input type="hidden" id="currentMsg" value="{{-- {{$totalmessage}} --}} 2">
                       new notification</p>

                  </div>
                </div></a>


              <div class="dropdown-divider"></div>
                <a href="{{ url('/show/query') }}" class="dropdown-item text-center">
                  <small class="font-weight-bold headings-font-family text-uppercase">View all</small>
                </a>
            </div>
          </li>
          <li class="nav-item dropdown ml-auto">
            <a id="userInfo" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
              <img src="{{ URL::asset('website/adminassets/uploads/account.png') }}" alt="admin" style="max-width: 2.5rem;" class="img-fluid rounded-circle shadow p-1">
            </a>
            <div aria-labelledby="userInfo" class="dropdown-menu">
              <a href="#" class="dropdown-item">
                <strong class="d-block text-uppercase headings-font-family">
                {{-- {{ /*Auth::user()->name*/ }} --}} Admin
              </strong><small>Adminstrator</small>
              </a>
              

              <div class="dropdown-divider"></div>
              <a class="sidebar-link text-muted" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      <i class="fa fa-sign-out-alt mr-3 text-gray"></i>
                        {{ __('Logout') }}
                  </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
              </form>

            </div>
          </li>
        </ul>
      </nav>
    </header>
  

    <div class="d-flex align-items-stretch">
      <!--sidebar-->
        <div id="sidebar" class="sidebar py-3">
          <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">MAIN</div>
          <ul class="sidebar-menu list-unstyled">
                <li class="sidebar-list-item"><a href="{{ url('/admin') }}" class="sidebar-link text-muted"><i class="o-home-1 mr-3 text-gray"></i><span id="home" >Home</span></a></li>
                <li class="sidebar-list-item"><a href="{{ url('/category') }}" class="sidebar-link text-muted"><i class="fa fa-list mr-3 text-gray"></i><span>Add Category</span></a></li>

                <li class="sidebar-list-item"><a href="{{ url('sub/category') }}" class="sidebar-link text-muted"><i class="fa fa-th mr-3 text-gray"></i><span>Add Sub Category</span></a></li>
               
               <li class="sidebar-list-item">
                <a href="#" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted">
                  <i class="o-wireframe-1 mr-3 text-gray"></i>
                    <span>Quick Links</span></a>
                <div id="pages" class="collapse">
                  <ul class="sidebar-menu list-unstyled border-left border-primary border-thick" style="color: black;">

                    <li class="sidebar-list-item">

                      <a href="#" data-toggle="collapse" data-target="#slideritem" aria-expanded="false" aria-controls="slideritem" class="sidebar-link ">
                      <i class=" ml-1 "></i>
                      <span>Slider</span></a>

                      <div id="slideritem" class="collapse">
                        <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">

                          <li class="sidebar-list-item">
                            <a href="{{ url('/slider/create') }}" class="sidebar-link "><i class=" mr-3 text-gray"></i><span>Add Slider</span></a>
                          </li>

                          <li class="sidebar-list-item">
                            <a href="{{ url('/show/slider') }}" class="sidebar-link "><i class=" mr-3 text-gray"></i><span>Show Slider</span></a>
                          </li>

                        </ul>
                      </div>

                    </li>

                    <li class="sidebar-list-item">
                      <a href="#" class="sidebar-link text-muted pl-lg-5">Page two</a>
                    </li>

                    <li class="sidebar-list-item">
                      <a href="#" class="sidebar-link text-muted pl-lg-5">Page three</a>
                    </li>

                    <li class="sidebar-list-item">
                      <a href="#" class="sidebar-link text-muted pl-lg-5">Page four</a>
                    </li>

                  </ul>
                </div>
              </li> 


                <li class="sidebar-list-item"><a href="{{ url('/product') }}" class="sidebar-link text-muted"><i class="o-survey-1 mr-3 text-gray"></i><span>Add Products</span></a></li>


                <li class="sidebar-list-item"><a href="{{ url('/contact') }}" class="sidebar-link text-muted"><i class="fa fa-info-circle mr-3 text-gray"></i><span>Add Contact Information</span></a></li>
           
          </ul>

          <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">More</div>
          <ul class="sidebar-menu list-unstyled">
                <li class="sidebar-list-item" >
                  <a class="sidebar-link text-muted" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      <i class="fa fa-sign-out-alt mr-3 text-gray"></i>
                        {{ __('Logout') }}
                  </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                </li>
           
          </ul>
          
        </div>
      <div class="page-holder w-100 d-flex flex-wrap">
        
        @section("body")

        @show

        @section("allcategory")

        @show

        @section('productScript')

        @show
        
        <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100 ">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 text-center text-md-left text-primary">
                <p class="mb-2 mb-md-0">Trend'son &copy; 2018-2020</p>
              </div>
              <div class="col-md-6 text-center text-md-right text-gray-400">
                <p class="mb-0">Design by <a href="#" class="external text-gray-400">ABID HUSSAIN & TEAM</a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    {{-- <script src="{{ URL::asset('website/adminassets/vendor/jquery/jquery.min.js') }}"></script> --}}
    <script src="{{ URL::asset('website/adminassets/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ URL::asset('website/adminassets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <script>
    $(document).ready(function () {
      $("#showSidebar").on('click',function(){
        
         $("#sidebar").toggleClass("show shrink");
      });

      //automatic call ajax

      /*setInterval(fetchdata,5000);*/

    });



    function fetchdata(){
      $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });

        var id =$("#currentMsg").val();

        $.ajax({
          type : 'GET',
          url : '{{URL::to('message')}}',
          datatype: 'json',
          success:function(data){

              if (data > id) {
                var newmsg=data-id;
                $("#showMsg").val(newmsg);

                $("#newNotify").addClass('notification-icon');
              }else{

                $("#showMsg").val(0);
                $("#newNotify").removeClass('notification-icon');
              }

            }
          });
    }
 
  </script>
   
  </body>
</html>