<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create("properties", function (Blueprint $table) {
                $table->id();
                $table->integer("sqft");
                $table->integer("price_per_sqft");
                $table->string("residence_type");
                $table->integer("bedrooms");
                $table->integer("bathrooms");
                $table->enum("HVAC", [
                    "Central Air Conditioning",
                    "Window Air Conditioners",
                    "Portable Air Conditioners",
                ]);
                $table->enum("parking", [
                    "Residence Parking",
                    "Private Parking",
                    "Paid Parking",
                ]);
                $table->string("tenant_contract");
                $table->mediumText("description");
                $table->text("address");
                $table->date("year_built");
                $table->string("notes");
                $table->unsignedBigInteger("property_manager_id");
                $table->foreign("property_manager_id")->references("id")->on("property_managers")->onDelete("CASCADE");
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists("properties");
        }
    };
