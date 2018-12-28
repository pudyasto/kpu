<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Test Query Big Data</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="<?= base_url('assets/adminbsb/plugins/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="<?= base_url('assets/adminbsb/plugins/node-waves/waves.css'); ?>" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="<?= base_url('assets/adminbsb/plugins/animate-css/animate.css'); ?>" rel="stylesheet" />

        <!-- Datatables Css-->
        <link href="<?= base_url('assets/adminbsb/plugins/datatables/datatables.min.css'); ?>" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="<?= base_url('assets/adminbsb/css/style.css'); ?>" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="<?= base_url('assets/adminbsb/css/themes/all-themes.css'); ?>" rel="stylesheet" />
        <style>
            .dt-buttons{
                width: auto !important;
                margin: 5px 5px;
            }

            tfoot {
                display: table-header-group;
            }
        </style>
    </head>

    <body class="theme-blue">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->

        <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="<?= site_url(); ?>">Datatables</a>
                </div>
            </div>
        </nav>
        <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">
                    <div class="image">
                        <img src="<?= base_url('assets/adminbsb/images/user.png'); ?>" width="48" height="48" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                        <div class="email">mr.pudyasto@gmail.com</div>
                        <div class="btn-group user-helper-dropdown">
                            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                                <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                                <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #User Info -->
                <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="active">
                            <a href="<?= site_url(); ?>">
                                <i class="material-icons">home</i>
                                <span>Home</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        &copy; 2018 <a href="javascript:void(0);">AdminBSB</a>
                    </div>
                    <div class="version">
                        <b>Version: </b> 1.5
                    </div>
                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>Sample Datatables</h2>
                </div>

                <div class="row clearfix">
                    <!-- Task Info -->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2>PENDUDUK</h2>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-dpt">
                                        <thead>
                                            <tr>
                                                <th style="width: 100px;">Kecamatan</th>
                                                <th style="width: 100px;">Kelurahan</th>
                                                <th>Nama Lengkap</th>
                                                <th style="width: 10px;">NIK</th>
                                                <th style="width: 100px;">Kelamin</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Kecamatan</th>
                                                <th>Kelurahan</th>
                                                <th>Nama Lengkap</th>
                                                <th>NIK</th>
                                                <th>Kelamin</th>
                                            </tr>
                                        </tfoot>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #END# Task Info -->
                </div>
            </div>
        </section>

        <!-- Jquery Core Js -->
        <script src="<?= base_url('assets/adminbsb/plugins/jquery/jquery.min.js'); ?>"></script>

        <!-- Bootstrap Core Js -->
        <script src="<?= base_url('assets/adminbsb/plugins/bootstrap/js/bootstrap.js'); ?>"></script>

        <!-- Slimscroll Plugin Js -->
        <script src="<?= base_url('assets/adminbsb/plugins/jquery-slimscroll/jquery.slimscroll.js'); ?>"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="<?= base_url('assets/adminbsb/plugins/node-waves/waves.js'); ?>"></script>

        <!-- Datatables Plugin Js -->
        <script src="<?= base_url('assets/adminbsb/plugins/datatables/datatables.min.js'); ?>"></script>

        <!-- Custom Js -->
        <script src="<?= base_url('assets/adminbsb/js/admin.js'); ?>"></script>

        <script>
            $(document).ready(function () {
                var column_list = [
                    {"data": "nm_kec",
                        render: $.fn.dataTable.render.text()
                    },
                    {"data": "nm_kel",
                        render: $.fn.dataTable.render.text()
                    },
                    {"data": "nm_lengkap",
                        render: $.fn.dataTable.render.text()
                    },
                    {"data": "nik",
                        render: $.fn.dataTable.render.text()
                    },
                    {"data": "kelamin",
                        render: $.fn.dataTable.render.text()
                    }
                ];

                var column_def = [
                    {
                        "orderable": true,
                        "targets": 0
                    }
                ];
                myDatatable = $('.table-dpt').DataTable({
                    "bProcessing": true,
                    "responsive": !0,
                    "bServerSide": true,
                    "columns": column_list,
                    "columnDefs": column_def,
                    "order": [[0, "asc"]],
                    "ordering": true,
                    "lengthMenu": [[10, 25, -1], [10, 25, "All"]],
                    "pagingType": "full_numbers",
                    "fnServerParams": function (aoData) {

                    },
                    "fnServerData": function (sSource, aoData, fnCallback) {
                        $.ajax({
                            "dataType": 'json',
                            "type": "POST",
                            "url": sSource,
                            "data": aoData,
                            "beforeSend": function () {
                                $(".btn").addClass('disabled');
                            },
                            "success": function (resp) {
                                $(".btn").removeClass('disabled');
                                fnCallback(resp);
                            },
                            "error": function (event, textStatus, errorThrown) {
                                $(".btn").removeClass('disabled');
                                console.log(textStatus);
                            }
                        });
                    },
                    "sAjaxSource": "<?= site_url('home/json_dgview'); ?>",
                    buttons: [
                        {
                            extend: 'copy',
                            exportOptions: {orthogonal: 'export'},
                            className: ''
                        },
                        {
                            extend: 'excel',
                            exportOptions: {orthogonal: 'export'},
                            className: "btn-success",
                            init: function (api, node, config) {
                                $(node).removeClass('btn-default');
                            }
                        }
                    ],
                    "sDom": "<'row'<'col-sm-6'B><'col-sm-6 text-right' l> r> t <'row'<'col-sm-6'i><'col-sm-6 text-right'p>> ",
                    "oLanguage": {
                        "sLengthMenu": "_MENU_",
                        "sZeroRecords": "Maaf, data yang anda cari tidak ditemukan",
                        "sProcessing": "<i class=\"m-loader m-loader--brand\"></i> <span style=\"padding-left: 15px;\">Silahkan Tunggu</span>",
                        "sInfo": "_START_ - _END_ / _TOTAL_",
                        "sInfoEmpty": "0 - 0 / 0",
                        "infoFiltered": "(_MAX_)",
                        "oPaginate": {
                            "sPrevious": "<i class='fa fa-angle-double-left'></i>",
                            "sNext": "<i class='fa fa-angle-double-right'></i>"
                        }
                    }
                });

                $('.table-dpt').tooltip({
                    selector: "[data-toggle=tooltip]",
                    container: "body"
                });

                $('.table-dpt tfoot th').each(function () {
                    var title = $('.table-dpt tfoot th').eq($(this).index()).text();
                    if (title !== "Aksi" && title !== "ID") {
                        $(this).html('<input type="text" class="form-control form-control-sm form-datatable" style="width:100%;border-radius: 0px;" placeholder="Cari ' + title + '" />');
                    } else {
                        $(this).html('');
                    }
                });

                myDatatable.columns().every(function () {
                    var that = this;
                    $('input', this.footer()).on('keyup change', function (ev) {
                        that.search(this.value).draw();
                    });
                });
            });
        </script>
    </body>
</html>
