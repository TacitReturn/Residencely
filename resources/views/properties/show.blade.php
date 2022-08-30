@extends("layouts.app")
@section("content")
    <!--Section: Block Content-->
    <section class="my-5">

        <div class="row">
            <div class="col-md-5 mb-4 mb-md-0">

                <div class="view zoom z-depth-2 rounded">
                    <div class="my-5">
                        <img class="img-fluid w-100"
                             src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                             alt="Sample">
                    </div>
                    <a href="#!">
                        <div class="mask"></div>
                    </a>
                </div>

                <div class="view zoom z-depth-2 rounded mt-5">
                    <div class="my-5">
                        <img class="img-fluid w-100"
                             src="https://images.pexels.com/photos/186077/pexels-photo-186077.jpeg?auto=compress&cs=tinysrgb&w=1600"
                             alt="Sample">
                    </div>
                    <a href="#!">
                        <div class="mask"></div>
                    </a>
                </div>

            </div>
            <div class="col-md-7">

                <h5>{{ $property->title }}</h5>
                <p class="mb-2 text-muted text-uppercase text-success small">
                    {{ $property->HVAC }}
                </p>
                <div class="d-flex">
                    <p>Tenant Rating</p>
                    <ul class="rating ml-3">
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="far fa-star fa-sm text-primary"></i>
                        </li>
                    </ul>
                </div>
                <p><span class="mr-1"><strong>
                            $ {{ $property->price() }}
                        </strong></span></p>
                <p class="pt-1">
                    {{ $property->description }}
                </p>
                <div class="table-responsive">
                    <table class="table table-sm table-borderless mb-0">
                        <tbody>
                        <tr>
                            <th class="pl-0 w-25" scope="row"><strong>Address</strong></th>
                            <td>{{ $property->address }}</td>
                        </tr>
                        <tr>
                            <th class="pl-0 w-25" scope="row"><strong>Year Built</strong></th>
                            <td>
                                {{ $property->yearBuilt() }}
                            </td>
                        </tr>
                        <tr>
                            <th class="pl-0 w-25" scope="row"><strong>Type</strong></th>
                            <td>
                                {{ $property->residence_type }}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                {{--                <div class="table-responsive mb-2">--}}
                {{--                    <table class="table table-sm table-borderless">--}}
                {{--                        <tbody>--}}
                {{--                        <tr>--}}
                {{--                            <td class="pl-0 pb-0 w-25">Quantity</td>--}}
                {{--                        </tr>--}}
                {{--                        <tr>--}}
                {{--                            <td class="pl-0">--}}
                {{--                                <div class="def-number-input number-input safari_only mb-0">--}}
                {{--                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"--}}
                {{--                                            class="minus"></button>--}}
                {{--                                    <input class="quantity" min="0" name="quantity" value="1" type="number">--}}
                {{--                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"--}}
                {{--                                            class="plus"></button>--}}
                {{--                                </div>--}}
                {{--                            </td>--}}
                {{--                        </tr>--}}
                {{--                        </tbody>--}}
                {{--                    </table>--}}
                {{--                </div>--}}
                <button type="button" class="btn btn-primary btn-md mr-1 mb-2">
                    Update Property
                </button>
                <button type="button" class="btn btn-light btn-md mr-1 mb-2"><i
                            class="fas fa-shopping-cart pr-2"></i>
                    View Documents
                </button>
            </div>
        </div>

    </section>
    <!--Section: Block Content-->
@endsection
