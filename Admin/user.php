<?php include 'header.php';?>
<?php
if(isset($_POST['Delete'])){
$status=$_POST['status'];
$username=$_POST['username'];
$sql = "DELETE FROM approved WHERE username ='$username'";
if (mysqli_query($conn,$sql)) {
echo "hy";
}
}

?>


  <body>
   
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>

    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
   <?php include 'navbar.php';?>
       
      </header>
     <?php include 'sidebar.php';?>
     
     
      <div class="page-wrapper">

        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">CUSTOMER</h4>
            </div>
          </div>
        </div>
     
        <div class="container-fluid">
          
          <div class="row">
            <div class="col-12">
              
          
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">User Details</h5>
                  <div class="table-responsive">
                               <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Contact</th>
                          <th>TRX_Account</th>
                          <th>Refrel</th>
                          <th>Refrel Points</th>

                    
                        </tr>
                      </thead>
                      <tbody>

                  <?php
                  $sql="SELECT * FROM approved";
                  $rztl=mysqli_query($conn,$sql);
                  if ($rztl->num_rows>0) {
                   while ($row=mysqli_fetch_assoc($rztl)) {
                   ?>
                        <tr>
                          <td><?php echo $row['name'];?></td>
                          <td><?php echo $row['username'];?></td>
                          <td><?php echo $row['email'];?></td>
                          <td><?php echo $row['contact'];?></td>
                          <td><?php echo $row['trx_acc'];?></td>
                          <td><?php echo $row['refrel'];?></td>
                          <td><?php echo $row['refrel_points'];?></td>
                          <td class="text-center">
                          <form action="" method="POST">
                            
                        <button name="Delete" class="btn btn-primary mt-2">Delete</button>
                        <input type="hidden" name="username" value="<?php echo $row['username']; ?>">
                          
                          </form>
                            
                          </td>
                        </tr>
                       <?php } } ?> 
                       
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
       
        </div>
        
     <?php include 'footer.php';?>
