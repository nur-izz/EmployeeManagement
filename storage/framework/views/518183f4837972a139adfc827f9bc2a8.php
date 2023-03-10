<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Employee Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <style>
        html, body{
            height: 100%;
        }
        h4, h6, a{
            justify-content: center;
            display: flex;
        }
        .container{
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
    <body>
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="py-3">
            <?php echo $__env->yieldContent('content'); ?>
            <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

            <!--<?php echo $__env->yieldPushContent('script'); ?>-->
        </div>
        <div class="container" style="max-width: fit-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-header">
                            <h5 style="font-family: exo;font-size:20px;margin-bottom: 10px; margin-top:10px">Add New Employee</h5>
                                <div>
                                    <input style="margin-bottom: 10px; font-size: 16px; font-family: open-sans;" placeholder="Employee Name" type="text" name="addName" class="form-control">
                                </div>
                                <div style="display:flex">
                                    <input style="width: 70%;margin-right: 10px;margin-bottom: 10px;font-size: 16px; font-family: open-sans;" placeholder="Current Position" type="text" name="position" class="form-control">
                                    <input style="width: 40%;margin-bottom: 10px;font-size: 16px; font-family: open-sans;" placeholder="Employee ID" type="text" name="empID" class="form-control">
                                </div>
                                <div>
                                    <input style="margin-bottom: 10px;font-size: 16px; font-family: open-sans;" placeholder="Work Address" type="text" name="addr" class="form-control">
                                </div>
                                <div>
                                    <input style="margin-bottom: 20px;font-size: 16px; font-family: open-sans;" placeholder="Role" type="text" name="role" class="form-control">
                                </div>
                                <a style="border-radius: 0.5rem;font-size: 15px; font-family: exo;display:block; background:#50D492; border-color: #50D492;" href="<?php echo e(url('save-employee')); ?>" class="btn btn-sm btn-primary">SAVE</a><br>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH D:\laragon\www\EmployeeManagement\resources\views/employee/addemployee.blade.php ENDPATH**/ ?>