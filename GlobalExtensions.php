<?php
require_once( "$IP/extensions/AbuseFilter/AbuseFilter.php" );
require_once( "$IP/extensions/AntiSpoof/AntiSpoof.php" );
require_once( "$IP/extensions/CentralAuth/CentralAuth.php" );
require_once( "$IP/extensions/cldr/cldr.php" );
require_once( "$IP/extensions/ConfirmEdit/ConfirmEdit.php" );
require_once( "$IP/extensions/GlobalBlocking/GlobalBlocking.php" );
require_once( "$IP/extensions/Math/Math.php" );
require_once( "$IP/extensions/OAuth/OAuth.php" );
require_once( "$IP/extensions/Timeline/Timeline.php" );
require_once( "$IP/extensions/Scribunto/Scribunto.php" );
require_once( "$IP/extensions/UrlShortener/UrlShortener.php" );
wfLoadExtension( 'Babel' );
wfLoadExtension( 'CheckUser' );
wfLoadExtension( 'Cite' );
wfLoadExtension( 'CiteThisPage' );
wfLoadExtension( 'ConfirmEdit/ReCaptchaNoCaptcha' );
wfLoadExtension( 'Disambiguator' );
wfLoadExtension( 'Gadgets' );
wfLoadExtension( 'GlobalCssJs' );
wfLoadExtension( 'Interwiki' );
wfLoadExtension( 'MassMessage' );
wfLoadExtension( 'MirahezeMagic' );
wfLoadExtension( 'Nuke' );
wfLoadExtension( 'Renameuser' );
wfLoadExtension( 'TitleBlacklist' );
wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'Poem' );
wfLoadExtension( 'SiteMatrix' );
