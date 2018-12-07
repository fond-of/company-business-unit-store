<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Business;

use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreAddressReader;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreAddressReaderInterface;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreAddressWriter;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreAddressWriterInterface;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreReader;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreReaderInterface;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreWriter;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreWriterInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \FondOfSpryker\Zed\CompanyBusinessUnitStore\CompanyBusinessUnitStoreConfig getConfig()
 * @method \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreEntityManagerInterface getEntityManager()
 * @method \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreRepositoryInterface getRepository()
 */
class CompanyBusinessUnitStoreBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreReaderInterface
     */
    public function createCompanyBusinessUnitStoreReader(): CompanyBusinessUnitStoreReaderInterface
    {
        return new CompanyBusinessUnitStoreReader($this->getRepository());
    }

    /**
     * @return \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreWriterInterface
     */
    public function createCompanyBusinessUnitStoreWriter(): CompanyBusinessUnitStoreWriterInterface
    {
        return new CompanyBusinessUnitStoreWriter($this->getEntityManager());
    }

    /**
     * @return \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreAddressReaderInterface
     */
    public function createCompanyBusinessUnitStoreAddressReader(): CompanyBusinessUnitStoreAddressReaderInterface
    {
        return new CompanyBusinessUnitStoreAddressReader($this->getRepository());
    }

    /**
     * @return \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreAddressWriterInterface
     */
    public function createCompanyBusinessUnitStoreAddressWriter(): CompanyBusinessUnitStoreAddressWriterInterface
    {
        return new CompanyBusinessUnitStoreAddressWriter($this->getEntityManager());
    }
}
