<?php

include ROOT.'/views/layouts/header.php';

?>

<div class="login-page">
    <?php if ($result): ?>
        <p>Изменения внесены</p>
    <?php else: ?>
        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li> - <?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <div class="form">
            <h2>Редактирование данных</h2>
            <form class="register-form" method="post" action="#">
                <p>Имя:</p>
                <input type="text" name="name" placeholder="name" value="<?php echo $name; ?>"/>
                <p>Пароль:</p>
                <input type="password" name="password" placeholder="password" value="<?php echo $password; ?>"/>

                <button type="submit" name="submit" >Сохранить</button>
            </form>
        </div>
    <?php endif; ?>
    <br>
    <br>
    <br>
</div>
<?php

include ROOT.'/views/layouts/footer.php';

?>
