<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Dependency\Plugin;

use Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer;

interface CompanyBusinessUnitStoreTransferExpanderPluginInterface
{
    /**
     * Specification
     * - Expands the provided companyBusinessUnitStore transfer object's data and returns the modified object.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer
     */
    public function expandTransfer(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): CompanyBusinessUnitStoreTransfer;
}
