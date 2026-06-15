<div class="modal fade" id="showProduct{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Detail Categoy</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                            <p>Category: {{ $product->category->name ?? '' }}</p>
                    </div>
                    <div class="col-md-12">
                        <p>Name: {{ $product->name }}</p>
                    </div>
                    <div class="col-md-12">
                        <p>Image: {{ $product->image }}</p>
                    </div>
                    <div class="col-md-12">
                        <p>Price: {{ $product->price }}</p>
                    </div>
                    <div class="col-md-12">
                        <p>Stock: {{ $product->stock }}</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>