<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\Mapper;

use Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer;

class CompanyBusinessUnitStoreMapper implements CompanyBusinessUnitStoreMapperInterface
{
    /**
     * @param array $companyBusinessUnitStore
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer
     */
    public function mapCompanyBusinessUnitStoreEntityToCompanyBusinessUnitStore(array $companyBusinessUnitStore): CompanyBusinessUnitStoreTransfer
    {
        $companyBusinessUnitStoreTransfer = (new CompanyBusinessUnitStoreTransfer())
            ->fromArray(
                $companyBusinessUnitStore,
                true
            );

        return $companyBusinessUnitStoreTransfer;
    }
}
