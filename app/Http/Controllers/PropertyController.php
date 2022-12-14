<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\StorePropertyRequest;
    use App\Http\Requests\UpdatePropertyRequest;
    use App\Models\Property;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Contracts\View\Factory;
    use Illuminate\Contracts\View\View;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Response;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\DB;

    class PropertyController extends Controller
    {
        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct()
        {
            $this->middleware('auth');
        }

        /**
         * Display a listing of the resource.
         *
         * @return Application|Factory|View
         */
        public function index(): View|Factory|Application
        {
            return view("properties.index",
                ["properties" => Property::all()]);
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return Application|Factory|View
         */
        public function create(): View|Factory|Application
        {
            return view("properties.create");
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  StorePropertyRequest  $request
         * @return RedirectResponse
         */
        public function store(StorePropertyRequest $request): RedirectResponse
        {
            $validatedData = $request->validated();

            $validatedData["property_manager_id"] = Auth::id();

            DB::table("properties")->insert($validatedData);

            $request->session()->flash("status", "Property created successfully!");

            return redirect()->route("properties.index");
        }

        /**
         * Display the specified resource.
         *
         * @param  Property  $property
         * @return Application|Factory|View
         */
        public function show(Property $property): Application|Factory|View
        {
            return view("properties.show", ["property" => $property]);
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  Property  $property
         * @return Response
         */
        public function edit(Property $property)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \App\Http\Requests\UpdatePropertyRequest  $request
         * @param  Property  $property
         * @return Response
         */
        public function update(UpdatePropertyRequest $request, Property $property)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  Property  $property
         * @return Response
         */
        public function destroy(Property $property)
        {
            //
        }
    }
