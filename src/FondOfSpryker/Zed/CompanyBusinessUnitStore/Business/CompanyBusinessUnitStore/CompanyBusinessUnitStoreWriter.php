<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore;

use FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreEntityManagerInterface;
use Spryker\Zed\Kernel\Persistence\EntityManager\TransactionTrait;
use Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer;

class CompanyBusinessUnitStoreWriter implements CompanyBusinessUnitStoreWriterInterface
{
    use TransactionTrait;

    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreEntityManagerInterface
     */
    protected $companyBusinessUnitStoreEntityManager;

    /**
     * @param \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreEntityManagerInterface $companyBusinessUnitStoreEntityManager
     */
    public function __construct(CompanyBusinessUnitStoreEntityManagerInterface $companyBusinessUnitStoreEntityManager)
    {
        $this->companyBusinessUnitStoreEntityManager = $companyBusinessUnitStoreEntityManager;
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer
     */
    public function saveCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): CompanyBusinessUnitStoreTransfer
    {
        return $this->getTransactionHandler()->handleTransaction(function () use ($companyBusinessUnitStoreTransfer) {
            return $this->executeSaveCompanyBusinessUnitStoreTransaction($companyBusinessUnitStoreTransfer);
        });
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return void
     */
    public function deleteCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): void
    {
        $this->getTransactionHandler()->handleTransaction(function () use ($companyBusinessUnitStoreTransfer) {
            $this->executeCompanyBusinessUnitStoreTransaction($companyBusinessUnitStoreTransfer);
        });
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @throws \Propel\Runtime\Exception\PropelException
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer
     */
    protected function executeSaveCompanyBusinessUnitStoreTransaction(
        CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
    ): CompanyBusinessUnitStoreTransfer {

        return $this->companyBusinessUnitStoreEntityManager->saveCompanyBusinessUnitStore($companyBusinessUnitStoreTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return void
     */
    protected function executeCompanyBusinessUnitStoreTransaction(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): void
    {
        $this->companyBusinessUnitStoreEntityManager->deleteCompanyBusinessUnitStore($companyBusinessUnitStoreTransfer);
    }
}
