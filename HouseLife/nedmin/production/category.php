<?php 

include 'header.php'; 



//Belirli veriyi seçme işlemi
$askcategory=$db->prepare("SELECT * FROM category");
$askcategory->execute();


?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Category Listing <small>

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
              <a href="category-add.php"><button class="btn btn-success btn-xs"> ADD NEW</button></a>

            </div>
          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Cate Name</th>
                  <th>Category Row</th>
                  <th>Category Status</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                $count=0;

                while($checkcategory=$askcategory->fetch(PDO::FETCH_ASSOC)) { $count++?>


                <tr>
                 <td width="20"><?php echo $count ?></td>
                 <td><?php echo $checkcategory['category_name'] ?></td>
                 <td><?php echo $checkcategory['category_row'] ?></td>

                 <td><center><?php 

                  if ($checkcategory['category_status']==1) {?>

                  <button class="btn btn-success btn-xs">Active</button>

                  

                <?php } else {?>

                <button class="btn btn-danger btn-xs">Pasive</button>


                <?php } ?>
              </center>


            </td>


            <td><center><a href="category-edit.php?category_id=<?php echo $checkcategory['category_id']; ?>"><button class="btn btn-primary btn-xs">Edit</button></a></center></td>
            <td><center><a href="../netting/process.php?category_id=<?php echo $checkcategory['category_id']; ?>&categorydelete=ok"><button class="btn btn-danger btn-xs">Delete</button></a></center></td>
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
