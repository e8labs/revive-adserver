<?php // $Revision$

/************************************************************************/
/* phpAdsNew 2                                                          */
/* ===========                                                          */
/*                                                                      */
/* Copyright (c) 2000-2002 by the phpAdsNew developers                  */
/* For more information visit: http://www.phpadsnew.com                 */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/



// Installer translation strings
$GLOBALS['strInstall']				= "Installatie";
$GLOBALS['strChooseInstallLanguage']		= "Kies een taal voor de installatie procedure";
$GLOBALS['strLanguageSelection']		= "Taal selectie";
$GLOBALS['strDatabaseSettings']			= "Database instellingen";
$GLOBALS['strAdminSettings']			= "Beheer instellingen";
$GLOBALS['strAdvancedSettings']			= "Geavanceerde database instellingen";
$GLOBALS['strOtherSettings']			= "Andere instellingen";
$GLOBALS['strLicenseInformation']		= "Licentie informatie";
$GLOBALS['strAdministratorAccount']		= "Het beheer account";
$GLOBALS['strDatabasePage']				= "De ".$phpAds_dbmsname." database";
$GLOBALS['strInstallWarning']			= "Server en integriteit controle";
$GLOBALS['strCongratulations']			= "Gefeliciteerd!";
$GLOBALS['strInstallFailed']			= "De installatie is mislukt!";
$GLOBALS['strSpecifyAdmin']				= "Configureer het beheer account";
$GLOBALS['strSpecifyLocaton']			= "Specificeer de locatie van ".$phpAds_productname." op de server";

