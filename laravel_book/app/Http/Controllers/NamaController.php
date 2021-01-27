<?php
namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;

class NamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Daftar::latest()->paginate(5);

        // return view('projects.index', compact('projects'))
        return view('dashboard')

        // return view('dashboard')

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'u_username' => 'required',
            'u_email' => 'required',
            'u_password' => 'required',
          
        ]);

        Project::create($request->all());

        return redirect()->route('dashboard')
            ->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Daftar $user)
    {
        return view('dashboard', compact('dashboard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Daftar $user)
    {
        return view('dashboard', compact('dashboard'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daftar $user)
    {
        $request->validate([
            'u_username' => 'required',
            'u_email' => 'required',
            'u_password' => 'required',
        ]);
        $user->update($request->all());

        return redirect()->route('dashboard')
            ->with('success', 'Project updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daftar $user)
    {
        $project->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Project deleted successfully');
    }
}