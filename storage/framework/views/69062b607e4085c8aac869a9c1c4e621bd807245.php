<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/public/css/mijn.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Black+And+White+Picture|Indie+Flower|Pattaya|Playfair+Display|Poor+Story|Roboto|Spicy+Rice" rel="stylesheet">
<link href="<?php echo e(asset('/css/mijn.css')); ?>" media="all" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo e(asset('js/mijn.js')); ?>"></script>
<title><?php echo $__env->yieldContent('title'); ?></title>
<script>
	
	
</script>

</head>
<body>
  <div id="output">Standaard</div>
		<div class="hero-image" id="top">
		
    </div>

<div id="strip" style="background-color: black;text-align:center;">
    <img src="/images/banner1.png">
</div>

<div style="overflow:auto">
  <div class="menu">
    <a href="/">Home</a>
    <a href="/gallery1">Gallery</a>
    <a href="/agenda">Agenda</a>    
    <a href="/contact">Contact</a>
    <a href="/boeking_info">Boeking info</a>
    
    <button onclick="myFunction1()">zwart1</button>
    <button onclick="myFunction2()">zwart2</button>
    <button onclick="myFunction3()">wit1</button>
    <button onclick="myFunction4()">wit2</button>
    <button onclick="myFunction5()">lichtblauw</button>
    <button onclick="myFunction6()">donkerblauw</button>
    
    
  </div>
  <?php echo $__env->yieldContent('content'); ?>
  
    <div class="right">
    
  </div>
</div>

<footer>© <b>Dikke Bertha</b></footer>

</body>
</html>
<script type="text/javascript" src="<?php echo e(asset('js/app.min.js')); ?>"></script>