$GLOBALS['strWarning']				= "Waarschuwing";
$GLOBALS['strFatalError']			= "Er is een fout opgetreden";
$GLOBALS['strUpdateError']			= "Er is een fout opgetreden tijdens het bijwerken";
$GLOBALS['strUpdateDatabaseError']		= "Wegens een onbekende reden is het aanpassen van de database structuur niet gelukt. Het is aan te raden om te klikken op <b>Probeer opnieuw</b> om te proberen om deze fouten te herstellen. Indien u er zeker van bent dat deze fouten het functioneren van ".$phpAds_productname." niet in gevaar brengen kunt op de knop <b>Negeer foutmeldingen</b> klikken. Het negeren van deze foutmelding kan ernstige problemen veroorzaken en is niet aan te raden!";
$GLOBALS['strAlreadyInstalled']			= $phpAds_productname." is reeds geinstalleerd op dit systeem. Indien u het systeem verder wilt configureren ga dan naar de <a href='settings-index.php'>instellingen</a>";
$GLOBALS['strCouldNotConnectToDB']		= "Er kon geen connectie opgebouwd worden met de database, controleer a.u.b. de door u opgegeven instellingen. Ook dient u te controleren op de database die u opgegeven heeft ook daadwerkelijk bestaat op de database server. ".$phpAds_productname." zal deze database niet zelf aanmaken, deze moet al aangemaakt zijn voordat u de installatie begint.";
$GLOBALS['strCreateTableTestFailed']		= "De gebruiker die u heeft opgegeven heeft geen toestemming om de database aan te maken of te wijzigen, neem a.u.b. contact op met de beheerder van de database.";
$GLOBALS['strUpdateTableTestFailed']		= "De gebruiker die u heeft opgegeven heeft geen toestemming om de database structuur te wijzigen, neem a.u.b. contact op met de beheerder van de database.";
$GLOBALS['strTablePrefixInvalid']		= "De tabelnaam voorvoegsel bevat illegale tekens";
$GLOBALS['strTableInUse']			= "De database welke u opgegeven heeft is al ingebruik door ".$phpAds_productname.". Gebruik een ander tabelnaam voorvoegsel of lees de documentatie voor instructies om te upgraden.";
$GLOBALS['strTableWrongType']			= "Het tabel type dat u geselecteerd heeft wordt niet ondersteund door uw ".$phpAds_dbmsname." installatie";
$GLOBALS['strMayNotFunction']			= "Voor dat uw verder gaat, corrigeer a.u.b. de volgende problemen:";
$GLOBALS['strFixProblemsBefore']		= "De volgende item(s) dienen gecorrigeerd te worden voordat u ".$phpAds_productname." kan installeren. Indien u vragen heeft over deze foutmelding, lees dan eerst de <i>Administrator guide</i>, welke u kunt vinden in het bestand dat u gedownload heeft.";
$GLOBALS['strFixProblemsAfter']			= "Indien u de volgende items niet zelf kan corrigeren neem dan contact op met de beheerder van deze server. De beheerder van de server kan u wellicht verder helpen.";
$GLOBALS['strIgnoreWarnings']			= "Negeer waarschuwingen";
$GLOBALS['strWarningPHPversion']		= $phpAds_productname." heeft minimaal PHP 4.0.3 nodig om te functioneren. U gebruik momenteel versie {php_version}.";
$GLOBALS['strWarningPHP5beta']			= "U probeert ".$phpAds_productname." te installeren op een server welke een vroege test versie van PHP5 bevat. Deze test versies zijn niet bedoeld om te gebruiken op een productie server en bevatten hoogstwaarschijnlijk fouten. Het wordt afgeraden om ".$phpAds_productname." in combinatie met PHP 5 te gebruiken, behalve voor test doeleinden.";
$GLOBALS['strWarningDBavailable']		= "De versie van PHP welke u gebruikt heeft geen ondersteuning voor connecties met een ".$phpAds_dbmsname." database server. U dient de PHP ".$phpAds_dbmsname." extentie te installeren voordat u verder kunt gaan.";
$GLOBALS['strWarningRegisterGlobals']		= "De PHP instelling register_globals moet aan staan.";
$GLOBALS['strWarningMagicQuotesGPC']		= "De PHP instelling magic_quotes_gpc moet aan staan.";
$GLOBALS['strWarningMagicQuotesRuntime']	= "De PHP instelling magic_quotes_runtime moet uit staan.";
$GLOBALS['strWarningMagicQuotesSybase']	= "De PHP instelling magic_quotes_sybase moet uit staan.";
$GLOBALS['strWarningFileUploads']		= "De PHP instelling file_uploads moet aan staan.";
$GLOBALS['strWarningTrackVars']			= "De PHP instelling track_vars moet aan staan.";
$GLOBALS['strWarningPREG']			= "De versie van PHP die u gebruikt heeft geen ondersteuning voor PERL compatible reguliere expressies. U dient de PREG extentie te installeren voordat u verder kunt gaan.";
$GLOBALS['strConfigLockedDetected']		= $phpAds_productname." heeft gedetecteerd dat uw <b>config.inc.php</b> bestand niet beschrijfbaar is door de server. U kunt niet verder gaan tot u de bestands permissies gewijzigd heeft. Raadpleeg de bijgevoegde documentatie indien u niet weet hoe u dit kunt doen.";
$GLOBALS['strCacheLockedDetected']		= "U gebruikt een leveringscache van het type Bestanden, terwijl de <b>cache</b> map niet kan worden beschreven door de server. U kunt niet verder gaan tot dat de toegangspermissies van deze map gewijzigd worden. Lees de meegeleverde documentatie indien u niet weet hoe u dit moet doen.";
$GLOBALS['strCantUpdateDB']  			= "Het is momenteel nog niet mogelijk om de database bij te werken. Indien u beslist om door te gaan worden alle bestaande banners, statistieken and klanten verwijderd.";
$GLOBALS['strIgnoreErrors']			= "Negeer foutmeldingen";
$GLOBALS['strRetryUpdate']			= "Probeer opnieuw";
$GLOBALS['strTableNames']			= "Tabelnamen";
$GLOBALS['strTablesPrefix']			= "Tabelnaam voorvoegsel";
$GLOBALS['strTablesType']			= "Tabeltype";

