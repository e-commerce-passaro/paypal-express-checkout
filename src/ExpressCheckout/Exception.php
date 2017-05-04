<?php
namespace Ecompassaro\Paypal\ExpressCheckout;

use \Exception as PHPException;

class Exception extends PHPException
{
    const CONFIG_PARAM_HOST_INVALID = "o parâmetro Host é obrigatório";
    const CONFIG_PARAM_USER_INVALID = "o parâmetro USER é obrigatório";
    const CONFIG_PARAM_PWD_INVALID = "o parâmetro PWD é obrigatório";
    const CONFIG_PARAM_SIGNATURE_INVALID = "o parâmetro SIGNATURE é obrigatório";
}
