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
class CompanyBusinessUnitStoreResponseTransfer extends AbstractTransfer
{
    public const HAS_COMPANY_BUSINESS_UNIT_STORE = 'hasCompanyBusinessUnitStore';

    public const COMPANY_BUSINESS_UNIT_STORE_TRANSFER = 'companyBusinessUnitStoreTransfer';

    public const IS_SUCCESS = 'isSuccess';

    public const ERRORS = 'errors';

    /**
     * @var bool|null
     */
    protected $hasCompanyBusinessUnitStore;

    /**
     * @var \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer|null
     */
    protected $companyBusinessUnitStoreTransfer;

    /**
     * @var bool|null
     */
    protected $isSuccess;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CompanyBusinessUnitStoreErrorTransfer[]
     */
    protected $errors;

    /**
     * @var array
     */
    protected $transferPropertyNameMap = [
        'has_company_business_unit_store' => 'hasCompanyBusinessUnitStore',
        'hasCompanyBusinessUnitStore' => 'hasCompanyBusinessUnitStore',
        'HasCompanyBusinessUnitStore' => 'hasCompanyBusinessUnitStore',
        'company_business_unit_store_transfer' => 'companyBusinessUnitStoreTransfer',
        'companyBusinessUnitStoreTransfer' => 'companyBusinessUnitStoreTransfer',
        'CompanyBusinessUnitStoreTransfer' => 'companyBusinessUnitStoreTransfer',
        'is_success' => 'isSuccess',
        'isSuccess' => 'isSuccess',
        'IsSuccess' => 'isSuccess',
        'errors' => 'errors',
        'Errors' => 'errors',
    ];

    /**
     * @var array
     */
    protected $transferMetadata = [
        self::HAS_COMPANY_BUSINESS_UNIT_STORE => [
            'type' => 'bool',
            'name_underscore' => 'has_company_business_unit_store',
            'is_collection' => false,
            'is_transfer' => false,
            'rest_request_parameter' => 'no',
        ],
        self::COMPANY_BUSINESS_UNIT_STORE_TRANSFER => [
            'type' => 'Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer',
            'name_underscore' => 'company_business_unit_store_transfer',
            'is_collection' => false,
            'is_transfer' => true,
            'rest_request_parameter' => 'no',
        ],
        self::IS_SUCCESS => [
            'type' => 'bool',
            'name_underscore' => 'is_success',
            'is_collection' => false,
            'is_transfer' => false,
            'rest_request_parameter' => 'no',
        ],
        self::ERRORS => [
            'type' => 'Generated\Shared\Transfer\CompanyBusinessUnitStoreErrorTransfer',
            'name_underscore' => 'errors',
            'is_collection' => true,
            'is_transfer' => true,
            'rest_request_parameter' => 'no',
        ],
    ];

    /**
     * @module CompanyBusinessUnitStore
     *
     * @param bool|null $hasCompanyBusinessUnitStore
     *
     * @return $this
     */
    public function setHasCompanyBusinessUnitStore($hasCompanyBusinessUnitStore)
    {
        $this->hasCompanyBusinessUnitStore = $hasCompanyBusinessUnitStore;
        $this->modifiedProperties[self::HAS_COMPANY_BUSINESS_UNIT_STORE] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @return bool|null
     */
    public function getHasCompanyBusinessUnitStore()
    {
        return $this->hasCompanyBusinessUnitStore;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @return $this
     */
    public function requireHasCompanyBusinessUnitStore()
    {
        $this->assertPropertyIsSet(self::HAS_COMPANY_BUSINESS_UNIT_STORE);

        return $this;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer|null $companyBusinessUnitStoreTransfer
     *
     * @return $this
     */
    public function setCompanyBusinessUnitStoreTransfer(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer = null)
    {
        $this->companyBusinessUnitStoreTransfer = $companyBusinessUnitStoreTransfer;
        $this->modifiedProperties[self::COMPANY_BUSINESS_UNIT_STORE_TRANSFER] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer|null
     */
    public function getCompanyBusinessUnitStoreTransfer()
    {
        return $this->companyBusinessUnitStoreTransfer;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @return $this
     */
    public function requireCompanyBusinessUnitStoreTransfer()
    {
        $this->assertPropertyIsSet(self::COMPANY_BUSINESS_UNIT_STORE_TRANSFER);

        return $this;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @param bool|null $isSuccess
     *
     * @return $this
     */
    public function setIsSuccess($isSuccess)
    {
        $this->isSuccess = $isSuccess;
        $this->modifiedProperties[self::IS_SUCCESS] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @return bool|null
     */
    public function getIsSuccess()
    {
        return $this->isSuccess;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @return $this
     */
    public function requireIsSuccess()
    {
        $this->assertPropertyIsSet(self::IS_SUCCESS);

        return $this;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\CompanyBusinessUnitStoreErrorTransfer[] $errors
     *
     * @return $this
     */
    public function setErrors(ArrayObject $errors)
    {
        $this->errors = $errors;
        $this->modifiedProperties[self::ERRORS] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CompanyBusinessUnitStoreErrorTransfer[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreErrorTransfer $error
     *
     * @return $this
     */
    public function addError(CompanyBusinessUnitStoreErrorTransfer $error)
    {
        $this->errors[] = $error;
        $this->modifiedProperties[self::ERRORS] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @return $this
     */
    public function requireErrors()
    {
        $this->assertCollectionPropertyIsSet(self::ERRORS);

        return $this;
    }
}
