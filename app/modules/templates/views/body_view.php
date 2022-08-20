<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo constant("SITENAME")?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" href="<?php echo base_url();?>assets/img/favicon.png" type="image/x-icon" />

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/font-awesome/css/font-awesome.min.css">

    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/select2/css/select2.min.css">

    <!-- Date Time Picker -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datetimepicker/jquery.datetimepicker.css">
    
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/export/buttons.dataTables.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">

    <script>
    var base_url = '<?php echo base_url()?>';
    var csrf_name = '<?php echo $this->security->get_csrf_token_name(); ?>',
        csrf_hash = '<?php echo $this->security->get_csrf_hash(); ?>';
    </script>
    <!-- jQuery 3 -->
    <script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper context">
        <header class="main-header">
            <a href="<?php echo base_url();?>portal/dashboard" class="logo">
                <span class="logo-mini"><?php echo SITENAME_MINI; ?></span>
                <span class="logo-lg"><?php echo SITENAME; ?></span>
            </a>

            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="<?php echo base_url().'portal/member/profile/store';?>">
                                <i class="fa fa-user"></i> Profile
                            </a>
                        </li>
                        <li class="dropdown user user-menu">
                            <a href="<?php echo base_url();?>portal/security/auth/logout">
                                <i class="fa fa-gears"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">
            <section class="sidebar">

                <ul class="sidebar-menu" data-widget="tree">
                    <li class="active">
                        <a href="<?php echo base_url();?>portal/dashboard">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                      <li class="treeview">
                    <a href="#">
                        <i class="fa fa-address-card-o"></i>
                        <span>Member Profile</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?php echo base_url().'portal/member/Profile/view'.qString(); ?>"><i class="fa fa-arrow-right"></i>Nominee Info</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'portal/member/Profile/change';?>"><i class="fa fa-arrow-right"></i>Change Member Profile</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'portal/member/Profile/recieptlist';?>"><i class="fa fa-arrow-right"></i> Receipt List</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'portal/member/Profile/store';?>"><i class="fa fa-arrow-right"></i> Profile View</a>
                        </li>
                    </ul>
                </li>

                </ul>
            </section>
        </aside>

        <div class="content-wrapper">
            <?php $this->load->view($content_view); ?>
        </div>

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                Developed by <a href="http://ascentict.com" target="_blank">Ascent Corporation</a>
            </div>
            <strong>
                Copyright &copy; <?php echo date('Y'); ?> <?php echo constant("SITENAME")?>.
            </strong> All rights reserved.
        </footer>
    </div>

    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Select2 -->
    <script src="<?php echo base_url();?>assets/plugins/select2/js/select2.full.min.js"></script>
    
    <!-- Date Time Picker -->
    <script src="<?php echo base_url();?>assets/plugins/datetimepicker/jquery.datetimepicker.full.min.js"></script>

    <!-- DataTables -->
    <script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

    <!-- DataTables EXPORT OPTION -->
    <script src="<?php echo base_url();?>assets/plugins/datatables/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/datatables/export/jszip.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/datatables/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/datatables/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/datatables/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/datatables/export/buttons.print.min.js"></script>

    <!-- CK Validator -->
    <script src="<?php echo base_url();?>assets/plugins/validator/validator.min.js"></script>

    <script src="<?php echo base_url();?>assets/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>

    <!-- App -->
    <script src="<?php echo base_url();?>assets/js/app.min.js"></script>
</body>
</html>