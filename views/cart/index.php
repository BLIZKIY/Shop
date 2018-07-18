<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>My E-Shop</title>
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../template/css/style.css" type="text/css" media="all" />
    <!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->

    <meta name="keywwords" content="Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms" />
    <meta name="description" content="Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms" />

    <!-- JS -->
    <script src="../../template/js/jquery-1.4.1.min.js" type="text/javascript"></script>
    <script src="../../template/js/jquery.jcarousel.pack.js" type="text/javascript"></script>

    <!-- End JS -->

</head>
<body>

<!-- Shell -->
<div class="shell">

    <!-- Header -->
    <div id="header">
        <h1 id="logo"><a href="#">shoparound</a></h1>

        <!-- Cart -->
        <div id="cart">
            <a href="/cart/" class="cart-link">Your Shopping Cart</a>
            (<span id="cart-count"><?php echo Cart::countItems();?></span>)
            <div class="cl">&nbsp;</div>
            <span>Articles: <strong>4</strong></span>
            &nbsp;&nbsp;
            <span>Cost: <strong>$250.99</strong></span>
        </div>
        <!-- End Cart -->

        <!-- Navigation -->
        <div id="navigation">
            <ul>
                <li><a href="/" >Home</a></li>
                <li><a href="/catalog/">Catalog</a></li>
                <?php if(User::isGuest()): ?>
                    <li><a href="/user/register/">Registration</a></li>
                    <li><a href="/user/login/">Log in</a></li>
                <?php else: ?>
                    <li><a href="/user/logout/">Log out</a></li>
                    <li><a href="/cabinet/">Cabinet</a></li>
                <?php endif; ?>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <!-- End Navigation -->
    </div>
    <!-- End Header -->

<!-- Main -->
<div id="main">
    <div class="cl">&nbsp;</div>

    <!-- Content -->
    <div id="content">



        <!-- Cart -->
        <div class="col-sm-9 padding-right">
            <div class="features_items">
                <h2 class="title text-center">Корзина</h2>

                <?php if ($productsInCart): ?>
                    <p>Вы выбрали такие товары:</p>
                    <table class="table-bordered table-striped table">
                        <tr>
                            <th>Код товара</th>
                            <th>Название</th>
                            <th>Стомость, грн</th>
                            <th>Количество, шт</th>
                            <th></th>
                        </tr>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td><?php echo $product['code'];?></td>
                                <td>
                                    <a href="/product/<?php echo $product['id'];?>">
                                        <?php echo $product['name'];?>
                                    </a>
                                </td>
                                <td><?php echo $product['price'];?></td>
                                <td><?php echo $productsInCart[$product['id']];?></td>
                                <td>
                                    <a class="btn btn-default checkout" href="/cart/delete/<?php echo $product['id'];?>">
                                        <i class="fa fa-times">Удалить</i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="4">Общая стоимость, грн:</td>
                            <td><?php echo $totalPrice;?></td>
                        </tr>

                    </table>

                    <a class="btn btn-default checkout" href="/cart/checkout"><i class="fa fa-shopping-cart"></i> Оформить заказ</a>
                <?php else: ?>
                    <p>Корзина пуста</p>

                    <a class="btn btn-default checkout" href="/"><i class="fa fa-shopping-cart"></i> Вернуться к покупкам</a>
                <?php endif; ?>

            </div>

        </div>

        <!-- End Cart -->

    </div>
    <!-- End Content -->

        <!-- End Main -->

        <div class="cl">&nbsp;</div>


    </div>



    <!-- Side Full -->
    <div class="side-full">



        <!-- Text Cols -->
        <div class="cols">
            <div class="cl">&nbsp;</div>
            <div class="col">
                <h3 class="ico ico1">Donec imperdiet</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
                <p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
            </div>
            <div class="col">
                <h3 class="ico ico2">Donec imperdiet</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
                <p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
            </div>
            <div class="col">
                <h3 class="ico ico3">Donec imperdiet</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
                <p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
            </div>
            <div class="col col-last">
                <h3 class="ico ico4">Donec imperdiet</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
                <p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
            </div>
            <div class="cl">&nbsp;</div>
        </div>
        <!-- End Text Cols -->



    </div>
    <!-- End Side Full -->



</div>
<!-- End Shell -->

<?php include ROOT.'/views/layouts/footer.php'; ?>


</body>
</html>

