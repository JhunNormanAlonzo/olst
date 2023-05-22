<x-customlayout>
    @section('navbar')
        <x-navbar></x-navbar>
    @endsection

    @section('sidebar')
        <x-sidebar></x-sidebar>
    @endsection

    @section('pagetitle')
        <div class="pagetitle">
            <h1>Title</h1>
        </div>
    @endsection


    @section('content')
        <div class="container">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body text-center">
                    {!! QrCode::size(300)->generate($url."/olst/public/test?tag=start") !!}
                </div>
            </div>



            <form action="" method="post">
                @csrf
                <div class="row">
                    <div class="col-12">

                    </div>
                </div>
            </form>
        </div>

    @endsection


    @section('footer')
        <x-footer></x-footer>
    @endsection

    @section('script')


    @endsection

</x-customlayout>
