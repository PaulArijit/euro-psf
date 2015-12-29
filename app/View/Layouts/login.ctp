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
        echo $this->Html->css('style.css');
        echo $this->Html->css('themes.css');
        echo $this->Html->css('custom-table.css');
        echo $this->Html->css('custom.css');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    </head>
    <body class="flat-blue login-bg">
        <?php echo $this->fetch('content'); ?>

        <?php echo $this->Session->flash(); ?>

        <!--include java script file---->
        <?php
        echo $this->Html->script('jquery.min.js');
        echo $this->Html->script('common.js');
        echo $this->Html->script('bootstrap.min.js');
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
