<?php

declare(strict_types=1);

use OCP\Util;

Util::addScript(OCA\Audiobooks\AppInfo\Application::APP_ID, OCA\Audiobooks\AppInfo\Application::APP_ID . '-main');
Util::addStyle(OCA\Audiobooks\AppInfo\Application::APP_ID, OCA\Audiobooks\AppInfo\Application::APP_ID . '-main');

?>

<div id="audiobooks"></div>
