<div>
    <div class="row mb-4">
        <div class="col-4">
            <input type="text" class="form-control" placeholder="Search Order History" wire:model.lazy="search">
        </div>

    </div>

    <table class="table table-sm">
        <thead>
        <tr>
            <th class="" style="font-size: 13px;">Name</th>
            <th class="" style="font-size: 13px;">Quantity</th>
            <th class="" style="font-size: 13px;">Address</th>
            <th class="" style="font-size: 13px;">Remarks</th>
            <th class="" style="font-size: 13px;">Status</th>
            <th class="" style="font-size: 13px;">Accept</th>
            <th class="" style="font-size: 13px;">Decline</th>
        </tr>
        </thead>
        <tbody>
        {{--        @foreach($orders as $order)--}}
        {{--            <tr>--}}
        {{--                <td class="" style="font-size: 13px;">{{ $user->name }}</td>--}}
        {{--                <td class="" style="font-size: 13px;">{{ $user->email }}</td>--}}
        {{--                <td class="" style="font-size: 13px;">{{ $user->userDetail->contact_number }}</td>--}}
        {{--                <td class="" style="font-size: 13px;">{{ $user->userDetail->gender }}</td>--}}
        {{--                <td class="" style="font-size: 13px;">--}}
        {{--                    @if ($user->userDetail && $user->userDetail->activeAddress)--}}
        {{--                        {{ $user->userDetail->activeAddress->address }}--}}
        {{--                    @else--}}
        {{--                        No active address found--}}
        {{--                    @endif--}}
        {{--                </td>--}}
        {{--                <td class="" style="font-size: 13px;">Edit</td>--}}
        {{--                <td class="" style="font-size: 13px;">--}}
        {{--                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$user->id}}">--}}
        {{--                        <i class="bi bi-trash"></i>--}}
        {{--                    </button>--}}

        {{--                    <div class="modal fade" id="delete{{$user->id}}" data-bs-backdrop="static" data-bs-keyboard="false">--}}
        {{--                        <div class="modal-dialog">--}}
        {{--                            <div class="modal-content">--}}
        {{--                                <div class="p-4">--}}
        {{--                                    <h6>Are you sure to delete this ?</h6>--}}
        {{--                                    <p class="text-muted">--}}
        {{--                                        Please note the if you confirm to delete, this cannot be undone.--}}
        {{--                                    </p>--}}
        {{--                                    <form action="{{ route('user.destroy', [$user->id] )}}" method="POST" class="d-flex justify-content-end">--}}
        {{--                                        @csrf--}}
        {{--                                        @method('DELETE')--}}
        {{--                                        <button type="button" class="btn btn-sm text-primary" data-bs-dismiss="modal">Cancel</button>--}}
        {{--                                        <button type="submit" class="btn btn-sm text-primary">--}}
        {{--                                            Confirm--}}
        {{--                                        </button>--}}
        {{--                                    </form>--}}
        {{--                                </div>--}}

        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}


        {{--                </td>--}}
        {{--            </tr>--}}
        {{--        @endforeach--}}
        </tbody>
    </table>
    <div class="row">
        <div class="col-12 d-flex justify-content-start">
            {{--            {{$orders->links()}}--}}
        </div>
    </div>
</div>
