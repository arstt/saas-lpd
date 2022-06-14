<div>
    <!-- Sidebar outter -->
    <div class="main-sidebar sidebar-style-2">
        <!-- sidebar wrapper -->
        <aside id="sidebar-wrapper">
            <!-- sidebar brand -->
            <div class="sidebar-brand">
                <a href="<?php echo e(route('welcome')); ?>"><?php echo e(config('app.name', 'Laravel')); ?></a>
            </div>
            <!-- sidebar menu -->
            <ul class="sidebar-menu">
                <!-- menu header -->
                <li class="menu-header">Navigasi</li>
                <!-- menu item -->
                <li class="<?php echo e(Route::is('dashboard') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('dashboard')); ?>">
                        <i class="fas fa-fire"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- menu header -->
                <li class="menu-header">Alat & Analisa</li>
                <!-- menu item -->
                <li class="<?php echo e(Route::is('nasabah.index') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('nasabah.index')); ?>">
                        <i class="fas fa-address-book"></i>
                        <span><?php echo e('Nasabah'); ?></span>
                    </a>
                </li>

                <li class="<?php echo e(Route::is('alternatives.index') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('alternatives.index')); ?>">
                        <i class="fas fa-chart-line"></i>
                        <span><?php echo e('Analisa'); ?></span>
                    </a>
                </li>

                <li class="<?php echo e(Route::is('rank') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('rank')); ?>">
                        <i class="fas fa-chart-bar"></i>
                        <span><?php echo e('Ranking Keputusan'); ?></span>
                    </a>
                </li>

                <!-- menu header -->
                <li class="menu-header">Pengaturan</li>
                <!-- menu item -->

                <li class="<?php echo e(Route::is('billing') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('billing')); ?>">
                        <i class="fas fa-receipt"></i>
                        <span><?php echo e('Langganan'); ?></span>
                    </a>
                </li>
                <li class="<?php echo e(Route::is('profile') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('profile')); ?>">
                        <i class="fas fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
            </ul>
        </aside>
    </div>
</div>
<?php /**PATH /Users/putuardipa/dipgital/forstisla/resources/views/components/sidebar.blade.php ENDPATH**/ ?>