<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStore;

use FondOfSpryker\Zed\CompanyBusinessUnitStore\CompanyBusinessUnitStoreConfig;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreExpander\CompanyBusinessUnitStoreExpanderInterface;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\Exception\CompanyBusinessUnitStoreNotFoundException;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreQueryContainerInterface;
use Generated\Shared\Transfer\CompanyBusinessUnitStoreResponseTransfer;
use Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer;
use Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStore;

class CompanyBusinessUnitStore implements CompanyBusinessUnitStoreInterface
{
    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreQueryContainerInterface
     */
    protected $queryContainer;

    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\CompanyBusinessUnitStoreConfig
     */
    protected $companyBusinessUnitStoreConfig;

    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreExpander\CompanyBusinessUnitStoreExpanderInterface
     */
    protected $companyBusinessUnitStoreExpander;

    /**
     * @param \FondOfSpryker\Zed\CompanyBusinessUnitStore\Persistence\CompanyBusinessUnitStoreQueryContainerInterface $queryContainer
     * @param \FondOfSpryker\Zed\CompanyBusinessUnitStore\CompanyBusinessUnitStoreConfig $companyBusinessUnitStoreConfig
     * @param \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreExpander\CompanyBusinessUnitStoreExpanderInterface $companyBusinessUnitStoreExpander
     */
    public function __construct(
        CompanyBusinessUnitStoreQueryContainerInterface $queryContainer,
        CompanyBusinessUnitStoreConfig $companyBusinessUnitStoreConfig,
        CompanyBusinessUnitStoreExpanderInterface $companyBusinessUnitStoreExpander
    ) {
        $this->queryContainer = $queryContainer;
        $this->companyBusinessUnitStoreConfig = $companyBusinessUnitStoreConfig;
        $this->companyBusinessUnitStoreExpander = $companyBusinessUnitStoreExpander;
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreResponseTransfer
     */
    public function add(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): CompanyBusinessUnitStoreResponseTransfer
    {
        $companyBusinessUnitStoreEntity = $this->createFosCompanyBusinessUnitStoreEntity($companyBusinessUnitStoreTransfer);
        $companyBusinessUnitStoreEntity->save();

        $companyBusinessUnitStoreTransfer->setIdCompanyBusinessUnitStore($companyBusinessUnitStoreEntity->getPrimaryKey());

        $companyBusinessUnitStoreResponseTransfer = new CompanyBusinessUnitStoreResponseTransfer();
        $companyBusinessUnitStoreResponseTransfer
            ->setIsSuccess(true)
            ->setCompanyBusinessUnitStoreTransfer($companyBusinessUnitStoreTransfer);

        return $companyBusinessUnitStoreResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStore
     */
    protected function createFosCompanyBusinessUnitStoreEntity(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): FosCompanyBusinessUnitStore
    {
        $companyBusinessUnitStoreEntity = new FosCompanyBusinessUnitStore();
        $companyBusinessUnitStoreEntity->fromArray($companyBusinessUnitStoreTransfer->toArray());

        return $companyBusinessUnitStoreEntity;
    }

    /**
     * @param bool $isSuccess
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreResponseTransfer
     */
    protected function createCompanyBusinessUnitStoreResponseTransfer($isSuccess = true): CompanyBusinessUnitStoreResponseTransfer
    {
        $companyBusinessUnitStoreResponseTransfer = new CompanyBusinessUnitStoreResponseTransfer();
        $companyBusinessUnitStoreResponseTransfer->setIsSuccess($isSuccess);

        return $companyBusinessUnitStoreResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return bool
     */
    public function delete(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): bool
    {
        $companyBusinessUnitStoreEntity = $this->getCompanyBusinessUnitStore($companyBusinessUnitStoreTransfer);
        $companyBusinessUnitStoreEntity->delete();

        return true;
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer
     */
    public function get(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): CompanyBusinessUnitStoreTransfer
    {
        $companyBusinessUnitStoreEntity = $this->getCompanyBusinessUnitStore($companyBusinessUnitStoreTransfer);
        $companyBusinessUnitStoreTransfer->fromArray($companyBusinessUnitStoreEntity->toArray(), true);
        $companyBusinessUnitStoreTransfer = $this->companyBusinessUnitStoreExpander->expand($companyBusinessUnitStoreTransfer);

        return $companyBusinessUnitStoreTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreResponseTransfer
     */
    public function update(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): CompanyBusinessUnitStoreResponseTransfer
    {
        $companyBusinessUnitStoreEntity = $this->getCompanyBusinessUnitStore($companyBusinessUnitStoreTransfer);
        $companyBusinessUnitStoreEntity->fromArray($companyBusinessUnitStoreTransfer->modifiedToArray());
        $companyBusinessUnitStoreEntity->save();

        $companyBusinessUnitStoreResponseTransfer = new CompanyBusinessUnitStoreResponseTransfer();
        $companyBusinessUnitStoreResponseTransfer->setIsSuccess(true);
        $companyBusinessUnitStoreResponseTransfer->setCompanyBusinessUnitStoreTransfer($companyBusinessUnitStoreTransfer);
        return $companyBusinessUnitStoreResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer|null $companyBusinessUnitStoreTransfer|null
     */
    public function findById(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): ?CompanyBusinessUnitStoreTransfer
    {
        try {
            $companyBusinessUnitStoreTransfer->requireIdCompanyBusinessUnitStore();
            return $this->get($companyBusinessUnitStoreTransfer);
        } catch (CompanyBusinessUnitStoreNotFoundException $e) {
            return null;
        }
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer|null
     */
    public function findByName(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): ?CompanyBusinessUnitStoreTransfer
    {
        try {
            $companyBusinessUnitStoreTransfer->requireName();
            return $this->get($companyBusinessUnitStoreTransfer);
        } catch (CompanyBusinessUnitStoreNotFoundException $e) {
            return null;
        }
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return bool
     */
    public function hasCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): bool
    {
        try {
            $this->getCompanyBusinessUnitStore($companyBusinessUnitStoreTransfer);
            return true;
        } catch (CompanyBusinessUnitStoreNotFoundException $e) {
            return false;
        }
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @throws \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\Exception\CompanyBusinessUnitStoreNotFoundException
     *
     * @return \Orm\Zed\CompanyBusinessUnitStore\Persistence\FosCompanyBusinessUnitStore
     */
    protected function getCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): FosCompanyBusinessUnitStore
    {
        $companyBusinessUnitStoreEntity = null;

        if ($companyBusinessUnitStoreTransfer->getIdCompanyBusinessUnitStore()) {
            $companyBusinessUnitStoreEntity = $this->queryContainer->queryCompanyBusinessUnitStoreById($companyBusinessUnitStoreTransfer->getIdCompanyBusinessUnitStore())
                ->findOne();
        } elseif ($companyBusinessUnitStoreTransfer->getName()) {
            $companyBusinessUnitStoreEntity = $this->queryContainer->queryCompanyBusinessUnitStoreByName($companyBusinessUnitStoreTransfer->getName())
                ->findOne();
        }

        if ($companyBusinessUnitStoreEntity !== null) {
            return $companyBusinessUnitStoreEntity;
        }

        throw new CompanyBusinessUnitStoreNotFoundException(sprintf('CompanyBusinessUnitStore not found by either ID `%s` or name `%s`.', $companyBusinessUnitStoreTransfer->getIdCompanyBusinessUnitStore(), $companyBusinessUnitStoreTransfer->getName()));
    }
}
