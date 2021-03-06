<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?=Site::meta('backend');?>
    <!-- LOAD CSS -->
    <link href="<?=Site::$url;?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=Site::$url;?>assets/css/bootstrap-theme.css" rel="stylesheet">
    <link href="<?=Site::$url;?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?=Site::$url;?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=Site::$url;?>assets/css/grideditor.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=Site::$url;?>assets/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?=Site::$url;?>assets/css/dashboard.css" rel="stylesheet">
    <link href="<?=Site::$url;?>assets/css/genixfont.css" rel="stylesheet">
    <link href="<?=Site::$url;?>assets/css/flag-icon.min.css" rel="stylesheet">
    <link href="<?=Site::$url;?>assets/css/jquery.tagsinput.min.css" rel="stylesheet">

    <!-- LOAD Javascript -->
    <script src="<?=Site::$url;?>assets/js/jquery.min.js"></script>
    <script src="<?=Site::$url;?>assets/js/bootstrap.min.js"></script>
    <script src="<?=Site::$url;?>assets/js/moment-locales.min.js"></script>
    <script src="<?=Site::$url;?>assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="<?=Site::$url;?>assets/js/jquery.tagsinput.min.js"></script>
    

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=Site::$url;?>assets/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=Site::$url;?>assets/js/sb-admin-2.js"></script>

    <!-- MetisMenu CSS -->
    <link href="<?=Site::$url;?>assets/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <link href="<?=Site::$url;?>assets/css/summernote.css" rel="stylesheet">
    <script src="<?=Site::$url;?>assets/js/summernote.min.js"></script>
    <script src="<?=Site::$url;?>assets/js/plugins/summernote-ext-genixcms.js"></script>
    <script src="<?=Site::$url;?>assets/js/plugins/summernote-image-attributes.js"></script>
    <script src="<?=Site::$url;?>assets/js/plugins/summernote-floats-bs.min.js"></script>
    <script src="<?=Site::$url;?>assets/js/jquery.grideditor.js"></script>
    <script src="<?=Site::$url;?>assets/js/jquery.grideditor.summernote.js"></script>
    <script src="<?=Site::$url;?>assets/js/genixcms.js"></script>

    <!-- Custom styles for this template -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-nav">
                    <span class="sr-only"><?=MENU;?></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand" >
                    <a href="index.php">
                        <?=Site::logo('', '45px');?>
                    </a>
                    <span class="small">
                        <a href="<?=Site::$url;?>" class="label label-warning"
                            target="_blank">
                            <i class="fa fa-globe"></i> preview site
                        </a>
                    </span>
                </div>
            </div>

<?php if (User::isLoggedin()) {
    ?>
            <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    <a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <?=Session::val('username'); ?> <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li> -->
                        <li><a href="index.php?page=users&act=edit&id=<?=User::id(Session::val('username'));
?>&token=<?=TOKEN; ?>"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
<?php
} ?>

