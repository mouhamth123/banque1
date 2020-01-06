<?php $__env->startSection("content"); ?>
<div><a href="ajouter image"></a></div>
<form action="route<?php echo e(('ajouter_image')); ?>" methode="post">
<?php echo csrf_field(); ?>
<br>
<br>
<br>
<div><input type="text" name='text' class='form-control' placeholder="le nom de l'image"></div>
<div><button type="submit" class="btn btn-ptimary">ajouter</button> </div>
</form>

  
<?php $__env->stopSection(); ?>
<?php $__env->startSection('menu'); ?>
<li class="nav-item">
            <a href="index.blade.php" class="btn btn-primary js-scroll-trigger">Accueil</a>
</li> &nbsp &nbsp &nbsp
<li class="nav-item">
            <a href="inscription.blade.php" class="btn btn-primary js-scroll-trigger">Inscription</a>
</li>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sognane/www/banque/resources/views/layout/ajouteimage.blade.php ENDPATH**/ ?>