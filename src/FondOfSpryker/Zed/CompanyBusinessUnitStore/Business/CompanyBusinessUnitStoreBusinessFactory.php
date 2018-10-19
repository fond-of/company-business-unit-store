<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Business;

use FondOfSpryker\Zed\CompanyBusinessUnitStore\CompanyBusinessUnitStoreDependencyProvider;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStore;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreInterface;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreReader;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreReaderInterface;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreExpander\CompanyBusinessUnitStoreExpander;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreExpander\CompanyBusinessUnitStoreExpanderInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \FondOfSpryker\Zed\CompanyBusinessUnitStore\CompanyBusinessUnitStoreConfig getConfig()
 * @method \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreQueryContainerInterface getQueryContainer()
 * @method \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreEntityManagerInterface getEntityManager()
 * @method \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreRepositoryInterface getRepository()
 */
class CompanyBusinessUnitStoreBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreInterface
     */
    public function createCompanyBusinessUnitStore(): CompanyBusinessUnitStoreInterface
    {
        $config = $this->getConfig();

        $companyBusinessUnitStore = new CompanyBusinessUnitStore(
            $this->getQueryContainer(),
            $config,
            $this->createCompanyBusinessUnitStoreExpander()
        );

        return $companyBusinessUnitStore;
    }

    /**
     * @return \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreReaderInterface
     */
    public function createCompanyBusinessUnitStoreReader(): CompanyBusinessUnitStoreReaderInterface
    {
        return new CompanyBusinessUnitStoreReader(
            $this->getEntityManager(),
            $this->getRepository(),
            $this->createCompanyBusinessUnitStoreExpander()
        );
    }

    /**
     * @return \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreExpander\CompanyBusinessUnitStoreExpanderInterface
     */
    public function createCompanyBusinessUnitStoreExpander(): CompanyBusinessUnitStoreExpanderInterface
    {
        return new CompanyBusinessUnitStoreExpander(
            $this->getCompanyBusinessUnitStoreTransferExpanderPlugins()
        );
    }

    /**
     * @return \FondOfSpryker\Zed\CompanyBusinessUnitStore\Dependency\Plugin\CompanyBusinessUnitStoreTransferExpanderPluginInterface[]
     */
    protected function getCompanyBusinessUnitStoreTransferExpanderPlugins(): array
    {
        return $this->getProvidedDependency(CompanyBusinessUnitStoreDependencyProvider::PLUGINS_COMPANY_BUSINESS_UNIT_STORE_TRANSFER_EXPANDER);
    }
}
