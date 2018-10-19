<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence;

use ArrayObject;
use Generated\Shared\Transfer\CompanyBusinessUnitStoreCollectionTransfer;
use Generated\Shared\Transfer\FilterTransfer;
use Generated\Shared\Transfer\PaginationTransfer;
use Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStoreQuery;
use Propel\Runtime\Formatter\ArrayFormatter;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;
use Spryker\Zed\Propel\PropelFilterCriteria;
use Spryker\Zed\PropelOrm\Business\Runtime\ActiveQuery\Criteria;

/**
 * @method \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStorePersistenceFactory getFactory()
 */
class CompanyBusinessUnitStoreRepository extends AbstractRepository implements CompanyBusinessUnitStoreRepositoryInterface
{
    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreCollectionTransfer $companyBusinessUnitStoreCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreCollectionTransfer
     */
    public function getCompanyBusinessUnitStoreCollection(CompanyBusinessUnitStoreCollectionTransfer $companyBusinessUnitStoreCollectionTransfer): CompanyBusinessUnitStoreCollectionTransfer
    {
        $companyBusinessUnitStoreQuery = $this->getFactory()
            ->createCompanyBusinessUnitStoreQuery();

        $companyBusinessUnitStoreQuery = $this->applyFilterToQuery($companyBusinessUnitStoreQuery, $companyBusinessUnitStoreCollectionTransfer->getFilter());
        $companyBusinessUnitStoreQuery = $this->applyPagination($companyBusinessUnitStoreQuery, $companyBusinessUnitStoreCollectionTransfer->getPagination());
        $companyBusinessUnitStoreQuery->setFormatter(ArrayFormatter::class);
        $this->hydrateCompanyBusinessUnitStoreListWithCompanyBusinessUnitStores($companyBusinessUnitStoreCollectionTransfer, $companyBusinessUnitStoreQuery->find()->getData());

        return $companyBusinessUnitStoreCollectionTransfer;
    }

    /**
     * @param \Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStoreQuery $fosCompanyBusinessUnitStoreQuery
     * @param \Generated\Shared\Transfer\FilterTransfer|null $filterTransfer
     *
     * @return \Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStoreQuery
     */
    protected function applyFilterToQuery(FosCompanyBusinessUnitStoreQuery $fosCompanyBusinessUnitStoreQuery, ?FilterTransfer $filterTransfer): FosCompanyBusinessUnitStoreQuery
    {
        $criteria = new Criteria();
        if ($filterTransfer !== null) {
            $criteria = (new PropelFilterCriteria($filterTransfer))
                ->toCriteria();
        }

        $fosCompanyBusinessUnitStoreQuery->mergeWith($criteria);

        return $fosCompanyBusinessUnitStoreQuery;
    }

    /**
     * @param \Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStoreQuery $fosCompanyBusinessUnitStoreQuery
     * @param \Generated\Shared\Transfer\PaginationTransfer|null $paginationTransfer
     *
     * @return \Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStoreQuery
     */
    protected function applyPagination(FosCompanyBusinessUnitStoreQuery $fosCompanyBusinessUnitStoreQuery, ?PaginationTransfer $paginationTransfer = null): FosCompanyBusinessUnitStoreQuery
    {
        if (empty($paginationTransfer)) {
            return $fosCompanyBusinessUnitStoreQuery;
        }

        $page = $paginationTransfer
            ->requirePage()
            ->getPage();

        $maxPerPage = $paginationTransfer
            ->requireMaxPerPage()
            ->getMaxPerPage();

        $paginationModel = $fosCompanyBusinessUnitStoreQuery->paginate($page, $maxPerPage);

        $paginationTransfer->setNbResults($paginationModel->getNbResults());
        $paginationTransfer->setFirstIndex($paginationModel->getFirstIndex());
        $paginationTransfer->setLastIndex($paginationModel->getLastIndex());
        $paginationTransfer->setFirstPage($paginationModel->getFirstPage());
        $paginationTransfer->setLastPage($paginationModel->getLastPage());
        $paginationTransfer->setNextPage($paginationModel->getNextPage());
        $paginationTransfer->setPreviousPage($paginationModel->getPreviousPage());

        return $paginationModel->getQuery();
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreCollectionTransfer $companyBusinessUnitStoreListTransfer
     * @param array $companyBusinessUnitStores
     *
     * @return void
     */
    protected function hydrateCompanyBusinessUnitStoreListWithCompanyBusinessUnitStores(CompanyBusinessUnitStoreCollectionTransfer $companyBusinessUnitStoreListTransfer, array $companyBusinessUnitStores): void
    {
        $companyBusinessUnitStoreCollection = new ArrayObject();

        foreach ($companyBusinessUnitStores as $companyBusinessUnitStore) {
            $companyBusinessUnitStoreCollection->append(
                $this->getFactory()
                    ->createCompanyBusinessUnitStoreMapper()
                    ->mapCompanyBusinessUnitStoreEntityToCompanyBusinessUnitStore($companyBusinessUnitStore)
            );
        }

        $companyBusinessUnitStoreListTransfer->setCompanyBusinessUnitStores($companyBusinessUnitStoreCollection);
    }
}
