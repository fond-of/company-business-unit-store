<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class CompanyBusinessUnitStoreTransfer extends AbstractTransfer
{
    public const ID_COMPANY_BUSINESS_UNIT_STORE = 'idCompanyBusinessUnitStore';

    public const NAME = 'name';

    /**
     * @var int|null
     */
    protected $idCompanyBusinessUnitStore;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var array
     */
    protected $transferPropertyNameMap = [
        'id_company_business_unit_store' => 'idCompanyBusinessUnitStore',
        'idCompanyBusinessUnitStore' => 'idCompanyBusinessUnitStore',
        'IdCompanyBusinessUnitStore' => 'idCompanyBusinessUnitStore',
        'name' => 'name',
        'Name' => 'name',
    ];

    /**
     * @var array
     */
    protected $transferMetadata = [
        self::ID_COMPANY_BUSINESS_UNIT_STORE => [
            'type' => 'int',
            'name_underscore' => 'id_company_business_unit_store',
            'is_collection' => false,
            'is_transfer' => false,
            'rest_request_parameter' => 'no',
        ],
        self::NAME => [
            'type' => 'string',
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'rest_request_parameter' => 'no',
        ],
    ];

    /**
     * @module CompanyBusinessUnitStore
     *
     * @param int|null $idCompanyBusinessUnitStore
     *
     * @return $this
     */
    public function setIdCompanyBusinessUnitStore($idCompanyBusinessUnitStore)
    {
        $this->idCompanyBusinessUnitStore = $idCompanyBusinessUnitStore;
        $this->modifiedProperties[self::ID_COMPANY_BUSINESS_UNIT_STORE] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @return int|null
     */
    public function getIdCompanyBusinessUnitStore()
    {
        return $this->idCompanyBusinessUnitStore;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @return $this
     */
    public function requireIdCompanyBusinessUnitStore()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY_BUSINESS_UNIT_STORE);

        return $this;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }
}
