<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            body {
                min-height: 100vh;
                background-color: #4ca1af;
                background-image: linear-gradient(135deg, #f0f0f0 0%, #b4b4b4 100%);
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    Braddy Departmental Store
                </div>

                <div class="links">
                    <a href="<?php echo e(url('/')); ?>/counter/create">Counter</a>
                    <a href="<?php echo e(url('/')); ?>/formbuilder/3/create">Add Product</a>
                    <a href="<?php echo e(url('/')); ?>/formbuilder/3">Show Products</a>
                    <a href="<?php echo e(url('/')); ?>/product/create">Add Stock</a> 
                    <a href="<?php echo e(url('/')); ?>/product">Show Stock</a>
                    <a href="<?php echo e(url('/')); ?>/formbuilder/1/create">Add Category</a>
                    <a href="<?php echo e(url('/')); ?>/formbuilder/2/create">Add Unit</a>     
                    <a href="http://localhost/phpmyadmin/sql.php?server=1&db=braddy&table=products&pos=0" target="_BLANK">Admin</a>                          
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\Bitnami\wampstack-7.3.10-0\apache2\Braddy\resources\views/welcome.blade.php ENDPATH**/ ?>