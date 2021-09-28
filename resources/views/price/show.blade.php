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

    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card shadow shadow-lg p-4">
                Total Fare: {{ $totalFare }}
            </div>
        </div>
    </div>
</x-main-layout>
