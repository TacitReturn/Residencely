<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class Property extends Model
    {
        use HasFactory;

        protected $dates = [
            "year_built",
        ];

        protected $fillable = [
            "title",
            "sqft",
            "price_per_sqft",
            "residence_type",
            "bedrooms",
            "bathrooms",
            "HVAC",
            "parking",
            "tenant_contract",
            "description",
            "address",
            "year_built",
            "notes",
            "property_manager_id",
        ];

        public function propertyManager(): BelongsTo
        {
            return $this->belongsTo(PropertyManager::class, "property_manager_id", "id", "");
        }

        /**
         * Returns property price
         *
         * @return float|int|string
         */
        public function price(): float|int|string
        {
            return number_format($this->price_per_sqft * $this->sqft, 2, ".", ",");
        }

        public function yearBuilt()
        {
            return $this->year_built->format("Y");
        }
    }
