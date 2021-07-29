@extends('admin.admin_master')
{{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700"> --}}

@section('header_css')
    <style>
body {
    color: #000;
    background-image: url("background.jpg");
    font-family: "Roboto", sans-serif;
}
.contact-form {
    padding: 30px;
    margin: 0px auto;
}	
.contact-form h1 {
    font-size: 42px;
    font-family: 'Pacifico', sans-serif;
    margin: 0 0 50px;
    text-align: center;
}
.contact-form .form-group {
    margin-bottom: 20px;
}
.contact-form .form-control, .contact-form .btn {
    min-height: 40px;
    border-radius: 2px;
}
.contact-form .form-control {
    border-color: #e2c705;
}
.contact-form .form-control:focus {
    border-color: #d8b012;
    box-shadow: 0 0 8px #dcae10;
}
.contact-form .btn-primary, .contact-form .btn-primary:active {
    min-width: 250px;
    color: #fcda2e;
    background: #000 !important;
    margin-top: 20px;
    border: none;
}
.contact-form .btn-primary:hover {
    color: #fff; 
}
.contact-form .btn-primary i {
    margin-right: 5px;
}
.contact-form label {
    opacity: 0.9;
}
.contact-form textarea {
    resize: vertical;
}
.bs-example {
    margin: 20px;
}

    </style>
@endsection
@section('admin')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Send Mail</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">send Mail</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="contact-form">
                    
                    <form action="{{ route('admin.send.email') }}" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="hidden" name="id" class="form-control" placeholder="Enter Name" value="{{$user->id}}">
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{$user->member_name}}">
                                    @error('name')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Email" value="{{$user->email}}">
                                    @error('email')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                        </div>            
                        <div class="form-group">
                            <label for="inputSubject">Subject</label>
                            <input type="text" name="subject" class="form-control" placeholder="Enter subject">
                            @error('subject')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputMessage">Message</label>
                            <textarea name="content" rows="5" class="form-control" placeholder="Enter Your Message"></textarea>
                            @error('content')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
                        </div>            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

