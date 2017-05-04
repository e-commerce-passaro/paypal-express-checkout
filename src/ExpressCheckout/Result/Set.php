<?php
namespace Ecompassaro\Paypal\ExpressCheckout\Result;

use Ecompassaro\Paypal\ExpressCheckout\Result;

class Set extends Result
{
    protected $token;
    
    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return Set
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }
}
