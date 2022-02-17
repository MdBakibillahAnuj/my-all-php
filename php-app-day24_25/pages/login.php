<?php include 'pages/includes/header.php'; ?>
<section class="mt-custom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> Input Student InFo Carefully</h3>
                    </div>
                    <div class="card-body">
                        <?php if(isset($message)) { ?>
                            <h6 class="text-success text-center"><?php echo $message; ?></h6>
                        <?php } ?>
                        <div  class="">
                            <form action="action.php" method="post" enctype="multipart/form-data">

                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">PassWord </label>
                                    <div class="col-md-8">
                                        <input type="number" name="password" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4">Login</label>
                                    <div class="col-md-8">
                                        <input type="submit" name="lgbtn" class="btn btn-outline-success btn-block">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'pages/includes/footer.php'; ?>


