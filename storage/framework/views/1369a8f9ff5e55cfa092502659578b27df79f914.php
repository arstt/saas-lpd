<?php $__env->startSection('title', 'Nasabah'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">
    <h4><?php echo e('Nasabah'); ?></h4>
  </div>
  <div class="container">
    <div class="buttons">
      <a href="<?php echo e(route('nasabah.create')); ?>" class="btn btn-primary">Tambah Data</a>
    </div>
  </div>
  <!-- konten disini -->
  <table class="table" id="myTable">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID Nasabah</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $nasabah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nasabah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($nasabah->id_nasabah); ?></td>
        <td><?php echo e($nasabah->nama); ?></td>
        <td><?php echo e($nasabah->alamat); ?></td>
        <td><?php echo e($nasabah->jenis_kelamin); ?></td>
        <td>
          <div class="buttons">
            <a href="<?php echo e(route('nasabah.show', $nasabah->id)); ?>" class="btn btn-icon btn-info"><i
                class="fas fa-info-circle"></i></a>
            <a href="<?php echo e(route('nasabah.edit', $nasabah->id)); ?>" class="btn btn-icon btn-primary"><i
                class="far fa-edit"></i></a>
            <form method="POST" action="<?php echo e(route('nasabah.destroy', $nasabah->id)); ?>" class="deleted">
              <?php echo method_field("DELETE"); ?>
              <?php echo csrf_field(); ?>
              <button type="submit" class="btn btn-danger btn-icon">
                <i data-feather="delete" class="fa fa-times"></i>
              </button>
            </form>
          </div>
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
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\forstisla\resources\views/nasabah/index.blade.php ENDPATH**/ ?>