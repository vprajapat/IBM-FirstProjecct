<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <title>Yadupati Singhania Institute of Technology</title>
</head>

<body>
    <header>
        <div class="container-fluid">


            <div class="row img_color">
                <img src="./img/YPS_logo.png" class="rounded" alt="Cinque Terre">
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">YPS ITI</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item border-end">
                            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item dropdown border-end">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                About Us
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{url('/introduction')}}">Introduction</a></li>
                                <li><a class="dropdown-item" href="#">Governing body</a></li>
                                <li><a class="dropdown-item" href="#">Message</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown border-end">
                            <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Infrastructure
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="border-bottom"><a class="dropdown-item" href="#">Green Building</a></li>
                                <li class="border-bottom"><a class="dropdown-item" href="#">Library </a></li>
                                <li><a class="dropdown-item" href="#">Computer Lab</a></li>

                            </ul>

                        </li>
                        <li class="nav-item dropdown border-end">
                            <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Training
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="border-bottom"><a class="dropdown-item " href="#">Introduction</a></li>
                                <li class="border-bottom"><a class="dropdown-item" href="#">Instructor Details</a></li>
                                <li><a class="dropdown-item" href="#">Industry Institute linkage</a></li>

                            </ul>
                            {{-- hhhhhhhhh --}}
                        </li>
                        <li class="nav-item dropdown border-end">
                            <a class="nav-link text-dark dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Courses
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="border-bottom text-dark"><a class="dropdown-item " href="#">ICTSM</a></li>
                                <li class="border-bottom text-white"><a class="dropdown-item " href="#">EM</a></li>
                                <li class="border-bottom text-white"><a class="dropdown-item " href="#">EL</a></li>
                                <li class="border-bottom text-white"><a class="dropdown-item " href="#">RAC</a></li>
                                <li class="border-bottom text-white"><a class="dropdown-item" href="#">MMV </a></li>
                                <li><a class="dropdown-item text-white" href="#">FITTER</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown border-end">
                            <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Achievement
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="border-bottom"><a class="dropdown-item " href="#">Placement</a></li>
                                <li class="border-bottom"><a class="dropdown-item " href="#">ISO Certification</a></li>
                                <li class="border-bottom"><a class="dropdown-item " href="#">Results</a></li>
                                <li><a class="dropdown-item " href="#">Our State Toppers</a></li>



                            </ul>
                        </li>
                        <li class="nav-item border-end">
                            <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                        </li>


                    </ul>
                    <form class="d-flex">
                       
                        <button class="btn btn-outline-success" > <a href="{{route('student.register')}}" class="text-decoration-none"> Trainee Registration </a></button>

                        
                       
                      
                    </form>
                    <form class="d-flex">
                       
                       
                        <div class="ml-2">
                        
                        <button class="btn btn-outline-success ml-1" > <a href="{{route('student.view')}}" class="text-decoration-none"> View Registered Trainee  </a></button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>




    </header>
