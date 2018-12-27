<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\DataRequest;
use App\Nutrition;
use Session;


class dataController extends Controller
{

    public function viewData(){
        return view('/');
    }

    //Displays page for adding a new entry in the system
    public function showAddPage(){
        return view('add');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Session::has('SignedIn')){
            $data = DB::table('nutrition')->paginate(20) or die("Database not connected");
        }
        else{
            $data = DB::table('nutrition')->where('hidden', '=', 0)->paginate(20) or die("Database not connected");
        }
        return view('home', ['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\DataRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataRequest $request)
    {
        $school_name = $request->input('school_name');
        $address = $request->input('address');
        $city = $request->input('city');
        $postal_code = $request->input('postal_code');
        $school_board = $request->input('school_board');
        $school_id = $request->input('school_id');
        $breakfast = $request->input('breakfast');
        $lunch = $request->input('lunch');
        $snack = $request->input('snack');

        DB::insert('insert into nutrition (school_name, address, city, postal_code, school_board
                        , school_id, breakfast, lunch, snack, hidden) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
            $school_name, $address, $city, $postal_code, $school_board, $school_id,
            $breakfast, $lunch, $snack, false
        ]);

        $request->session()->flash('message', 'New record added successfully');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entry = Nutrition::find($id);
        return view('modify', ['entry'=>$entry]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DataRequest $request, $id)
    {
        $entry = Nutrition::find($id);
        $entry->school_name = $request->input('school_name');
        $entry->address = $request->input('address');
        $entry->city = $request->input('city');
        $entry->postal_code = $request->input('postal_code');
        $entry->school_board = $request->input('school_board');
        $entry->school_id = $request->input('school_id');
        $entry->breakfast = $request->input('breakfast');
        $entry->lunch = $request->input('lunch');
        $entry->snack = $request->input('snack');
        $entry->hidden = $request->input('hidden');
        $entry->save();
        session()->flash('message', "Entry #$id has been successfully modified");
        return redirect(url(''));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('nutrition')->where('id', '=', $id)->delete();
        session()->flash('message', "Entry #$id has been successfully deleted");
        return redirect('/');
    }
}
