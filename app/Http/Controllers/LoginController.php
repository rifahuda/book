<?php
namespace App\Http\Controllers;

use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use App\Http\Controllers\Controller;


use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;

class LoginController extends Controller {
	/**
	 * Handle an authentication attempt.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function authenticate(Request $request) {
		// dd($request->all());
		// $credentials = $request->only('email', 'password');
		// dd(Auth::attempt(['u_email' => $request->username, 'password' => $request->password]));
		// dd(Hash::check('123456','$2y$10$hTe.5kpNrDqutNGGL3hEDOs0J2RcUG7DAz1EL4THyh7lUaD4wj0gO'));
		// dd(!filter_var($request->username, FILTER_VALIDATE_EMAIL));




		if (!filter_var($request->username, FILTER_VALIDATE_EMAIL)) {
			// $usename = $request->username;
			$user = User::where('u_name', $request->username)->get();
			
			// dd('y');
		} else {
			// $usename = $request->username;
			$user = User::where('u_email', $request->username)->get();
			// dd('z', $user, $request->username);
		}
		// dd('x', $user);
		foreach ($user as $key => $value) {
			$userPass = Hash::check($request->password, $value->u_pwd);
			// $userPass = User::where($request->password, $value->u_id);

			
			if ($userPass ) {
				
				$request->session()->regenerate();
				$request->session()->put('user', User::where('u_email', $value->u_email)->where('u_id', $value->u_id)->first());
				return redirect()->intended('dashboard');

			}

			elseif ( User::where('u_id', $request->password)->first()){
				// dd ( User::where ('u_email', $value->u_email) ->where('u_name', $value->u_name) ->first());



				$request->session()->regenerate();
				$request->session()->forget('user');
				$request->session()->put('user', User::where('u_email', $value->u_email)->where('u_id', $value->u_id)->first());
					

				return redirect()->intended('dashboard');
			}
			// if (Auth::attempt(['u_email' => $request->username, 'password' => $request->password])) {
			//     return redirect()->intended('dashboard');
			//     $request->session()->regenerate();
			// }

		}

		return back()->with(['popo'=>'Email/Password Salah !']);
	}

	// public function cekakun(Request $request) {
	// 	$userId = $request->session()->get('user')->u_email;
	// 	$user = User::where('u_email', $userId)->count();
	// 	$statusAkun = false;
	// 	if ($user > 0) {
	// 		$statusAkun = true;
	// 	}
	// 	return response()->json([
	// 		'status' => 'success',
	// 		'akun' => $statusAkun,
	// 	]);
	// }

	/**
	 * Handle an authentication attempt.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$userId = $request->session()->get('user')->u_email;

		DB::Begintransaction();
		try {
			$update = User::find($userId);
			// $update -> Hash::make ('u_pwd' = $request->password);

			
			$update ->u_name= $request->username;
	

			$update ->u_pwd= Hash::make($request->password);

		

			$update->update();
			// $anggotaId = Auth::user()->u_anggota_id;

			DB::Commit();
			return response()->json([
				'status' => 'success',
				'message' => 'Berhasil ',
			]);
		} catch (\Throwable $th) {
			DB::rollback();
			return $th;
		}
	}


	public function tampil()
	{
		$user = User::all();
		return view('dashboard',['user'=>$user]);
	}
 
	public function export_excel()
	{
		return Excel::download(new UserExport, 'User.xlsx');
		
	}







	public function logout(Request $request) {
		$request->session()->forget('user');
		return redirect('/');
	}




	
}