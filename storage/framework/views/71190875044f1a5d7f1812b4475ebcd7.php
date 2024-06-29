<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7fafc; /* Example background color */
            font-family: Arial, sans-serif; /* Example font-family */
            padding: 20px;
        }
        .form-container {
            max-width: 400px;
            margin: auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="text-center mb-4">Login</h2>

  
        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" class="form-control" required autofocus>
               
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" class="form-control" required>
               
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Remember me</label>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>

        <div class="mt-3 text-center">
            <?php if(Route::has('password.request')): ?>
                <a href="<?php echo e(route('password.request')); ?>">Forgot your password?</a>
            <?php endif; ?>
        </div>

        <div class="mt-3 text-center">
            <p>Don't have an account? <a href="<?php echo e(route('register')); ?>">Register</a></p>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Laravel-11-User-Roles-and-Permissions-main\resources\views/auth/login.blade.php ENDPATH**/ ?>