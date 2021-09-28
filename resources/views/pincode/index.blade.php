<x-main-layout>
    <div class="row mt-2">
        <div class="col-md-12">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-12">
            <div class="card shadow">
                <h2 class="text-center p-2 rounded">Postal Data</h2>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header p-3 bg-primary">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{ route('pincodes.index') }}" method="GET">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <input type="search" name="search" id="search" 
                                            class="form-control form-control-sm @error('search') is-invalid @enderror" 
                                            placeholder="Search by State, District and Pincode..">
                                    </div>
    
                                    <div class="col-sm">
                                        <button type="submit" class="btn btn-sm btn-dark">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-6 d-flex justify-content-around">
                            <a href="{{ route('pincodes.index') }}">
                                <button type="button" class="btn btn-sm text-warning btn-light">
                                    Reset Search
                                </button>
                            </a>
                            <form action="{{ route('pincodes.destroy.all') }}" method="POST">
                                @csrf
                                <button class="btn btn-sm btn-light text-danger" type="submit"
                                    onclick="return confirm('Are you sure you want to delete everything?')">
                                    Delete Entire List
                                </button>
                            </form>
                            <a href="{{ route('pincodes.create') }}">
                                <button type="button" class="btn btn-sm btn-light">Add Data</button>
                            </a>
                            <a href="{{ route('pincodes.upload') }}">
                                <button type="button" class="btn btn-sm btn-light text-success">Upload Data</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-4 rounded">
                    <div class="table-responsive mt-2">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Circle</th>
                                    <th>Region</th>
                                    <th>Office</th>
                                    <th>Pincode</th>
                                    <th>State</th>
                                    <th>District</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($postalCodes as $postalCode)
                                    <tr>
                                        <td>{{ $postalCode->id }}</td>
                                        <td>{{ $postalCode->circle }}</td>
                                        <td>{{ $postalCode->region }}</td>
                                        <td>{{ $postalCode->office }}</td>
                                        <td>{{ $postalCode->pincode }}</td>
                                        <td>{{ $postalCode->state }}</td>
                                        <td>{{ $postalCode->district }}</td>
                                        <td>{{ $postalCode->latitude }}</td>
                                        <td>{{ $postalCode->longitude }}</td>
                                        <td>
                                            <a href="{{ route('pincodes.edit', $postalCode->id) }}">
                                                <button type="button" class="btn btn-sm btn-success">Edit</button>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('pincodes.destroy', $postalCode->id) }}" method="POST" 
                                                onclick="return confirm('Are you sure you want to delete?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger" type="submit">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $postalCodes->appends(Request::all())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
