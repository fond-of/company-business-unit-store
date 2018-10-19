<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence;

use Spryker\Zed\Kernel\Persistence\AbstractQueryContainer;

/**
 * @method \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStorePersistenceFactory getFactory()
 */
class CompanyBusinessUnitStoreQueryContainer extends AbstractQueryContainer implements CompanyBusinessUnitStoreQueryContainerInterface
{
    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @return \Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStoreQuery
     */
    public function queryCompanyBusinessUnitStore()
    {
        return $this->getFactory()->createCompanyBusinessUnitStoreQuery();
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $id
     *
     * @return \Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStoreQuery
     */
    public function queryCompanyBusinessUnitStoreById(int $id)
    {
        return $this->getFactory()->createCompanyBusinessUnitStoreQuery()
            ->filterByIdCompanyBusinessUnitStore($id);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $name
     *
     * @return \Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStoreQuery
     */
    public function queryCompanyBusinessUnitStoreByName(string $name)
    {
        return $this->getFactory()->createCompanyBusinessUnitStoreQuery()
            ->filterByName($name);
    }
}
