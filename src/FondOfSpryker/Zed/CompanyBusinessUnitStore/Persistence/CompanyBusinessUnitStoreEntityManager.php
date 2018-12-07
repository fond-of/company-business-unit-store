<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence;

use Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer;
use Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractEntityManager;

/**
 * @method \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStorePersistenceFactory getFactory()
 */
class CompanyBusinessUnitStoreEntityManager extends AbstractEntityManager implements CompanyBusinessUnitStoreEntityManagerInterface
{
    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @throws \Propel\Runtime\Exception\PropelException
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer
     */
    public function saveCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): CompanyBusinessUnitStoreTransfer
    {
        $companyBusinessUnitStoreEntity = $this->getFactory()
            ->createFosCompanyBusinessUnitStoreQuery()
            ->filterByIdCompanyBusinessUnitStore($companyBusinessUnitStoreTransfer->getIdCompanyBusinessUnitStore())
            ->findOneOrCreate();

        $companyBusinessUnitStoreEntity->fromArray($companyBusinessUnitStoreTransfer->toArray());
        $companyBusinessUnitStoreEntity->save();
        $companyBusinessUnitStoreTransfer->fromArray($companyBusinessUnitStoreEntity->toArray(), true);

        return $companyBusinessUnitStoreTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return void
     */
    public function deleteCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): void
    {
        $this->getFactory()
            ->createFosCompanyBusinessUnitStoreQuery()
            ->findOneByIdCompanyBusinessUnitStore($companyBusinessUnitStoreTransfer->getIdCompanyBusinessUnitStore())
            ->delete();
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer
     *
     * @throws \Propel\Runtime\Exception\PropelException
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer
     */
    public function saveCompanyBusinessUnitStoreAddress(CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer): CompanyBusinessUnitStoreAddressTransfer
    {
        $companyBusinessUnitStoreAddressEntity = $this->getFactory()
            ->createFosCompanyBusinessUnitStoreAddressQuery()
            ->filterByIdCompanyBusinessUnitStoreAddress($companyBusinessUnitStoreAddressTransfer->getIdCompanyBusinessUnitStoreAddress())
            ->findOneOrCreate();

        $companyBusinessUnitStoreAddressEntity->fromArray($companyBusinessUnitStoreAddressTransfer->toArray());
        $companyBusinessUnitStoreAddressEntity->save();
        $companyBusinessUnitStoreAddressTransfer->fromArray($companyBusinessUnitStoreAddressEntity->toArray(), true);

        return $companyBusinessUnitStoreAddressTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return void
     */
    public function deleteCompanyBusinessUnitStoreAddress(CompanyBusinessUnitStoreAddressTransfer $companyBusinessUnitStoreAddressTransfer): void
    {
        $this->getFactory()
            ->createFosCompanyBusinessUnitStoreAddressQuery()
            ->findOneByIdCompanyBusinessUnitStoreAddress($companyBusinessUnitStoreAddressTransfer->getIdCompanyBusinessUnitStoreAddress())
            ->delete();
    }
}
