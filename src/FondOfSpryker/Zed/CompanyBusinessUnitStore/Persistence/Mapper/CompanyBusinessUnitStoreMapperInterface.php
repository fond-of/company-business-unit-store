<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\Mapper;

use Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer;
use Generated\Shared\Transfer\FosCompanyBusinessUnitStoreEntityTransfer;

interface CompanyBusinessUnitStoreMapperInterface
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
    ): FosCompanyBusinessUnitStoreEntityTransfer;

    /**
     * @param \Generated\Shared\Transfer\FosCompanyBusinessUnitStoreEntityTransfer $fosCompanyBusinessUnitStoreEntityTransfer
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer
     */
    public function mapEntityTransferToCompanyBusinessUnitStoreTransfer(
        FosCompanyBusinessUnitStoreEntityTransfer $fosCompanyBusinessUnitStoreEntityTransfer,
        CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
    ): CompanyBusinessUnitStoreTransfer;
}
