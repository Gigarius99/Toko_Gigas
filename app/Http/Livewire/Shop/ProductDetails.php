<?php

namespace App\Http\Livewire\Shop;

use App\Facades\Cart;
use App\Product;
use Livewire\Component;

class ProductDetails extends Component
{
    
   public $product;

   public function mount($id)
    {
        $productDetail = Product::find($id);

        if($productDetail) {
            $this->product = $productDetail;
        }

    }

    public function render()
    {
        return view('livewire.shop.product-details');
    }

    public function addToCart($productId)
    {
        $product = Product::find($productId);
        Cart::add($product);
        $this->emit('addToCart');
        //dd(Cart::get()['products']);
    }
}
