<?php
/**
 * ソースコードからSeedを実行する
 * Date: 2017/06/01
 * @author muramoya
 * @version: 1.0
 */

namespace KTR\DataBase;

class Seeder
{
    private $opt;
    
    public function __construct($name = null)
    {
        if(is_array($name))
        {
            $this->opt = implode(',', $name);
        }
        elseif (is_string($name))
        {
            $this->opt = $name;
        }
        elseif (is_null($name))
        {
            $this->opt = '';
        }
    }

    public function run()
    {
        $cmd = 'php ' . APP_BASE_PATH . '/kotori db:seed -s %s 2>&1';
        exec(sprintf($cmd, $this->opt), $out, $ret);
    }
}