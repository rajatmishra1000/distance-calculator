<x-main-layout>
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h6>Insert New Postal Code</h6>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <a href="{{ route('pincodes.index') }}">
                                <button class="btn btn-sm btn-primary float-right">Back</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('pincodes.store') }}" method="POST">
                        @csrf
                        @include('pincode.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>