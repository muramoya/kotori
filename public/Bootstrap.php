<?php
/**
 * Bootstrap
 * Date: 2016/06/25
 * @author muramoya
 * @version: 1.0
 */

use Phalcon\Mvc\Application;
use Phalcon\Loader;
use KTRLib\Config;
use Phalcon\Di\FactoryDefault;

class Bootstrap
{
    /**
     * @var Application
     */
    private $app;

    public function __construct()
    {

        $di = new FactoryDefault();
        /*
         * services
         ************************/
        $serviceConf = Config::factory('services.php');
        if($serviceConf->count() > 0) {
            foreach ($serviceConf as $name => $class) {
                $di->set($name, $class);
            }
        }

        //クロージャでの登録
        require_once __DIR__.'/../conf/services_from_closure.php';

        /*
         * dotenv
         ************************/
        $di->get('env');

        /*
         * autoload
         ************************/
        $loadConf = Config::factory('loader.php');
        if (!empty($loadConf))
        {
            $loader = new Loader();
            $loader->registerNamespaces($loadConf->toArray())->register();
        }

        $this->app = new Application($di);
    }

    public function dispatch()
    {
        try
        {
            $this->app->dispatcher->setActionSuffix('');
            $this->app->handle();
        }
        catch(\Exception $e)
        {
            throw $e;
        }
        catch (\Error $e)
        {
            throw $e;
        }
    }
}