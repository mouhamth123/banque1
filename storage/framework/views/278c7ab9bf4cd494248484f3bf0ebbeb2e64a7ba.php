<?php $__env->startSection("content"); ?>


<br><form action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" name="nv_actualite">
<table width="100%" border="0" cellspacing="8em">
                   
      <tr>
                    <td width="20%">Titre</td>
                    <td width="65%"><input type="text" name="titre" id="titre"></td>
                  </tr>
                  <tr>
                    <td>Détails</td>
                    <td><textarea name="commentaire" id="commentaire" cols="45" rows="10"></textarea></td>
            </tr>
                   
                  <tr>
                    <td>Source</td>
                    <td><input type="text" name="source" id="source"></td>
                  </tr>
                  <tr>
                    <td>Date</td>
                    <td><input type="text" name="date_actualite" id="date_actualite"></td>
                  </tr>
                   
                   
                  <tr>
                    <td>Etat</td>
                    <td><select name="etat" id="etat">
                      <option value="1" selected>Affiché</option>
                      <option value="0">Masqué</option>
                    </select></td>
                  </tr>
                  <tr>
                    <td>Photo</td>
                    <td><input type="file" name="photo" id="photo"></td>
                  </tr>
                  <tr>
                    <td colspan="2"><h5><em>(*) champs  obligatoires | Tailles des image (200x150)</em></h5>                      </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><input name="annule" type="reset" class="formbutton-reset" value="Annuler">
                        <input name="envoye" type="submit" class="formbutton" value="Enregistrer"/></td>
                  </tr>
      </table>
     
                      <input type="hidden" name="MM_insert" value="nv_actualite">
          </form>
             
      </article>
  
<?php $__env->stopSection(); ?>
<?php $__env->startSection('menu'); ?>
<li class="nav-item">
            <a href="index.blade.php" class="btn btn-primary js-scroll-trigger">Accueil</a>
</li> &nbsp &nbsp &nbsp
<li class="nav-item">
            <a href="inscription.blade.php" class="btn btn-primary js-scroll-trigger">Inscription</a>
</li>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sognane/www/banque/resources/views/layout/ajoute_image.blade.php ENDPATH**/ ?>