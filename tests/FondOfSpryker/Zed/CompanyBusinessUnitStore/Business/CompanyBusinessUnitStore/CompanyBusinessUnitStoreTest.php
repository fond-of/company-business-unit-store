<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\CompanyBusinessUnitStoreConfig;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreExpander\CompanyBusinessUnitStoreExpanderInterface;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\Exception\CompanyBusinessUnitStoreNotFoundException;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreQueryContainer;
use Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer;
use ReflectionMethod;

class CompanyBusinessUnitStoreTest extends Unit
{
    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreInterface
     */
    protected $companyBusinessUnitStore;

    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\CompanyBusinessUnitStoreConfig|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $companyBusinessUnitStoreConfig;

    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreExpander\CompanyBusinessUnitStoreExpanderInterface|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $companyBusinessUnitStoreExpanderMock;

    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreQueryContainer|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $queryContainerMock;

    /**
     * @var \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $companyBusinessUnitStoreTransferMock;

    /**
     * @var \Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStore|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $entityMock;

    /**
     * @return void
     */
    protected function _before(): void
    {
        $this->companyBusinessUnitStoreConfig = $this->getMockBuilder(CompanyBusinessUnitStoreConfig::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->companyBusinessUnitStoreExpanderMock = $this->getMockForAbstractClass(CompanyBusinessUnitStoreExpanderInterface::class);

        $this->queryContainerMock = $this->getMockBuilder(CompanyBusinessUnitStoreQueryContainer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->companyBusinessUnitStoreTransferMock = $this->getMockBuilder('\Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer')
            ->disableOriginalConstructor()
            ->getMock();

        $this->entityMock = $this->getMockBuilder('\Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStore')
            ->setMethods(['delete', 'save', 'requireName', 'toArray', 'fromArray'])
            ->disableOriginalConstructor()
            ->getMock();

        $this->companyBusinessUnitStore = new CompanyBusinessUnitStore(
            $this->queryContainerMock,
            $this->companyBusinessUnitStoreConfig,
            $this->companyBusinessUnitStoreExpanderMock
        );
    }

    /**
     * @param \Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStoreQuery|null $entity
     *
     * @return void
     */
    protected function prepareGetCompanyBusinessUnitStoreMethod($entity = null): void
    {
        $entityQuery = $this->getMockBuilder('\Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStoreQuery')
            ->setMethods(['findOne'])
            ->disableOriginalConstructor()
            ->getMock();

        $this->companyBusinessUnitStoreTransferMock
            ->expects($this->atLeastOnce())
            ->method('getIdCompanyBusinessUnitStore')
            ->willReturn(1);

        $entityQuery
            ->expects($this->once())
            ->method('findOne')
            ->willReturn($entity);

        $this->queryContainerMock
            ->expects($this->once())
            ->method('queryCompanyBusinessUnitStoreById')
            ->willReturn($entityQuery);
    }

    /**
     * @param \Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStoreQuery|null $entity
     *
     * @return void
     */
    protected function prepareGetCompanyBusinessUnitStoreMethodName($entity = null): void
    {
        $entityQuery = $this->getMockBuilder('\Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStoreQuery')
            ->setMethods(['findOne'])
            ->disableOriginalConstructor()
            ->getMock();

        $this->companyBusinessUnitStoreTransferMock
            ->expects($this->atLeastOnce())
            ->method('getName')
            ->willReturn('test');

        $entityQuery
            ->expects($this->once())
            ->method('findOne')
            ->willReturn($entity);

        $this->queryContainerMock
            ->expects($this->once())
            ->method('queryCompanyBusinessUnitStoreByName')
            ->willReturn($entityQuery);
    }

    /**
     * @return void
     */
    public function testDelete(): void
    {
        $this->entityMock
            ->expects($this->once())
            ->method('delete');

        $this->prepareGetCompanyBusinessUnitStoreMethod($this->entityMock);

        $this->assertTrue($this->companyBusinessUnitStore->delete($this->companyBusinessUnitStoreTransferMock));
    }

    /**
     * @return void
     */
    public function testGet(): void
    {
        $this->entityMock
            ->expects($this->once())
            ->method('toArray')
            ->willReturn([]);

        $this->prepareGetCompanyBusinessUnitStoreMethod($this->entityMock);

        $this->companyBusinessUnitStoreExpanderMock
            ->expects($this->once())
            ->method('expand')
            ->willReturn($this->companyBusinessUnitStoreTransferMock);

        $this->companyBusinessUnitStore->get($this->companyBusinessUnitStoreTransferMock);
    }

    /**
     * @return void
     */
    public function testUpdate(): void
    {
        $this->entityMock
            ->expects($this->once())
            ->method('save');

        $this->prepareGetCompanyBusinessUnitStoreMethod($this->entityMock);

        $response = $this->companyBusinessUnitStore->update($this->companyBusinessUnitStoreTransferMock);

        $this->assertTrue($response->getIsSuccess());
        $this->assertSame($this->companyBusinessUnitStoreTransferMock, $response->getCompanyBusinessUnitStoreTransfer());
    }

    /**
     * @return void
     */
    public function testFindById(): void
    {
        $this->companyBusinessUnitStoreTransferMock
            ->expects($this->once())
            ->method('requireIdCompanyBusinessUnitStore');

        $this->entityMock
            ->expects($this->once())
            ->method('toArray')
            ->willReturn([]);

        $this->prepareGetCompanyBusinessUnitStoreMethod($this->entityMock);

        $response = $this->companyBusinessUnitStore->findById($this->companyBusinessUnitStoreTransferMock);
        $this->assertInstanceOf(CompanyBusinessUnitStoreTransfer::class, $response);
    }

    /**
     * @return void
     */
    public function testFindByIdNull(): void
    {
        $this->prepareGetCompanyBusinessUnitStoreMethod(null);

        $response = $this->companyBusinessUnitStore->findById($this->companyBusinessUnitStoreTransferMock);
        $this->assertNull($response);
    }

    /**
     * @return void
     */
    public function testFindByName(): void
    {
        $this->companyBusinessUnitStoreTransferMock
            ->expects($this->once())
            ->method('requireName');

        $this->entityMock
            ->expects($this->once())
            ->method('toArray')
            ->willReturn([]);

        $this->prepareGetCompanyBusinessUnitStoreMethodName($this->entityMock);

        $response = $this->companyBusinessUnitStore->findByName($this->companyBusinessUnitStoreTransferMock);
        $this->assertInstanceOf(CompanyBusinessUnitStoreTransfer::class, $response);
    }

    /**
     * @return void
     */
    public function testFindByNameNull(): void
    {
        $this->prepareGetCompanyBusinessUnitStoreMethodName(null);

        $response = $this->companyBusinessUnitStore->findByName($this->companyBusinessUnitStoreTransferMock);
        $this->assertNull($response);
    }

    /**
     * @return void
     */
    public function testHasCompanyBusinessUnitStoreTrue(): void
    {
        $this->prepareGetCompanyBusinessUnitStoreMethod($this->entityMock);

        $response = $this->companyBusinessUnitStore->hasCompanyBusinessUnitStore($this->companyBusinessUnitStoreTransferMock);
        $this->assertTrue($response);
    }

    /**
     * @return void
     */
    public function testHasCompanyBusinessUnitStoreFalse(): void
    {
        $this->prepareGetCompanyBusinessUnitStoreMethod(null);

        $response = $this->companyBusinessUnitStore->hasCompanyBusinessUnitStore($this->companyBusinessUnitStoreTransferMock);
        $this->assertFalse($response);
    }

    /**
     * @return void
     */
    public function testGetCompanyBusinessUnitStoreNotFoundException(): void
    {
        $this->companyBusinessUnitStoreTransferMock
            ->expects($this->atLeastOnce())
            ->method('getIdCompanyBusinessUnitStore')
            ->willReturn(null);

        $this->companyBusinessUnitStoreTransferMock
            ->expects($this->atLeastOnce())
            ->method('getName')
            ->willReturn(null);

        $method = new ReflectionMethod(CompanyBusinessUnitStore::class, 'getCompanyBusinessUnitStore');
        $method->setAccessible(true);

        $this->expectException(CompanyBusinessUnitStoreNotFoundException::class);
        $this->expectExceptionMessage('CompanyBusinessUnitStore not found by either ID');

        $method->invoke($this->companyBusinessUnitStore, $this->companyBusinessUnitStoreTransferMock);
    }

    /**
     * @return void
     */
    public function testGetCompanyBusinessUnitStoreNotFoundExceptionById(): void
    {
        $this->prepareGetCompanyBusinessUnitStoreMethod(null);

        $method = new ReflectionMethod(CompanyBusinessUnitStore::class, 'getCompanyBusinessUnitStore');
        $method->setAccessible(true);

        $this->expectException(CompanyBusinessUnitStoreNotFoundException::class);
        $this->expectExceptionMessage('CompanyBusinessUnitStore not found by either ID');

        $method->invoke($this->companyBusinessUnitStore, $this->companyBusinessUnitStoreTransferMock);
    }

    /**
     * @return void
     */
    public function testGetCompanyBusinessUnitStoreNotFoundExceptionByName(): void
    {
        $this->prepareGetCompanyBusinessUnitStoreMethodName(null);

        $method = new ReflectionMethod(CompanyBusinessUnitStore::class, 'getCompanyBusinessUnitStore');
        $method->setAccessible(true);

        $this->expectException(CompanyBusinessUnitStoreNotFoundException::class);
        $this->expectExceptionMessage('CompanyBusinessUnitStore not found by either ID');

        $method->invoke($this->companyBusinessUnitStore, $this->companyBusinessUnitStoreTransferMock);
    }
}
