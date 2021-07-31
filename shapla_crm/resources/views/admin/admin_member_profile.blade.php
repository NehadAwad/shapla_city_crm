@extends('admin.admin_master')

@section('admin')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{ (!empty($user->profile_photo_path))?url('Upload_image/'
                       .$user->profile_photo_path):url('storage/profile-photos/8o0QK4BIs6SkJESuPhm1N7adEo2eEG7HaIU224Yi.jpg') }}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$user->member_name}}</h3>

                <p class="text-muted text-center">{{$user->profession}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Total Taka</b> <a class="float-right">{{$user->total_amount}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Paid</b> <a class="float-right">{{ $paid_amount }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Due</b> <a class="float-right">{{ $user->total_amount- $paid_amount}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>File No</b> <a class="float-right">{{ $user->file_no }}</a>
                  </li>
                </ul>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
                <div class="card-body">


                    <strong><i class="fas fa-user-tie"></i> Profession</strong>

                    <p class="text-muted">{{ $user->profession }}</p>

                    <hr>

                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>

                    <p class="text-muted"> {{ $user->address }}</p>

                    <strong><i class="fas fa-mobile"></i> Mobile</strong>

                    <p class="text-muted"> {{ $user->phone_no_1 }}</p>

                    <strong><i class="fas fa-envelope"></i> Email Address</strong>

                    <p class="text-muted"> {{ $user->email}}</p>

                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">


                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Update Profile</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->



                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-danger">
                          10 Feb. 2014
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 12:05</span>

                          <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                          <div class="timeline-body">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-info"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                          <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                          </h3>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-comments bg-warning"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                          <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                          <div class="timeline-body">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-success">
                          3 Jan. 2014
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-camera bg-purple"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                          <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                          <div class="timeline-body">
                            <img src="https://placehold.it/150x100" alt="...">
                            <img src="https://placehold.it/150x100" alt="...">
                            <img src="https://placehold.it/150x100" alt="...">
                            <img src="https://placehold.it/150x100" alt="...">
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form method="POST" action="/admin/update/{{$user->id}}" enctype="multipart/form-data">
                      @csrf
                      <h2 class="text-center mb-4 mt-4">Update Member</h2>
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group mb-3">
                              <label>Member Name</label>
                              <input type="text" name="member_name" value="{{$user->member_name}}" id="member-name" class="form-control {{$errors->has('member_name')? ' is-invalid': ''}}">
                          </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group mb-3">
                              <label>Father/Husband Name</label>
                              <input type="text" name="father_name" value="{{$user->father_name}}" id="father_name" class="form-control {{$errors->has('father_name')? ' is-invalid': ''}}">
                          </div>
                          </div>
                        </div>

                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group mb-3">
                                <label>Mother Name</label>
                                <input type="text" name="mother_name" id="mother-name" value="{{$user->mother_name}}" class="form-control {{$errors->has('mother_name')? ' is-invalid': ''}}">
                            </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group mb-3">
                                <label>Mailing Address</label>
                                <input type="text" name="mailing_address" value="{{$user->address}}" id="mailing-address" class="form-control">
                            </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group mb-3">
                                <label>Permanent Address</label>
                                <input type="text" name="permanent_address" id="permanent-address" value="{{$user->permanent_address}}" class="form-control">
                            </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group mb-3">
                                <label>Mobile Number 1</label>
                                <input type="tel" name="mobile_1" value="{{$user->phone_no_1}}"  id="mobile-no-1" class="form-control {{$errors->has('mobile_1')? ' is-invalid': ''}}">
                            </div>
                            </div>
                          </div>




                         <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group mb-3">
                                <label>Mobile Number 2</label>
                                <input type="tel" name="mobile_2" value="{{$user->phone_no_2}}" id="mobile-no-2" class="form-control {{$errors->has('mobile_2')? ' is-invalid': ''}}">
                            </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group mb-3">
                                <label>Date of Birth/Age</label>
                                <input type="date" name="birth_date" value="{{$user->date_of_birth}}" id="birth-date" class="form-control {{$errors->has('birth_date')? ' is-invalid': ''}}">
                            </div>
                            </div>
                          </div>


                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group mb-3">
                                <label>Email Address</label>
                                <input type="email" name="email" value="{{$user->email}}" id="email" class="form-control {{$errors->has('email')? ' is-invalid': ''}}">
                            </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group mb-3">
                                <label>National ID Number</label>
                                <input type="text" name="NID" id="NID" value="{{$user->national_id}}" class="form-control {{$errors->has('NID')? ' is-invalid': ''}}" >
                            </div>
                            </div>
                          </div>


                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group mb-3">
                                <label>Profession</label>
                                <input type="text" name="profession" value="{{$user->profession}}" id="profession" class="form-control">
                            </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group mb-3">
                                <label>Office Address</label>
                                <input type="text" name="office_address" value="{{$user->office_address}}" id="office-address" class="form-control">
                            </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group mb-3">
                                <label>Designation</label>
                                <input type="text" name="designation" value="{{$user->designation}}" id="designation" class="form-control">
                            </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group mb-3">
                                <label>Nominee Name</label>
                                <input type="text" name="nominee_name" value="{{$user->nominee_name}}" id="nominee-name" class="form-control {{$errors->has('name')? ' is-invalid': ''}}">
                            </div>
                            </div>
                          </div>





                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group mb-3">
                                <label>Relation With Member</label>
                                <input type="text" name="relation" value="{{$user->relation_with_member}}" id="relation" class="form-control">
                            </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group mb-3">
                                <label>Building Number</label>
                                <input type="text" name="building_number" value="{{$user->building_no}}" id="building-number" class="form-control">
                            </div>
                            </div>
                          </div>


                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group mb-3">
                                <label>Total Amount</label>
                                <input type="text" name="total_amount" value="{{ $user->total_amount }}" id="amount" class="form-control">
                            </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group mb-3">
                                <label>No. Of Installment</label>
                                <input type="text" name="installment_number" value="{{$user->no_of_installment}}" id="installment-number" class="form-control">
                            </div>
                            </div>
                          </div>


                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group mb-3">
                                <label>Total Installment Amount</label>
                                <input type="text" name="total_installment_amount" value="{{$user->total_installment_amount}}" id="total_installment_amount" class="form-control">
                            </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group mb-3">
                                <label>Installment Start From</label>
                                <input type="date" name="installment_start" value="{{$user->installment_start_from}}" id="installment-start" class="form-control">
                            </div>
                            </div>
                          </div>


                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group mb-3">
                                <label>Description</label>
                                <input type="text" name="description" value="{{$user->description}}" id="description" class="form-control">
                            </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group mb-3">
                                <label>Member Image</label>
                                <input type="file" name="member_img" id="member-img" class="form-control">
                            </div>
                            </div>
                          </div>
                          <div class="form-group mb-3">
                              <label>Nominee Image</label>
                              <input type="file" name="nominee_img" id="nominee-img" class="form-control">
                          </div>


                          <button type="submit" class="btn btn-primary mb-3">Submit</button>
                      </div>
                  </form>

                  <form method="POST" action="/admin/updatePass/{{$user->id}}" enctype="multipart/form-data">
                    @csrf
                    <h2 class="text-center mb-4 mt-4">Change Password</h2>
                    <div class="container">
                                    
                          <div class="form-group mb-3">
                            <label>New Password</label>
                            <input type="password"  name="password" id="password" class="form-control">
                          </div>

                        <button type="submit" class="btn btn-primary mb-3">Submit</button>
                    
                   </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">User Information</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead class="bg-info">
                    <tr>
                      <th>Booking Money Info</th>
                      <th>Amount</th>
                      <th>Paid/Due</th>
                      <th>Payment Type</th>
                      <th>Paid Date</th>
                      <th>Due Date</th>
                      <th>Note</th>
                      <th>Send Mail</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                      <td>Booking Money</td>
                      <td>{{ $user->booking_money}}</td>
                      <td>Paid : {{ $user->booking_money_paid}} Due : {{ $user->booking_money - $user->booking_money_paid}} </td>
                      <td>{{ $user->payment_booking_money }}</td>
                      <td>{{ $user->booking_money_paid_date }}</td>
                      <td>{{ $user->booking_money_due_date }}</td>
                      <td>{{ $user->booking_money_note }}</td>
                      <td>
                          <a href="{{url('/admin/email/'.$user->id)}}"type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Send</a>
                      </td>
                    </tr>

                    <tr>
                      <td>Down Payment</td>
                      <td>{{ $user->down_payment}}</td>
                      <td>Paid : {{ $user->down_payment_paid  }} Due : {{ $user->down_payment - $user->down_payment_paid}}</td>
                      <td>{{ $user->payment_down_payment }}</td>
                      <td>{{ $user->down_payment_paid_date }}</td>
                      <td>{{ $user->down_payment_due_date }}</td>
                      <td>{{ $user->down_payment_note }}</td>
                      <td>
                        <a href="{{url('/admin/email/'.$user->id)}}"type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Send</a>
                    </td>
                    </tr>
                    <tr>
                      <td>Car Parking</td>
                      <td>{{ $user->car_parking}}</td>
                      <td>Paid : {{ $user->car_parking_paid}} Due : {{ $user->car_parking - $user->car_parking_paid}}</td>
                      <td>{{ $user->payment_car_parking }}</td>
                      <td>{{ $user->car_parking_paid_date }}</td>
                      <td>{{ $user->car_parking_due_date }}</td>
                      <td>{{ $user->car_parking_note }}</td>
                      <td>
                        <a href="{{url('/admin/email/'.$user->id)}}"type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Send</a>
                    </td>
                    </tr>

                    <tr>
                      <td>Land Filling (1st)</td>
                      <td>{{ $user->land_filling_1}}</td>
                      <td>Paid : {{ $user->land_filling_1_paid}} Due : {{ $user->land_filling_1 - $user->land_filling_1_paid}}</td>
                      <td>{{ $user->payment_land_1st }}</td>
                      <td>{{ $user->land_filling_1_paid_date }}</td>
                      <td>{{ $user->land_filling_1_due_date }}</td>
                      <td>{{ $user->land_filling_1_note }}</td>
                      <td>
                        <a href="{{url('/admin/email/'.$user->id)}}"type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Send</a>
                    </td>
                    </tr>

                    <tr>
                      <td>Land Filling (2nd)</td>
                      <td>{{ $user->land_filling_2}}</td>
                      <td>Paid : {{ $user->land_filling_2_paid}} Due : {{ $user->land_filling_2 - $user->land_filling_2_paid}}</td>
                      <td>{{ $user->payment_land_2nd }}</td>
                      <td>{{ $user->land_filling_2_paid_date }}</td>
                      <td>{{ $user->land_filling_2_due_date }}</td>
                      <td>{{ $user->land_filling_2_note }}</td>
                      <td>
                        <a href="{{url('/admin/email/'.$user->id)}}"type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Send</a>
                    </td>
                    </tr>

                    <tr>
                      <td>Building Pilling</td>
                      <td>{{ $user->building_pilling}}</td>
                      <td>Paid : {{ $user->building_pilling_paid}} Due : {{ $user->building_pilling - $user->building_pilling_paid}}</td>
                      <td>{{ $user->payment_building_pilling }}</td>
                      <td>{{ $user->building_pilling_paid_date }}</td>
                      <td>{{ $user->building_pilling_due_date }}</td>
                      <td>{{ $user->building_pilling_note }}</td>
                      <td>
                        <a href="{{url('/admin/email/'.$user->id)}}"type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Send</a>
                    </td>
                    </tr>

                    <tr>
                      <td>1st floor Roof Casting</td>
                      <td>{{ $user->first_roof_casting}}</td>
                      <td>Paid : {{ $user->first_roof_casting_paid}} Due : {{ $user->first_roof_casting - $user->first_roof_casting_paid}}</td>
                      <td>{{ $user->payment_1st_floor_roof_casting }}</td>
                      <td>{{ $user->first_roof_paid_date }}</td>
                      <td>{{ $user->first_roof_due_date }}</td>
                      <td>{{ $user->roof_casting_note }}</td>
                      <td>
                        <a href="{{url('/admin/email/'.$user->id)}}"type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Send</a>
                    </td>
                    </tr>

                    <tr>
                      <td>Finishing Work</td>
                      <td>{{ $user->finishing_work}}</td>
                      <td>Paid : {{ $user->finishing_work}} Due : 0</td>
                      <td>{{ $user->payment_finishing_work }}</td>
                      <td>{{ $user->finishing_work_paid_date }}</td>
                      <td></td>
                      <td>{{ $user->finishing_work_note }}</td>
                      <td>
                        <a href="{{url('/admin/email/'.$user->id)}}"type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Send</a>
                    </td>
                    </tr>
                    <tr>
                      <td>After Handover Money</td>
                      <td>{{ $user->after_handover_money}}</td>
                      <td>Paid : {{ $user->after_handover_money}} Due : 0 </td>
                      <td>{{ $user->payment_after_handover_money }}</td>
                      <td>{{ $user->after_handover_paid_date }}</td>
                      <td></td>
                      <td>{{ $user->after_handover_money_note }}</td>
                      <td>
                        <a href="{{url('/admin/email/'.$user->id)}}"type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Send</a>
                    </td>
                    </tr>



                  @for ($i = 0; $i <  $user->no_of_installment; $i++)
                    <tr>
                      <td>Installment {{ $i+1 }}</td>
                      <td>{{ $user->total_installment_amount / $user->no_of_installment }} </td>
                      @if(isset($ins[$i]))
                      <td >Paid :{{$ins[$i]->installment_paid}}  Due : {{$ins[$i]->installment_due}}</td>
                        <td> {{ $ins[$i]->payment_installment }} </td>
                        <td> {{$ins[$i]->installment_date}} </td>
                        <td> {{$ins[$i]->installment_due_date}} </td>
                        <td> {{$ins[$i]->installment_note}} </td>
                        <td>
                          <a href="{{url('/admin/email/'.$user->id)}}"type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Send</a>
                      </td>

                      @else
                      <td>Paid :0  Due : 0</td>
                        <td> None </td>
                        <td>  </td>
                        <td> {{date('d-m-Y', strtotime("+$i months", strtotime($timeformate)))}} </td>
                        <td></td>
                        <td>
                          <a href="{{url('/admin/email/'.$user->id)}}"type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Send</a>
                      </td>

                      @endif

                    </tr>
                  @endfor


                    </tbody>

                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
{{-- <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <div class="contact-form">

          <form action="{{ route('admin.send.email') }}" method="post">
                  @csrf
            <div class="row d-none">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="inputName">Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{$user->member_name}}">
                                  @error('name')
                                  <span class="text-danger"> {{ $message }} </span>
                                  @enderror
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="inputEmail">Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter Email" value="abfarhan015@gmail.com">
                                  @error('email')
                                  <span class="text-danger"> {{ $message }} </span>
                                  @enderror
                </div>
              </div>
            </div>
            <div class="form-group ">
              <label for="inputSubject">Subject</label>
                          <input type="text" name="subject" class="form-control" placeholder="Instament paid successfull" value="Instament paid successfully">
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
</div> --}}

      <!-- for pdf  -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <a href="/admin/member/{{$user->id}}/viewpdf" class="btn btn-lg btn-danger my-3">View PDF</a>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

    </div>


  @endsection
