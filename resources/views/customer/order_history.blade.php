<x-template>
    @section('navbar')
        <x-navbar></x-navbar>
    @endsection

    @section('sidebar')
        <x-sidebar></x-sidebar>
    @endsection


    @section('pagetitle')
        <div class="pagetitle">
            <h1>My Purchases</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Pending</li>
                    <li class="breadcrumb-item">To Receive</li>
                    <li class="breadcrumb-item active">Completed</li>
                    <li class="breadcrumb-item">Cancelled</li>
                </ol>
            </nav>
        </div>
    @endsection

    @section('content')
        <div class="row">
            <div class="col-12 my-1">
                <div class="card m-3 shadow-lg">
                    <div class="card-body p-3">
                        @php
                            $quantity = 8;
                            $price_per_mix = 4560;
                        @endphp
                        <div class="row mt-4">
                            <div class="col-12 mb-3 col-lg-4 justify-content-center">
                                <small class="border border-danger text-danger fw-semibold rounded py-1 px-2" style="font-size: 10px;">Pre-order</small>
                            </div>
                            <div class="col-12 mb-1 col-lg-8 justify-content-center">
                                <h5 class="">  Ready Mix Contcrete  <sup class="text-danger ">x{{$quantity}}</sup></h5>
                            </div>
                            <div class="col-12 mb-2 col-lg-8 offset-lg-4 justify-content-center text-success">
                                Total : <span>&#8369;</span> {{number_format($price_per_mix)}}
                                <br>
                                Order Total : <span>&#8369;</span>   {{number_format($price_per_mix * $quantity)}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12 my-1">
                <div class="card m-3 shadow-lg">
                    <div class="card-body p-3">
                        @php
                            $quantity = 2;
                            $price_per_mix = 4560;
                        @endphp
                        <div class="row mt-4">
                            <div class="col-12 mb-3 col-lg-4 justify-content-center">
                                <small class="border border-danger text-danger fw-semibold rounded py-1 px-2" style="font-size: 10px;">Pre-order</small>
                            </div>
                            <div class="col-12 mb-1 col-lg-8 justify-content-center">
                                <h5 class="">  Ready Mix Contcrete  <sup class="text-danger ">x{{$quantity}}</sup></h5>
                            </div>
                            <div class="col-12 mb-2 col-lg-8 offset-lg-4 justify-content-center text-success">
                                Total : <span>&#8369;</span> {{number_format($price_per_mix)}}
                                <br>
                                Order Total : <span>&#8369;</span>   {{number_format($price_per_mix * $quantity)}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-12 my-1">
                <div class="card m-3 shadow-lg">
                    <div class="card-body p-3">
                        @php
                            $quantity = 5;
                            $price_per_mix = 4560;
                        @endphp
                        <div class="row mt-4">
                            <div class="col-12 mb-3 col-lg-4 justify-content-center">
                                <small class="border border-danger text-danger fw-semibold rounded py-1 px-2" style="font-size: 10px;">Pre-order</small>
                            </div>
                            <div class="col-12 mb-1 col-lg-8 justify-content-center">
                                <h5 class="">  Ready Mix Contcrete  <sup class="text-danger fw-semibold">x{{$quantity}}</sup></h5>
                            </div>
                            <div class="col-12 mb-2 col-lg-8 offset-lg-4 justify-content-center text-success">
                                Total : <span>&#8369;</span> {{number_format($price_per_mix)}}
                                <br>
                                Order Total : <span>&#8369;</span>   {{number_format($price_per_mix * $quantity)}}
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12 my-1">
                <div class="card m-3 shadow-lg">
                    <div class="card-body p-3">
                        @php
                            $quantity = 8;
                            $price_per_mix = 4560;
                        @endphp
                        <div class="row mt-4">
                            <div class="col-12 mb-3 col-lg-4 justify-content-center">
                                <small class="border border-danger text-danger fw-semibold rounded py-1 px-2" style="font-size: 10px;">Pre-order</small>
                            </div>
                            <div class="col-12 mb-1 col-lg-8 justify-content-center">
                                <h5 class="">  Ready Mix Contcrete  <sup class="text-danger ">x{{$quantity}}</sup></h5>
                            </div>
                            <div class="col-12 mb-2 col-lg-8 offset-lg-4 justify-content-center text-success">
                                Total : <span>&#8369;</span> {{number_format($price_per_mix)}}
                                <br>
                                Order Total : <span>&#8369;</span>   {{number_format($price_per_mix * $quantity)}}
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
