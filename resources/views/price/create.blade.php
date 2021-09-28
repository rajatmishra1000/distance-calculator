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
        @foreach ($trucks as $truck)
            <div class="col-md-4">

                <div class="card shadow shadow-lg p-4 rounded">
                    <h4 class="font-weight-bold mt-4">{{ $truck->name }}</h4>
                    <span>Maximum Capacity: {{ $truck->capacity_in_kg }} Kg</span>
                    <span>Maximum Volume: {{ $truck->capacity_in_cbm }} Cbm</span>
                    <span>Price Per Kg: Rs. {{ $truck->price_per_kg }}</span>
                    <span>Dimention: {{ $truck->dimention }}</span>

                    <form action="{{ route('calculate-price.store', $truck->id) }}" method="post">
                        @csrf

                        <input type="text" name="truck_id" id="truck_id" value="{{ $truck->id }}"
                            style="display: none;">

                        <input type="text" name="pickup_pincode" id="pickup_pincode"
                            value="{{ $data['pickup_pincode'] }}" style="display: none;">

                        <input type="text" name="pickup_region" id="pickup_region"
                            value="{{ $data['pickup_region'] }}" style="display: none;">

                        <input type="text" name="destination_pincode" id="destination_pincode"
                            value="{{ $data['destination_pincode'] }}" style="display: none;">

                        <input type="text" name="destination_region" id="destination_region"
                            value="{{ $data['destination_region'] }}" style="display: none;">

                        <input type="text" name="weight" id="weight" value="{{ $data['weight'] }}"
                            style="display: none;">

                        <input type="text" name="cbm" id="cbm" value="{{ $data['cbm'] }}"
                            style="display: none;">

                        <button type="submit" class="btn btn-dark mt-2">Choose Truck</button>
                    </form>
                </div>

            </div>
        @endforeach
    </div>
</x-main-layout>
