
<x-customlayout>
    @section('navbar')
        <x-navbar></x-navbar>
    @endsection

    @section('sidebar')
        <x-sidebar></x-sidebar>
    @endsection

    @section('pagetitle')
        <div class="pagetitle">
            <h1>Add Driver</h1>
        </div>
    @endsection


    @section('content')
        <div class="container">

            <div id="app">
                <div class="card">
                    <div class="card-body p-3 table-responsive">
                        <user-list></user-list>
                    </div>
                </div>
            </div>


        </div>

    @endsection


    @section('footer')
        <x-footer></x-footer>
    @endsection

    @section('script')


    @endsection

</x-customlayout>



