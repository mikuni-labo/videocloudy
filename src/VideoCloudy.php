<?php
namespace MikuniLabo\VideoCloudy;

use MikuniLabo\VideoCloudy\AssetsClient as Assets;
use MikuniLabo\VideoCloudy\AuthClient as Auth;
use MikuniLabo\VideoCloudy\Connection;
use MikuniLabo\VideoCloudy\DynamicIngestClient as DynamicIngest;
use MikuniLabo\VideoCloudy\FoldersClient as Folders;
use MikuniLabo\VideoCloudy\NotificationsClient as Notifications;
use MikuniLabo\VideoCloudy\PlaylistsClient as Playlists;
use MikuniLabo\VideoCloudy\VideosClient as Videos;

/**
 * VideoCloud Client
 *
 * Support OAuth Version: v3
 * Support CMS Version: v1
 * Support Dynamic Injest Version: v1
 * @see    http://docs.brightcove.com/en/video-cloud/index.html
 *
 * @name    VideoCloudy
 * @version 1.0.0
 * @license MIT
 * @author  Kuniyasu Wada @mikuni_labo
 * @link    https://github.com/mikuni-labo
 * @since   Sat, 15 Apr 2017 09:47:32 +0900
 */
class VideoCloudy extends Connection
{
    use Assets;
    use Auth;
    use DynamicIngest;
    use Folders;
    use Notifications;
    use Playlists;
    use Videos;

    /** @return void */
    public function __construct()
    {
        parent::__construct();
    }

}
