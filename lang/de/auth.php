<?PHP // $Id$ 
      // auth.php - created with Moodle 1.3 development (2004040500)


$string['auth_dbdescription'] = 'Diese Methode benutzt eine externe Datenbank-Tabelle, um die G�ltigkeit eines angegebenen Nutzernamens und Kennwort zu �berpr�fen, Wenn der Zugang neu ist, werden die Informationen der �brigen Felder ebenso zu Moodle hin�berkopiert.';
$string['auth_dbextrafields'] = 'Diese Felder sind optional. Sie k�nnen ausw�hlen, einige Moodle Nutzer-Felder mit Informationen des <b>externen Datenbank-Feldes</b> vorauszuf�llen, das Sie hier angeben.
<p>Wenn Sie dieses leer lassen, werden Standardwerte benutzt.<P>Im anderen Fall mu� der/die Nutzer/in alle Felder nach der Anmeldung ausf�llen.';
$string['auth_dbfieldpass'] = 'Name des Feldes, das das Passwort enth�lt';
$string['auth_dbfielduser'] = 'Name des Feldes, das den Nutzernamen enth�lt';
$string['auth_dbhost'] = 'Der Computer, der die Datenbank bereitstellt';
$string['auth_dbname'] = 'Name der Datenbank';
$string['auth_dbpass'] = 'Das Passwort, das zum Nutzernamen geh�rt';
$string['auth_dbpasstype'] = 'Spezifizieren Sie das Format, das das Passwortfeld benutzt. MD5-Verschl�sselung ist n�tzlich daf�r, mit anderen �blichen Netzanwendungen Verbindung aufzunehmen wie z.B. PostNuke';
$string['auth_dbtable'] = 'Name der Datenbank-Tabelle';
$string['auth_dbtitle'] = 'Eine externe Datenbank benutzen';
$string['auth_dbtype'] = 'Der Datenbank-Typ (Siehe <A HREF=../lib/adodb/readme.htm#drivers>ADOdb Anleitung</A> f�r Einzelheiten)';
$string['auth_dbuser'] = 'Nutzername mit Schreibzugriff auf die Datenbank';
$string['auth_emaildescription'] = 'E-Mail-Best�tigung ist die Standard-Authentifizierungsmethode. Wenn sich der Nutzer anmeldet, seinen eigenen Nutzernamen und sein Passwort ausw�hlt, wird eine Best�tigungs-E-Mail an die E-Mail-Adresse des Nutzers gesendet. Diese E-Mail enth�lt einen sicheren Verweis auf eine Seite, wo der Nutzer seinen Zugang best�tigen kann. Sp�tere Anmeldungen pr�fen nur den Nutzernamen und Kennwort anhand der in der Moodle-Datenbank gespeicherten Daten.';
$string['auth_emailtitle'] = 'E-Mail-basierte Authentifizierung';
$string['auth_imapdescription'] = 'Diese Methode verwendet einen IMAP-Server, um zu pr�fen, ob der angegebener Nutzername und das Passwort g�ltig sind.';
$string['auth_imaphost'] = 'IMAP Server-Adresse. Benutzen Sie die IP, nicht den DNS-Namen';
$string['auth_imapport'] = 'IMAP Serverport-Nummer. Normalerweise ist das 143 oder 993.';
$string['auth_imaptitle'] = 'Einen IMAP-Server verwenden';
$string['auth_imaptype'] = 'Der IMAP Servertyp. IMAP Server k�nnen verschiedene Arten der Authentifizierung und �berpr�fung haben.';
$string['auth_ldap_bind_dn'] = 'M�chten Sie Bind-User verwenden, um Nutzer zu suchen, spezifizieren Sie dies hier. Normalerweise etwas wie \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Passwort f�r Bind-User.';
$string['auth_ldap_contexts'] = 'Liste der Umgebungen, in denen sich Nutzer befinden. Trennen Sie verschiedene Umgebungen durch \';\'. Beispiel: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Wenn Sie die Nutzer-Erstellung mit E-Mail-Best�tigung aktivieren, geben Sie die Umgebung an, wo die Nutzer erstellt werden sollen. Diese Umgebung sollte sich von der andererer Nutzer unterscheiden, um Sicherheitsrisiken zu vermeiden. Sie brauchen diese Umgebung nicht zur ldap_context Variable hinzuzuf�gen, Moodle sucht in dieser Umgebung automatisch nach Nutzern ';
$string['auth_ldap_creators'] = 'Eine Liste von Gruppen, denen es erlaubt ist, neue Kurse zu erstellen. Trennen Sie mehrere Gruppen durch \';\'. Normalerweise etwas wie \'cn=teachers,ou=staff, o=myorg\'';
$string['auth_ldap_host_url'] = 'Geben Sie einen LDAP Server in URL-Form an wie \'ldap://ldap.myorg.de/\' oder \'ldaps://ldap.myorg.de/\' ';
$string['auth_ldap_memberattribute'] = 'Geben Sie die Mitgliedsoptionen an, wenn Nutzer zu einer Gruppe geh�ren. Normalerweise \'member\'';
$string['auth_ldap_search_sub'] = 'W�hlen Sie &lt;&gt; 0 wenn Sie Nutzer aus Unterumgebungen suchen m�chten.';
$string['auth_ldap_update_userinfo'] = 'Nutzerdaten  (Vorname, Name, Adresse...) von LDAP zu Moodle aktualisieren. Weitere Informationen in /auth/ldap/attr_mappings.php';
$string['auth_ldap_user_attribute'] = 'Verwendete Eigenschaften, um Nutzer zu benennen/suchen. Normalerweise \'cn\'.';
$string['auth_ldap_version'] = 'Diese Version des LDAP Protokolls nutzt Ihr Server.';
$string['auth_ldapdescription'] = 'Diese Methode bietet Authentifizierung gegen�ber einem externen LDAP-Server.
                                  Wenn der vergebene Nutzername und Passwort g�ltig sind, erstellt Moodle einen
                                  neuen Nutzereintrag in seiner Datenbank. Diese Modul kann Nutzereintr�ge aus LDAP
                                  lesen und gew�nschte Felder in Moodle vorbelegen. F�r die folgenden Zug�nge
                                  werden nur Benutzername und Passwort �berpr�ft.';
