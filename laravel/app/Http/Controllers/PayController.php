<?php

namespace App\Http\Controllers;
use App\Models\Pay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pays = Pay::all();

        return view('finanse/pay.index', compact('pays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('finanse/pay.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request,[

                'spending' =>'required',
                'sum' => 'required',
                'comment' =>'required'

            ]);

            $pays = new Pay();
            $pays ->sum =$request->get('sum');
            $pays ->spending =$request->get('spending');
            $pays ->comment =$request->get('comment');
            $pays ->save();

            return redirect(route('pay.index'));

        }
        catch (\Exception $e){
            return redirect(route('pay.create'));

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('finanse/pay.show', ['pay' => Pay::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('finanse/pay.edit', ['pay' => Pay::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $this->validate($request,[

                'spending' =>'required',
                'sum' => 'required',
                'comment' =>'required'

            ]);

            $pays = Pay::find($id);
            $pays->fill($request->all());
            $pays->save();

            return redirect(route('pay.index'));
        } catch (\Exception $exception) {
            return view('finanse/pay.edit', ['pays' => Pay::findOrFail($id)]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pay= Pay::find($id);
        $pay->delete();
        return redirect(route('pay.index'));
    }

    public function sum()
    {
        $pays = DB::table('pays')
            ->sum('sum');

        return view('finanse/pay.sum', compact('pays'));

    }

}
