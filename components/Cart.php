<?php


class Cart
{

    public static function addProduct($id) {

        $id = intval($id);

        //создаем массив для товаров в корзине

        $productsInCart = array();

        //проверяем наличие товаров в корзине (они в сессии)

        if(isset($_SESSION['products'])) {
            $productsInCart = $_SESSION['products'];
        }

        if(array_key_exists($id, $productsInCart)) {
            $productsInCart[$id] ++;
        } else {
            //добавление нового товара в корзину
            $productsInCart[$id] = 1;
        }

        $_SESSION['products'] = $productsInCart;
    }

    public static function countItems()
    {
        if (isset($_SESSION['products'])) {
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            return 0;
        }
    }

    public static function getProducts() {

        if(isset($_SESSION['products'])) {
            return $_SESSION['products'];
        } else {
            return false;
        }

    }

    public static function getTotalPrice($products) {

        $productsInCart = self::getProducts();

        $total = 0;

        if($productsInCart) {
            foreach($products as $item) {
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }
        return $total;
    }

    public static function clear(){
        if(isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
        //можно оптимизировать метод
    }

    public static function deleteProduct($id) {

        $id = intval($id);

        $productsInCart = $_SESSION['products'];

        $productsInCart[$id] --;

        if($productsInCart[$id] == 0){
            unset($productsInCart[$id]);
        }
        $_SESSION['products'] = $productsInCart;
    }










}