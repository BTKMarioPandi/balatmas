        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/pemandu/<?= $_SESSION['foto']; ?>" width="100" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?= $_SESSION['username']; ?></strong>
                             </span> <span class="text-muted text-xs block">Admin<b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.php">Profile</a></li>
                                <li><a href="contacts.php">Contacts</a></li>
                                <li class="divider"></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            BlP
                        </div>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="pemandu.php"><i class="fa fa-user"></i> <span class="nav-label">Pemandu</span></a>
                    </li>
                     <li>
                        <a href="peserta.php"><i class="fa fa-users"></i> <span class="nav-label">Peserta</span></a>
                    </li>
                    <li>
                        <a href="wacana.php"><i class="fa fa-book"></i> <span class="nav-label">Wacana</span></a>
                    </li>
                    </li>
                    <li>
                        <a href="kuesioner.php"><i class="fa fa-list"></i> <span class="nav-label">Penilaian Koesioner</span></a>
                    </li>
                    <li>
                        <a href="kuesioner.php"><i class="fa fa-list"></i> <span class="nav-label">Koesioner</span></a>
                  
                </ul>

            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Selamat Datang di BALATMAS Pekanbaru.</span>
                </li>


                <li>
                    <a href="login.html" class="alert-danger">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
