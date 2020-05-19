<?php


namespace App\Http\Services;


use App\Http\Repositories\PayRepositoryInterface;
use App\Models\Pay;
use Illuminate\Database\Eloquent\Collection;

class PayService implements PayServiceInterface
{
    /**
     * @var PayRepositoryInterface
     */
    private $payRepository;

    /**
     * PayService constructor.
     * @param PayRepositoryInterface $payRepository
     */
    public function __construct(PayRepositoryInterface $payRepository)
    {
        $this->payRepository = $payRepository;
    }


    /**
     * @param int $id
     * @return Pay
     * @throws \Exception
     */

    public function getPayById(int $id): Pay
    {
        $pays = $this->payRepository->findById($id);
        if(!$pays) {
            throw new \Exception('Pay not found');
        }
        return   $pays;
    }

    /**
     * @param int|null $page
     * @return Collection
     */

    public function getAllPosts(int $page = null): Collection
    {
        // TODO: Implement getAllPosts() method.
    }

    /**
     * @param array $payData
     * @return int
     */

    public function createPay(array $payData): int
    {
        $existedPay = $this->payRepository->findBySpending($payData['spending']);
        if ($existedPay) {
            throw new \Exception('Post already exists with spending');
        }
    }

    /**
     * @param int $id
     * @param array $payData
     * @return int
     */

    public function updatePay(int $id, array $payData): int
    {
        $pays = $this->payRepository->findById($id);
        $this->payRepository->save($pays, $payData);

        return $pays->id;
    }

    public function deletePost(int $id): void
    {
        // TODO: Implement deletePost() method.
    }

}