$GLOBALS['strRevCorrupt']			= "Het bestand <b>{filename}</b> is corrupt of is gewijzigd. Heeft u dit bestand zelf niet gewijzigd, vervang het bestand dan met een schone kopie. Heeft u dit bestand wel zelf gewijzigd, dan kunt u deze waarschuwing negeren.";
$GLOBALS['strRevTooOld']			= "Het bestand <b>{filename}</b> is ouder dan welke bij deze versie van ".$phpAds_productname." meegeleverd wordt. Probeer een schone kopie van dit bestand op de server te plaatsen.";
$GLOBALS['strRevMissing']			= "Het bestand <b>{filename}</b> kon niet gecontroleerd worden omdat het niet gevonden kon worden. Probeer een schone kopie van dit bestand op de server te plaatsen.";
$GLOBALS['strRevCVS']				= "U probeert een CVS versie van ".$phpAds_productname." te installeren. Dit is niet een officiele versie en kan mogelijk onstabiel zijn, of zelfs helemaal niet functioneren. Weet u zeker dat u verder wilt gaan?";

$GLOBALS['strInstallWelcome']			= "Welkom bij ".$phpAds_productname."";
$GLOBALS['strInstallMessage']			= "Voordat u ".$phpAds_productname." kunt gebruiken moet het eerst geconfigureerd <br> worden, tevens moet de database aangemaakt worden. Klik op <b>Verder</b> om door te gaan.";
$GLOBALS['strInstallMessageCheck']		= $phpAds_productname." heeft de integriteit van de bestanden die op de server staan gecontroleerden heeft gekeken of uw server technisch gezien instaat is om ".$phpAds_productname." te draaien. De volgende item(s) moeten bekeken worden voordat u verder kunt gaan.";
$GLOBALS['strInstallSuccess']			= "<b>De installatie van ".$phpAds_productname." is nu compleet.</b><br><br>Om goed te functioneren moet de onderhouds bestand elk uur
						   gedraaid worden. Meer informatie over dit onderwerp kunt u vinden in de documentatie.
						   <br><br>Klik op <b>Verder</b> om door te gaan naar de configuratie pagina, waar u nog meer
						   items kunt instellen. Vergeet a.u.b. niet de permissies van het config.inc.php bestand weer terug te zetten, omdat dit
						   potentiele veiligheid problemen kan veroorzaken.";
$GLOBALS['strInstallMessageAdmin']		= "Voor dat u verder kunt gaan met de installatie dient u eerst het beheer account te configureren. U kunt dit account gebruiken om in te loggen in de beheer interface om uw voorraad te beheren en statistieken te bekijken.";
$GLOBALS['strInstallMessageDatabase']	= $phpAds_productname." gebruikt een ".$phpAds_dbmsname." database om de voorraad en alle statistieken in op te slaan. Voor dat u verder kunt gaan met de installatie dient u eerst de naam van de server die ".$phpAds_productname." moet gebruiken op te geven. Indien u niet weet welke informatie u hier dient op te geven, neem dan contact op met de beheerder van de server.";
$GLOBALS['strUpdateSuccess']			= "<b>Het bijwerken van ".$phpAds_productname." is succesvol afgerond.</b><br><br>Om goed te functioneren moet de maintenance functie elk uur gedraaid
						   worden (voorheen was dit elke dag). Meer informatie over dit onderwerp kunt u vinden in de documentatie.
						   <br><br>Klik op <b>Verder &gt;</b> om naar de administratie interface te gaan. Vergeet a.u.b. niet de permissies van het config.inc.php bestand weer terug te zetten, omdat dit
						   potentiele veiligheid problemen kan veroorzaken.";
$GLOBALS['strInstallNotSuccessful']		= "<b>De installatie van ".$phpAds_productname." was niet succesvol</b><br><br>Sommige onderdelen van het installatie proces konden niet succesvol.
						   afgesloten worden. Het is mogelijk dat deze problemen slechts tijdelijk zijn, in dat geval kunt u op <b>Verder</b> klikken en opnieuw
						   beginnen met de installatie. Indien u meer wilt weten over de foutmeldingen die hieronder vermeld staan, raadpleeg dan de 
						   bijgesloten documentatie.";
