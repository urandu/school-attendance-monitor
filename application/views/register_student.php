
<?php require_once("includes/top_includes.php"); ?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">New student</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-6">
                <form role="form">
                    <div class="form-group">
                        <label>Full names</label>
                        <input type="text" name="names" required class="form-control">
                        <p class="help-block">eg. Michael Brown</p>
                    </div>
                   <div class="form-group">
                        <label>Admission Number</label>
                        <input name="registration_number" type="text" required class="form-control">
                        <p class="help-block">School registration number</p>
                    </div>
                   <div class="form-group">
                        <label>Contact of parent</label>
                        <input name="parent_contact" class="form-control">
                        <p class="help-block">Phone number of parent</p>
                    </div>
            </div>
            <div class="col-lg-6">
                   <div class="form-group">
                        <label>Student Card Number</label>
                        <input name="card_number" required class="form-control">
                        <p class="help-block">Tap card on card reader to get this number</p>
                    </div>
                   <div class="form-group">
                        <label>Student Finger-print</label>
                        <input name="finger_print" required class="form-control">
                        <p class="help-block">Student should place finger on finger-print reader</p>
                    </div>

                    <button type="submit" class="btn btn-default">Submit Button</button>
                    <button type="reset" class="btn btn-default">Reset Button</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php require_once("includes/bottom_includes.php"); ?>