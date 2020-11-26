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

namespace Mageplaza\SmsNotificationGraphQl\Model\Resolver;

use Magento\CustomerGraphQl\Model\Customer\GetCustomer;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Mageplaza\SmsNotification\Helper\Data;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;
use Mageplaza\SmsNotification\Api\SmsNotificationRepositoryInterface;

/**
 * Class MpSmsMutation
 * @package Mageplaza\SmsNotificationGraphQl\Model\Resolver
 */
class MpSmsMutation implements ResolverInterface
{

    /**
     * @var Data
     */
    protected $_helperData;

    /**
     * @var SmsNotificationRepositoryInterface
     */
    protected $smsNotificationRepository;

    /**
     * @var GetCustomer
     */
    protected $getCustomer;

    /**
     * MpSmsMutation constructor.
     *
     * @param Data $helperData
     * @param SmsNotificationRepositoryInterface $smsNotificationRepository
     * @param GetCustomer $getCustomer
     */
    public function __construct(
        Data $helperData,
        SmsNotificationRepositoryInterface $smsNotificationRepository,
        GetCustomer $getCustomer
    ) {
        $this->_helperData               = $helperData;
        $this->smsNotificationRepository = $smsNotificationRepository;
        $this->getCustomer               = $getCustomer;
    }

    /**
     * @inheritdoc
     */
    public function resolve(Field $field, $context, ResolveInfo $info, array $value = null, array $args = null)
    {
        if (!$this->_helperData->isEnabled()) {
            throw new GraphQlInputException(__('The module is disabled'));
        }

        return $this->runFunction($context, $args);
    }

    /**
     * @param $context
     * @param array $args
     *
     * @return bool
     */
    public function runFunction($context, $args)
    {
        return true;
    }
}
