<?php

namespace MikuniLabo\VideoCloudy;

/**
 * VideoCloud OAuth API Client
 *
 * @see    http://docs.brightcove.com/en/video-cloud/oauth-api/getting-started/oauth-api-overview.html
 * @author Kuniyasu Wada
 */
Trait AuthClient
{
    /** @var string API Auth URL */
    private $authUrl;

    /** @var string Videocloud Account ID */
    private $accountId;

    /** @var string Videocloud Client ID */
    private $clientId;

    /** @var string Videocloud Client Secret */
    private $clientSecret;

    /** @var string API Access Token */
    private $accessToken;

    /** @var string API Token Expires */
    private $expiresOn;

    /**
     * Authentication for access token...
     *
     * @return void
     */
    public function authenticate()
    {
        $url = "{$this->getAuthUrl()}/v3/access_token?grant_type=client_credentials";
        $header = [
            'Content-type: application/x-www-form-urlencoded',
        ];

        $result = $this->call('POST', $url, $header);

        if ( !empty($result->access_token) )
        {
            $this->setAccessToken($result->access_token);
            $this->setExpiresOn($result->expires_in + time());
        }

        return $result;
    }

    public function setAuthUrl($authUrl)
    {
        $this->authUrl = $authUrl;
        return $this;
    }

    public function getAuthUrl()
    {
        return $this->authUrl;
    }

    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
        return $this;
    }

    public function getAccountId()
    {
        return $this->accountId;
    }

    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
        return $this;
    }

    public function getClientId()
    {
        return $this->clientId;
    }

    public function setClientSecret($clientSecret)
    {
        $this->clientSecret = $clientSecret;
        return $this;
    }

    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    public function getAccessToken()
    {
        return $this->accessToken;
    }

    public function setExpiresOn($expiresOn)
    {
        $this->expiresOn = $expiresOn;
        return $this;
    }

    public function getExpiresOn()
    {
        return $this->expiresOn;
    }

}
