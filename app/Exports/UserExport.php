<?php

namespace App\Exports;

use App\models\User;
use Illuminate\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return User::all();
    // }

    public function collection():View
    {
        return view('user',[
            'user' => User::all()
        ]);
    }
}
