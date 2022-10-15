<div id="wrapper">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/Summer Style/index.php">Summer Style Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-user"></i> <?php echo $_SESSION['username'] ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="comments.php"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="/Summer Style/index.php"><i class="fa fa-fw fa-home"></i> Shop</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="/Summer Style/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                <li>
                        <a href="profile.php"><i class="fa fa-fw fa-profile"></i>Profile</a>
                    </li>
                    <li>
                        <a href="comments.php"><i class="fa fa-fw fa-list"></i>Comments</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#shop_dropdown"><i class="fa fa-fw fa-home"></i> Shop <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="shop_dropdown" class="collapse">
                            <li>
                                <a href="view_fclothes.php">View Female Items</a>
                            </li>
                            <li>
                                <a href="view_mclothes.php">View Male Items</a>
                            </li>
                            <li>
                                <a href="add_fclothes.php">Add Female Item</a>
                            </li>
                            <li>
                                <a href="add_mclothes.php">Add Male Item</a>
                            </li>
                        </ul>
                    </li>
                
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>