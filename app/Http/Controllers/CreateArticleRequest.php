<?php

namespace App\Articles\Requests;
use Illuminate\Foundation\Http\FormRequest;

class CreateArticleRequest extends FormRequest
{
    /**
     * Konvertuojam erro message JSON formatu
     *
     * @param array $errors
     * @return \Illuminate\Http\JsonResponse
     */
    public function response(array $errors)
    {
        return response()->json($errors, 422);
    }
    /**
     * Tikrinam, ar vartotojas autorizuotas, atilitk request'a
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    /**
     * Taikoma request'ui validacijos taisykles
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required'],
            'content' => ['required']
        ];
    }
}