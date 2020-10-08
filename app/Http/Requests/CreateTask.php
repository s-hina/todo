<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTask extends FormRequest
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
            'title' => 'required|max:100',
            //日付を表す値であること、特定の日付と同じまたはそれ以降の日付であること というルール付け
            'due_date' => 'required|date|after_or_equal:today',
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'タイトル',
            'due_date' => '期限日',
        ];
    }

    //個別のFormRequestクラスの内部でのみ有効なメッセージを定義
    //今回の場合、validation.phpではうまく日本語化できないためここで定義
    public function messages()
    {
        return [
            //キーでメッセージが表示されるべきルールを指定する
            //ドット区切りで左側が項目、右側がルールを意味する
            'due_date.after_or_equal' => ':attribute には今日以降の日付を入力してください。'
        ];
    }

    
}
