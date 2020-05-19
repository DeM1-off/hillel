<?php


namespace App\Http\Repositories;


use App\Models\Pay;

class PayRepository implements PayRepositoryInterface
{
    /**
     * @var Pay
     */
    private $model;


    /**
     * PayRepository constructor.
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */

    public function __construct()
    {
        $this->model = app()->make(Pay::class);
    }

    /**
     * @param int $id
     * @return Pay|null
     *
     */
    public function findById(int $id): ?Pay
    {
        return $this->model->find($id);
    }

    public function findBySpending(string  $spending): ?Pay
    {
        return  $this->model->where('spending','=',$spending)->first();

    }

    public function save(Pay $pays, array $data)
    {
        $pays->spending = $data['spending'];
        $pays->sum = $data['sum'];
        $pays->comment = $data['comment'];
        $pays->save();
    }



}
