<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence;

use Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer;
use Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer;

interface CompanyBusinessUnitStoreEntityManagerInterface
{
    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @throws \Propel\Runtime\Exception\PropelException
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer
     */
    public function saveCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): CompanyBusinessUnitStoreTransfer;

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return void
     */
    public function deleteCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): void;

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer
     *
     * @throws \Propel\Runtime\Exception\PropelException
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer
     */
    public function saveCompanyBusinessUnitStoreAddress(CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer): CompanyBusinessUnitStoreAddressTransfer;

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return void
     */
    public function deleteCompanyBusinessUnitStoreAddress(CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer): void;
}
