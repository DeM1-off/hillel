<?php


namespace App\Http\Services;


use App\Models\Pay;
use Illuminate\Database\Eloquent\Collection;

interface PayServiceInterface
{

    /**
     * @param int $id
     * @throws \Exception
     * @return Pay
     */
    public function getPayById( int $id): Pay;

    /**
     * @throws \Exception
     * @param int|null $page
     * @return Collection
     */
    public function getAllPosts(int $page = null): Collection;


    /**
     * @throws \Exception
     * @param array $payData
     * @return int
     */
    public function createPay(array $payData): int ;

    /**
     * @throws \Exception
     * @param int $id
     * @param array $payData
     * @return int
     */
    public function updatePay(int $id, array $payData): int;

    /**
     * @throws \Exception
     * @param int $id
     */
    public function deletePost(int $id): void;



}
