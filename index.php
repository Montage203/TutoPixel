<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Tutoriels sur le pixel art">
    <meta name="keywords" content="HTML, CSS, JavaScrip, php">
    <meta name="author" content="Montage203">
    <title>TutoPixel</title>
    <link href="css/styles.css" rel="stylesheet" />


    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"
        crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">TutoPixel</a><code style="color: darkcyan;">V1</code>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
                class="fas fa-bars"></i></button>


        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">

                <a href="https://montage203.github.io/TutoPixel">
                    <img class="flag" src="img/flag/fr.png" alt="" title="fr">
                </a>
                <a href="http://translate.google.com/translate?sl=fr&tl=en&u=https%3A%2F%2Fmontage203.github.io%2FTutoPixel%2Fdist%2Findex.html">
                    <img class="flag" src="img/flag/en.png" alt="" title="en">
                </a>
                <a href="http://translate.google.com/translate?sl=fr&tl=es&u=https%3A%2F%2Fmontage203.github.io%2FTutoPixel%2Fdist%2Findex.html">
                    <img class="flag" src="img/flag/es.png" alt="" title="es">
                </a>
                <a href="http://translate.google.com/translate?sl=fr&tl=tr&u=https%3A%2F%2Fmontage203.github.io%2FTutoPixel%2Fdist%2Findex.html">
                    <img class="flag" src="img/flag/tr.png" alt="" title="tr">
                </a>
                <a href="http://translate.google.com/translate?hl=&sl=fr&tl=it&u=https%3A%2F%2Fmontage203.github.io%2FTutoPixel%2Fdist%2Findex.html">
                    <img class="flag" src="img/flag/it.png" alt="" title="it">
                </a>
                <a href="http://translate.google.com/translate?hl=&sl=fr&tl=de&u=https%3A%2F%2Fmontage203.github.io%2FTutoPixel%2Fdist%2Findex.html">
                    <img class="flag" src="img/flag/de.png" alt="" title="de">
                </a>
                <a href="http://translate.google.com/translate?hl=&sl=fr&tl=fi&u=https%3A%2F%2Fmontage203.github.io%2FTutoPixel%2Fdist%2Findex.html">
                    <img class="flag" src="img/flag/fi.png" alt="" title="fi">
                </a>
                <a href="http://translate.google.com/translate?hl=&sl=fr&tl=pt&u=https%3A%2F%2Fmontage203.github.io%2FTutoPixel%2Fdist%2Findex.html">
                    <img class="flag" src="img/flag/pt.png" alt="" title="pt">
                </a>
                <a href="http://translate.google.com/translate?hl=&sl=fr&tl=nl&u=https%3A%2F%2Fmontage203.github.io%2FTutoPixel%2Fdist%2Findex.html">
                    <img class="flag" src="img/flag/nl.png" alt="" title="nl">
                </a>

            </div>
        </form>
        <!-- Navbar-->




        <!-- Navbar Search-->
        <!--<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>-->
        <!-- Navbar-->
        <!--<ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>-->
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Global</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Accueil
                        </a>
                        <!--<div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>-->

                        <!--<div class="sb-sidenav-menu-heading">Tutoriels</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Niveaux
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="#">Facile</a>
                                <a class="nav-link" href="#">Intermédiaire</a>
                                <a class="nav-link" href="#">Expert</a>
                            </nav>
                        </div>-->

                        <div class="sb-sidenav-menu-heading">Outils</div>
                        <a class="nav-link" href="pages/personnages.php">
                            <div class="sb-nav-link-icon"></div>
                            Personnages
                        </a>

                        <div class="nav-link">
                            <form style ="margin: auto!important;" class="d-none2 d-md-inline-block2 form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                                <div class="input-group2">
                    
                                    <a href="https://montage203.github.io/TutoPixel">
                                        <img class="flag" src="img/flag/fr.png" alt="" title="fr">
                                    </a>
                                    <a href="http://translate.google.com/translate?sl=fr&tl=en&u=https%3A%2F%2Fmontage203.github.io%2FTutoPixel%2Fdist%2Findex.html">
                                        <img class="flag" src="img/flag/en.png" alt="" title="en">
                                    </a>
                                    <a href="http://translate.google.com/translate?sl=fr&tl=es&u=https%3A%2F%2Fmontage203.github.io%2FTutoPixel%2Fdist%2Findex.html">
                                        <img class="flag" src="img/flag/es.png" alt="" title="es">
                                    </a><br>
                                    <a href="http://translate.google.com/translate?sl=fr&tl=tr&u=https%3A%2F%2Fmontage203.github.io%2FTutoPixel%2Fdist%2Findex.html">
                                        <img class="flag" src="img/flag/tr.png" alt="" title="tr">
                                    </a>
                                    <a href="http://translate.google.com/translate?hl=&sl=fr&tl=it&u=https%3A%2F%2Fmontage203.github.io%2FTutoPixel%2Fdist%2Findex.html">
                                        <img class="flag" src="img/flag/it.png" alt="" title="it">
                                    </a>
                                    <a href="http://translate.google.com/translate?hl=&sl=fr&tl=de&u=https%3A%2F%2Fmontage203.github.io%2FTutoPixel%2Fdist%2Findex.html">
                                        <img class="flag" src="img/flag/de.png" alt="" title="de">
                                    </a><br>
                                    <a href="http://translate.google.com/translate?hl=&sl=fr&tl=fi&u=https%3A%2F%2Fmontage203.github.io%2FTutoPixel%2Fdist%2Findex.html">
                                        <img class="flag" src="img/flag/fi.png" alt="" title="fi">
                                    </a>
                                    <a href="http://translate.google.com/translate?hl=&sl=fr&tl=pt&u=https%3A%2F%2Fmontage203.github.io%2FTutoPixel%2Fdist%2Findex.html">
                                        <img class="flag" src="img/flag/pt.png" alt="" title="pt">
                                    </a>
                                    <a href="http://translate.google.com/translate?hl=&sl=fr&tl=nl&u=https%3A%2F%2Fmontage203.github.io%2FTutoPixel%2Fdist%2Findex.html">
                                        <img class="flag" src="img/flag/nl.png" alt="" title="nl">
                                    </a>
                    
                                </div>
                            </form>
                        </div>


                        <div class="sb-sidenav-menu-heading"></div>
                        <a class="nav-link" href="https://montage203.github.io/Tutoriels/">
                            <div class="sb-nav-link-icon"></div>
                            Autres tutoriels
                        </a>


                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Sur une idée de :</div>
                    Niko/Montage203
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Accueil</h1>
                    <!--<ol class="breadcrumb mb-4">
                           <li class="breadcrumb-item active">


                                

                            </li>
                        </ol>-->
                    <!--<div class="card mb-4">
                        <div class="card-body">
                            TutoPixel est un site web qui vous apprend le pixel art.<br>
                            Notamment, dans l'univers d'Habbo.<br>
                            Vous pourrez, par exemple, apprendre à faire des fonds d'appartement, des badges, des
                            vêtements,...
                        </div>
                    </div>-->
                    <div class="row">
                        <div class="col-xl-9 col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    TutoPixel est un site web qui vous apprend le pixel art.<br>
                                    Notamment, dans l'univers d'Habbo.<br>
                                    Vous pourrez, par exemple, apprendre à faire des fonds d'appartement, des badges, des
                                    vêtements,...
                                </div>
                            </div>
                        </div>
                        <!--<div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Intermédiaire</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">Bientôt</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Expert</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">Bientôt</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>-->
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-dark text-white mb-4">
                                <div class="card-body">Discord</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link"
                                        href="https://discord.com/invite/4YEMCzTEyZ"
                                        onclick="window.open(this.href); return false;">Rejoindre le discord</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area mr-1"></i>
                                    Membres sur le discord
                                </div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>

                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar mr-1"></i>
                                    Nouveau tutoriel sur le site
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>

                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Tout les tutoriels
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Catégorie</th>
                                            <th>Univers</th>
                                            <th>Logiciel</th>
                                            <th>Difficulté</th>
                                            <th>Date</th>
                                            <th>Créé par</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Catégorie</th>
                                            <th>Univers</th>
                                            <th>Logiciel</th>
                                            <th>Difficulté</th>
                                            <th>Date</th>
                                            <th>Créé par</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td><a href="les-tutos-fr/habbo/background/tuto01.html">Création d'un
                                                    background sur base d'un floor</td>
                                            <td>Background</td>
                                            <td>Habbo</td>
                                            <td>PhotoFiltre 7</td>
                                            <td>Facile</td>
                                            <td>22 décembre 2020</td>
                                            <td>Montage203</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Dernière mise à jour : le 22/12</div>
                    </div>
                </div>
            </main>

            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; TutoPixel 2020</div>
                        <!--<div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>-->
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/membres.js"></script>
    <script src="assets/tutoriels.js"></script>
    <script src="assets/datatables.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
</body>

</html>