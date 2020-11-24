<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_SmsNotificationGraphQl
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

declare(strict_types=1);

namespace Mageplaza\SmsNotificationGraphQl\Model\Resolver\Mutation;

use Magento\Framework\Webapi\Exception;
use Mageplaza\SmsNotificationGraphQl\Model\Resolver\MpSmsMutation;

/**
 * Class CheckVerify
 * @package Mageplaza\SmsNotificationGraphQl\Model\Resolver\Mutation
 */
class CheckVerify extends MpSmsMutation
{
    /**
     * @param $context
     * @param array $args
     *
     * @return bool|string
     * @throws Exception
     */
    public function runFunction($context, $args)
    {
        return $this->smsNotificationRepository->checkVerify($args['telephone']);
    }
}
