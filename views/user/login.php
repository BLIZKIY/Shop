<?php

include ROOT.'/views/layouts/header.php';

?>

<div class="login-page">

        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li> - <?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <div class="form">

            <form class="login-form" method="post" action="#">
                <input type="text" name="email" placeholder="email" value="<?php echo $email; ?>"/>
                <input type="password" name="password" placeholder="password" value="<?php echo $password; ?>"/>
                <button type="submit" name="submit" >Login</button>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
            </form>
        </div>

</div>