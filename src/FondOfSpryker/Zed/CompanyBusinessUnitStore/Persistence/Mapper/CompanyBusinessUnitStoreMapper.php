<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\Mapper;

use Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer;
use Generated\Shared\Transfer\FosCompanyBusinessUnitStoreEntityTransfer;

class CompanyBusinessUnitStoreMapper implements CompanyBusinessUnitStoreMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     * @param \Generated\Shared\Transfer\FosCompanyBusinessUnitStoreEntityTransfer $fosCompanyBusinessUnitStoreEntityTransfer
     *
     * @return \Generated\Shared\Transfer\FosCompanyBusinessUnitStoreEntityTransfer
     */
    public function mapCompanyBusinessUnitStoreTransferToEntityTransfer(
        CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer,
        FosCompanyBusinessUnitStoreEntityTransfer $fosCompanyBusinessUnitStoreEntityTransfer
    ): FosCompanyBusinessUnitStoreEntityTransfer {

        return $fosCompanyBusinessUnitStoreEntityTransfer->fromArray($companyBusinessUnitStoreTransfer->modifiedToArray(), true);
    }

    /**
     * @param \Generated\Shared\Transfer\FosCompanyBusinessUnitStoreEntityTransfer $fosCompanyBusinessUnitStoreEntityTransfer
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer
     */
    public function mapEntityTransferToCompanyBusinessUnitStoreTransfer(
        FosCompanyBusinessUnitStoreEntityTransfer $fosCompanyBusinessUnitStoreEntityTransfer,
        CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
    ): CompanyBusinessUnitStoreTransfer {
        return $companyBusinessUnitStoreTransfer->fromArray($fosCompanyBusinessUnitStoreEntityTransfer->toArray(), true);
    }
}
