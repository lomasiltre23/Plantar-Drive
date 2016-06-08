<!DOCTYPE html>
<html lang="en" ng-app="APP">
<head>
    <meta charset="UTF-8">
    <base href="<?php echo e(url('/admin/')); ?>">
    <title>Plantar Drive</title>
    <link rel="stylesheet" href="<?php echo e(asset('lib/font/material-icons/material-icons.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('lib/css/materialize.min.css')); ?>"/>
    <script>
        var url = '<?php echo e(url('/')); ?>';
    </script>
    <script src="<?php echo e(asset('lib/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/js/angular.min.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/js/angular-route.min')); ?>.js"></script>
    <script src="<?php echo e(asset('lib/js/materialize.min.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/js/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <style>
        nav ul a:hover {
            background-color: rgba(255,255,255,0.1);
        }
    </style>
</head>
<body>
    <ul id="menuAdmin" class="dropdown-content">
        <li><a href="#">Perfil</a></li>
        <li class="divider"></li>
        <li><a href="#">Crear Usuario</a></li>
        <li><a href="#">Crear Empresa</a>
        <li class="divider"></li>
        <li><a href="#">Cerrar Sesión</a></li>
    </ul>
    <nav style="background-color: #1F1D1D">
        <div class="navbar-fixed">
            <a class="brand-logo"><img src="<?php echo e(asset('img/logo-plantar.png')); ?>" style="width: 57%;"></a>
            <ul class="right" style="display: flex; align-items: center;">
                <li style="width: 30px; height: 30px; overflow: hidden;" class="circle">
                    <div style="background-image: url(<?php echo e(asset('img/Recortado.jpg')); ?>); height: 100%; width: 100%; background-size: cover; background-position: 50%;"></div>
                </li>
                <li>
                    <a href="#" class="dropdown-button" data-activates="menuAdmin" style="display: inline-block;">Usuario</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container" ng-view>

    </div>
</body>
</html>