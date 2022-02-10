<?php include 'header.php';?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Prime Number</div>
                    <div class="card-body">
<!--                        <h1>--><?php //session_start(); echo $_SESSION['id']; ?><!--</h1>-->
                       <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Enter Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="given_number"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Result</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="<?php echo isset($result)? $result : ' '; ?>"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success btn-block" name="btn" value="submit"/>
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
