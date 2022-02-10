<?php include 'header.php';?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Sum of Series</div>
                    <div class="card-body">
<!--                        <h1><?php /*session_start(); unset($_SESSION['name']); */?></h1>
-->
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Starting Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="start_num" required class="form-control" value="<?php echo isset($sum['starting_number'])? $sum['starting_number'] : ' '; ?>"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Ending Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="end_num" required class="form-control" value="<?php echo isset($sum['ending_number'])? $sum['ending_number'] : ' '; ?>"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="series_btn" class="btn btn-outline-success btn-block" value="submit"/>
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
