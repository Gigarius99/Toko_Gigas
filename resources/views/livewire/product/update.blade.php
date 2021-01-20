<div class="row justify-content-center mb-2">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form wire:submit.prevent="update" method="POST" enctype="multipart/form-data">

                    <div class="form-group">

                        <div class="form-row">
                            <div class="col">
                              <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Title">
                                @error('title')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col">
                                <input wire:model="price" type="text" class="form-control @error('price') is-invalid @enderror" placeholder="Price">
                                @error('price')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>

                    </div>

                    <div class="form-group">

                        <div class="form-row">
                            <div class="col">
                              <input wire:model="jenis" type="text" class="form-control @error('jenis') is-invalid @enderror" placeholder="Jenis">
                                @error('jenis')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                       
                            <div class="col">
                                <input wire:model="is_ready" type="text" class="form-control @error('is_ready') is-invalid @enderror" placeholder="Stok">
                                @error('is_ready')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="form-group">

                        <div class="form-row">
                            <div class="col">
                              <input wire:model="merek" type="text" class="form-control @error('merek') is-invalid @enderror" placeholder="Merek">
                                @error('merek')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        
                            <div class="col">
                                <input wire:model="berat" type="text" class="form-control @error('berat') is-invalid @enderror" placeholder="Berat/Ukuran">
                                 @error('berat')
                                 <span class="invalid-feedback">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                            </div>
                        </div>

                    </div>

                    <div class="form-group">

                        <div class="form-row">
                            <div class="col">
                                <input wire:model="description" type="text" class="form-control @error('description') is-invalid @enderror" placeholder="Description">
                                @error('description')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="form-group">

                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input wire:model="image" type="file" class="form-control-file" id="image">
                                    @error('image')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                     </span>
                                    @enderror

                                    @if ($image)
                                        <img src="{{ $image->temporaryUrl() }}" alt="" height="200">
                                    @else
                                        <img src=" {{ $imageOld }}" alt="" height="200">
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="btn-group" role="group" aria-label="Button Form">
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        <button wire:click="$emit('formClose')" type="button" class="btn btn-sm btn-secondary">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

