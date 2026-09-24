<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class InstrumentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //リクエストを実行してもいい人かどうかを判定する
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    //入力内容のチェック、決め事をつくる
    {
        return [
            'management_number' => ['required', 'max:255', 'string'], 
            'name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'calibration_cycle' => ['required', 'integer'],
            'next_calibration_date' => ['required', 'date'],
            'maker' => ['nullable', 'string', 'max:255'],
            'registered_at' => ['required', 'date'],
        ];
    }

    public function messages(): array
    //エラーの時に表示する内容を設定する
    {
        return [
            'management_number.required' => '管理番号を入力してください',
            'name.required' => '計測器名を入力してください',
            'location.required' => '配置場所を入力してください',
            'calibration_cycle.required' => '校正頻度を入力してください',
            'next_calibration_date.required' => '次回校正日を入力してください',
            'registered_at.required' => '計測器登録日を入力してください',
        ];
    }
}
