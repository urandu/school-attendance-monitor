
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
                <form method="post" action="<?php echo(base_url()); ?>students/save" role="form">
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

                    <button type="submit" class="btn btn-default">Submit</button>
                    <button type="reset" class="btn btn-default">Clear fields</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php require_once("includes/bottom_includes.php"); ?>

<script>
    $(document).ready(function() {
        ws = new WebSocket("ws://localhost:8980");
        ws.onopen = function() {
            ws.send("hello server");
        };
        ws.onclose = function() {};
        ws.onmessage = function(evt) {
            console.log(evt.data);
            var message = JSON.parse(evt.data);
            console.log(message);
            // code to update the page given the incoming message
            // send a dummy message back to initiate
            // the onmessage callback again
            ws.send("next message please!");
           alert(message.event);
        }
    });
</script>