$string['auth_ldapextrafields'] = 'Diese Felder sind optional. Sie k�nnen einige Moodle Nutzer-Felder mit Daten aus <B>LDAP Feldern</B>, die Sie hier spezifizieren, vorbelegen. <P>Wenn Sie diese Felder leer lassen, wird nichts von LDAP transferiert und die Moodle Voreinstellungen werden verwendet.<P>In jedem Fall k�nnen Nutzer diese Felder editieren, nachdem Sie sich angemeldet haben.';
$string['auth_ldaptitle'] = 'Einen LDAP-Server verwenden';
$string['auth_manualdescription'] = 'Diese Methode verhindert, dass Nutzer Ihre eigenen Zug�nge anlegen k�nnen. Jeder Zugang muss manuell vom Administrator selbst eingerichtet werden.';
$string['auth_manualtitle'] = 'Nur manuelle Zug�nge';
$string['auth_multiplehosts'] = 'Mehrere Hosts k�nnen angegeben werden (z.B. host1.com;host2.com;host3.com';
$string['auth_nntpdescription'] = 'Diese Methode verwendet einen NNTP-Server, um zu pr�fen, ob der angegebener Nutzername und das Passwort g�ltig sind.';
$string['auth_nntphost'] = 'NNTP Server-Adresse. Benutzen Sie die IP, nicht den DNS-Namen.';
$string['auth_nntpport'] = 'NNTP Serverport-Nummer. Normalerweise ist das 119.';
$string['auth_nntptitle'] = 'Einen NNTP-Server verwenden';
$string['auth_nonedescription'] = 'Nutzer k�nnen sich anmelden und g�ltige Nutzer-Accounts erstellen ohne Authentifizierung durch einen externen Server und ohne E-Mail-Best�tigung. Verwenden Sie diese Option vorsichtig, denken Sie an m�gliche Sicherheits- und Administrationsprobleme.';
$string['auth_nonetitle'] = 'Keine Authentifizierung';
$string['auth_pop3description'] = 'Diese Methode verwendet einen POP3-Server, um zu pr�fen, ob der angegebener Nutzername und das Passwort g�ltig sind.';
$string['auth_pop3host'] = 'POP3 Server-Adresse. Benutzen Sie die IP, nicht den DNS-Namen.';
$string['auth_pop3port'] = 'POP3 Serverport-Nummer. Normalerweise ist das 110.';
$string['auth_pop3title'] = 'Einen POP3-Server verwenden';
$string['auth_pop3type'] = 'Servertyp. Wenn Ihr Server Sicherheitszertifikate verwendet, w�hlen Sie pop3cert.';
$string['auth_user_create'] = 'Nutzer-Erstellung aktivieren';
$string['auth_user_creation'] = 'Neue (anonyme) Nutzer k�nnen Nutzer-Accounts erstellen au�erhalb der Authentifizierungsquelle und per E-Mail best�tigen. Sofern Sie dies aktivieren, achten Sie darauf, ebenso modulspezifische Optionen f�r die Modulerstellung zu konfigurieren.';
$string['auth_usernameexists'] = 'Ausgew�hlter Nutzername existiert bereits. Bitte w�hlen Sie einen neuen.';
$string['authenticationoptions'] = 'Authentifizierungsoptionen';
$string['authinstructions'] = 'Hier k�nnen Sie Ihren Nutzern Anweisungen geben, welche Nutzernamen und Passwort sie verwenden sollen. Der eingegebene Text erscheint auf der Anmeldeseite. Wenn Sie nichts eingeben, werden keine Anweisungen angezeigt.';
$string['changepassword'] = 'Passwort-URL �ndern';
$string['changepasswordhelp'] = 'Hier k�nnen Sie eine Adresse angeben, wo die Nutzer ihren Nutzernamen/Passwort �ndern k�nnen, sofern Sie dies vergessen haben. Diese Option wird den Nutzern als Schaltfl�che auf der Anmeldungsseite angeboten. Wenn Sie dieses Feld leer lassen, wird er nicht angezeigt.';
$string['chooseauthmethod'] = 'W�hlen Sie eine Authentifizierungsmethode: ';
$string['guestloginbutton'] = 'Gast-Login Schaltfl�che';
$string['instructions'] = 'Anweisungen';
$string['md5'] = 'MD5-Verschl�sselung';
$string['plaintext'] = 'Reiner Text';
$string['showguestlogin'] = 'Sie k�nnen die Gast-Login Schaltfl�che auf der Anmeldeseite anzeigen oder verbergen.';

?>
