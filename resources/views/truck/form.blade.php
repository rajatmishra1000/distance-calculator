<div>

    {{-- Name --}}
    <div class="form-group mb-3">
        <label for="name" class="form-label text-dark">
            Enter Truck Name <span class="text-danger">*</span>
        </label>
        <input type="text" name="name" id="name"
            class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name') ?? $truck->name }}">

        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- Capacity In KG --}}
    <div class="form-group mb-3">
        <label for="capacity_in_kg" class="form-label text-dark">
            Capacity In KG <span class="text-danger">*</span>
        </label>
        <input type="text" name="capacity_in_kg" id="capacity_in_kg"
            class="form-control @error('capacity_in_kg') is-invalid @enderror"
            value="{{ old('capacity_in_kg') ?? $truck->capacity_in_kg }}">

        @error('capacity_in_kg')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- Dimention --}}
    <div class="form-group mb-3">
        <label for="dimention" class="form-label text-dark">
            Enter Dimention
        </label>
        <input type="text" name="dimention" id="dimention"
            class="form-control @error('dimention') is-invalid @enderror"
            value="{{ old('dimention') ?? $truck->dimention }}">

        @error('dimention')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- Capacity In CBM --}}
    <div class="form-group mb-3">
        <label for="capacity_in_cbm" class="form-label text-dark">
            Enter Capacity In CBM <span class="text-danger">*</span>
        </label>
        <input type="text" name="capacity_in_cbm" id="capacity_in_cbm"
            class="form-control @error('capacity_in_cbm') is-invalid @enderror"
            value="{{ old('capacity_in_cbm') ?? $truck->capacity_in_cbm }}">

        @error('capacity_in_cbm')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    {{-- Image --}}
    {{-- <div class="form-group mb-3">
        <label for="image" class="form-label text-dark">
            Truck Image
        </label>
        <input type="file" name="image" id="image"
            class="form-control @error('image') is-invalid @enderror"
            value="{{ old('image') ?? $truck->image }}">

        @error('image')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div> --}}

    {{-- Price Per KG --}}
    <div class="form-group mb-3">
        <label for="price_per_kg" class="form-label text-dark">
            Price Per KG <span class="text-danger">*</span>
        </label>
        <input type="text" name="price_per_kg" id="price_per_kg"
            class="form-control @error('price_per_kg') is-invalid @enderror"
            value="{{ old('price_per_kg') ?? $truck->price_per_kg }}">

        @error('price_per_kg')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <button class="btn btn-dark text-white mt-1" type="submit">Submit</button>
</div>