

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

            <a href="/admin/order/create" class="btn btn-default back"><i class="fa fa-plus"></i> Добавить заказ</a>

            <h4>Список заказов</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID заказа</th>
                    <th>Имя пользователя</th>
                    <th>Телефон пользователя</th>
                    <th>Коментарий</th>
                    <th>ID ползователя</th>
                    <th>Дата</th>
                    <th>Статус</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($ordersList as $list): ?>
                    <tr>
                        <td><?= $list['id']; ?></td>
                        <td><?= $list['user_name']; ?></td>
                        <td><?= $list['user_phone']; ?></td>
                        <td><?= $list['user_comment']; ?></td>
                        <td><?= $list['user_id']; ?></td>
                        <td><?= $list['date']; ?></td>
                        <td><?= Order::getStatusText($list['status']); ?></td>
                        <td><a href="/admin/order/view/<?php echo $list['id']; ?>" title="Просмотр"><i class="fa fa-pencil-square-o">Просмотр</i></a></td>
                        <td><a href="/admin/order/update/<?php echo $list['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o">Редактировать</i></a></td>
                        <td><a href="/admin/order/delete/<?php echo $list['id']; ?>" title="Удалить"><i class="fa fa-times">Удалить</i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>