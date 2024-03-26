<?php 

namespace App\Services;

use App\Models\Product;
use App\Models\Cart;

class CartService {

  public static function getItemsIncart($items){
    $products = [];

    // dd($items);
    foreach($items as $item){
      // オーナー情報
      $p = Product::findOrFail($item->product_id);
      $owner = $p->shop->owner->select('name', 'email')->first()->toArray();//オーナー情報 
      $values = array_values($owner); //連想配列の値を取得（キーの名称被りを解消）
      $keys = ['ownerName', 'email'];
      $ownerInfo = array_combine($keys, $values); // オーナー情報のキーを変更
      // 商品情報
      $product = Product::where('id', $item->product_id)
      ->select('id', 'name', 'price')->get()->toArray(); // 商品情報の配列
      $quantity = Cart::where('product_id', $item->product_id)
      ->select('quantity')->get()->toArray(); // 在庫数の配列
      // dd($ownerInfo, $product, $quantity);
      // オーナー情報と商品情報を同じ配列に結合
      $result = array_merge($product[0], $ownerInfo, $quantity[0]);
      array_push($products, $result); //配列に追加
    }

    dd($products);
    return $products;
  }


}