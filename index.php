<HTML>
<!--
+---------------------------------------+
+ COPYRIGHT CODESET 2016                +
+ Tous droits réservés                  +
+ Auteur : Kida Jean-Sébastien          +
+ Contact : js.kida@gmail.com           +
+---------------------------------------+
-->

<head>

    <!-- #Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>

    <script type="text/javascript">
        if (typeof Muse == "undefined") window.Muse = {};
        window.Muse.assets = {
            "required": ["jquery-1.8.3.min.js", "museutils.js", "jquery.watch.js", "index.css"],
            "outOfDate": []
        };
    </script>

    <!-- #META -->
    <!-- #UTF-8 ST-->
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <!-- #UTF-8 SP-->
    <meta name="author" content="JS.KIDA - Codeset 2016 (c)">
    <meta name="categories" content="Emploi">
    <meta name="robots" content="INDEX, FOLLOW">
    <meta name="revisit-after" content="1 Day">
    <meta name="expires" content="Thu, 01 May 2021 00:00:00 GMT">
    <meta name="generator" content="Yuki v1.0.0">
    <meta name="description" content="Moteur de recherche d'emploi du Limousin">


    <title>Yuki | Limousin . Annonces (^_^)</title>


    <!-- #CSS -->
    <link rel="stylesheet" type="text/css" href="css/site_global.css?365011649"/>
    <link rel="stylesheet" type="text/css" href="css/index.css?308882776" id="pagesheet"/>

    <!--# Autres Scripts -->
    <script type="text/javascript">
        document.documentElement.className += ' js';
    </script>
    <script src="http://yuki.890m.com/ovc/counter.js"></script>

</head>
<body>

<script>
    // This is called with the results from from FB.getLoginStatus().
    function statusChangeCallback(response) {
        console.log('statusChangeCallback');
        console.log(response);
        // The response object is returned with a status field that lets the
        // app know the current login status of the person.
        // Full docs on the response object can be found in the documentation
        // for FB.getLoginStatus().
        if (response.status === 'connected') {
            // Logged into your app and Facebook.
            testAPI();
        } else if (response.status === 'not_authorized') {
            // The person is logged into Facebook, but not your app.
            document.getElementById('status').innerHTML = 'Merci de vous connecter ' +
                'à cette application.';
        } else {
            // The person is not logged into Facebook, so we're not sure if
            // they are logged into this app or not.
            document.getElementById('status').innerHTML = 'Merci de vous connecter ' +
                'à Facebook.';
        }
    }

    // This function is called when someone finishes with the Login
    // Button.  See the onlogin handler attached to it in the sample
    // code below.
    function checkLoginState() {
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });
    }

    window.fbAsyncInit = function() {
        FB.init({
            appId      : '1571189276530454',
            cookie     : true,  // enable cookies to allow the server to access
                                // the session
            xfbml      : true,  // parse social plugins on this page
            version    : 'v2.2' // use version 2.2
        });

        // Now that we've initialized the JavaScript SDK, we call
        // FB.getLoginStatus().  This function gets the state of the
        // person visiting this page and can return one of three states to
        // the callback you provide.  They can be:
        //
        // 1. Logged into your app ('connected')
        // 2. Logged into Facebook, but not your app ('not_authorized')
        // 3. Not logged into Facebook and can't tell if they are logged into
        //    your app or not.
        //
        // These three cases are handled in the callback function.

        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });

    };

    // Load the SDK asynchronously
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/fr_FR/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    // Here we run a very simple test of the Graph API after login is
    // successful.  See statusChangeCallback() for when this call is made.
    function testAPI() {
        console.log('Bienvenue, on recherche vos informations... ');
        FB.api('/me', function(response) {
            console.log('Connecté avec succés: ' + response.name);
            document.getElementById('status').innerHTML =
                'Merci de vous être connecté, ' + response.name + '!';
        });
    }
</script>

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->

<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>




<div id="fb-root"></div>
<script>
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


