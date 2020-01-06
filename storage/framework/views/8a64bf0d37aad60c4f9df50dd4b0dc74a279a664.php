<?php $__env->startSection("content"); ?>
<br><br><br><br><br><br><br><br>
<?php if(session('success')): ?>
   <div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>

<div><a href="image/create" class="btn btn-primary">ajouter une image</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a href="/home" class="btn btn-primary">Accueil</a></div><br>
<table borderbgcolor="yellow" bordercolor="green" class="table table-striped">
       <tr>
           <th>#</th>        
             <th>Nom image</th>          
            <th>Description</th>
            <th>Images</th>
            <th><th>Edite & Suppression</th></th>
       </tr>
       <?php $__currentLoopData = $image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <tr>
               <th><?php echo e($image->id); ?></th>
               <th><?php echo e($image->nom_image); ?></th>
               <th><?php echo e($image->description); ?></th>
               <th><img src="<?php echo e($image->images ? asset($image->images) : asset('uploads/images/default.png')); ?>" alt="<?php echo e($image->nom_image); ?>" width="50"style="border-color:#FF0000"></th>
               <th><a href="<?php echo e(route('editer_image',['id'=>$image->id])); ?>" class="btn btn-primary">Editer</a></th>
               <th>           <form action="image/<?php echo e($image->id); ?>" method="post">
               <?php echo csrf_field(); ?>
               <?php echo method_field('delete'); ?>
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form></th>
           </tr>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </table>

  


<?php $__env->stopSection(); ?> 
<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sognane/www/banque/resources/views/image/image.blade.php ENDPATH**/ ?>