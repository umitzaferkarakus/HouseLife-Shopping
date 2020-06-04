<?php 

include 'header.php'; 


$askcategory=$db->prepare("SELECT * FROM category where category_id=:id");
$askcategory->execute(array(
  'id' => $_GET['category_id']
  ));

$checkcategory=$askcategory->fetch(PDO::FETCH_ASSOC);

?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Category Edit <small>,

              <?php 

              if ($_GET['status']=="ok") {?>

              <b style="color:green;">Succesfull...</b>

              <?php } elseif ($_GET['status']=="no") {?>

              <b style="color:red;">Failed...</b>

              <?php }

              ?>


            </small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

            <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
            <form action="../netting/process.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              

              
             

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="category_name" value="<?php echo $checkcategory['category_name'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              

              


            

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category Row <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="category_row" value="<?php echo $checkcategory['category_row'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>





            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category Status<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
               <select id="heard" class="form-control" name="category_status" required>



                   <!--  

                    <?php echo $checkcategory['category_status'] == '1' ? 'selected=""' : ''; ?>

                  -->




                  <option value="1" <?php echo $checkcategory['category_status'] == '1' ? 'selected=""' : ''; ?>>Active</option>



                  <option value="0" <?php if ($checkcategory['category_status']==0) { echo 'selected=""'; } ?>>Pasive</option>
                  <!-- <?php 

                   if ($checkcategory['category_status']==0) {?>


                   <option value="0">Pasive</option>
                   <option value="1">Active</option>


                   <?php } else {?>

                   <option value="1">Active</option>
                   <option value="0">Pasive</option>

                   <?php  }

                   ?> -->


                 </select>
               </div>
             </div>


             <input type="hidden" name="category_id" value="<?php echo $checkcategory['category_id'] ?>"> 


             <div class="ln_solid"></div>
             <div class="form-group">
              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" name="editcategory" class="btn btn-success">Update</button>
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
