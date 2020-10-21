<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <style>
        .panel .mce-panel {
            border-left-color: #fff;
            border-right-color: #fff;
        }

        .panel .mce-toolbar,
        .panel .mce-statusbar {
            padding-left: 20px;
        }

        .panel .mce-edit-area,
        .panel .mce-edit-area iframe,
        .panel .mce-edit-area iframe html {
            padding: 0 10px;
            min-height: 350px;
        }

        .mce-content-body {
            color: #555;
            font-size: 14px;
        }

        .panel.is-fullscreen .mce-statusbar {
            position: absolute;
            bottom: 0;
            width: 100%;
            z-index: 200000;
        }

        .panel.is-fullscreen .mce-tinymce {
            height:100%;
        }

        .panel.is-fullscreen .mce-edit-area,
        .panel.is-fullscreen .mce-edit-area iframe,
        .panel.is-fullscreen .mce-edit-area iframe html {
            height: 100%;
            position: absolute;
            width: 99%;
            overflow-y: scroll;
            overflow-x: hidden;
            min-height: 100%;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title', "Resultats de l'evaluation"); ?>

<?php $__env->startSection('page_header'); ?>
    <h1 class="page-title">
        <i class=""></i>Resultats de l'evaluation de "<?php echo e($user); ?>"</h1>
    <?php echo $__env->make('voyager::multilingual.language-selector', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-content container-fluid">
        <div class="col-md-12 col-lg-12">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Groupes</th>
                        <th>Questions</th>
                        <th>Reponses</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $reponses->contenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $reponse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($reponse != ""): ?>
                    <tr role="row" class="odd">
                        <td class="sorting_1"><?php echo e(explode('_',$key)[1]); ?></td>
                        <td><?php if(explode('_',$key)[1] == "probleme"): ?> <?php $__currentLoopData = $problemes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $probleme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($probleme->id == explode('_',$key)[2]): ?> <?php echo e($probleme->question); ?>  <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php elseif(explode('_',$key)[1] == "developpement"): ?> <?php $__currentLoopData = $developpements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $developpement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($developpement->id == explode('_',$key)[2]): ?> <?php echo e($developpement->question); ?>  <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php elseif(explode('_',$key)[1] == "client"): ?> <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($client->id == explode('_',$key)[2]): ?> <?php echo e($client->question); ?>  <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php elseif(explode('_',$key)[1] == "performance"): ?> <?php $__currentLoopData = $performances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $performance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($performance->id == explode('_',$key)[2]): ?> <?php echo e($performance->question); ?>  <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php elseif(explode('_',$key)[1] == "produit"): ?> <?php $__currentLoopData = $produits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($produit->id == explode('_',$key)[2]): ?> <?php echo e($produit->question); ?>  <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?></td>
                        <td><?php echo e($reponse); ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Groupe</th>
                        <th>Question</th>
                        <th>Reponse</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script>
    $(document).ready(function() {
 
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            { extend: 'copyHtml5', footer: false },
            { extend: 'excelHtml5', footer: false },
            { extend: 'csvHtml5', footer: false },
            { extend: 'pdfHtml5', footer: false },
        ]
    } );
  $('#example tfoot th').each( function () {
        var title = $(this).text();
        $(this).append( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#example').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );

} );
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('voyager::master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/afq/resources/views/vendor/voyager/donnees-evaluations/read.blade.php ENDPATH**/ ?>