<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence;

use Spryker\Zed\Kernel\Persistence\QueryContainer\QueryContainerInterface;

interface CompanyBusinessUnitStoreQueryContainerInterface extends QueryContainerInterface
{
    /**
     * @api
     *
     * @return \Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStoreQuery
     */
    public function queryCompanyBusinessUnitStore();

    /**
     * @api
     *
     * @param int $id
     *
     * @return \Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStoreQuery
     */
    public function queryCompanyBusinessUnitStoreById(int $id);

    /**
     * @api
     *
     * @param string $name
     *
     * @return \Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStoreQuery
     */
    public function queryCompanyBusinessUnitStoreByName(string $name);
}
