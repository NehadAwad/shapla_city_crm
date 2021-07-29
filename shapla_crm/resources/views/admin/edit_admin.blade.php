@extends('admin.admin_master');

@section('admin')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Admin</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Admin</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 card card-body pb-0">
                    <form role="form" action="/admin/admin_update/{{$admin->id}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="name">User Name</label>
                            <input type="text" class="form-control {{$errors->has('email')? ' is-invalid': ''}}" value="{{$admin->name}}" id="name" name="name" placeholder="User Name">
                            @if($errors->has('name'))
                                <span class="error text-danger">{{$errors->first('name')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control {{$errors->has('email')? ' is-invalid': ''}}" value="{{$admin->email}}" id="email" name="email" placeholder="email" >
                            @if($errors->has('email'))
                                <span class="error text-danger">{{$errors->first('email')}}</span>
                            @endif
                        </div>

                        <div class="form-group ">
                            <label for="admin_img">Phote</label>
                            <input type="file" class="form-control-file " id="admin_img" name="profile_photo_path" >
                            
                        </div>
                        <div class="form-group text-center mt-4">
                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                            <a href='{{ route('admin.view_admin') }}' class="btn btn-warning">Back</a>
                        </div>

                    </form>
                </div>
            </div>
        </section>


    </div>

@endsection
