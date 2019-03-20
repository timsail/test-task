<?php
	/** Установщик модуля */

	/** @var array $INFO реестр модуля */
	$INFO = [
		'name' => 'emarket',
		'config' => '1',
		'default_method_admin' => 'orders',
		'enable-discounts' => '1',
		'enable-currency' => '1',
		'enable-stores' => '1',
		'enable-payment' => '1',
		'enable-delivery' => '1',
		'delivery-with-address' => '0',
		'purchasing-one-step' => '0',
	];

	/** @var array $COMPONENTS файлы модуля */
	$COMPONENTS = [
		'./classes/components/emarket/manifest/actions/UpdateOrderDomainIds.php',
		'./classes/components/emarket/manifest/actions/UpdateRussianpostTypes.php',
		'./classes/components/emarket/manifest/install.xml',
		'./classes/components/emarket/manifest/update.xml',
		'./classes/components/emarket/admin.php',
		'./classes/components/emarket/autoload.php',
		'./classes/components/emarket/class.php',
		'./classes/components/emarket/customAdmin.php',
		'./classes/components/emarket/customMacros.php',
		'./classes/components/emarket/events.php',
		'./classes/components/emarket/handlers.php',
		'./classes/components/emarket/i18n.en.php',
		'./classes/components/emarket/i18n.php',
		'./classes/components/emarket/includes.php',
		'./classes/components/emarket/install.php',
		'./classes/components/emarket/lang.en.php',
		'./classes/components/emarket/lang.php',
		'./classes/components/emarket/macros.php',
		'./classes/components/emarket/notification.php',
		'./classes/components/emarket/permissions.php',
		'./classes/components/emarket/printInvoices.php',
		'./classes/components/emarket/purchasingOneClick.php',
		'./classes/components/emarket/purchasingOneStep.php',
		'./classes/components/emarket/purchasingStages.php',
		'./classes/components/emarket/purchasingStagesSteps.php',
		'./classes/components/emarket/statReports.php',
		'./classes/components/emarket/umiManagerAPI.php',
		'./classes/components/emarket/yandexMarketClient.php',
		'./classes/components/emarket/deliverySettingsAdmin.php',
		'./classes/components/emarket/services.php',
		'./classes/components/emarket/settings.php',
		'./classes/components/emarket/classes/customer/customer.php',
		'./classes/components/emarket/classes/discounts/discount.php',
		'./classes/components/emarket/classes/discounts/discountModificator.php',
		'./classes/components/emarket/classes/discounts/discountRule.php',
		'./classes/components/emarket/classes/discounts/iItemDiscountRule.php',
		'./classes/components/emarket/classes/discounts/iOrderDiscountRule.php',
		'./classes/components/emarket/classes/discounts/discounts/bonusDiscount.php',
		'./classes/components/emarket/classes/discounts/discounts/itemDiscount.php',
		'./classes/components/emarket/classes/discounts/discounts/orderDiscount.php',
		'./classes/components/emarket/classes/discounts/modificators/absolute.php',
		'./classes/components/emarket/classes/discounts/modificators/proc.php',
		'./classes/components/emarket/classes/discounts/rules/allOrdersPrices.php',
		'./classes/components/emarket/classes/discounts/rules/dateRange.php',
		'./classes/components/emarket/classes/discounts/rules/items.php',
		'./classes/components/emarket/classes/discounts/rules/orderPrice.php',
		'./classes/components/emarket/classes/discounts/rules/relatedItems.php',
		'./classes/components/emarket/classes/discounts/rules/userGroups.php',
		'./classes/components/emarket/classes/discounts/rules/users.php',
		'./classes/components/emarket/classes/orders/order.php',
		'./classes/components/emarket/classes/orders/Calculator.class.php',
		'./classes/components/emarket/classes/orders/orderItem.php',
		'./classes/components/emarket/classes/orders/items/custom.php',
		'./classes/components/emarket/classes/orders/items/digital.php',
		'./classes/components/emarket/classes/orders/items/Filter.php',
		'./classes/components/emarket/classes/orders/items/iFilter.php',
		'./classes/components/emarket/classes/orders/items/optioned.php',
		'./classes/components/emarket/classes/orders/number/default.php',
		'./classes/components/emarket/classes/orders/number/iOrderNumber.php',
		'./classes/components/emarket/classes/payment/payment.php',
		'./classes/components/emarket/classes/payment/api/kupivkredit.php',
		'./classes/components/emarket/classes/payment/Parameter/iMode.php',
		'./classes/components/emarket/classes/payment/Parameter/Mode.php',
		'./classes/components/emarket/classes/payment/Parameter/iSubject.php',
		'./classes/components/emarket/classes/payment/Parameter/Subject.php',
		'./classes/components/emarket/classes/payment/Parameter/Mode/Facade.php',
		'./classes/components/emarket/classes/payment/Parameter/Mode/iFacade.php',
		'./classes/components/emarket/classes/payment/Parameter/Mode/Factory.php',
		'./classes/components/emarket/classes/payment/Parameter/Mode/iFactory.php',
		'./classes/components/emarket/classes/payment/Parameter/Mode/Repository.php',
		'./classes/components/emarket/classes/payment/Parameter/Mode/iRepository.php',
		'./classes/components/emarket/classes/payment/Parameter/Subject/Facade.php',
		'./classes/components/emarket/classes/payment/Parameter/Subject/iFacade.php',
		'./classes/components/emarket/classes/payment/Parameter/Subject/Factory.php',
		'./classes/components/emarket/classes/payment/Parameter/Subject/iFactory.php',
		'./classes/components/emarket/classes/payment/Parameter/Subject/Repository.php',
		'./classes/components/emarket/classes/payment/Parameter/Subject/iRepository.php',
		'./classes/components/emarket/classes/payment/systems/acquiropay.php',
		'./classes/components/emarket/classes/payment/systems/courier.php',
		'./classes/components/emarket/classes/payment/systems/dengionline.php',
		'./classes/components/emarket/classes/payment/systems/invoice.php',
		'./classes/components/emarket/classes/payment/systems/kupivkredit.php',
		'./classes/components/emarket/classes/payment/systems/payanyway.php',
		'./classes/components/emarket/classes/payment/systems/payonline.php',
		'./classes/components/emarket/classes/payment/systems/paypal.php',
		'./classes/components/emarket/classes/payment/systems/rbk.php',
		'./classes/components/emarket/classes/payment/systems/receipt.php',
		'./classes/components/emarket/classes/payment/systems/robox.php',
		'./classes/components/emarket/classes/payment/systems/yandex30.php',
		'./classes/components/emarket/classes/stat/emarketTop.php',
		'./classes/components/emarket/classes/delivery/Address/Address.php',
		'./classes/components/emarket/classes/delivery/Address/AddressFactory.php',
		'./classes/components/emarket/classes/delivery/Address/iAddress.php',
		'./classes/components/emarket/classes/delivery/Address/iAddressFactory.php',
		'./classes/components/emarket/classes/delivery/Address/iAddressFactory.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/iProvider.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/iProvidersFactory.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/iProvidersSettings.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/iRequestDataFactory.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/iRequestSender.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/Provider.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/ProvidersFactory.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/ProvidersSettings.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/RequestDataFactory.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/RequestSender.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/Enums/DeliveryTypes.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/Enums/OrderStatuses.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/Enums/PickupTypes.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/Enums/PointOperations.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/Enums/PointTypes.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/Enums/ProvidersKeys.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/Exceptions/UnsupportedProviderKeyException.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/ModuleApi/Admin.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/ModuleApi/Common.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/Orders/Collection.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/Orders/ConstantMap.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/Orders/Entity.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/Orders/iCollection.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/Orders/iEntity.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/providers/A1.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/providers/B2cpl.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/providers/Boxberry.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/providers/Cdek.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/providers/Dpd.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/providers/Hermes.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/providers/Iml.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/providers/Maxi.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/providers/Pickpoint.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/providers/Pony.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/providers/Spsr.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/RequestData/CalculateDeliveryCost.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/RequestData/ConnectProvider.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/RequestData/iCalculateDeliveryCost.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/RequestData/iConnectProvider.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/RequestData/iSendOrder.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/RequestData/SendOrder.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/RequestDataParts/City.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/RequestDataParts/DeliveryAgent.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/RequestDataParts/iCity.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/RequestDataParts/iDeliveryAgent.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/RequestDataParts/iOrder.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/RequestDataParts/iOrderCost.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/RequestDataParts/iOrderItem.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/RequestDataParts/Order.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/RequestDataParts/OrderItem.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/Utils/ArgumentsValidator.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/Utils/iArgumentsValidator.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/Utils/iOrderStatusConverter.php',
		'./classes/components/emarket/classes/delivery/api/ApiShip/Utils/OrderStatusConverter.php',
		'./classes/components/emarket/classes/delivery/delivery.php',
		'./classes/components/emarket/classes/delivery/systems/courier.php',
		'./classes/components/emarket/classes/delivery/systems/russianpost.php',
		'./classes/components/emarket/classes/delivery/systems/russianpost/PackIdProvider.php',
		'./classes/components/emarket/classes/delivery/systems/russianpost/iPackIdProvider.php',
		'./classes/components/emarket/classes/delivery/systems/self.php',
		'./classes/components/emarket/classes/delivery/systems/ApiShip.php',
		'./classes/components/emarket/classes/payment/api/Yandex/Client/Exception/Response/Error.php',
		'./classes/components/emarket/classes/payment/api/Yandex/Client/Exception/Response/Incorrect.php',
		'./classes/components/emarket/classes/payment/api/Yandex/Client/iKassa.php',
		'./classes/components/emarket/classes/payment/api/Yandex/Client/Kassa.php',
		'./classes/components/emarket/classes/payment/api/PayOnline/Client/Exception/Response/Error.php',
		'./classes/components/emarket/classes/payment/api/PayOnline/Client/Exception/Response/Incorrect.php',
		'./classes/components/emarket/classes/payment/api/PayOnline/Client/Fiscal.php',
		'./classes/components/emarket/classes/payment/api/PayOnline/Client/iFiscal.php',
		'./classes/components/emarket/classes/payment/systems/YandexKassa.php',
		'./classes/components/emarket/classes/Serializer/Receipt/iParameter.php',
		'./classes/components/emarket/classes/Serializer/Receipt/Parameter.php',
		'./classes/components/emarket/classes/Serializer/Receipt/Parameter/Factory.php',
		'./classes/components/emarket/classes/Serializer/Receipt/Parameter/iFactory.php',
		'./classes/components/emarket/classes/Serializer/Receipt/Parameter/Facade.php',
		'./classes/components/emarket/classes/Serializer/Receipt/Parameter/iFacade.php',
		'./classes/components/emarket/classes/Serializer/Receipt/Parameter/Repository.php',
		'./classes/components/emarket/classes/Serializer/Receipt/Parameter/iRepository.php',
		'./classes/components/emarket/classes/Serializer/Receipt/Factory.php',
		'./classes/components/emarket/classes/Serializer/Receipt/iFactory.php',
		'./classes/components/emarket/classes/Serializer/Receipt/PayAnyWay.php',
		'./classes/components/emarket/classes/Serializer/Receipt/RoboKassa.php',
		'./classes/components/emarket/classes/Serializer/Receipt/YandexKassa3.php',
		'./classes/components/emarket/classes/Serializer/Receipt/YandexKassa4.php',
		'./classes/components/emarket/classes/Serializer/Receipt/PayOnline.php',
		'./classes/components/emarket/classes/Serializer/iReceipt.php',
		'./classes/components/emarket/classes/Serializer/Receipt.php',
		'./classes/components/emarket/classes/Tax/Rate/Vat/Facade.php',
		'./classes/components/emarket/classes/Tax/Rate/Vat/Factory.php',
		'./classes/components/emarket/classes/Tax/Rate/Vat/iFacade.php',
		'./classes/components/emarket/classes/Tax/Rate/Vat/iFactory.php',
		'./classes/components/emarket/classes/Tax/Rate/Vat/iRepository.php',
		'./classes/components/emarket/classes/Tax/Rate/Vat/Repository.php',
		'./classes/components/emarket/classes/Tax/Rate/iVat.php',
		'./classes/components/emarket/classes/Tax/Rate/Calculator.php',
		'./classes/components/emarket/classes/Tax/Rate/iCalculator.php',
		'./classes/components/emarket/classes/Tax/Rate/iParser.php',
		'./classes/components/emarket/classes/Tax/Rate/Parser.php',
		'./classes/components/emarket/classes/Tax/Rate/Parser/iFactory.php',
		'./classes/components/emarket/classes/Tax/Rate/Parser/Factory.php',

	];

