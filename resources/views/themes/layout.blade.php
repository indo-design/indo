<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INDO 3D DESIGN</title>

    <!--Google web fonts-->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,300italic,400italic,600,700,600italic,200,200italic' rel='stylesheet' type='text/css'>    
    <link href='http://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link href={{ asset('css/bootstrap.min.css') }} rel="stylesheet">

    <link rel="stylesheet" type="text/css" href={{ asset('css/animate.css') }}>

    <!-- font awesome-->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('css/skillset.css') }}>


    <link rel="stylesheet" type="text/css" href={{ asset('css/owl.carousel.css') }}> 
    <link rel="stylesheet" type="text/css" href={{ asset('css/owl.transitions.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('css/owl.theme.css') }}>

    <link rel="stylesheet" type="text/css" href={{ asset('style.css') }}>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!--preloader-->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div> 

@include('themes.partials.navbar')

@include('themes.partials.slider')

@include('themes.partials.service')

@include('themes.partials.works')
      


<div class="getit_area">
  <div class="container">
    <div class="row">
      <div class="getit_section">
        <h1>The most impressive template you'll find.Get it now!</h1>
      </div>  
    </div>
  </div>
</div><!--  getit area end -->


@include('themes.partials.portofolio')

@include('themes.partials.skills')

@include('themes.partials.blog')


@include('themes.partials.price')


@include('themes.partials.testimony')

{!! Form::open(['route' => 'post']) !!}
    @include('themes.partials.contact')
{!! Form::close() !!}


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src={{ asset('js/bootstrap.min.js') }}></script>
    
    <script src={{ asset('js/wow.js') }}></script>

    <script src={{ asset('js/jquery.nicescroll.js') }}></script>
    
    <script type="text/javascript" src={{ asset('js/jquery.easing.min.js') }}></script>  
    <script type="text/javascript" src={{ asset('js/jquery.mixitup.min.js') }}></script>
    <script src={{ asset('js/imagesloaded.pkgd.min.js') }}></script>

   <script src={{ asset('js/skillset.js') }}></script>

   <script src={{ asset('js/owl.carousel.js') }}></script> 


   <script src={{ asset('js/scrollupto.js') }}></script>
   <script type="text/javascript" src={{ asset('js/main.js') }}></script>
</body>
</html>
