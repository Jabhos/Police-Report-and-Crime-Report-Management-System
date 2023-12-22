<?php 

include('header.php');
include('mysql.php');

 ?>




<div  class="container-fluid" style="margin-top:80px">
	<?php include('menubar.php')?>
	<div class="col-md-1"></div>
</div>

<div class="container-fluid">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="panel panel-inverse">
			<div class="panel-body">
			<section class="grid">
						<article><div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Court Running Cases</div>
											<?php
												
												$q1 =mysqli_num_rows( mysqli_query($dbc, "SELECT * FROM `court` WHERE hearing_info='pending'"));
											?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $q1 ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></article>
						<article><div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Court Complete Cases</div>
											<?php
												
												$q1 =mysqli_num_rows( mysqli_query($dbc, "SELECT * FROM `court` WHERE hearing_info='Completed'"));
											?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $q1 ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></article>
  <article></article>
  <article></article>
  <article></article>
  <article></article>
  <article></article>
</section>		
				
			</div>
		</div>
	</div>
	<div class="col-md-2"></div>
</div>

<?php include('scripts.php'); ?>

</body>
</html>