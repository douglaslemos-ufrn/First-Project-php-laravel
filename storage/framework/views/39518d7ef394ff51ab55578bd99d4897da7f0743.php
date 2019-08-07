<?php $__env->startSection('title','Index'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <table class="tabelademusicas">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Musica</th>
                    <th>Artista/Banda</th>
                    <th colspan="2" >Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $musicas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $musica): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($musica->rank); ?></td>
                        <td><?php echo e($musica->nome_musica); ?></td>
                        <td><?php echo e($musica->nome_artista); ?></td>
                        <td><a href="<?php echo e(route('delete', $musica->id)); ?>"> Deletar </a></td>
                        <td><a href="<?php echo e(route('edit', $musica->id)); ?>"> Edit </a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr> <td> <a href="<?php echo e(route('cadastrar')); ?>"> Cadastrar </a> </td> </tr>
            </tbody>
        </table>
       
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lais-ep_9/Desktop/ProjetoDouglas/resources/views/index.blade.php ENDPATH**/ ?>