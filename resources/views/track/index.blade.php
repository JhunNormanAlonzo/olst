@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header bg-success text-white fw-semibold" style="letter-spacing: 0.1rem">{{ __('Track Order') }}</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <input type="text" id="name" class="form-control" value="{{$order->user->name}}" readonly placeholder="Name">
                                    <label for="name">Name</label>
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <input type="text" id="email" class="form-control" value="{{$order->user->email}}" readonly placeholder="Email">
                                    <label for="email">Email</label>
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <input type="text" id="contact_number" class="form-control" value="{{$order->user->userDetail->contact_number}}" readonly placeholder="Contact Number">
                                    <label for="contact_number">Contact Number</label>
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <input type="text" id="contact_number" class="form-control" value="{{$order->user->userDetail->contact_number}}" readonly placeholder="Contact Number">
                                    <label for="contact_number">Contact Number</label>
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <ul class="list-group">
                                    <li class="list-group-item">Order On The Way</li>
                                    <li class="list-group-item">Order is on Novaliches Quezon City</li>
                                    <li class="list-group-item">Order in now on Bulacan</li>
                                    <li class="list-group-item">Order is entering your registered Location</li>
                                    <li class="list-group-item">Order is departed to your Location</li>
                                    <li class="list-group-item">Please wait for call.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
