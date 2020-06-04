<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$askbank=$db->prepare("SELECT * FROM bank order by bank_id ASC");
$askbank->execute();


?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Bank List <small>,

              <?php 

              if ($_GET['status']=="ok") {?>

              <b style="color:green;">Succesfully...</b>

              <?php } elseif ($_GET['status']=="no") {?>

              <b style="color:red;">Failed...</b>

              <?php }

              ?>


            </small></h2>

            <div class="clearfix"></div>

            <div align="right">
              <a href="add-bank.php"><button class="btn btn-success btn-xs"> ADD NEW</button></a>

            </div>
          </div>
          <div class="x_content">


           

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Bank IBAN</th>
                  <th>Bank Account</th>
                  <th>Bank Status</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                $count=0;

                while($checkbank=$askbank->fetch(PDO::FETCH_ASSOC)) { $count++?>


                <tr>
                 <td width="20"><?php echo $count ?></td>
                 <td><?php echo $checkbank['bank_name'] ?></td>
                 <td><?php echo $checkbank['bank_iban'] ?></td>
                 <td><?php echo $checkbank['bank_account'] ?></td>

                 <td><center><?php 

                  if ($checkbank['bank_status']==1) {?>

                  <button class="btn btn-success btn-xs">Active</button>

                

                <?php } else {?>

                <button class="btn btn-danger btn-xs">Pasive</button>


                <?php } ?>
              </center>


            </td>


            <td><center><a href="edit-bank.php?bank_id=<?php echo $checkbank['bank_id']; ?>"><button class="btn btn-primary btn-xs">Edit</button></a></center></td>
            <td><center><a href="../netting/process.php?bank_id=<?php echo $checkbank['bank_id']; ?>&deletebank=ok"><button class="btn btn-danger btn-xs">Delete</button></a></center></td>
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
