<x-template>
    @section('navbar')
        <x-navbar></x-navbar>
    @endsection

    @section('sidebar')
        <x-sidebar></x-sidebar>
    @endsection


    @section('pagetitle')
        <div class="pagetitle">
            <h1>Make Order</h1>
        </div>
    @endsection

    @section('content')
        <div class="row">
            <div class="col-4 mb-3">
                <div class="form-floating">
                    <input id="name" type="text" class="form-control" list="users_list" placeholder="Select User">
                    <label for="name" class="text-muted">Select User</label>
                    <datalist id="users_list">
                        @foreach($users as $user)
                            <option>{{$user->name}}</option>
                        @endforeach
                    </datalist>
                </div>
            </div>

            <div class="col-4 mb-3">
                <div class="form-floating">
                    <input id="quantity" type="number" class="form-control" placeholder="Quantity">
                    <label for="quantity" class="text-muted">Quantity</label>
                </div>
            </div>

            <div class="col-8 mb-3">
                <div class="form-floating">
                    <input id="user_remarks" type="text" class="form-control" placeholder="Remarks">
                    <label for="user_remarks" class="text-muted">Remarks</label>
                </div>
            </div>
        </div>
    @endsection

    @section('footer')
        <x-footer></x-footer>
    @endsection
</x-template>
