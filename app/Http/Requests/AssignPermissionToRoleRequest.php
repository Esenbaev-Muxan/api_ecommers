<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssignPermissionToRoleRequest extends FormRequest
{

    
    public function authorize(): bool
    {
        return auth()->user()->can('permission:create');
    }

  
    public function rules(): array
    {
        return [
            "permission_id" => "required",
            "role_id" => "required"
        ];
    }
}
