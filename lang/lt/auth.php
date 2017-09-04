<?PHP // $Id$ 
      // auth.php - created with Moodle 1.1.1 (2003091111)


$string['auth_dbdescription'] = "�is b�du naudojama i�orin� duomen� baz�s lentel� patikrinti ar duoti vartotojo vardas ir slapta�odis yra teisingi. Jei tai naujas vartotojas, tai informacija i� kit� lauk� irgi b�ti nukopijuota tiesiai � Moodle.";
$string['auth_dbextrafields'] = "�ie laukai n�ra privalomi. J�s galite pasirinkti, kad kai kurie Moodle vartotojo laukai b�t� u�pildyti informacija i� i�orin�s duomen� baz�s lauk�, kurios �ia nurodysite. Jei paliksite tu��ius laukus, tada bus pasirinkta informacija pagal nutyl�jim�. Kitu atveju vartotojas savo informacij� papildyti kai prisijunks v�liau.";
$string['auth_dbfieldpass'] = "Lauko vardas, kuriame yra slapta�odis";
$string['auth_dbfielduser'] = "Lauko vardas, kuriame yra vartotojo vardas";
$string['auth_dbhost'] = "Kompiuterio adresas, kuris laiko duomen� baz�.";
$string['auth_dbname'] = "Duomen� baz�s vardas";
$string['auth_dbpass'] = "Password matching the above username";
$string['auth_dbpasstype'] = "Nurodykite kokio formato slapta�odis yra slapta�od�io lauke. MD5 kodavimas yra naudingas jungentis prie kit� interneto program� (toki� kaip PostNuke)";
$string['auth_dbtable'] = "Lentel�s pavadinimas duomen� baz�je";
$string['auth_dbtitle'] = "Naudoti i�orin� duomen� baz�";
$string['auth_dbtype'] = "Duomen� baz�s tipas (�i�r�k smulkiau<A HREF=../lib/adodb/readme.htm#drivers>ADOdb dokumentacija</A>)";
$string['auth_dbuser'] = "Vartotojo vardas su skaitymo teise duomen� bazei";
$string['auth_emaildescription'] = "El. pa�tu patvirtinama autenti�kumas yra �prastas b�das. Kai vartotojas u�siregistruoja, pasirinkdamas vartotojo vard� ir slapta�od�, patvirtinimo lai�kas nusiun�iamas vartotojo el. pa�to adresu. Lai�ke b�na saugi nuoroda � puslap�, kuriame vartotojas gali patvirtinti savo u�siregistravim�. Kiti prisijungimai reikalauja tik vartotojo vardo ir jo slapta�od�io, kurie yra saugomi Moodle duomen� baz�je.";
$string['auth_emailtitle'] = "El. pa�tu pagr�sta autentifikacija";
$string['auth_imapdescription'] = "�iuo b�du duoti vartotojo vardas ir slapta�odis yra tikrinami IMAP serveryje ir nustatoma ar jie teisingi.";
$string['auth_imaphost'] = "IMAP serverio adresas. Naudokite IP adresa, o ne DNS vard�.";
$string['auth_imapport'] = "IMAP servario port'as. Da�niausiai tai yra 143 arba 993.";
$string['auth_imaptitle'] = "Naudoti IMAP server�";
$string['auth_imaptype'] = "IMAP serverio tipas. IMAP serveriai gali tur�ti skirtingus autentikavimo b�dus.";
$string['auth_ldap_bind_dn'] = "If you want to use bind-user to search users, specify it here. Someting like 'cn=ldapuser,ou=public,o=org'";
$string['auth_ldap_bind_pw'] = "Password for bind-user.";
$string['auth_ldap_contexts'] = "S�ra�as, i� kurios vietos kil� vartotojai. Atskirkite skirtingus s�ra�us su kableta�kiu ';'. Pvz.: 'ou=user,o=org; ou=other,o=org'";
$string['auth_ldap_create_context'] = "Jei pasirinkote vartotoj� k�rim� su el. pa�to patvirtinimu, nurodykite s�ra��, kur vartotojas yra sukurtas. Jis tur�t� b�ti kitoks nei kit� vartotoj�, saugumo sumetimais. Neb�tina nurodyti s�ra�o ldap_context kintamajam, Moodle automati�kai tai padarys u� jus.";
$string['auth_ldap_creators'] = "Grupi� s�ra�as kuri� nariai gali kurti naujus kursus.";
$string['auth_ldap_host_url'] = "Nurodykite LDAP adres� URL forma.";
$string['auth_ldap_memberattribute'] = "Nurodykite vartotojo nario atribut�, kai jis priklauso grupei.";
$string['auth_ldap_search_sub'] = "Put value &lt;&gt; 0 if  you like to search users from subcontexts.";
$string['auth_ldap_update_userinfo'] = "Atnaujinti vartotojo informacij� (vardas, pavard�, adresas..) i� LDAP � Moodle.";
$string['auth_ldap_user_attribute'] = "Atributas naudojamas rasti vartotojui. Da�niausiai 'cn'.";
$string['auth_ldapdescription'] = "�is b�das leid�ia atlikti autentifikacij� naudojant i�orin� LDAP server�. Jei duotas vartotojo vardas ir slapta�odis yra teisingi, Moodle sukurs nauj� vartotoj� savo duomen� baz�je. �is modulis gali skaityti vartotojo atributus i� LDAP ir pildyti norimus Moodle laukus. Kitiems prisijungimams tik vartotojo vardas ir slapta�odis yra tikrinami.";
$string['auth_ldapextrafields'] = "�ie laukai yra neb�tini. J�s galite pasirinkti, kad Moodle pati u�pildyt� juos informacija i� <B>LDAP lauk�</B>, kuriuos �ia nurodysite. <P>Jei laukus paliksite tu��ius, tai jokia informacija nebus atsi�sta i� LDAP ir Moodle pati u�pildys �prastin�mis vert�mis. <P>Abiem atvejais, vartotojai gal�s keisti pateikt� informacij�, kai tik prisijunks.";
$string['auth_ldaptitle'] = "Naudoti LDAP server�";
$string['auth_manualdescription'] = "�is b�das neleid�ia jokiems vartotojamas registruotis. Visi registravimai turi b�ti atlikti administratoriaus.";
$string['auth_manualtitle'] = "Tiktai rankinis vartotoj� registravimas";
$string['auth_nntpdescription'] = "�is b�das naudoja NNTP server� patikrinti ar vartotojo vardas ir slapta�odis teisingi.";
$string['auth_nntphost'] = "NNTP serverio adresas. Naudokite IP adresa, o ne DNS vard�.";
$string['auth_nntpport'] = "NNTP servario port'as. Da�niausiai tai yra 119.";
$string['auth_nntptitle'] = "Naudoti NNTP server�";
$string['auth_nonedescription'] = "Vartotojai gali registruotis ir kurti vartotoj� vardus, nenaudojaunt jokios autentikavimo sistemos. Bukite atsarg�s - pagalvokite apie saugum�.";
$string['auth_nonetitle'] = "Neautentikuojamas";
$string['auth_pop3description'] = "�is b�das naudoja POP3 server� patikrinti ar vartotojo vardas ir slapta�odis teisingi.";
$string['auth_pop3host'] = "POP3 serverio adresas. Naudokite IP adresa, o ne DNS vard�.";
$string['auth_pop3port'] = "POP3 servario port'as. Da�niausiai tai yra 110.";
$string['auth_pop3title'] = "Naudoti POP3 server�";
$string['auth_pop3type'] = "Serverio tipas. Jei j�s� serveris naudoja sertifikavimo saugumo sistem�, pasirinkite pop3cert.";
$string['auth_user_create'] = "Aktyvuoti vartotoj� k�rim�";
$string['auth_user_creation'] = "Nauji (anoniminiai) vartotojai gali k�rti vartotoj� vardus su i�oriniu autentifikavimo �alitiniu ir el. pa�to patvirtinimu. Jei aktyvuosite, nepamir�kite konfiguruoti modul� 'specifin�s nuostatos vartotoj� k�rimui'.";
$string['auth_usernameexists'] = "Pasirinktas vartotojo vardas jau u�registruotas. Pasirinkite kit�.";
$string['authenticationoptions'] = "Autentifikavimo nuostatos";
$string['authinstructions'] = "�ia galite ra�yti nurodymus savo vartotojams, kad jie �inot� kok� vartotoj� ir kok� slapta�od� jiems naudoti. �is tekstas matysis prisijungimo lange. Jei nieko nera�ysite, nurodymai nebus spaustdinami.";
$string['changepassword'] = "Pakeisti slapta�od�io URL";
$string['changepasswordhelp'] = "�ia galite nurodyti viet�, kur vartotojai gal�t� atstatyti ar pakeisti vartotojo vard� ir slapta�od�, jei juos pamir�o.";
$string['chooseauthmethod'] = "Pasirinkite autentifikavimo b�d�:";
$string['guestloginbutton'] = "Sve�io prisijungimo mygtukas";
$string['instructions'] = "Nurodymai";
$string['md5'] = "MD5 kodavimas";
$string['plaintext'] = "Paprastas tekstas";
$string['showguestlogin'] = "J�s galite pasl�pti ir rodyti sve�io prisijungimo mygtuka prisijungimo puslapyje.";

?>
