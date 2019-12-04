<?php
/**
 * Date: 2019/12/4
 * Time: 16:14
 */

namespace app\lib\exception;
use Exception;
use Throwable;

class BaseException extends Exception
{
    public $code;
    public $msg;
    public $errorCode;

    public function __construct($params=[])
    {
        if (!is_array($params))return;
        if (array_key_exists('code',$params)) $this->code = $params['code'];
        if (array_key_exists('msg',$params)) $this->msg = $params['msg'];
        if (array_key_exists('errorCode',$params))$this->errorCode = $params['errorCode'];
    }
}