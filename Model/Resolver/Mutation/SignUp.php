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
use Magento\Framework\GraphQl\Exception\GraphQlInputException;
use Mageplaza\SmsNotificationGraphQl\Model\Resolver\MpSmsMutation;

/**
 * Class SignUp
 * @package Mageplaza\SmsNotificationGraphQl\Model\Resolver\Mutation
 */
class SignUp extends MpSmsMutation
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
        if ($context->getExtensionAttributes()->getIsCustomer() === false) {
            throw new GraphQlInputException(__('Can not sign up sms notification.'));
        }
        $customer   = $this->getCustomer->execute($context);
        $customerId = $customer->getId();

        return $this->smsNotificationRepository->registerNotification(
            $customerId,
            $args['input']['is_behavior'],
            $args['input']['is_order']
        );
    }
}
