<?php

namespace App\Http\Controllers;
use App\Crud;
use App\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\DB;
use Auth;
class CrudsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Crud::where('user_id','=', Auth::user()->id)->get();
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
            'first_name'    =>  'required',
            'last_name'     =>  'required',
            'image'         =>  'required|image|max:2048',
            'user_id'       =>  'required'
        ]);
        if ($request->first_name == 'ბაუდი') {
             return redirect::back()->withErrors('ბაუდი უნიკალურია');
          // code...
        }

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'first_name'       =>   $request->first_name,
            'last_name'        =>   $request->last_name,
            'image'            =>   $new_name,
            'user_id'          =>   $request->user_id
        );
        Crud::create($form_data);
        return redirect('crud')->with('success', 'Data Added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Crud::findOrFail($id);

        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'first_name'    =>  'required',
                'last_name'     =>  'required',
                'image'         =>  'image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'first_name'    =>  'required',
                'last_name'     =>  'required'
            ]);
        }

        $item = new Crud;
        $crud = $item::find($request->input('id'));
        $crud->first_name = $request->input('first_name');
        $crud->last_name = $request->input('last_name');
        $crud->image = $image_name;
        $crud->save();
        return redirect('crud')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Crud::findOrFail($id);
        $data->delete();

        return redirect('crud')->with('success', 'Data is successfully deleted');
    }

    public function filter()
    {
        $data = Crud::where('user_id','=', Auth::user()->id)->get();

          return view('filter' , compact('data'));
    }





    public function testing()
        {
          //   $product = products::where('user_id', '=', '1')->where('amount' , '=' , '21')->orderBy('id' , 'desc')->get();
          // //  $search = products::where('price' , '44')->where('amount' , '=' , '21')->get();
          //   //$search = products::get();
          //   //dd($search);
          //   $crud = Crud::select('first_name')->get();
          //   $search = products::select('price')->get();
          //   $first = Crud::select('last_name')->where('last_name' , 'Gumashvili')->where('first_name', '=', 'რუსტამ')->get();
          //   $dota = Crud::select('first_name')->where('first_name', 'like', '%რუსტამ%')->get();
          //  $irakli = Crud::select('first_name')->orderByRaw('updated_at - created_at DESC')->get();
          //   $mari = products::select('price')->where('price', '>', 'amount')->where('title', '=', 'ბორბლები')->get();

             $join = DB::table('users')->where('user_id' , '=' , Auth::user()->id)
             ->join('products', 'user_id','users.id')
             ->get();
            // $user = products::where('price', 'like', '%7')->orWhere('title','=','მანქანა')->get();
          //  $hash = DB::table('products')->whereNotBetween('price',[ 1, 30 ])->get();
            //  $hash = DB::table('products')->whereColumn('amount', 'price')->get();
            $users = DB::table('users')
           ->where('name', '=', 'Jalon Oberbrunner')
           ->where(function ($query) {
               $query->where('created_at', '>', '2020-07-02 13:26:25')
                     ->orWhere('name', 'like', '%Jalon%');
           })
           ->get();
            return view('testing', [ 'join'=>$join],['users'=>$users]);

    }

}
