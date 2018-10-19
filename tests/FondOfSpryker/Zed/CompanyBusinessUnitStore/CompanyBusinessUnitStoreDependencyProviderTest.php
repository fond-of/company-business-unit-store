<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore;

use Closure;
use Codeception\Test\Unit;
use Orm\Zed\Product\Persistence\SpyProduct;
use Spryker\Client\ZedRequest\Client\ZedClient;
use Spryker\Zed\Kernel\Container;
use Spryker\Zed\ZedNavigation\Business\Exception\ZedNavigationXmlException;

class CompanyBusinessUnitStoreDependencyProviderTest extends Unit
{
    /**
     * @var \Spryker\Zed\Kernel\Container|\PHPUnit\Framework\MockObject\MockObject|null
     */
    protected $containerMock;

    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\CompanyBusinessUnitStoreDependencyProvider
     */
    protected $companyBusinessUnitStoreDependencyProvider;

    /**
     * @return void
     */
    protected function _before(): void
    {
        parent::_before();

        new CompanyBusinessUnitStoreConfig();

        $this->companyBusinessUnitStoreDependencyProvider = new CompanyBusinessUnitStoreDependencyProvider();
        $this->containerMock = $this->getMockBuilder(Container::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * @return void
     */
    public function testProvideBusinessLayerDependencies(): void
    {
        $this->containerMock->expects($this->atLeastOnce())
            ->method('offsetSet')
            ->with(
                CompanyBusinessUnitStoreDependencyProvider::PLUGINS_COMPANY_BUSINESS_UNIT_STORE_TRANSFER_EXPANDER,
                $this->isInstanceOf(Closure::class)
            );

        $this->companyBusinessUnitStoreDependencyProvider->provideBusinessLayerDependencies($this->containerMock);
    }
}
