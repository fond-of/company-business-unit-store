<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Business;

use Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer;
use Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreBusinessFactory getFactory()
 */
class CompanyBusinessUnitStoreFacade extends AbstractFacade implements CompanyBusinessUnitStoreFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer|null
     */
    public function getCompanyBusinessUnitStoreById(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): ?CompanyBusinessUnitStoreTransfer
    {
        return $this->getFactory()
            ->createCompanyBusinessUnitStoreReader()
            ->findCompanyBusinessUnitStoreById($companyBusinessUnitStoreTransfer->getIdCompanyBusinessUnitStore());
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer[]
     */
    public function findCompanyBusinessUnitStoresByCompanyBusinessUnitId(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): array
    {
        return $this->getFactory()
            ->createCompanyBusinessUnitStoreReader()
            ->findCompanyBusinessUnitStoresByCompanyBusinessUnitId($companyBusinessUnitStoreTransfer->getFkCompanyBusinessUnit());
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer
     */
    public function saveCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): CompanyBusinessUnitStoreTransfer
    {
        return $this->getFactory()
            ->createCompanyBusinessUnitStoreWriter()
            ->saveCompanyBusinessUnitStore($companyBusinessUnitStoreTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return void
     */
    public function deleteCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): void
    {
        $this->getFactory()
            ->createCompanyBusinessUnitStoreWriter()
            ->deleteCompanyBusinessUnitStore($companyBusinessUnitStoreTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer|null
     */
    public function getCompanyBusinessUnitStoreAddressById(CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer): ?CompanyBusinessUnitStoreAddressTransfer
    {
        return $this->getFactory()
            ->createCompanyBusinessUnitStoreAddressReader()
            ->findCompanyBusinessUnitStoreAddressById($companyBusinessUnitStoreAddressTransfer->getIdCompanyBusinessUnitStoreAddress());
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer
     */
    public function saveCompanyBusinessUnitStoreAddress(CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer): CompanyBusinessUnitStoreAddressTransfer
    {
        return $this->getFactory()
            ->createCompanyBusinessUnitStoreAddressWriter()
            ->saveCompanyBusinessUnitStoreAddress($companyBusinessUnitStoreAddressTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer
     *
     * @return void
     */
    public function deleteCompanyBusinessUnitStoreAddress(CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer): void
    {
        $this->getFactory()
            ->createCompanyBusinessUnitStoreAddressWriter()
            ->deleteCompanyBusinessUnitStoreAddress($companyBusinessUnitStoreAddressTransfer);
    }
}
