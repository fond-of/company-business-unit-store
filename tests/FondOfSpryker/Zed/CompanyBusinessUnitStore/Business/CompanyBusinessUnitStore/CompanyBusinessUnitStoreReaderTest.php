<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreExpander\CompanyBusinessUnitStoreExpanderInterface;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreEntityManagerInterface;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreRepositoryInterface;

class CompanyBusinessUnitStoreReaderTest extends Unit
{
    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreReaderInterface
     */
    protected $companyBusinessUnitStoreReader;

    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreRepositoryInterface|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $companyBusinessUnitStoreRepositoryMock;

    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreEntityManagerInterface|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $companyBusinessUnitStoreEntityManagerMock;

    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreExpander\CompanyBusinessUnitStoreExpanderInterface|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $companyBusinessUnitStoreExpanderMock;

    /**
     * @return void
     */
    protected function _before(): void
    {
        $this->companyBusinessUnitStoreRepositoryMock = $this->getMockForAbstractClass(CompanyBusinessUnitStoreRepositoryInterface::class);
        $this->companyBusinessUnitStoreEntityManagerMock = $this->getMockForAbstractClass(CompanyBusinessUnitStoreEntityManagerInterface::class);
        $this->companyBusinessUnitStoreExpanderMock = $this->getMockForAbstractClass(CompanyBusinessUnitStoreExpanderInterface::class);

        $this->companyBusinessUnitStoreReader = new CompanyBusinessUnitStoreReader(
            $this->companyBusinessUnitStoreEntityManagerMock,
            $this->companyBusinessUnitStoreRepositoryMock,
            $this->companyBusinessUnitStoreExpanderMock
        );
    }

    /**
     * @return void
     */
    public function testGetCompanyBusinessUnitStoreCollection(): void
    {
        /** @var \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreCollectionTransfer */
        $companyBusinessUnitStoreTransfer = $this->getMockBuilder('\Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer')
            ->disableOriginalConstructor()
            ->getMock();

        /** @var \Generated\Shared\Transfer\CompanyBusinessUnitStoreCollectionTransfer $companyBusinessUnitStoreCollectionTransfer */
        $companyBusinessUnitStoreCollectionTransfer = $this->getMockBuilder('\Generated\Shared\Transfer\CompanyBusinessUnitStoreCollectionTransfer')
            ->disableOriginalConstructor()
            ->getMock();

        $companyBusinessUnitStoreCollectionTransfer->expects($this->exactly(2))
            ->method('getCompanyBusinessUnitStores')
            ->willReturn([$companyBusinessUnitStoreTransfer, $companyBusinessUnitStoreTransfer, $companyBusinessUnitStoreTransfer]);

        $this->companyBusinessUnitStoreRepositoryMock
            ->expects($this->once())
            ->method('getCompanyBusinessUnitStoreCollection')
            ->with($companyBusinessUnitStoreCollectionTransfer)
            ->willReturn($companyBusinessUnitStoreCollectionTransfer);

        $this->companyBusinessUnitStoreExpanderMock
            ->expects($this->exactly(3))
            ->method('expand')
            ->with($companyBusinessUnitStoreTransfer);

        $this->companyBusinessUnitStoreReader->getCompanyBusinessUnitStoreCollection($companyBusinessUnitStoreCollectionTransfer);
    }
}
