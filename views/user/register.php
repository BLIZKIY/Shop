<?php

include ROOT.'/views/layouts/header.php';

?>



<div class="login-page">
  <?php if ($result): ?>
    <p>Вы зарегистрированы!</p>
  <?php else: ?>
  <?php if (isset($errors) && is_array($errors)): ?>
    <ul>
      <?php foreach ($errors as $error): ?>
        <li> - <?php echo $error; ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <div class="form">
    <form class="register-form" method="post" action="#">
      <input type="text" name="name" placeholder="name" value="<?php echo $name; ?>"/>
      <input type="password" name="password" placeholder="password" value="<?php echo $password; ?>"/>
      <input type="text" name="email" placeholder="email" value="<?php echo $email; ?>"/>
      <button type="submit" name="submit" >Registrate</button>
    </form>
      </div>
  <?php endif; ?>
</div>

<script src="../../template/js/register.js" type="text/javascript"></script>


