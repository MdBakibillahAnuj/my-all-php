<?php //include 'pages/includes/header.php'; ?>
<?php //include 'pages/includes/header.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> Input Student InFo Carefully</h3>
                    </div>
                    <div class="card-body">
<!--                        <h1>-->
<!--                            --><?php
////
////                            echo $_SESSION['mobile'];
////                            session_start();
////                            unset($_SESSION['mobile']);
////                            echo $_SESSION['mobile'];
////                            session_destroy();
////                            echo $_SESSION['name'];
////                            echo $_SESSION['city'];
//                            ?>
<!--                        </h1>-->
                        <div  class="">
                            <form action="action.php" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Student Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Phone </label>
                                    <div class="col-md-8">
                                        <input type="number" name="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" accept="image/*" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="btn" class="btn btn-outline-success btn-block">
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
<?php //include 'pages/includes/footer.php'; ?>
