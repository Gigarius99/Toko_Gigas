<?php

namespace App\Http\Livewire\Product;

use App\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $productId;
    public $title;
    public $price;
    public $description;
    public $image;
    public $imageOld;
    public $is_ready;
    public $jenis;
    public $merek;
    public $berat;

    protected $listeners = [
        'editProduct' => 'editProductHandler'
    ];

    public function render()
    {
        return view('livewire.product.update');
    }

    public function editProductHandler($product)
    {
        $this->productId = $product['id'];
        $this->title = $product['title'];
        $this->price = $product['price'];
        $this->description = $product['description'];
        $this->imageOld = asset('/storage/' . $product['image']);
        $this->is_ready = $product['is_ready'];
        $this->jenis = $product['jenis'];
        $this->merek = $product['merek'];
        $this->berat = $product['berat'];
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|min:3',
            'price' => 'required|numeric',
            'description' => 'required|max:180',
            'image' => 'image|max:1024',
            'is_ready' => 'required|numeric',
            'jenis' => 'required|min:3',
            'merek' => 'required|min:3',
            'berat' => 'required|min:3'
        ]);

        if ($this->productId) {
            $product = Product::find($this->productId);

            $image = '';

            if ($this->image) {
                Storage::disk('public')->delete($product->image);

                $imageName = \Str::slug($this->title, '-')
                . '-'
                . uniqid()
                . '.' . $this->image->getClientOriginalExtension();
        
                $this->image->storeAs('public', $imageName, 'local');

                $image = $imageName;
            } else {
                $image = $product->image;
                
                }

                $product->update([
                'title' => $this->title,
                'price' => $this->price,
                'description' => $this->description,
                'image' => $image,
                'is_ready' => $this->is_ready,
                'jenis' => $this->jenis,
                'merek' => $this->merek,
                'berat' => $this->berat

            ]);

            $this->emit('productUpdated');

        }
    }
}
