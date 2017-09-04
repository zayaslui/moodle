<?PHP // $Id$ 
      // auth.php - created with Moodle 1.3 Beta (2004051100)


$string['auth_dbdescription'] = 'Denna metod anv�nder en extern databastabell f�r att kontrollera huruvida ett givet anv�ndarnamn och l�senord �r giltigt.  Om kontot �r nytt, s� kan information fr�n andra f�lt ocks� kopieras till Moodle.';
$string['auth_dbextrafields'] = 'Detta f�lt �r valfritt.  Du kan v�lja att p� f�rhand fylla i n�gra anv�ndarf�lt f�r Moodle med information fr�n <b>externa databasf�lt</b> som Du kan specificera h�r. <p>Om Du l�mnar dessa f�lt tomma, s� kommer standardv�rden att anv�ndas.</p><p>I vilket fall som helst, kommer anv�ndaren kunna redigera alla dessa f�lt efter det att de loggat in.</p>';
$string['auth_dbfieldpass'] = 'Namn p� det f�lt som inneh�ller l�senord';
$string['auth_dbfielduser'] = 'Namn p� det f�lt som inneh�ller anv�ndarnamn';
$string['auth_dbhost'] = 'Den dator (v�rd) som anv�nds f�r databasservern.';
$string['auth_dbname'] = 'Namnet p� sj�lva databasen ';
$string['auth_dbpass'] = 'L�senord som matchar ovanst�ende anv�ndarnamn';
$string['auth_dbpasstype'] = 'Specificera formatet p� det f�lt som l�senordet ska ligga �. MD-kryptering g�r att anv�nda om Du vill koppla upp Dig mot andra vanliga webbapplikationer som PostNuke.';
$string['auth_dbtable'] = 'Namn p� tabellen i databasen';
$string['auth_dbtitle'] = 'Anv�nd en extern databas';
$string['auth_dbtype'] = 'Databastyp (se <A HREF=../lib/adodb/readme.htm#drivers>ADOdb dokumentation</A> f�r detaljer)';
$string['auth_dbuser'] = 'Anv�ndarnamn med l�sbeh�righet till databasen';
$string['auth_emaildescription'] = 'E-postbekr�ftelse �r standardvalet som autenticeringsmetod.  N�r anv�ndaren registrerar sig, v�ljer eget nytt anv�ndarnamn och l�senord, kommer en bekr�ftelse via e-post s�ndas till anv�ndarens e-postadress.  Detta e-postbrev inneh�ller en s�ker l�nk till en sida d�r anv�ndaren kan bekr�fta sitt konto. Framtida inlogging kontrollerar bara anv�ndarnamn och l�senord mot de lagrade v�rdena i Moodles databas.';
$string['auth_emailtitle'] = 'E-postbaserad autenticering';
$string['auth_imapdescription'] = 'Denna metod anv�nder en IMAP-server f�r att kontrollera huruvida ett givet anv�ndarnamn och l�senord �r giltigt.';
$string['auth_imaphost'] = 'IMAP-serverns adress. Anv�nd IP-nummer, inte DNS- namn.';
$string['auth_imapport'] = 'IMAP-serverns portnummer. Vanligtvis �r detta 143 eller 993.';
$string['auth_imaptitle'] = 'Anv�nd en IMAP-server';
$string['auth_imaptype'] = 'IMAP servertyp.  IMAP-servrar kan ha olika typer av autenticeringar och f�rhandlingar.';
$string['auth_ldap_bind_dn'] = 'Om Du vill bruka \'bind\'-anv�ndare f�r att s�ka anv�ndare, s� ska Du specificera det h�r. N�got som \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'L�senord f�r \'bind\'-anv�ndare.';
$string['auth_ldap_contexts'] = 'Lista av kontexter d�r anv�ndarna finns med.  Separera olika kontexter med \';\'.  Till exempel: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Om Du aktiverar \'Skapa anv�ndare\' med e-postbekr�ftelse s� ska Du specifiera den kontext d�r anv�ndare skapas. Denna kontext b�r vara en annan �n den vanliga f�r att undvika s�kerhetsrisker. Du beh�ver inte l�gga till denna kontext till variabeln \'ldap_context\'. Moodle letar automatiskt efter anv�ndare fr�n den h�r kontexten.';
$string['auth_ldap_creators'] = 'Lista av grupper som har beh�righet att skapa nya kurser. Skilj p� grupperna med \';\'. Vanligtvis n�got liknande \'ch=utbildare, ou=personal, o=minOrg\'';
$string['auth_ldap_host_url'] = 'Specificera en LDAP-v�rd i URL-form som \'ldap://ldap.myorg.com/\' eller \'ldaps://ldap.myorg.com/\' ';
$string['auth_ldap_memberattribute'] = 'Specificera en medlems egenskaper n�r anv�ndare tillh�r en grupp. Vanligtvis \'medlem\'';
$string['auth_ldap_search_sub'] = 'S�tt in ett v�rde <> 0 om Du vill s�ka anv�ndare fr�n subkontexter.';
$string['auth_ldap_update_userinfo'] = 'Uppdatera anv�ndarinformation (f�rnamn, efternamn, adress..) fr�n LDAP till Moodle.  Se /auth/ldap/attr_mappings.php f�r mappnings- information';
$string['auth_ldap_user_attribute'] = 'Attributet som anv�nds f�r namn/s�kning av anv�ndare.  Vanligtvis \'cn\'.';
$string['auth_ldap_version'] = 'Detta �r den version av LDAP-protokollet som Din server anv�nder.';
$string['auth_ldapdescription'] = 'Denna metod ger autenticering mot en extern LDAP-server. Om det givna anv�ndarnamnet och l�senordet �r giltiga skapar Moodle en plats f�r en ny anv�ndare i databasen. Denna modul kan l�sa anv�ndarattribut fr�n LDAP och fylla i p� f�rhand                                 �nskade f�lt i Moodle. F�r f�ljande login �r endast anv�ndarnamn och l�senord kontrollerade.';
$string['auth_ldapextrafields'] = 'Dessa f�lt �r valfria.  Du kan v�lja att p� f�rhand fylla i  n�gra anv�ndarf�lt f�r Moodle med information fr�n <B>LDAP-f�lt</B> som Du kan specificera h�r. <P>Om Du l�mnar dessa f�lt tomma, s� kommer inget att f�ras �ver fr�n LDAP och standardv�rden f�r Moodle kommer att anv�ndas ist�llet.<P>I vilket fall som helst, kommer anv�ndaren kunna redigera alla dessa f�lt efter det att de loggat in.';
$string['auth_ldaptitle'] = 'Anv�nd en LDAP-server';
$string['auth_manualdescription'] = 'Den h�r metoden g�r det om�jligt f�r anv�ndare att skapa sina egna konton. Alla konton m�ste skapas manuellt av administrat�ren.';
$string['auth_manualtitle'] = 'Endast manuellt skapade konton';
$string['auth_multiplehosts'] = 'Du kan ange flera v�rdar(t ex host1.com;host2.com;host3.com)  ';
$string['auth_nntpdescription'] = 'Denna metod anv�nder en NNTP-server f�r att kontrollera huruvida ett givet anv�ndarnamn och l�senord �r giltiga.';
$string['auth_nntphost'] = 'NNTP-serverns adress.  Anv�nd IP-nummer, inte DNS-namn.';
$string['auth_nntpport'] = 'Serverport (119 �r den vanligaste)';
$string['auth_nntptitle'] = 'Anv�nd en NNTP-server';
$string['auth_nonedescription'] = 'Anv�ndare kan logga in och skapa giltiga konton omedelbart, utan autenticering mot extern server och heller ingen bekr�ftelse via e-post.  Var f�rsiktig med anv�ndning av detta val - t�nk p� s�kerheten och de administrativa problem som detta kan orsaka.';
$string['auth_nonetitle'] = 'Ingen autenticering';
$string['auth_pop3description'] = 'Denna metod anv�nder en POP3 server f�r att kontrollera huruvida ett givet anv�ndarnamn och l�senord �r giltiga.';
$string['auth_pop3host'] = 'POP3-serveradressen. Anv�nd IP-nummer, inte DNS-namn.';
$string['auth_pop3port'] = 'Serverport (110 �r den vanligaste)';
$string['auth_pop3title'] = 'Anv�nd en POP3-server';
$string['auth_pop3type'] = 'Servertyp. Om Din server anv�nder certifikat som s�kerhet, v�lj pop3cert.';
$string['auth_user_create'] = 'Aktivera ';
$string['auth_user_creation'] = 'Nya (anonyma) anv�ndare kan utnyttja en extern k�lla f�r autenticering och skapa anv�ndarkonton som bekr�ftas med e-post. Om Du aktiverar detta f�r Du inte gl�mma att ocks� konfigurera de modulspecifika valm�jligheterna som anv�ndare ska kunna skapa.';
$string['auth_usernameexists'] = 'Det valda anv�ndarnamnet finns redan. Du m�ste v�lja ett annat.';
$string['authenticationoptions'] = 'Autenticering tillval';
$string['authinstructions'] = 'H�r kan Du ge instruktioner f�r Dina anv�ndare, s� att de vet vilket anv�ndarnamn och l�senord de b�r anv�nda.  Texten Du skriver in h�r kommer att visas p� loginsidan.  Om Du l�mnar detta tomt s� kommer inga instruktioner att visas.';
$string['changepassword'] = '�ndra l�senord URL';
$string['changepasswordhelp'] = 'H�r kan Du specificera en plats d�r Dina anv�ndare kan �terst�lla eller �ndra sina anv�ndarnamn/l�senord om de har gl�mt. Detta kommer att visas f�r anv�ndarna som en knapp p� loginsidan och p� deras anv�ndarsidor. Om Du l�mnar detta tomt kommer inte knappen att visas.';
$string['chooseauthmethod'] = 'V�lj en autentiseringsmetod: ';
$string['guestloginbutton'] = 'Knapp f�r g�stlogin';
$string['instructions'] = 'Instruktioner';
$string['md5'] = 'MD5-kryptering';
$string['plaintext'] = 'Ren text';
$string['showguestlogin'] = 'Du kan g�mma eller visa knappen f�r g�stlogin p� loginsidan.';

?>
