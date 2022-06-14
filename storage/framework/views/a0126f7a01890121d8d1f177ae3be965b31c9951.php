<?php $__env->startSection('title', 'Nasabah'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title', 'Analisa'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">
    <h4><?php echo e('Analisa'); ?></h4>
  </div>
  <div class="container">
    <div class="buttons">
      <a href="<?php echo e(route('alternatives.create')); ?>" class="btn btn-primary">Tambah Data Analisa</a>
    </div>
  </div>
  <!-- konten disini -->
  <table class="table" id="myTable">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Nama Nasabah</th>
        <?php $__currentLoopData = $kriterias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kriteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <th><?php echo e($kriteria->nama); ?></th>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <?php $__currentLoopData = $alternatives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alternative): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <td><?php echo e($alternative->nasabah->nama); ?></td>
        <?php
        $src = $scores->where('ida', $alternative->id)->all();
        ?>
        <?php $__currentLoopData = $src; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <td><?php echo e($s->deskripsi); ?></td>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <td>
          <div class="buttons">
            <a href="<?php echo e(route('alternatives.edit', $alternative->id)); ?>" class="btn btn-icon btn-primary"><i
                class="far fa-edit"></i></a>
            <form method="POST" action="<?php echo e(route('alternatives.destroy', $alternative->id)); ?>" class="deleted">
              <?php echo method_field("DELETE"); ?>
              <?php echo csrf_field(); ?>
              <button type="submit" class="btn btn-danger btn-icon">
                <i data-feather="delete" class="fa fa-times"></i>
              </button>
            </form>
          </div>
          </form>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
            $('#myTable').DataTable();
        } );
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\forstisla\resources\views/alternative/index.blade.php ENDPATH**/ ?>