<?php

declare(strict_types=1);

/**
 * File: CustomFrontController.php
 *
 * @author Bartosz Kubicki b.w.kubicki@gmail.com>
 * Github: https://github.com/bartoszkubicki
 */

namespace BKubicki\CustomAppAreaPlayground\Controller;

use Magento\Framework\App\FrontControllerInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ResponseInterface;

/**
 * Class CustomFrontController
 * @package BKubicki\CustomAppAreaPlayground\Controller
 */
class CustomFrontController implements FrontControllerInterface
{
    /**
     * @var ResponseInterface
     */
    private $response;

    /**
     * CustomFrontController constructor.
     *
     * @param ResponseInterface $response
     */
    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    /**
     * @param RequestInterface $request
     * @return ResponseInterface
     */
    public function dispatch(RequestInterface $request)
    {
        $response = 'Hello from custom front controller';
        $this->response->setBody($response);
        return $this->response;
    }
}