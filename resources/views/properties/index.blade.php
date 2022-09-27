@extends("layouts.app")
@section("content")
    <a href="{{ route('properties.create') }}" class="btn btn-success">Create Property</a>
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
            <div class="d-flex mb-2">
                <div class="">
                    <small class="mx-2">HVAC:</small><span class="badge badge-primary">
                        {{ $property->HVAC }}
                    </span>
                </div>
                <div class="">
                    <small class="mx-2">Parking:</small><span class="badge badge-primary">
                        {{ $property->parking }}
                    </span>
                </div>
                <div class="">
                    <small class="mx-2">Tenant Contract:</small><span class="badge badge-primary">
                        {{ $property->tenant_contract }}
                    </span>
                </div>
            </div>
            <div class="d-flex mb-2">
                <div class="">
                    <small class="mx-2">Address:</small><span class="badge badge-primary">
                        {{ $property->address }}
                    </span>
                </div>
                <div class="">
                    <small class="mx-2">Year Built:</small><span class="badge badge-primary">
                        {{ $property->year_built }}
                    </span>
                </div>
            </div>
            <div class="d-flex mb-2 mt-2">
                <div class="">
                    <p class="mx-2">Description: <br/>
                        {{ \Illuminate\Support\Str::limit($property->description, 100, "...")}}
                    </p>
                </div>
            </div>
            <div class="d-flex mb-2">
                <div class="">
                    <small class="mx-2">Notes:</small><span class="badge badge-primary">
                        {{ $property->notes }}
                    </span>
                </div>
            </div>
            <div class="d-flex mb-2">
                <div class="">
                    <small class="mx-2">Manager:</small><span class="badge badge-primary">
                        {{ $property->propertyManager->first_name }} {{ $property->propertyManager->last_name }}
                    </span>
                </div>
            </div>
        </div>
    @endforeach
@endsection
