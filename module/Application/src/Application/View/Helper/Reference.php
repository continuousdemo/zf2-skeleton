<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 16/07/15
 * Time: 19:46
 */

namespace Application\View\Helper;

use Zend\View\Helper\AbstractHelper;

class Reference extends AbstractHelper
{
    /**
     * Returns continuousphp build id
     *
     * @return string
     */
    public function __invoke()
    {
        if (file_exists('continuousphp.package')) {
            $info = json_decode(file_get_contents('continuousphp.package'), true);
            return $info['ref'];
        } else {
            return 'none';
        }
    }
}
