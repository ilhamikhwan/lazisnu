<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Kolom :attribute harus diterima.',
    'active_url'           => 'Kolom :attribute bukan URL yang valid.',
    'after'                => 'Kolom :attribute harus berupa tanggal setelah :date.',
    'alpha'                => 'Kolom :attribute hanya boleh berisi huruf.',
    'alpha_dash'           => 'Kolom :attribute hanya boleh berisi huruf, angka, dan tanda hubung.',
    "ascii_only"           => "Kolom :attribute hanya boleh berisi huruf, angka, dan tanda hubung.",
    'alpha_num'            => 'Kolom :attribute hanya boleh berisi huruf dan angka',
    'array'                => 'Kolom :attribute harus berupa array.',
    'before'               => 'Kolom :attribute harus berupa tanggal sebelum :date.',
    'between'              => [
        'numeric' => 'Kolom :attribute harus diantara :min dan :max.',
        'file'    => 'Kolom :attribute harus diantara :min dan :max kb.',
        'string'  => 'Kolom :attribute harus diantara :min dan :max karakter.',
        'array'   => 'Kolom :attribute must have between :min dan :max item.',
    ],
    'boolean'              => 'Kolom :attribute harus berupa beanr atau salah.',
    'confirmed'            => 'Kolom :attribute konfirmasi tidak sama.',
    'date'                 => 'Kolom :attribute bukan tanggal yang valid.',
    'date_format'          => 'Kolom :attribute tidak cocok dengan formatnya :format.',
    'different'            => 'Kolom :attribute dan :other harus berbeda.',
    'digits'               => 'Kolom :attribute harus berupa :digits digit.',
    'digits_between'       => 'Kolom :attribute harus diantara :min dan :max digit.',
    'dimensions'           => 'Kolom :attribute memiliki dimensi gambar yang tidak valid.',
    'distinct'             => 'Kolom :attribute meiliki nilai duplikat.',
    'email'                => 'Kolom :attribute harus berupa alamat email yang sah',
    'exists'               => 'Kolom pilihan :attribute tidak valid/sah.',
    'file'                 => 'Kolom :attribute harus berupa a file.',
    'filled'               => 'Kolom :attribute sangat diperlukan',
    'image'                => 'Kolom :attribute harus berupa image/gambar',
    'in'                   => 'Kolom pilihan :attribute tidak valid/sah.',
    'in_array'             => 'Kolom :attribute tidak ada di :other.',
    'integer'              => 'Kolom :attribute harus berupa angka/integer',
    'ip'                   => 'Kolom :attribute harus berupa alamat IP yang sah',
    'json'                 => 'Kolom :attribute harus berupa string JSON yang sah.',
    'max'                  => [
        'numeric' => 'Kolom :attribute mungkin tidak lebih besar dari :max.',
        'file'    => 'Kolom :attribute mungkin tidak lebih besar dari :max kb.',
        'string'  => 'Kolom :attribute mungkin tidak lebih besar dari :max karakter.',
        'array'   => 'Kolom :attribute mungkin tidak meiliki lebih dari :max items.',
    ],
    'mimes'                => 'Kolom :attribute harus berupa file bertipe: :values.',
    'min'                  => [
        'numeric' => 'Kolom :attribute setidaknya harus :min.',
        'file'    => 'Kolom :attribute setidaknya harus :min kb.',
        'string'  => 'Kolom :attribute setidaknya harus :min karakter.',
        'array'   => 'Kolom :attribute setidaknya harus memiliki :min items.',
    ],
    'not_in'               => 'Kolom pilihan :attribute tidak valid/sah.',
    'numeric'              => 'Kolom :attribute harus berupa nomor.',
    'present'              => 'Kolom :attribute harus ada.',
    'regex'                => 'Kolom :attribute format tidak valid/sah.',
    'required'             => 'Kolom :attribute sanagat diperlukan.',
    'required_if'          => 'Kolom :attribute sangat diperlukan ketika :other adalah :value.',
    'required_unless'      => 'Kolom :attribute sangat diperlukan kecuali :other ada di :values.',
    'required_with'        => 'Kolom :attribute sangat diperlukan ketika :values ada.',
    'required_with_all'    => 'Kolom :attribute sangat diperlukan ketika :values ada.',
    'required_without'     => 'Kolom :attribute sangat diperlukan ketika :values tidak ada.',
    'required_without_all' => 'Kolom :attribute sangat diperlukan ketika tidak satupun :values yang ada.',
    'same'                 => 'Kolom :attribute dan :other harus sama.',
    'size'                 => [
        'numeric' => 'Kolom :attribute harus berupa :size.',
        'file'    => 'Kolom :attribute harus berupa :size kb.',
        'string'  => 'Kolom :attribute harus berupa :size karakter.',
        'array'   => 'Kolom :attribute harus beris :size items.',
    ],
    'string'               => 'Kolom :attribute harus berupa data text.',
    'timezone'             => 'Kolom :attribute harus berupa zona waktu yang sah.',
    'unique'               => 'Kolom :attribute sudah diambil.',
    'url'                  => 'Kolom :attribute format tidak sah.',
    "letters"              => "Nama pengguna harus mengandung setidaknya satu huruf atau angka",
    "account_not_confirmed" => "Akun Anda belum dikonfirmasi, silakan periksa email Anda",
	"user_suspended"        => "Akun Anda telah ditangguhkan, silakan hubungi kami jika terjadi kesalahan",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | Kolom following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
      'agree_gdpr' => 'Saya setuju dengan pemrosesan data pribadi',
    ],

];