<x-template>
    @section('navbar')
        <x-navbar></x-navbar>
    @endsection

    @section('sidebar')
        <x-sidebar></x-sidebar>
    @endsection


    @section('pagetitle')
        <div class="pagetitle">
            <h1>List Of Users</h1>
        </div>
    @endsection

    @section('content')
        <div class="row">
            <div class="col-12">
                <div class="card ">
                    <div class="card-body p-3 table-responsive">
                        <livewire:user-table></livewire:user-table>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('footer')
        <x-footer></x-footer>
    @endsection
</x-template>