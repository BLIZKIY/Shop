

<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li class="active">Управление заказами</li>
                </ol>
            </div>

            <h4>Информация о заказе</h4>
            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID заказа</th>
                    <th>Имя пользователя</th>
                    <th>Телефон пользователя</th>
                    <th>Коментарий</th>
                    <th>ID ползователя</th>
                    <th>Дата</th>
                    <th>Статус заказа</th>
                </tr>
                <tr>
                    <td><?= $order['id']; ?></td>
                    <td><?= $order['user_name']; ?></td>
                    <td><?= $order['user_phone']; ?></td>
                    <td><?= $order['user_comment']; ?></td>
                    <td><?= $order['user_id']; ?></td>
                    <td><?= $order['date']; ?></td>
                    <td><?= Order::getStatusText($order['status']); ?></td>
                </tr>
            </table>
            <br/>
            <br/>
            <h4>Товары в заказе</h4>
            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID товара</th>
                    <th>Артикул товара</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Количество</th>
                </tr>
                <?php foreach($products as $product): ?>
                <tr>
                    <td><?= $product['id']; ?></td>
                    <td><?= $product['code']; ?></td>
                    <td><?= $product['name']; ?></td>
                    <td><?= $product['price']; ?></td>
                    <td><?= $productsQuantity[$product['id']]; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>



        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>