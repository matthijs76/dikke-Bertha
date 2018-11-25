<?php $__env->startSection('title'); ?>
 Gallery
 <?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?>
<head>
<style>
.main {
  width: 80%;
}
.right {
  width: 0;
}
.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media  screen and (max-width: 800px) {
  .column {
      -ms-flex: 50%;
      flex: 50%;
      max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media  screen and (max-width: 600px) {
  .column {
      -ms-flex: 100%;
      flex: 100%;
      max-width: 100%;
}

}
</style>

</head>
<body>
    
		

  <div class="main">
      <div class="header">
          <h1 id="titel">Dikke Bertha photo gallery</h1>
          <p id="secTitel">Koffie op kolen</p>
      </div>
        
        <!-- Photo Grid -->
        <div class="row"> 
          <div class="column">
            <img src="/images/dikke_bertha_old.jpg" style="width:100%">
            <img src="/images/dikke_bertha_old4.jpg" style="width:100%">
            <img src="/images/dikke_bertha_old2.jpg" style="width:100%">
            <img src="/images/dikke_bertha_koffie2.jpg" style="width:100%">
            <img src="/images/dikke_bertha_koffie3.jpg" style="width:100%">            
          </div>
          <div class="column">
            <img src="/images/dikke_bertha_koffie.jpg" style="width:100%">
            <img src="/images/dikke_bertha_koffie2.jpg" style="width:100%">
            <img src="/images/dikke_bertha_old5.jpg" style="width:100%">
            <img src="/images/dikke_bertha_koffie8.jpg" style="width:100%">
            <img src="/images/dikke_bertha_koffie6.jpg" style="width:100%">
            <img src="/images/dikke_bertha_koffie7.jpg" style="width:100%">
            <img src="/images/dikke_bertha_koffie4.jpg" style="width:100%">
          </div>  
          <div class="column">
            <img src="/images/dikke_bertha_koffie5.jpg" style="width:100%">
            <img src="/images/dikke_bertha_koffie10.jpg" style="width:100%">
            <img src="/images/dikke_bertha_koffie17.jpg" style="width:100%">
            <img src="/images/dikke_bertha_koffie9.jpg" style="width:100%">
            <img src="/images/dikke_bertha_koffie10.jpg" style="width:100%">
            <img src="/images/dikke_bertha_koffie16.jpg" style="width:100%">
            <img src="/images/dikke_bertha_koffie18.jpg" style="width:100%">            
          </div>
          <div class="column">
              <img src="/images/dikke_bertha_koffie12.jpg" style="width:100%">
              <img src="/images/dikke_bertha_old3.jpg" style="width:100%">
              <img src="/images/dikke_bertha_old2.jpg" style="width:100%">
              <img src="/images/dikke_bertha_koffie12.jpg" style="width:100%">
              <img src="/images/dikke_bertha_koffie17.jpg" style="width:100%">
              <img src="/images/dikke_bertha_koffie15.jpg" style="width:100%">
          </div>
        </div>
      </div>    
  </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>