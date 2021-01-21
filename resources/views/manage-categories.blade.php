<x-app-layout>
<div class="container" style="margin-top:200px;">
    <div class="row">

        <div class="col-md-4">

           <div class="px-4 px-sm-0">
              <h3 class="h5">Manage Categories</h3>
              <p class="mt-1 text-muted">
                  Add categories to manage your combos.
              </p>
           </div>
        </div>
        <div class="col-md-8">

           <div class="card shadow-sm">

              <form action="{{ route('categories.store') }}" method="POST">
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
                              Title
                          </label>
                          <input class="form-control" id="category" name="title" type="text">
                       </div>
                       <div class="form-group">
                        <label for="description">
                            Description
                        </label>
                        <input class="form-control" id="description" name="description" type="text">
                     </div>
                    </div>
                 </div>
                 <div class="card-footer d-flex justify-content-end">

                    <button type="submit" class="btn btn-primary text-uppercase">
                    Create
                    </button>
                 </div>
              </form>
           </div>
        </div>

     </div>
     <div class="row mt-5">

        <div class="col-md-4">

           <div class="px-4 px-sm-0">
              <h3 class="h5">Delete Categories</h3>
              <p class="mt-1 text-muted">
                  delete combos + categories foreever
              </p>
           </div>
        </div>
        <div class="col-md-8">

           <div class="card shadow-sm">

              <form action="{{ route('categories.delete') }}" method="POST">
                @if(Session::has('deleted'))
                <div class="alert alert-info mb-3">
                    {{ Session::get('deleted') }}
                </div>
               @endif
               @if(Session::has('deletefail'))
               <div class="alert alert-danger mb-3">
                   {{ Session::get('deletefail') }}
               </div>
              @endif
                @csrf
                 <div class="card-body">
                    <div class="w-md-75">
                       <div class="form-group">
                          <label for="category">
                              Category
                          </label>
                          <div class="input-group mb-3 mt-3">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect01">Name</label>
                            </div>
                            <select class="custom-select" name = "cats[]" id="inputGroupSelect01">
                              <option selected>Choose...</option>
                              @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                              @endforeach
                            </select>
                          </div>
                         </div>
                    </div>
                 </div>
                 <div class="card-footer d-flex justify-content-end">

                    <button type="submit" class="btn btn-primary text-uppercase">
                    Delete
                    </button>
                 </div>
              </form>
           </div>
        </div>

     </div>

</div>

</div>


</x-app-layout>
