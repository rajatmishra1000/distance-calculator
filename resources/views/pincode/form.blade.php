<div>

    {{-- Circle --}}
    <div class="form-group mb-3">
        <label for="circle" class="form-label text-dark">
            Enter Circle <span class="text-danger">*</span>
        </label>
        <input type="text" name="circle" id="circle"
            class="form-control @error('circle') is-invalid @enderror"
            value="{{ old('circle') ?? $pincode->circle }}">

        @error('circle')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- Region --}}
    <div class="form-group mb-3">
        <label for="region" class="form-label text-dark">
            Enter Region <span class="text-danger">*</span>
        </label>
        <input type="text" name="region" id="region"
            class="form-control @error('region') is-invalid @enderror"
            value="{{ old('region') ?? $pincode->region }}">

        @error('region')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- Division --}}
    <div class="form-group mb-3">
        <label for="division" class="form-label text-dark">
            Enter Division <span class="text-danger">*</span>
        </label>
        <input type="text" name="division" id="division"
            class="form-control @error('division') is-invalid @enderror"
            value="{{ old('division') ?? $pincode->division }}">

        @error('division')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- Office --}}
    <div class="form-group mb-3">
        <label for="office" class="form-label text-dark">
            Enter Office <span class="text-danger">*</span>
        </label>
        <input type="text" name="office" id="office"
            class="form-control @error('office') is-invalid @enderror"
            value="{{ old('office') ?? $pincode->office }}">

        @error('office')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- Pincode --}}
    <div class="form-group mb-3">
        <label for="pincode" class="form-label text-dark">
            Enter Pincode <span class="text-danger">*</span>
        </label>
        <input type="text" name="pincode" id="pincode"
            class="form-control @error('pincode') is-invalid @enderror"
            value="{{ old('pincode') ?? $pincode->pincode }}">

        @error('pincode')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- State --}}
    <div class="form-group mb-3">
        <label for="state" class="form-label text-dark">
            Enter state <span class="text-danger">*</span>
        </label>
        <input type="text" name="state" id="state"
            class="form-control @error('state') is-invalid @enderror"
            value="{{ old('state') ?? $pincode->state }}">

        @error('state')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- District --}}
    <div class="form-group mb-3">
        <label for="district" class="form-label text-dark">
            Enter District <span class="text-danger">*</span>
        </label>
        <input type="text" name="district" id="district"
            class="form-control @error('district') is-invalid @enderror"
            value="{{ old('district') ?? $pincode->district }}">

        @error('district')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- Latitude --}}
    <div class="form-group mb-3">
        <label for="latitude" class="form-label text-dark">
            Enter Latitude <span class="text-danger">*</span>
        </label>
        <input type="text" name="latitude" id="latitude"
            class="form-control @error('latitude') is-invalid @enderror"
            value="{{ old('latitude') ?? $pincode->latitude }}">

        @error('latitude')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- Longitude --}}
    <div class="form-group mb-3">
        <label for="longitude" class="form-label text-dark">
            Enter Longitude <span class="text-danger">*</span>
        </label>
        <input type="text" name="longitude" id="longitude"
            class="form-control @error('longitude') is-invalid @enderror"
            value="{{ old('longitude') ?? $pincode->longitude }}">

        @error('longitude')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <button class="btn btn-dark text-white mt-1" type="submit">Submit</button>
</div>