<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = __d('cake_dev', 'Euro PSF Database');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $this->fetch('title'); ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('bootstrap.min.css');
        echo $this->Html->css('font-awesome.min.css');
        echo $this->Html->css('animate.min.css');
        echo $this->Html->css('bootstrap-switch.min.css');
        echo $this->Html->css('checkbox3.min.css');
        echo $this->Html->css('jquery.dataTables.min.css');
        echo $this->Html->css('dataTables.bootstrap.css');
        echo $this->Html->css('select2.min.css');
        echo $this->Html->css('datepicker3');
        echo $this->Html->css('style.css');
        echo $this->Html->css('themes.css');
        echo $this->Html->css('custom-table.css');
        echo $this->Html->css('custom.css');
        echo $this->Html->css('jquery-ui.min');

        echo $this->Html->script('jquery-1.11.2.min');
        echo $this->Html->script('jquery-ui.min');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
        <script type="text/javascript">
            var SITE_URL = '<?= SITE_URL ?>';
        </script>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    </head>
    <body class="flat-blue">
        <div class="app-container">
            <div class="row content-container">                
                <nav class="navbar navbar-default navbar-fixed-top navbar-top">
                    <?php if ($this->Session->read('Auth.User.id')): ?>
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-expand-toggle">
                                <b style="color: #ffff00"><i class="fa fa-bars icon"></i></b>
                            </button>
                            <!--<ol class="breadcrumb navbar-breadcrumb">
                                <li class="active">Euro PSF</li>
                            </ol>-->
                            <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                                <i class="fa fa-th icon"></i>
                            </button>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                                <i class="fa fa-times icon"></i>
                            </button>                            
                            <li class="dropdown danger">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-leaf"></i> Euro</a>                                
                            </li>
                            <li class="dropdown profile">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php print ucfirst($this->Session->read('Auth.User.username')); ?><span class="caret"></span></a>
                                <ul class="dropdown-menu animated fadeInDown">
                                    <li class="profile-img">
                                        <?php echo $this->Html->image('1.jpg', array('alt' => 'profile DP', 'class' => 'profile-img')); ?>
                                    </li>
                                    <li>
                                        <div class="profile-info">
                                            <h4 class="username"><?php print ucfirst($this->Session->read('Auth.User.username')); ?></h4>
                                            <div class="btn-group margin-bottom-2x" role="group">
                                                <?php echo $this->Html->link('<i class="fa fa-user"></i>' . '&nbsp;&nbsp;' . __('Profile'), array('controller' => 'users', 'action' => 'view', $this->Session->read('Auth.User.id')), array('escape' => FALSE, 'class' => 'btn btn-default', 'type' => 'button')); ?>
                                                <?php echo $this->Html->link('<i class="fa fa-sign-out"></i>' . '&nbsp;&nbsp;' . __('Logout'), array('controller' => 'users', 'action' => 'logout'), array('escape' => false, 'class' => 'btn btn-default', 'type' => 'button')); ?>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="side-menu">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="side-menu-container">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="#">
                                    <div class="icon fa fa-paper-plane"></div>
                                    <div class="title">Euro PSF Database</div>
                                </a>
                                <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                                    <i class="fa fa-times icon"></i>
                                </button>
                            </div>
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <?php echo $this->Html->link('<span class="icon fa fa-search"></span>' . '<span class="title">Search</span>', array('controller' => 'pages', 'action' => 'index'), array('escape' => FALSE)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link('<span class="icon fa fa-plus"></span>' . '<span class="title">Add Item</span>', array('controller' => 'items', 'action' => 'add'), array('escape' => FALSE)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link('<span class="icon fa fa-list"></span>' . '<span class="title">Items List</span>', array('controller' => 'items', 'action' => 'index'), array('escape' => FALSE)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link('<span class="icon fa fa-file"></span>' . '<span class="title">QC Lab Report</span>', array('controller' => 'QcLabReportDetails', 'action' => 'add'), array('escape' => FALSE)); ?>
                                </li>
                                <!-- Dropdown-->
                                <li class="panel panel-default dropdown">
                                    <a data-toggle="collapse" href="#dropdown-example">
                                        <span class="icon fa fa-user"></span><span class="title">User</span>
                                    </a>
                                    <!-- Dropdown level 1 -->
                                    <div id="dropdown-example" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul class="nav navbar-nav">
                                                <li>
                                                    <?php echo $this->Html->link('<span class="title">Add New User</span>', array('controller' => 'users', 'action' => 'add'), array('escape' => FALSE)); ?>
                                                </li>
                                                <li>
                                                    <?php echo $this->Html->link('<span class="title">Users List</span>', array('controller' => 'users', 'action' => 'index'), array('escape' => FALSE)); ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>                               
                            </ul>
                        </div>
                        <?php endif; ?> 
                        <!-- /.navbar-collapse -->
                    </nav>
                </div>
                <!-- Main Content -->
                <div class="container-fluid">
                    <div class="side-body padding-top">

                        <?php echo $this->Session->flash(); ?>

                        <?php echo $this->fetch('content'); ?>
                    </div>
                </div>
            </div>
            <footer class="app-footer">
                <div class="wrapper">
                    <span class="pull-right">top <a href=""><i class="fa fa-long-arrow-up"></i></a></span> © <?php echo date('Y'); ?> Copyright.
                </div>
            </footer>
        </div>

        <!--include java script file---->
        <?php
        echo $this->Html->script('jquery.min.js');
        echo $this->Html->script('common.js');
        echo $this->Html->script('bootstrap.min.js');
        echo $this->Html->script('bootstrap-datepicker');
        echo $this->Html->script('Chart.min.js');
        echo $this->Html->script('bootstrap-switch.min.js');
        echo $this->Html->script('jquery.matchHeight-min.js');
        echo $this->Html->script('jquery.dataTables.min.js');
        echo $this->Html->script('dataTables.bootstrap.min.js');
        echo $this->Html->script('select2.full.min.js');
        echo $this->Html->script('ace.js');
        echo $this->Html->script('mode-html.js');
        echo $this->Html->script('theme-github.js');
        echo $this->Html->script('app.js');
        echo $this->Html->script('index.js');
        echo $this->Html->script('card.js');
        echo $this->Html->script('button.js');
        ?>
    </body>
</html>
