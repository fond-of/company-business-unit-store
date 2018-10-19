<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Business;

use Generated\Shared\Transfer\CompanyBusinessUnitStoreCollectionTransfer;
use Generated\Shared\Transfer\CompanyBusinessUnitStoreResponseTransfer;
use Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreBusinessFactory getFactory()
 */
class CompanyBusinessUnitStoreFacade extends AbstractFacade implements CompanyBusinessUnitStoreFacadeInterface
{
    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer|null
     */
    public function getCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): ?CompanyBusinessUnitStoreTransfer
    {
        return $this->getFactory()
            ->createCompanyBusinessUnitStore()
            ->get($companyBusinessUnitStoreTransfer);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreResponseTransfer
     */
    public function addCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): CompanyBusinessUnitStoreResponseTransfer
    {
        return $this->getFactory()
            ->createCompanyBusinessUnitStore()
            ->add($companyBusinessUnitStoreTransfer);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreResponseTransfer
     */
    public function updateCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): CompanyBusinessUnitStoreResponseTransfer
    {
        return $this->getFactory()
            ->createCompanyBusinessUnitStore()
            ->update($companyBusinessUnitStoreTransfer);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return bool
     */
    public function deleteCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): bool
    {
        return $this->getFactory()
            ->createCompanyBusinessUnitStore()
            ->delete($companyBusinessUnitStoreTransfer);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer|null
     */
    public function findCompanyBusinessUnitStoreById(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): ?CompanyBusinessUnitStoreTransfer
    {
        return $this->getFactory()
            ->createCompanyBusinessUnitStore()
            ->findById($companyBusinessUnitStoreTransfer);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer|null
     */
    public function findCompanyBusinessUnitStoreByName(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): ?CompanyBusinessUnitStoreTransfer
    {
        return $this->getFactory()
            ->createCompanyBusinessUnitStore()
            ->findByName($companyBusinessUnitStoreTransfer);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer|null
     */
    public function hasCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): bool
    {
        return $this->getFactory()
            ->createCompanyBusinessUnitStore()
            ->hasCompanyBusinessUnitStore($companyBusinessUnitStoreTransfer);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreCollectionTransfer $CompanyBusinessUnitStoreCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreCollectionTransfer
     */
    public function getCompanyBusinessUnitStoreCollection(CompanyBusinessUnitStoreCollectionTransfer $CompanyBusinessUnitStoreCollectionTransfer): CompanyBusinessUnitStoreCollectionTransfer
    {
        return $this->getFactory()
            ->createCompanyBusinessUnitStoreReader()
            ->getCompanyBusinessUnitStoreCollection($CompanyBusinessUnitStoreCollectionTransfer);
    }
}
