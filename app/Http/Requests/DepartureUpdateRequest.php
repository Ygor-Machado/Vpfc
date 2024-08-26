<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartureUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'away_team_name' => 'required|string',
            'home_team_name' => 'required|string',
            'away_abreviation' => 'required|string',
            'home_abreviation' => 'required|string',
            'match_date' => 'required|string',
            'location' => 'required|string',
            'home_team_score' => 'nullable|integer',
            'away_team_score' => 'nullable|integer',
            'is_finished' => 'boolean',
            'home_team_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'away_team_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'home_team_score' => $this->home_team_score === '' ? null : $this->home_team_score,
            'away_team_score' => $this->away_team_score === '' ? null : $this->away_team_score,
        ]);
    }

}
