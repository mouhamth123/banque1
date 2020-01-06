<?php $__env->startSection("content"); ?>

<table class="table">
  <thead>
    <tr>
      <th>identifient</th>
      <th>nom</th>
      <th>email</th>
      <th></th>
      
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $u; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ui): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th ><?php echo e($ui->id); ?></th>
      <td><?php echo e($ui->name); ?></td>
      <td><?php echo e($ui->email); ?></td>
      <th>           <form action="user/{id}" method="post">
               <?php echo csrf_field(); ?>
               <?php echo method_field('delete'); ?>
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form></th>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
  </tbody>
</table>

  
<?php $__env->stopSection(); ?>
<?php $__env->startSection('menu'); ?>

<li class="nav-item">
            <a href="espaceinscription.html" class="btn btn-primary js-scroll-trigger">Accueil</a>
</li> &nbsp &nbsp &nbsp
<li class="nav-item">
            <a href="espaceinscription.html" class="btn btn-primary js-scroll-trigger">espace membre</a>
</li>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sognane/www/banque/resources/views/accueil.blade.php ENDPATH**/ ?>