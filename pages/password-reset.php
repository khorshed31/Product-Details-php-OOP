<?php include 'header.php'; ?>

<style>
    body{
        background-color: #0f6674;
    }
</style>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header bg-dark text-white">Password Generator</div>
                    <div class="card-body bg-info">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Password Length</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="pass_length" value="<?php echo isset($_POST['btn'])? $_POST['pass_length'] : '';?>"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Generated Password</label>
                                <div class="col-md-9">
                                    <textarea readonly class="form-control"><?php echo isset($result)? $result : '';?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" readonly class="btn btn-dark" name="btn" value="Submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>