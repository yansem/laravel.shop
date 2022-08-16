@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
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
                    <form action="{{ route('user.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" placeholder="Name" name="name" class="form-control mb-2" value="{{ old
                            ('name')
                            }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Surname" name="surname" class="form-control mb-2" value="{{ old
                            ('surname')
                            }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Patronymic" name="patronymic" class="form-control mb-2" value="{{ old
                            ('patronymic')
                            }}">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email" name="email" class="form-control mb-2" value="{{ old
                            ('email')
                            }}">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" name="password" class="form-control mb-2">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Confirm password" name="password_confirmation"
                                   class="form-control
                        mb-2">
                        </div>
                        <div class="form-group">
                            <input type="number" placeholder="Age" name="age" class="form-control mb-2" value="{{ old
                            ('age')
                            }}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Address" name="address" class="form-control mb-2" value="{{ old
                            ('address')
                            }}">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="gender">
                                <option disabled selected>Gender</option>
                                <option {{ old('gender') == 1 ? 'selected' : '' }} value="1">Мужской</option>
                                <option {{ old('gender') == 2 ? 'selected' : '' }} value="2">Женский</option>
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
