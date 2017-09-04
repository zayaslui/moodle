<?PHP // $Id$ 
      // auth.php - created with Moodle 1.3 (2004052500)


$string['auth_dbdescription'] = 'Aquest m�tode utilitza una taula d\'una base de dades externa per comprovar si un nom d\'usuari i una contrasenya s�n v�lids. Si el compte �s nou, aleshores tamb� es pot copiar en Moodle informaci� d\'altres camps.';
$string['auth_dbextrafields'] = 'Aquests camps s�n opcionals. Podeu triar d\'omplir alguns camps d\'usuari del Moodle amb informaci� dels <B>camps de la base de dades externa</B> especificats aqu�. <P>Si els deixeu en blanc s\'utilitzaran valors per defecte.<P>En tot cas, l\'usuari podr� editar tots aquests camps quan es connecti.';
$string['auth_dbfieldpass'] = 'Nom del camp que cont� la contrasenya';
$string['auth_dbfielduser'] = 'Nom del camp que cont� el nom d\'usuari';
$string['auth_dbhost'] = 'L\'ordinador que allotja el servidor de la base de dades.';
$string['auth_dbname'] = 'El nom de la base de dades';
$string['auth_dbpass'] = 'Contrasenya corresponent al nom d\'usuari anterior';
$string['auth_dbpasstype'] = 'Especifiqueu el format que utilitza el camp de la contrasenya. El xifratge MD5 �s �til per connectar-se a altres aplicacions web comunes com ara PostNuke';
$string['auth_dbtable'] = 'Nom de la taula';
$string['auth_dbtitle'] = 'Utilitza una base de dades externa';
$string['auth_dbtype'] = 'Tipus de base de dades (vg. la <A HREF=../lib/adodb/readme.htm#drivers>documentaci� sobre ADOdb</A>)';
$string['auth_dbuser'] = 'Nom d\'usuari amb acc�s de lectura a la base de dades';
$string['auth_emaildescription'] = 'La confirmaci� per correu electr�nic �s el m�tode d\'autenticaci� per defecte. Quan l\'usuari es registra i tria el seu nom d\'usuari i contrasenya, se li envia un missatge per confirmar les dades. Aquest missatge cont� un enlla� segur a una p�gina en la qual l\'usuari pot confirmar el seu compte. En les connexions seg�ents simplement es compara el nom d\'usuari i la contrasenya amb els valors guardats a la base de dades de Moodle.';
$string['auth_emailtitle'] = 'Autenticaci� basada en el correu electr�nic';
$string['auth_imapdescription'] = 'Aquest m�tode utilitza un servidor IMAP per comprovar si un nom d\'usuari i una contrasenya s�n v�lids.';
$string['auth_imaphost'] = 'L\'adre�a del servidor IMAP. Ha de ser el n�mero IP, no el nom del DNS.';
$string['auth_imapport'] = 'El n�mero de port del servidor IMAP. Generalment �s el 143 o el 993.';
$string['auth_imaptitle'] = 'Utilitza un servidor IMAP';
$string['auth_imaptype'] = 'Tipus de servidor IMAP. Els servidors IMAP poden tenir diferents tipus d\'autenticaci� i negociaci�.';
$string['auth_ldap_bind_dn'] = 'Si voleu utilitzar el bind-user per cercar usuaris, especifiqueu-ho aqu�. Una cosa semblant a \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Contrasenya del bind-user.';
$string['auth_ldap_contexts'] = 'Llista de contextos en qu� estan ubicats els usuaris. Separeu els contextos amb \';\'. Per exemple: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Si activeu la creaci� d\'usuaris mitjan�ant confirmaci� per correu electr�nic, especifiqueu en quin context s\'han de crear els usuaris. Aquest context ha de ser diferent del d\'altres usuaris per tal de prevenir problemes de seguretat. No cal afegir aquest context a ldap_context-variable. Moodle cercar� els usuaris en aquest context autom�ticament.';
$string['auth_ldap_creators'] = 'Llista de grups als membres dels quals els �s perm�s  crear nous cursos. Separeu els grups amb \';\'. Generalment una cosa semblant a \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_host_url'] = 'Especifiqueu l\'hoste LDAP en format URL, per exemple \'ldap://ldap.myorg.com/\' o \'ldaps://ldap.myorg.com/\' ';
$string['auth_ldap_memberattribute'] = 'Especifiqueu l\'atribut de membre de l\'usuari, quan els usuaris pertanyen a un grup. Generalment \'member\'';
$string['auth_ldap_search_sub'] = 'Poseu el valor <> 0 si voleu cercar els usuaris en subcontextos.';
$string['auth_ldap_update_userinfo'] = 'Passar les dades de l\'usuari (nom, cognoms, adre�a...) de LDAP a Moodle. Informaci� sobre mapatge en /auth/ldap/attr_mappings.php';
$string['auth_ldap_user_attribute'] = 'L\'atribut utilitzat per anomenar/cercar usuaris. Generalment \'cn\'.';
$string['auth_ldap_version'] = 'La versi� del protocol LDAP que est� utilitzant el servidor.';
$string['auth_ldapdescription'] = 'Aquest m�tode proporciona autenticaci� contra un servidor LDAP extern.

                                  Si un nom d\'usuari i una contrasenya s�n v�lids, Moodle crea una entrada per a un nou usuari 

                                  a la seva base de dades. Aquest m�dul pot llegir atributs de l\'usuari del LDAP i omplir 

                                  els camps corresponents de Moodle. En connexions successives nom�s es comproven  

                                  el nom d\'usuari i la contrasenya.';
