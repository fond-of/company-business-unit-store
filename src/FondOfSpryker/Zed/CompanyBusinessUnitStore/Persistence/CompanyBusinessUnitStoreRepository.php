<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence;

use Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer;
use Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

/**
 * @method \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStorePersistenceFactory getFactory()
 */
class CompanyBusinessUnitStoreRepository extends AbstractRepository implements CompanyBusinessUnitStoreRepositoryInterface
{
    /**
     * @param int $companyBusinessUnitStoreId
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer|null
     */
    public function findCompanyBusinessUnitStoreById(int $companyBusinessUnitStoreId): ?CompanyBusinessUnitStoreTransfer
    {
        $companyBusinessUnitStoreEntity = $this->getFactory()
            ->createFosCompanyBusinessUnitStoreQuery()
            ->findOneByIdCompanyBusinessUnitStore($companyBusinessUnitStoreId);

        if ($companyBusinessUnitStoreEntity === null) {
            return null;
        }

        return (new CompanyBusinessUnitStoreTransfer())->fromArray($companyBusinessUnitStoreEntity->toArray());
    }

    /**
     * @param int $companyBusinessUnitId
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer[]
     */
    public function findCompanyBusinessUnitStoresByCompanyBusinessUnitId(int $companyBusinessUnitId): array
    {
        $companyBusinessUnitStoreEntities = $this->getFactory()
            ->createFosCompanyBusinessUnitStoreQuery()
            ->findByFkCompanyBusinessUnit($companyBusinessUnitId);

        if (empty($companyBusinessUnitStoreEntities)) {
            return [];
        }

        $stores = [];
        foreach ($companyBusinessUnitStoreEntities as $companyBusinessUnitStoreEntity) {
            $stores[] = (new CompanyBusinessUnitStoreTransfer())->fromArray($companyBusinessUnitStoreEntity->toArray());
        }

        return $stores;
    }

    /**
     * @param int $companyBusinessUnitStoreAddressId
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer|null
     */
    public function findCompanyBusinessUnitStoreAddressById(int $companyBusinessUnitStoreAddressId): ?CompanyBusinessUnitStoreAddressTransfer
    {
        $companyBusinessUnitStoreAddressEntity = $this->getFactory()
            ->createFosCompanyBusinessUnitStoreAddressQuery()
            ->findOneByIdCompanyBusinessUnitStoreAddress($companyBusinessUnitStoreAddressId);

        if ($companyBusinessUnitStoreAddressEntity === null) {
            return null;
        }

        return (new CompanyBusinessUnitStoreAddressTransfer())->fromArray($companyBusinessUnitStoreAddressEntity->toArray());
    }
}
