<?php
/**
 * Bootstrap
 * Date: 2016/06/25
 * @author muramoya
 * @version: 1.0
 */

use Phalcon\Mvc\Micro;
use Phalcon\Loader;
use KTRLib\Config;
use Phalcon\Di\FactoryDefault;
use KTRLib\Router;

class Bootstrap
{
    /**
     * @var Micro
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

        $this->app = new Micro($di);
    }

    public function dispatch()
    {
        try
        {
            $router = new Router($this->app);
            //ルーティングに沿ったcontrollerを設定
            $router->routing();
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