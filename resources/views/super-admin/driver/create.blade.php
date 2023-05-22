
<x-customlayout>
    @section('navbar')
        <x-navbar></x-navbar>
    @endsection

    @section('sidebar')
        <x-sidebar></x-sidebar>
    @endsection

    @section('pagetitle')
        <div class="pagetitle">
            <h1>Add Driver</h1>
        </div>
    @endsection


    @section('content')
        <div class="container">

            <div class="card">
                <div class="card-body py-3">
                    <form action="{{route('driver.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" value="{{old('firstname')}}" placeholder="Firstname" name="firstname">
                                    <label for="firstname" class="text-muted">Firstname</label>
                                    @error('firstname')
                                        <small class="invalid-feedback">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" value="{{old('lastname')}}" placeholder="Lastname" name="lastname">
                                    <label for="lastname" class="text-muted">Lastname</label>
                                    @error('lastname')
                                        <small class="invalid-feedback">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 mb-3">
                                <div class="form-floating">
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" value="{{old('address')}}" placeholder="Address" name="address">
                                    <label for="address" class="text-muted">Address</label>
                                    @error('address')
                                        <small class="invalid-feedback">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-8 mb-3">
                                <div class="form-floating">
                                    <input id="contact_number" type="number" class="form-control @error('contact_number') is-invalid @enderror" value="{{old('contact_number')}}" placeholder="Contact Number" name="contact_number">
                                    <label for="contact_number" class="text-muted">Contact Number</label>
                                    @error('contact_number')
                                        <small class="invalid-feedback">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-8 mb-3">
                                <div class="form-floating">
                                    <select name="gender" class="form-select @error('gender') is-invalid @enderror" id="gender">
                                        <option disabled selected>Choose ...</option>
                                        <option @if(old('gender')) selected @endif value="M">Male</option>
                                        <option @if(old('gender')) selected @endif value="F">Female</option>
                                    </select>
                                    <label for="gender" class="text-muted">Gender</label>
                                    @error('gender')
                                        <small class="invalid-feedback">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="Email Address" name="email">
                                    <label for="email" class="text-muted">Email Address</label>
                                    @error('email')
                                        <small class="invalid-feedback">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4 mb-3">
                                <div class="form-floating">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" placeholder="Password" name="password">
                                    <label for="password" class="text-muted">Password</label>
                                    @error('password')
                                        <small class="invalid-feedback">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success">Save</button>
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

</x-customlayout>



