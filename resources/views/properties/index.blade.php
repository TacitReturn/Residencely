@extends("layouts.app")
@section("content")
    @foreach($properties as $property)

        <div class="card my-2">
            <div class="card-header text-center">
                <h5 class="card-title">{{ $property->title }}</h5>
            </div>
            <div class="card-body">
                <a href="{{ route('properties.show', $property->id) }}"
                   class="btn btn-sm btn-success float-end my-auto">View Property</a>
                <h5 class="card-title">Residence Type: {{ $property->residence_type }}</h5>
                <hr/>
            </div>
            <div class="d-flex mb-2">
                <div class="">
                    <small class="mx-2">Price:</small><span class="badge text-bg-primary">${{ number_format($property->price_per_sqft * $property->sqft, 2) }}
                    </span>
                </div>
                <div class="">
                    <small class="mx-2">SQFT:</small><span
                            class="badge text-bg-primary">{{ $property->sqft }}</span>
                </div>
                <div class="">
                    <small class="mx-2">Price SQFT:</small>
                    <span class="badge text-bg-primary">{{ $property->price_per_sqft }}</span>
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
