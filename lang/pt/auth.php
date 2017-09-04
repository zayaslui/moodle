<?PHP // $Id$ 
      // auth.php - created with Moodle 1.3 development (2004042600)


$string['auth_dbdescription'] = 'Este m�todo usa uma tabela numa base de dados externa para verificar se um nome de utilizador e palavra chave s�o v�lidos. Se for uma conta nova, a informa��o de outros campos pode ser tamb�m transferida para Moodle.';
$string['auth_dbextrafields'] = '<p>Estes campos s�o optativos. Pode optar por preencher previamente alguns dos campos do utilizador em Moodle com informa��o dos campos da <b>base de dados externa</b> que especificar aqui.</p><p>Se deixar estes campos em branco, nada ser� transferido de LDAP e os valores por omiss�o do Moodle ser�o usados.</p><p>De qualquer forma o utilizador poder� editar todos estes campos mais tarde depois de entrar no servidor.';
$string['auth_dbfieldpass'] = 'Nome do campo que contem as palavras chave';
$string['auth_dbfielduser'] = 'Nome do campo que contem os nomes de utilizadores';
$string['auth_dbhost'] = 'Endere�o IP do computador que hospeda a base de dados de utilizadores.';
$string['auth_dbname'] = 'Nome da pr�pria base de dados';
$string['auth_dbpass'] = 'Palavra chave para o utilizador acima';
$string['auth_dbpasstype'] = 'Indique o modo que se est� a usar no campo de palavra chave. A criptografia MD5 � �til para trabalhar com outras aplica��es como PostNuke';
$string['auth_dbtable'] = 'Nome da tabela na base de dados';
$string['auth_dbtitle'] = 'Use uma base de dados externa';
$string['auth_dbtype'] = 'O tipo de base de dados (veja <a href=\'../lib/adodb/readme.htm#drivers\'>Documenta��o do ADOdb</a> para mais pormenores)';
$string['auth_dbuser'] = 'Nome de utilizador para aceder � base de dados';
$string['auth_emaildescription'] = 'Confirma��o via correio electr�nico � o m�todo de autentica��o padr�o. Quando o utilizador se inscrever, ap�s ter escolhido o nome de utilizador e palavra chave, ser�-lhe enviada uma mensagem de confirma��o para o seu endere�o de correio electr�nico. Essa mensagem contem um apontador seguro para uma p�gina onde o utilizador pode confirmar a sua conta. Quando o utilizador entrar no futuro o seu nome de utilizador e palavra chave ser�o conferidos na base de dados do Moodle.';
$string['auth_emailtitle'] = 'Autentica��o baseada no correio electr�nico';
$string['auth_imapdescription'] = 'Este m�todo usa um servidor de IMAP para verificar se um nome de utilizador e palavra chave s�o v�lidos.';
$string['auth_imaphost'] = 'Endere�o do servidor de IMAP. Use o N�MERO IP e n�o o nome no DNS.';
$string['auth_imapport'] = 'N�mero da porta do servidor IMAP. Geralmente esta � 143 ou 993.';
$string['auth_imaptitle'] = 'Use um servidor IMAP';
$string['auth_imaptype'] = 'Tipo de servidor IMAP. Os servidores IMAP podem usar diferentes m�todos de autentica��o e negocia��o.';
$string['auth_ldap_bind_dn'] = 'Se quiser usar o bind-user para procurar utilizadores, especifique-o aqui. Algo como \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Palavra chave para o bind-user.';
$string['auth_ldap_contexts'] = 'Lista dos contextos onde os utilizadores s�o encontrados. Contextos diferentes separados com \';\'. Por exemplo: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Se permitir a cria��o de utilizadores com confirma��o por email, especifique o contexto em que os utilizadores s�o criados. Este contexto dever� ser diferente do de outros utilizadores por medidas de seguran�a. N�o � necess�rio adicionar este contexto � vari�vel ldap_context, pois o Moodle ir�, autom�ticamente, procurar utilizadores associados a este contexto.';
$string['auth_ldap_creators'] = 'Lista de grupos cujos membros t�m permiss�es para criar novos cursos. Separe v�rios grupos com \';\'. Geralmente como \'cn=teacher,ou=staff,o=myorg\'';
$string['auth_ldap_host_url'] = 'Especifique o servidor de LDAP na forma de uma
URL completa, como \'ldap://ldap.myorg.com/\' ou \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_memberattribute'] = 'Especifica o atributo de utilizador membro, quando os utilizadores pertencem a um grupo. Geralmente \'member\'';
$string['auth_ldap_search_sub'] = 'Escreva &lt;&gt; 0; se quiser procurar utilizadores nos sub-contextos.';
$string['auth_ldap_update_userinfo'] = 'Actualizar informa��o de utilizador (nome, apelido, endere�o...) de LDAP para Moodle. Para informa��o sobre a correspond�ncia, consulte /auth/ldap/attr_mappings.php';
$string['auth_ldap_user_attribute'] = 'O atributo usado para nomear/procurar utilizadores. Geralmente \'cn\'.';
$string['auth_ldap_version'] = 'A vers�o do protocolo LDAP que o seu servidor estiver a usar.';
$string['auth_ldapdescription'] = 'Este m�todo fornece autentica��o usando um servidor de LDAP. Se o nome de utilizador e palavra chave forem v�lidos, Moodle cria um novo registo de utilizador na sua base de dados. Este m�dulo pode ler atributos do utilizador em LDAP e preencher os valores pedidos em Moodle. As seguintes vezes que o utilizador entrar, s� ser�o verificados o nome de utilizador e palavra chave.';
$string['auth_ldapextrafields'] = '<p>Estes campos s�o optativos. Pode optar por obter a informa��o para alguns campos em Moodle a partir de informa��o dos <b>campos LDAP</b> que especificar aqui.</p><p>Se deixar estes campos em branco, nada ser� transferido de LDAP e os valores por omiss�o do Moodle ser�o usados.</p><p>De qualquer forma o utilizador poder� editar todos estes campos mais tarde depois de entrar no servidor.';
$string['auth_ldaptitle'] = 'Use um servidor LDAP';
$string['auth_manualdescription'] = 'Este m�todo elimina qualquer hip�tese de os utilizadores poderem criar as suas pr�prias contas. Todas as contas ter�o que ser manualmente criadas pelo administrador.';
$string['auth_manualtitle'] = 'Apenas contas manuais';
$string['auth_multiplehosts'] = 'Podem ser especificados v�rios servidores (p.e. host1.com;host2.com;host3.com)';
$string['auth_nntpdescription'] = 'Este m�todo usa um servidor NNTP para verificar se um nome de utilizador e palavra chave s�o v�lidos.';
$string['auth_nntphost'] = 'Endere�o do servidor NNTP. Use o N�MERO IP e n�o o nome no DNS.';
$string['auth_nntpport'] = 'Porta do servidor NNTP (normalmente 119)';
$string['auth_nntptitle'] = 'Use um servidor NNTP';
$string['auth_nonedescription'] = 'Os utilizadores podem registrar-se e criar contas v�lidas imediatamente, sem autentica��o em nenhum servidor externo e sem nenhuma confirma��o por correio. Tenha cuidado se usar esta op��o - pense nos problemas de seguran�a e administra��o que isto poderia causar.';
$string['auth_nonetitle'] = 'Nenhuma autentica��o';
$string['auth_pop3description'] = 'Este m�todo usa um servidor POP3 para verificar se um nome de utilizador e palavra chave s�o v�lidos.';
$string['auth_pop3host'] = 'Endere�o do servidor POP3. Use o N�MERO IP e n�o o nome no DNS.';
$string['auth_pop3port'] = 'Porta do servidor POP3 (normalmente 110)';
$string['auth_pop3title'] = 'Use um servidor POP3';
$string['auth_pop3type'] = 'Tipo de servidor. Se o seu servidor usar certificados de seguran�a, escolha pop3cert.';
$string['auth_user_create'] = 'Permitir a cria��o de utilizadores';
$string['auth_user_creation'] = 'Novos (anonimos) utilizadores podem criar contas de autentica��o externa confirmadas por email. Se activar esta op��o, lembre-se de configurar as op��es no m�dulo espec�fico para cria��o de utilizadores.';
$string['auth_usernameexists'] = 'O nome escolhido j� existe. Escolha outro.';
$string['authenticationoptions'] = 'Op��es de autentica��o';
$string['authinstructions'] = 'Aqui pode incluir instru��es para os seus utilizadores, para que saibam que tipo de nome de utilizador e palavra chave dever�o usar. O texto que escreva aqui aparecer� na p�gina de entrada. Se deixar este campo em branco, n�o ser� dadas nenhumas instru��es.';
$string['changepassword'] = 'Mude o endere�o da palavra chave';
$string['changepasswordhelp'] = 'Aqui pode especificar um local onde os utilizadores podem recuperar ou alterar a sua palavra chave e nome de usu�rio caso se esque�am dela. Isto ser� fornecido aos utilizadores como um bot�o na p�gina de entrada a servidor e na sua p�gina de utilizador. Se deixar este espa�o em branco o bot�o n�o aparecer�.';
$string['chooseauthmethod'] = 'Escolha um m�todo de autentica��o: ';
$string['guestloginbutton'] = 'Bot�o de entrada como visitante';
$string['instructions'] = 'Instru��es';
$string['md5'] = 'Criptografia MD5';
$string['plaintext'] = 'Texto simples';
$string['showguestlogin'] = 'Pode optar por esconder ou mostrar o bot�o de entrada para visitantes na p�gina de entrada.';

?>
