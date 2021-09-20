<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //verifico que no se reemplace el id por la inspección de código
       /*  if($this->user_id == auth()->user()->id){

        return true;
        }
        else{
           return false; 
        } */

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      /*   return [
            //
        ]; */
        //variable que recupera la información del post
        $post = $this->route()->parameter('post');




        $rules = [
            'name' => 'required',
            'slug' => 'required|unique:posts',
            'status' => 'required|in:1,2',
            'file' => 'image' 
        ];

        if($post){

            $rules['slug'] =   'required|unique:posts,slug,' . $post->id;

        }

        if($this->status == 2){
         //metodo php que fuciona dos arrays
            $rules = array_merge($rules, [
                'category_id' => 'required',
                'tags' => 'required',
                'extract' => 'required',
                'body' => 'required'
            ]);
        }

        return $rules;

    }
}
