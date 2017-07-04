<?php

namespace App\Http\Requests\Seller;

use Illuminate\Foundation\Http\FormRequest;

class ProductSKURequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'productid'=> 'required',
            'colorid' => 'required',
            'sizeid' => 'required',
            'mrp' => 'required',
            'price' => 'required',
            'qty' => 'required',
            'minqty' => 'required',
        ];
    }

    public function response(array $errors)
    {
        flash('<b>Insertion Unsuccessfull. Please Try Again..!</b>');
        if ($this->expectsJson()) {
            return new JsonResponse($errors, 422);
        }

        return $this->redirector->to($this->getRedirectUrl())
                                        ->withInput($this->except($this->dontFlash))
                                        ->withErrors($errors, $this->errorBag);
    }

}
