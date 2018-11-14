<?php $__env->startSection('title'); ?>
 Contact us
 <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="main">
	  <H1 id="titel">Dikke Bertha koffie op kolen</H1>
    
      <div id="formulier">        
        <div class= contact>
            <?php if(Session::has('flash_message')): ?>
            <div class="alert alert-succes"><?php echo e(Session::get('flash_message')); ?></div>
            <?php endif; ?>
            <form action="<?php echo e(route('contact.store')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <input type="text" name="firstname" value="" placeholder="Naam">
                <?php if($errors->has('firstname')): ?>
                    <small class="form-text invalid-feedback"><?php echo e($errors->first('firstname')); ?></small>
                <?php endif; ?>  <br><br>  
                <input type="text" name="lastname" value="" placeholder="Achternaam">
                <?php if($errors->has('lastname')): ?>
                    <small class="form-text invalid-feedback"><?php echo e($errors->first('lastname')); ?></small>
                <?php endif; ?>  <br><br>  
                <input type="email" name="email" value="" placeholder="Uw email adres">
                <?php if($errors->has('email')): ?>
                    <small class="form-text invalid-feedback"><?php echo e($errors->first('email')); ?></small>
                <?php endif; ?>   <br><br> 
                <textarea name="message" rows="10" cols="30" placeholder="Uw vraag"></textarea>
                <?php if($errors->has('message')): ?>
                    <small class="form-text invalid-feedback"><?php echo e($errors->first('message')); ?></small>
                <?php endif; ?>    
                <br>
                <input type="submit">
            </form>
        </div>    
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>