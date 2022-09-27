<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class StorePropertyRequest extends FormRequest
    {
        /**
         * Determine if the user is authorized to make this request.
         *
         * @return bool
         */
        public function authorize(): bool
        {
            return true;
        }

        /**
         * Get the validation rules that apply to the request.
         *
         * @return array<string, mixed>
         */
        public function rules(): array
        {
            return [
                "title" => "required",
                "sqft" => "required",
                "price_per_sqft" => "required",
                "residence_type" => "required",
                "bedrooms" => "required",
                "bathrooms" => "required",
                "HVAC" => "required",
                "parking" => "required",
                "tenant_contract" => "required",
                "description" => "required",
                "address" => "required",
                "year_built" => "required",
                "notes" => "required",
//                "property_manager_id" => "required",
            ];
        }
    }
