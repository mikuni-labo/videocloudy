<?php

namespace App\Lib\Api\VideoCloud;

/**
 * DynamicIngest API Client
 *
 * @see    https://brightcovelearning.github.io/Brightcove-API-References/dynamic-ingest-api/v1/doc/index.html
 * @author Kuniyasu Wada
 */
Trait DynamicIngestClient
{
    /** @var string Callback URL */
    private $callbackUrl;

    /** @var string Video Profile */
    private $videoProfile;

    /**
     * Create Video Object
     *
     * Create a new video object in the account.
     * Note: this request is made to the CMS API, and is required only if you are ingesting a new video;
     * the URI for this request is https://cms.api.brightcove.com/v1/accounts/{account_id}/videos
     *
     * @see     https://brightcovelearning.github.io/Brightcove-API-References/dynamic-ingest-api/v1/doc/index.html#api-Video-Create_Video_Object
     * @example https://ingest.api.brightcove.com/v1/accounts/:account_id/videos
     * @param   array $param
     * @return  mixed
     */
    public function dynamicIngestVideo($param = array())
    {
        $url = "{$this->getDiUrl()}/v1/accounts/{$this->getAccountId()}/videos";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        /** XXX APIから原因不明のInternal Server Errorが返される時は、パラメータのプロファイル設定等を要チェック */
        return $this->call('POST', $url, $header, $param);
    }

    /**
     * Ingest Media Asset
     *
     * Uploads a video, images, and/or text track (WebVTT files) and adds them to your media library
     *
     * @see     https://brightcovelearning.github.io/Brightcove-API-References/dynamic-ingest-api/v1/doc/index.html#api-Ingest-Ingest_Media_Asset
     * @example https://ingest.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/ingest-requests
     * @param   array $param
     * @return  mixed
     */
    public function dynamicIngestMediaAsset($param = array())
    {
        $url = "{$this->getDiUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$this->getVideoId()}/ingest-requests";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
            ];

        /** XXX APIから原因不明のInternal Server Errorが返される時は、パラメータのプロファイル設定等を要チェック */
        return $this->call('POST', $url, $header, $param);
    }

    public function setVideoProfile($videoProfile)
    {
        $this->videoProfile = $videoProfile;
        return $this;
    }

    public function getVideoProfile()
    {
        return $this->videoProfile;
    }

    public function setCallbackUrl($callbackUrl)
    {
        $this->callbackUrl = $callbackUrl;
        return $this;
    }

    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

}
