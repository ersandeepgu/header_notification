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

use Magento\Backend\Block\AbstractBlock;

class Init extends AbstractBlock
{
    /**
     * @override
     * @see \Magento\Backend\Block\AbstractBlock::_construct()
     * @return void
     */
    protected function _construct()
    {
        $object = \Magento\Framework\App\ObjectManager::getInstance();
        /** @var \Magento\Framework\View\Page\Config $page */
        $page = $object->get('Magento\Framework\View\Page\Config');
        $page->addPageAsset('Sandeep_NotificationBar::css/styles.css');
    }
}
