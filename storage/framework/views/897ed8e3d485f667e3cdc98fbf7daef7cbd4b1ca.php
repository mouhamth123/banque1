<?php $__env->startSection("content"); ?>
<br><br><br><br><br><br><br><br>
<div class="container">
       <div><p><a href="/image"><?php echo e(__('Enregistrement d\'un produit')); ?></a></p></div>
       <div class="container">


       <?php if($errors->any()): ?>
   <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="alert alert-danger"><?php echo e($error); ?></div>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

           <form action="<?php echo e(route('ajouter_image')); ?>" method="post" enctype="multipart/form-data" >
               <?php echo csrf_field(); ?>
            
               <div>
                   <input type="text" name="nom_image" class="form-control" placeholder="le nom de l'image">
                </div>
           
                <div> <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description"><?php echo e($image->description); ?></textarea> </div>
                     
                <div>
   <select name="categories_id" id="categories_id" class="form-control">
      
       <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <option value="<?php echo e($key); ?>" <?php echo e($key == $image->categories_id ? 'selected="selected"':''); ?> ><?php echo e($value); ?></option>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </select>
</div><br><br>
<div><input type="file" name="images" class="form-control"></div>


               <div>
               <br>
                   <button class="btn btn-primary">Enregistrer</button>
               </div>
               <br>
           </form> 

           <?php $__env->stopSection(); ?>
           
<?php echo $__env->make("layout.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sognane/www/banque/resources/views/image/create.blade.php ENDPATH**/ ?>