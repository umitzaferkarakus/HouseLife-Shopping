<?php 

include 'header.php'; 


$askbank=$db->prepare("SELECT * FROM bank where bank_id=:id");
$askbank->execute(array(
  'id' => $_GET['bank_id']
));

$checkbank=$askbank->fetch(PDO::FETCH_ASSOC);

?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Edit Bank <small>

              <?php 
              if ($_GET['status']=="ok") {?>

                <b style="color:green;">Succesfully...</b>

              <?php } elseif ($_GET['status']=="no") {?>

                <b style="color:red;">Failed...</b>

              <?php }

              ?>


            </small></h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

            
            <form action="../netting/process.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">



              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bank Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="bank_name" value="<?php echo $checkbank['bank_name'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>




              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bank IBAN <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="bank_iban" value="<?php echo $checkbank['bank_iban'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bank Account <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="bank_account" value="<?php echo $checkbank['bank_account'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>





              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bank Status<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <select id="heard" class="form-control" name="bank_status" required>





                  <option value="1" <?php echo $checkbank['bank_status'] == '1' ? 'selected=""' : ''; ?>>Active</option>



                  <option value="0" <?php if ($checkbank['bank_status']==0) { echo 'selected=""'; } ?>>Pasive</option>


                </select>
              </div>
            </div>


            <input type="hidden" name="bank_id" value="<?php echo $checkbank['bank_id'] ?>"> 


            <div class="ln_solid"></div>
            <div class="form-group">
              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" name="editbank" class="btn btn-success">Update</button>
              </div>
            </div>

          </form>



        </div>
      </div>
    </div>
  </div>



  <hr>
  <hr>
  <hr>



</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
