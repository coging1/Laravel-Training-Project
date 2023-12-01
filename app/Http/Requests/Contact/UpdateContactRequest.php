<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UpdateContactRequest extends FormRequest
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
	 * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
	 */
	public function rules(): array
	{
		return [
			'first_name' => [
				'required',
				'string',
        'max:255',
			],
      'middle_name' => [
				'required',
				'string',
        'max:255',
			],
      'last_name' => [
				'required',
				'string',
        'max:255',
			],
      'barangay' => [
				'required',
				'string',
        'max:255',
			],
      'street' => [
				'required',
				'string',
        'max:255',
			],
			'email_address' => [
				'required',
				'email:rfc,dns,spoof,filter',
        Rule::unique('contacts','email_address')->ignore($this->contact->id)
			],
		];
	}
}
