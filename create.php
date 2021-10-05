<?php include 'store.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CRUD - Create</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="span10 offset1">
            <div class="row">
                <h3>Create a Customer</h3>
            </div>

            <form method="post" action="create.php" class="form-horizontal">
                <div class="control-group <?php echo !empty($nameError) ? 'error' : '' ; ?>">
                    <label class="control-label">Name</label>
                    <div class="controls">
                        <input type="text" name="name" value="<?php echo !empty($name) ? $name : ''; ?>">
                        <?php if(!empty($nameError)) : ?>
                            <span class="help-inline"><?php echo $nameError; ?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($emailError) ? 'error' : '' ; ?>">
                    <label class="control-label">Email Address</label>
                    <div class="controls">
                        <input type="text" name="email" value="<?php echo !empty($email) ? $email : ''; ?>">
                        <?php if(!empty($emailError)) : ?>
                            <span class="help-inline"><?php echo $emailError; ?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($mobileError) ? 'error' : '' ; ?>">
                    <label class="control-label">Mobile Number</label>
                    <div class="controls">
                        <input type="text" name="mobile" value="<?php echo !empty($mobile) ? $mobile : ''; ?>">
                        <?php if(!empty($mobileError)) : ?>
                            <span class="help-inline"><?php echo $mobileError; ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-actions">
                    <button class="btn btn-success">Create</button>
                    <a href="index.php" class="btn">Back</a>
                </div>
            </form>

        </div>
    </div>
</body>
</html>