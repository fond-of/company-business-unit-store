<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class CompanyBusinessUnitStoreCollectionTransfer extends AbstractTransfer
{
    public const FILTER = 'filter';

    public const COMPANY_BUSINESS_UNIT_STORES = 'companyBusinessUnitStores';

    public const PAGINATION = 'pagination';

    /**
     * @var \Generated\Shared\Transfer\FilterTransfer|null
     */
    protected $filter;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer[]
     */
    protected $companyBusinessUnitStores;

    /**
     * @var \Generated\Shared\Transfer\PaginationTransfer|null
     */
    protected $pagination;

    /**
     * @var array
     */
    protected $transferPropertyNameMap = [
        'filter' => 'filter',
        'Filter' => 'filter',
        'company_business_unit_stores' => 'companyBusinessUnitStores',
        'companyBusinessUnitStores' => 'companyBusinessUnitStores',
        'CompanyBusinessUnitStores' => 'companyBusinessUnitStores',
        'pagination' => 'pagination',
        'Pagination' => 'pagination',
    ];

    /**
     * @var array
     */
    protected $transferMetadata = [
        self::FILTER => [
            'type' => 'Generated\Shared\Transfer\FilterTransfer',
            'name_underscore' => 'filter',
            'is_collection' => false,
            'is_transfer' => true,
            'rest_request_parameter' => 'no',
        ],
        self::COMPANY_BUSINESS_UNIT_STORES => [
            'type' => 'Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer',
            'name_underscore' => 'company_business_unit_stores',
            'is_collection' => true,
            'is_transfer' => true,
            'rest_request_parameter' => 'no',
        ],
        self::PAGINATION => [
            'type' => 'Generated\Shared\Transfer\PaginationTransfer',
            'name_underscore' => 'pagination',
            'is_collection' => false,
            'is_transfer' => true,
            'rest_request_parameter' => 'no',
        ],
    ];

    /**
     * @module CompanyBusinessUnitStore
     *
     * @param \Generated\Shared\Transfer\FilterTransfer|null $filter
     *
     * @return $this
     */
    public function setFilter(FilterTransfer $filter = null)
    {
        $this->filter = $filter;
        $this->modifiedProperties[self::FILTER] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @return \Generated\Shared\Transfer\FilterTransfer|null
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @return $this
     */
    public function requireFilter()
    {
        $this->assertPropertyIsSet(self::FILTER);

        return $this;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer[] $companyBusinessUnitStores
     *
     * @return $this
     */
    public function setCompanyBusinessUnitStores(ArrayObject $companyBusinessUnitStores)
    {
        $this->companyBusinessUnitStores = $companyBusinessUnitStores;
        $this->modifiedProperties[self::COMPANY_BUSINESS_UNIT_STORES] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer[]
     */
    public function getCompanyBusinessUnitStores()
    {
        return $this->companyBusinessUnitStores;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStore
     *
     * @return $this
     */
    public function addCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStore)
    {
        $this->companyBusinessUnitStores[] = $companyBusinessUnitStore;
        $this->modifiedProperties[self::COMPANY_BUSINESS_UNIT_STORES] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @return $this
     */
    public function requireCompanyBusinessUnitStores()
    {
        $this->assertCollectionPropertyIsSet(self::COMPANY_BUSINESS_UNIT_STORES);

        return $this;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @param \Generated\Shared\Transfer\PaginationTransfer|null $pagination
     *
     * @return $this
     */
    public function setPagination(PaginationTransfer $pagination = null)
    {
        $this->pagination = $pagination;
        $this->modifiedProperties[self::PAGINATION] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer|null
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @return $this
     */
    public function requirePagination()
    {
        $this->assertPropertyIsSet(self::PAGINATION);

        return $this;
    }
}