$GLOBALS['strErrorOccured']			= "De volgende fouten zijn opgetreden:";
$GLOBALS['strErrorInstallDatabase']		= "De database kon niet worden aangemaakt.";
$GLOBALS['strErrorInstallConfig']		= "Het configuratie bestand kont niet worden bijgewerkt.";
$GLOBALS['strErrorInstallDbConnect']		= "Het was niet mogelijk om een connectie te openen met de database.";

$GLOBALS['strUrlPrefix']			= "Locatie van ".$phpAds_productname."";

$GLOBALS['strProceed']				= "Verder &gt;";
$GLOBALS['strInvalidUserPwd']			= "Ongeldige gebruikersnaam of wachtwoord";

$GLOBALS['strUpgrade']				= "Upgrade";
$GLOBALS['strSystemUpToDate']			= "Uw systeem is al bijgewerkt, het is momenteel niet nodig om verder bij te werken. <br>Klik op <b>Verder</b> om door te gaan.";
$GLOBALS['strSystemNeedsUpgrade']		= "Om goed te functioneren moeten de database structuur en het configuratie bestand worden bijgewerkt. Klik op <b>Verder</b> om te beginnen met bijwerken. <br><br>Afhankelijk van welke versie u wilt bijwerken en de hoeveelheid bestaande statistieken kan deze functie een hoge belasting veroorzaken op de database server. Het bijwerken kan enige minuten duren.";
$GLOBALS['strSystemUpgradeBusy']		= "Uw systeem wordt momenteel bijgewerkt, een moment geduld a.u.b...";
$GLOBALS['strSystemRebuildingCache']		= "Uw bestaande gegevens worden bijgewerkt, een moment geduld a.u.b...";
$GLOBALS['strServiceUnavalable']		= "Deze service is momenteel niet beschikbaar. Het systeem wordt bijgewerkt.";

$GLOBALS['strConfigNotWritable']		= "Uw config.inc.php is niet te wijzigen";
$GLOBALS['strPhpBug20144']				= "Uw versie van PHP bevat een <a href='http://bugs.php.net/bug.php?id=20114' target='_blank'>fout</a> waardoor ".$phpAds_productname." niet goed zal functioneren op uw server.
										   Om ".$phpAds_productname." te kunnen installeren dient u eerst PHP te upgraden naar versie 4.3.0 of hoger.";
$GLOBALS['strPhpBug24652']				= "U probeert ".$phpAds_productname." te installeren op een server welke een vroege test versie van PHP 5 draait.
										   Deze test versies zijn niet bedoeld voor gebruik op productie servers en bevatten meestal fouten.
											 Een van deze fouten verhinderd het correct functioneren van ".$phpAds_productname.".
											 Deze <a href='http://bugs.php.net/bug.php?id=24652' target='_blank'>fout</a> is al opgelost en
										   de uiteindelijke versie van PHP 5 zal hier geen last van hebben.";





/*********************************************************/
/* Configuration translations                            */
/*********************************************************/

// Global
$GLOBALS['strChooseSection']			= "Kies sectie";
$GLOBALS['strDayFullNames'] 			= array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag");
$GLOBALS['strEditConfigNotPossible']    	= "Het is niet mogelijk om deze instellingen te wijzigen, omdat het configuratiebestand vanwege veiligheidsredenen op slot staat. ".
										  "Indien u veranderingen wilt maken dient u eerst het bestand config.inc.php schrijfbaar maken.";
$GLOBALS['strEditConfigPossible']		= "Het is mogelijk om alle instellingen te wijzigen, omdat het configuratiebestand niet op slot staat, maar dit zou kunnen lijden tot een veiligheidslek. ".
										  "Indien u uw systeem wilt behouden voor eventuele veiligheidsproblemen, dan moet u het bestand config.inc.php op slot zetten.";



// Database
$GLOBALS['strDatabaseSettings']			= "Database instellingen";
$GLOBALS['strDatabaseServer']			= "Database server";
$GLOBALS['strDbLocal']				= "Gebruik een lokale server door middel van sockets"; // Pg only
$GLOBALS['strDbPort']				= "Database poort nummer";
$GLOBALS['strDbHost']				= "Database adres";
$GLOBALS['strDbUser']				= "Database gebruikersnaam";
$GLOBALS['strDbPassword']			= "Database wachtwoord";
$GLOBALS['strDbName']				= "Database naam";

