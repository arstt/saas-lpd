<?php $__env->startSection('title', 'Nasabah'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h4><?php echo e('Tambah Data Nasabah'); ?></h4>
    </div>

    <!-- konten disini -->

    <form method="post" action="<?php echo e(route('nasabah.store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <div class="card center">
              <div class="card-body">
                <div class="section-title mt-0">Masukan Data Nasabah</div>

                <div class="form-group">
                  <label for="id_nasabah">Kode Nasabah</label>
                  <input type="text" class="form-control form-control-md" name="id_nasabah" id="id_nasabah" value="<?php echo e(old('id_nasabah', '')); ?>">
                    <?php $__errorArgs = ['id_nasabah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-sm"><?php echo e('required'); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="number" class="form-control form-control-md" name="nik" id="nik" value="<?php echo e(old('nik', '')); ?>">
                      <?php $__errorArgs = ['nik'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <p class="text-sm"><?php echo e('required'); ?></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control form-control-md" name="nama" id="nama" value="<?php echo e(old('nama', '')); ?>">
                      <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <p class="text-sm"><?php echo e('required'); ?></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control form-control-md" name="alamat" id="alamat" value="<?php echo e(old('alamat', '')); ?>">
                      <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <p class="text-sm"><?php echo e('required'); ?></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                    <label for="no_hp">No. HP</label>
                    <input type="text" class="form-control form-control-md" name="no_hp" id="no_hp" value="<?php echo e(old('no_hp', '')); ?>">
                      <?php $__errorArgs = ['no_hp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <p class="text-sm"><?php echo e('required'); ?></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                  <label for="jenis_kelamin">Jenis Kelamin</label>
                  <select class="form-control form-control-sm" id="jenis_kelamin" name="jenis_kelamin">
                    <option value="laki-laki">Laki - Laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
                </div>

                <div class="buttons">
                    <button class="btn btn-primary" value="submit">Tambah Data</button>
                  </div>

              </div>
            </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\web\ardipa\resources\views/nasabah/create.blade.php ENDPATH**/ ?>