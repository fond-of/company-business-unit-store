<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Business;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\CompanyBusinessUnitStoreConfig;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\CompanyBusinessUnitStoreDependencyProvider;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreInterface;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreReaderInterface;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreExpander\CompanyBusinessUnitStoreExpanderInterface;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreEntityManager;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreQueryContainer;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreRepository;
use Spryker\Zed\Kernel\Container;

class CompanyBusinessUnitStoreBusinessFactoryTest extends Unit
{
    /**
     * @var \Spryker\Zed\Kernel\Container|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $containerMock;

    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreBusinessFactory
     */
    protected $companyBusinessUnitStoreBusinessFactory;

    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreRepository|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $repositoryMock;

    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreEntityManager|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $entityManagerMock;

    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreQueryContainer|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $queryContainerMock;

    /**
     * @return void
     */
    protected function _before(): void
    {
        parent::_before();

        $this->containerMock = $this->getMockBuilder(Container::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->containerMock->expects($this->atLeastOnce())
            ->method('offsetGet')
            ->with(CompanyBusinessUnitStoreDependencyProvider::PLUGINS_COMPANY_BUSINESS_UNIT_STORE_TRANSFER_EXPANDER)
            ->willReturn([]);

        $this->queryContainerMock = $this->getMockBuilder(CompanyBusinessUnitStoreQueryContainer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->repositoryMock = $this->getMockBuilder(CompanyBusinessUnitStoreRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->entityManagerMock = $this->getMockBuilder(CompanyBusinessUnitStoreEntityManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->companyBusinessUnitStoreBusinessFactory = new CompanyBusinessUnitStoreBusinessFactory();
        $this->companyBusinessUnitStoreBusinessFactory->setConfig(new CompanyBusinessUnitStoreConfig());
        $this->companyBusinessUnitStoreBusinessFactory->setContainer($this->containerMock);
        $this->companyBusinessUnitStoreBusinessFactory->setRepository($this->repositoryMock);
        $this->companyBusinessUnitStoreBusinessFactory->setEntityManager($this->entityManagerMock);
        $this->companyBusinessUnitStoreBusinessFactory->setQueryContainer($this->queryContainerMock);
    }

    /**
     * @return void
     */
    public function testCreateCompanyBusinessUnitStore(): void
    {
        $companyBusinessUnitStore = $this->companyBusinessUnitStoreBusinessFactory->createCompanyBusinessUnitStore();
        $this->assertInstanceOf(CompanyBusinessUnitStoreInterface::class, $companyBusinessUnitStore);
    }

    /**
     * @return void
     */
    public function testCreateReader(): void
    {
        $reader = $this->companyBusinessUnitStoreBusinessFactory->createCompanyBusinessUnitStoreReader();
        $this->assertInstanceOf(CompanyBusinessUnitStoreReaderInterface::class, $reader);
    }

    /**
     * @return void
     */
    public function testCreateCompanyBusinessUnitStoreExpander(): void
    {
        $expander = $this->companyBusinessUnitStoreBusinessFactory->createCompanyBusinessUnitStoreExpander();
        $this->assertInstanceOf(CompanyBusinessUnitStoreExpanderInterface::class, $expander);
    }
}
