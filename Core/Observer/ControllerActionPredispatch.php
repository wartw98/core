<?php
namespace Df\Core\Observer;
use Magento\Framework\Event\Observer as O;
use Magento\Framework\Event\ObserverInterface;
final class ControllerActionPredispatch implements ObserverInterface {
	/**
	 * @override
	 * @see ObserverInterface::execute()
	 * @used-by \Magento\Framework\Event\Invoker\InvokerDefault::_callObserverMethod()
	 * @see \Magento\Framework\App\Action\Action::dispatch()
	 * https://github.com/magento/magento2/blob/dd47569249206b217e0a9f9a9371e73fd7622724/lib/internal/Magento/Framework/App/Action/Action.php#L91-L92
	 *	$eventParameters = ['controller_action' => $this, 'request' => $request];
	 *	$this->_eventManager->dispatch('controller_action_predispatch', $eventParameters)
	 * @param O $o
	 */
	function execute(O $o) {df_state()->controllerSet($o['controller_action']);}
}