$GLOBALS['strDatabaseOptimalisations']		= "Database optimalisaties";
$GLOBALS['strPersistentConnections']		= "Gebruik 'persistent connections'";
$GLOBALS['strInsertDelayed']			= "Gebruik 'delayed inserts'";
$GLOBALS['strCompatibilityMode']		= "Gebruik database compatibiliteits mode";
$GLOBALS['strCantConnectToDb']			= "Kan geen connectie maken met de database";



// Invocation and Delivery
$GLOBALS['strInvocationAndDelivery']		= "Aanroep en aflevering instellingen";

$GLOBALS['strAllowedInvocationTypes']		= "Toegestande aanroeptypes";
$GLOBALS['strAllowRemoteInvocation']		= "Gebruik Remote Invocation";
$GLOBALS['strAllowRemoteJavascript']		= "Gebruik Remote Invocation voor Javascript";
$GLOBALS['strAllowRemoteFrames']		= "Gebruik Remote Invocation voor Frames";
$GLOBALS['strAllowRemoteXMLRPC']		= "Gebruik Remote Invocation voor XML-RPC";
$GLOBALS['strAllowLocalmode']			= "Gebruik Lokale mode";
$GLOBALS['strAllowInterstitial']		= "Gebruik Interstitials";
$GLOBALS['strAllowPopups']			= "Gebruik Popups";

$GLOBALS['strUseAcl']				= "Evalueer de leveringsbeperkingen tijdens de aflevering";

$GLOBALS['strDeliverySettings']			= "Leveringsinstellingen";
$GLOBALS['strCacheType']				= "Type leveringscache";
$GLOBALS['strCacheFiles']				= "Bestanden";
$GLOBALS['strCacheDatabase']			= "Database";
$GLOBALS['strCacheShmop']				= "Gedeeld geheugen/Shmop";
$GLOBALS['strCacheSysvshm']				= "Gedeeld geheugen/Sysvshm";
$GLOBALS['strExperimental']				= "Experimenteel";
$GLOBALS['strKeywordRetrieval']			= "Sleutelwoord selectie";
$GLOBALS['strBannerRetrieval']			= "Banner selectie methode";
$GLOBALS['strRetrieveRandom']			= "Willekeurige banner selectie (standaard)";
$GLOBALS['strRetrieveNormalSeq']		= "Normale sequentieele banner selectie";
$GLOBALS['strWeightSeq']			= "Op gewicht gebaseerde sequentieele banner selectie";
$GLOBALS['strFullSeq']				= "Volledige sequentieele banner selectie";
$GLOBALS['strUseConditionalKeys']		= "Sta het gebruik van logische operatoren toe tijdens directe selectie";
$GLOBALS['strUseMultipleKeys']			= "Sta het gebruik van meerdere sleutelwoorden toe tijdens directe selectie";

$GLOBALS['strZonesSettings']			= "Zone selectie";
$GLOBALS['strZoneCache']			= "Cache zones, dit zou het gebruik moeten versnellen wanneer gebruik gemaakt word van zones";
$GLOBALS['strZoneCacheLimit']			= "Tijd tussen het updaten van de cache (in seconden)";
$GLOBALS['strZoneCacheLimitErr']		= "De tijd tussen het updaten van de cache moet een positief getal zijn";

$GLOBALS['strP3PSettings']			= "P3P Privacy Policies";
$GLOBALS['strUseP3P']				= "Gebruik P3P Policies";
$GLOBALS['strP3PCompactPolicy']			= "P3P Compacte Policy";
$GLOBALS['strP3PPolicyLocation']		= "P3P Policy Locatie";



// Banner Settings
$GLOBALS['strBannerSettings']			= "Banner instellingen";

