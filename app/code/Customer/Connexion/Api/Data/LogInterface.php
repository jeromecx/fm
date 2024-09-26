<?php

namespace Customer\Connexion\Api\Data;

/**
 * Connexion Log interface for API handling
 * @api
 */
interface LogInterface
{
    /**#@+
     * Constants defined for keys of the data array. Identical to the name of the getter in snake case
     */
    public const string CONNEXION_ID = 'connexion_id';
    public const string CUSTOMER_ID = 'customer_id';
    public const string IP = 'ip';
    public const string CREATED_AT = 'created_at';
    public const string UPDATED_AT = 'updated_at';
    /**#@-*/

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
    public function setConnexionId($id);

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
