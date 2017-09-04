<?PHP // $Id$ Radik Kalakay - 2003-09-05 12:00 ver 1.1.a
      // auth.php - created with Moodle 1.1 (2003082800)


$string['auth_dbdescription'] = "T�to met�da vyu��va extern� datab�zov� tabu�ku na kontrolu platnosti dan�ho u��vate�sk�ho mena a hesla. Ak je to nov� konto m��u by� do prostredia Moodle prenesen� inform�cie aj z in�cho pol��ok.";
$string['auth_dbextrafields'] = "Tieto pol��ka s� nepovinn�. Je tu mo�nos�, aby niektor� u��vate�sk� pol��ka v prostred� Moodle uv�dzali inform�cie z <B>pol��ok extern�ch datab�z</B>, ktor� tu ud�te. <P>Ak tu ni� neuvediete, bude uv�dzan� p�vodn� nastavenie.<P>V obidvoch pr�padoch bude m�c� u��vate� po prihl�sen� upravova� v�etky tieto pol��ka.";
$string['auth_dbfieldpass'] = "N�zov pol��ka obsahuj�ceho hesl�";
$string['auth_dbfielduser'] = "N�zov pol��ka obsahuj�ceho u��vate�sk� men�";
$string['auth_dbhost'] = "Po��ta� hos�uj�ci datab�zov� server";
$string['auth_dbname'] = "Vlastn� n�zov datab�zy";
$string['auth_dbpass'] = "Heslo pre uveden�ho u��vate�a";
$string['auth_dbpasstype'] = "�pecifkujte form�t, ktor� pou��va pol��ko pre heslo. MD5 �ifrovanie je vhodn� pre pripojenie k �al��m be�n�m web aplik�ci�m ako PostNuke";
$string['auth_dbtable'] = "N�zov tabu�ky v datab�ze";
$string['auth_dbtitle'] = "Pou�i� extern� datab�zu";
$string['auth_dbtype'] = "Datab�zov� typ (bli��ie vi�<A HREF=../lib/adodb/readme.htm#drivers>ADOdb dokument�cia</A> )";
$string['auth_dbuser'] = "U��vate�sk� meno s pr�stupom do datab�zy len na ��tanie.";
$string['auth_emaildescription'] = "Emailov� potvrdzovanie je prednastaven� sp�sob overovania. Ke� sa u��vate� prihl�si, vyberie si vlastn� nov� u��vate�sk� meno a heslo a dostane potvrdzovac� email na svoju emailovu adresu. Tento email obsahuje bezpe�nostn� linku na str�nku, kde m��e u��vate� potvrdi� svoje nastavenie. Pri �al��ch prihlasovaniach iba skontroluje u��vate�sk� meno a heslo v porovnan� s �dajmi ulo�en�mi v Moodle datab�ze.";
$string['auth_emailtitle'] = "Emailov� overovanie";
$string['auth_imapdescription'] = "Na kontrolu spr�vnosti dan�ho u��vate�sk�ho mena a hesla pou��va t�to met�da IMAP server.";
$string['auth_imaphost'] = "Adresa IMAP serveru. Pou��vajte ��slo IP, nie n�zov DNS.";
$string['auth_imapport'] = "��slo IMAP server portu. Zvy�ajne je to 143 alebo 993.";
$string['auth_imaptitle'] = "Pou�i� IMAP server";
$string['auth_imaptype'] = "Typ IMAP serveru.  IMAP servery m��u ma� rozli�n� typy overovania.";
$string['auth_ldap_bind_dn'] = "Ak chcete pou��va� spoluu��vate�ov, aby ste mohli h�ada� u��vate�ov uve�te to tu. Napr�klad: 'ou=users,o=org; ou=others,o=org'";
$string['auth_ldap_bind_pw'] = "Heslo pre spoluu��vate�ov.";
$string['auth_ldap_contexts'] = "Zoznam prostred�, kde sa mach�dzaj� u��vatelia. Odde�te rozli�n� prostredia s ';'. Napr�klad: 'ou=users,o=org; ou=others,o=org'";
$string['auth_ldap_create_context'] = "Ak umo�n�te vytv�ranie u��vate�ov s eailov�m potvrdzovan�m, �pecifikujte kontext, kde bud� u��vatelia vytvoren�. Tento kontext by mal by� in�, ako pre ostatn�ch u��vate�ov v z�ujme bezpe�nosti. Nepotrebujete prida� tento kontext fo premennej ldap-context, Moodle bude vyh�ad�va� u��vate�ov z tohto kontextu automaticky.";
$string['auth_ldap_creators'] = "Zoznam skup�n, ktor�ch �lenovia maj� dovolen� vytv�ra� nov� kurzy. Jednotliv� skupiny odde�ujte bodko�iarkou. Oby�ajne nie�o ako cn=ucitelia,ou=ostatni,o=univ'";
$string['auth_ldap_host_url'] = "�pecifikujte hostite�a LDAP v podobe URL tj. 'ldap://ldap.myorg.com/' alebo 'ldaps://ldap.myorg.com/' ";
$string['auth_ldap_memberattribute'] = "�pecifikujte �lensk� atrib�t u��vate�a, ke� u��vatelia patria do skup�n; oby�ajne je to 'member'";
$string['auth_ldap_search_sub'] = "Uve�te hodnotu &lt;&gt; 0 ak chcete h�ada� u��vate�ov v subkontextoch.";
$string['auth_ldap_update_userinfo'] = "Aktualizova� inform�cie o u��vate�ovi (krstn� meno, priezvisko, adresa,...) z LDAP do Moodle. H�ada� v /auth/ldap/attr_mappings.php pre prira�uj�ce inform�cie.";
$string['auth_ldap_user_attribute'] = "Vlastnos� pou��van� na h�adanie mien u��vate�ov. Zvy�ajne 'cn'.";
$string['auth_ldapdescription'] = "T�to met�da poskytuje overovanie s LDAP serverom. 

