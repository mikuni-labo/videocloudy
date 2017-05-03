<?php

namespace MikuniLabo\VideoCloudy;

use MikuniLabo\Curly\Curly;

/**
 * Connection for VideoCloud
 *
 * @author Kuniyasu Wada
 */
class Connection
{
    /** @var Curl $ch */
    private $ch;

    /**
     * Create a new class instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->ch = new Curly;
    }

    /**
     * cURLライブラリで接続後、JSONをパースして返す
     *
     * @param  string $method
     * @param  string $url
     * @param  array  $header
     * @param  array  $param
     * @return mixed
     */
    protected function call($method, $url, $header = array(), $param = array())
    {
        $this->ch->init();
        $this->ch->setUrl($url);
        $this->ch->setMethod($method);
        $this->ch->setUserPwd($this->getClientId(), $this->getClientSecret());
        $this->ch->setHeaderFromArray($header);
        $this->ch->setParameterFromArray($param);
        $this->ch->setJsonTransfer(true);
        $response = $this->ch->exec();
        $this->ch->close();

        return json_decode($response);
    }

    public function getCh()
    {
        return $this->ch;
    }

}
