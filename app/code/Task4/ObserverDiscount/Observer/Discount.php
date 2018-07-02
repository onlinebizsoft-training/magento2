<?php 

namespace Task4\ObserverDiscount\Observer;

use Magento\Framework\Event\ObserverInterface;

class Discount implements ObserverInterface
{

    protected $_customerSession;
 
    public function __construct(
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Framework\Registry $registry)
    {
        $this->_customerSession = $customerSession;
        //parent::__construct($context);
    }

    public function execute(\Magento\Framework\Event\Observer $observer) {
        if ($this->_customerSession->isLoggedIn()) {
            echo "Logged!";
        }
        else echo "Not logged!";
        die();
        
        /*$item = $observer->getEvent()->getData('quote_item');
        $item = ($item->getParentItem() ? $item->getParentItem() : $item);
        $price = $item->getProduct()->getPriceInfo()->getPrice('final_price')->getValue();
        $new_price = $price - ($price * 50 / 100); //discount the price of the product to 50%
        $item->setCustomPrice($new_price);
        $item->setOriginalCustomPrice($new_price);
        $item->getProduct()->setIsSuperMode(true);
        */
    }
}