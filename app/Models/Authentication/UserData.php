<?php

namespace App\Models\Authentication;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users_data';
    protected $primaryKey = 'id';
    protected $fillable = [
        'firstname', 'middlename', 'lastname', 'institution',
    ];

    public function rules()
    {
        return [
			'Last Name' => 'required',
			'First Name' => 'required',
            'Institution' => 'required',
        ];
    }

    public function messages()
    {
        return [
			'Last Name.required' => 'Last Name is required.',
			'First Name.required' => 'First Name is required.',
            'Institution.required' => 'Institution is required.',
        ];
    }
}
