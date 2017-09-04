<?PHP // $Id$ 
      // auth.php - created with Moodle 1.2 Beta (2004022400)


$string['auth_dbdescription'] = 'Cette m�thode utilise une base de donn�es externe afin de v�rifier qu\'un nom d\'utilisateur et son mot de passe sont valides. Si le compte est nouveau, il est possible de copier des donn�es provenant de certains champs vers Moodle.';
$string['auth_dbextrafields'] = 'Ces champs sont optionnels. Il vous est possible de remplir certains champs de Moodle avec des donn�es provenant des <b>champs de la base de donn�es externe</b>.<p>Si vous laissez ces zones vides, les valeurs par d�faut seront utilis�es.<p>Dans tous les cas, l\'utilisateur a la possibilit� de modifier tous ces champs une fois connect�.';
$string['auth_dbfieldpass'] = 'Nom du champ contenant les mots de passe';
$string['auth_dbfielduser'] = 'Nom du champ contenant les noms des utilisateurs';
$string['auth_dbhost'] = 'L\'ordinateur contenant la base de donn�es.';
$string['auth_dbname'] = 'Nom de la base de donn�es';
$string['auth_dbpass'] = 'Mot de passe pour ce compte';
$string['auth_dbpasstype'] = 'Indiquez la m�thode avec laquelle est crypt� le champ qui contient le mot de passe. L\'algorithme MD5 est utile pour une utilisation conjointe avec d\'autres applications Web telles que PostNuke.';
$string['auth_dbtable'] = 'Nom de la table dans la base de donn�es';
$string['auth_dbtitle'] = 'Utiliser une base de donn�es externe';
$string['auth_dbtype'] = 'Type de la base de donn�es (voir la <a href=../lib/adodb/readme.htm#drivers>documentation de ADOdb</a> pour plus d\'information)';
$string['auth_dbuser'] = 'Compte avec acc�s en lecture � la base de donn�es';
$string['auth_emaildescription'] = 'La confirmation par courriel est la m�thode d\'authentification par d�faut. Lorsqu\'un utilisateur s\'enregistre en choisissant ses nom d\'utilisateur et mot de passe, un message de confirmation est envoy� � son adresse de courriel. Ce message contient un lien s�curis� vers une page Web o� il peut confirmer son inscription. Lors des connexions suivantes, le nom d\'utilisateur et son mot de passe sont v�rifi�s � partir de ces informations qui sont enregistr�es dans la base de donn�es de Moodle.';
$string['auth_emailtitle'] = 'Authentification par courriel';
$string['auth_imapdescription'] = 'Cette m�thode utilise un serveur IMAP pour v�rifier qu\'un nom d\'utilisateur et son mot de passe sont valides.';
$string['auth_imaphost'] = 'L\'adresse du serveur IMAP. Utiliser l\'adresse IP et non le nom de l\'ordinateur.';
$string['auth_imapport'] = 'Num�ro de port du serveur IMAP. Il s\'agit g�n�ralement de 143 ou 993.';
$string['auth_imaptitle'] = 'Utiliser un serveur IMAP';
$string['auth_imaptype'] = 'Le type de serveur IMAP. Les serveurs IMAP peuvent avoir diff�rentes m�thodes d\'authentification et de n�gociation.';
$string['auth_ldap_bind_dn'] = 'Si vous souhaitez utiliser une connexion authentifi�e au serveur LDAP pour chercher les utilisateurs, indiquez ici son nom de connexion. Par exemple : � cn=ldapuser, o=Organisation, c=FR �.';
$string['auth_ldap_bind_pw'] = 'Mot de passe pour cette connexion';
$string['auth_ldap_contexts'] = 'Liste des noeuds (contextes) de l\'annuaire LDAP, s�par�s par � ; �, o� les enregistrements des utilisateurs sont situ�s. Par exemple : � ou=�tudiants, o=Organisation, c=FR; ou=Professeurs, o=Organisation, c=FR �.';
$string['auth_ldap_create_context'] = 'Si vous avez activ� la cr�ation d\'utilisateur avec confirmation par courriel, vous devez sp�cifiez le contexte dans lequel ces utilisateurs seront cr��s.   Ces contextes doivent �tre diff�rents des autres utilisateurs pour �viter des failles de s�curit�. Vous n\'avez pas � ajouter ce contexte � ldap_context-variable, Moodle cherchera automatiquement les utilisateurs dans ce contexte.';
$string['auth_ldap_creators'] = 'Liste des groupes dont les membres peuvent cr�er des cours. Il faut s�parer les groupes par �,�. Par exemple, �cn=professeurs,ou=personnel,o=college�.';
$string['auth_ldap_host_url'] = 'Indiquer le serveur LDAP sous form d\'URL comme ceci :<br>� ldap://ldap.organisation.fr/ �<br>ou :<br>� ldaps://ldap.organisation.fr/ �';
$string['auth_ldap_memberattribute'] = 'Caract�riser les membres du groupe lorsque les utilisateurs font parti d\'un groupe. Par exemple : �membre�.';
$string['auth_ldap_search_sub'] = 'Mettre une valeur diff�rente de 0 pour rechercher les enregistrements dans les sous-noeuds (sous-contextes).';
$string['auth_ldap_update_userinfo'] = 'Mettre-�-jour les donn�es des utilisateurs (pr�nom, nom, addresse, etc.) de Moodle depuis l\'annuaire LDAP. Lire � /auth/ldap/attr_mappings.php � pour avoir des informations sur la correspondance.';
$string['auth_ldap_user_attribute'] = 'L\'attribut utilis� pour nommer et rechercher les utilisateurs. Habituellement � cn �.';
$string['auth_ldapdescription'] = 'Cette m�thode permet l\'authentification aupr�s d\'un annuaire LDAP externe. Si les nom d\'utilisateur et mot de passe sont corrects, Moodle cr�era un nouvel enregistrement pour cet utilisateur dans sa base de donn�es. Ce module peut r�cup�rer les attributs de l\'enregistrement LDAP de l\'utilisateur afin de remplir certains champs dans Moodle. Lors des connexions suivantes, seuls les nom d\'utilisateur et mot de passe sont v�rifi�s.';
$string['auth_ldapextrafields'] = 'Ces champs sont optionnels. Il vous est possible de remplir certains champs de Moodle avec des donn�es provenant des <b>attributs de l\'annuaire LDAP</b>.<p>Si vous laissez ces champs vides, aucune donn�e ne sera r�cup�r�e de l\'annuaire LDAP et les valeurs par d�faut de Moodle seront utilis�es. <p>Dans tous les cas, l\'utilisateur a la possibilit� de modifier tous ces champs une fois connect�.';
$string['auth_ldaptitle'] = 'Utiliser un serveur LDAP';
$string['auth_manualdescription'] = 'Cette m�thode emp�che les utilisateurs de cr�er leur propre compte. Tous les comptes devront �tre cr��s manuellement par l\'administeur du serveur.';
$string['auth_manualtitle'] = 'Comptes cr��s manuellement seulement';
$string['auth_multiplehosts'] = 'Vous pouvez indiquer ici plusieurs h�tes SMTP (par exemple host1.com;host2.com;host3.com)';
$string['auth_nntpdescription'] = 'Cette m�thode utilise un serveur NNTP pour v�rifier qu\'un nom d\'utilisateur et son mot de passe sont valides.';
$string['auth_nntphost'] = 'L\'adresse du serveur NNTP. Utiliser l\'adresse IP et non le nom de la machine.';
$string['auth_nntpport'] = 'Num�ro de port du serveur NNTP. Il s\'agit g�n�ralement de 119.';
$string['auth_nntptitle'] = 'Utiliser un serveur NNTP';
$string['auth_nonedescription'] = 'Les utilisateurs peuvent s\'enregistrer et cr�er des comptes valides imm�diatement sans aucune validation externe ni confirmation par courriel. Attention lors de l\'utilisation de cette m�thode : r�fl�chissez � toutes les implications sur la s�curit� et la gestion des utilisateurs.';
$string['auth_nonetitle'] = 'Pas d\'authentification';
$string['auth_pop3description'] = 'Cette m�thode utilise un serveur POP3 pour v�rifier qu\'un nom d\'utilisateur et son mot de passe sont valides.';
$string['auth_pop3host'] = 'L\'adresse du serveur POP3. Utiliser l\'adresse IP et non le nom de la machine.';
$string['auth_pop3port'] = 'Num�ro de port du serveur NNTP. Il s\'agit g�n�ralement de 110.';
$string['auth_pop3title'] = 'Utiliser un serveur POP3';
$string['auth_pop3type'] = 'Type de serveur. Si le serveur POP3 utilise � certificate security �, choisir � pop3cert �.';
$string['auth_user_create'] = 'Permettre la cr�ation d\'utilisateur';
$string['auth_user_creation'] = 'Les nouveux utilisateurs (anonymes) peuvent cr�er un compte avec l\'authentification de source ext�rieure et confirmation par courriel. N\'oubliez pas de configurer �galement les options des autres modules qui traitent de la cr�ation de comptes.';
$string['auth_usernameexists'] = 'D�sol�, ce nom existe d�j�! Veuillez en choisir un autre.';
$string['authenticationoptions'] = 'Options d\'authentification';
$string['authinstructions'] = 'Dans cette zone il vous est possible de fournir des instructions � vos utilisateurs afin qu\'ils sachent quels nom d\'utilisateur et mot de passe utiliser. Ce texte appara�tra sur la page de connexion. Si vous laissez cette zone vide, aucune instruction ne sera affich�e.';
$string['changepassword'] = 'URL changer de mot de passe';
$string['changepasswordhelp'] = 'Vous pouvez indiquer dans cette zone l\'URL d\'une page sur laquelle vos utilisateurs pourront r�cup�rer ou changer leurs nom d\'utilisateur et mot de passe s\'ils les ont oubli�s. Cette URL sera disponible sous forme d\'un bouton sur la page de connexion. Si cette zone est vide, ce bouton ne sera pas affich�.';
$string['chooseauthmethod'] = 'Choisir une m�thode d\'authentification';
$string['guestloginbutton'] = 'Bouton pour visiteur anonyme';
$string['instructions'] = 'Instructions';
$string['md5'] = 'Cryptage MD5';
$string['plaintext'] = 'Texte en clair';
$string['showguestlogin'] = 'Vous pouvez choisir de montrer ou non le bouton de connexion en tant que visiteur anonyme sur la page de connexion.';

?>
