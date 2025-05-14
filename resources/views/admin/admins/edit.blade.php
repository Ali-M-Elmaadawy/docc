@extends('layouts.admin-app')
@section('title' , 'Edit Admin')
@section('content')
      <div class="main-content">
        <div class="page-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between" >
                  <h4 class="mb-sm-0">Edit Admin</h4>

                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item">
                        <a href="#"><i class="ri-home-5-fill"></i></a>
                      </li>
                      <li class="breadcrumb-item">
                        <a href="{{route('admin.admins.index')}}">Admins</a>
                      </li>
                      <li class="breadcrumb-item active">Edit Admin</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <form action="{{route('admin.admins.update' , $admin->id)}}" method="post">
              @csrf()
              @method('PATCH')

            <div class="row">
              <div class="col-xl-12">
                <div class="card rounded-4">
                    <div class="row">

                        <div class="col-sm-6">
                          <div class="mb-3">
                            <label for="categoryEnglish" class="form-label"> Username <span class="text-main-color fs-2 required">*</span></label>
                            <input type="text" class="rounded-4 form-control mb-3" id="categoryEnglish " name="username" value="{{$admin->username}}">
                          </div>
                        </div>
                                           
                        <div class="col-sm-6">
                          <div class="mb-3">
                            <label for="categoryEnglish" class="form-label"> Password <span class="text-main-color fs-2 required">*</span></label>
                            <input type="password" class="rounded-4 form-control mb-3" id="categoryEnglish " name="password">
                          </div>
                        </div>    
                        
                        

                      </div>

                   <div class="row mt-2">
                    <div class="col-sm-12">
                          <button type="submit" class="btn btn-primary form-control rounded-4 waves-effect waves-light me-3 w-auto float-start"> Save</button>
                          <a href="{{route('admin.admins.index')}}" class="btn btn-light form-control rounded-4 waves-effect waves-light w-auto float-start"> Cancel </a>
                     </div>
                   </div>
                <!-- end card -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          </form>
          <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        



      </div> <!-- container-fluid -->

       
      </div>
@endsection