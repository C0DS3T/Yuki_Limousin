<?php
// Time, in seconds, till a visitor is considered offline.
$secondsToConsiderOffline = 60;

// Singular word to represent the visitor.
$visitorSingular = "Surfeur";

// Plural word to represent the visitor.
$visitorPlural = "Surfeurs";

// Singular word to represent the page which visitor is.
$pageSingular = "Annonces";

// Plural word to represent the page which visitor is.
$pagePlural = "Annonces";

// Format of the text from conter link.
// %1$d represents de quantity of visitors.
// %2$s represents the "visitor" word, on plural form if there's more than one.
// %3$d represents de quantity of distinct pages they are visiting.
// %4$s represents the "page" word, on plural form if there's more than one.
$linkFormat = '%1$d %2$s dans %4$s';

// Name of database file.
$databaseFile = 'counter.sqlite';

// Title of the page that lists where is each visitor.
$visitorsPageTitle = 'Yuki @Live';

// Name to show for pages without title.
$unknownPages = 'Unknown Page';