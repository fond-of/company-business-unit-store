<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore;

use Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer;

interface CompanyBusinessUnitStoreAddressReaderInterface
{
    /**
     * @param int $companyBusinessUnitStoreAddressId
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer|null
     */
    public function findCompanyBusinessUnitStoreAddressById(int $companyBusinessUnitStoreAddressId): ?CompanyBusinessUnitStoreAddressTransfer;
}
