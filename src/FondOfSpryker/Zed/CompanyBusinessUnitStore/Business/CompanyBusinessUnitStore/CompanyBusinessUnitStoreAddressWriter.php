<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore;

use FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreEntityManagerInterface;
use Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer;
use Spryker\Zed\Kernel\Persistence\EntityManager\TransactionTrait;

class CompanyBusinessUnitStoreAddressWriter implements CompanyBusinessUnitStoreAddressWriterInterface
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
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer
     */
    public function saveCompanyBusinessUnitStoreAddress(CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer): CompanyBusinessUnitStoreAddressTransfer
    {
        return $this->getTransactionHandler()->handleTransaction(function () use ($companyBusinessUnitStoreAddressTransfer) {
            return $this->executeSaveCompanyBusinessUnitStoreAddressTransaction($companyBusinessUnitStoreAddressTransfer);
        });
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer
     *
     * @return void
     */
    public function deleteCompanyBusinessUnitStoreAddress(CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer): void
    {
        $this->getTransactionHandler()->handleTransaction(function () use ($companyBusinessUnitStoreAddressTransfer) {
            $this->executeCompanyBusinessUnitStoreAddressTransaction($companyBusinessUnitStoreAddressTransfer);
        });
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer
     *
     * @throws \Propel\Runtime\Exception\PropelException
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer
     */
    protected function executeSaveCompanyBusinessUnitStoreAddressTransaction(
        CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer
    ): CompanyBusinessUnitStoreAddressTransfer {

        return $this->companyBusinessUnitStoreEntityManager->saveCompanyBusinessUnitStoreAddress($companyBusinessUnitStoreAddressTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return void
     */
    protected function executeCompanyBusinessUnitStoreAddressTransaction(CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer): void
    {
        $this->companyBusinessUnitStoreEntityManager->deleteCompanyBusinessUnitStoreAddress($companyBusinessUnitStoreAddressTransfer);
    }
}
