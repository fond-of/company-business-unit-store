<?php
namespace FondOfSpryker\Zed\CompanyBusinessUnitStore;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

class CompanyBusinessUnitStoreDependencyProvider extends AbstractBundleDependencyProvider
{
    const PLUGINS_COMPANY_BUSINESS_UNIT_STORE_TRANSFER_EXPANDER = 'PLUGINS_COMPANY_BUSINESS_UNIT_STORE_TRANSFER_EXPANDER';

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    public function provideBusinessLayerDependencies(Container $container): Container
    {
        $container = parent::provideBusinessLayerDependencies($container);
        $container = $this->addCompanyBusinessUnitStoreTransferExpanderPlugins($container);

        return $container;
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    public function addCompanyBusinessUnitStoreTransferExpanderPlugins(Container $container): Container
    {
        $container[static::PLUGINS_COMPANY_BUSINESS_UNIT_STORE_TRANSFER_EXPANDER] = function (Container $container) {
            return $this->getCompanyBusinessUnitStoreTransferExpanderPlugins();
        };

        return $container;
    }

    /**
     * @return \FondOfSpryker\Zed\CompanyBusinessUnitStore\Dependency\Plugin\CompanyBusinessUnitStoreTransferExpanderPluginInterface[]
     */
    protected function getCompanyBusinessUnitStoreTransferExpanderPlugins(): array
    {
        return [];
    }
}
