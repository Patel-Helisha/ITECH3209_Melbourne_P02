<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EMPLOYABILITY.LIFE</title>

    <!-- core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <link href="css/sb-admin.css" rel="stylesheet">
	
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html"> <img src="img/emp.jpg" alt="Employability" height="100" width="200" /></a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>



      <!-- Navbar -->
      

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="manage_user.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Manage User</span></a>
        </li>
		<li class="nav-item active">
          <a class="nav-link" href="manage_course.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Manage Courses</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="manage_booking.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Manage Booking</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="manage_tutor.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Manage Tutor</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="manage_review.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Manage Reviews</span></a>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link" href="logout.php">
            <i class="fas fa-fw fa-folder"></i>
            <span>Logout</span>
          </a>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Dashboard</a>
            </li>
			<li class="breadcrumb-item active">Login</li>
            <li class="breadcrumb-item active">Data Tables</li>
          </ol>

          <!-- DataTables Example -->
         <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table</div>
            <div class="card-body">
              <div class="table-responsive">

<form method="POST">
<?php
 $conn=mysqli_connect("localhost","root","","employability");
  
$cid=$_GET['cid'];
$qry="select * from courses where cid='$cid' ";
$res=mysqli_query($conn,$qry);
?>

<div>
<table>

<thead>
	<tr>
    <td>Lecture ID</td>
    <td>Lecture Name</td>
	<td>Lecture Price</td>
	<td>Lecture Image</td>
    <td>Lecture Description</td>
    <td>Lecture Category</td>
</tr>
</thead>
<tbody>
<tr>
	<?php
		while($arr=mysqli_fetch_array($res))
		{
	?>
	<td><input type="text" name="cid" value="<?php echo $arr[0]; ?>" /></td>
	<td><input type="text" name="cname" value="<?php echo $arr[1]; ?>" /></td>
	<td><input type="text" name="c_price" value="<?php echo $arr[2]; ?>" /></td>
	<td><input type="text" name="image" value="<?php echo $arr[3]; ?>" /></td>
	<td><input type="text" name="c_desc" value="<?php echo $arr[4]; ?>" /></td>
	<td><input type="text" name="category" value="<?php echo $arr[5]; ?>" /></td>
	<!--<td><input type="hidden" name="hid" value="<?php //echo $arr[0]; ?>"></td>-->
	</tr>
    </tbody>
	</table>
</div>

<br><br><br>
<?php 
	}
?>
<label>
<input type='submit' name='update' value='UPDATE'   /></a></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit2" value="Cancel"><br><br>
</label>
</form>

              </div>
            </div>
          </div>

    <p class="small text-center text-muted my-5">
            <em>Employability.Life</em>
          </p>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Tech Squad</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

  </body>

</html>

<?php
										
										if(isset($_POST['update']))
										{
												$cn=mysqli_connect("localhost","root","","employability");
												//$id=$_GET['id'];
												$sel="select * from courses where cid='$cid'";
												
												
												$cid=$_POST['cid'];
												$cname=$_POST['cname'];
												$c_price=$_POST['c_price'];
												$image=$_POST['image'];
												$c_desc=$_POST['c_desc'];
												$category=$_POST['category'];
												
												$qry="update courses set cid='$cid', cname='$cname', c_price='$c_price', image='$image', 
												c_desc='$c_desc', category='$category' where cid='$cid'";
												
												if(2>1)
												 {
													
													 header("header:manage_course.php");
													  
												 }
												 else
												 {
													 
													 mysqli_error();
												 }
										}
									?>
