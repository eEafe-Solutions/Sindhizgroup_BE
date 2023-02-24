<?php

namespace App\Helpers;

use Modules\Users\Entities\User;
use Illuminate\Support\Carbon;

class Helper
{

    public static function AddUsers()
    {

        $employeedata = [
            [
                'name' =>  'Admin', 'email' =>  'Admin@sindhizgroup.com.au', 'password' =>  bcrypt('Radhasoami007'), 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' =>  'Accounts', 'email' =>  'Accounts@sindhizgroup.com.au', 'password' =>   bcrypt('Radhasoami007'), 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' =>  'Kamlesh', 'email' =>  'Kamlesh@sindhizgroup.com.au', 'password' =>   bcrypt('Radhasoami007'), 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' =>  'Mahesh', 'email' =>  'Mahesh@sindhizgroup.com.au', 'password' =>   bcrypt('Radhasoami007'), 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' =>  'Amrat', 'email' =>  'Amrat@sindhizgroup.com.au', 'password' =>   bcrypt('Radhasoami007'), 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' =>  'Birhama', 'email' =>  'Birhama@sindhizgroup.com.au', 'password' =>   bcrypt('Radhasoami007'), 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' =>  'It', 'email' =>  'It@sindhizgroup.com.au', 'password' =>   bcrypt('Radhasoami007'), 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' =>  'Capitalregion', 'email' =>  'Capitalregion@sindhizgroup.com.au', 'password' =>   bcrypt('Radhasoami007'), 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' =>  'Coastalregion', 'email' =>  'Coastalregion@sindhizgroup.com.au', 'password' =>   bcrypt('Radhasoami007'), 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' =>  'Test User', 'email' =>  'yasinduramanayake123@gmail.com', 'password' =>  bcrypt('yasindu123#'), 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        User::insert($employeedata);
    }
}
