<?PHP // $Id$ 
      // auth.php - created with Moodle 1.0.8.1 (2003011200)


$string['auth_dbdescription'] = "�q�~�ɸ�Ʈw�ˬd �b���W�ٻP�K�X�O�_�۲�.  �Y�O�@�ӷs�b����Ʈw����L��Ƥ]�|�Q�����쥻�t��.";
$string['auth_dbextrafields'] = "�����.  �A�i�H��ܱN�ϥΪ̱b��������Ʊq<B>�~�ɸ�Ʈw</B> ���^���񬰹w�]��. <P>�Y�O����, �N�H���t�ιw�]�Ȭ���.<P>�L�צp��ϥΪ̬ҥi�H�n�J��ק�.";
$string['auth_dbfieldpass'] = "�]�t�K�X�����W��";
$string['auth_dbfielduser'] = "�]�t�b���W�٪����W��";
$string['auth_dbhost'] = "��Ʈw�Ҧb�q��.";
$string['auth_dbname'] = "��Ʈw�W��";
$string['auth_dbpass'] = "�K�X�P�b���W�٬۲ŦX";
$string['auth_dbpasstype'] = "Specify the format that the password field is using. MD5 encryption is useful for connecting to other common web applications like PostNuke";
$string['auth_dbtable'] = "��Ʈw����ƪ�W��";
$string['auth_dbtitle'] = "�ϥΥ~�ɸ�Ʈw";
$string['auth_dbtype'] = "��Ʈw�榡 (�i�@�B�����аѨ�<A HREF=../lib/adodb/readme.htm#drivers>ADOdb �������</A>)";
$string['auth_dbuser'] = "�iŪ����Ʈw���ϥΪ̦W��";
$string['auth_emaildescription'] = "�H�q�l�l��T�{�b���O�t�ιw�]�{�Ҥ覡.  ��ϥΪ̥ӽбb����, ��ܱb���W�ٻP�K�X, �t�αN�H�q�l�l��e�X�T�{�T��. �ӽЪ̶��\Ū�q�l�l�����U���e���T�{�s����Ұʱb���ϥ��v. �H�W�ʧ@�u�n�@���Y�i,����i�n�b���W�ٻP�K�X�۲ūK�i�n�J.";
$string['auth_emailtitle'] = "�q�l�l��T�{";
$string['auth_imapdescription'] = "���覡�ϥ� IMAP ���A�� �ˬd�b���W�ٻP�K�X�O�_�۲�.";
$string['auth_imaphost'] = "IMAP ���A�����}. �Шϥ� IP ���X, �Ӥ��O�W�ٸ��.";
$string['auth_imapport'] = "IMAP ���A�����s����. �q�`�O 143 �� 993.";
$string['auth_imaptitle'] = "�ϥ�IMAP ���A��";
$string['auth_imaptype'] = "IMAP ���A�����A.  �����P�{�Ҥ覡.";
$string['auth_ldap_bind_dn'] = "If you want to use bind-user to search users, specify it here. Someting like 'cn=ldapuser,ou=public,o=org'";
$string['auth_ldap_bind_pw'] = "Password for bind-user.";
$string['auth_ldap_contexts'] = "List of contexts where users are located. Separate different contexts with ';'. For example: 'ou=users,o=org; ou=others,o=org'";
$string['auth_ldap_host_url'] = "Specify LDAP host in URL-form like 'ldap://ldap.myorg.com/' or 'ldaps://ldap.myorg.com/' ";
$string['auth_ldap_search_sub'] = "Put value &lt;&gt; 0 if  you like to search users from subcontexts.";
$string['auth_ldap_update_userinfo'] = "Update user information (firstname, lastname, address..) from LDAP to Moodle. Look at /auth/ldap/attr_mappings.php for mapping information";
$string['auth_ldap_user_attribute'] = "The attribute used to name/search users. Usually 'cn'.";
$string['auth_ldapdescription'] = "This method provides authentication against an external LDAP server.
                                  If the given username and password are valid, Moodle creates a new user 
                                  entry in its database. This module can read user attributes from LDAP and prefill 
                                  wanted fields in Moodle.  For following logins only the username and 
                                  password are checked.";
$string['auth_ldapextrafields'] = "These fields are optional.  You can choose to pre-fill some Moodle user fields with information from the <B>LDAP fields</B> that you specify here. <P>If you leave these fields blank, then nothing will be transferred from LDAP and Moodle defaults will be used instead.<P>In either case, the user will be able to edit all of these fields after they log in.";
$string['auth_ldaptitle'] = "Use an LDAP server";
$string['auth_nntpdescription'] = "This method uses an NNTP server to check whether a given username and password is valid.";
$string['auth_nntphost'] = "The NNTP server address. Use the IP number, not DNS name.";
$string['auth_nntpport'] = "Server port (119 is the most common)";
$string['auth_nntptitle'] = "Use an NNTP server";
$string['auth_nonedescription'] = "Users can sign in and create valid accounts immediately, with no authentication against an external server and no confirmation via email.  Be careful using this option - think of the security and administration problems this could cause.";
$string['auth_nonetitle'] = "No authentication";
$string['auth_pop3description'] = "This method uses a POP3 server to check whether a given username and password is valid.";
$string['auth_pop3host'] = "POP3 ���A�����}. ��JIP �Ӥ��O�W��.";
$string['auth_pop3port'] = "Server port (110 is the most common)";
$string['auth_pop3title'] = "�ϥ� POP3 ���A��";
$string['auth_pop3type'] = "Server type. If your server uses certificate security, choose pop3cert.";
$string['authenticationoptions'] = "Authentication options";
$string['authinstructions'] = "Here you can provide instructions for your users, so they know which username and password they should be using.  The text you enter here will appear on the login page.  If you leave this blank then no instructions will be printed.";
$string['changepassword'] = "���K�X�����}";
$string['changepasswordhelp'] = "�п�J��ϥΪ̧ѰO�K�X�ɥi�H�]�w�s�K�X�����}. �����}�N���ѩ�n�J�e����, �Y�O�å����Ѻ��}�h���|�X�{�����s.";
$string['chooseauthmethod'] = "��ܵn�J�{�Ҥ覡Choose an authentication method: ";
$string['guestloginbutton'] = "�X�� �n�J���s";
$string['instructions'] = "����";
$string['md5'] = "MD5 encryption";
$string['plaintext'] = "�¤�r���e";
$string['showguestlogin'] = "�A�i�H��ܵn�J�������O�_��ܳX�ȵn�J���s.";

?>