<div class="clearfix" id="page">
    <div class="clearfix colelem" id="pu132">
        <div class="clearfix grpelem" id="u132">
            <div class="position_content" id="u132_position_content">
                <div class="colelem" id="u191"></div>
                <div class="clip_frame colelem" id="u201">
                    <!-- #Yuki steackaché -->
                    <img class="block" id="u201_img" src="/images/lapin.png" alt="" width="325" height="219"/>

                    <p>
                    <center><strong>v1.1.1</strong></center>
                    </p>
                </div>
            </div>
        </div>
        <img class="grpelem" id="u88-6" alt="Moteur de Recherche " width="1560" height="109" src="images/u88-6.png"/>

        <div class="grpelem" id="u136"><!-- simple frame --></div>
        <img class="grpelem" id="u106" alt="" width="261" height="269"
             src="images/4236_lei_30001667photo1dappel_180000063_4-u106.png"/>
        <img class="grpelem" id="u100" alt="" width="450" height="450" src="images/logo_n.png"/>
    </div>
    <div class="colelem" id="u134"></div>
    <div class="colelem" id="u184">
        <div id="rch">
            <br>
            <center><h1>Utilisez le moteur ci-dessous pour affiner votre recherche</h1></center>
            <center>
                <small>7000+ offres actualisées en temps réel dans notre base Yuki</small>
                <br><br>

                <form action="search.php" method="get">
                    <input type="text" name="query" id="query" size="40" value=""
                           action="include/js_suggest/suggest.php" columns="2" autocomplete="off" delay="1500">
                    <input type="submit" value="Yuki va CHERCHER!">
                    <input type="hidden" name="search" value="1">
                </form>
            </center>
            <br><br>
        </div>

        <!-- Insertion Annonces -->
        <div id="haut">
            <center><strong>LES DERNIERES ANNONCES DE LA REGION</strong> (actualisation toutes les 15min).</center>
        </div>

        <div id="ann">
            <!-- #Insertion de l'heure -->
            <p style="text-align:left">

                <?php
                $hourdiff = "0";
                $timeadjust = ($hourdiff * 3600);
                $anndate = date("h:i", time() + $timeadjust);
                print ("$anndate");
                ?></p><br>

            <?

            /* On place les sorties des flux en tableaux & bd pour exploiter et filtrer par la suite */

            /* fonction de suppression des chars */
            function suppr_accent($str, $charset = 'utf-8')
            {
                $str = htmlentities($str, ENT_NOQUOTES, $charset);

                $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
                $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
                $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères

                return $str;
            }

            /* load flux (1) */
            try {
                echo '<div id="ann1">';
                if (!@$fluxrss = simplexml_load_file('http://rss.jobsearch.monster.com/rssquery.ashx?rad_units=km&cy=FR&pp=25&sort=rv.di.dt&geo=Limousin%2c20%2c%2c%2c721&baseurl=offre-emploi.monster.fr')) {
                    throw new Exception('Flux introuvable');
                }
                if (empty($fluxrss->channel->title) || empty($fluxrss->channel->description) || empty($fluxrss->channel->item->title))
                    throw new Exception('Flux invalide');

                /* désactive l'affichage des en-têtes de flux
                         * echo '<h3>'.(string)$fluxrss->channel->title.'</h3>
                        <p>'.(string)$fluxrss->channel->description.'</p>'; */

                $i = 0;
                $nb_affichage = 50;

                foreach ($fluxrss->channel->item as $item) {
                    echo '<a href="' . (string)$item->link . '">' . (string)$item->title . '</a> <i>publié le ' . (string)date('d/m/Y à G\hi', strtotime($item->pubDate)) . '</i><br><br>';
                    if (++$i >= $nb_affichage)
                        break;
                }
                echo '</div>';

                /* load flux (2) */

                if (!@$fluxrss = simplexml_load_file('http://www.apec.fr/fluxRss/XML/OffresCadre_R713.xml')) {
                    throw new Exception('Flux introuvable');
                }
                if (empty($fluxrss->channel->title) || empty($fluxrss->channel->description) || empty($fluxrss->channel->item->title))
                    throw new Exception('Flux invalide');

                /* echo '<h3>'.(string)$fluxrss->channel->title.'</h3>
                        <p>'.(string)$fluxrss->channel->description.'</p>'; */

                $i = 0;
                $nb_affichage = 50;
                echo '<div id="ann2">';
                foreach ($fluxrss->channel->item as $item) {
                    echo '<a href="' . (string)$item->link . '">' . (string)$item->title . '</a> <i>publié le ' . (string)date('d/m/Y à G\hi', strtotime($item->pubDate)) . '</i><br><br>';
                    if (++$i >= $nb_affichage)
                        break;
                }
                echo '</div>';

                /* load flux (3) */

                if (!@$fluxrss = simplexml_load_file('http://www.keljob.com/recherche-rss/limousin/haute-vienne/_/N-6aqZ6xfZ6u9Z6qc?nbJobPage=15')) {
                    throw new Exception('Flux introuvable');
                }
                if (empty($fluxrss->channel->title) || empty($fluxrss->channel->description) || empty($fluxrss->channel->item->title))
                    throw new Exception('Flux invalide');

                /* echo '<h3>'.(string)$fluxrss->channel->title.'</h3>
                        <p>'.(string)$fluxrss->channel->description.'</p>'; */

                $i = 0;
                $nb_affichage = 50;
                echo '<div id="ann3">';
                foreach ($fluxrss->channel->item as $item) {
                    echo '<a href="' . (string)$item->link . '">' . (string)$item->title . '</a> <i>publié le ' . (string)date('d/m/Y à G\hi', strtotime($item->pubDate)) . '</i><br><br>';
                    if (++$i >= $nb_affichage)
                        break;
                }
                echo '</div>';

                /* load flux (4) */

                if (!@$fluxrss = simplexml_load_file('http://www.agglo-limoges.fr/fr/recrutement-rss.xml')) {
                    throw new Exception('Flux introuvable');
                }
                if (empty($fluxrss->channel->title) || empty($fluxrss->channel->description) || empty($fluxrss->channel->item->title))
                    throw new Exception('Flux invalide');

                /* echo '<h3>'.(string)$fluxrss->channel->title.'</h3>
                        <p>'.(string)$fluxrss->channel->description.'</p>'; */

                $i = 0;
                $nb_affichage = 50;
                echo '<div id="ann4">';
                foreach ($fluxrss->channel->item as $item) {
                    echo '<a href="' . (string)$item->link . '">' . (string)$item->title . '</a> <i>publié le ' . (string)date('d/m/Y à G\hi', strtotime($item->pubDate)) . '</i><br><br>';
                    if (++$i >= $nb_affichage)
                        break;
                }
                echo '</div>';

                /* load flux (5) */

                if (!@$fluxrss = simplexml_load_file('http://www.cg87.fr/fileadmin/rss/rss_emploi.php')) {
                    throw new Exception('Flux introuvable');
                }
                if (empty($fluxrss->channel->title) || empty($fluxrss->channel->description) || empty($fluxrss->channel->item->title))
                    throw new Exception('Flux invalide');

                /* echo '<h3>'.(string)$fluxrss->channel->title.'</h3>
                        <p>'.(string)$fluxrss->channel->description.'</p>'; */

                $i = 0;
                $nb_affichage = 50;
                echo '<div id="ann5">';
                foreach ($fluxrss->channel->item as $item) {
                    echo '<a href="' . (string)$item->link . '">' . (string)$item->title . '</a> <i>publié le ' . (string)date('d/m/Y à G\hi', strtotime($item->pubDate)) . '</i><br><br>';
                    if (++$i >= $nb_affichage)
                        break;
                }
                echo '</div>';

                ?>
                <hr>
                <html>
                <center>
                    <style>
                        p {
                            color: red;
                            font-size: 18px;
                            border-bottom: 2px;
                        }
                    </style>
                    <p>MISSION INTERIM ADECCO LIMOUSIN</p></b></center>
                <br></html><?php

                /* load flux adecco (7) */

                if (!@$fluxrss = simplexml_load_file('http://www.adecco.fr/Services/RssJobVacancies.ashx?region=15')) {
                    throw new Exception('Flux introuvable');
                }
                if (empty($fluxrss->channel->title) || empty($fluxrss->channel->description) || empty($fluxrss->channel->item->title))
                    throw new Exception('Flux invalide');

                /* echo '<h3>'.(string)$fluxrss->channel->title.'</h3>
                        <p>'.(string)$fluxrss->channel->description.'</p>'; */

                $i = 0;
                $nb_affichage = 50;
                echo '<div id="ann6">';
                foreach ($fluxrss->channel->item as $item) {
                    echo '<a href="' . (string)$item->link . '">' . (string)$item->title . '</a> <i>publié le ' . (string)date('d/m/Y à G\hi', strtotime($item->pubDate)) . '</i><br><br>';
                    if (++$i >= $nb_affichage)
                        break;
                }
                echo '</div>';


                ?>
                <hr>
                <html>
                <center>
                    <style>
                        p {
                            color: red;
                            font-size: 18px;
                            border-bottom: 2px;
                        }
                    </style>
                    <p>MISSION INTERIM .. SUITE ..</p></b></center>
                <br></html><?php

                /* load flux adecco 2/2 (8) */

                if (!@$fluxrss = simplexml_load_file('http://rss.optioncarriere.com/rss?s=interim&l=Limoges&lid=72872')) {
                    throw new Exception('Flux introuvable');
                }
                if (empty($fluxrss->channel->title) || empty($fluxrss->channel->description) || empty($fluxrss->channel->item->title))
                    throw new Exception('Flux invalide');

                /* echo '<h3>'.(string)$fluxrss->channel->title.'</h3>
                        <p>'.(string)$fluxrss->channel->description.'</p>'; */

                $i = 0;
                $nb_affichage = 50;
                echo '<div id="ann7">';
                foreach ($fluxrss->channel->item as $item) {
                    echo '<a href="' . (string)$item->link . '">' . (string)$item->title . '</a> <i>publié le ' . (string)date('d/m/Y à G\hi', strtotime($item->pubDate)) . '</i><br><br>';
                    if (++$i >= $nb_affichage)
                        break;
                }

                ?>
                <hr>
                <html>
                <center>
                    <style>
                        p {
                            color: red;
                            font-size: 18px;
                            border-bottom: 2px;
                        }
                    </style>
                    <p>Autres Régions</p></b></center>
                <br></html><?php

                /* load flux (9)
                   Régions voisines */

                if (!@$fluxrss = simplexml_load_file('http://www.moovijob.com/site/public/feed.jsp?lIdJobCategory=8')) {
                    throw new Exception('Flux introuvable');
                }
                if (empty($fluxrss->channel->title) || empty($fluxrss->channel->description) || empty($fluxrss->channel->item->title))
                    throw new Exception('Flux invalide');

                /* echo '<h3>'.(string)$fluxrss->channel->title.'</h3>
                        <p>'.(string)$fluxrss->channel->description.'</p>'; */

                $i = 0;
                $nb_affichage = 50;
                echo '<div id="ann7">';
                foreach ($fluxrss->channel->item as $item) {
                    echo '<a href="' . (string)$item->link . '">' . (string)$item->title . '</a> <i>publié le ' . (string)date('d/m/Y à G\hi', strtotime($item->pubDate)) . '</i><br><br>';
                    if (++$i >= $nb_affichage)
                        break;
                }

                echo '</div>';

                ?>


                <hr>
                <html>
                <center>
                    <style>
                        p {
                            color: red;
                            font-size: 18px;
                            border-bottom: 2px;
                        }
                    </style>
                    <p>EMPLOI COLLECTIVITES / TOUTE LA FRANCE</p></b></center>
                <br></html><?php

                /* load flux (6) */

                if (!@$fluxrss = simplexml_load_file('http://www.emploi-collectivites.fr/rss.asp')) {
                    throw new Exception('Flux introuvable');
                }
                if (empty($fluxrss->channel->title) || empty($fluxrss->channel->description) || empty($fluxrss->channel->item->title))
                    throw new Exception('Flux invalide');

                /* echo '<h3>'.(string)$fluxrss->channel->title.'</h3>
                        <p>'.(string)$fluxrss->channel->description.'</p>'; */

                $i = 0;
                $nb_affichage = 50;
                echo '<div id="ann5">';
                foreach ($fluxrss->channel->item as $item) {
                    echo '<a href="' . (string)$item->link . '">' . (string)$item->title . '</a> <i>publié le ' . (string)date('d/m/Y à G\hi', strtotime($item->pubDate)) . '</i><br><br>';
                    if (++$i >= $nb_affichage)
                        break;
                }
                echo '</div>';

            } catch (Exception $e) {
                echo $e->getMessage();

            }

            ?>
            <hr>
            <html>
            <center>
                <style>
                    p {
                        color: red;
                        font-size: 18px;
                        border-bottom: 2px;
                    }
                </style>
                <p>Spécial SANTE dans toute la France</p></b></center>
            <br></html>

            <?php


            /* load flux Santé France (9) */

            if (!@$fluxrss = simplexml_load_file('http://www.unjobdanslasante.com/flux-rss.html')) {
                throw new Exception('Flux introuvable');
            }
            if (empty($fluxrss->channel->title) || empty($fluxrss->channel->description) || empty($fluxrss->channel->item->title))
                throw new Exception('Flux invalide');

            /* echo '<h3>'.(string)$fluxrss->channel->title.'</h3>
                    <p>'.(string)$fluxrss->channel->description.'</p>'; */

            $i = 0;
            $nb_affichage = 50;
            echo '<div id="ann7">';
            foreach ($fluxrss->channel->item as $item) {
                echo '<a href="' . (string)$item->link . '">' . (string)$item->title . '</a> <i>publié le ' . (string)date('d/m/Y à G\hi', strtotime($item->pubDate)) . '</i><br><br>';
                if (++$i >= $nb_affichage)
                    break;
            }

            ?>
        </div>
    </div>
