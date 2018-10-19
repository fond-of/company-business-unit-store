<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreExpander;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Dependency\Plugin\CompanyBusinessUnitStoreTransferExpanderPluginInterface;

class CompanyBusinessUnitStoreExpanderTest extends Unit
{
    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreExpander\CompanyBusinessUnitStoreExpanderInterface
     */
    protected $companyBusinessUnitStoreExpander;

    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Dependency\Plugin\CompanyBusinessUnitStoreTransferExpanderPluginInterface|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $companyBusinessUnitStoreExpanderPluginMock;

    /**
     * @var \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $companyBusinessUnitStoreTransferMock;

    /**
     * @return void
     */
    protected function _before(): void
    {
        parent::_before();

        $this->companyBusinessUnitStoreExpanderPluginMock = $this->getMockForAbstractClass(CompanyBusinessUnitStoreTransferExpanderPluginInterface::class);
        $this->companyBusinessUnitStoreExpander = new CompanyBusinessUnitStoreExpander([$this->companyBusinessUnitStoreExpanderPluginMock]);

        $this->companyBusinessUnitStoreTransferMock = $this->getMockBuilder('\Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer')
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * @return void
     */
    public function testExpand()
    {
        $this->companyBusinessUnitStoreExpanderPluginMock
            ->expects($this->once())
            ->method('expandTransfer')
            ->with($this->companyBusinessUnitStoreTransferMock)
            ->willReturn($this->companyBusinessUnitStoreTransferMock);

        $this->companyBusinessUnitStoreExpander->expand($this->companyBusinessUnitStoreTransferMock);
    }
}
