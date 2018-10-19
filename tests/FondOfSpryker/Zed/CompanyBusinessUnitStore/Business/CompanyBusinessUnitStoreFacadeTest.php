<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Business;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreInterface;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreReaderInterface;
use Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer;

class CompanyBusinessUnitStoreFacadeTest extends Unit
{
    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreFacadeInterface
     */
    protected $companyBusinessUnitStoreDependencyProviderTestFacade;

    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreInterface|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $companyBusinessUnitStoreDependencyProviderTestMock;

    /**
     * @var \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $companyBusinessUnitStoreDependencyProviderTestTransferMock;

    /**
     * @var \Generated\Shared\Transfer\CompanyBusinessUnitStoreResponseTransfer|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $companyBusinessUnitStoreDependencyProviderTestResponseTransferMock;

    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreBusinessFactory|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $companyBusinessUnitStoreDependencyProviderTestBusinessFactoryMock;

    /**
     * @return void
     */
    protected function _before(): void
    {
        parent::_before();

        $this->companyBusinessUnitStoreDependencyProviderTestTransferMock = $this->getMockBuilder('\Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer')
            ->disableOriginalConstructor()
            ->getMock();

        $this->companyBusinessUnitStoreDependencyProviderTestResponseTransferMock = $this->getMockBuilder('\Generated\Shared\Transfer\CompanyBusinessUnitStoreResponseTransfer')
            ->disableOriginalConstructor()
            ->getMock();

        $this->companyBusinessUnitStoreDependencyProviderTestMock = $this->getMockForAbstractClass(CompanyBusinessUnitStoreInterface::class);

        $this->companyBusinessUnitStoreDependencyProviderTestBusinessFactoryMock = $this->getMockBuilder(CompanyBusinessUnitStoreBusinessFactory::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->companyBusinessUnitStoreDependencyProviderTestFacade = new CompanyBusinessUnitStoreFacade();
        $this->companyBusinessUnitStoreDependencyProviderTestFacade->setFactory($this->companyBusinessUnitStoreDependencyProviderTestBusinessFactoryMock);
    }

    /**
     * @return void
     */
    public function testGetCompanyBusinessUnitStore(): void
    {
        $this->companyBusinessUnitStoreDependencyProviderTestMock
            ->expects($this->once())
            ->method('get')
            ->with($this->companyBusinessUnitStoreDependencyProviderTestTransferMock)
            ->willReturn($this->companyBusinessUnitStoreDependencyProviderTestTransferMock);

        $this->companyBusinessUnitStoreDependencyProviderTestBusinessFactoryMock
            ->expects($this->once())
            ->method('createCompanyBusinessUnitStore')
            ->willReturn($this->companyBusinessUnitStoreDependencyProviderTestMock);

        $this->companyBusinessUnitStoreDependencyProviderTestFacade->getCompanyBusinessUnitStore($this->companyBusinessUnitStoreDependencyProviderTestTransferMock);
    }

    /**
     * @return void
     */
    public function testAddCompanyBusinessUnitStore(): void
    {
        $this->companyBusinessUnitStoreDependencyProviderTestMock
            ->expects($this->once())
            ->method('add')
            ->with($this->companyBusinessUnitStoreDependencyProviderTestTransferMock)
            ->willReturn($this->companyBusinessUnitStoreDependencyProviderTestResponseTransferMock);

        $this->companyBusinessUnitStoreDependencyProviderTestBusinessFactoryMock
            ->expects($this->once())
            ->method('createCompanyBusinessUnitStore')
            ->willReturn($this->companyBusinessUnitStoreDependencyProviderTestMock);

        $this->companyBusinessUnitStoreDependencyProviderTestFacade->addCompanyBusinessUnitStore($this->companyBusinessUnitStoreDependencyProviderTestTransferMock);
    }

    /**
     * @return void
     */
    public function testDeleteCompanyBusinessUnitStore(): void
    {
        $this->companyBusinessUnitStoreDependencyProviderTestMock
            ->expects($this->once())
            ->method('delete')
            ->with($this->companyBusinessUnitStoreDependencyProviderTestTransferMock)
            ->willReturn(true);

        $this->companyBusinessUnitStoreDependencyProviderTestBusinessFactoryMock
            ->expects($this->once())
            ->method('createCompanyBusinessUnitStore')
            ->willReturn($this->companyBusinessUnitStoreDependencyProviderTestMock);

        $this->companyBusinessUnitStoreDependencyProviderTestFacade->deleteCompanyBusinessUnitStore($this->companyBusinessUnitStoreDependencyProviderTestTransferMock);
    }

    /**
     * @return void
     */
    public function testFindCompanyBusinessUnitStoreById(): void
    {
        $this->companyBusinessUnitStoreDependencyProviderTestBusinessFactoryMock
            ->expects($this->once())
            ->method('createCompanyBusinessUnitStore')
            ->willReturn($this->companyBusinessUnitStoreDependencyProviderTestMock);

        $this->companyBusinessUnitStoreDependencyProviderTestMock
            ->expects($this->once())
            ->method('findById')
            ->with($this->companyBusinessUnitStoreDependencyProviderTestTransferMock)
            ->willReturn($this->companyBusinessUnitStoreDependencyProviderTestTransferMock);

        $this->assertInstanceOf(CompanyBusinessUnitStoreTransfer::class, $this->companyBusinessUnitStoreDependencyProviderTestFacade->findCompanyBusinessUnitStoreById($this->companyBusinessUnitStoreDependencyProviderTestTransferMock));
    }

    /**
     * @return void
     */
    public function testFindCompanyBusinessUnitStoreByIdReturnNull(): void
    {
        $this->companyBusinessUnitStoreDependencyProviderTestBusinessFactoryMock
            ->expects($this->once())
            ->method('createCompanyBusinessUnitStore')
            ->willReturn($this->companyBusinessUnitStoreDependencyProviderTestMock);

        $this->companyBusinessUnitStoreDependencyProviderTestMock
            ->expects($this->atLeastOnce())
            ->method('findById')
            ->with($this->companyBusinessUnitStoreDependencyProviderTestTransferMock)
            ->willReturn(null);

        $this->assertNull($this->companyBusinessUnitStoreDependencyProviderTestFacade->findCompanyBusinessUnitStoreById($this->companyBusinessUnitStoreDependencyProviderTestTransferMock));
    }

    /**
     * @return void
     */
    public function testFindCompanyBusinessUnitStoreByName(): void
    {
        $this->companyBusinessUnitStoreDependencyProviderTestBusinessFactoryMock
            ->expects($this->once())
            ->method('createCompanyBusinessUnitStore')
            ->willReturn($this->companyBusinessUnitStoreDependencyProviderTestMock);

        $this->companyBusinessUnitStoreDependencyProviderTestMock
            ->expects($this->once())
            ->method('findByName')
            ->with($this->companyBusinessUnitStoreDependencyProviderTestTransferMock)
            ->willReturn($this->companyBusinessUnitStoreDependencyProviderTestTransferMock);

        $this->assertInstanceOf(CompanyBusinessUnitStoreTransfer::class, $this->companyBusinessUnitStoreDependencyProviderTestFacade->findCompanyBusinessUnitStoreByName($this->companyBusinessUnitStoreDependencyProviderTestTransferMock));
    }

    /**
     * @return void
     */
    public function testFindCompanyBusinessUnitStoreByNameReturnNull(): void
    {
        $this->companyBusinessUnitStoreDependencyProviderTestBusinessFactoryMock
            ->expects($this->once())
            ->method('createCompanyBusinessUnitStore')
            ->willReturn($this->companyBusinessUnitStoreDependencyProviderTestMock);

        $this->companyBusinessUnitStoreDependencyProviderTestMock
            ->expects($this->atLeastOnce())
            ->method('findByName')
            ->with($this->companyBusinessUnitStoreDependencyProviderTestTransferMock)
            ->willReturn(null);

        $this->assertNull($this->companyBusinessUnitStoreDependencyProviderTestFacade->findCompanyBusinessUnitStoreByName($this->companyBusinessUnitStoreDependencyProviderTestTransferMock));
    }

    /**
     * @return void
     */
    public function testHasCompanyBusinessUnitStore(): void
    {
        $this->companyBusinessUnitStoreDependencyProviderTestBusinessFactoryMock
            ->expects($this->once())
            ->method('createCompanyBusinessUnitStore')
            ->willReturn($this->companyBusinessUnitStoreDependencyProviderTestMock);

        $this->companyBusinessUnitStoreDependencyProviderTestMock
            ->expects($this->once())
            ->method('hasCompanyBusinessUnitStore')
            ->with($this->companyBusinessUnitStoreDependencyProviderTestTransferMock)
            ->willReturn(true);

        $this->assertTrue($this->companyBusinessUnitStoreDependencyProviderTestFacade->hasCompanyBusinessUnitStore($this->companyBusinessUnitStoreDependencyProviderTestTransferMock));
    }

    /**
     * @return void
     */
    public function testGetCompanyBusinessUnitStoreCollection(): void
    {
        $companyBusinessUnitStoreDependencyProviderTestReaderMock = $this->getMockForAbstractClass(CompanyBusinessUnitStoreReaderInterface::class);

        /** @var \Generated\Shared\Transfer\CompanyBusinessUnitStoreCollectionTransfer $companyBusinessUnitStoreDependencyProviderTestCollectionTransfer */
        $companyBusinessUnitStoreDependencyProviderTestCollectionTransfer = $this->getMockBuilder('\Generated\Shared\Transfer\CompanyBusinessUnitStoreCollectionTransfer')
            ->disableOriginalConstructor()
            ->getMock();

        $companyBusinessUnitStoreDependencyProviderTestReaderMock
            ->expects($this->once())
            ->method('getCompanyBusinessUnitStoreCollection')
            ->with($companyBusinessUnitStoreDependencyProviderTestCollectionTransfer)
            ->willReturn($companyBusinessUnitStoreDependencyProviderTestCollectionTransfer);

        $this->companyBusinessUnitStoreDependencyProviderTestBusinessFactoryMock
            ->expects($this->once())
            ->method('createCompanyBusinessUnitStoreReader')
            ->willReturn($companyBusinessUnitStoreDependencyProviderTestReaderMock);

        $this->companyBusinessUnitStoreDependencyProviderTestFacade->getCompanyBusinessUnitStoreCollection($companyBusinessUnitStoreDependencyProviderTestCollectionTransfer);
    }
}
