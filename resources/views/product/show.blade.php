@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Main</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex">
                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-success mr-2">Edit</a>
                        <form action="{{ route('product.destroy', $product->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </div>
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{ $product->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Title</td>
                                        <td>{{ $product->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>Decription</td>
                                        <td>{{ $product->description }}</td>
                                    </tr>
                                    <tr>
                                        <td>Content</td>
                                        <td>{{ $product->content }}</td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td>{{ $product->price }}</td>
                                    </tr>
                                    <tr>
                                        <td>Old price</td>
                                        <td>{{ $product->old_price }}</td>
                                    </tr>
                                    <tr>
                                        <td>Count</td>
                                        <td>{{ $product->count }}</td>
                                    </tr>
                                    <tr>
                                        <td>Preview image</td>
                                        <td>{{ $product->preview_image }}</td>
                                    </tr>
                                    <tr>
                                        <td>Is published</td>
                                        <td>{{ $product->is_published }}</td>
                                    </tr>
                                    <tr>
                                        <td>Category</td>
                                        <td>{{ $product->category }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tags</td>
                                        <td>{{ $product->tags }}</td>
                                    </tr>
                                    <tr>
                                        <td>Colors</td>
                                        <td>{{ $product->colors }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
