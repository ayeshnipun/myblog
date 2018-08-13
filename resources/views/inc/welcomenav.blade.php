
{{-- <nav class="navbar navbar-expand-md navbar-light" id="navb"> --}}
<div class="nav-wrapper" style="height:80px;">
<nav class="navbar navbar-expand-md sticky" id="navbar" style="height:80px">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Tec Hour') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
            </ul>

            {{-- center of navbar --}}
            <div class="nav-link searchBar">
                    {!! Form::open(['route' => 'pages.searchPost', 'method'=>'POST', 'class'=> 'form-inline mt-2 mt-md-1']) !!}
                    <div>
                        {{Form::text('name', '', ['class'=>'form-control searchBox', 'placeholder'=>'Enter Keywords..'])}}
                        {{Form::button('<i class="fa fa-search"></i>', ['class'=>'btn btn-primary searchBtn', 'type'=>'submit'])}}
                    </div>
                {!! Form::close() !!}
            </div>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto topnav-right">
                <li>
                    <a class="nav-link" href="/blog">Blog</a>
                </li>
                <li>
                    <a class="nav-link" href="/aboutus">About Us</a>
                </li>
                
                
                {{-- <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle compcol" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre onclick="document.getElementById('myDropdown').classList.toggle('show');">
                      Tutorials<span class="caret"></span>
                    </a>
                    
                    <div class="dropdown-menu" id="myDropdown" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item compcol" href="#">Link 1</a>
                        <a class="dropdown-item compcol" href="#">Link 2</a>
                        <a class="dropdown-item compcol" href="#">Link 3</a>
                    </div>
                </li>  --}}
            </ul>
        </div>
    </div>
</nav>
</div>


<style>
    .searchBox:focus {
        background-color: transparent;
    }

    .searchBar{
    }

    .searchBtn{
        background-color: transparent;
        height: 38px;
    }

    .searchBtn:hover{
        background-color: transparent;
    }
    
    .searchBox{
        font-size: 15px;
        color: white !important;
        background-color: transparent;
        width: 6cm !important;
    }

    .navbar a{
        color: white !important;
        font-size: 25px;
        
    }

    .navbar a:hover{
        opacity: 0.5 !important;
    }

    .navbar-toggler{
        background-color: aliceblue;
    }

    .dropdown-menu{
        background-color: transparent !important;
    }

    .dropdown-item:hover{
        color: red !important;
    }

    .sticky {
        position: fixed;
        z-index: 1;
        top: 0;
        width: 100%;
    }
   
    .appearChanger{
        background-color: #1f1f14 !important;
    }
    /* .navbar{
        z-index:1;
        position: fixed;
    } */

    /* .topnav-right{
        float: right;
    } */
    
</style>

<script>
      window.onscroll = function() {myFunction()};
      var navbar = document.getElementById("navbar");
      var sticky = navbar.offsetTop;
      function myFunction() {
          if (window.pageYOffset >= 150) {
              navbar.classList.add("appearChanger")
          } else {
              navbar.classList.remove("appearChanger");
          }
      }
</script>


