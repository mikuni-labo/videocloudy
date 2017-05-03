<?php

namespace MikuniLabo\VideoCloudy;

/**
 * Operation Playlist Resources
 *
 * @see    http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-playlistGroup
 * @author Kuniyasu Wada
 */
Trait PlaylistsClient
{
    /** @var string Playlist ID */
    private $playlistId;

    /**
     * Get Playlists
     *
     * Gets a page of playlist objects for the account
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-playlistGroup-Get_Playlists
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/playlists
     * @param   array $param
     * @return  mixed
     */
    public function getPlaylists($param = array())
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/playlists";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header, $param);
    }

    /**
     * Get Playlist Count
     *
     * Gets a count of playlists in the account for the account
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-playlistGroup-Get_Playlist_Count
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/counts/playlists
     * @param   array $param
     * @return  mixed
     */
    public function getPlaylistCount($param = array())
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/counts/playlists";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header, $param);
    }

    /**
     * Get Playlist by ID
     *
     * Gets a playlist object for the account
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-playlistGroup-Get_Playlist_by_ID
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/playlists/:playlist_id
     * @return  mixed
     */
    public function getPlaylist()
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/playlists/{$this->getPlaylistId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Get Video Count in Playlist
     *
     * Gets a count of the videos in a playlist for the account
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-playlistGroup-Get_Video_Count_in_Playlist
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/counts/playlists/:playlist_id/videos
     * @return  mixed
     */
    public function getVideoCountInPlaylist()
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/counts/playlists/{$this->getPlaylistId()}/videos";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Get Videos in Playlist
     *
     * Gets the video objects for videos in a playlist for the account
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-playlistGroup-Get_Videos_in_Playlist
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/playlists/:playlist_id/videos
     * @return  mixed
     */
    public function getVideosInPlaylist()
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/playlists/{$this->getPlaylistId()}/videos";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('GET', $url, $header);
    }

    /**
     * Create Playlist
     *
     * Creates a new playlist
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-playlistGroup-Create_Playlist
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/playlists
     * @param   array $param
     * @return  mixed
     */
    public function createPlaylist($param = array())
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/playlists";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('POST', $url, $header, $param);
    }

    /**
     * Update Playlist
     *
     * Updates a playlist for the account
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-playlistGroup-Update_Playlist
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/playlists/:playlist_id
     * @param   array $param
     * @return  mixed
     */
    public function updatePlaylist($param = array())
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/playlists/{$this->getPlaylistId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('PATCH', $url, $header, $param);
    }

    /**
     * Delete Playlist
     *
     * Deletes a playlist
     *
     * @see     http://docs.brightcove.com/en/video-cloud/cms-api/references/cms-api/versions/v1/index.html#api-playlistGroup-Delete_Playlists
     * @example https://cms.api.brightcove.com/v1/accounts/:account_id/playlists/:playlist_id
     * @return  mixed
     */
    public function deletePlaylist()
    {
        $url = "{$this->getCmsUrl()}/v1/accounts/{$this->getAccountId()}/playlists/{$this->getPlaylistId()}";
        $header = [
            'Content-type: application/json',
            "Authorization: Bearer {$this->getAccessToken()}",
        ];

        return $this->call('DELETE', $url, $header);
    }

    public function setPlaylistId($playlistId)
    {
        $this->playlistId = $playlistId;
        return $this;
    }

    public function getPlaylistId()
    {
        return $this->playlistId;
    }

}
