<?php

/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 13.08.2018
 * Time: 10:05
 */
class AdminOrderController extends AdminBase
{

    public function actionIndex() {

        $this->checkAdmin();

        $ordersList = Order::getOrdersList();

        require_once (ROOT.'/views/admin_order/index.php');
        return true;
    }

    public function actionDelete($id) {

        $this->checkAdmin();

        Order::deleteOrderById($id);

        header("Location: /admin/order");
    }

    public function actionView($id) {

        $this->checkAdmin();

        $order = Order::getOrderById($id);

        $productsQuantity = json_decode($order['products'], true);

        $productsIds = array_keys($productsQuantity);

        $products = Product::getProductsByIds($productsIds);

        require_once (ROOT.'/views/admin_order/order_view.php');
        return true;
    }
}