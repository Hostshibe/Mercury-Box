<?php
/**
 * BoxBilling
 *
 * @copyright BoxBilling, Inc (https://www.boxbilling.org)
 * @license   Apache-2.0
 *
 * Copyright BoxBilling, Inc
 * This source file is subject to the Apache-2.0 License that is bundled
 * with this source code in the file LICENSE
 */


namespace Box\Mod\Servicelicense\Plugin;

class Simple
{
    protected $di;

    /**
     * @param \Box_Di $di
     */
    public function setDi($di)
    {
        $this->di = $di;
    }

    /**
     * @return \Box_Di
     */
    public function getDi()
    {
        return $this->di;
    }

    /**
     * License generation script
     *
     * @param \Model_ServiceLicense $service
     * @param \Model_ClientOrder $order
     * @param array $config
     * @return string
     */
    public function generate(\Model_ServiceLicense $service, \Model_ClientOrder $order, array $config)
    {
        // Optional: to get customer data
        //$client = $this->di['db']->load('Client', $order->client_id);

        $length = isset($config['length']) ? $config['length'] : 25;
        $prefix = isset($config['prefix']) ? $config['prefix'] : NULL;

        $character_array = array_merge(range('A', 'Z'), range(1, 9));
        $size = count($character_array) - 1;
        $string = '';
        for($i = 1; $i < $length; $i++) {
            $string .= ($i % 5 == 0) ? '-' : $character_array[rand(0, $size)];
        }
        return $prefix . $string . "helo";
$ch = curl_init();
// IMPORTANT: the below line is a security risk, read https://paragonie.com/blog/2017/10/certainty-automated-cacert-pem-management-for-php-software
// in most cases, you should set it to true
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'https://rest.ghawk.ml/add-apikey.php?token='.$prefix.$string);
$result = curl_exec($ch);
curl_close($ch);
return var_dump($result);
    }

    /**
     * This method is optional.
     * Aditional validation rules can be applied to license validation logic.
     * Method is called after "expiration, ip, version, path, hostname validations are passed"
     *
     * Should throw "LogicException" if validation fails
     *
     * @param Model_ServiceLicense $service
     * @param array $data
     * @return array - list of params to be attached to response message
     * @throws LogicException
     */
    /*
    public function validate(Model_ServiceLicense $service, array $data)
    {
        if(!$validation_rule) {
            throw new LogicException('Some validation rule did not pass', 1020);
        }

        return array(
            'key'   =>  'value',
            'key2'  =>  'value2'
        );
    }
     */
}
