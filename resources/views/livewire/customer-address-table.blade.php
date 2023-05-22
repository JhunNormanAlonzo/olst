<div>
    <div class="row mb-4">
        <div class="col-4">
            <a href="{{route('address.create')}}" class="btn  btn-success" >Create Address</a>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" placeholder="Search Address" wire:model.lazy="search">
        </div>

    </div>

    <table class="table table-sm">
        <thead>
        <tr>
            <th class="" style="font-size: 13px;">Name</th>
            <th class="" style="font-size: 13px;">Status</th>
            <th class="" style="font-size: 13px;">Activate</th>
            <th class="" style="font-size: 13px;">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($addresses as $address)
            <tr>
                <td class="" style="font-size: 13px;">{{ $address->address }}</td>
                <td class=""  style="font-size: 13px;">
                    @if(auth()->user()->userDetail->activeAddress->id == $address->id)
                        <span class="text-success">Activated</span>
                    @else
                        <span class="text-danger">Not Activated</span>
                    @endif
                </td>
                <td>
                    <form action="{{route('address.activate', [$address->id])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-sm btn-success
                            @if(auth()->user()->userDetail->activeAddress->id == $address->id) disabled @endif"

                           title="activate"
                        >
                            <i class="bi bi-activity"></i>
                        </button>
                    </form>

                </td>
                <td class="" style="font-size: 13px;">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$address->id}}">
                        <i class="bi bi-trash"></i>
                    </button>

                    <div class="modal fade" id="delete{{$address->id}}" data-bs-backdrop="static" data-bs-keyboard="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="p-4">
                                    <h6>Are you sure to delete this ?</h6>
                                    <p class="text-muted">
                                        Please note the if you confirm to delete, this cannot be undone.
                                    </p>
                                    <form action="{{ route('address.destroy',  [$address->id])}}" method="POST" class="d-flex justify-content-end">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-sm text-primary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-sm text-primary">
                                            Confirm
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>


                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-12 d-flex justify-content-start">
            {{$addresses->links()}}
        </div>
    </div>
</div>
