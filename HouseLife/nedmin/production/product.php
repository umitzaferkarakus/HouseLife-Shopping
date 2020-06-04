<?php 

include 'header.php'; 



//Belirli veriyi seçme işlemi
$askproduct=$db->prepare("SELECT * FROM product order by product_id DESC");
$askproduct->execute();


?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Product Listing <small>

              <?php 

              if ($_GET['status']=="ok") {?>

              <b style="color:green;">Succefull...</b>

              <?php } elseif ($_GET['status']=="no") {?>

              <b style="color:red;">Failed...</b>

              <?php }

              ?>


            </small></h2>

            <div class="clearfix"></div>

            <div align="right">
              <a href="product-add.php"><button class="btn btn-success btn-xs"> ADD NEW</button></a>

            </div>
          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Product Name</th>
                  <th>Product Price</th>
                  <th>Product Photo</th>
                  <th>Product Stock</th>
                  <th>Product Status</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                $count=0;

                while($checkproduct=$askproduct->fetch(PDO::FETCH_ASSOC)) { $count++?>


                <tr>
                 <td width="20"><?php echo $count ?></td>
                 <td><?php echo $checkproduct['product_name'] ?></td>
                 <td><?php echo $checkproduct['product_price'] ?></td>
                 <td><center><a href="product-galeri.php?product_id=<?php echo $checkproduct['product_id'] ?> "><button class="btn btn-success">Photo</button></a></center></td>
                 <td><?php echo $checkproduct['product_stock'] ?></td>

                 <td><center><?php 

                  if ($checkproduct['product_status']==1) {?>

                  <button class="btn btn-success btn-xs">Active</button>

                  

                <?php } else {?>

                <button class="btn btn-danger btn-xs">Pasive</button>


                <?php } ?>
              </center>


            </td>


            <td><center><a href="product-edit.php?product_id=<?php echo $checkproduct['product_id']; ?>"><button class="btn btn-primary btn-xs">Edit</button></a></center></td>
            <td><center><a href="../netting/process.php?product_id=<?php echo $checkproduct['product_id']; ?>&productdelete=ok"><button class="btn btn-danger btn-xs">Delete</button></a></center></td>
          </tr>



          <?php  }

          ?>


        </tbody>
      </table>

      <!-- Div İçerik Bitişi -->


    </div>
  </div>
</div>
</div>




</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
