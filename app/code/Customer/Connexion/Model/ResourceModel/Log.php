<?php declare(strict_types=1);

namespace Customer\Connexion\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Connexion Log model
 */
class Log extends AbstractDb
{
    private const string TABLE_NAME = 'customer_connexion_logs';
    private const string PRIMARY_KEY = 'connexion_id';

    /**
     * @inheritDoc
     */
    protected function _construct(): void
    {
        $this->_init(self::TABLE_NAME, self::PRIMARY_KEY);
    }
}
