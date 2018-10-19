<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Business;

use Generated\Shared\Transfer\CompanyBusinessUnitStoreCollectionTransfer;
use Generated\Shared\Transfer\CompanyBusinessUnitStoreResponseTransfer;
use Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer;

interface CompanyBusinessUnitStoreFacadeInterface
{
    /**
     * Specification:
     * - Get companyBusinessUnitStore.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer|null
     */
    public function getCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): ?CompanyBusinessUnitStoreTransfer;

    /**
     * Specification:
     * - Stores companyBusinessUnitStore data.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreResponseTransfer
     */
    public function addCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): CompanyBusinessUnitStoreResponseTransfer;

    /**
     * Specification:
     * - Update companyBusinessUnitStore data.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreResponseTransfer
     */
    public function updateCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): CompanyBusinessUnitStoreResponseTransfer;

    /**
     * Specification:
     * - Delete companyBusinessUnitStore data.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return bool
     */
    public function deleteCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): bool;

    /**
     * Specification:
     * - Find companyBusinessUnitStore by id
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer|null
     */
    public function findCompanyBusinessUnitStoreById(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): ?CompanyBusinessUnitStoreTransfer;

    /**
     * Specification:
     * - Find companyBusinessUnitStore by name
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer|null
     */
    public function findCompanyBusinessUnitStoreByName(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): ?CompanyBusinessUnitStoreTransfer;

    /**
     * Specification:
     * - Checks if the companyBusinessUnitStore exists.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return bool
     */
    public function hasCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): bool;

    /**
     * Specification:
     * - Get companyBusinessUnitStore collection
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreCollectionTransfer $CompanyBusinessUnitStoreCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreCollectionTransfer
     */
    public function getCompanyBusinessUnitStoreCollection(CompanyBusinessUnitStoreCollectionTransfer $CompanyBusinessUnitStoreCollectionTransfer): CompanyBusinessUnitStoreCollectionTransfer;
}
