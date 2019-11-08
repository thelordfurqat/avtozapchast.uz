<?php
/**
 * Created by PhpStorm.
 * User: Lord
 * Date: 13.03.2019
 * Time: 20:21
 */
if($_POST){
    $data=$_REQUEST.$_POST['products'];
}

//debug($products);
if($products){
    foreach ($products as $product){
        echo $product->name.'<br>';
    }

}

?>