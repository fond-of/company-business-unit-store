<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreExpander;

use Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer;

class CompanyBusinessUnitStoreExpander implements CompanyBusinessUnitStoreExpanderInterface
{
    /**
     * @var array|\FondOfSpryker\Zed\CompanyBusinessUnitStore\Dependency\Plugin\CompanyBusinessUnitStoreTransferExpanderPluginInterface[]
     */
    protected $companyBusinessUnitStoreTransferExpanderPlugins;

    /**
     * @param \FondOfSpryker\Zed\CompanyBusinessUnitStore\Dependency\Plugin\CompanyBusinessUnitStoreTransferExpanderPluginInterface[] $companyBusinessUnitStoreTransferExpanderPlugins
     */
    public function __construct(array $companyBusinessUnitStoreTransferExpanderPlugins)
    {
        $this->companyBusinessUnitStoreTransferExpanderPlugins = $companyBusinessUnitStoreTransferExpanderPlugins;
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer
     */
    public function expand(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): CompanyBusinessUnitStoreTransfer
    {
        foreach ($this->companyBusinessUnitStoreTransferExpanderPlugins as $companyBusinessUnitStoreTransferExpanderPlugin) {
            $companyBusinessUnitStoreTransfer = $companyBusinessUnitStoreTransferExpanderPlugin->expandTransfer($companyBusinessUnitStoreTransfer);
        }

        return $companyBusinessUnitStoreTransfer;
    }
}
