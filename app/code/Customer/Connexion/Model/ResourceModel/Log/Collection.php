<?php declare(strict_types=1);

namespace Customer\Connexion\Model\ResourceModel\Log;

use Customer\Connexion\Api\Data\LogSearchResultsInterface;
use Customer\Connexion\Model\Log as LogModel;
use Customer\Connexion\Model\ResourceModel\Log as LogResourceModel;
use Magento\Framework\Api\ExtensibleDataInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection implements LogSearchResultsInterface
{
    /**
     * @inheritDoc
     *
     * @var string
     */
    protected $_idFieldName = 'connexion_id';

    /**
     * @inheritDoc
     *
     * @var string
     */
    protected $_eventPrefix = 'connexion_logs_collection';

    /**
     * @inheritDoc
     *
     * @var string
     */
    protected $_eventObject = 'log_collection';

    /**
     * @var SearchCriteriaInterface
     */
    protected SearchCriteriaInterface $searchCriteria;

    protected function _construct(): void
    {
        $this->_init(LogModel::class, LogResourceModel::class);
    }

    /**
     * Set items list.
     *
     * @param ExtensibleDataInterface[] $items
     * @return $this
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function setItems(array $items = null): static
    {
        return $this;
    }

    /**
     * Get search criteria.
     *
     * @return SearchCriteriaInterface|null
     */
    public function getSearchCriteria(): ?SearchCriteriaInterface
    {
        return $this->searchCriteria;
    }

    /**
     * Set search criteria.
     *
     * @param SearchCriteriaInterface|null $searchCriteria
     * @return $this
     */
    public function setSearchCriteria(SearchCriteriaInterface $searchCriteria = null): static
    {
        $this->searchCriteria = $searchCriteria;
        return $this;
    }

    /**
     * Get total count.
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->getSize();
    }

    /**
     * Set total count.
     *
     * @param int $totalCount
     * @return $this
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function setTotalCount($totalCount): static
    {
        return $this;
    }
}
