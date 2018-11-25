<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/public/css/mijn.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Black+And+White+Picture|Indie+Flower|Pattaya|Playfair+Display|Poor+Story|Roboto|Spicy+Rice" rel="stylesheet">
<link href="{{ asset('/css/mijn.css') }}" media="all" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="{{ asset('js/mijn.js') }}"></script>
<title>@yield('title')</title>
<script>
	
	
</script>

</head>
<body>
  
		<div class="hero-image" id="top">
		
    </div>



<div style="overflow:auto">
  <div class="menu">
    <a href="/">Home</a>
    <a href="/gallery1">Gallery</a>
    <a href="/agenda">Agenda</a>    
    <a href="/contact">Contact</a>
    <a href="/boeking_info">Boeking info</a>
    
    
    
    
  </div>
  @yield('content')
  
    <div class="right">
    
  </div>
</div>

<footer><div id="strip" style="background-color: black;text-align:center;">
    <img src="/images/banner1.png">
</div>© <b>Dikke Bertha</b></footer>

</body>
</html>
<script type="text/javascript" src="{{ asset('js/app.min.js') }}"></script>