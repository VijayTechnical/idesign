<div>
    <div class="page-header">
        <h3 class="page-title"> Product Element </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Produuct</a></li>
                <li class="breadcrumb-item active" aria-current="page">Show</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> Products Table
                        <a href="{{ route('admin.product.add') }}"
                            class="btn btn-success create-new-button float-right">+ Add Products</a>
                    </h4>
                    <div class="table-header">
                        <form action="#" class="mt-1">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <select name="paginate" id="paginate" aria-placeholder="Number of orders"
                                            class="form-control" wire:model="paginate">
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-7"></div>
                                    <div class="col-lg-3">
                                        <input type="text" placeholder="Search here...." class="form-control"
                                            wire:model="searchTerm">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th> Id </th>
                                    <th> Image </th>
                                    <th> Name </th>
                                    <th> Price </th>
                                    <th> Sale price </th>
                                    <th> Status </th>
                                    <th> SKU </th>
                                    <th> Created_at </th>
                                    <th> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $key => $product)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td class="py-1">
                                            <img src="{{ asset('/storage/product_image') }}/{{ $product->image }}"
                                                alt="{{ $product->name }}" />
                                        </td>
                                        <td>{{ $product->name }}</td>
                                        <td>RS. {{ $product->regular_price }}</td>
                                        <td>{{ $product->sale_price }}</td>
                                        <td>
                                            @if ($product->stock_status == 'instock')
                                                <label wire:click.prevent="statusConfirm({{ $product->id }})"
                                                    style="cursor: pointer;" class="badge badge-success">Instock</label>
                                            @else
                                                <label wire:click.prevent="statusConfirm({{ $product->id }})"
                                                    style="cursor: pointer;"
                                                    class="badge badge-danger">Out-Of-Stock</label>
                                            @endif
                                        </td>
                                        <td>{{ $product->SKU }}</td>
                                        <td>{{ $product->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ route('admin.product.edit', ['product_slug' => $product->slug]) }}"
                                                class="btn btn-primary"><i class="mdi mdi-briefcase-edit"></i></a>
                                            <a href="#" wire:click.prevent="deleteConfirm({{ $product->id }})"
                                                class="btn btn-danger"><i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- PAGINATION-->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center justify-content-lg-end">
                            {{ $products->links('pagination::bootstrap-4') }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
