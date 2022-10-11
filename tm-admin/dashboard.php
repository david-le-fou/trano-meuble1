
<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>Trano Meublé | Admin::Tableau de bord</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
<link rel="stylesheet" href="assets/plugins/morrisjs/morris.min.css" />
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
</head>
<body class="theme-blue">

<!-- Top Bar -->
<nav class="navbar">
    <div class="col-12">        
        <div class="navbar-header">
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.html"><img src="../images/tm-logo/logo1.png" width="30" alt="Compass"><span class="m-l-10">Trano Meublé</span></a>
        </div>
        
        <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a></li>
        </ul>
    </div>
</nav>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="profile.html"><img src="assets/images/profile_av.jpg" alt="User"></a></div>
                    <div class="detail">
                        <h4>Michael</h4>
                        <small>Agent</small>                        
                    </div>
                    <a href="sign-in.html" title="Sign out"><i class="zmdi zmdi-power"></i></a>
                </div>
            </li>
            <li class="active open"><a href="dashboard.html"><i class="zmdi zmdi-home"></i><span>Tableau de bord</span></a></li>            
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city"></i><span>Propriétés</span> </a>
                <ul class="ml-menu">
                    <li><a href="property-list.html">Liste des Propriétés</a></li>
                    <li><a href="add-property.html">Ajout de Propriété</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city"></i><span>Quartier</span> </a>
                <ul class="ml-menu">
                    <li><a href="quart-list.html">Liste</a></li>
                    <li><a href="add-quart.html">Ajout</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city"></i><span>Sociétés</span> </a>
                <ul class="ml-menu">
                    <li><a href="societe-list.html">Liste</a></li>
                    <li><a href="add-societe.html">Ajout</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city"></i><span>Utilisateurs</span> </a>
                <ul class="ml-menu">
                    <li><a href="user-list.html">Liste</a></li>
                    <li><a href="add-user.html">Ajout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>

<!-- Main Content -->
<section class="content home">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Tableau de bord
                
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="dashboard.html"><i class="zmdi zmdi-home"></i> Administration</a></li>
                    <li class="breadcrumb-item active">Tableau de bord</li>
                </ul>                
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2>Type <strong>Propriété</strong></h2>
                    </div>
                    
                    <div class="body">
                        <form>
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Type Propriété">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <button type="button" class="btn btn-raised btn-info btn-round waves-effect m-l-20">Ajouter</button>          
                                </div>
                            </div>
                        </form>
                        <p></p>
                        <div class="table-responsive social_media_table">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Type</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Appartement</td>
                                        <td>
                                            <a href="#" class="badge badge-warning"><i class="zmdi zmdi-edit"></i></a>
                                        </td>
                                        <td>
                                            <a href="#" class="badge badge-danger"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Villa</td>
                                        <td>
                                            <a href="#" class="badge badge-warning"><i class="zmdi zmdi-edit"></i></a>
                                        </td>
                                        <td>
                                            <a href="#" class="badge badge-danger"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2>Type <strong>Bail</strong></h2>
                    </div>
                    
                    <div class="body">
                        <form>
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Type Bail">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <button type="button" class="btn btn-raised btn-info btn-round waves-effect m-l-20">Ajouter</button>          
                                </div>
                            </div>
                        </form>
                        <p></p>
                        <div class="table-responsive social_media_table">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Type</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Court séjour</td>
                                        <td>
                                            <a href="#" class="badge badge-warning"><i class="zmdi zmdi-edit"></i></a>
                                        </td>
                                        <td>
                                            <a href="#" class="badge badge-danger"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Long séjour</td>
                                        <td>
                                            <a href="#" class="badge badge-warning"><i class="zmdi zmdi-edit"></i></a>
                                        </td>
                                        <td>
                                            <a href="#" class="badge badge-danger"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row clearfix">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2>Type du <strong>Biens</strong></h2>
                    </div>
                    
                    <div class="body">
                        <form>
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Type de Biens">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <button type="button" class="btn btn-raised btn-info btn-round waves-effect m-l-20">Ajouter</button>          
                                </div>
                            </div>
                        </form>
                        <p></p>
                        <div class="table-responsive social_media_table">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Type</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Semi-meublé</td>
                                        <td>
                                            <a href="#" class="badge badge-warning"><i class="zmdi zmdi-edit"></i></a>
                                        </td>
                                        <td>
                                            <a href="#" class="badge badge-danger"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Meublé</td>
                                        <td>
                                            <a href="#" class="badge badge-warning"><i class="zmdi zmdi-edit"></i></a>
                                        </td>
                                        <td>
                                            <a href="#" class="badge badge-danger"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2><strong>Loyer</strong></h2>
                    </div>
                    
                    <div class="body">
                        <form>
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Type de Loyer">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <button type="button" class="btn btn-raised btn-info btn-round waves-effect m-l-20">Ajouter</button>          
                                </div>
                            </div>
                        </form>
                        <p></p>
                        <div class="table-responsive social_media_table">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Type</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Journalier</td>
                                        <td>
                                            <a href="#" class="badge badge-warning"><i class="zmdi zmdi-edit"></i></a>
                                        </td>
                                        <td>
                                            <a href="#" class="badge badge-danger"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Mensuel</td>
                                        <td>
                                            <a href="#" class="badge badge-warning"><i class="zmdi zmdi-edit"></i></a>
                                        </td>
                                        <td>
                                            <a href="#" class="badge badge-danger"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row clearfix">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2>Type de <strong>Pièces</strong></h2>
                    </div>
                    
                    <div class="body">
                        <form>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Type">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Pièces">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <button type="button" class="btn btn-raised btn-info btn-round waves-effect m-l-20">Ajouter</button>          
                                </div>
                            </div>
                        </form>
                        <p></p>
                        <div class="table-responsive social_media_table">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Type</th>
                                        <th>Pièces</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>t2</td>
                                        <td>Living-room + 1 chambre</td>  
                                        <td>
                                            <a href="#" class="badge badge-warning"><i class="zmdi zmdi-edit"></i></a>
                                        </td>
                                        <td>
                                            <a href="#" class="badge badge-danger"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>t3</td>
                                        <td>Living-room + 2 chambres</td>
                                        <td>
                                            <a href="#" class="badge badge-warning"><i class="zmdi zmdi-edit"></i></a>
                                        </td>
                                        <td>
                                            <a href="#" class="badge badge-danger"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>t4</td>
                                        <td>Living-room + 3 chambres</td>
                                        <td>
                                            <a href="#" class="badge badge-warning"><i class="zmdi zmdi-edit"></i></a>
                                        </td>
                                        <td>
                                            <a href="#" class="badge badge-danger"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>t4</td>
                                        <td>Living-room + 3 chambres</td>
                                        <td>
                                            <a href="#" class="badge badge-warning"><i class="zmdi zmdi-edit"></i></a>
                                        </td>
                                        <td>
                                            <a href="#" class="badge badge-danger"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
               
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="assets/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->
<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob Plugin Js -->
<script src="assets/bundles/countTo.bundle.js"></script> <!-- Jquery CountTo Plugin Js -->
<script src="assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/index.js"></script>
</body>
</html>