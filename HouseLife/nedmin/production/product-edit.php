<?php 

include 'header.php'; 


$askproduct=$db->prepare("SELECT * FROM product where product_id=:id");
$askproduct->execute(array(
  'id' => $_GET['product_id']
  ));

$checkproduct=$askproduct->fetch(PDO::FETCH_ASSOC);

?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Product Edit <small>,

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
                <ul class="dropdown-product" role="product">
                  
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

           
            <form action="../netting/process.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              
              <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-6">

                  <?php  

                  $product_id=$checkproduct['category_id']; 

                  $askcategory=$db->prepare("select * from category where category_top=:category_top order by category_row");
                  $askcategory->execute(array(
                    'category_top' => 0
                    ));

                    ?>
                    <select class="select2_multiple form-control" required="" name="category_id" >


                     <?php 

                     while($checkcategory=$askcategory->fetch(PDO::FETCH_ASSOC)) {

                       $category_id=$checkcategory['category_id'];

                       ?>

                       <option <?php if ($category_id==$product_id) { echo "selected='select'"; } ?> value="<?php echo $checkcategory['category_id']; ?>"><?php echo $checkcategory['category_name']; ?></option>

                       <?php } ?>

                     </select>
                   </div>
                 </div>

              
             

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="product_name" value="<?php echo $checkproduct['product_name'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <!-- Ck Editör  -->

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Detail <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">

                  <textarea  class="ckeditor" id="editor1" name="product_detail"><?php echo $checkproduct['product_detail']; ?></textarea>
                </div>
              </div>

              <script type="text/javascript">

               CKEDITOR.replace( 'editor1',

               {

                filebrowserBrowseUrl : 'ckfinder/ckfinder.html',

                filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',

                filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',

                filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

                filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

                filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

                forcePasteAsPlainText: true

              } 

              );

            </script>

            <!-- Ck Editör End -->


            <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Price <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" name="product_price" value="<?php echo $checkproduct['product_price'] ?>"  class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Keyword <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="product_keyword" value="<?php echo $checkproduct['product_keyword'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Stock <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="product_stock" value="<?php echo $checkproduct['product_stock'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>





            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Status<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
               <select id="heard" class="form-control" name="product_status" required>



                   <!--  

                    <?php echo $checkproduct['product_status'] == '1' ? 'selected=""' : ''; ?>

                  -->




                  <option value="1" <?php echo $checkproduct['product_status'] == '1' ? 'selected=""' : ''; ?>>Active</option>



                  <option value="0" <?php if ($checkproduct['product_status']==0) { echo 'selected=""'; } ?>>Pasive</option>
                  <!-- <?php 

                   if ($checkproduct['product_status']==0) {?>


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


             <input type="hidden" name="product_id" value="<?php echo $checkproduct['product_id'] ?>"> 


             <div class="ln_solid"></div>
             <div class="form-group">
              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" name="editproduct" class="btn btn-success">Update</button>
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
