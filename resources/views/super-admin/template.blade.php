<x-template>
    @section('navbar')
        <x-navbar></x-navbar>
    @endsection

    @section('sidebar')
        <x-sidebar></x-sidebar>
    @endsection


    @section('pagetitle')
        <div class="pagetitle">
            <h1>List Of Trucks</h1>
        </div>
    @endsection

    @section('content')
        This is content
    @endsection

    @section('footer')
        <x-footer></x-footer>
    @endsection
</x-template>
