<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c)  Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license
 * 
*/
namespace Arikaim\Modules\Redis;

use Predis\Client;
use Arikaim\Core\Extension\Module;

/**
 * Redis module class
 */
class Redis extends Module
{   
    /**
     * Redis client
     *
     * @var object
     */
    protected $client;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->setModuleName('redis');
        $this->client = new Client();
    }

    /**
     * Get module instance
     *
     * @return mixed|null
    */
    public function getInstance()
    {
        return $this->client;
    }

    /**
     * Install module
     *
     * @return void
     */
    public function install()
    {      
    }
}
