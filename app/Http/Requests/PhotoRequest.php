<?php

namespace App\Http\Requests;

class PhotoRequest extends Request
{
    public function rules()
    {
        switch($this->method())
        {
            // CREATE
            case 'POST':
            // {
            //     return [
            //         // CREATE ROLES
            //     ];
            // }
            // UPDATE
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'title'         => 'required|min:2',
                    'year'          => 'required',
                    'month'         => 'required',
                    'category_id'   => 'required|numeric',
                    'description'   => 'required',
                ];
            }
            case 'GET':
            case 'DELETE':
            default:
            {
                return [];
            };
        }
    }

    public function messages()
    {
        return [
            // Validation messages
        ];
    }
}
