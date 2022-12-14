<?php

    namespace Database\Seeders;

    use App\Models\PropertyManager;
    use Illuminate\Database\Seeder;

    class PropertyManagerSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            PropertyManager::factory()->count(3)->create();
        }
    }
