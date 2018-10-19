<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore;

use Generated\Shared\Transfer\CompanyBusinessUnitStoreCollectionTransfer;

interface CompanyBusinessUnitStoreReaderInterface
{
    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreCollectionTransfer $companyBusinessUnitStoreCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreCollectionTransfer
     */
    public function getCompanyBusinessUnitStoreCollection(CompanyBusinessUnitStoreCollectionTransfer $companyBusinessUnitStoreCollectionTransfer): CompanyBusinessUnitStoreCollectionTransfer;
}