$string['auth_ldapextrafields'] = 'Aquests camps s�n opcionals. Podeu triar d\'omplir alguns camps d\'usuari de Moodle amb informaci� dels <B>camps LDAP</B> especificats aqu�. <P>Si els deixeu en blanc, aleshores s\'utilitzaran valors per defecte.<P>En tot cas, l\'usuari podr� editar tots aquests camps quan es connecti.';
$string['auth_ldaptitle'] = 'Utilitza un servidor LDAP';
$string['auth_manualdescription'] = 'Aquest m�tode impedeix que els usuaris puguin crear-se comptes. Tots els comptes han de ser creats manualment per l\'usuari administrador.';
$string['auth_manualtitle'] = 'Nom�s comptes manuals';
$string['auth_multiplehosts'] = 'Podeu especificar diversos ordinadors (p. e. host1.com; host2.com; host3.com)';
$string['auth_nntpdescription'] = 'Aquest m�tode utilitza un servidor NNTP per comprovar si un nom d\'usuari i una contrasenya s�n v�lids.';
$string['auth_nntphost'] = 'L\'adre�a del servidor NNTP. Ha de ser el n�mero IP, no el nom del DNS.';
$string['auth_nntpport'] = 'N�mero de port del servidor (el 119 �s el m�s habitual)';
$string['auth_nntptitle'] = 'Utilitza un servidor NNTP';
$string['auth_nonedescription'] = 'Els usuaris es poden registrar i crear comptes immediatament v�lids, sense cap mena d\'autenticaci� contra un servidor extern ni confirmar la identitat per correu electr�nic. Teniu compte amb aquesta  opci� - penseu en els problemes de seguretat i d\'administraci� que pot causar.';
$string['auth_nonetitle'] = 'Sense autenticaci�';
$string['auth_pop3description'] = 'Aquest m�tode utilitza un servidor POP3 per comprovar si un nom d\'usuari i una contrasenya s�n v�lids.';
$string['auth_pop3host'] = 'L\'adre�a del servidor POP3. Ha de ser el n�mero IP, no el nom del DNS.';
$string['auth_pop3port'] = 'N�mero de port del servidor (el 110 �s el m�s habitual)';
$string['auth_pop3title'] = 'Utilitza un servidor POP3';
$string['auth_pop3type'] = 'Tipus de servidor. Si el vostre servidor utilitza seguretat per certificat, trieu pop3cert.';
$string['auth_user_create'] = 'Activa la creaci� d\'usuaris';
$string['auth_user_creation'] = 'Els nous usuaris (an�nims) poden crear comptes d\'usuari en la font d\'autenticaci� externa i confirmar-los via correu electr�nic. Si activeu aquesta opci�, recordeu de configurar tamb� opcions espec�fiques del m�dul per a la creaci� d\'usuaris.';
$string['auth_usernameexists'] = 'El nom d\'usuari elegit ja existeix. Sisplau trieu-ne un altre.';
$string['authenticationoptions'] = 'Opcions d\'autenticaci�';
$string['authinstructions'] = 'Aqu� podeu posar instruccions per als vostres usuaris, per tal que s�piguen quin nom d\'usuari i quina contrasenya han d\'utilitzar. El text apareixer� a la p�gina d\'entrada. Si el deixeu en blanc no hi haur� instruccions.';
$string['changepassword'] = 'URL de canvi de contrasenya';
$string['changepasswordhelp'] = 'Aqu� podeu especificar una adre�a en la qual els usuaris puguin recuperar o canviar la seua contrasenya si se n\'han oblidat. Aquesta opci� apareixer� en forma de bot� a la p�gina d\'entrada. Si la deixeu en blanc no apareixer� el bot�.';
$string['chooseauthmethod'] = 'Trieu un m�tode d\'autenticaci�: ';
$string['guestloginbutton'] = 'Bot� d\'entrada d\'invitats';
$string['instructions'] = 'Instruccions';
$string['md5'] = 'Xifratge MD5';
$string['plaintext'] = 'Text net';
$string['showguestlogin'] = 'Podeu ocultar o mostrar el bot� d\'entrada com a invitat a la p�gina d\'entrada.';

?>
