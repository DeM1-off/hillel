<?php

namespace App\Http\Controllers;


use App\Models\Income;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\IncomeRequest;

class IncomeController extends Controller
{

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
    public function store(IncomeRequest $request)
    {
        Income::create($request->all());

        return redirect(route('income.index'));
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
    public function update(IncomeRequest $request,  $id)
    {
            Income::find($id)->fill($request->all())->save();

            return redirect(route('income.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Income::find($id)->delete();

        return redirect(route('income.index'));

    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application
     */
    public function sum()
    {
        $income = DB::table('incomes')->sum('sum');

        return view('finanse/income.sum', compact('income'));

    }


}
