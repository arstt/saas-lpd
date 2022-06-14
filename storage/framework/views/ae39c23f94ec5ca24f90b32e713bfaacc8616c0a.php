<?php $__env->startSection('title', 'Ranking'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h4><?php echo e('Ranking Analisa'); ?></h4>
    </div>
    <!-- konten disini -->
    <table class="table" id="myTable">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Resiko Gagal Bayar</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $alternatives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alternative): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(++$i); ?></td>
                <td><?php echo e($alternative->nasabah->nama); ?></td>
                <?php
                $src = $scores->where('ida', $alternative->id)->all();
                $total = 0;
                ?>
                <?php $__currentLoopData = $src; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                $total += $s->bobot;
                ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if($total > 80): ?>
                <td>
                    <h2 class="badge badge-success">Rendah</h2>
                </td>
                <?php elseif($total < 30): ?> <td>
                    <h2 class="badge badge-danger">Rendah</h2>
                    </td>
                    <?php else: ?>
                    <td>
                        <h2 class="badge badge-warning">Cukup</h2>
                    </td>
                    <?php endif; ?>
                    <td>
                        <a href="<?php echo e(route('show.rank', $alternative->id)); ?>" class="btn btn-icon btn-info"><i
                                class="fas fa-info-circle"></i></a>
                    </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

</div>
<div class="modal fade" id="modalShow" tabindex="-1" role="dialog" data-backdrop="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body bobot-card">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body limit-card">
                                <table>
                                    <tr>
                                        <td>Tenor 12 Bulan</td>
                                        <td class="12bulan">: 90</td>
                                    </tr>
                                    <tr>
                                        <td>Tenor 24 Bulan</td>
                                        <td class="24bulan">: 90</td>
                                    </tr>
                                    <tr>
                                        <td>Tenor 36 Bulan</td>
                                        <td class="36bulan">: 90</td>
                                    </tr>
                                    <tr>
                                        <td>Tenor 48 Bulan</td>
                                        <td class="48bulan">: 90</td>
                                    </tr>
                                    <tr>
                                        <td>Tenor 60 Bulan</td>
                                        <td class="60bulan">: 90</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="<?php echo e(asset('dist/simple.money.format.js')); ?>"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();

    } );
    $('.btn-info').click(function(e){
        e.preventDefault()
        $.ajax({
            url: $(this).attr("href"),
            method: "GET",
            success: function(res){
                const bobots = res.bobot
                let html = ''
                bobots.forEach((bob, index) => {
                    const des = bob[index]
                    html += `
                    <table>
                        <tr>
                            <td>${des.kriteria}</td>
                            <td>: ${des.bobot}</td>
                        </tr>
                    </table>
                    `
                })
                $('.bobot-card').html(html)
                const limit = res.limit
                $('.12bulan').text(`: Rp ${limit['12bulan'].toLocaleString()}`)
                $('.24bulan').text(`: Rp ${limit['24bulan'].toLocaleString()}`)
                $('.36bulan').text(`: Rp ${limit['36bulan'].toLocaleString()}`)
                $('.48bulan').text(`: Rp ${limit['48bulan'].toLocaleString()}`)
                $('.60bulan').text(`: Rp ${limit['60bulan'].toLocaleString()}`)
                $('#modalShow').modal('show')
            },
            error: (res) => {
                console.log(res.responseJSON)
                Swal.fire("Oops", "Something Wrong!", "error");
            }
        })
    })
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\forstisla\resources\views/rank.blade.php ENDPATH**/ ?>