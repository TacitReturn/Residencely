<?php

    namespace Database\Factories;

    use App\Models\PropertyManager;
    use Carbon\Carbon;
    use Exception;
    use Illuminate\Database\Eloquent\Factories\Factory;

    /**
     * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
     */
    class PropertyFactory extends Factory
    {
        /*
         * Residence Type
         */
        public array $residence_type = [
            "Lot",
            "House",
            "Apartment"
        ];

        /*
         * HVAC System Type
         */
        public array $HVAC = [
            "Central Air Conditioning",
            "Window Air Conditioners",
            "Portable Air Conditioners",
        ];

        /*
         * Parking Type
         */
        public array $parking = [
            "Residence Parking",
            "Private Parking",
            "Paid Parking",
        ];

        /*
         * Tenant Contract Type
         */
        public array $tenant_contract = [
            "Rent",
            "Rent To Own",
            "Owned",
        ];

        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         * @throws Exception
         */
        public function definition(): array
        {
            return [
                "title" => fake()->sentence,
                "residence_type" => array_rand(array_flip($this->residence_type)),
                "year_built" => Carbon::now()->subYears(random_int(1, 75)),
                "HVAC" => array_rand(array_flip($this->HVAC)),
                "parking" => array_rand(array_flip($this->parking)),
                "sqft" => random_int(1000, 10000),
                "price_per_sqft" => random_int(75, 500),
                "description" => $this->faker->sentence(100),
                "address" => $this->faker->address,
                "tenant_contract" => array_rand(array_flip($this->tenant_contract)),
                "bedrooms" => random_int(1, 10),
                "bathrooms" => random_int(1, 10),
                "notes" => $this->faker->sentence(3),
                "property_manager_id" => PropertyManager::all()->random()->id,
            ];
        }
    }
