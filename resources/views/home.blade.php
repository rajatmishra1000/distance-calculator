<x-main-layout>
    <div class="row">
        <div class="col-md-4">
            <div class="card p-4 shadow">
                <h6>Pincode Data</h6>
                <i>Create, read, update and delete pincodes to calculate distance</i>
                <a href="{{ route('pincodes.index') }}" class="btn btn-sm btn-primary mt-3">
                    View
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 shadow">
                <h6>Birdview Distance</h6>
                <i>Calculate birdview distance using latitude and longitude</i>
                <a href="{{ route('birdview-distance.create') }}" class="btn btn-sm btn-primary mt-3">
                    View
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 shadow">
                <h6>Driving Distance</h6>
                <i>Using Bing API, calculate driving distance between two pin codes.</i>
                <a href="{{ route('driving-distance.create') }}" class="btn btn-sm btn-primary mt-3">
                    View
                </a>
            </div>
        </div>
    </div>
</x-main-layout>