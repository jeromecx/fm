<?php declare(strict_types=1);

namespace Customer\Connexion\Api;

use Customer\Connexion\Api\Data\LogsInterface;
use Magento\Framework\Exception\CouldNotSaveException;

interface LogsRepositoryInterface
{
    /**
     * Create or update a Connexion Log
     *
     * @param LogsInterface $entity The connexion log
     * @return LogsInterface Connexion Log interface
     * @throws CouldNotSaveException
     */
    public function save(LogsInterface $entity): LogsInterface;
}
