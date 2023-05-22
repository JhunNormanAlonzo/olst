<x-template>
    @section('navbar')
        <x-navbar></x-navbar>
    @endsection

    @section('sidebar')
        <x-sidebar></x-sidebar>
    @endsection



    @section('pagetitle')
        <div class="pagetitle">
            <h1>List Of Address</h1>
        </div>
    @endsection


    @section('content')
        <div class="container">
            <div id="app">
                <div class="card">
                    <div class="card-body p-3 table-responsive">

                        <livewire:customer-address-table></livewire:customer-address-table>
                    </div>
                </div>
            </div>
        </div>




    @endsection


    @section('footer')
        <x-footer></x-footer>
    @endsection

    @section('script')
        <script type="module">
            $(document).ready(function() {

            });
        </script>
    @endsection

</x-template>
