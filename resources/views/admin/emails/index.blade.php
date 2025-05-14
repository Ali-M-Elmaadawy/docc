@extends('layouts.admin-app')
@section('content')
      <div class="main-content">
        <div class="page-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div
                  class="page-title-box d-sm-flex align-items-center justify-content-between"
                >
                  <h4 class="mb-sm-0">Emails</h4>

                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item">
                        <a href="#"><i class="ri-home-5-fill"></i></a>
                      </li>
                      <li class="breadcrumb-item active">Emails</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xl-12">
                <div class="card rounded-4 h-100">
                  <span class="mb-2">
                    <span class="card-title page-header">Emails</span>
                    <a href="{{route('admin.emails.send')}}" class="btn btn-success float-end">
                       <i class="las la-plus align-middle fs-16 me-2 "></i> Send
                    </a>
                  </span>


                  <div class="table-responsive table-card">
                    <table  class="table align-middle table-nowrap mb-0">
                      <thead class="table-light">
                        <tr>
                            <th scope="col">Email</th>
                          
                            <th scope="col">Controls</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($emails as $email)
                        <tr>
                            
                            <td>{{ $email->email}}</td>
                           
                            <td>
                                            <div class="dropdown dropdown-customized">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                 

                                                    <li>
                                                        <form onsubmit="return confirm('Are you sure?');" action="{{ route('admin.emails.destroy', $email->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            
                                                            <button type="submit"
                                                                class="dropdown-item remove-item-btn"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</button>
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