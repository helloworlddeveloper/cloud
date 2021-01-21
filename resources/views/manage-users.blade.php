<x-app-layout>

<div class="main-content">
    <div class="page-content">
       <div class="container-fluid">
          <!-- start page title -->
          <div class="row">
             <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                   <h4 class="mb-0 font-size-18">Users List</h4>
                   <div class="page-title-right">
                      <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item active">Users List</li>
                      </ol>
                   </div>
                </div>
             </div>
          </div>
          <!-- end page title -->
          <div class="row">
             <div class="col-lg-12">
                <div class="card">
                   <div class="card-body">
                      <div class="table-responsive">
                         <table class="table table-centered table-nowrap table-hover">
                            <thead class="thead-light">
                               <tr>
                                  <th scope="col" style="width: 70px;">#</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Type</th>
                                  <th scope="col">ID</th>
                                  <th scope="col">Action</th>
                               </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                               <tr>
                                  <td>
                                     <div>
                                        <img class="rounded-circle avatar-xs" src="{{ $user->profile_photo_url }}" alt="">
                                     </div>
                                  </td>
                                  <td>
                                     <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{ $user->name }}</a></h5>
                                  </td>
                                  <td>{{ $user->email }}</td>
                                  <td>
                                     <div>
                                        <a href="#" class="badge badge-soft-primary font-size-11 m-1">{{ $user->usertype }}</a>
                                     </div>
                                  </td>
                                  <td>
                                     {{ $user->id }}
                                  </td>
                                  <td>
                                     <ul class="list-inline font-size-20 contact-links mb-0">
                                        <li class="list-inline-item px-2">
                                            <form id="myForm" action="{{ route('users.destroy', [$user->id]) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button onclick="myForm.submit();" data-toggle="tooltip" data-placement="top" style="border:none; outline:none; background-color: transparent; color:#A3B0CF" title="Delete"><i class="bx bx-trash-alt"></i></button>
                                                </form>
                                        </li>
                                        <li class="list-inline-item px-2">
                                           <a href="{{ route('users.edit',[$user->id]) }}" data-toggle="tooltip" data-placement="top" title="Update"><i class="bx bx-bolt-circle"></i></a>
                                        </li>
                                     </ul>
                                  </td>
                               </tr>
                               @endforeach
                            </tbody>
                         </table>
                      </div>
                      {{-- <div class="row">
                         <div class="col-lg-12">
                            <ul class="pagination pagination-rounded justify-content-center mt-4">
                               <li class="page-item disabled">
                                  <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                               </li>
                               <li class="page-item">
                                  <a href="#" class="page-link">1</a>
                               </li>
                               <li class="page-item active">
                                  <a href="#" class="page-link">2</a>
                               </li>
                               <li class="page-item">
                                  <a href="#" class="page-link">3</a>
                               </li>
                               <li class="page-item">
                                  <a href="#" class="page-link">4</a>
                               </li>
                               <li class="page-item">
                                  <a href="#" class="page-link">5</a>
                               </li>
                               <li class="page-item">
                                  <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                               </li>
                            </ul>
                         </div> --}}
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!-- container-fluid -->
    </div>
</x-app-layout>
