<?php $__env->startSection('title', 'Nasabah'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h4><?php echo e('Nasabah'); ?></h4>
    </div>
    <div class="container">
        <div class="buttons">
          <a href="<?php echo e(route('nasabah.index')); ?>" class="btn btn-primary">Kembali</a>
        </div>
      </div>
    <!-- konten disini -->
    <div class="form-group">
        <div class="card center">
          <div class="card-body">
            <div class="section-title mt-0"> Data Lengkap Nasabah</div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID Nasabah</th>
                <td><?php echo e($nasabah->id_nasabah); ?></td>
            </tr>
            <tr>
                <th scope="col">NIK</th>
                <td><?php echo e($nasabah->nik); ?></td>
            </tr>
            <tr>
                <th scope="col">Nama</th>
                <td><?php echo e($nasabah->nama); ?></td>
            </tr>
            <tr>
                <th scope="col">Alamat</th>
                <td><?php echo e($nasabah->alamat); ?></td>
            </tr>
            <tr>
                <th scope="col">No. Hp</th>
                <td><?php echo e($nasabah->no_hp); ?></td>
            </tr>
            <tr>
                <th scope="col">Jenis Kelamin</th>
                <td><?php echo e($nasabah->jenis_kelamin); ?></td>
            </tr>
        </thead>
      </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\web\ardipa\resources\views/nasabah/show.blade.php ENDPATH**/ ?>