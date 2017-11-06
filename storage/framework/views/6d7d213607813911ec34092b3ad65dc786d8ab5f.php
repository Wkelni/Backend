<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Liste Restaurant</div>

                <div class="panel-body">
   
                            <div class="pull-right" style="padding-top:30px">
                                <div class="box-tools" style="display:inline-table">
                                  <div class="input-group">
                                      <input type="text" class="form-control input-sm ng-valid ng-dirty" placeholder="Search" ng-change="searchDB()" ng-model="searchText" name="table_search" title="" tooltip="" data-original-title="Min character length is 3">
                                      <span class="input-group-addon">Search</span>
                                  </div>
                                </div>
                                <a class="btn btn-ajout2" href="<?php echo e(route('register')); ?>" >Ajouter</a>
                         
                    </div>
                    <table class="table table-bordered pagin-table">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>site web</th>
                                <th>Description</th>
                                <th width="220px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr dir-paginate="value in data | itemsPerPage:5" total-items="totalItems">
                                <td>Havana</td>
                                <td>www.havana.com</td>
                                <td>3</td>
                                <td>
                                <a href="<?php echo e(url('/modifier')); ?>" class="btn btn-primary">Modifier</a>
                                <button ng-click="remove(value,$index)" class="btn btn-danger">Supprimer</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>




                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>