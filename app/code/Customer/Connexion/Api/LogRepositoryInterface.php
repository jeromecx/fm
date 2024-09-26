<?php

namespace Customer\Connexion\Api;

/**
 * Connexion Log CRUD interface
 * @api
 */
interface LogRepositoryInterface
{
    /**
     * Create or update a Connexion Log
     *
     * @param \Customer\Connexion\Api\Data\LogInterface $log
     * @return \Customer\Connexion\Api\Data\LogInterface
     * @throws \Magento\Framework\Exception\CouldNotSaveException When failed to save new entity
     */
    public function save(\Customer\Connexion\Api\Data\LogInterface $log);

    /**
     * Retrieve list of connexion log matching the specified criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Customer\Connexion\Api\Data\LogSearchResultsInterface
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
}
