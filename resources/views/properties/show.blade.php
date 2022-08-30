@extends("layouts.app")
@section("content")
    <!--Section: Block Content-->
    <section class="my-5">

        <div class="row">
            <div class="col-md-5 mb-4 mb-md-0">

                <div class="view zoom z-depth-2 rounded">
                    <img class="img-fluid w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/Eco/img(24).jpg"
                         alt="Sample">
                    <a href="#!">
                        <div class="mask"></div>
                    </a>
                </div>

            </div>
            <div class="col-md-7">

                <h5>Dark grapes from Italy, Lazio - 1kg</h5>
                <p class="mb-2 text-muted text-uppercase small">Fruits</p>
                <ul class="rating">
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
                <p><span class="mr-1"><strong>$11.99</strong></span></p>
                <p class="pt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente illo. Sit
                    error voluptas repellat rerum quidem, soluta enim perferendis voluptates laboriosam. Distinctio,
                    officia quis dolore quos sapiente tempore alias.</p>
                <div class="table-responsive">
                    <table class="table table-sm table-borderless mb-0">
                        <tbody>
                        <tr>
                            <th class="pl-0 w-25" scope="row"><strong>Country</strong></th>
                            <td>Italy</td>
                        </tr>
                        <tr>
                            <th class="pl-0 w-25" scope="row"><strong>Province</strong></th>
                            <td>Lazio</td>
                        </tr>
                        <tr>
                            <th class="pl-0 w-25" scope="row"><strong>Type</strong></th>
                            <td>Abbuoto</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="table-responsive mb-2">
                    <table class="table table-sm table-borderless">
                        <tbody>
                        <tr>
                            <td class="pl-0 pb-0 w-25">Quantity</td>
                        </tr>
                        <tr>
                            <td class="pl-0">
                                <div class="def-number-input number-input safari_only mb-0">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                            class="minus"></button>
                                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                            class="plus"></button>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <button type="button" class="btn btn-primary btn-md mr-1 mb-2">Buy now</button>
                <button type="button" class="btn btn-light btn-md mr-1 mb-2"><i
                            class="fas fa-shopping-cart pr-2"></i>Add to cart
                </button>
            </div>
        </div>

    </section>
    <!--Section: Block Content-->
@endsection
