<?php

return [

    /*
    |--------------------------------------------------------------------------
    | バリデーション言語ライン
    |--------------------------------------------------------------------------
    |
    | 以下の言語ラインは、バリデータークラスが使用するデフォルトのエラーメッセージです。
    | サイズルールなど、いくつかのルールには複数のバージョンがあります。
    | 必要に応じてこれらのメッセージを自由に変更してください。
    |
    */

    'accepted' => ':attribute を承認する必要があります。',
    'accepted_if' => ':other が :value の場合、:attribute を承認する必要があります。',
    'active_url' => ':attribute は有効なURLではありません。',
    'after' => ':attribute は :date より後の日付でなければなりません。',
    'after_or_equal' => ':attribute は :date 以降の日付でなければなりません。',
    'alpha' => ':attribute は文字のみを含む必要があります。',
    'alpha_dash' => ':attribute は文字、数字、ダッシュ、アンダースコアのみを含む必要があります。',
    'alpha_num' => ':attribute は文字と数字のみを含む必要があります。',
    'array' => ':attribute は配列でなければなりません。',
    'ascii' => ':attribute はシングルバイトの英数字と記号のみを含む必要があります。',
    'before' => ':attribute は :date より前の日付でなければなりません。',
    'before_or_equal' => ':attribute は :date 以前の日付でなければなりません。',
    'between' => [
        'array' => ':attribute は :min から :max 個のアイテムを持つ必要があります。',
        'file' => ':attribute は :min から :max キロバイトのサイズでなければなりません。',
        'numeric' => ':attribute は :min から :max の間でなければなりません。',
        'string' => ':attribute は :min から :max 文字の間でなければなりません。',
    ],
    'boolean' => ':attribute フィールドは true または false でなければなりません。',
    'confirmed' => ':attribute の確認が一致しません。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => ':attribute は有効な日付ではありません。',
    'date_equals' => ':attribute は :date と同じ日付でなければなりません。',
    'date_format' => ':attribute は :format 形式と一致しません。',
    'decimal' => ':attribute は :decimal 小数点以下の桁数を持つ必要があります。',
    'declined' => ':attribute は辞退する必要があります。',
    'declined_if' => ':other が :value の場合、:attribute は辞退する必要があります。',
    'different' => ':attribute と :other は異なる必要があります。',
    'digits' => ':attribute は :digits 桁でなければなりません。',
    'digits_between' => ':attribute は :min から :max 桁の間でなければなりません。',
    'dimensions' => ':attribute の画像サイズが無効です。',
    'distinct' => ':attribute フィールドに重複した値があります。',
    'email' => ':attribute は有効なメールアドレスでなければなりません。',
    'ends_with' => ':attribute は次のいずれかで終わる必要があります: :values。',
    'enum' => '選択された :attribute は無効です。',
    'exists' => '選択された :attribute は無効です。',
    'file' => ':attribute はファイルでなければなりません。',
    'filled' => ':attribute フィールドには値が必要です。',
    'gt' => [
        'array' => ':attribute は :value 個より多くのアイテムを持つ必要があります。',
        'file' => ':attribute は :value キロバイトより大きくなければなりません。',
        'numeric' => ':attribute は :value より大きくなければなりません。',
        'string' => ':attribute は :value 文字より長くなければなりません。',
    ],
    'gte' => [
        'array' => ':attribute は :value 個以上のアイテムを持つ必要があります。',
        'file' => ':attribute は :value キロバイト以上でなければなりません。',
        'numeric' => ':attribute は :value 以上でなければなりません。',
        'string' => ':attribute は :value 文字以上でなければなりません。',
    ],
    'image' => ':attribute は画像でなければなりません。',
    'in' => '選択された :attribute は無効です。',
    'integer' => ':attribute は整数でなければなりません。',
    'ip' => ':attribute は有効な IP アドレスでなければなりません。',
    'ipv4' => ':attribute は有効な IPv4 アドレスでなければなりません。',
    'ipv6' => ':attribute は有効な IPv6 アドレスでなければなりません。',
    'json' => ':attribute は有効な JSON 文字列でなければなりません。',
    'max' => [
        'array' => ':attribute は :max 個以下のアイテムを持つ必要があります。',
        'file' => ':attribute は :max キロバイト以下でなければなりません。',
        'numeric' => ':attribute は :max 以下でなければなりません。',
        'string' => ':attribute は :max 文字以下でなければなりません。',
    ],
    'min' => [
        'array' => ':attribute は少なくとも :min 個のアイテムを持つ必要があります。',
        'file' => ':attribute は少なくとも :min キロバイトでなければなりません。',
        'numeric' => ':attribute は少なくとも :min でなければなりません。',
        'string' => ':attribute は少なくとも :min 文字でなければなりません。',
    ],
    'unique' => ':attribute は既に使用されています。',
    'url' => ':attribute は有効なURLでなければなりません。',

    'attributes' => [],

];