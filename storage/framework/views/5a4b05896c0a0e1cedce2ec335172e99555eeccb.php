 <?php $__env->startSection('content'); ?>
 
<div class="main">
	  <H1 id="titel">Agenda</H1>
    
    <h2 id="secTitel">Wij zijn te vinden op de volgende evenementen:</h2>
    <p  style= "text-align: center;">
    
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li id="item"><?php echo e($Item->item); ?> </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    
    </p>
   
      <div id="mainpic">
      </div>
      </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>