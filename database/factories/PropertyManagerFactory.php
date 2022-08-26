<?php

    namespace Database\Factories;

    use Exception;
    use Illuminate\Database\Eloquent\Factories\Factory;

    /**
     * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyManager>
     */
    class PropertyManagerFactory extends Factory
    {
        /*
         * Property Management Company
         */
        public array $companies = [
            "Lorem Ipsum LLC",
            "Capital Dolar Land",
            "Astro Lorem And Holdings",
        ];

        public array $account_type = [
            "Basic",
            "Startup",
            "Premium",
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
                "first_name" => $this->faker->firstName,
                "last_name" => $this->faker->lastName,
                "phone" => $this->faker->phoneNumber,
                "account_type" => array_rand(array_flip($this->account_type)),
                "address" => $this->faker->address,
                "company" => array_rand(array_flip($this->companies))
            ];
        }
    }
