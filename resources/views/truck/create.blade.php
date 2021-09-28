<x-main-layout>
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h6>Insert New Truck Data</h6>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <a href="{{ route('trucks.index') }}">
                                <button class="btn btn-sm btn-primary float-right">Back</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('trucks.store') }}" method="POST">
                        @csrf
                        @include('truck.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>