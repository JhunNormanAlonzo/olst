<div>
    <div class="row mb-4">
        <div class="col-4">
            <input type="text" class="form-control" placeholder="Search Trucks" wire:model.lazy="search">
        </div>
    </div>

    <table class="table table-sm">
        <thead>
        <tr>
            <th class="" style="font-size: 13px;">Name</th>
            <th class="" style="font-size: 13px;">Description</th>
            <th class="" style="font-size: 13px;">PlateNumber</th>
            <th class="" style="font-size: 13px;">Status</th>
            <th class="" style="font-size: 13px;">CreatedAt</th>
            <th class="" style="font-size: 13px;">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($trucks as $truck)
            <tr>
                <td class="" style="font-size: 13px;">{{ $truck->name }}</td>
                <td class="" style="font-size: 13px;">{{ $truck->description }}</td>
                <td class="text-center" style="font-size: 13px;">{{ $truck->plate_number }}</td>
                <td class="text-center" style="font-size: 13px;"><span class="badge @if($truck->status == 1)  bg-danger @else bg-success @endif">@if($truck->status == 1)  Not Available @else Available @endif</span></td><td class="text-center" style="font-size: 13px;">{{ $truck->created_at }}</td>
                <td class="" style="font-size: 13px;">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$truck->id}}">
                        <i class="bi bi-trash"></i>
                    </button>

                    <div class="modal fade" id="delete{{$truck->id}}" data-bs-backdrop="static" data-bs-keyboard="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="p-4">
                                    <h6>Are you sure to delete this ?</h6>
                                    <p class="text-muted">
                                        Please note the if you confirm to delete, this cannot be undone.
                                    </p>
                                    <form action="{{ route('truck.destroy', ['truck' => $truck->id]) }}" method="POST" class="d-flex justify-content-end">
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
            {{$trucks->links()}}
        </div>
    </div>
</div>
