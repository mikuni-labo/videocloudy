<?php

namespace MikuniLabo\VideoCloudy;

/**
 * Operation Asset Resources
 *
 * @see    http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup
 * @author Kuniyasu Wada
 */
Trait AssetsClient
{
    /** @var string The Assets ID */
    private $assetsId;

    /**
     * Get Rendition List
     *
     * Gets a list of renditions for a given video.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Get_Rendition_List
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/renditions
     * @param   string $ref_id
     * @return  mixed
     */
    public function getRenditionList($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/renditions";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Get Rendition
     *
     * Gets a specified rendition for a video.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Get_Rendition
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/renditions/:asset_id
     * @param   string $ref_id
     * @return  mixed
     */
    public function getRendition($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/renditions/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Add Rendition
     *
     * Add a rendition to the given video.
     * Ingested assets must be added via the Dynamic Ingest API.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Add_Rendition
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/renditions
     * @param   array $param
     * @param   string $ref_id
     * @return  mixed
     */
    public function addRendition($param = array(), $ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/renditions";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('POST', $url, $header, $param);
    }

    /**
     * Update Rendition
     *
     * Update the location for a remote rendition.
     * Ingested renditions must be updated by retranscoding the video via Dynamic Ingest or Studio.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Update_Rendition
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/renditions/:asset_id
     * @param   array $param
     * @param   string $ref_id
     * @return  mixed
     */
    public function updateRendition($param = array(), $ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/renditions/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
            ];

        return $this->call('PATCH', $url, $header, $param);
    }

    /**
     * Delete Rendition
     *
     * Deletes a rendition for the given video.
     * Note: this operation is only for remote renditions for remote asset videos
     * — do not use it for renditions created by Video Cloud for ingested videos
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Delete_Rendition
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/renditions/:asset_id
     * @param   string $ref_id
     * @return  mixed
     */
    public function deleteRendition($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/renditions/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('DELETE', $url, $header);
    }

    /**
     * Get HLS Manifest List
     *
     * Gets the hls_manifest for a given video.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Get_HLS_Manifest_List
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/hls_manifest
     * @param   string $ref_id
     * @return  mixed
     */
    public function getHlsManifestList($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/hls_manifest";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Get HLS Manifest
     *
     * Gets an hls_manifest for a given video.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Get_HLS_Manifest
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/hls_manifest/:asset_id
     * @param   string $ref_id
     * @return  mixed
     */
    public function getHlsManifest($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/hls_manifest/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Add HLS Manifest
     *
     * Adds the location of an hls_manifest file for a remote asset.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Add_HLS_Manifest
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/hls_manifest
     * @param   array $param
     * @param   string $ref_id
     * @return  mixed
     */
    public function addHlsManifest($param = array(), $ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/hls_manifest";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('POST', $url, $header, $param);
    }

    /**
     * Update HLS Manifest
     *
     * Updates the location of a remote hls_manifest file for a remote asset.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Update_HLS_Manifest
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/hls_manifest/:asset_id
     * @param   array $param
     * @param   string $ref_id
     * @return  mixed
     */
    public function updateHlsManifest($param = array(), $ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/hls_manifest/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('PATCH', $url, $header, $param);
    }

    /**
     * Delete HLS Manifest
     *
     * Deletes an hls_manifest file for a remote asset.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Delete_HLS_Manifest
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/hls_manifest/:asset_id
     * @param   string $ref_id
     * @return  mixed
     */
    public function deleteHlsManifest($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/hls_manifest/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('DELETE', $url, $header);
    }

    /**
     * Get HDS Manifest List
     *
     * Gets the hds_manifest file for a given video.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Get_HDS_Manifest_List
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/hds_manifest
     * @param   string $ref_id
     * @return  mixed
     */
    public function getHdsManifestList($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/hds_manifest";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Get HDS Manifest
     *
     * Gets the hds_manifest file for a given video.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Get_HDS_Manifest
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/hds_manifest/:asset_id
     * @param   string $ref_id
     * @return  mixed
     */
    public function getHdsManifest($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/hds_manifest/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Add HDS Manifest
     *
     * Adds the location of an hds_manifest file for a remote asset.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Add_HDS_Manifest
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/hds_manifest
     * @param   array $param
     * @param   string $ref_id
     * @return  mixed
     */
    public function addHdsManifest($param = array(), $ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/hds_manifest";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
            ];

        return $this->call('POST', $url, $header, $param);
    }

    /**
     * Update HDS Manifest
     *
     * Updates the location of a remote hds_manifest file for a remote asset.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Update_HDS_Manifest
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/hds_manifest/:asset_id
     * @param   array $param
     * @param   string $ref_id
     * @return  mixed
     */
    public function updateHdsManifest($param = array(), $ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/hds_manifest/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('PATCH', $url, $header, $param);
    }

    /**
     * Delete HDS Manifest
     *
     * Deletes an hds_manifest file for a remote asset.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Delete_HDS_Manifest
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/hds_manifest/:asset_id
     * @param   string $ref_id
     * @return  mixed
     */
    public function deleteHdsManifest($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/hds_manifest/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('DELETE', $url, $header);
    }

    /**
     * Get ISM Manifest List
     *
     * Gets a list of ism_manifest for a given video.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Get_Rendition_List
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/ism_manifest
     * @param   string $ref_id
     * @return  mixed
     */
    public function getIsmManifestList($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/ism_manifest";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Get ISM Manifest
     *
     * Gets an ism_manifest for a given video.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Get_ISM_Manifest
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/ism_manifest/:asset_id
     * @param   string $ref_id
     * @return  mixed
     */
    public function getIsmManifest($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/ism_manifest/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Add ISM Manifest
     *
     * Adds the location of an ism_manifest file for a remote asset.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Add_ISM_Manifest
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/ism_manifest
     * @param   array $param
     * @param   string $ref_id
     * @return  mixed
     */
    public function addIsmManifest($param = array(), $ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/ism_manifest";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('POST', $url, $header, $param);
    }

    /**
     * Update ISM Manifest
     *
     * Updates the location of a remote ism_manifest file for a remote asset.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Update_ISM_Manifest
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/ism_manifest/:asset_id
     * @param   array $param
     * @param   string $ref_id
     * @return  mixed
     */
    public function updateIsmManifest($param = array(), $ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/ism_manifest/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('PATCH', $url, $header, $param);
    }

    /**
     * Delete ISM Manifest
     *
     * Deletes a ism_manifest file for a remote asset.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Delete_ISM_Manifest
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/ism_manifest/:asset_id
     * @param   string $ref_id
     * @return  mixed
     */
    public function deleteIsmManifest($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/ism_manifest/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('DELETE', $url, $header);
    }

    /**
     * Get ISMC Manifest List
     *
     * Gets the ismc_manifest files for a given video.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Get_ISMC_Manifest_List
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/ismc_manifest
     * @param   string $ref_id
     * @return  mixed
     */
    public function getIsmcManifestList($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/ismc_manifest";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Get ISMC Manifest
     *
     * Gets the ismc_manifest file for a given video.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Get_ISMC_Manifest
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/ismc_manifest/:asset_id
     * @param   string $ref_id
     * @return  mixed
     */
    public function getIsmcManifest($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/ismc_manifest/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Add ISMC Manifest
     *
     * Adds the location of an ismc_manifest file for a remote asset.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Add_ISMC_Manifest
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/ismc_manifest
     * @param   array $param
     * @param   string $ref_id
     * @return  mixed
     */
    public function addIsmcManifest($param = array(), $ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/ismc_manifest";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('POST', $url, $header, $param);
    }

    /**
     * Update ISMC Manifest
     *
     * Updates the location of a remote ismc_manifest file for a remote asset.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Update_ISMC_Manifest
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/ismc_manifest/:asset_id
     * @param   array $param
     * @param   string $ref_id
     * @return  mixed
     */
    public function updateIsmcManifest($param = array(), $ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/ismc_manifest/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('PATCH', $url, $header, $param);
    }

    /**
     * Delete ISMC Manifest
     *
     * Deletes an ismc_manifest file for a remote asset.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Delete_ISMC_Manifest
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/ismc_manifest/:asset_id
     * @param   string $ref_id
     * @return  mixed
     */
    public function deleteIsmcManifest($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/ismc_manifest/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('DELETE', $url, $header);
    }

    /**
     * Get DASH Manifest List
     *
     * Gets the dash_manifests for a given video.
     * Notes:
     * 1. you can have multiple dash manifests with profiles;
     * you can have only one dash manifest without a profile, but one manifest without a profile can be combined with muliple manifests with profiles;
     * 2. all manifests intended to be used with the CMS API should include a profile
     * - only DASH manifests with profiles will be returned by the CMS API
     * — only a single DASH manifest without a profile will be returned by the Media API
     * 3. you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Get_DASH_Manifest_List
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/dash_manifests
     * @param   string $ref_id
     * @return  mixed
     */
    public function getDashManifestList($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/dash_manifests";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Get DASH Manifest
     *
     * Gets a dash_manifest for a given video.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Get_DASH_Manifest
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/dash_manifests/:asset_id
     * @param   string $ref_id
     * @return  mixed
     */
    public function getDashManifest($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/dash_manifests/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Add DASH Manifest
     *
     * Adds a location for a remote DASH manifest
     * Notes:
     * 1. you can have multiple dash manifests with profiles;
     * you can have only one dash manifest without a profile, but one manifest without a profile can be combined with muliple manifests with profiles;
     * 2. all manifests intended to be used with the CMS API should include a profile
     * - only DASH manifests with profiles will be returned by the CMS API
     * — only a single DASH manifest without a profile will be returned by the Media API
     * 3. you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Add_DASH_Manifest
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/dash_manifests
     * @param   array $param
     * @param   string $ref_id
     * @return  mixed
     */
    public function addDashManifest($param = array(), $ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/dash_manifests";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('POST', $url, $header, $param);
    }

    /**
     * Update DASH Manifest
     *
     * Updates the location of a remote dash_manifest file for a remote asset.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Update_DASH_Manifest
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/dash_manifests/:asset_id
     * @param   array $param
     * @param   string $ref_id
     * @return  mixed
     */
    public function updateDashManifest($param = array(), $ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/dash_manifests/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('PATCH', $url, $header, $param);
    }

    /**
     * Delete DASH Manifest
     *
     * Deletes an dash_manifest file for a remote asset.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Delete_DASH_Manifest
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/dash_manifests/:asset_id
     * @param   string $ref_id
     * @return  mixed
     */
    public function deleteDashManifest($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/dash_manifests/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('DELETE', $url, $header);
    }

    /**
     * Get Poster List
     *
     * Gets the poster file for a given video.
     * Note that you can only add one poster for a video.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Get_Poster_List
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/poster
     * @param   string $ref_id
     * @return  mixed
     */
    public function getPosterList($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/poster";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Get Poster
     *
     * Gets a poster file for a given video.
     * Note that you can only add one poster for a video.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Get_Poster
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/poster/:asset_id
     * @param   string $ref_id
     * @return  mixed
     */
    public function getPoster($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/poster/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Add Poster
     *
     * Adds a poster file for a remote asset.
     * Ingested assets must be added via the Dynamic Ingest API.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Add_Poster
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/poster
     * @param   array $param
     * @param   string $ref_id
     * @return  mixed
     */
    public function addPoster($param = array(), $ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/poster";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('POST', $url, $header, $param);
    }

    /**
     * Update Poster
     *
     * Updates the location of a remote poster file for a remote asset.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Update_Poster
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/poster/:asset_id
     * @param   array  $param
     * @param   string $ref_id
     * @return  mixed
     */
    public function updatePoster($param = array(), $ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/poster/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('PATCH', $url, $header, $param);
    }

    /**
     * Delete Poster
     *
     * Deletes a poster file for a remote asset.
     * Note that you can only add one poster for a video.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Delete_Poster
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/poster/:asset_id
     * @param   string $ref_id
     * @return  mixed
     */
    public function deletePoster($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/poster/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('DELETE', $url, $header);
    }

    /**
     * Get Thumbnail List
     *
     * Gets the thumbnail for a given video.
     * Note that you can only add one thumbnail for a video.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Get_Thumbnail_List
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/thumbnail
     * @param   string $ref_id
     * @return  mixed
     */
    public function getThumbnailList($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/thumbnail";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Get Thumbnail
     *
     * Gets a thumbnail file for a given video.
     * Note that you can only add one thumbnail for a video.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Get_Thumbnail
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/thumbnail/:asset_id
     * @param   string $ref_id
     * @return  mixed
     */
    public function getThumbnail($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/thumbnail/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Add Thumbnail
     *
     * Adds a thumbnail file for a remote asset.
     * Ingested assets must be added via the Dynamic Ingest API.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Add_Thumbnail
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/thumbnail
     * @param   array $param
     * @param   string $ref_id
     * @return  mixed
     */
    public function addThumbnail($param = array(), $ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/thumbnail";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('POST', $url, $header, $param);
    }

    /**
     * Update Thumbnail
     *
     * Updates the location of a remote thumbnail file for a remote asset.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Update_Thumbnail
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/thumbnail/:asset_id
     * @param   array  $param
     * @param   string $ref_id
     * @return  mixed
     */
    public function updateThumbnail($param = array(), $ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/thumbnail/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('PATCH', $url, $header, $param);
    }

    /**
     * Delete Thumbnail
     *
     * Deletes a thumbnail file for a remote asset.
     * Note that you can only add one thumbnail for a video.
     * Note: you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Delete_Thumbnail
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/thumbnail/:asset_id
     * @param   string $ref_id
     * @return  mixed
     */
    public function deleteThumbnail($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/thumbnail/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('DELETE', $url, $header);
    }

    /**
     * Get Caption List
     *
     * Gets the caption file for a given video (DFXP captions for the Smart Player).
     * Note:
     * 1. the caption endpoint is ONLY for working with DFXP captions used in the legacy Smart Player
     * - WebVTT captions (text_tracks) for the new Brightcove Player are managed using the Update Video operation;
     * 2. you can use /videos/ref:reference_id instead of /videos/video_id
     *
     *
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/caption
     * @param   string $ref_id
     * @return  mixed
     */
    public function getCaptionList($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/caption";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Get Caption
     *
     * Gets a caption file for a given video (DFXP captions for the Smart Player).
     * Note:
     * 1. the caption endpoint is ONLY for working with DFXP captions used in the legacy Smart Player - WebVTT captions (text_tracks) for the new Brightcove Player are managed using the Update Video operation;
     * 2. you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Get_Caption
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/caption/:asset_id
     * @param   string $ref_id
     * @return  mixed
     */
    public function getCaption($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/caption/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Add Caption
     *
     * Adds a caption file for a remote asset (DFXP captions for the Smart Player).
     * Note:
     * 1. the caption endpoint is ONLY for working with DFXP captions used in the legacy Smart Player
     * - WebVTT captions (text_tracks) for the new Brightcove Player are managed using the Update Video operation;
     * 2. you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Add_Caption
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/caption
     * @param   array $param
     * @param   string $ref_id
     * @return  mixed
     */
    public function addCaption($param = array(), $ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/caption";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('POST', $url, $header, $param);
    }

    /**
     * Update Caption
     *
     * Updates the location of a remote caption file for a remote asset (DFXP captions for the Smart Player).
     * Note:
     * 1. the caption endpoint is ONLY for working with DFXP captions used in the legacy Smart Player - WebVTT captions (text_tracks) for the new Brightcove Player are managed using the Update Video operation;
     * 2. you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Update_Caption
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/caption/:asset_id
     * @param   array $param
     * @param   string $ref_id
     * @return  mixed
     */
    public function updateCaption($param = array(), $ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/caption/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('PATCH', $url, $header, $param);
    }

    /**
     * Delete Caption
     *
     * Deletes a caption file for a remote asset (DFXP captions for the Smart Player).
     * Note:
     * 1. the caption endpoint is ONLY for working with DFXP captions used in the legacy Smart Player - WebVTT captions (text_tracks) for the new Brightcove Player are managed using the Update Video operation;
     * 2. you can use /videos/ref:reference_id instead of /videos/video_id
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-assetGroup-Delete_Caption
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/videos/:video_id/assets/caption/:asset_id
     * @param   string $ref_id
     * @return  mixed
     */
    public function deleteCaption($ref_id = '')
    {
        $id = !empty($ref_id) ? "ref:{$ref_id}" : $this->getVideoId();
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/videos/{$id}/assets/caption/{$this->getAssetsId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('DELETE', $url, $header);
    }

    public function setAssetsId($assetsId)
    {
        $this->assetsId = $assetsId;
        return $this;
    }

    public function getAssetsId()
    {
        return $this->assetsId;
    }

}