$GLOBALS['strAllowedBannerTypes']		= "Toegestane banner types";
$GLOBALS['strTypeSqlAllow']			= "Sta lokale banners toe (SQL)";
$GLOBALS['strTypeWebAllow']			= "Sta lokale banners toe (Webserver)";
$GLOBALS['strTypeUrlAllow']			= "Sta externe banners toe";
$GLOBALS['strTypeHtmlAllow']			= "Sta HTML banners toe";
$GLOBALS['strTypeTxtAllow']			= "Sta Tekst advertenties toe";

$GLOBALS['strTypeWebSettings']			= "Lokale banner (Webserver) instellingen";
$GLOBALS['strTypeWebMode']			= "Opslag methode";
$GLOBALS['strTypeWebModeLocal']			= "Lokale map";
$GLOBALS['strTypeWebModeFtp']			= "Externe FTP server)";
$GLOBALS['strTypeWebDir']			= "Lokale map";
$GLOBALS['strTypeWebFtp']			= "FTP server";
$GLOBALS['strTypeWebUrl']			= "Publieke URL";
$GLOBALS['strTypeFTPHost']			= "FTP server";
$GLOBALS['strTypeFTPDirectory']			= "Server map";
$GLOBALS['strTypeFTPUsername']			= "Gebruikersnaam";
$GLOBALS['strTypeFTPPassword']			= "Wachtwoord";
$GLOBALS['strTypeFTPErrorDir']			= "De server map bestaat niet";
$GLOBALS['strTypeFTPErrorConnect']		= "De verbinding met de FTP server kon niet worden opgebouwd, de gebruikersnaam of het wachtwoord zijn niet correct";
$GLOBALS['strTypeFTPErrorHost']			= "De hostname van de FTP server is niet correct";
$GLOBALS['strTypeDirError']				= "De lokale map bestaat niet";

$GLOBALS['strDefaultBanners']			= "Standaard banner";
$GLOBALS['strDefaultBannerUrl']			= "Standaard banner afbeelding";
$GLOBALS['strDefaultBannerTarget']		= "Standaard banner doellocatie";

$GLOBALS['strTypeHtmlSettings']			= "HTML banner opties";
$GLOBALS['strTypeHtmlAuto']			= "Verander HTML automatisch om het loggen van AdClicks te forceren";
$GLOBALS['strTypeHtmlPhp']			= "Sta het gebruik van PHP code toe binnen in HTML banners.";



// Host information and Geotargeting
$GLOBALS['strHostAndGeo']				= "Bezoekers en Geotargeting";

$GLOBALS['strRemoteHost']				= "Bezoekers";
$GLOBALS['strReverseLookup']			= "Probeer de hostname van de bezoeker te achterhalen als deze niet door de server wordt verstrekt";
$GLOBALS['strProxyLookup']				= "Probeer het echte IP adres van de bezoeker te achterhalen als er gebruik gemaakt wordt van een proxy server";

$GLOBALS['strGeotargeting']				= "Geotargeting";
$GLOBALS['strGeotrackingType']			= "Type Geotargeting database";
$GLOBALS['strGeotrackingLocation'] 		= "Geotargeting database locatie";
$GLOBALS['strGeotrackingLocationError'] = "De opgegeven locatie van de geotargeting database is niet correct";
$GLOBALS['strGeotrackingLocationNoHTTP']	= "De locatie welke u opgegeven heeft is een een lokale map op de harde schijf van de server, maar een URL naar een bestand op een webserver. De locatie zou moeten lijken op het volgende: <i>{example}</i>. De werkelijke locatie hangt af van de locatie waar u de database heeft opgeslagen.";
$GLOBALS['strGeoStoreCookie']			= "Sla het resultaat op in een cookie voor hergebruik";


// Statistics Settings
$GLOBALS['strStatisticsSettings']		= "Statistieken Instellingen";

