<div>
    <div class="row mb-4">
        <div class="col-4">
            <input type="text" class="form-control" placeholder="Search Pendings" wire:model.lazy="search">
        </div>

    </div>

    <table class="table table-sm">
        <thead>
        <tr>
            <th class="" style="font-size: 13px;">QRCODE</th>
            <th class="" style="font-size: 13px;">Address</th>
            <th class="" style="font-size: 13px;">Quantity</th>
            <th class="" style="font-size: 13px;">CreatedAt</th>
            <th class="" style="font-size: 13px;">Remarks</th>
            <th class="" style="font-size: 13px;">Comment</th>
            <th class="" style="font-size: 13px;">Cancel</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pendings as $pending)
            <tr>
                <td class="" style="font-size: 13px;">
                    <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#qrcode{{$pending->qrcode_link}}">
                        <i class="bi bi-qr-code"></i>
                    </button></td>

                    <div class="modal fade" id="qrcode{{$pending->qrcode_link}}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="card">
                                    <div class="card-body p-3 ">
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-center">
                                                {!! QrCode::size(300)->generate($url."/olst/public/track-order/qrcode/".$pending->qrcode_link) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <td class="" style="font-size: 13px;">{{ $pending->status }}</td>
                <td class="" style="font-size: 13px;">{{ $pending->status }}</td>
                <td class="" style="font-size: 13px;">{{ $pending->status }}</td>
                <td class="" style="font-size: 13px;">{{ $pending->status }}</td>
                <td class="" style="font-size: 13px;">{{ $pending->status }}</td>
                <td class="" style="font-size: 13px;">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$pending->id}}">
                        <i class="bi bi-trash"></i>
                    </button>

                    <div class="modal fade" id="delete{{$pending->id}}" data-bs-backdrop="static" data-bs-keyboard="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="p-4">
                                    <h6>Are you sure to delete this ?</h6>
                                    <p class="text-muted">
                                        Please note the if you confirm to delete, this cannot be undone.
                                    </p>
                                    <form action="{{ route('address.destroy',  [$pending->id])}}" method="POST" class="d-flex justify-content-end">
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
            {{$pendings->links()}}
        </div>
    </div>
</div>
