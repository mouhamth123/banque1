<?php $__env->startSection("content"); ?>
    
    <div class="container">
    <div class="row">
    <br>
    <?php $__currentLoopData = $image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   
      
       
       
        


<!-- Button trigger modal -->
<div class="col-md-4">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal<?php echo e($image->id); ?>">

<img class="card-img-top"src="<?php echo e($image->images ? asset($image->images) : asset('uploads/images/default.png')); ?>" alt="<?php echo e($image->nom_image); ?>" height="300" width="500">
</button></div><br><br><br><br>

<!-- Modal -->
<div class="modal fade" id="editModal<?php echo e($image->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">World pictures</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top"src="<?php echo e($image->images ? asset($image->images) : asset('uploads/images/default.png')); ?>" alt="<?php echo e($image->nom_image); ?>" height="300" width="500">
      
      </div>
      <div class="modal-body">
      <div><strong><?php echo e($image->nom_image); ?></strong> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <p>Description:<?php echo e($image->description); ?></p></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Quitter</button>
        <div><a href="<?php echo e(route('download_image',$image->id)); ?>" class="btn btn-primary" >telecharger</a></div>
      </div>
    </div>
  </div>
</div>


        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    
   <br>
  </div>

<?php $__env->stopSection(); ?>
       

         

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sognane/www/banque/resources/views/categories/nature.blade.php ENDPATH**/ ?>