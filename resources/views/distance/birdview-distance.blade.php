<x-main-layout>
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">

                <div class="card-header">
                    <h6 class="font-weight-bold">
                        Calculate Birdview Distance
                    </h6>
                </div>

                <div class="card-body">
                    <form action="{{ route('birdview-distance.store') }}" method="POST">
                        @csrf
    
                        <div class="form-group mb-3">
                            <label for="pickup_pincode" class="form-label text-dark">
                                Pickup Pincode <span class="text-danger">*</span>
                            </label>
    
                            <input type="text" name="pickup_pincode" id="pickup_pincode"
                                class="form-control @error('pickup_pincode') is-invalid @enderror"
                                value="{{ old('pickup_pincode') }}" autocomplete="off">
    
                            @error('pickup_pincode')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
    
                        <div class="form-group mb-3">
                            <label for="destination_pincode" class="form-label text-dark">
                                Destination Pincode <span class="text-danger">*</span>
                            </label>
    
                            <input type="text" name="destination_pincode" id="destination_pincode"
                                class="form-control @error('destination_pincode') is-invalid @enderror"
                                value="{{ old('destination_pincode') }}" autocomplete="off">
    
                            @error('destination_pincode')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
    
                        <button class="btn btn-dark text-white mt-1" type="submit">Calculate</button>
                    </form>
    
                    @if(session('distanceInKm'))
                        <div class="mt-2">
                            <h6 class="text-dark">Distance: {{ session('distanceInKm') }} Km</h6>
                        </div>
                    @endif
                </div>
                
            </div>
        </div>
    </div>
</x-main-layout>
