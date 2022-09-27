@extends("layouts.app")
@section("content")
    <!--Main layout-->
    <main class="pt-0">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">

            <!--Grid column-->
            <div class="col-md-9">

                <!--Section: Register Form-->
                <section class="mt-4 mb-5 register-form">

                    <form action="{{ route('properties.store') }}" method="POST" class="needs-validation" novalidate
                          autocomplete="off">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <div class="md-form md-outline mt-0">
                                    <input type="text" name="title" id="title"
                                           class="form-control">
                                    <label for="sqft">Title</label>
                                    @error('title')
                                    <small id="titleErrorMessage"
                                           class="form-text text-muted text-danger mb-3">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <div class="md-form md-outline mt-0">
                                    <input type="number" name="sqft" id="sqft"
                                           class="form-control">
                                    <label for="sqft">SQFT</label>
                                    <div class="invalid-feedback">
                                        Last name should contain from 4 to 50 characters
                                    </div>
                                    @error('sqft')
                                    <small id="sqftErrorMessage"
                                           class="form-text text-muted text-danger mb-3">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form md-outline mt-0">
                                    <input type="number" name="price_per_sqft" id="price_per_sqft"
                                           class="form-control">
                                    <label for="price_per_sqft">Price Per SQFT</label>
                                    @error('price_per_sqft')
                                    <small id="pricePerSqftErrorMessage"
                                           class="form-text text-muted text-danger mb-3">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="md-form md-outline mt-0">
                            <input type="text" name="residence_type" id="residence_type" class="form-control">
                            <label data-error="wrong" data-success="right" for="residence_type">Residence Type</label>
                            @error('residence_type')
                            <small id="residenceTypeErrorMessage"
                                   class="form-text text-muted text-danger mb-3">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="md-form md-outline mt-0 mb-2">
                                    <input type="number" name="bedrooms" id="bedrooms"
                                           class="form-control">
                                    <label data-error="wrong" data-success="right" for="bedrooms">Bedrooms</label>
                                    @error('bedrooms')
                                    <small id="bedroomsErrorMessage"
                                           class="form-text text-muted text-danger mb-3">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form md-outline mt-0">
                                    <input type="number" name="bathrooms" id="bathrooms"
                                           class="form-control"
                                    >
                                    <label for="bathrooms" data-error="wrong" data-success="right"
                                           for="register-password-confirm">Bathrooms</label>

                                    @error('bathrooms')
                                    <small id="bathroomsErrorMessage"
                                           class="form-text text-muted text-danger mb-3">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="md-form md-outline mt-0 mb-2">
                                    <input type="text" name="HVAC" id="HVAC"
                                           class="form-control">
                                    <label data-error="wrong" data-success="right" for="bedrooms">HVAC</label>
                                    @error('HVAC')
                                    <small id="HVACErrorMessage"
                                           class="form-text text-muted text-danger mb-3">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form md-outline mt-0">
                                    <input type="text" name="parking" id="parking"
                                           class="form-control">
                                    <label data-error="wrong" data-success="right"
                                           for="parking">Parking</label>
                                    @error('parking')
                                    <small id="parkingErrorMessage"
                                           class="form-text text-muted text-danger mb-3">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="md-form md-outline">
                            <input type="text" name="tenant_contract" id="tenant_contract" class="form-control"
                                   aria-describedby="tenant_contract">
                            <label for="tenant_contract">Tenant Contract</label>
                            @error('tenant_contract')
                            <small id="tenantContractErrorMessage"
                                   class="form-text text-muted text-danger mb-3">
                                {{ $message }}
                            </small>
                            @enderror
                            <small id="register-phoneHelpBlock" class="form-text text-muted mb-3">
                        </div>

                        <div class="md-form md-outline">
                            <textarea type="text" name="description" id="description" class="form-control"
                                      aria-describedby="description"></textarea>
                            <label for="tenant_contract">Description</label>
                            @error('description')
                            <small id="descriptionErrorMessage"
                                   class="form-text text-muted text-danger mb-3">
                                {{ $message }}
                            </small>
                            @enderror
                            <small id="descriptionInfo" class="form-text text-muted mb-3">
                                A description of the property. Must be at least 100 characters in length.
                            </small>
                        </div>

                        <div class="md-form md-outline">
                            <input type="text" name="address" id="address" class="form-control"
                                   aria-describedby="address">
                            <label for="address">Address</label>
                            @error('address')
                            <small id="addressErrorMessage"
                                   class="form-text text-muted text-danger mb-3">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                        <div class="md-form md-outline">
                            <input type="date" name="year_built" id="year_built" class="form-control"
                                   aria-describedby="year_built">
                            <label for="address">Year Built</label>
                            @error("year_built")
                            <small id="yearBuiltErrorMessage"
                                   class="form-text text-muted text-danger mb-3">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                        <div class="md-form md-outline">
                            <textarea type="date" name="notes" id="notes" class="form-control"
                                      aria-describedby="year_built"></textarea>
                            <label for="address">Notes</label>
                            @error("notes")
                            <small id="notesErrorMessage"
                                   class="form-text text-muted text-danger mb-3">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                        <div class="text-center mb-2">

                            <button type="submit" class="btn btn-primary mb-4">Create Property</button>

                            {{--                            <p>or sign up with:</p>--}}

                            {{--                            <a type="button" class="btn-floating btn-fb btn-sm mr-1">--}}
                            {{--                                <i class="fab fa-facebook-f"></i>--}}
                            {{--                            </a>--}}
                            {{--                            <a type="button" class="btn-floating btn-tw btn-sm mr-1">--}}
                            {{--                                <i class="fab fa-twitter"></i>--}}
                            {{--                            </a>--}}
                            {{--                            <a type="button" class="btn-floating btn-li btn-sm mr-1">--}}
                            {{--                                <i class="fab fa-linkedin-in"></i>--}}
                            {{--                            </a>--}}
                            {{--                            <a type="button" class="btn-floating btn-git btn-sm">--}}
                            {{--                                <i class="fab fa-github"></i>--}}
                            {{--                            </a>--}}

                            {{--                            <hr class="mt-4">--}}

                            {{--                            <p>By clicking--}}
                            {{--                                <em>Sign up</em> you agree to our--}}
                            {{--                                <a href="#" data-toggle="modal" data-target="#terms-modal">terms of service</a>--}}
                            {{--                            </p>--}}
                        </div>
                    </form>
                </section>
            </div>
            <!--Section: Register Form-->
        </div>
    </main>
    <!--Main layout-->
@endsection
