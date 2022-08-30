@extends("layouts.app")
@section("content")
    @foreach($properties as $property)

        <div class="card my-5">
            <div class="card-header text-center">
                <h5 class="card-title">{{ $property->title }}</h5>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title">Residence Type: 0</h5>
                    <a href="{{ route('properties.show', $property->id) }}"
                       class="btn btn-sm btn-success my-auto">View Property</a>
                </div>
                <hr/>
            </div>
            <div class="d-flex mb-2">
                <div class="">
                    <small class="mx-2">Price:</small><span class="badge badge-primary">${{ number_format($property->price_per_sqft * $property->sqft, 2) }}
                    </span>
                </div>
                <div class="">
                    <small class="mx-2">SQFT:</small><span
                            class="badge badge-primary">{{ $property->sqft }}</span>
                </div>
                <div class="">
                    <small class="mx-2">Price SQFT:</small>
                    <span class="badge badge-primary">${{ number_format($property->price_per_sqft, 2) }}</span>
                </div>
            </div>
            <div class="p-2">
                <p class="card-text text-break">
                    {{ \Illuminate\Support\Str::limit($property->description, 100, "...")}}
                </p>
            </div>
        </div>
    @endforeach
@endsection
