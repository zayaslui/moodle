<?PHP // $Id$ 
      // auth.php - created with Moodle 1.1.1 (2003091111)


$string['auth_dbdescription'] = "�� metode izmanto �r�ju datu b�zi lietot�ja un paroles p�rbaudei. Veidojot jaunu ierakstu, inform�cija var tikt kop�ta sist�m�.";
$string['auth_dbextrafields'] = "�ie ir papildus lauki. J�s varat aizpild�t tos ar inform�ciju no <B>�r�j�s datu b�zes</b>, kas ir nor�d�ta �eit. <P>Ja atst�siet laukus neaizpild�tus, tad tiks ievietoti noklus�tie dati.</p> Jebkur� gad�jum� lietot�js ielogojoties var�s labot �os laukus.";
$string['auth_dbfieldpass'] = "Paroles lauka nosaukums";
$string['auth_dbfielduser'] = "Lietot�jv�rda lauka nosaukums";
$string['auth_dbhost'] = "Datu b�zes serveris.";
$string['auth_dbname'] = "Datu b�zes nosaukums";
$string['auth_dbpass'] = "Atbilsto�� lietot�ja parole";
$string['auth_dbpasstype'] = "Nor�diet paroles lauka tipu.  MD5 kod��ana ir vislab�k izmantojam� lai savienotos ar cit�m web-pielikumiem, piem�ram, PostNuke";
$string['auth_dbtable'] = "Tabulas nosaukums datu b�z�";
$string['auth_dbtitle'] = "Izmantot �r�ju datu b�zi";
$string['auth_dbtype'] = "Datu b�zes tips (Skat�t <A HREF=../lib/adodb/readme.htm#drivers>ADOdb dokument�ciju</A>)";
$string['auth_dbuser'] = "Lietot�js tikai ar datu b�zes las�anas ties�b�m";
$string['auth_emaildescription'] = "E-pasta apstiprin�jums ir noklus�t� autentifik�cijas metode. Kad lietot�js re�istr�jas, uz lietot�ja e-pastu tiek nos�t�ta apstiprin�juma v�stule. V�stule satur nejau�i izveidotu saiti, kur lietot�js var apstiprin�t savu re�istr�ciju. N�ko�aj�s reiz�s, kad lietot�ja sist�mas ieie�anas reiz�s, lietot�ja v�rds un parole tiek sal�dzin�ta ar datu b�zi.";
$string['auth_emailtitle'] = "E-pasta autentifik�cija";
$string['auth_imapdescription'] = "�� metode izmanto IMAP serveri, lai p�rbaud�tu lietot�ja v�rdu un paroli.";
$string['auth_imaphost'] = "IMAP servera adrese. Lietojat IP adresi nevis DNS v�rdu.";
$string['auth_imapport'] = "IMAP servera porta numurs. Parasti 143 vai 993.";
$string['auth_imaptitle'] = "Lietot IMAP serveri";
$string['auth_imaptype'] = "IMAP servera tips. IMAP serveriem var b�t da��das autentifik�cijas un sazi�as metodes.";
$string['auth_ldap_bind_dn'] = "Ja J�s gribat sasietu lietot�ju, lai v�r�tu mekl�t lietot�jus, tad nor�diet �eit.
Piem�ram, 'cn=ldapuser,ou=public,o=org'";
$string['auth_ldap_bind_pw'] = "Parole sasietajam lietot�jam.";
$string['auth_ldap_contexts'] = "Kontekstu saraksts, kur lietot�ji ir novietoti.
Atdaliet kontekstus ar ';'. Piem�ram: 'ou=users,o=org; ou=others,o=org'";
$string['auth_ldap_create_context'] = "Ja J�s veidojat lietot�jus ar e-pasta apstiprin�jumu, tad nor�diet kontekstu, kur tiek veidoti lietot�ji. �im kontekstam j�at��iras no citiem, lai nov�rstu dro��bas probl�mas. Nav nepiecie�ams pievienot �o kontekstu pie ldap_context-main�giem, sist�ma mekl�s lietot�jus no �� konteksta autom�tiski.";
$string['auth_ldap_creators'] = "Grupu saraksts, kuras var�s veidot jaunus kursus. Atdaliet grupas ar ';'. Piem�ram, 'cn=teachers,ou=staff,o=myorg'";
$string['auth_ldap_host_url'] = "Nor�diet LDAP serveri URL-veid� piem�ram 'ldap://ldap.myorg.com/' vai 'ldaps://ldap.myorg.com/' ";
$string['auth_ldap_memberattribute'] = "Nor�diet lietot�ja atrib�tu, kas nosaka lietot�ja pieder�bu grupai. Parasti 'member'";
$string['auth_ldap_search_sub'] = "Nor�diet &lt;&gt; 0 noz�mi, ja jums pat�k mekl�t lietot�jus pa zemkontekstiem.";
$string['auth_ldap_update_userinfo'] = "Izmainiet lietot�ja inform�ciju (v�rds, uzv�rds, adrese..) no LDAP uz Moodle. Skatiet /auth/ldap/attr_mappings.php , inform�cijas att�lo�anai";
$string['auth_ldap_user_attribute'] = "Atrib�ts, ko izmanto v�rdam/mekl��anai. Parasti 'cn'.";
$string['auth_ldapdescription'] = "�� metode pied�v� autentific�ties ar LDAP servera pal�dz�bu. Ja dotais lietot�js un parole ir pareizi, sist�ma izveido jaunu lietot�ju t�s datu b�z�. �is modulis var nolas�t lietot�ja atrib�tus no LDAP un aizpild�t vajadz�gos laukus sist�m�. P�c tam tiek p�rbaud�ts tikai lietot�jv�rds un parole.";
$string['auth_ldapextrafields'] = "�is ir papildus lauks. J�s varat aizpild�t sist�mas lietot�ja laukus ar inform�ciju no <B>LDAP laukiem</B> ko J�s nor�d�t �eit. <P>
Ja atst�siet �os laukus tuk�us, tad nekas netiks p�rvietots no LDAP uz sist�mu, tiks lietoti noklus�tie uzst�d�jumi. Abos gad�jumos lietot�js �os datus var�s izmain�t v�l�k.";
$string['auth_ldaptitle'] = "Lietot LDAP serveri";
$string['auth_manualdescription'] = "�� metode aizliedz lietot�jiem veidot pa�iem veikt re�istr�ciju. Visas re�istr�cijas ir j�veic administr�tam lietot�jam.";
$string['auth_manualtitle'] = "Tikai manu�la re�istr�cija";
$string['auth_nntpdescription'] = "�� metode izmanto NNTP serveri, lai p�rbaud�tu lietot�jv�rdu un paroli.";
$string['auth_nntphost'] = "NNTP servera adrese. J�lieto IP adrese, nevis DNS v�rds.";
$string['auth_nntpport'] = "Servera ports (parasti 119)";
$string['auth_nntptitle'] = "Lietot NNTP serveri";
$string['auth_nonedescription'] = "Lietot�ji var ielogoties un veidot re�istr�t lietot�jus, bez �r�ja servera pal�dz�bas vai e-pasta apstiprin�juma. Esat piesardz�gs lietojot �o iesp�ju, jo t� var rad�t dro��bas un administr�cijas probl�mas.";
$string['auth_nonetitle'] = "Nek�da autentifik�cija";
$string['auth_pop3description'] = "�� metode izmanto pop3 serveri, lai p�rbaud�tu lietot�jv�rdu un paroli.";
$string['auth_pop3host'] = "POP3 servera adrese. J�lieto IP adrese, nevis DNS v�rds.";
$string['auth_pop3port'] = "Servera ports (parasti 110)";
$string['auth_pop3title'] = "Lietot POP3 serveri";
$string['auth_pop3type'] = "Servera tips. Ja J�su serveris izmanto uz sertifik�tiem balst�tu aizsardz�bu, izv�laties pop3cert.";
$string['auth_user_create'] = "At�aut lietot�ju veido�anu";
$string['auth_user_creation'] = "Jauni (anon�mi) lietot�ji var veidot jaunus lietot�jus uz �r�ja autentifik�cijas avotu un apstiprin�t caur e-pastu.
ts on the external authentication source and confirmed via email. Ja J�s �o at�aujat, neaizmirstiet nokonfigur�t module-specific opcijas lietot�ju pievieno�anai.";
$string['auth_usernameexists'] = "Izv�l�tais lietot�jv�rds past�v. Izv�laties citu.";
$string['authenticationoptions'] = "Authentication options";
$string['authinstructions'] = "�eit J�s varat ievad�t inform�ciju lietot�jiem, k�du lietot�jv�rdu un paroli lietot. �eit ievad�tais teksts par�d�sies lietot�ja identifik�cijas lap�. Ja atst�siet lauku tuk�u, nek�das instrukcijas netiks dotas.";
$string['changepassword'] = "Nomain�t URL ar paroli";
$string['changepasswordhelp'] = "�eit J�s varat nor�d�t veidu, k� lietot�js var atg�t savu lietot�jv�rdu/paroli, ja vi�i to ir aizmirsu�i. Lietot�ji ieraudz�s pogu lietot�ju identifik�cijas lap� un lietot�ja datu lap�. Ja J�s atst�siet �o lauku tuk�u, poga netiks izvad�ta.";
$string['chooseauthmethod'] = "Izv�laties autentifik�cijas metodi:";
$string['guestloginbutton'] = "Viesu identifik�cijas poga";
$string['instructions'] = "Instrukcijas";
$string['md5'] = "MD5 kod��ana";
$string['plaintext'] = "Teksts";
$string['showguestlogin'] = "J�s varat par�d�t vai sl�pt viesu identifik�cijas pogu identifik�cijas lap�.";

?>
