<x-app-layout>
    <div class="container" style="margin-top:200px;">
        <div class="row">

            <div class="col-md-4">

               <div class="px-4 px-sm-0">
                  <h3 class="h5">Edit Category</h3>
                  <p class="mt-1 text-muted">
                      change title or description of this category
                  </p>
               </div>
            </div>
            <div class="col-md-8">

               <div class="card shadow-sm">

                  <form action="{{ route('users.update',[$user->id]) }}" method="POST">
                    @method('PUT')

                    @if(Session::has('success'))
                    <div class="alert alert-info mb-3">
                        {{ Session::get('success') }}
                    </div>
                   @endif
                   @if(Session::has('fail'))
                   <div class="alert alert-danger mb-3">
                       {{ Session::get('fail') }}
                   </div>
                  @endif
                    @csrf
                     <div class="card-body">
                        <div class="w-md-75">
                           <div class="form-group">
                              <label for="category">
                                  Name
                              </label>
                              <input class="form-control" id="category" value="{{ $user->name }}" name="name" type="text">
                           </div>
                           <div class="form-group">
                            <label for="description">
                                Email
                            </label>
                            <input class="form-control" id="description" value="{{ $user->email }}" name="email" type="text">
                         </div>
                         <div class="form-group">
                            <label for="usertype">
                                User Type
                            </label>
                            <input class="form-control" id="usertype" value="{{ $user->usertype }}" name="usertype" type="text">
                         </div>

                        </div>
                     </div>
                     <div class="card-footer d-flex justify-content-end">

                        <button name="editprof" type="submit" class="btn btn-primary text-uppercase">
                        Save
                        </button>
                     </div>
                  </form>
               </div>
            </div>

         </div>
         {{-- <div class="row mt-5">

            <div class="col-md-4">

               <div class="px-4 px-sm-0">
                  <h3 class="h5">Change password</h3>
                  <p class="mt-1 text-muted">
                      change password for the specified user
                  </p>
               </div>
            </div>
            <div class="col-md-8">

               <div class="card shadow-sm">

                  <form action="{{ route('users.update',[$user->id]) }}" method="POST">
                    @method('PUT')
                    @csrf
                     <div class="card-body">
                        <div class="w-md-75">

                         <div class="form-group">
                            <label for="password">
                                Password
                            </label>
                            <input class="form-control" id="password" value="" name="password" type="text">
                         </div>
                        </div>
                     </div>
                     <div class="card-footer d-flex justify-content-end">

                        <button name="changepw" type="submit" class="btn btn-primary text-uppercase">
                        Save
                        </button>
                     </div>
                  </form>
               </div>
            </div> --}}



    </x-app-layout>
