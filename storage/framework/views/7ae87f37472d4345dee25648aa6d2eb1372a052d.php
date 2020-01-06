<form action="<?php echo e(route('update_image',['id'=>$image->id])); ?>" method="post" enctype="multipart/form-data">
   <?php echo csrf_field(); ?>
   <?php echo method_field('patch'); ?>
   
   <div ><input type="text" name="nom_image" class="form-control" placeholder="le nom du produit" value="<?php echo e($image->nom_image); ?>"></div>
   <div> <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description"><?php echo e($image->description); ?></textarea> </div>
                     
    <div>

    <div class="row">
   <div class="col-6 text-right"><img src="<?php echo e(asset($image->images)); ?>" alt="<?php echo e($image->nom_image); ?>" width="100"></div><div class="col-6"><h3>Chargez une autre image pour remplacer celle-ci</h3></div>
</div>
<div>
   <input type="file" name="images" class="form-control">
</div>


   <div>
   <select name="categories_id" id="categories_id" class="form-control">
      
       <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <option value="<?php echo e($key); ?>" <?php echo e($key == $image->categories_id ? 'selected="selected"':''); ?> ><?php echo e($value); ?></option>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </select>
</div>
   <div> <button class="btn btn-primary">Editer</button> </div>
</form>
<?php /**PATH /home/sognane/www/banque/resources/views/image/edit.blade.php ENDPATH**/ ?>