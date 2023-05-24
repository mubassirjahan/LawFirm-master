<nav class="navbar navbar-expand-lg navbar-dark mb-3" style="background-color:#922B21">
    <div class="container">
        <a class="navbar-brand" href="<?php echo URLROOT ?>"><strong><?php echo SITENAME ?></strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo URLROOT ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT ?>/pages/about">About</a>
                </li>
            
            
                <?php if (isset($_SESSION['user_id'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout"><i class="fa fa-sign-out" aria-hidden="true">Logout</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/posts/profile/<?php echo $post->postId; ?>"><i class="fa fa-user"><?php echo $_SESSION['user_username']?></i></a>
                        
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/users/register"><i class="fa fa-user-plus" aria-hidden="true">Register</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/users/login"><i class="fa fa-sign-in" aria-hidden="true">Login</i></a>
                    </li>
                <?php endif; ?>
            </ul>


        </div>
    </div>
</nav>