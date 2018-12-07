<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence;

use FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\Mapper\CompanyBusinessUnitStoreAddressMapper;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\Mapper\CompanyBusinessUnitStoreAddressMapperInterface;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\Mapper\CompanyBusinessUnitStoreMapper;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\Mapper\CompanyBusinessUnitStoreMapperInterface;
use Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStoreAddressQuery;
use Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStoreQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

class CompanyBusinessUnitStorePersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStoreQuery
     */
    public function createFosCompanyBusinessUnitStoreQuery(): FosCompanyBusinessUnitStoreQuery
    {
        return FosCompanyBusinessUnitStoreQuery::create();
    }

    /**
     * @return \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\Mapper\CompanyBusinessUnitStoreMapperInterface
     */
    public function createCompanyBusinessUnitStoreMapper(): CompanyBusinessUnitStoreMapperInterface
    {
        return new CompanyBusinessUnitStoreMapper();
    }

    /**
     * @return \Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStoreAddressQuery
     */
    public function createFosCompanyBusinessUnitStoreAddressQuery(): FosCompanyBusinessUnitStoreAddressQuery
    {
        return FosCompanyBusinessUnitStoreAddressQuery::create();
    }

    /**
     * @return \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\Mapper\CompanyBusinessUnitStoreAddressMapperInterface
     */
    public function createCompanyBusinessUnitStoreAddressMapper(): CompanyBusinessUnitStoreAddressMapperInterface
    {
        return new CompanyBusinessUnitStoreAddressMapper();
    }
}
