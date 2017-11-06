<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modifier Restaurant</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo e(csrf_field()); ?>


                        

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="name" id="name" required="required" placeholder="  &#xf007;  Nom">

                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control reserve-form empty iconified" id="email" required="required" placeholder="  &#xf0e0;  e-mail">
                                            </div>
                                            <div class="form-group">
                                                <input type="fax" name="fax" class="form-control reserve-form empty iconified" id="fax" required="required" placeholder="  &#xf1d8;  fax">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="specialite" id="specialite" required="required" placeholder="  &#xf007;  spécialité">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="fraisLiv" id="fraisLiv" required="required" placeholder="  &#xf155;  Frais de livraison">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="tempsprepa" id="tempsprepa" required="required" placeholder="&#xf017;  Temps de préparation">
                                            </div>
                                            
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="siteweb" id="siteweb" required="required" placeholder="  &#xf1d8;  Site web">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="Adresse" class="form-control reserve-form empty iconified" id="Adresse" required="required" placeholder="  &#xf015;  Adresse">
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" class="form-control reserve-form empty iconified" name="tel" id="tel" required="required" placeholder="  &#xf095;  Tel">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="modespaiement" id="modespaiement" required="required" placeholder="&#xf155;  Modes de paiement">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="horaires" id="horaires" required="required" placeholder="  &#xf017;  Horaires">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="tempsliv" id="tempsliv" required="required" placeholder="&#xf017;  Temps de livraison">
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <textarea type="text" name="message" class="form-control reserve-form empty iconified" id="message" rows="3" required="required" placeholder="  &#xf086;  Description"></textarea>
                                        </div>
                

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-ajout">
                                    Modifier
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>