<?php


namespace App\Http\Repositories;


use App\Models\Pay;

interface PayRepositoryInterface
{
    /**
     * @param int $id
     * @return Pay|null
     */
    public function findById(int $id): ?Pay;
    public function findBySpending(string $title): ?Pay;
    public function save(Pay $pay, array $data);
}
