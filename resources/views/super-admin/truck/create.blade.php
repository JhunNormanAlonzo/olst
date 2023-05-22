
<x-template>
    @section('navbar')
        <x-navbar></x-navbar>
    @endsection

    @section('sidebar')
        <x-sidebar></x-sidebar>
    @endsection

    @section('pagetitle')
        <div class="pagetitle">
            <h1>Add Truck</h1>
        </div>
    @endsection


    @section('content')
        <div class="container">

            <div class="card">
                <div class="card-body py-3">
                    <form action="{{route('truck.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6 mb-3">
                                <div class="form-floating">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Name" name="name">
                                    <label for="name" class="text-muted">Name</label>
                                    @error('name')
                                    <small class="invalid-feedback">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="form-floating">
                                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}" placeholder="Description" name="description">
                                    <label for="description" class="text-muted">Description</label>
                                    @error('description')
                                    <small class="invalid-feedback">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="form-floating">
                                    <input id="plate_number" type="text" class="form-control @error('plate_number') is-invalid @enderror" value="{{old('plate_number')}}" placeholder="Plate Number" name="plate_number">
                                    <label for="plate_number" class="text-muted">Plate  Number</label>
                                    @error('plate_number')
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

</x-template>



