<?php
session_start();
if (!isset($_SESSION['id']))
{
    header('Location: action.php?pages=login');
}
?>

<?php include 'pages/includes/header.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($students as $student) { ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo $student['image']; ?>" alt="student image" class="card-img-top">
                    <div class="card-body">
                        <h2><?php echo $student['name']; ?></h2>
                        <h2><?php echo $student['email']; ?></h2>
                        <h2><?php echo $student['phone']; ?></h2>
                        <a href="javascript:void(0)" class="btn btn-outline-success btn-block">View</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include 'pages/includes/footer.php'; ?>

