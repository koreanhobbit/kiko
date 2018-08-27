@extends('admin_frontend.layout.frame')
@section('breadcrumb')
	@include('admin_frontend.page.product.part.breadcrumb')
@endsection

@section('fullside')
	<section class="productList">
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">Product</h1>
          </header>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Basic Table</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Image</th>
                          <th>Name</th>
                          <th>Publication</th>
                          <th>Stock</th>
                          <th>Username</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
              			@foreach($products as $key => $product)
	                        <tr>
	                          <th scope="row">{{ $products->firstItem() + $key }}</th>
	                          <td>fds</td>
	                          <td>{{ $product->name }}</td>
	                          <td></td>
	                          <td>{{ $product->stock }}</td>
	                          <td>@mdo</td>
	                          <td>
	                          	<a href="{{ route('admin.product.edit', ['id' => $product->id]) }}" class="btn btn-secondary btn-sm">
	                          		<span>
	                          			<i class="fa fa-edit"></i>
	                          		</span>
	                          	</a>
	                          </td>
	                          <td>
	                          	<button class="btn btn-danger btn-sm">
	                          		<span>
	                          			<i class="fa fa-trash"></i>
	                          		</span>
	                          	</button>
	                          </td>
	                        </tr>
	                    @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-xs-center"> 
          	{{ $products->links() }}	
          </div>
          
        </div>
    </section>
@endsection