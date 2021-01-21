<x-app-layout>
<div class="container" style="margin-top:200px;">

     <div class="row mt-5">

        <div class="col-md-4">

           <div class="px-4 px-sm-0">
              <h3 class="h5">Generate license keys</h3>
              <p class="mt-1 text-muted">
                  generate custom license keys
              </p>
           </div>
        </div>
        <div class="col-md-8">

           <div class="card shadow-sm">

              <form action="{{ route('license.store') }}" method="POST">
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
                            <label for="amount">Amount</label>
                            <input type="text" name="amount" id="amount" class="form-control">
                        </div>
                       <div class="form-group">
                          <label for="category">
                              Type
                          </label>
                          <div class="input-group mb-3 ">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect01">Type</label>
                            </div>
                            <select class="custom-select" name = "days[]" id="inputGroupSelect01">
                              <option selected>Choose...</option>
                                <option value="30">30 Days</option>
                                <option value="90">90 Days</option>
                                <option value="180">180 Days</option>
                                <option value="360">360 Days</option>
                                <option value="5325">Lifetime Days</option>
                            </select>
                          </div>
                         </div>
                    </div>
                 </div>
                 <div class="card-footer d-flex justify-content-end">

                    <button type="submit" class="btn btn-primary text-uppercase">
                    Generate
                    </button>
                 </div>
              </form>
           </div>
        </div>

     </div>

</div>

</div>


</x-app-layout>
