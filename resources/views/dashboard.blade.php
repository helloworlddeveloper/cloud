<x-app-layout>

    <div class="main-content">
        <div class="page-content">
           <div class="container-fluid">
              <!-- start page title -->
              <div class="row">
                 <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                       <h4 class="mb-0 font-size-18">Dashboard</h4>
                       <div class="page-title-right">

                       </div>
                    </div>
                 </div>
              </div>
              <!-- end page title -->
              <div class="row">
                 <div class="col-lg-12">
                    <div class="card">
                       <div class="card-body">
                          <div class="row">
                             <div class="col-lg-4">
                                <div class="media">
                                   <div class="mr-3">
                                      <img src="{{ Auth::user()->profile_photo_url }}" alt="" class="avatar-md rounded-circle img-thumbnail">
                                   </div>
                                   <div class="media-body align-self-center">
                                      <div class="text-muted">
                                         <h5 class="mb-1">{{ Auth::user()->name }}</h5>
                                         <p class="mb-0">{{ Session::get('usertype') }}</p>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-4 align-self-center">
                                <div class="text-lg-center mt-4 mt-lg-0">
                                   <div class="row">
                                      <div class="col-4">
                                         <div>
                                            <p class="text-muted text-truncate mb-2">Total Categories</p>
                                            <h5 class="mb-0">5</h5>
                                         </div>
                                      </div>
                                      <div class="col-4">
                                         <div>
                                            <p class="text-muted text-truncate mb-2">Projects</p>
                                            <h5 class="mb-0">40</h5>
                                         </div>
                                      </div>
                                      <div class="col-4">
                                         <div>
                                            <p class="text-muted text-truncate mb-2">Clients</p>
                                            <h5 class="mb-0">18</h5>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-4 d-none d-lg-block">
                                <div class="clearfix  mt-4 mt-lg-0">
                                   <div class="dropdown float-right">
                                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="bx bxs-cog align-middle mr-1"></i> Setting
                                      </button>
                                      <div class="dropdown-menu dropdown-menu-right">
                                         <a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a>
                                         <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                          <!-- end row -->
                       </div>
                    </div>
                 </div>
              </div>
              <!-- end row -->
              <div class="row">
                 <div class="col-xl-4">
                    <div class="card bg-soft-primary">
                       <div>
                          <div class="row">
                             <div class="col-7">
                                <div class="text-primary p-3">
                                   <h5 class="text-primary">Welcome Back !</h5>
                                   <p>SQLEye Dashboard</p>
                                   <ul class="pl-3 mb-0">
                                      <li class="py-1">7 + Layouts</li>
                                      <li class="py-1">Multiple apps</li>
                                   </ul>
                                </div>
                             </div>
                             <div class="col-5 align-self-end">
                                <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-xl-8">
                    <div class="row">
                       <div class="col-sm-4">
                          <div class="card">
                             <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                   <div class="avatar-xs mr-3">
                                      <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-18">
                                      <i class="bx bx-copy-alt"></i>
                                      </span>
                                   </div>
                                   <h5 class="font-size-14 mb-0">Orders</h5>
                                </div>
                                <div class="text-muted mt-4">
                                   <h4>1,452 <i class="mdi mdi-chevron-up ml-1 text-success"></i></h4>
                                   <div class="d-flex">
                                      <span class="badge badge-soft-success font-size-12"> + 0.2% </span> <span class="ml-2 text-truncate">From previous period</span>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="col-sm-4">
                          <div class="card">
                             <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                   <div class="avatar-xs mr-3">
                                      <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-18">
                                      <i class="bx bx-archive-in"></i>
                                      </span>
                                   </div>
                                   <h5 class="font-size-14 mb-0">Revenue</h5>
                                </div>
                                <div class="text-muted mt-4">
                                   <h4>$ 28,452 <i class="mdi mdi-chevron-up ml-1 text-success"></i></h4>
                                   <div class="d-flex">
                                      <span class="badge badge-soft-success font-size-12"> + 0.2% </span> <span class="ml-2 text-truncate">From previous period</span>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="col-sm-4">
                          <div class="card">
                             <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                   <div class="avatar-xs mr-3">
                                      <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-18">
                                      <i class="bx bx-purchase-tag-alt"></i>
                                      </span>
                                   </div>
                                   <h5 class="font-size-14 mb-0">Average Price</h5>
                                </div>
                                <div class="text-muted mt-4">
                                   <h4>$ 16.2 <i class="mdi mdi-chevron-up ml-1 text-success"></i></h4>
                                   <div class="d-flex">
                                      <span class="badge badge-soft-warning font-size-12"> 0% </span> <span class="ml-2 text-truncate">From previous period</span>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <!-- end row -->
                 </div>
              </div>
              <div class="card">
                 <div class="card-body">
                    <h4 class="card-title mb-4"></h4>
                    <div class="table-responsive">
                       <table class="table table-nowrap table-centered mb-0">
                          <thead>

                             <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Combos</th>
                                <th scope="col">Lines</th>
                                <th scope="col" colspan="2">Total</th>
                             </tr>
                          </thead>
                          @foreach ($categories as $category)

                          <tbody>
                             <tr>
                                <th scope="row">
                                   <div class="d-flex align-items-center">
                                      <div class="avatar-xs mr-3">
                                         <span class="avatar-title rounded-circle bg-soft-warning text-warning font-size-18">
                                         <i class="mdi mdi-bitcoin"></i>
                                         </span>
                                      </div>
                                      <span>
                                       {{ $category->name }}
                                    </span>
                                   </div>
                                </th>
                                <td>
                                   <div class="text-muted">
                                       {{ $category->description }}
                                   </div>
                                </td>
                                <td>
                                   <h5 class="font-size-14 mb-1">1.2601</h5>
                                   <div class="text-muted">$6225.74</div>
                                </td>
                                <td>
                                   <h5 class="font-size-14 mb-1">0.1512</h5>
                                   <div class="text-muted">$742.32</div>
                                </td>
                                <td>
                                   <h5 class="font-size-14 mb-1">4.2562</h5>
                                   <div class="text-muted">$6425.42</div>
                                </td>
                                <td style="width: 120px;">
                                    @if(auth()->user()->usertype === 'Admin')
                                    <a href="{{ route('categories.edit', [$category->id]) }}" class="btn btn-primary btn-sm w-xs mr-2">Update</a>
                                    <form action="{{ route('categories.destroy', [$category->id]) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-primary btn-sm w-xs mr-2" type="submit">Delete</button>
                                    </form>

                                    @endif
                                   <a href="{{ route('categories.show', [$category->slug]) }}" class="btn btn-primary btn-sm w-xs">View</a>
                                </td>
                             </tr>
                             <tr>

                             </tr>
                          </tbody>
                          @endforeach

                       </table>
                    </div>
                 </div>
              </div>

           </div>
        </div>
        <!-- container-fluid -->
     </div>
     <!-- End Page-content -->

</x-app-layout>
