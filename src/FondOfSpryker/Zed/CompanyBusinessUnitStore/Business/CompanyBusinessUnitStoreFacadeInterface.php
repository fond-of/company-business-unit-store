<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Business;

use Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer;
use Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer;

interface CompanyBusinessUnitStoreFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer|null
     */
    public function getCompanyBusinessUnitStoreById(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): ?CompanyBusinessUnitStoreTransfer;

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer[]
     */
    public function findCompanyBusinessUnitStoresByCompanyBusinessUnitId(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): array;

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

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer|null
     */
    public function getCompanyBusinessUnitStoreAddressById(CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer): ?CompanyBusinessUnitStoreAddressTransfer;

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer
     */
    public function saveCompanyBusinessUnitStoreAddress(CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer): CompanyBusinessUnitStoreAddressTransfer;

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer
     *
     * @return void
     */
    public function deleteCompanyBusinessUnitStoreAddress(CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer): void;
}
