<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore;

use Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer;

interface CompanyBusinessUnitStoreReaderInterface
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
}
