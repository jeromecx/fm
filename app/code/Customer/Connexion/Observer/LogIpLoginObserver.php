<?php declare(strict_types=1);

namespace Customer\Connexion\Observer;

use Customer\Connexion\Api\LogRepositoryInterface;
use Customer\Connexion\Helper\Log as LogHelper;
use Customer\Connexion\Model\LogFactory;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\HTTP\PhpEnvironment\RemoteAddress;

/**
 * Connexion log observer
 */
class LogIpLoginObserver implements ObserverInterface
{
    /**
     * @param LogHelper $logHelper
     * @param LogFactory $logFactory
     * @param RemoteAddress $remoteAddress
     * @param LogRepositoryInterface $logRepository
     */
    public function __construct(
        private readonly LogHelper $logHelper,
        private readonly LogFactory $logFactory,
        private readonly RemoteAddress $remoteAddress,
        private readonly LogRepositoryInterface $logRepository,
    ) {
    }

    /**
     * Add new entry to the table after the customer is logged
     * @param Observer $observer
     * @return void
     * @throws CouldNotSaveException
     */
    public function execute(Observer $observer): void
    {
        if ($this->isConnexionLoggingModeEnabled()) {
            $customerId = $observer->getEvent()->getCustomer()->getId();
            $ip = $this->remoteAddress->getRemoteAddress();
            $log = $this->logFactory->create();
            $log->setCustomerId($customerId);
            $log->setIp($ip);
            $this->logRepository->save($log);
        }
    }

    /**
     * Return cookie restriction mode value.
     *
     * @return bool
     */
    public function isConnexionLoggingModeEnabled(): bool
    {
        return $this->logHelper->isConnexionLoggingModeEnabled();
    }
}
