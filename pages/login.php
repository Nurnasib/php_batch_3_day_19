<?php include 'header.php';?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <div class="card bg-secondary">
                    <div class="card-header bg-dark text-center text-white">Login Form</div>
                    <div class="card-body">
                        <h3 class="text-danger"><?php echo isset($message)? $message : ' '; ?></h3>
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-white">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-white">Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="login_btn" class="btn btn-outline-dark btn-block" value="Login"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php';?>
