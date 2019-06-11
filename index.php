<?php require 'inc/_global/config.php'; ?>

<?php require 'inc/dashboards/corporate/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
    <!-- Page JS Plugins CSS -->
    <?php $cb->get_css('js/plugins/slick/slick.css'); ?>
    <?php $cb->get_css('js/plugins/slick/slick-theme.css'); ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<div class="tab-content">
    <div class="tab-pane active" id="home" role="tabpanel">
        <!-- Header -->
        <div class="bg-primary-dark">
            <div class="content content-top">
                <div class="row push">
                    <div class="col-md py-10 d-md-flex align-items-md-center text-center"  style="margin-top:-5%;">
                        <h1 class="text-white mb-0">
                            <span class="font-w300">Hai, Rozak</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->

        <!-- Page Content -->
        <div class="bg-white" data-toggle="appear" data-offset="-2100" data-timeout="90000">
            <!-- Content -->
            <div class="content">
                <div class="col-md-6" data-toggle="appear" data-offset="">
                    <!-- Slider with autoplay and white inner dots -->
                    <div class="block">
                        <!--
                        <div class="block-header block-header-default">
                            <h3 class="block-title"><i class="fa fa-play fa-fw text-primary"></i> Kamu Udah Makan Belum ?</h3>
                        </div>
                        -->
                        <div class="js-slider slick-dotted-inner slick-dotted-white" data-dots="true" data-autoplay="true" data-autoplay-speed="3000">
                            <div>
                                <?php $cb->get_photo(13, false, 'img-fluid'); ?>
                            </div>
                            <div>
                                <?php $cb->get_photo(14, false, 'img-fluid'); ?>
                            </div>
                            <div>
                                <?php $cb->get_photo(24, false, 'img-fluid'); ?>
                            </div>
                        </div>
                    </div>
                    <!-- END Slider with autoplay and white inner dots -->
                </div>
                <h6 class="content-heading"><small>Sinih aku bantu cariin buat kamu</small></h6>
                <!-- Icon Navigation -->
                <div class="row gutters-tiny push">
                    <div class="col-6 col-md-4 col-xl-2" >
                        <a class="block block-rounded block-bordered block-link-shadow text-center" href="javascript:void(0)">
                            <div class="block-content">
                                <p class="mt-5">
                                    <i class="si si-pointer fa-3x text-muted"></i>
                                </p>
                                <p class="font-w600">Tempat Makan</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <a class="block block-rounded block-bordered block-link-shadow text-center" href="javascript:void(0)">
                            <div class="block-content">
                                <p class="mt-5">
                                    <i class="si si-cup fa-3x text-muted"></i>
                                </p>
                                <p class="font-w600">Makanan</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- END Icon Navigation -->
            </div>
            <!-- END Content -->
        </div>
        <!-- END Page Content -->
    </div>
    <div class="tab-pane" id="search" role="tabpanel">
        <!-- Header -->
        <div class="bg-primary-dark">
            <div class="content content-top">
                <div class="row push">
                    <div class="col-md py-10 d-md-flex align-items-md-center text-center"  style="margin-top:-5%;">
                        <h4 class="text-white mb-0">
                            <span class="font-w300">Sinih aku bantu cariin</span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->

        <!-- Page Content -->
        <div class="bg-white" data-toggle="appear" data-offset="-2100" data-timeout="90000">
            <!-- Content -->
            <div class="content">
                    
            </div>
            <!-- END Content -->
        </div>
        <!-- END Page Content -->
    </div>
    <div class="tab-pane" id="favorit" role="tabpanel">
        <!-- Header -->
        <div class="bg-primary-dark">
            <div class="content content-top">
                <div class="row push">
                    <div class="col-md py-10 d-md-flex align-items-md-center text-center"  style="margin-top:-5%;">
                        <h4 class="text-white mb-0">
                            <span class="font-w300">Favorit Kamu Nih</span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->

        <!-- Page Content -->
        <div class="bg-white" data-toggle="appear" data-offset="-2100" data-timeout="90000">
            <!-- Content -->
            <div class="content">
                    
            </div>
            <!-- END Content -->
        </div>
        <!-- END Page Content -->
    </div>
    <div class="tab-pane" id="user" role="tabpanel">
        <!-- Header -->
        <div class="bg-primary-dark">
            <div class="content content-top">
                <div class="row push">
                    <div class="col-md py-10 d-md-flex align-items-md-center text-center"  style="margin-top:-5%;">
                        <h4 class="text-white mb-0">
                            <span class="font-w300">Sinih aku bantu cariin</span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->

        <!-- Page Content -->
        <div class="bg-white" data-toggle="appear" data-offset="-2100" data-timeout="90000">
            <!-- Content -->
            <div class="content">
                    
            </div>
            <!-- END Content -->
        </div>
        <!-- END Page Content -->
    </div>
</div>

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/chartjs/Chart.bundle.min.js'); ?>
<?php $cb->get_js('js/plugins/slick/slick.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/db_corporate.min.js'); ?>
<!-- Page JS Helpers (Slick Slider plugin) -->
<script>jQuery(function(){ Codebase.helpers('slick'); });</script>


<?php require 'inc/_global/views/footer_end.php'; ?>