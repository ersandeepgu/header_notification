<?php

/**
 * @category  Magento2.XX
 * @package   Sandeep_NotificationBar
 * @author    Sandeep Gupta
 * @email ersandeepgu@gmail.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * 
 */ 
namespace Sandeep\NotificationBar\Block;

use Magento\Framework\View\Element\Template;
use Magento\Store\Model\ScopeInterface;

class Notification extends Template
{
    const BASE_CONFIG_PATH = "notification_bar/";

    public function getSetting($path)
    {
        return  $this->_scopeConfig->getValue(
            self::BASE_CONFIG_PATH . "general/" . $path,
            ScopeInterface::SCOPE_STORE
        );
    }
}