$GLOBALS['strStatisticsFormat']			= "Statistieken formaat";
$GLOBALS['strCompactStats']				= "Statistieken formaat";
$GLOBALS['strLogAdviews']				= "Sla een AdView op iedere keer als een banner is afgeleverd";
$GLOBALS['strLogAdclicks']				= "Sla een AdClick op ieder keer als een bezoeker op een banner klikt";
$GLOBALS['strLogSource']				= "Sla de doel parameter op welke tijdens de aanroep is gespecificeerd";
$GLOBALS['strGeoLogStats']				= "Sla het land van herkomst van de bezoeker op";
$GLOBALS['strLogHostnameOrIP']			= "Sla de hostname of het IP adres van de bezoeker op";
$GLOBALS['strLogIPOnly']				= "Sla alleen het IP adres van de bezoeker op, zelfs als de hostname bekend is";
$GLOBALS['strLogIP']					= "Sla het IP adres van de bezoeker op";
$GLOBALS['strLogBeacon']				= "Gebruik een klein beacon afbeelding op de AdViews op slaan";

$GLOBALS['strRemoteHost']				= "Bezoekers";
$GLOBALS['strIgnoreHosts']				= "Sla geen statistieken op van gebruikers met een van de volgende IP adressen";
$GLOBALS['strBlockAdviews']				= "Sla geen AdViews op als de gebruiker dezelfde banner al eens gezien heeft binnen het gespecifieerde aantal seconden";
$GLOBALS['strBlockAdclicks']			= "Sla geen AdClicks op als de gebruiker al eerder op dezelfde banner geklikt heeft binnen het gespecificeerde aantal seconden";

$GLOBALS['strPreventLogging']			= "Bescherm de statistieken";
$GLOBALS['strEmailWarnings']			= "Waarschuwingen per email";
$GLOBALS['strAdminEmailHeaders']		= "Voeg de volgende headers toe aan elk door ".$phpAds_productname." verzonden e-mail";
$GLOBALS['strWarnLimit']			= "Stuur een waarschuwing als de resterende impressies minder zijn dan hier gespecificeerd";
$GLOBALS['strWarnLimitErr']			= "Waarschuwings limiet moet een positief nummer zijn";
$GLOBALS['strWarnAdmin']			= "Stuur een waarschuwing naar de beheerder wanneer er voor een campagne bijna geen impressies meer over zijn";
$GLOBALS['strWarnClient']			= "Stuur een waarschuwing naar de adverteerder wanneer er voor een campagne bijna geen impressies meer over zijn";
$GLOBALS['strQmailPatch']			= "Pas headers aan voor qmail";


$GLOBALS['strAutoCleanTables']			= "Database opschoning";
$GLOBALS['strAutoCleanStats']			= "Schoon statistieken op";
$GLOBALS['strAutoCleanUserlog']			= "Schoon gebruikerslog op";
$GLOBALS['strAutoCleanStatsWeeks']		= "Maximale leeftijd statistieken <br>(minimaal 3 weken)";
$GLOBALS['strAutoCleanUserlogWeeks']		= "Maximale leeftijd gebruikerslog <br>(minimaal 3 weken)";
$GLOBALS['strAutoCleanErr']			= "De maximale leeftijd moet minstens drie weken zijn";
$GLOBALS['strAutoCleanVacuum']			= "VACUUM ANALYZE tabellen elke nacht"; // only Pg


// Administrator settings
$GLOBALS['strAdministratorSettings']		= "Beheerder instellingen";

$GLOBALS['strLoginCredentials']			= "Inlog gegevens";
$GLOBALS['strAdminUsername']			= "Gebruikersnaam van de beheerder";
$GLOBALS['strInvalidUsername']			= "Ongeldige gebruikersnaam";

$GLOBALS['strBasicInformation']			= "Basis informatie";
$GLOBALS['strAdminFullName']			= "Volledige naam";
$GLOBALS['strAdminEmail']			= "E-mail adres";
$GLOBALS['strCompanyName']			= "Bedrijfsnaam";

$GLOBALS['strAdminCheckUpdates']		= "Controleer op nieuwe versie";
$GLOBALS['strAdminCheckEveryLogin']		= "Altijd";
$GLOBALS['strAdminCheckDaily']			= "Dagelijks";
$GLOBALS['strAdminCheckWeekly']			= "Wekelijks";
$GLOBALS['strAdminCheckMonthly']		= "Maandelijks";
$GLOBALS['strAdminCheckNever']			= "Nooit";

