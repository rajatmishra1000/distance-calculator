<x-main-layout>
    <div class="row">
        <div class="col-md-5 mx-auto">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h6>Upload Truck Data</h6>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <a href="{{ route('trucks.index') }}">
                                <button class="btn btn-sm btn-primary float-right">Back</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('trucks.upload.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="file" class="form-label text-dark">
                                Enter CSV Upload File <span class="text-danger">*</span>
                            </label>
                            <input type="file" name="file" id="file"
                                class="form-control @error('file') is-invalid @enderror" required>
                    
                            @error('file')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button class="btn btn-dark text-white mt-1" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
