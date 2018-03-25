<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1>Login</h1>
        <?php if($login_error){?>
            <div class="alert alert-error">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php echo $login_error?>
            </div>
        <?php }?>
        <form id ="form" action="<?php echo BASE_URL?>login/do_login" method="post" onsubmit="editor.post()">
					<fieldset>
						<legend>Log In</legend>
            <label>E-mail Address: <font color="#FF0000">*</font></label>
            <input type="email" class="span6" name="email" placeholder="kkhuat@iupui.edu">
            <br>
            <label>Password: <font color="#FF0000">*</font></label>
            <input type="password" class="span6" name="password">
            <br>
            <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
						</fieldset>
        </form>
  </div>
</div>
<?php include('elements/footer.php');?>
