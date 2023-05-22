<x-template>
    @section('navbar')
        <x-navbar></x-navbar>
    @endsection

    @section('sidebar')
        <x-sidebar></x-sidebar>
    @endsection


    @section('pagetitle')
        <div class="pagetitle">
            <h1>Create User</h1>
        </div>
    @endsection

    @section('content')
        <div class="card">
            <div class="card-body p-3">
                <form method="POST" action="{{ route('user.store') }}">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required placeholder="Firstname" >
                                <label for="firstname" class="text-muted">{{ __('Firstname') }}</label>
                                @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-floating">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required placeholder="Lastname" >
                                <label for="lastname" class="text-muted">{{ __('Lastname') }}</label>
                                @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ old('email') }}" required >
                                <label for="email" class="text-muted">{{ __('Email Address') }}</label>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Address" name="address" value="{{ old('address') }}" required >
                                <label for="address" class="text-muted">{{ __('Address') }}</label>

                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <input id="contact_number" type="text" class="form-control @error('contact_number') is-invalid @enderror" placeholder="Contact Number" name="contact_number" value="{{ old('contact_number') }}" required >
                                <label for="contact_number" class="text-muted">{{ __("Contact Number") }}</label>

                                @error('contact_number')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-floating">
                                <select name="gender" class="form-control @error('gender') is-invalid @enderror" id="gender">
                                    <option selected disabled>Choose...</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                                <label for="gender" class="text-muted">{{ __('Gender') }}</label>

                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" value="{{ old('password') }}" required >
                                <label for="password" class="text-muted">{{ __('Password') }}</label>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="col-6">
                            <div class="form-floating">
                                <select name="role" class="form-control @error('role') is-invalid @enderror" id="role">
                                    <option selected disabled>Choose...</option>
                                    @foreach($roles as $role)
                                        <option value="{{$role->name}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                                <label for="role" class="text-muted">{{ __('Role') }}</label>

                                @error('role')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-12 d-grid">
                            <button type="submit" class="btn btn-success">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection

    @section('footer')
        <x-footer></x-footer>
    @endsection
</x-template>
