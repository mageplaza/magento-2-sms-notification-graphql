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

use Magento\Framework\Exception\LocalizedException;
use Mageplaza\SmsNotificationGraphQl\Model\Resolver\MpSmsMutation;

/**
 * Class Send
 * @package Mageplaza\SmsNotificationGraphQl\Model\Resolver\Mutation
 */
class Send extends MpSmsMutation
{
    /**
     * @param $context
     * @param array $args
     *
     * @return bool
     * @throws LocalizedException
     */
    public function runFunction($context, $args)
    {
        return $this->smsNotificationRepository->sendOTP($args['input']['telephone'], $args['input']['store_id']);
    }
}
