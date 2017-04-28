<?php

namespace App\Lib\Api\VideoCloud;

/**
 * Operation Folder Resources
 *
 * @see    http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-folderGroup
 * @author Kuniyasu Wada
 */
Trait FoldersClient
{
    /** @var string Folder ID */
    private $folderId;

    /**
     * Get Folders
     *
     * Gets list of folders for the account
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-folderGroup-Get_Folders
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/folders
     * @param   array $param
     * @return  mixed
     */
    public function getFolders($param = array())
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/folders";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header, $param);
    }

    /**
     * Get Videos in Folder
     *
     * Gets list of video objects in a folder
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-folderGroup-Get_Videos_in_Folder
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/folders/:folder_id/videos
     * @param   array $param
     * @return  mixed
     */
    public function getVideosInFolder($param = array())
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/folders/{$this->getFolderId()}/videos";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header, $param);
    }

    /**
     * Add Video to Folder
     *
     * Add a video to a folder
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-folderGroup-Add_Video_to_Folder
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/folders/:folder_id/videos/:video_id
     * @param   array $param
     * @return  mixed
     */
    public function addVideoToFolder($param = array())
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/folders/{$this->getFolderId()}/videos/{$this->getVideoId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('PUT', $url, $header, $param);
    }

    /**
     * Remove Video from Folder
     *
     * Remove a video from a folder
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-folderGroup-Remove_Video_from_Folder
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/folders/:folder_id/videos/:video_id
     * @return  mixed
     */
    public function removeVideoFromFolder()
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/folders/{$this->getFolderId()}/videos/{$this->getVideoId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('DELETE', $url, $header);
    }

    /**
     * Create Folder
     *
     * Create a new folder for the account
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-folderGroup-Create_Folder
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/folders
     * @param   array $param
     * @return  mixed
     */
    public function createFolder($param = array())
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/folders";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('POST', $url, $header, $param);
    }

    /**
     * Update Folder Name
     *
     * Update the folder name
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-folderGroup-Update_Folder_Name
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/folders/:folder_id
     * @param   array $param
     * @return  mixed
     */
    public function updateFolderName($param = array())
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/folders/{$this->getFolderId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('PATCH', $url, $header, $param);
    }

    /**
     * Delete Folder
     *
     * Delete a folder
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-folderGroup-Delete_Folder
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/folders/:folder_id
     * @return  mixed
     */
    public function deleteFolder()
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/folders/{$this->getFolderId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('DELETE', $url, $header);
    }

    /**
     * Get Folder Information
     *
     * Gets information about a folder
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-folderGroup-Get_FolderInformation
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/folders/:folder_id
     * @return  mixed
     */
    public function getFolderInformation()
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/folders/{$this->getFolderId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    public function setFolderId($folderId)
    {
        $this->folderId = $folderId;
        return $this;
    }

    public function getFolderId()
    {
        return $this->folderId;
    }

}
