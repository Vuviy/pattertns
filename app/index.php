<?php

declare(strict_types=1);

use App\AbstractFactory\Factory\CardPaymentFactory;
use App\AbstractFactory\Factory\PaypalPaymentFactory;
use App\AbstractFactory\PaymentService;
use App\Adapter\StripeAdapter;
use App\Adapter\StripeApi;
use App\Builder\OrderBuilder;
use App\Command\Light;
use App\Command\RemoteControl;
use App\Command\TurnOffLightCommand;
use App\Command\TurnOnLightCommand;
use App\Facade\AuthFacade;
use App\Facade\AuthService;
use App\Facade\SessionManager;
use App\Facade\UserRepository;
use App\FactoryMethod\Service\EmailNotificationService;
use App\FactoryMethod\Service\SmsNotificationService;
use App\FactoryMethod\Service\TelegramNotificationService;
use App\Iterator\MyCollection;
use App\Prototype\PrototypeRegistry;
use App\Prototype\UserProfile;
use App\Proxy\FileDownloader;
use App\Proxy\FileDownloaderProxy;
use App\Strategy\PriceCalculator;
use App\Strategy\RegularPriceStrategy;
use App\Strategy\SuperVipPriceStrategy;
use App\Strategy\VipPriceStrategy;
use App\TemplateMethod\CreditCardPayment;
use App\TemplateMethod\PaypalPayment;

require __DIR__ . '/functions/functions.php';
require __DIR__ . '/vendor/autoload.php';



// Strategy

$type = 'regular';

$strategy = match ($type) {
    'regular' => new RegularPriceStrategy(),
    'vip' => new VipPriceStrategy(),
    'super_vip' => new SuperVipPriceStrategy(),
};

$calculator = new PriceCalculator($strategy);
$price =  $calculator->calculate(1000);

//dd($price);

// Strategy
//-----------------------------------------------------------------

// Factory Method

$type = 'telegram';

$service = match ($type) {
    'email' => new EmailNotificationService(),
    'sms' => new SmsNotificationService(),
    'telegram' => new TelegramNotificationService(),
};

//$service->send('Hello');
// Factory Method
//-----------------------------------------------------------------

//AbstractFactory

$type = 'paypal';

$factory = match ($type) {
    'card' => new CardPaymentFactory(),
    'paypal' => new PaypalPaymentFactory(),
};

$service = new PaymentService($factory);
$service->pay(1000);

//AbstractFactory
//-----------------------------------------------------------------

//Builder


$builder = new OrderBuilder();


$order = $builder
    ->setCustomer('Timofei')
    ->addItem('item1')
    ->addItem('item2')
    ->addItem('item255555')
    ->asGift()
    ->addComment('my comment')
    ->setDeliveryAddress('New York City')
    ->applyPromoCode('SALE10')
    ->build();

//dd($order);

//Builder
//-----------------------------------------------------------------

//Prototype
$defaultUser = new UserProfile(
    'default',
    ['read', 'write'],
    ['theme' => 'dark', 'lang' => 'ua'],
    new DateTime()
);

$registry = new PrototypeRegistry();
$registry->add('default_user', $defaultUser);

$user = $registry->get('default_user');
$user->name = 'Oleg';

//dd($user);


//Prototype
//-----------------------------------------------------------------

//Adapter

$stripe = new StripeApi();
$adapter = new StripeAdapter($stripe);

$adapter->pay(1000);

//Adapter
//-----------------------------------------------------------------

//Facade

$authService = new AuthService();
$userRepository = new UserRepository();
$sessionManager = new SessionManager();

$authFacade = new AuthFacade($authService, $userRepository, $sessionManager);

$authFacade->login('login', 'password');

//Facade
//-----------------------------------------------------------------


//Proxy

$downloader = new FileDownloaderProxy(new FileDownloader());
$downloader->download("https://example.com/file.txt");

//Proxy
//-----------------------------------------------------------------



//Command

$light = new Light();

$turnOn = new TurnOnLightCommand($light);
$turnOff = new TurnOffLightCommand($light);

$remote = new RemoteControl();

$remote->setCommand($turnOn);
$remote->setCommand($turnOff);

$remote->pressButton();
$remote->pressButton();

//Command
//-----------------------------------------------------------------


//Iterator

$collection = new MyCollection(['a','b','c']);
foreach ($collection as $key => $value) {
    echo "$key => $value\n";
}

//Iterator
//-----------------------------------------------------------------

//TemplateMethod

$creditPayment = new CreditCardPayment();
$creditPayment->processPayment(1000, 'Mavzidun');

$paypalPayment = new PaypalPayment();
$paypalPayment->processPayment(2500, 'Natashka');


//TemplateMethod
//-----------------------------------------------------------------
