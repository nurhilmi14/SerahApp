<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_header_fixed = true;
$cb->l_header_style = 'glass';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Header Section -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo21@2x.jpg');">
    <div class="bg-white-op-90">
        <div class="content content-full content-top">
            <h1 class="py-50 text-center">Welcome Admin!</h1>
        </div>
    </div>
</div>
<!-- END Header Section -->

<!-- Page Content -->
<div class="content">
    <?php require 'content-index.php' ?>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>