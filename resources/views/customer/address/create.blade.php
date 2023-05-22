
<x-template>
    @section('navbar')
        <x-navbar></x-navbar>
    @endsection

    @section('sidebar')
        <x-sidebar></x-sidebar>
    @endsection

    @section('pagetitle')
        <div class="pagetitle">
            <h1>Create Address</h1>
        </div>
    @endsection


    @section('content')
        <div class="container">

            <div class="card">
                <div class="card-body py-3">
                    <form action="{{route('address.store')}}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-8 my-2">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="address" id="address" autocomplete="off" placeholder="Complete Address">
                                    <label for="address" class="text-muted">Complete Address</label>
                                </div>
                            </div>
                            <div class="col-8 my-2 d-grid">
                                <button class="btn btn-success">Save</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>


        </div>

    @endsection


    @section('footer')
        <x-footer></x-footer>
    @endsection

    @section('script')


    @endsection

</x-template>



