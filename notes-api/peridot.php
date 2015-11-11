<?php
/**
 * Created by PhpStorm.
 * User: tyler
 * Date: 11/10/15
 * Time: 7:57 PM
 */

use Evenement\EventEmitterInterface;
use Peridot\Plugin\Prophecy\ProphecyPlugin;

return function(EventEmitterInterface $emitter){
    new ProphecyPlugin($emitter);
}

?>