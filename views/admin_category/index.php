

<?php include ROOT . '/views/layouts/header_admin.php'; ?>

    <section>
        <div class="container">
            <div class="row">

                <br/>

                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                        <li><a href="/admin">Админпанель</a></li>
                        <li class="active">Управление категориями</li>
                    </ol>
                </div>

                <a href="/admin/category/create" class="btn btn-default back"><i class="fa fa-plus"></i> Добавить категорию</a>

                <h4>Список категорий</h4>

                <br/>

                <table class="table-bordered table-striped table">
                    <tr>
                        <th>ID товара</th>
                        <th>Название категории</th>
                        <th>Sort order</th>
                        <th>Отображение</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php foreach ($categoriesList as $list): ?>
                        <tr>
                            <td><?php echo $list['id']; ?></td>
                            <td><?php echo $list['name']; ?></td>
                            <td><?php echo $list['sort_order']; ?></td>
                            <td><?php echo $list['status']; ?></td>
                            <td><a href="/admin/category/update/<?php echo $list['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o">Редактировать</i></a></td>
                            <td><a href="/admin/category/delete/<?php echo $list['id']; ?>" title="Удалить"><i class="fa fa-times">Удалить</i></a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>

            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>