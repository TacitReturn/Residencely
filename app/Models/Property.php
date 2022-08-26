<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class Property extends Model
    {
        use HasFactory;

        public function propertyManager(): BelongsTo
        {
            return $this->belongsTo(PropertyManager::class, "property_manager_id", "id", "");
        }
    }
