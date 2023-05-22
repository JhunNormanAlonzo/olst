
<x-template>
    @section('navbar')
        <x-navbar></x-navbar>
    @endsection

    @section('sidebar')
        <x-sidebar></x-sidebar>
    @endsection

    @section('pagetitle')
        <div class="pagetitle">
            <h1>Create Order</h1>
        </div>
    @endsection


    @section('content')
        <div class="container">

            <div class="card">
                <div class="card-body py-3">
                    <form action="{{route('order.store')}}" method="POST">
                        @csrf
                        <input hidden type="text" name="user_id" value="{{auth()->user()->id}}">
                        <input hidden type="text" name="user_detail_id" value="{{auth()->user()->userDetail->id}}">
                        <div class="row">
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <div class="form-floating">
                                            <select name="user_address_id" id="user_address_id" class="form-select">
                                                <option value="" disabled>Choose ...</option>
                                                @foreach(auth()->user()->userDetail->addresses as $my)

                                                    <option @if(auth()->user()->userDetail->activeAddress->id == $my->id) selected @endif value="{{$my->id}}" title="{{$my->address}}">{{substr($my->address, 0, 20)." ..."}}</option>
                                                @endforeach
                                            </select>
                                            <label for="user_address_id">Active Address</label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="form-floating">
                                            <input type="number" name="quantity" class="form-control" placeholder="Quantity">
                                            <label for="quantity" class="text-muted">Quantity</label>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <div class="form-floating">
                                            <input type="text" name="user_remarks" class="form-control" placeholder="Remarks">
                                            <label for="user_remarks" class="text-muted">Remarks</label>
                                        </div>
                                    </div>

                                    <div class="col-12 d-grid mb-3">
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </div>
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



