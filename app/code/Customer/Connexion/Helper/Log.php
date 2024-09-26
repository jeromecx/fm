<?php declare(strict_types=1);

namespace Customer\Connexion\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;
use Magento\Store\Model\Store;

/**
 * Log helper
 * @api
 */
class Log extends AbstractHelper
{
    /**
     * Path to configuration, check is enable track customer connexions mode
     */
    public const string XML_PATH_ENABLE_LOGGING = 'customer/startup/enable_logging';

    /**
     * Check if connexion logging mode is enabled for this store
     *
     * @param Store|null $store
     * @return bool
     */
    public function isConnexionLoggingModeEnabled(Store $store = null): bool
    {
        return boolval($this->scopeConfig->getValue(
            self::XML_PATH_ENABLE_LOGGING,
            ScopeInterface::SCOPE_STORE,
            $store
        ));
    }
}
