<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence;

use Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer;
use Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer;

interface CompanyBusinessUnitStoreRepositoryInterface
{
    /**
     * @param int $companyBusinessUnitStoreId
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer|null
     */
    public function findCompanyBusinessUnitStoreById(int $companyBusinessUnitStoreId): ?CompanyBusinessUnitStoreTransfer;

    /**
     * @param int $companyBusinessUnitId
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer[]
     */
    public function findCompanyBusinessUnitStoresByCompanyBusinessUnitId(int $companyBusinessUnitId): array;

    /**
     * @param int $companyBusinessUnitStoreAddressId
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer|null
     */
    public function findCompanyBusinessUnitStoreAddressById(int $companyBusinessUnitStoreAddressId): ?CompanyBusinessUnitStoreAddressTransfer;
}
