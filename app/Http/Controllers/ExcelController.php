<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
class ExcelController extends Controller
{
    //

    public function tampil(){
        $user = DB::table('d_user')->paginate(10);
        return view('dashboard',['user'=>$user]);
    }
    
    public function export_excel(){
        return Excel::download(new UserExport, 'User.xlsx');
    }
}