Ak je u��vate�sk� meno a heslo spr�vne, Moodle vytvor� nov�ho u��vate�a v svojej datab�ze. 	  Tento modul dok�e ��ta� u��vate�sk� vlastnosti z LDAP a vyplni� �elan� pol��ka v Moodle. 

Pre nasleduj�ce prihlasovania sa kontroluj� iba u��vate�sk� meno a heslo.";
$string['auth_ldapextrafields'] = "Tieto pol��ka s� nepovinn�. Je tak� mo�nos�, �e Moodle u��vate�sk� pol��ka bud� uv�dza� inform�cie z <B>LDAP pol��ok</B> ,ktor� tu ud�te. <P>Ak tu ni� neuvediete, inform�cie z LDAP nebud� preveden�, a namiesto toho bude uv�dzan� Moodle nastavenie. <P>V obidvoch pr�padoch bude m�c� u��vate� po prihl�sen� korigova� v�etky tieto pol��ka.";
$string['auth_ldaptitle'] = "Pou�i� LDAP server";
$string['auth_manualdescription'] = "T�to met�da neumo��uje u��vate�om vytv�ra� vlastn� kont�. V�etky kont� mus� manu�lne vytvori� administr�tor.";
$string['auth_manualtitle'] = "Len manu�lne kont�";
$string['auth_nntpdescription'] = "Tento postup pou��va na kontrolu spr�vnosti u��vate�sk�ho mena a hesla NNTP server.";
$string['auth_nntphost'] = "Adresa NNTP servera. Pou�ite ��slo IP, nie n�zov DNS.";
$string['auth_nntpport'] = "Server port (119 je najbe�nej��)";
$string['auth_nntptitle'] = "Pou�i� NNTP server";
$string['auth_nonedescription'] = "U��vatelia sa m��u prihl�si� a vytvori� kont� bez overovania s extern�m serverom a bez potvrdzovania prostredn�ctvom emailu. Bu�te opatrn� pri tejto vo�be - myslite na bezpe�nos� a probl�my pri administr�cii, ktor� t�m m��u vznikn��.";
$string['auth_nonetitle'] = "�iadne overenie";
$string['auth_pop3description'] = "Tento postup pou��va  na kontrolu spr�vnosti u��vate�sk�ho mena a hesla POP3 server.";
$string['auth_pop3host'] = "Adresa POP3 servera. Pou�ite ��slo IP , nie n�zov DNS.";
$string['auth_pop3port'] = "Server port (110 je najbe�nej��)";
$string['auth_pop3title'] = "Pou��va� POP3 server";
$string['auth_pop3type'] = "Typ servera. Ak v� server pou��va certifikovan� zabezpe�enie, vyberte si pop3cert.";
$string['auth_user_create'] = "Umo�ni� vytv�ranie u��vate�ov";
$string['auth_user_creation'] = "Nov� (anonymn�) u��vatelia m��u vytv�ra� u��vate�sk� kont� v externom prostred� a overova� ich cez e=mail. Ak to umo�n�te, nezabudnite tie� skonfigurova� �pecifick� vo�by pre jednotliv� moduly.";
$string['auth_usernameexists'] = "Vybran� u��vate�sk� meno u� existuje. Pros�m, vyberte si in�.";
$string['authenticationoptions'] = "Mo�nosti overovania";
$string['authinstructions'] = "Tu m��ete uvies� pokyny pre u��vate�ov, aby vedeli, ak� u��vate�sk� meno a heslo maj� pou��va�. Text, ktor� tu vlo��te sa objav� na prihlasovacej str�nke. Ak to tu neuvediete, nebud� zobrazen� �iadne pokyny.";
$string['changepassword'] = "Zmeni� heslo URL";
$string['changepasswordhelp'] = "Tu m��ete uvies� miesto, na ktorom si va�i u��vatelia m��u pripomen��, alebo zmeni� u��vate�sk� meno/heslo, ak ho zabudli. Pre u��vate�ov to bude zobrazen� ako tla�idlo na prihlasovacej str�nke ich u��vate�skej str�nky. Ak to tu neuvediete, tla�idlo sa nezobraz�.";
$string['chooseauthmethod'] = "Vyberte si postup overovania: ";
$string['guestloginbutton'] = "Prihlasovacie tla�idlo pre hos�a";
$string['instructions'] = "In�trukcie";
$string['md5'] = "MD5 �ifrovanie";
$string['plaintext'] = "�ist� text";
$string['showguestlogin'] = "M��ete skry�, alebo zobrazi� prihlasovacie tla�idlo pre hos�a na prihlasovacej str�nke.";

?>
