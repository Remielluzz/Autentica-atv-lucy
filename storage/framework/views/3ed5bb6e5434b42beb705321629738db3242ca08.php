<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <?php echo $__env->yieldPushContent('css'); ?>
</head>
<body>
    <header class="bg-light shadow-sm border border-2 p-3">
        <?php echo $__env->yieldContent('header'); ?>
    </header>

    <main>
        <?php echo $__env->yieldContent('main'); ?>
    </main>
</body>
</html>
<?php /**PATH C:\xampp1\htdocs\cg. laravel\atv1\resources\views/templates/layout.blade.php ENDPATH**/ ?>