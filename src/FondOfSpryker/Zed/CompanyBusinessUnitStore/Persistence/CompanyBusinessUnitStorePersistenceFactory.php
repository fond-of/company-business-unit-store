<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence;

use FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\Mapper\CompanyBusinessUnitStoreMapper;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\Mapper\CompanyBusinessUnitStoreMapperInterface;
use Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStoreQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method \FondOfSpryker\Zed\CompanyBusinessUnitStore\CompanyBusinessUnitStoreConfig getConfig()
 * @method \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreQueryContainerInterface getQueryContainer()
 */
class CompanyBusinessUnitStorePersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStoreQuery
     */
    public function createCompanyBusinessUnitStoreQuery()
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
}
