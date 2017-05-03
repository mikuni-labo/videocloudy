<?php

namespace MikuniLabo\VideoCloudy;

/**
 * Operation Notification Resources
 *
 * @see    http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-notificationGroup
 * @author Kuniyasu Wada
 */
Trait NotificationsClient
{
    /** @var string Subscription ID */
    private $subscriptionId;

    /**
     * Get Subscriptions List
     *
     * Get a list of all notification subscriptions for the account
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-notificationGroup-Get_Subscriptions_List
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/subscriptions
     * @return  mixed
     */
    public function getSubscriptionsList()
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/subscriptions";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Create Subscription
     *
     * Establishes up to 10 endpoints that video changes should be sent to.
     * Any change in video metadata will trigger a video change event and a notification
     * — changes to assets used by the video will not trigger change events.
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-notificationGroup-Create_Subscription
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/subscriptions
     * @param   array $param
     * @return  mixed
     */
    public function createSubscription($param = array())
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/subscriptions";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('POST', $url, $header, $param);
    }

    /**
     * Get Subscription
     *
     * Get a notification subscription for the account
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-notificationGroup-Get_Subscription
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/subscriptions/:subscription_id
     * @return  mixed
     */
    public function getSubscription()
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/subscriptions/{$this->getSubscriptionId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Delete Subscription
     *
     * Get a notification subscription for the account
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-notificationGroup-Delete_Subscription
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/subscriptions/:subscription_id
     * @return  mixed
     */
    public function deleteSubscription()
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/subscriptions/{$this->getSubscriptionId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('DELETE', $url, $header);
    }

    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;
        return $this;
    }

    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

}
