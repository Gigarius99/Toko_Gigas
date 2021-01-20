<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                        <div class="row">
                            <div class="card gambar-product">
                                <div class="card-body">
                                    <img src="{{ $product->image ? asset('/storage/' . $product->image) : 'http://placehold.it/150x150' }}" alt="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h1><strong>{{ $product->title }}</strong></h1>
                                <h6>
                                    Rp. {{ number_format($product->price) }}
                                    @if($product->is_ready == 1)
                                    <span class="badge badge-success"> <i class="fas fa-check"></i> Ready Stok</span>
                                    @else
                                    <span class="badge badge-danger"> <i class="fas fa-times"></i> Stok Habis</span>
                                    @endif
                                </h6>
                                <hr>

                                <div class="row">
                                    <div class="col">
                                        <table class="table" style="border-top : hidden">
                                            <tr>
                                                <td>Jenis</td>
                                                <td>:</td>
                                                <td>{{$product->jenis}}</td>
                                            </tr>
                                            <tr>
                                                <td>Merek</td>
                                                <td>:</td>
                                                <td>{{$product->merek}}</td>
                                            </tr>
                                            <tr>
                                                <td>Berat/Ukuran</td>
                                                <td>:</td>
                                                <td>{{$product->berat}}</td>
                                            </tr>
                                            <tr>
                                                <td>Deskripsi</td>
                                                <td>:</td>
                                                <td>{{$product->description}}</td>
                                            </tr>
                                        </table>   
                                    </div>
                                </div>

                            </div> 

                            <div class="col-md-12">
                                <button wire:click="addToCart({{ $product->id }})" type="button" 
                                class="btn btn-sm btn-success btn-outline-white float-right">Add to Cart</button>
                            </div> 

                        </div>       
                </div>
            </div>
        </div>
    </div>
</div>
