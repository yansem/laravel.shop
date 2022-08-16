@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Products</h1>
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
                <div class="col-6">
                    <form action="{{ route('product.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" placeholder="title" name="title" class="form-control mb-2" value="{{ old
                            ('title')
                            }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="description" name="description" class="form-control mb-2"
                                   value="{{ old
                            ('description')
                            }}">
                        </div>
                        <div class="form-group">
                            <textarea name="content" placeholder="content" class="form-control mb-2" cols="30"
                                      rows="10">{{ old('content')}}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="price" name="price" class="form-control mb-2" value="{{ old
                            ('price')
                            }}">
                        </div>
                        <div class="form-group">
                            <input type="number" placeholder="count" name="count" class="form-control mb-2">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Add">
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
