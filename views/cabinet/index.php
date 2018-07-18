<?php include ROOT.'/views/layouts/header.php'; ?>

    <section>
        <div class="container">
            <div class="row">
                <br>
                <h1>Кабинет пользователя</h1>
                <br>
                <h3>Привет, <?php echo $user['name']; ?>!</h3>
                <br>
                <ul>
                    <li><a href="/cabinet/edit/">Редактировать данные</li>
                    <li><a href="/cabinet/history/">Список покупок</li>
                </ul>
                <br>
            </div>
        </div>
    </section>


<?php include ROOT.'/views/layouts/footer.php'; ?>

