$GLOBALS['strAdminNovice']			= "Toon een waarschuwing wanneer er items verwijderd worden";
$GLOBALS['strUserlogEmail']			= "Sla alle uitgaande e-mails op";
$GLOBALS['strUserlogPriority']			= "Sla alle uurlijkse prioriteit berekeningen op";
$GLOBALS['strUserlogAutoClean']			= "Sla automatisch opschonen van de database op";


// User interface settings
$GLOBALS['strGuiSettings']			= "Gebruikersinterface instellingen";

$GLOBALS['strGeneralSettings']			= "Algemene instellingen";
$GLOBALS['strAppName']				= "Applicatienaam";
$GLOBALS['strMyHeader']				= "Voetnoot bestand";
$GLOBALS['strMyHeaderError']		= "De opgegeven locatie van het voetnoot bestand is niet correct";
$GLOBALS['strMyFooter']				= "Eindnoot bestand";
$GLOBALS['strMyFooterError']		= "De opgegeven locatie van het eindnoot bestand is niet correct";
$GLOBALS['strGzipContentCompression']		= "Gebruik GZIP content compression";

$GLOBALS['strClientInterface']			= "Adverteerder interface";
$GLOBALS['strClientWelcomeEnabled']		= "Toon een welkomstbericht";
$GLOBALS['strClientWelcomeText']		= "Welkomstbericht<br>(HTML is toegestaan)";



// Interface defaults
$GLOBALS['strInterfaceDefaults']		= "Interface standaardwaarden";

$GLOBALS['strInventory']			= "Vooraad";
$GLOBALS['strShowCampaignInfo']			= "Toon extra campagne informatie op de <i>Campagne overzicht</i> pagina";
$GLOBALS['strShowBannerInfo']			= "Toon extra banner informatie op de <i>Banner overzicht</i> pagina";
$GLOBALS['strShowCampaignPreview']		= "Toon voorvertooning van alle banners op de <i>Banner overzicht</i> pagina";
$GLOBALS['strShowBannerHTML']			= "Toon werkelijke banner in plaats van HTML code voor de voorvertoning van HTML banners";
$GLOBALS['strShowBannerPreview']		= "Toon voorvertoning bovenaan alle pagina's welke betrekking hebben op banners";
$GLOBALS['strHideInactive']			= "Verberg niet actieve items van de overzichtspagina's";
$GLOBALS['strGUIShowMatchingBanners']		= "Toon geschikte banners op de <i>Gekoppelde banners</i> paginas";
$GLOBALS['strGUIShowParentCampaigns']		= "Toon bovenliggende campagnes op de <i>Gekoppelde banners</i> pagina";
$GLOBALS['strGUILinkCompactLimit']		= "Verberg niet-gekoppelde campagnes of banners op de<i>Gekoppelde banners</i> paginas wanneer er meer zijn dan";

$GLOBALS['strStatisticsDefaults'] 		= "Statistieken";
$GLOBALS['strBeginOfWeek']			= "Begin van de week";
$GLOBALS['strPercentageDecimals']		= "Nauwkeurigheid van percentages";

$GLOBALS['strWeightDefaults']			= "Standaard gewicht";
$GLOBALS['strDefaultBannerWeight']		= "Standaard banner gewicht";
$GLOBALS['strDefaultCampaignWeight']		= "Standaard campagne gewicht";
$GLOBALS['strDefaultBannerWErr']		= "Standaard banner gewicht moet een positief getal zijn";
$GLOBALS['strDefaultCampaignWErr']		= "Standaard campagne gewicht moet een positief getal zijn";



// Not used at the moment
$GLOBALS['strTableBorderColor']			= "Tabel rand kleur";
$GLOBALS['strTableBackColor']			= "Table achtergrond kleur";
$GLOBALS['strTableBackColorAlt']		= "Table achtergrond kleur (alternatief)";
$GLOBALS['strMainBackColor']			= "Globale achtergrond kleur";
$GLOBALS['strOverrideGD']			= "Override GD Imageformat";
$GLOBALS['strTimeZone']				= "Tijdzone";

?>