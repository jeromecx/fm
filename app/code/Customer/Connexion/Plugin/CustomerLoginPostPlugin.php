<?php

declare(strict_types=1);

namespace Customer\Connexion\Plugin;

use Magento\Framework\App\RequestInterface;

/**
 * Introduces Context information for ActionInterface of Customer Action
 */
class CustomerLoginPostPlugin
{
    /**
     * @var RequestInterface
     */
    private RequestInterface $request;

    /**
     * @param RequestInterface $request
     */
    public function __construct(RequestInterface $request)
    {
        $this->request = $request;
    }

    public function beforeExecute(): void
    {
        $login = $this->request->getParam('login');
        // TODO
    }
}
