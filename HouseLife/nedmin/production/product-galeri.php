<?php 

include 'header.php';


?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">


    </div>

    


    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
             <div align="left" class="col-md-6">
              <h2 >Photo Process <small>
                <?php
                echo $count." photo listed";
                if ($_GET['status']=='ok') {?> 
                
                <b style="color:green;">Succesfully...</b>

                <?php } elseif ($_GET['status']=='no')  {?>

                <b style="color:red;">Failed...</b>

                <?php } ?></small></h2><br>
              </div>
              <form  action="../netting/process.php" method="POST" enctype="multipart/form-data">

              <input type="hidden" name="product_id" value="<?php echo $_GET['product_id']; ?>">

                <div align="right" class="col-md-6">
                  <button type="submit" name="deletephoto"  class="btn btn-danger "><i class="fa fa-trash" aria-hidden="true"></i> Delete Selected</button>
                  <a class="btn btn-success" href="add-productpicture.php?product_id=<?php echo $_GET['product_id'];?>"><i class="fa fa-plus" aria-hidden="true"></i> ADD Product Picture</a>
                </div>
                <div class="clearfix"></div>
              </div>


              <div class="x_content">


                <?php

                $inpage = 25; 


                $query=$db->prepare("select * from productfoto");
                $query->execute();
                $total_productpicture=$query->rowCount();

                $total_page = ceil($total_productpicture / $inpage);

                  
                $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;

          
                if($page < 1) $page = 1; 

        
                if($page > $total_page) $page = $total_page; 

                $limit = ($page - 1) * $inpage;

                $askproductfoto=$db->prepare("select * from productfoto where product_id=:product_id order by profoto_id DESC limit $limit,$inpage");
                $askproductfoto->execute(array(
                  'product_id' => $_GET['product_id']
                  ));

                  while($checkproductfoto=$askproductfoto->fetch(PDO::FETCH_ASSOC)) { ?>



                  <div class="col-md-55">
                   <label>
                    <div class="image view view-first">
                      <img style="width: 250px; height: 100px; display: block;" src="../../<?php echo $checkproductfoto['profoto_picway']; ?>" alt="image" />
                      <div class="mask">
                        <p><?php echo $checkproductfoto['profoto_name']; ?> <?php echo $checkproductfoto['profoto_id']; ?></p>
                        <div class="tools tools-bottom">

                          

                        </div>

                      </div>

                    </div>

                    <?php  array("$chooseprofoto"); ?>


                    <input type="checkbox" name="chooseprofoto[]"  value="<?php echo $checkproductfoto['profoto_id']; ?>" > Seç
                  </label>


                </div>

                <?php } ?>

                <div align="right" class="col-md-12">
                  <ul class="pagination">

                    <?php

                    $s=0;

                    while ($s < $total_page) {

                      $s++; ?>

                      <?php 

                      if ($s==$page) {?>

                      <li class="active">

                        <a href="productfoto.php?page=<?php echo $s; ?>"><?php echo $s; ?></a>

                      </li>

                      <?php } else {?>


                      <li>

                        <a href="productfoto.php?page=<?php echo $s; ?>"><?php echo $s; ?></a>

                      </li>

                      <?php   }

                    }

                    ?>

                  </ul>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /page content -->



<?php include 'footer.php'; ?>
