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
                        <h5 class="card-title">Users</h5>
                        <div class="row">
                            <div class="col-6">
                                <span class="bi bi-people fs-1"></span>
                            </div>
                            <div class="col-6">
                                <span class="fs-1">{{$user}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Orders</h5>
                        <div class="row">
                            <div class="col-6">
                                <span class="bi bi-cart-check fs-1"></span>
                            </div>
                            <div class="col-6">
                                <span class="fs-1">{{$order}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">User Addresses</h5>
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
        </div>


        @endsection

    @section('footer')
        <x-footer></x-footer>
    @endsection
</x-template>
