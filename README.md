# Not Authenticated Redirect Plugin for DokuWiki

**Description**

If user is not authenticated, redirecting to an url, defined in configuration.

Documentation for this plugin can be found at
https://www.dokuwiki.org/plugin:noauthredirect

**Installation**

_For automated installation_
Please follow dokuwiki plugin installation describe in the following 
page : http://www.dokuwiki.org/plugins

_Manual installation_
If you install this plugin manually, make sure it is installed in
lib/plugins/noauthredirect/ - if the folder is called differently it
will not work!


**Configuration**

Set in local.php the value : $conf['noauthredirect'] to the url to 
redirect to.
