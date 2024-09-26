<?php declare(strict_types=1);

namespace Customer\Connexion\Model;

use Customer\Connexion\Api\Data\LogInterface;
use Customer\Connexion\Api\Data\LogSearchResultsInterfaceFactory;
use Customer\Connexion\Api\LogRepositoryInterface;
use Customer\Connexion\Model\ResourceModel\Log as LogResourceModel;
use Exception;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotSaveException;

/**
 * @inheritdoc
 */
class LogRepository implements LogRepositoryInterface
{
    /**
     * @param LogResourceModel $logResourceModel
     * @param LogSearchResultsInterfaceFactory $searchResultFactory
     * @param CollectionProcessorInterface $collectionProcessor
     */
    public function __construct(
        protected LogResourceModel $logResourceModel,
        protected LogSearchResultsInterfaceFactory $searchResultFactory,
        private readonly CollectionProcessorInterface $collectionProcessor,
    ) {
    }

    /**
     * @inheritDoc
     */
    public function save(LogInterface $log): LogInterface
    {
        try {
            $this->logResourceModel->save($log);
        } catch (Exception $exception) {
            throw new CouldNotSaveException(
                __('The connexion log was unable to be saved. Please try again.'),
                $exception
            );
        }
        return $log;
    }

    /**
     * @inheritDoc
     */
    public function getList(SearchCriteriaInterface $searchCriteria)
    {
        $searchResult = $this->searchResultFactory->create();
        $this->collectionProcessor->process($searchCriteria, $searchResult);
        $searchResult->setSearchCriteria($searchCriteria);
        return $searchResult;
    }
}
