<?php

declare(strict_types=1);

/**
 * File: Example.php
 *
 * @author Bartosz Kubicki b.w.kubicki@gmail.com>
 * Github: https://github.com/bartoszkubicki
 */

namespace BKubicki\CustomAppAreaPlayground\Plugin\Model;

use BKubicki\CustomAppAreaPlayground\Model\Example as RealExample;

/**
 * Class Data
 * @package BKubicki\CustomAppAreaPlayground\Plugin\Helper
 */
class Example
{
    /**
     * @param RealExample $subject
     * @param string $result
     *
     * @return string
     */
    public function afterSayHello(RealExample $subject, string $result): string
    {
        $result .= ' world';
        return $result;
    }
}
