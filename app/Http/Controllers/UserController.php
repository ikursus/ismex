<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $senarai_users = DB::table('users')->get();
        // $senarai_users = DB::table('users')->where('status', 'active')->get();

        return view('template_users.senarai', compact('senarai_users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('template_users.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        // Semak / validate data yang dihantar
        $request->validated();
        // Dapatkan data yang ingin disimpan ke dalam table users
        $data = $request->only([
            'name', 'username', 'email', 'role', 'status', 'mykad'
        ]);
        // Untuk data password, encrypt terlebih dahulu dan sertakan ke array $data
        $data['password'] = bcrypt($request->password);
        // Simpan data ke table users
        DB::table('users')->insert($data);
        // Selesai masuk data, redirect pengguna ke senarai users
        return redirect()->route('users.index')->with('mesej-berjaya', 'Rekod berjaya disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = DB::table('users')->where('id', '=', $id)->first();

        return view('template_users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        // Semak / validate data yang dihantar
        $request->validated();

        // Dapatkan data yang ingin disimpan ke dalam table users
        $data = $request->only([
            'name', 'username', 'email', 'role', 'status', 'mykad'
        ]);
        // Untuk data password, encrypt terlebih dahulu dan sertakan ke array $data
        $data['password'] = bcrypt($request->password);
        // Simpan data ke table users
        DB::table('users')->where('id', $id)->update($data);
        // Selesai masuk data, redirect pengguna ke senarai users
        return redirect()->route('users.index')->with('mesej-berjaya', 'Rekod berjaya dikemaskini!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DB::table('users')->where('id', $id)->delete();
        $user = User::findOrFail($id);
        
        if (!is_null($user->profile))
        {
            return redirect()->back()->with('mesej-gagal', 'Akaun ini ada rekod profile');
        }

        $user->delete();

        // Selesai masuk data, redirect pengguna ke senarai users
        return redirect()->route('users.index')->with('mesej-berjaya', 'Rekod berjaya dihapuskan!');
    }

    public function datatables()
    {
        
    }
}
