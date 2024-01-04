<?php

namespace App\Helper;

class Cart
{
    private $items = [];
    public $total_quantity = 0;
    public $total_price = 0;

    public function __construct()
    {
        $this->items = session('cart') ? session('cart') : [];
    }
    // trả về danh sách
    public function list()
    {
        return $this->items;
    }

    public function add($product, $quantity = 1)
    {
        $item = [
            'productID' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'img' => $product->img,
            'quantity' => $quantity
        ];
        $this->items[$product->id] = $item;

        session(['cart' => $this->items]);
    }

    public function delete($productID)
    {
        unset($this->items[$productID]);
        session(['cart' => $this->items]);
    }
    public function deleteAll()
    {
        $this->items = [];
        session(['cart' => $this->items]);
    }
    public function update($productId, $quantity)
    {
        if (isset($this->items[$productId])) {
            $this->items[$productId]['quantity'] = $quantity;
        }
        session(['cart' => $this->items]);
    }
    public function totalprice()
    {
        $total_price = 0;

        foreach ($this->items as $item) {
            $total_price += $item['price'] * $item['quantity'];
        }
        return $total_price;
    }
    public function totalquantity()
    {
        $total_quantity = 0;
        foreach ($this->items as $item) {
            $total_quantity += $item['quantity'];
        }
        return $total_quantity;
    }
}