</div>

<div class="colelem" id="u189"></div>
<div class="clearfix colelem" id="pu192-10">
    <img class="grpelem" id="u192-10" alt="&nbsp;Codeset (c) &#45; JS.KIDA
        MADE IN LIMOUZI" width="1560" height="151" src="images/u192-10.png"/>


    <div class="grpelem" id="u180">
        <a href="https://twitter.com/Yuki_Limousin" class="twitter-follow-button" data-lang="fr"
           data-show-screen-name="true" data-size="medium"></a>
    </div>

    <!-- #Insertion FB -->
    <div class="grpelem" id="u187">
        <div class="fb-like" data-href="http://https://www.facebook.com/profile.php?id=100011137083156" data-send="true"
             data-width="291" data-show-faces="false" data-colorscheme="light" data-layout="standard"
             data-action="like"></div>
    </div>

    <div class="colelem" id="u190"></div>
    <div class="verticalspacer"></div>
</div>


<!-- #jQuery -->
<script type="text/javascript">
    if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
<script type="text/javascript">
    window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
<script src="scripts/museutils.js?3777594392" type="text/javascript"></script>
<script src="scripts/jquery.watch.js?4144919381" type="text/javascript"></script>

<!-- #Insertion TWITTER -->
<script>!function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = "https://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, "script", "twitter-wjs");</script>


