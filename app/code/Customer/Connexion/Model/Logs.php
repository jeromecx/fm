<?php declare(strict_types=1);

namespace Customer\Connexion\Model;

use Customer\Connexion\Api\Data\LogsInterface;
use Magento\Framework\Model\AbstractModel;

class Logs extends AbstractModel implements LogsInterface
{
    /**
     * @inheritDoc
     */
    public function getConnexionId()
    {
        return $this->getData(self::CONNEXION_ID);
    }

    /**
     * @inheritDoc
     */
    public function setConnexionId(int $id)
    {
        return $this->setData(self::CONNEXION_ID, $id);
    }

    /**
     * @inheritDoc
     */
    public function getCustomerId()
    {
        return $this->getData(self::CUSTOMER_ID);
    }

    /**
     * @inheritDoc
     */
    public function setCustomerId($id)
    {
        return $this->setData(self::CUSTOMER_ID, $id);
    }

    /**
     * @inheritDoc
     */
    public function getIp()
    {
        return $this->getData(self::IP);
    }

    /**
     * @inheritDoc
     */
    public function setIp($ip)
    {
        return $this->setData(self::IP, $ip);
    }

    /**
     * @inheritDoc
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * @inheritDoc
     */
    public function getUpdatedAt()
    {
        return $this->getData(self::UPDATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setUpdatedAt($timestamp)
    {
        return $this->setData(self::UPDATED_AT, $timestamp);
    }
}
