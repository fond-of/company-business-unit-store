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
class CompanyBusinessUnitStoreErrorTransfer extends AbstractTransfer
{
    public const MESSAGE = 'message';

    /**
     * @var string|null
     */
    protected $message;

    /**
     * @var array
     */
    protected $transferPropertyNameMap = [
        'message' => 'message',
        'Message' => 'message',
    ];

    /**
     * @var array
     */
    protected $transferMetadata = [
        self::MESSAGE => [
            'type' => 'string',
            'name_underscore' => 'message',
            'is_collection' => false,
            'is_transfer' => false,
            'rest_request_parameter' => 'no',
        ],
    ];

    /**
     * @module CompanyBusinessUnitStore
     *
     * @param string|null $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        $this->modifiedProperties[self::MESSAGE] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @module CompanyBusinessUnitStore
     *
     * @return $this
     */
    public function requireMessage()
    {
        $this->assertPropertyIsSet(self::MESSAGE);

        return $this;
    }
}
