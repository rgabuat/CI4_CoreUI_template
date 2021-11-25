<footer class="app-footer">
            <div>
                <a href="https://coreui.io">CoreUI</a>
                <span>&copy; 2018 creativeLabs.</span>
            </div>
            <div class="ml-auto">
                <span>Powered by</span>
                <a href="https://coreui.io">CoreUI</a>
            </div>
        </footer>
        <!-- CoreUI and necessary plugins-->
        <script src="<?php echo base_url('node_modules/jquery/dist/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('node_modules/popper.js/dist/umd/popper.min.js'); ?>"></script>
        <script src="<?php echo base_url('node_modules/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('node_modules/pace-progress/pace.min.js'); ?>"></script>
        <script src="<?php echo base_url('node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js'); ?>"></script>
        <script src="<?php echo base_url('node_modules/@coreui/coreui/dist/js/coreui.min.js'); ?>"></script>
        <!-- Plugins and scripts required by this view-->
        <script src="<?php echo base_url('node_modules/chart.js/dist/Chart.min.js'); ?>"></script>
        <script src="<?php echo base_url('node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js'); ?>"></script>
        <script src="<?php echo base_url('js/main.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/jquery.pjax.js'); ?>"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('js/app.js'); ?>"></script>
        

        <script type="text/javascript">
            $(function () {
                $(document).ajaxComplete(function () {
                    Pace.restart()
                });
                if ($.support.pjax) {
                    $(document).pjax('a[data-pjax]', '#pjax-container')
                }
            });
        </script>
