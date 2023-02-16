<?php

/**
 * August Ash Disable Compare Module
 *
 * @author Peter McWilliams <pmcwilliams@augustash.com>
 * @license MIT
 */

declare(strict_types=1);

namespace Augustash\DisableCompare\Api;

use Magento\Store\Model\ScopeInterface;

/**
 * Service interface responsible for the configuration model.
 *
 * @api
 */
interface ConfigInterface
{
    /**
     * Configuration constants.
     */
    public const XML_PATH_DISABLE_COMPARE_ENABLED = 'catalog/recently_products/disable_compare';

    /**
     * Returns the store's configured enabled status.
     *
     * @param string $scope
     * @param null|int|string $scopeCode
     * @return bool
     */
    public function isEnabled(
        string $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): bool;
}
