<x-main-layout>
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h6>Instant Fare Calculate</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('calculate-price.create') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="pickup_pincode" class="form-label text-dark">Pickup Pincode</label>
                            <input type="text" name="pickup_pincode" id="pickup_pincode"
                                class="form-control @error('pickup_pincode') is-invalid @enderror"
                                value="{{ old('pickup_pincode') }}">
    
                            @error('pickup_pincode')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="pickup_region" class="form-label text-dark">Select Pickup Region</label>
                            <input type="text" name="pickup_region" id="pickup_region"
                                class="form-control @error('pickup_region') is-invalid @enderror"
                                value="{{ old('pickup_region') }}">
    
                            @error('pickup_region')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
    
                        <div class="form-group mb-3">
                            <label for="destination_pincode" class="form-label text-dark">Destination Pincode</label>
                            <input type="text" name="destination_pincode" id="destination_pincode"
                                class="form-control @error('destination_pincode') is-invalid @enderror"
                                value="{{ old('destination_pincode') }}">
    
                            @error('destination_pincode')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="destination_region" class="form-label text-dark">Select Destination Region</label>
                            <input type="text" name="destination_region" id="destination_region"
                                class="form-control @error('destination_region') is-invalid @enderror"
                                value="{{ old('destination_region') }}">
    
                            @error('destination_region')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="weight" class="form-label text-dark">Enter Weight</label>
                            <input type="text" name="weight" id="weight"
                                class="form-control @error('weight') is-invalid @enderror"
                                value="{{ old('weight') }}">
    
                            @error('weight')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="cbm" class="form-label text-dark">Enter CBM</label>
                            <input type="text" name="cbm" id="cbm"
                                class="form-control @error('cbm') is-invalid @enderror"
                                value="{{ old('cbm') }}">
    
                            @error('cbm')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
    
                        <button class="btn btn-dark text-white mt-1" type="submit">Calculate</button>
                    </form>
    
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
