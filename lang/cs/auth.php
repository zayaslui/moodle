<?PHP // $Id$ 
      // auth.php - created with Moodle 1.3 (2004052500)


$string['auth_dbdescription'] = 'Tato metoda pou��v� tabulku v extern� datab�zi ke kontrole, zda zadan� u�ivatelsk� jm�no a heslo je platn�.  P�i vytv��en� nov�ho ��tu mohou b�t informace z dal��ch pol� zkop�rov�ny do datab�ze Moodle.';
$string['auth_dbextrafields'] = 'Tato pole jsou voliteln�. M��ete si zvolit p�ednastaven� n�kter�ch informac� o u�ivateli na z�klad� hodnot v <B>pol�ch extern� datab�ze</B>, kter� ur��te zde.<P>Nech�te-li tato pole pr�zdn�, budou pou�ity implicitn� hodnoty.<P>Tak jako tak si u�ivatel po p�ihl�en� m��e tato pole m�nit.';
$string['auth_dbfieldpass'] = 'N�zev pole, kter� obsahuje hesla';
$string['auth_dbfielduser'] = 'N�zev pole, kter� obsahuje u�ivatelsk� jm�na';
$string['auth_dbhost'] = 'Po��ta� hostuj�c� datab�zi';
$string['auth_dbname'] = 'N�zev datab�ze';
$string['auth_dbpass'] = 'Heslo k tomuto u�ivatelsk�mu jm�nu';
$string['auth_dbpasstype'] = 'Ur�ete pou�it� form�t pole s heslem. �ifrov�n� MD5 je u�ite�n� p�i p�ipojov�n� k dal��m webov�m aplikac�m, jako je nap��klad PostNuke';
$string['auth_dbtable'] = 'N�zev tabulky v datab�zi';
$string['auth_dbtitle'] = 'Pou�it� extern� datab�ze';
$string['auth_dbtype'] = 'Typ datab�ze (Viz <A HREF=../lib/adodb/readme.htm#drivers>ADOdb dokumentaci</A>)';
$string['auth_dbuser'] = 'U�ivatelsk� jm�no s pr�vy ��st extern� datab�zi';
$string['auth_emaildescription'] = 'Potvrzen� emailem je p�ednastaven� metoda ov��ov�n�. P�i registraci si u�ivatel vybere vlastn� u�ivatelsk� jm�no a heslo. Pot� je na jeho adresu odesl�n email obsahuj�c� zabezpe�en� odkaz na str�nku, kde potvrd� zadan� �daje. P�i dal��m p�ihl�en� se ji� ov��uje pouze zadan� u�ivatelsk� jm�no a heslo proti hodnot� ulo�en� v datab�zi Moodle.';
$string['auth_emailtitle'] = 'Ov��en� na z�klad� emailu';
$string['auth_imapdescription'] = 'Tato metoda pou��v� IMAP server ke kontrole, zda zadan� u�ivatelsk� jm�no a heslo je platn�.';
$string['auth_imaphost'] = 'Adresa serveru IMAP. Zadejte IP adresu, nikoliv DNS jm�no serveru!';
$string['auth_imapport'] = '��slo portu IMAP servere. V�t�inou b�v� 143 nebo 993.';
$string['auth_imaptitle'] = 'Pou�it� IMAP serveru';
$string['auth_imaptype'] = 'Typ IMAP serveru.  IMAP servery mohou m�t r�zn� typy ov��ov�n� a vyjedn�v�n� (IMAP authentication and negotiation).';
$string['auth_ldap_bind_dn'] = 'Chcete-li pou��vat metodu bind-user k vyhled�n� u�ivatel�, specifikujte ji zde. P��klad: \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Heslo pro bind-user';
$string['auth_ldap_contexts'] = 'Seznam kontext�, ve kter�ch se nach�zej� u�ivatel�. Jednotliv� kontexty odd�lujte st�edn�kem. P��klad: \'ou=uzivatele,o=naseskola; ou=dalsi,o=naseskola\'';
$string['auth_ldap_create_context'] = 'Povol�te-li vytv��en� u�ivatel� (po ov��en� emailem), ur�ete kontext, ve kter�m budou nov� u�ivatel� vytv��eni. Tento kontext by m�l b�t z bezpe�nostn�ch d�vod� odli�n� od kontextu ostatn�ch u�ivatel�. Nen� t�eba p�id�vat tento kontext do prom�nn� auth_ldap_contexts, Moodle automaticky hled� u�ivatele i v tomto kontextu.';
$string['auth_ldap_creators'] = 'Seznam skupin, jejich� �lenov� jsou opr�vn�ni vytv��et nov� kurzy. Jednotliv� skupiny odd�lujte st�edn�kem. P��klad: \'cn=ucitele,ou=zamestnanci,o=naseskola\'';
$string['auth_ldap_host_url'] = 'Zadejte URL serveru LDAP. Nap��klad \'ldap://ldap.naseskola.cz/\' nebo \'ldaps://ldap.naseskola.cz/\' ';
$string['auth_ldap_memberattribute'] = 'Ur�ete atribut �lena skupiny (user member attribute), pokud u�ivatel pat�� do skupiny. V�t�inou \'member\'';
$string['auth_ldap_search_sub'] = 'Zadejte hodnotu <> 0 pokud chcete prohled�vat u�ivatele v subkontextech.';
$string['auth_ldap_update_userinfo'] = 'Aktualizovat informace o u�ivateli (p��jmen�, k�estn� jm�no, adresa...) z LDAP serveru do Moodle. Pro mapov�n� viz /auth/ldap/attr_mappings.php';
$string['auth_ldap_user_attribute'] = 'Atribut pou�it� pro pojmenov�n� a vyhled�v�n� u�ivatel�. V�t�inou \'cn\'.';
$string['auth_ldap_version'] = 'Verze protokolu LDAP, kterou pou��v� v� server.';
$string['auth_ldapdescription'] = 'Tato metoda poskytuje ov��en� u�ivatele proti LDAP serveru. Je-li zadan� jm�no a heslo platn�, Moodle si vytvo�� nov� z�znam o u�ivateli ve sv� vlastn� datab�zi. Tento modul d�le um� na��st informace z LDAP serveru a p�ednastavit po�adovan� pole v Moodle. P�i dal��m p�ihla�ov�n� se ji� pouze ov��uje u�ivatelsk� jm�no a heslo.';
$string['auth_ldapextrafields'] = 'Tato pole jsou voliteln�. M��ete vybrat, kter� pole s informacemi z <B>LDAP serveru</B> budou pou�ita jako p�ednastaven� v Moodle. <P>Nech�te-li pole pr�zdn�, nep�evezmou se ��dn� �daje z LDAP a Moodle pou�ije vlastn� p�ednastaven� hodnoty. <P>V ka�d�m p��pad� si u�ivatel m��e tyto hodnoty m�nit po p�ihl�en� s�m.';
$string['auth_ldaptitle'] = 'Pou�it� LDAP serveru';
$string['auth_manualdescription'] = 'Tato metoda neumo��uje u�ivatel�m zakl�dat si vlastn� ��ty. V�echny ��ty mus� b�t ru�n� vytvo�eny spr�vcem Moodle (admin).';
$string['auth_manualtitle'] = 'Pouze ru�n� vytv��en� ��ty';
$string['auth_multiplehosts'] = 'M��ete vlo�it i v�ce hostitel� (nap�. server1.cz;server2.cz;server3.com)';
$string['auth_nntpdescription'] = 'Tato metoda pou��v� NNTP server ke kontrole, zda zadan� u�ivatelsk� jm�no a heslo je platn�.';
$string['auth_nntphost'] = 'Adresa NNTP serveru. Zadejte IP adresu, nikoliv DNS n�zev!';
$string['auth_nntpport'] = '��slo portu NNTP serveru (v�t�inou 119)';
$string['auth_nntptitle'] = 'Pou�it� NNTP serveru';
$string['auth_nonedescription'] = 'U�ivatel� si mohou vytv��et nov� konta p��mo bez ov��en� v��i extern�mu serveru nebo potvrzen� p�es email. S touto volbou bu�te opatrn� - zva�te mo�n� probl�my se zabezpe�en�m a spr�vou u�ivatel�, kter� v�m tato volba m��e zp�sobit.';
$string['auth_nonetitle'] = 'Bez ov��en�';
$string['auth_pop3description'] = 'Tato metoda pou��v� POP3 server ke kontrole, zda zadan� u�ivatelsk� jm�no a heslo je platn�.';
$string['auth_pop3host'] = 'Adresa POP3 serveru. Zadejte IP adresu, nikoliv DNS n�zev!';
$string['auth_pop3port'] = '��slo portu POP3 serveru (v�t�inou 110)';
$string['auth_pop3title'] = 'Pou�it� POP3 serveru';
$string['auth_pop3type'] = 'Typ serveru. Pokud v� server pou��v� zabezpe�en� pomoc� certifik�t�, zvolte pop3cert.';
$string['auth_user_create'] = 'Povolit vytv��en� u�ivatel�';
$string['auth_user_creation'] = 'Nov� (anonymn�!) u�ivatel� si mohou zakl�dat u�ivatelsk� ��et v extern�m zdroji a potvrdit jej p�es email. Pokud toto povol�te, nezapome�te nakonfigurovat nastaven� pro dan� extern� zdroj t�kaj�c� se vytv��en� nov�ch u�ivatel�.';
$string['auth_usernameexists'] = 'Zvolen� u�ivatelsk� jm�no ji� existuje. Pros�m, vyberte si jin�.';
$string['authenticationoptions'] = 'Mo�nosti ov��en�';
$string['authinstructions'] = 'Zde m��ete zadat instrukce pro va�e u�ivatele, aby v�d�li, kter� u�ivatelsk� jm�no a heslo maj� pou��t. Tento text se objev� na p�ihla�ovac� str�nce. Nech�te-li toto pole pr�zdn�, nebudou zobrazeny ��dn� instrukce.';
$string['changepassword'] = 'URL ke zm�n� hesla';
$string['changepasswordhelp'] = 'Zde m��ete ur�it URL, na kter�m si va�i u�ivatel� mohou obnovit heslo nebo zm�nit sv� u�ivatelsk� jm�no, pokud jej zapomn�li. URL bude u�ivatel�m poskytnuto jako tla�itko na p�ihla�ovac� a osobn� str�nce. Nech�te-li toto pole pr�zdn�, nebude toto tla��tko zobrazov�no.';
$string['chooseauthmethod'] = 'Vyberte si zp�sob ov��en� u�ivatel�: ';
$string['guestloginbutton'] = 'Tla��tko pro hosta';
$string['instructions'] = 'Pokyny';
$string['md5'] = 'MD5 �ifrov�n�';
$string['plaintext'] = '�ist� text';
$string['showguestlogin'] = 'Na p�ihla�ovac� str�nce m��ete skr�t nebo uk�zat tla��tko pro p�ihl�en� se jako host.';

?>
