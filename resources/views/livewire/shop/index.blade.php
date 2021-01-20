<div class="container">
    <div class="col-lg-12">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="http://localhost:8000/images/belanja.png" alt="Toko Gigas"> <!-- Image banner ukuran : 1040x300 px -->
                </div>
                <div class="carousel-item">
                <img src="http://localhost:8000/images/butuh.png" alt="Kebutuhan">
                </div>
                <div class="carousel-item">
                <img src="http://localhost:8000/images/belanjamudah.png" alt="Belanja Mudah">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="form-group">
                <input wire:model="search" type="text" class="form-control" placeholder="Search Product">
            </div>
        </div>
    </div>

    <div class="row">

        @foreach ($products as $product)
        <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3 mb-4">
            <div class="card h-80">
                <img class="card-img-top img-fluid" src="{{ $product->image ? asset('/storage/' . $product->image) : 'http://placehold.it/150x150' }}" alt="">
                <div class="card-img-overlay" style="background-color: rgba(0,0,0,0.3);">
                    <h5 class="text-white">
                        <strong>{{ $product->title }}</strong>
                    </h5>
                    <h6 class="text-white">Rp{{ number_format($product->price,2,",",".") }}</h6>
                </div>              
            </div>

            <div class="col-md-14">
                    <a href="{{ route('shop.product-details', $product->id) }}" class="btn btn-sm btn-primary btn-block">Detail</a>
            </div>
        </div>
        @endforeach

    </div>
    {{ $products->links() }}
</div>

    


