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
                <h2 class="text-center p-2 rounded">Truck Data</h2>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header p-3 bg-primary">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{ route('trucks.index') }}" method="GET">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <input type="search" name="search" id="search" 
                                            class="form-control form-control-sm @error('search') is-invalid @enderror" 
                                            placeholder="Search by Name, Capacity in Kg and Capacity in CBM..">
                                    </div>
    
                                    <div class="col-sm">
                                        <button type="submit" class="btn btn-sm btn-dark">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-6 d-flex justify-content-around">
                            <a href="{{ route('trucks.index') }}">
                                <button type="button" class="btn btn-sm text-warning btn-light">
                                    Reset Search
                                </button>
                            </a>
                            <form action="{{ route('trucks.destroy.all') }}" method="POST">
                                @csrf
                                <button class="btn btn-sm btn-light text-danger" type="submit"
                                    onclick="return confirm('Are you sure you want to delete everything?')">
                                    Delete Entire List
                                </button>
                            </form>
                            <a href="{{ route('trucks.create') }}">
                                <button type="button" class="btn btn-sm btn-light">Add Data</button>
                            </a>
                            <a href="{{ route('trucks.upload') }}">
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
                                    <th>Name</th>
                                    <th>Capacity in Kg</th>
                                    <th>Dimention</th>
                                    <th>Capacity in Cbm</th>
                                    <th>Price Per kg</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trucks as $truck)
                                    <tr>
                                        <td>{{ $truck->id }}</td>
                                        <td>{{ $truck->name }}</td>
                                        <td>{{ $truck->capacity_in_kg }}</td>
                                        <td>{{ $truck->dimention }}</td>
                                        <td>{{ $truck->capacity_in_cbm }}</td>
                                        <td>{{ $truck->price_per_kg }}</td>
                                        <td>
                                            @isset($truck->status)
                                                @if($truck->status === 0)
                                                    <span class="text-success">Active</span>
                                                @else 
                                                    <span class="text-danger">Deactive</span>
                                                @endif
                                            @endisset
                                        </td>
                                        <td>
                                            <a href="{{ route('trucks.edit', $truck->id) }}">
                                                <button type="button" class="btn btn-sm btn-success">Edit</button>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('trucks.destroy', $truck->id) }}" method="POST" 
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
                        {{ $trucks->appends(Request::all())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
