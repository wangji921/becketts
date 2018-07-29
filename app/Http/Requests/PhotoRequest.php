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
                    'title'         => '',
                    'year'          => '',
                    'month'         => '',
                    'category_id'   => '',
                    'description'   => '',
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
