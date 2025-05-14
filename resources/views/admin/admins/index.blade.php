@extends('layouts.admin-app')
@section('title' , 'Admins')
@section('content')
      <div class="main-content">
        <div class="page-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div
                  class="page-title-box d-sm-flex align-items-center justify-content-between"
                >
                  <h4 class="mb-sm-0">Admins</h4>

                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item">
                        <a href="#"><i class="ri-home-5-fill"></i></a>
                      </li>
                      <li class="breadcrumb-item active">Admins</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xl-12">
                <div class="card rounded-4 h-100">
                  <span class="mb-2">
                    <span class="card-title page-header">Admins</span>
                    <a href="{{route('admin.admins.create')}}" class="btn btn-success float-end">
                       <i class="las la-plus align-middle fs-16 me-2 "></i> Add New
                    </a>
                  </span>


                  <div class="table-responsive table-card">
                    <table  class="table align-middle table-nowrap mb-0">
                      <thead class="table-light">
                        <tr>
                            <th scope="col">Username</th>
                            <th scope="col" style="width: 150px;">Controls</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($admins as $admin)
                        <tr>
                            
                            <td>{{ $admin->username}}</td>
                            <td>
                                <div class="dropdown dropdown-customized">
                                  <button
                                    class="btn btn-soft-secondary btn-sm dropdown"
                                    type="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                  >
                                    <i class="ri-more-fill align-middle"></i>
                                  </button>
                                  <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                      <a
                                        class="dropdown-item"
                                        href="{{route('admin.admins.edit',[$admin->id])}}"
                                        data-id="25000371"
                                      >
                                        <i
                                          class="ri-pencil-fill align-bottom me-2 text-muted"
                                        ></i>
                                        Edit
                                      </a>
                                    </li>
                                    <li>
                                        <form onsubmit="return confirm('Are you sure?');" action="{{ route('admin.admins.destroy',[$admin]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            
                                            <button type="submit" class="dropdown-item remove-item-btn" ><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</button>

                                        </form>
                                    </li>
                                  </ul>
                                </div>
                              </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>

                  
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

     
      </div>  
@endsection