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
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
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
                            <input type="text" placeholder="old_price" name="old_price" class="form-control mb-2" value="{{
                             old
                            ('old_price')
                            }}">
                        </div>
                        <div class="form-group">
                            <input type="number" placeholder="count" name="count" class="form-control mb-2">
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile"
                                           name="preview_image">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="category_id">
                                <option disabled selected>Select a Category</option>
                                @foreach($categories as $category)
                                    <option {{ old('category_id') == $category->id ? 'selected' : '' }}
                                            value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                            <div class="form-group">
                                <label>Tags</label>
                                <select class="tags" multiple="multiple" data-placeholder="Select a Tags"
                                        style="width: 100%;" name="tags[]">
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Colors</label>
                                <select class="colors" multiple="multiple" data-placeholder="Select a Colors"
                                        style="width: 100%;" name="colors[]">
                                    @foreach($colors as $color)
                                        <option value="{{ $color->id }}">{{ $color->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        <input type="submit" class="btn btn-primary" value="Add">
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
