<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore;

use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreExpander\CompanyBusinessUnitStoreExpanderInterface;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreEntityManagerInterface;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreRepositoryInterface;
use Generated\Shared\Transfer\CompanyBusinessUnitStoreCollectionTransfer;

class CompanyBusinessUnitStoreReader implements CompanyBusinessUnitStoreReaderInterface
{
    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreEntityManagerInterface
     */
    protected $companyBusinessUnitStoreEntityManager;

    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreRepositoryInterface
     */
    protected $companyBusinessUnitStoreRepository;

    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreExpander\CompanyBusinessUnitStoreExpanderInterface
     */
    protected $companyBusinessUnitStoreExpander;

    /**
     * @param \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreEntityManagerInterface $companyBusinessUnitStoreEntityManager
     * @param \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreRepositoryInterface $companyBusinessUnitStoreRepository
     * @param \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreExpander\CompanyBusinessUnitStoreExpanderInterface $companyBusinessUnitStoreExpander
     */
    public function __construct(
        CompanyBusinessUnitStoreEntityManagerInterface $companyBusinessUnitStoreEntityManager,
        CompanyBusinessUnitStoreRepositoryInterface $companyBusinessUnitStoreRepository,
        CompanyBusinessUnitStoreExpanderInterface $companyBusinessUnitStoreExpander
    ) {
        $this->companyBusinessUnitStoreEntityManager = $companyBusinessUnitStoreEntityManager;
        $this->companyBusinessUnitStoreRepository = $companyBusinessUnitStoreRepository;
        $this->companyBusinessUnitStoreExpander = $companyBusinessUnitStoreExpander;
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreCollectionTransfer $companyBusinessUnitStoreCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreCollectionTransfer
     */
    public function getCompanyBusinessUnitStoreCollection(CompanyBusinessUnitStoreCollectionTransfer $companyBusinessUnitStoreCollectionTransfer): CompanyBusinessUnitStoreCollectionTransfer
    {
        $companyBusinessUnitStoreCollectionTransfer = $this->companyBusinessUnitStoreRepository->getCompanyBusinessUnitStoreCollection($companyBusinessUnitStoreCollectionTransfer);

        if (!empty($companyBusinessUnitStoreCollectionTransfer->getCompanyBusinessUnitStores())) {
            foreach ($companyBusinessUnitStoreCollectionTransfer->getCompanyBusinessUnitStores() as $companyBusinessUnitStoreTransfer) {
                $this->companyBusinessUnitStoreExpander->expand($companyBusinessUnitStoreTransfer);
            }
        }

        return $companyBusinessUnitStoreCollectionTransfer;
    }
}
