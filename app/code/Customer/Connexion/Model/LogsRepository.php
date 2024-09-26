<?php

namespace Customer\Connexion\Model;

use Customer\Connexion\Api\Data\LogsInterface;
use Customer\Connexion\Api\LogsRepositoryInterface;

class LogsRepository implements LogsRepositoryInterface
{

    /**
     * @inheritDoc
     */
    public function save(LogsInterface $entity): LogsInterface
    {
        // TODO: Implement save() method.
    }
}
