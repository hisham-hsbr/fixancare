<?php

use App\Models\AppSettings;
use App\Models\DeveloperSettings;


// Developer Settings view

view()->share('application', DeveloperSettings::firstWhere('name', 'application'));
view()->share('page', DeveloperSettings::firstWhere('name', 'page'));
view()->share('developer', DeveloperSettings::firstWhere('name', 'developer'));
view()->share('logo', DeveloperSettings::firstWhere('name', 'logo'));


// App Settings view
view()->share('default_layout', AppSettings::firstWhere('name', 'default layout'));
view()->share('default_action', AppSettings::firstWhere('name', 'default action'));
