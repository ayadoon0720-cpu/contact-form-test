<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'gender' => ['required'],
            'email' => ['required', 'email'],
            'tel' => ['required'],
            'address' => ['required'],
            'type' => ['required'],
            'content' => ['required', 'max:120'],
        ];
    }

    public function messages()
    {
        return [
            'first_name.requirred' => '姓を入力してください',
            'last_name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tel.required' => '電話番号を入力してください',
            'address.required' => '住所を入力してください',
            'type.required' => 'お問い合わせの種類を選択してください',
            'content.required' => 'お遠い合わせの内容を入力してください',
            'content.max:120' => 'お問い合わせ内容は120文字以内で入力してください',
        ];
    }
}