<?php if (User::access(2)) {
    ?>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">

                        <ul class="nav" id="side-menu">

                            <li>
                                <a href="index.php" <?=(!isset($_GET['page'])) ? 'class="active"' : ''; ?>>
                                    <i class="fa fa-dashboard fa-fw"></i> <?=DASHBOARD; ?>
                                </a>
                            </li>
                            <li <?=(isset($_GET['page']) && ($_GET['page'] == 'posts' || $_GET['page'] == 'categories' || $_GET['page'] == 'tags')) ? 'class="active"' : ''; ?> >
                                <a href="#"><i class="fa fa-file-text-o fa-fw"></i> Posts<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level" style="">
                                    <li>
                                        <a href="index.php?page=posts"
                                        <?=(isset($_GET['page']) && $_GET['page'] == 'posts') ? 'class="active"' : ''; ?>>
                                            <i class="fa fa-pencil fa-fw"></i> <?=POSTS; ?>
                                        </a>
                                    </li>
<?php
if (User::access(1)) {
    ?>
                            <li>
                                <a href="index.php?page=categories"
                                <?=(isset($_GET['page']) && $_GET['page'] == 'categories') ? 'class="active"' : ''; ?>>
                                    <i class="fa fa-folder fa-fw"></i> <?=CATEGORIES; ?>
                                </a>
                            </li>
                            <li>
                                <a href="index.php?page=tags"
                                <?=(isset($_GET['page']) && $_GET['page'] == 'tags') ? 'class="active"' : ''; ?>>
                                    <i class="fa fa-tags fa-fw"></i> <?=TAGS; ?>
                                </a>
                            </li>
<?php
} ?>
                                </ul>

                            </li>
<?php if (User::access(2)) {
    ?>
                            <li>
                                <a href="index.php?page=pages"
                                <?=(isset($_GET['page']) && $_GET['page'] == 'pages') ? 'class="active"' : ''; ?>>
                                    <i class="fa fa-file-o"></i> <?=PAGES; ?>
                                </a>
                            </li>
                            <li>
                                <a href="index.php?page=comments"
                                <?=(isset($_GET['page']) && $_GET['page'] == 'comments') ? 'class="active"' : ''; ?>>
                                    <i class="fa fa-comments fa-fw"></i> <?=COMMENTS; ?>
                                </a>
                            </li>
<?php
} ?>
                            <li>
                                <a href="index.php?page=media"
                                <?=(isset($_GET['page']) && $_GET['page'] == 'media') ? 'class="active"' : ''; ?>>
                                    <i class="fa fa-photo"></i> Media
                                </a>
                            </li>
<?php if (User::access(1)) {
    ?>
                            <li>
                                <a href="index.php?page=users"
                                <?=(isset($_GET['page']) && $_GET['page'] == 'users') ? 'class="active"' : ''; ?>>
                                    <i class="fa fa-users"></i> <?=USERS; ?>
                                </a>
                            </li>
<?php
} ?>
<?php if (User::access(0)) {
    ?>
                            <li>
                                <a href="index.php?page=menus"
                                <?=(isset($_GET['page']) && $_GET['page'] == 'menus') ? 'class="active"' : ''; ?>>
                                    <i class="fa fa-sitemap"></i> <?=MENUS; ?>
                                </a>
                            </li>
                            <li>
                                <a href="index.php?page=themes"
                                <?=(isset($_GET['page']) && $_GET['page'] == 'themes' && !isset($_GET['view'])) ? 'class="active"' : ''; ?>>
                                    <i class="fa fa-paint-brush"></i> <?=THEMES; ?>
                                </a>
                            </li>
                            <li>
                                <a href="index.php?page=modules"
                                <?=(isset($_GET['page']) && $_GET['page'] == 'modules') ? 'class="active"' : ''; ?>>
                                    <i class="fa fa-plug"></i> <?=MODULES; ?>
                                </a>
                            </li>
                            <li <?=(isset($_GET['page']) && ($_GET['page'] == 'multilang' || $_GET['page'] == 'settings'
                                || $_GET['page'] == 'permalink' || $_GET['page'] == 'comments-settings')) ? 'class="active"' : ''; ?> >
                                <a href="#"><i class="fa fa-wrench fa-fw"></i> <?=SETTINGS; ?><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level" style="">
                                    <li>
                                        <a href="index.php?page=settings"
                                        <?=(isset($_GET['page']) && $_GET['page'] == 'settings') ? 'class="active"' : ''; ?>>
                                            <i class="fa fa-wrench"></i> Global Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=multilang"
                                        <?=(isset($_GET['page']) && $_GET['page'] == 'multilang') ? 'class="active"' : ''; ?>>
                                            <i class="fa fa-flag"></i> Multilanguage
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=permalink"
                                        <?=(isset($_GET['page']) && $_GET['page'] == 'permalink') ? 'class="active"' : ''; ?>>
                                            <i class="fa fa-link"></i> Permalink
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=comments-settings"
                                        <?=(isset($_GET['page']) && $_GET['page'] == 'comments-settings') ? 'class="active"' : ''; ?>>
                                            <i class="fa fa-comments"></i> Comments Settings
                                        </a>
                                    </li>
                                </ul>
                            </li>
<?php
} ?>
                            <?php echo Theme::thmMenu(); ?>
                            <?php echo Mod::modMenu(); ?>
                            <li>
                                <a href="logout.php">
                                    <i class="fa fa-power-off"></i> <?=LOGOUT; ?>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
                <?php
} else {
} ?>
            </nav>


            <div id="page-wrapper">
            <div id="notification"></div>
