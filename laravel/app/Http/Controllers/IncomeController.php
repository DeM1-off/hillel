<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IncomeController extends Controller
{
    private  const USER_ID = 1;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function index()
    {
        $incomes = Income::all();

        return view('finanse/income.index', compact('incomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('finanse/income.create');
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

                'source' =>'required',
                'sum' => 'required',
                'comment' =>'required'

            ]);

            $incomes = new Income();
            $incomes->sum =$request->get('sum');
            $incomes->source =$request->get('source');
            $incomes->comment =$request->get('comment');
            $incomes->save();

            return redirect(route('income.index'));

        }
        catch (\Exception $e){
            return redirect(route('income.create'));

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('finanse/income.show', ['income' => Income::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('finanse/income.edit', ['income' => Income::find($id)]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        try {
            $this->validate($request,[

                'source' =>'required',
                'sum' => 'required',
                'comment' =>'required'

            ]);

            $incomes = Income::find($id);
            $incomes->fill($request->all());
            $incomes->save();

            return redirect(route('income.index'));
    } catch (\Exception $exception) {
            return view('finanse/income.edit', ['income' => Income::findOrFail($id)]);
    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $income= Income::find($id);
        $income->delete();
        return redirect(route('income.index'));


    }
    public function sum()
    {
        $income = DB::table('incomes')
            ->sum('sum');

        return view('finanse/income.sum', compact('income'));

    }


}
