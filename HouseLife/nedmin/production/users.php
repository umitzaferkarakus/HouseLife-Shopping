<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$askuser=$db->prepare("SELECT * FROM user");
$askuser->execute();


?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>User Listing <small>,

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
              
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Date Of Registration</th>
                  <th>Name Surname</th>
                  <th>Mail</th>
                  <th>Phone</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                while($checkuser=$askuser->fetch(PDO::FETCH_ASSOC)) {?>


                <tr>
                  <td><?php echo $checkuser['user_time'] ?></td>
                  <td><?php echo $checkuser['user_name'] ?></td>
                  <td><?php echo $checkuser['user_mail'] ?></td>
                  <td><?php echo $checkuser['user_gsm'] ?></td>
                  <td><center><a href="user-edit.php?user_id=<?php echo $checkuser['user_id']; ?>"><button class="btn btn-primary btn-xs">Edit</button></a></center></td>
                  <td><center><a href="../netting/process.php?user_id=<?php echo $checkuser['user_id']; ?>&userdelete=ok"><button class="btn btn-danger btn-xs">Delete</button></a></center></td>
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
