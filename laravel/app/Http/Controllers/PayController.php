<?php

namespace App\Http\Controllers;


use App\Http\Services\PayServiceInterface;
use App\Models\Pay;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PayRequest;


class PayController extends Controller
{

    /**
     * @var PayServiceInterface
     */
    private $payService;

    public function __construct(PayServiceInterface $payService)
    {
        $this->payService = $payService;
    }

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
    public function store(PayRequest $request)
    {

            $pays = new Pay();
            $pays->fill($request->all());
            $pays ->save();
            return redirect(route('pay.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $pays = $this->fetchPayOrFail($id);

        return view('finanse/pay.show', compact('pays'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pay = $this->fetchPayOrFail($id);

        return view('finanse/pay.edit', compact('pay'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PayRequest $request, $id)
    {


        $this->payService->updatePay($id, $request->all());

         return redirect(route('pay.index'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $pays = Pay::findOrFail($id);

        $pays->delete();
        return redirect(route('pay.index'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sum()
    {
        $pays = DB::table('pays')
            ->sum('sum');

        return view('finanse/pay.sum', compact('pays'));

    }


    private function fetchPayOrFail(int $id)
    {
        try {
            return $this->payService->getPayById($id);

        }
        catch (\Exception $e){
            abort(Response::HTTP_NOT_FOUND,$e->getMessage());
        }

    }

}
