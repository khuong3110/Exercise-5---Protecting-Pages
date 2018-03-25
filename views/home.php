<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1> Hello From the View </h1>
        <?php
				if(isset($_SESSION['message'])){?>
						<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">×</button>
								<?php echo $_SESSION['message']?>
								<?php unset($_SESSION['message']); ?>
						</div>
        <?php }?>
  </div>
</div>
<?php include('elements/footer.php');?>
