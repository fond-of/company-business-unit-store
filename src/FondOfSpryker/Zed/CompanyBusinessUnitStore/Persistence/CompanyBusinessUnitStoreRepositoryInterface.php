<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence;

use Generated\Shared\Transfer\CompanyBusinessUnitStoreCollectionTransfer;

interface CompanyBusinessUnitStoreRepositoryInterface
{
    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreCollectionTransfer $companyBusinessUnitStoreCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreCollectionTransfer
     */
    public function getCompanyBusinessUnitStoreCollection(CompanyBusinessUnitStoreCollectionTransfer $companyBusinessUnitStoreCollectionTransfer): CompanyBusinessUnitStoreCollectionTransfer;
}
