<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore;

use Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer;

interface CompanyBusinessUnitStoreWriterInterface
{
    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer
     */
    public function saveCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): CompanyBusinessUnitStoreTransfer;

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return void
     */
    public function deleteCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): void;
}
