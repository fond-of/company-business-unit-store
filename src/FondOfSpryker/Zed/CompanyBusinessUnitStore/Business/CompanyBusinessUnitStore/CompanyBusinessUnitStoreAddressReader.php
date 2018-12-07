<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore;

use FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreRepositoryInterface;
use Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer;

class CompanyBusinessUnitStoreAddressReader implements CompanyBusinessUnitStoreAddressReaderInterface
{
    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreRepositoryInterface
     */
    protected $companyBusinessUnitStoreRepository;

    /**
     * @param \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreRepositoryInterface $companyBusinessUnitStoreRepository
     */
    public function __construct(CompanyBusinessUnitStoreRepositoryInterface $companyBusinessUnitStoreRepository)
    {
        $this->companyBusinessUnitStoreRepository = $companyBusinessUnitStoreRepository;
    }

    /**
     * @param int $companyBusinessUnitStoreAddressId
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer|null
     */
    public function findCompanyBusinessUnitStoreAddressById(int $companyBusinessUnitStoreAddressId): ?CompanyBusinessUnitStoreAddressTransfer
    {
        return $this->companyBusinessUnitStoreRepository->findCompanyBusinessUnitStoreAddressById($companyBusinessUnitStoreAddressId);
    }
}
