<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\Mapper;

use Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer;

interface CompanyBusinessUnitStoreMapperInterface
{
    /**
     * @param array $companyBusinessUnitStore
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer
     */
    public function mapCompanyBusinessUnitStoreEntityToCompanyBusinessUnitStore(array $companyBusinessUnitStore): CompanyBusinessUnitStoreTransfer;
}
