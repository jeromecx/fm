<?php declare(strict_types=1);

namespace Customer\Connexion\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface LogsInterface extends ExtensibleDataInterface
{
    /**
     * The unique ID for a "Connexion log" object.
     */
    public const string CONNEXION_ID = 'connexion_id';

    /**
     * The customer ID
     */
    public const string CUSTOMER_ID = 'customer_id';

    /**
     * The IP address of customer
     */
    public const string IP = 'ip';

    /**
     * Created at timestamp
     */
    public const string CREATED_AT = 'created_at';

    /**
     * Updated at timestamp
     */
    public const string UPDATED_AT = 'updated_at';

    /**
     * Get connexion log id
     *
     * @return int|null
     */
    public function getConnexionId();

    /**
     * Set connexion log id
     *
     * @param int $id
     * @return $this
     */
    public function setConnexionId(int $id);

    /**
     * Gets the customer ID for the connexion log.
     *
     * @return int|null Customer ID.
     */
    public function getCustomerId();

    /**
     * Sets the customer ID for the connexion log.
     *
     * @param int $id
     * @return $this
     */
    public function setCustomerId($id);

    /**
     * Gets the customer IP for the connexion log.
     *
     * @return int|null Customer IP.
     */
    public function getIp();

    /**
     * Sets the customer IP for the connexion log.
     *
     * @param int $ip
     * @return $this
     */
    public function setIp($ip);

    /**
     * Gets the created-at timestamp for the connexion log.
     *
     * @return string|null Created-at timestamp.
     */
    public function getCreatedAt();

    /**
     * Sets the created-at timestamp for the connexion log.
     *
     * @param string $createdAt timestamp
     * @return $this
     */
    public function setCreatedAt($createdAt);

    /**
     * Gets the updated-at timestamp for the connexion log.
     *
     * @return string|null Updated-at timestamp.
     */
    public function getUpdatedAt();

    /**
     * Sets the updated-at timestamp for the connexion log.
     *
     * @param string $timestamp
     * @return $this
     */
    public function setUpdatedAt($timestamp);
}
