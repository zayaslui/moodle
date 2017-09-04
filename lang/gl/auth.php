<?PHP // $Id$ 
      // auth.php - created with Moodle 1.3.1 (2004052501)


$string['auth_dbdescription'] = 'Este m�todo emprega unha t�boa dunha base de datos externa para comprobar se un determinado usuario/a e contrasinal son v�lidos. Se a conta � nova, a informaci�n doutros campos pode tam�n ser copiada en Moodle.';
$string['auth_dbextrafields'] = 'Estes campos son opcionais. Vostede pode elixir pre-cubrir alg�ns campos do usuario/a de Moodle con informaci�n desde os <strong>campos da base de datos externa</strong> que especifique aqu�. <p>Se deixa isto en branco, tomaranse os valores por defecto</p>.<p>En ambos os dous casos, o usuario/a poder� editar todos estes campos despois de entrar</p>.';
$string['auth_dbfieldpass'] = 'Nome do campo que cont�n os contrasinais';
$string['auth_dbfielduser'] = 'Nome do campo que cont�n os nomes de usuario/a';
$string['auth_dbhost'] = 'O ordenador que hospeda o servidor da base de datos.';
$string['auth_dbname'] = 'Nome da base de datos';
$string['auth_dbpass'] = 'O contrasinal correspondente ao nome de usuario/a anterior';
$string['auth_dbpasstype'] = 'Especifique o formato que emprega o campo de contrasinal. A criptograf�a MD5 � �til para conectar con outras aplicaci�ns web como PostNuke.';
$string['auth_dbtable'] = 'Nome da t�boa na base de datos';
$string['auth_dbtitle'] = 'Usar unha base de datos externa';
$string['auth_dbtype'] = 'O tipo de base de datos (Vexa a <a href=../lib/adodb/readme.htm#drivers>documentaci�n de ADOdb</a> para obter m�is detalles)';
$string['auth_dbuser'] = 'Usuario/a con acceso de lectura � base de datos';
$string['auth_emaildescription'] = 'A confirmaci�n por correo electr�nico � o m�todo de autenticaci�n predeterminado. Cando o usuario/a se inscribe, escollendo o seu propio nome de usuario e contrasinal, env�aselle unha mensaxe electr�nica de confirmaci�n ao seu enderezo de correo electr�nico. Esta mensaxe cont�n unha ligaz�n segura a unha p�xina onde o usuario/a pode confirmar a s�a conta. As futuras entradas comproban o nome de usuario e contrasinal contra os valores gardados na base de datos de Moodle.';
$string['auth_emailtitle'] = 'Autenticaci�n baseada en correo electr�nico';
$string['auth_imapdescription'] = 'Este m�todo emprega un servidor IMAP para comprobar se o nome de usuario e contrasinal son v�lidos.';
$string['auth_imaphost'] = 'O enderezo do servidor IMAP. Empregue o n�mero IP, non o nome DNS.';
$string['auth_imapport'] = 'N�mero do porto do servidor IMAP. Normalmente � o 143 ou 993.';
$string['auth_imaptitle'] = 'Usar un servidor IMAP';
$string['auth_imaptype'] = 'O tipo de servidor IMAP. Os servidores IMAP poden ter diferentes tipos de autenticaci�n e negociaci�n.';
$string['auth_ldap_bind_dn'] = 'Se quere empregar \'bind-user\' para buscar usuarios/as, especif�queo aqu�. Algo como \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Contrasinal para bind-user.';
$string['auth_ldap_contexts'] = 'Listaxe de contextos onde est�n localizados os usuarios/as. Separar contextos diferentes con \';\'. Por exemplo: \'ou=usuarios,o=org; ou=outros,o=org\'';
$string['auth_ldap_create_context'] = 'Habil�tase a creaci�n de usuario/a con confirmaci�n por medio de correo electr�nico, especifique o contexto no que se crean os usuarios/as. Este contexto debe ser diferente doutros usuarios/as para previr problemas de seguridade. Non � necesario engadir este contexto a ldap_context-variable, Moodle buscar� automaticamente os usuarios/as deste contexto.';
$string['auth_ldap_creators'] = 'Lista de grupos en que os membros est�n autorizados para crear novos cursos. Poden separarse varios grupos con \';\'. Normalmente as�: \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_host_url'] = 'Especificar o host LDAP en forma de URL como \'ldap://ldap.myorg.com/\' ou \'ldaps://ldap.myorg.com/\' ';
$string['auth_ldap_memberattribute'] = 'Especificar o atributo para nome de usuario, cando os usuarios/as se integran nun grupo. Normalmente \'membro\'';
$string['auth_ldap_search_sub'] = 'Po�a o valor <> 0u se quere buscar usuarios/as dende subcontextos.';
$string['auth_ldap_update_userinfo'] = 'Actualizar informaci�n do usuario/a (nome, apelido, enderezo...) dende LDAP a Moodle. Mire en /auth/ldap/attr_mappings.php para a informaci�n do mapa';
$string['auth_ldap_user_attribute'] = 'O atributo usado para nomear/buscar usuarios/as. Normalmente \'cn\'.';
$string['auth_ldap_version'] = 'A versi�n do protocolo LDAP que o seu servidor est� empregando.';
$string['auth_ldapdescription'] = 'Este m�todo proporciona autenticaci�n contra un servidor LDAP externo.
Se o nome de usuario e contrasinal facilitados son v�lidos, Moodle crea unha nova entrada para o usuario/a na s�a base de datos. Este m�dulo pode ler atributos de usuario dende LDAP e precubrir os campos requiridos en Moodle. Para as entradas sucesivas s� se comproba o usuario/a e a contrasinal.';
$string['auth_ldapextrafields'] = 'Estes campos son opcionais. Vostede pode elixir pre-cubrir alg�ns campos de usuario en Moodle con informaci�n dos <strong>campos LDAP</strong> que especifique aqu�. <p>Se deixa estes campos en branco, ent�n non se transferir� nada dende LDAP e usarase o sistema predeterminado en Moodle.</p><p>En ambos os dous casos, os usuarios/as poder�n editar todos estos campos despois de entrar.</p>';
$string['auth_ldaptitle'] = 'Usar un servidor LDAP';
$string['auth_manualdescription'] = 'Este m�todo elimina calquera forma de que os usuarios/as orixinen as s�as propias contas. Todas as contas deben ser creadas manualmente polo administrador.';
$string['auth_manualtitle'] = 'Crear contas s� de forma manual';
$string['auth_multiplehosts'] = '� posible especificar m�ltiples servidores (por ex. servidor1.com;servidor2.com;servidor3.com';
$string['auth_nntpdescription'] = 'Este m�todo emprega un servidor NNTP para comprobar se o nome de usuario e contrasinal facilitados son v�lidos.';
$string['auth_nntphost'] = 'O enderezo do servidor NNTP. Usar o n�mero IP, non o nome DNS.';
$string['auth_nntpport'] = 'Porto do servidor (119 � o m�is habitual)';
$string['auth_nntptitle'] = 'Usar un servidor NNTP';
$string['auth_nonedescription'] = 'Os usuarios/as poden rexistrarse e crear contas v�lidas inmediatamente, sen autenticaci�n contra un servidor externo e sen confirmaci�n v�a correo electr�nico. Te�a coidado ao empregar esta opci�n -pense nos problemas de seguridade e de administraci�n que pode ocasionar.';
$string['auth_nonetitle'] = 'Sen autenticaci�n';
$string['auth_pop3description'] = 'Este m�todo emprega un servidor POP3 para comprobar se o nome de usuario e contrasinal facilitados son v�lidos.';
$string['auth_pop3host'] = 'O enderezo do servidor POP3. Use o n�mero IP, non o nome DNS.';
$string['auth_pop3port'] = 'Porto do servidor (110 � o m�is habitual)';
$string['auth_pop3title'] = 'Usar un servidor POP3';
$string['auth_pop3type'] = 'Tipo de servidor. Se o seu servidor utiliza certificado de seguridade, escolla pop3cert.';
$string['auth_user_create'] = 'Habilitar creaci�n por parte do usuario/a';
$string['auth_user_creation'] = 'Os novos usuarios/as (an�nimos/as) poden crear contas de usuario sobre o c�digo externo de autenticaci�n e confirmar v�a correo electr�nico. Se vostede habilita isto, recorde tam�n configurar as opci�ns do m�dulo espec�fico para a creaci�n de usuario.';
$string['auth_usernameexists'] = 'O nome de usuario seleccionado xa existe. Por favor, elixa outro.';
$string['authenticationoptions'] = 'Opci�ns de autenticaci�n';
$string['authinstructions'] = 'Aqu� pode proporcionar instruci�ns aos seus usuarios/as, de forma que saiban qu� usuario e contrasinal deben empregar. O texto que incl�a aqu� aparecer� na p�xina de acceso. Se deixa isto en branco non aparecer� ningunha instruci�n.';
$string['changepassword'] = 'Cambiar contrasinal URL';
$string['changepasswordhelp'] = 'Aqu� pode especificar onde poden os seus usuarios/as recuperar ou cambiar o seu nome de usuario/contrasinal se o esqueceron. Para iso, aparecer� un bot�n na p�xina de entrada. Se deixa isto en branco, este bot�n non se amosar�.';
$string['chooseauthmethod'] = 'Escoller un m�todo de autenticaci�n: ';
$string['guestloginbutton'] = 'Bot�n de entrada para convidados/as';
$string['instructions'] = 'Instruci�ns';
$string['md5'] = 'Criptograf�a M5';
$string['plaintext'] = 'Texto plano';
$string['showguestlogin'] = 'Pode ocultar ou amosar o bot�n de entrada para convidados na p�xina de acceso.';

?>
