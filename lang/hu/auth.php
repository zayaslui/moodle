<?PHP // $Id$ 
      // auth.php - created with Moodle 1.1.1 (2003091111)


$string['auth_dbdescription'] = "Ez a m�dszer egy k�ls� adatb�zist�bl�t haszn�l a felhaszn�l� nev�nek �s jelszav�nak ellen�rz�s�re.  �j felhaszn�l� eset�n az egy�b mez�kben t�rolt inform�ci�k is �tker�lnek a Moodle-ba.";
$string['auth_dbextrafields'] = "Ezek v�laszthat� mez�k. V�laszthatja azt is, hogy a Moodle a mez�k egy r�sz�t egy itt megadott  <B>k�ls� adatb�zisb�l</B> el�re felt�ltse. <P>A mez�ket �resen hagyva az alap�rtelmezett �rt�kek lesznek haszn�lva.<P>B�rmely esetben a felhszn�l� bel�p�s ut�n v�ltoztathatja ezeket a mez�ket.";
$string['auth_dbfieldpass'] = "A jelsz�t tartalmaz� mez� neve";
$string['auth_dbfielduser'] = "A felhaszn�l�nevet tartalmaz� mez� neve";
$string['auth_dbhost'] = "Az adatb�zisszervert futtat� sz�m�t�g�p.";
$string['auth_dbname'] = "Az adatb�zis neve";
$string['auth_dbpass'] = "Jelsz� �sszehasonlit�s a fenti felhaszn�l�n�v alapj�n";
$string['auth_dbpasstype'] = "A jelsz� mez� form�tum�t hat�rozza meg. Az MD5 titkos�t�s hasznos olyan n�pszer� web-alkalmaz�sok eset�n, mint pl. a PostNuke";
$string['auth_dbtable'] = "A t�bla neve az adatb�zisban";
$string['auth_dbtitle'] = "K�ls� adatb�zis haszn�lata";
$string['auth_dbtype'] = "Az adatb�zis t�pusa (L�sd a <A HREF=../lib/adodb/readme.htm#drivers>ADOdb dokument�ci�t</A> a r�szletek�rt)";
$string['auth_dbuser'] = "Az adatb�zishoz olvas�si joggal rendelkez� felhaszn�l�n�v";
$string['auth_emaildescription'] = "Az Email visszaigazol�s az alap�rtelmezett hiteles�t�si elj�r�s. Amikor a felhaszn�l� feliratkozik, �s �j felhaszn�l�nevet ill. jelsz�t v�laszt, egy visszaigazol� email lesz elk�ldve a megadott email c�mre.  Az email egy biztons�gos linket tartalmaz arra az oldalra, ahol a felhaszn�l� igazolhatja a feliratkoz�st. A k�vetkez� bejelentkez�sek csak a nevet �s a jelsz�t ellen�rzik a Moodle adatb�zisb�l.";
$string['auth_emailtitle'] = "Email-alap� hitelesit�s";
$string['auth_imapdescription'] = "Ez az elj�r�s egy IMAP servert haszn�l annak ellen�rz�s�re, hogy a megadott felhaszn�l�n�v �s jelsz� �rv�nyes-e.";
$string['auth_imaphost'] = "Az IMAP szerver c�me. Haszn�ljon IP c�met, ne DNS nevet.";
$string['auth_imapport'] = "Az IMAP szerver portsz�ma. Ez �ltal�ban 143 vagy 993.";
$string['auth_imaptitle'] = "IMAP szerver haszn�lata";
$string['auth_imaptype'] = "Az IMAP szerver t�pusa. Az IMAP szervereknek k�l�nb�z� t�pus� hiteles�t�se �s dialektusa lehet.";
$string['auth_ldap_bind_dn'] = "Ha bind-usert k�v�n felhaszn�l�k keres�s�re haszn�lni, �ll�tsa be itt. Pl.:'cn=ldapuser,ou=public,o=org'";
$string['auth_ldap_bind_pw'] = "A bind-user jelszava";
$string['auth_ldap_contexts'] = "Kontextusok list�ja, melyekbne a felhaszn�l� tal�lhat�. K�l�nb�z� kontextusokat ';' -vel v�lasszon el. Pl.: 'ou=users,o=org; ou=others,o=org'";
$string['auth_ldap_create_context'] = "Ha enged�lyezte felhaszn�l�k l�trehoz�s�t e-mail visszaigazol�ssal, adja meg itt a kontextust, amelyben a felhaszn�l�k l�trej�nnek. Ennek - biztons�gi okokb�l - k�l�nb�znie kell m�s felhaszn�l�k�t�l. Ezt nem kell hozz�adni az ldap_context v�ltoz�hoz, a szoftver automatikusan ebben a kontextusban keresi a felhaszn�l�kat.";
$string['auth_ldap_creators'] = "Azon csoportok list�ja, melyek tagjai l�trehozhatnak kurzusokat. A csoportokat ';' v�lasztja el. �ltal�ban valami ilyesmi: 'cn=teachers,ou=staff,o=myorg'";
$string['auth_ldap_host_url'] = "LDAP g�p megad�sa URL-szer�en pl.'ldap://ldap.myorg.com/' or 'ldaps://ldap.myorg.com/'";
$string['auth_ldap_memberattribute'] = "Adja meg a felhaszn�l�k csoporthoz tartoz�st jellemz� attrib�tum�t. �ltal�ban 'member'";
$string['auth_ldap_search_sub'] = "�rja be az &lt;&gt; 0 �rt�keket ha az alkontxtusokban is keresni k�v�n felhaszn�l�t.";
$string['auth_ldap_update_userinfo'] = "Felhaszn�l�i adatok (keresztn�v, vezet�kn�v, c�m..) friss�t�se LDAP-b�l a Moodle-ba. L�sd a /auth/ldap/attr_mappings.php -t f�jlt mapping inform�ci��rt";
$string['auth_ldap_user_attribute'] = "Attrib�tum felhaszn�l�k elnevez�s�hez/keres�s�hez. �ltal�ban 'cn'.";
$string['auth_ldapdescription'] = "Ez a m�dszer lehet�s�get ad egy k�ls� LDAP szerverrel t�rt�n� jogosults�g-ellen�rz�sre.
Ha a megadott n�v �s jelsz� �rv�nyes, a Moodle egy �j felhaszn�l� bejegyz�st hoz l�tre a saj�t                                 adatb�zis�ban. Ez a modul k�pes kiolvasni a felhaszn�l� adatait az LDAP-b�l, �s kit�lti a k�telez� mez�ket a Moodle-ban. K�vetkez� bejelentkez�skor csak a felhaszn�l�n�v �s a jelsz�        lesz ellen�rizve.";
$string['auth_ldapextrafields'] = "Ezek a mez�k nem k�telez�ek. N�h�ny Moodle felhaszn�l�i adatmez�t el�re kit�lthet az itt megadott <B>LDAP mez�k</B> adataival. <P>Ha ezeket a mez�ket �resen hagyja, semmilyen adat nem ker�l �t az LDAP-b�l �s a Moodle alap�rtelmezett �rt�kek lesznek haszn�lva.<P>Mindk�t esetben a afelhaszn�l�nak lehet�s�ge lesz v�ltoztatni a mez�k �rt�k�n bejelentkez�s ut�n.";
$string['auth_ldaptitle'] = "LDAP szerver haszn�lata";
$string['auth_manualdescription'] = "Ez a m�dzser minden lehet�s�get elvesz a felhaszn�l�kt�l saj�t account l�trehoz�s�ra. Minden account-ot manu�lisan hoz l�tre az admin felhaszn�l�.";
$string['auth_manualtitle'] = "Csak amnu�lis account-ok";
$string['auth_nntpdescription'] = "Ez a m�dszer egy NNTP szerverrel ellen�rzi a felhaszn�l�n�v �s jelsz� �rv�nyees�g�t.";
$string['auth_nntphost'] = "Az NNTP szerver c�me. Haszn�ljon IP c�met, ne DNS nevet.";
$string['auth_nntpport'] = "Szerver port (�ltal�ban 119)";
$string['auth_nntptitle'] = "NNTP szerver haszn�lata";
$string['auth_nonedescription'] = "A felhaszn�l�k azonnal feliratkozhatnak �s egy �rv�nyes hozz�f�r�st hozhatnak l�tre, k�ls� jogosults�g-ellen�rz�s �s emailen t�rt�n� meger�s�t�s n�lk�l. �vatosan haszn�lja ezt a lehet�s�get - gondoljon a lehets�ges biztons�gi �s adminisztr�ci�s probl�m�kra.";
$string['auth_nonetitle'] = "nincs hitelesit�s";
$string['auth_pop3description'] = "Ez a m�dszer egy POP3 szerverrel ellen�rzi a felhaszn�l�n�v �s jelsz� �rv�nyees�g�t.";
$string['auth_pop3host'] = "Az POP3 szerver c�me. Haszn�ljon IP c�met, ne DNS nevet.";
$string['auth_pop3port'] = "Szerver port (�ltal�ban 110)";
$string['auth_pop3title'] = "POP3 szerver haszn�lata";
$string['auth_pop3type'] = "Szervert�pus. Ha a szerver certifik�ci�s biztons�gi modellt haszn�l, v�laszsza a pop3cert -t.";
$string['auth_user_create'] = "Felhaszn�l� l�trehoz�s enged�lyez�se";
$string['auth_user_creation'] = "�j (anonymus) felhaszn�l� l�trehozhat �j account-ot a k�ls� autentik�ci�s forr�son, email meger�s�t�ssel.Ha ezt enged�lyezi, ne feledje megadni a felhaszn�l� l�trehoz�s modul-specifikus tulajdons�gait sem .";
$string['auth_usernameexists'] = "A v�lasztott felhaszn�l�n�v m�r l�tezik. V�lasszon m�sikat.";
$string['authenticationoptions'] = "Felhaszn�l�-azonos�t�si lehet�s�gek";
$string['authinstructions'] = "Itt instrukci�kat adhat a felhaszn�l�k sz�m�ra, hogy tudj�k, milyen nevet �s jelszavat kell haszn�lni. Az itt megadott sz�veg megjelenik a bejelentkez� oldalon. Ha �resen hagyja, nem jelenik meg semmilyen instrukci�.";
$string['changepassword'] = "Jelsz� URL cser�je";
$string['changepasswordhelp'] = "Itt megadhat egy helyet, ahol a felhaszn�l�k visszakereshetik vagy megv�ltoztathatj�k nev�ket/jelszavukat ha elfelejtett�k. Ez gombk�nt jelenik meg a bejelentkez� oldalon �s a felhaszn�l�i oldalon. Ha �resen hagyja, nem jelenik meg ilyen gomb.";
$string['chooseauthmethod'] = "V�lasszon egy azonos�t�si elj�r�st:";
$string['guestloginbutton'] = "Vend�g bel�p�se gomb";
$string['instructions'] = "Teend�k";
$string['md5'] = "MD5 titkos�t�s";
$string['plaintext'] = "Egyszer� sz�veg";
$string['showguestlogin'] = "Megjelen�theti vagy elrejtheti a vend�g bel�p�se gombot a bejelentkez� oldalon.";

?>
