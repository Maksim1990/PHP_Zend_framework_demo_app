<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Portal\Controller;

use PDO;
use Portal\Service\CurrencyConverter;
use Portal\Service\Factory\CurrencyConverterFactory;
use Zend\Debug\Debug;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\ServiceManager\ServiceManager;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractController
{
    public function indexAction()
    {
//        try{
//            $dbh = new pdo( 'mysql:host=mysql;dbname=zend_db',
//                'docker',
//                'docker',
//                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
//            die(json_encode(array('outcome' => true)));
//        }
//        catch(PDOException $ex){
//            die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
//        }

        //########How to register new service into ServiceManager (for 1-3)
        $serviceManager=$this->getServiceManager();


        // This is equivalent to the setInvokableClass() method from previous section.
        ##1 With Factory
        //$serviceManager->setFactory(CurrencyConverter::class, CurrencyConverterFactory::class);
        //$serviceManager->setAlias('CurConv', CurrencyConverter::class);
        //$service = $serviceManager->get('CurConv');

        ##2 Simple service registration
        //$service = new CurrencyConverter();
        //$serviceManager->setService(CurrencyConverter::class, $service);

        //3 Register as an invokable class
        $serviceManager->setInvokableClass(CurrencyConverter::class);
        $serviceManager->setAlias('CurConv', CurrencyConverter::class);
        $service = $serviceManager->get('CurConv');

        //### 4 With global Service manager settings
//        $service = $this->getServiceManager()->get('CurConv');
//
        $convertedAmount = $service->convertEURtoUSD(50);
        Debug::dump($convertedAmount);


        return new ViewModel();
    }
}


