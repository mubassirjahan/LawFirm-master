<?php require APPROOT . '/views/inc/header.php'; ?>


<div class="card card-body mt-1"style="color:#7B241C;background-color:#FAD7A0">
    <div class="span3 well">
       
        <center><a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="https://www.recreationaleducationcenter.com/site/wp-content/uploads/2017/09/Contact-icon.png" name="aboutme" width="140" height="140" class="img-circle"></a></center>
        <h3>Username: <?php echo $_SESSION['user_username'] ?></h3>
        <h3>First Name: <?php echo $_SESSION['user_fname'] ?></h3>
        <h3>Last Name: <?php echo $_SESSION['user_lname'] ?></h3>
        <h3>Email: <?php echo $_SESSION['user_email'] ?></h3>
		
    </div>
    
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>