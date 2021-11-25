<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.12
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<html lang="en">

<?= view('admin/main/head'); ?>

    <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
        <?= view('admin/main/header'); ?>
        <!-- Begin page -->
        <div class="app-body" id="pjax-container">
        <!-- <div class="row" id="body-row"> -->
            <?= view('admin/main/leftsidebar'); ?>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <main class="main" >
                <!-- Breadcrumb-->
                <?= view('admin/main/topbar');?>
                <?php 
                    $data = array();
                    $data['main_content'] = $main_content;
                    echo view('admin/main/content',$data);
                ?>
                <!-- <= view('admin/main/content');?> -->
            </main>

            <aside class="aside-menu">
                <?= view('admin/main/rightaside'); ?>
            </aside>
            
            <!-- <div class="content-page w-100" style="margin-right:-250px"> 
            
                <<php
                $data = array();
                $data['main_content'] = $main_content;
                $this->load->view('admins/main/main_content', $data);
                ?>

               
            </div> -->

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


<!-- 
            </div>body-row END -->
        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        
        <!-- /Right-bar -->

    </body>
<?= view('admin/main/footer'); ?>
</html>
