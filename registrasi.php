<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Registrasi</title>
        <link href="assets/css/my-css.css" rel="stylesheet" />
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        
		<link rel="stylesheet" type="text/css" href="assets/css/component.css" />
    </head>

    <body class="background" style="overflow:hidden;">
        <!-- NAV BAR -->
        <nav role="navigation" class="navbar navbar-inverse">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">Memory Information System</a>
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#" class="md-trigger" data-modal="modal-10"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Tambah Registrasi</a></li>
                </ul>
                
                <form role="search" class="navbar-form navbar-left">
                    <span class="right-inner-addon">
                        <i class="form-control-feedback glyphicon glyphicon-search"></i>
                        <input type="text" placeholder="Search" class="form-control search-input">
                    </span>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;Logout</a></li>
                </ul>
            </div>
        </nav>
        <!-- END OF NAV BAR -->
        
        <div class="header">
        <font color="white"><h1>REGISTRASI PELANGGAN</h1></font>
        </div>
        
        <!-- TABEL DAFTAR REGISTRASI -->
        <div class="box-registrasi">
            <table class="table tabel-registrasi">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Nama Pelanggan</th>
                        <th>Jenis Layanan</th>
                        <th>Harga</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>15-04-2015</td>
                        <td>Gifari Kautsar</td>
                        <td>Cepak, Blow</td>
                        <td>50000</td>
                        <td><span class="glyphicon glyphicon-ok status-pelayanan"></span></td>
                    </tr>
                    <tr>
                        <td>15-04-2015</td>
                        <td>Indam Muhammad</td>
                        <td>Cuci Rambut</td>
                        <td>30000</td>
                        <td><span class="glyphicon glyphicon-ok status-pelayanan"></span></td>
                    </tr>
                    <tr>
                        <td>15-04-2015</td>
                        <td>Andarias Silvanus</td>
                        <td>Keramas</td>
                        <td>15000</td>
                        <td><span class="glyphicon glyphicon-ok status-pelayanan"></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END OF TABEL DAFTAR REGISTRASI -->
        
        
        <!-- Popup Div Starts Here -->
        <div class="md-modal md-effect-10" id="modal-10">
        <div class="md-content">
            <!-- Contact Us Form -->
            <form action="#" id="form-registrasi" method="post" name="form">
                <img id="close" src="assets/img/close-icon.png" class="md-close float-right close-button">
                <h2>Tambah Registrasi</h2>
                <hr>
                <label for="inputPassword">Nama Pelanggan</label>
                <input type="text" class="form-control transparent-input-field" id="name"/> <br>
                <label for="inputPassword">Jenis Layanan</label>
                <div class="checkbox"><label><input type="checkbox">Cuci</label></div>
                <div class="checkbox"><label><input type="checkbox">Creambath</label></div>
                <div class="checkbox"><label><input type="checkbox">Potong</label></div>
                <div class="checkbox"><label><input type="checkbox">Blow</label></div>
                <div class="checkbox"><label><input type="checkbox">Lain-Lain</label></div>
                <a href="javascript:%20check_empty()" id="submit"><div class="float-right dark-button md-close"></div></a>
            </form>
        </div>
        </div>
        <!-- Popup Div Ends Here -->
        <div class="md-overlay"></div>
    </body>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/my-JS.js"></script>
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/modalEffects.js"></script>
    <script src="assets/js/cssParser.js"></script>
    <script src="assets/js/css-filters-polyfill.js"></script>
</html>