<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<style type="text/css">
    body {
        background-color: white;
        text-align: center;
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        font-weight: 300;
        font-size: 15px;
        color: #8dc0e3;
    }

    a {
        text-decoration: none;
        color: #8dc066;
        padding-left: 5px;
    }

    b {
        font-size: 30px;
        color: #8db0e3;
    }
</style>

<?php

try {
    if (!file_exists($databaseFile)) {
        $createQuery = "CREATE TABLE 'online' ('id' TEXT PRIMARY KEY NOT NULL, 'page_title' TEXT, 'page_url' TEXT, 'last_activity' INTEGER)";
    }

    $db = new PDO("sqlite:$databaseFile");

    if (isset($createQuery)) {
        $db->query($createQuery);
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

$result = $db->query('SELECT page_title, page_url, COUNT(page_url) AS count FROM online GROUP BY page_url ORDER BY count DESC');

if ($result) {
    $result = $result->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $page) {
        if (empty($page['page_title'])) {
            $page['page_title'] = $unknownPages;
        }

        echo "<p><b>$page[count]</b><a href='$page[page_url]' target='_top'>$page[page_title]</a></p>";
    }
}
?>




</body>

<!-- #Chargement des statistiques -->
<a title="Real Time Analytics" href="http://clicky.com/100924146"><img alt="Real Time Analytics" src="//static.getclicky.com/media/links/badge.gif" border="0" /></a>
<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100924146); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100924146ns.gif" /></p></noscript>

</html>

