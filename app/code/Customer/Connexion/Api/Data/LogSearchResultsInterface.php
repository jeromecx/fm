<?php

namespace Customer\Connexion\Api\Data;

/**
 * Interface for connexion log search results.
 * @api
 */
interface LogSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * Get log list.
     *
     * @return \Customer\Connexion\Api\Data\LogInterface[]
     */
    public function getItems();

    /**
     * Set log list.
     *
     * @param \Customer\Connexion\Api\Data\LogInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
