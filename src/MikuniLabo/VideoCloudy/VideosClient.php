<?php

namespace MikuniLabo\VideoCloudy;

/**
 * Operation Video Resources
 *
 * @see    http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-videoGroup
 * @author Kuniyasu Wada
 */
Trait VideosClient
{
    /** @var string Video ID */
    private $videoId;

    /**
     * Get Videos
     *
     * Gets a page of video objects
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-videoGroup-Get_Videos
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos?q=tags:nature,name:nature
     * @param   array $param
     * @return  mixed
     */
    public function getVideos($param = array())
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header, $param);
    }

    /**
     * Get Video Count
     *
     * Gets count of videos for the account or a search
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-videoGroup-Get_Video_Count
     * @example https://cms.api.brightcove.com/v1/accounts/57838016001/counts/videos?q=tags:nature,name:nature
     * @return mixed
     */
    public function getVideoCount()
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/counts/videos";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Get Video by ID or Reference ID
     *
     * Gets a video object
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-videoGroup-Get_Video_by_ID_or_Reference_ID
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id
     * @example https://cms.api.brightcove.com/v1/accounts/57838016001/videos/ref:my_reference_id
     * @param   string $ref_id
     * @return  mixed
     */
    public function getVideo($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}";

        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Get Video Sources
     *
     * Gets an array of sources (renditions) for a video
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-videoGroup-Get_Video_Sources
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/sources
     * @param   string $ref_id
     * @return  mixed
     */
    public function getVideoSources($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/sources";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Get Video Images
     *
     * Gets the images for a video
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-videoGroup-Get_Video_Images
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/images
     * @param   string $ref_id
     * @return  mixed
     */
    public function getVideoImages($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/images";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Get Digital Master Info
     *
     * Gets the stored digital master for a video, if any
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-videoGroup-Get_Digital_Master_Info
     * @example https://cms.api.brightcove.com/v1/accounts/57838016001/videos/3931368155001/digital_master
     * @param   string $ref_id
     * @return  mixed
     */
    public function getDigitalMasterInfo($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/digital_master";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Get Playlists for Video
     *
     * Gets an array of Manual (EXPLICIT) playlists that contain a video object for the account
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-videoGroup-Get_Playlists_for_Video
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/references
     * @param   string $ref_id
     * @return  mixed
     */
    public function getPlaylistsForVideo($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/references";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Create Video
     *
     * Create a new video object in the account.
     * Note: this does not ingest a video file
     * - use the Dynamic Ingest API for ingestion
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-videoGroup-Create_Video
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos
     * @param   array $param
     * @return  mixed
     */
    public function createVideo($param = array())
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('POST', $url, $header, $param);
    }

    /**
     * Update Video
     *
     * Update a video's metadata note that this API does not ingest any media files
     * - use the Dynamic Ingest API for ingestion.
     * Also note that replacing WebVTT text tracks is a two-step operation
     * - see Add WebVTT Captions for details.
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-videoGroup-Update_Video
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id
     * @param   array $param
     * @return  mixed
     */
    public function updateVideo($param = array())
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$this->getVideoId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('PATCH', $url, $header, $param);
    }

    /**
     * Remove Video from all Playlists
     *
     * Removes the video from all EXPLICIT playlists for the account
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-videoGroup-Remove_Video_from_all_Playlists
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/references
     * @param   string $ref_id
     * @param   array $param
     * @return  mixed
     */
    public function removeVideoFromAllPlaylists($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/references";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('DELETE', $url, $header);
    }

    /**
     * Delete Video
     *
     * Deletes a video
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-videoGroup-Delete_Video
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id
     * @param   string $ref_id
     * @return  mixed
     */
    public function deleteVideo($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('DELETE', $url, $header);
    }

    /**
     * Get Custom Fields
     *
     * Gets a list of custom fields for the account
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-videoGroup-Get_Custom_Fields
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/video_fields
     * @param   array $param
     * @return  mixed
     */
    public function getCustomFields()
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/video_fields";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    public function setVideoId($videoId)
    {
        $this->videoId = $videoId;
        return $this;
    }

    public function getVideoId()
    {
        return $this->videoId;
    }

}
