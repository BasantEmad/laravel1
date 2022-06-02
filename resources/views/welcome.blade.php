@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Oswald:wght@200&family=Reem+Kufi&family=Rubik+Beastly&display=swap" rel="stylesheet"> 
     
    </head>
    <body>
       
            <!--carsoul-->
          
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset("pic/images.jpg")}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset("pic/what-kind-of-teachers-are-in-demand.jpg")}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset("pic/business-class-for-kids.jpg")}}" class="d-block w-100" alt="...">
                  </div>
                </div>
               <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </button>
              </div>

          
        
              <!--endcarsoul-->

              <!--section2-->
              <h2 class="welcome">STUDENT ACTIVITIES</h2>
              <div class="container">
                <div class="row">
                <div class="col-sm-4">
                  <img class="img2" src="{{asset("pic/After-school-activities-–-Less-may-be-better.jpeg")}} ">
                </div>
                <div class="col-sm-4">
                  <img  class="img2" src="{{asset("pic/back-to-school-activities.jpg")}}"alt="">

                </div>
                <div class="col-sm-4">
                  <img class="img2" src="{{asset("pic/images.jpeg")}}"  alt="">
                </div>
                </div>
               </div>
       
              <!--endsection2-->
    </body>
    
</html>
@endsection




