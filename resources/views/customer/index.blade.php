<x-template>
    @section('navbar')
        <x-navbar></x-navbar>
    @endsection

    @section('sidebar')
        <x-sidebar></x-sidebar>
    @endsection


    @section('pagetitle')
        <div class="pagetitle">
            <h1>Dashboard</h1>

        </div>
    @endsection

    @section('content')

        <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                  <div class="card">
                      <div class="card-body text-center">
                          <h5 class="card-title">Active Orders</h5>
                          <div class="row">
                              <div class="col-6">
                                  <span class="bi bi-cart-check-fill text-success fs-1"></span>
                              </div>
                              <div class="col-6">
                                  <span class="fs-1">{{$active_order}}</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                  <div class="card">
                      <div class="card-body text-center">
                          <h5 class="card-title">Pending Orders</h5>
                          <div class="row">
                              <div class="col-6">
                                  <span class="bi bi-cart-dash-fill text-danger fs-1"></span>
                              </div>
                              <div class="col-6">
                                  <span class="fs-1">{{$pending}}</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                  <div class="card">
                      <div class="card-body text-center">
                          <h5 class="card-title">My Addresses</h5>
                          <div class="row">
                              <div class="col-6">
                                  <span class="bi bi-globe2 fs-1"></span>
                              </div>
                              <div class="col-6">
                                  <span class="fs-1">{{$address}}</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>


              <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                  <div class="card">
                      <div class="card-body text-center">
                          <h5 class="card-title">Order History</h5>
                          <div class="row">
                              <div class="col-6">
                                  <span class="bi bi-collection fs-1"></span>
                              </div>
                              <div class="col-6">
                                  <span class="fs-1">{{$order_history}}</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

        </div>


    @endsection

    @section('footer')
        <x-footer></x-footer>
    @endsection

</x-template>
