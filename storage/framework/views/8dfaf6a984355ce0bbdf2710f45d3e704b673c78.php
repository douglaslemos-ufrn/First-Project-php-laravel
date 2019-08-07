<?php $__env->startSection('title','Cadastrar'); ?>
<?php $__env->startSection('content'); ?>
    <h2> Cadastrar Musica </h2>
    <form action="<?php echo e(route('salvar')); ?>"  method="post">
        <?php echo e(csrf_field()); ?>

        <div>
            <label>Nome da Musica</label>
            <input type="text" name="nome_musica"  placeholder="Nome da Musica">
        </div> 
        <div>
            <label>Nome do Artista</label>
            <input type="text" name="nome_artista" placeholder="Nome do Artista">
        </div> 
        <div>
            <label>Rank</label>
            <input type="number" name="rank_musica" placeholder="Nome do Artista">
        </div>

        <button type="submit"> Salvar </button>
    
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lais-ep_9/Desktop/ProjetoDouglas/resources/views/cadastrar.blade.php ENDPATH**/ ?>