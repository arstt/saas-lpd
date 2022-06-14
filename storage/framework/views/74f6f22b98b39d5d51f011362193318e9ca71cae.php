<?php $__env->startSection('title', 'Analisa'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h4><?php echo e('Tambah Analisa'); ?></h4>
    </div>

    <!-- konten disini -->
    <form method="POST" action="<?php echo e(route('alternatives.store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <div class="card center">
              <div class="card-body">
                <div class="section-title mt-0">Masukan Data Kreditur</div>

                <div class="form-group">
                  <label for="nasabah_id">Nama Nasabah</label>
                  <select name="nasabah_id" class="form-control">
                        <option value="">- Pilih Nasabah</option>
                        <?php $__currentLoopData = $nasabahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nasabah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($nasabah->id); ?>"><?php echo e($nasabah->nama); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                    <?php $__errorArgs = ['nasabah_id'];
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
                    <label for="nilai_jaminan">Nilai Jaminan</label>
                    <input type="number" class="form-control form-control-md" name="nilai_jaminan" id="nilai_jaminan" value="<?php echo e(old('nilai_jaminan', '')); ?>">
                      <?php $__errorArgs = ['nilai_jaminan'];
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
                    <label for="nilai_pendapatan">Nilai Pendapatan</label>
                    <input type="number" class="form-control form-control-md" name="nilai_pendapatan" id="nilai_pendapatan" value="<?php echo e(old('nilai_pendapatan', '')); ?>">
                      <?php $__errorArgs = ['nilai_pendapatan'];
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

                <?php $__currentLoopData = $kriterias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kriteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="form-group">
                    <label for="kriteria[<?php echo e($kriteria->id); ?>]"><?php echo e($kriteria->nama); ?></label>
                        <select class="form-control form-control-sm" id="kriteria[<?php echo e($kriteria->id); ?>]" name="kriteria[<?php echo e($kriteria->id); ?>]">
                            <?php
                                $resource = $bobots->where('kriteria_id', $kriteria->id)->all();
                            ?>

                            <?php $__currentLoopData = $resource; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($cr->id); ?>"><?php echo e($cr->deskripsi); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="buttons">
                    <button class="btn btn-primary" value="submit">Masukan</button>
                  </div>

              </div>
            </div>
    </form>
</div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\foorstisla\resources\views/alternative/create.blade.php ENDPATH**/ ?>