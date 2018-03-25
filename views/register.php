<?php include('elements/header.php');?>

<div class="container">
    <div class="page-header">
      <h1>Register</h1>


    <div class="row">
        <div class="span8">
            <a id="message" href="../login">Registered Succesfully. Click here to log in</a>

            <form id ="form" action="<?php echo BASE_URL?>register/<?php echo $task?>" method="post" onsubmit="editor.post()">
              <fieldset>
                <legend>Register Today!</legend>
                <label>First Name: <font color="#FF0000">*</font></label>
                <input type="text" class="span6" name="first_name" placeholder="Khuong">
                <br>
                <label>Last Name: <font color="#FF0000">*</font></label>
                <input type="text" class="span6" name="last_name" placeholder="Khuat">
                <br>
                <label>E-mail Address: <font color="#FF0000">*</font></label>
                <input type="email" class="span6" name="email" placeholder="kkhuat@iupui.edu">
                <br>
                <label>Password: <font color="#FF0000">*</font></label>
                <input type="password" class="span6" name="password">
                <br>
                <button id="submit" type="submit" class="btn btn-primary" >Sign Up</button>
                </fieldset>
            </form>

            <!-- Don't display form on update only for register tasks -->
            <script>
                <?php
                    echo 'console.log("'.$currentAction.'");';
                if ($currentAction == 'newuser'){
                    echo 'document.getElementById("form").style.display ="block";';
                    echo 'document.getElementById("message").style.display = "none";';
                }
                else{
                    echo 'document.getElementById("form").style.display ="none";';
                    echo 'document.getElementById("message").style.display = "block";';
                }
                ?>
            </script>

        </div>
    </div>
    </div>
</div>
<?php include('elements/footer.php');?>
