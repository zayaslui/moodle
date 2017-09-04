<?PHP // $Id$ 
      // auth.php - created with Moodle 1.2 (2004032000)


$string['auth_dbdescription'] = 'See meetod kasutab v�lise andmebaasi tabelit, et kontrollida, kas antud kasutajanimi ja salas�na kehtivad. Kui tegemist on uue kontoga, siis v�ib Moodle\'isse kopeerida infot ka mujalt.';
$string['auth_dbextrafields'] = 'Need v�ljad on valikulised. Otsustage, kas soovite eelt�ita m�ned Moodle\'i v�ljad infoga <B>v�lisandmebaasidest v�ljadelt</B> mida t�psustate siin. <P>Kui j�tate need t�hjaks, kasutatatkse vaikeseadeid.<P>M�lemal juhul on kasutajal v�imalus redigeerida k�iki v�lju, kui ta on sisse loginud.';
$string['auth_dbfieldpass'] = 'Salas�na sisaldava v�lja nimi';
$string['auth_dbfielduser'] = 'Kasutajanime sisaldava v�lja nimi';
$string['auth_dbhost'] = 'Andmebaasi serveri arvuti.';
$string['auth_dbname'] = 'Andmebaasi enese nimi';
$string['auth_dbpass'] = 'Antud kasutajanimega sobiv salas�na.';
$string['auth_dbpasstype'] = 'T�psusta formaati, mida salas�na v�li kasutab.  MD5 kr�pteerimine on kasulik, et �hendada teiste tavaliste veebirakendustega nagu PostNuke';
$string['auth_dbtable'] = 'Tabeli nimi andmebaasis';
$string['auth_dbtitle'] = 'V�lise andmebaasi kasutamine';
$string['auth_dbtype'] = 'Andmebaasi t��p(Vaata <A HREF=../lib/adodb/readme.htm#drivers>ADOdb dokumentatsiooni</A> et detaile t�psustada)';
$string['auth_dbuser'] = 'Kasutajanimi andmebaasile lugemiseks juurdep��su tarvis ';
$string['auth_emaildescription'] = 'Emaili kinnitus on vaikimisi autentsuse kontrolli meetod. Kui kasutaja registreerub, valides omale uue kasutajanime ja salas�na, saadetakse tema emaili aadressile kinnituskiri. See email sisaldab turvalist linki lehele, kus kasutaja saab oma konto kinnitada. Edasipidised logimised �knnes kontrollivad kasutajanime ja salas�na, v�rreldes neid Moodle\'I andmebaasis s�ilitatavatega.';
$string['auth_emailtitle'] = 'Emailil p�hinev autentsuse kontroll';
$string['auth_imapdescription'] = 'See meetod kasutab IMAP serverit kontrollimaks, kas antud kasutajanimi ja salas�na kehtivad..';
$string['auth_imaphost'] = 'IMAP serveri aadress. Kasuta IP numbrit, mitte DNS nime.';
$string['auth_imapport'] = 'IMAP serveri pordi number. Tavaliselt on see 143 v�i  993.';
$string['auth_imaptitle'] = 'Kasuta IMAP serverit';
$string['auth_imaptype'] = 'IMAP serveri t��p.  IMAP serveritel v�ib olla erinevat t��pi autentsuse kontrolli ja loovutamist.';
$string['auth_ldap_bind_dn'] = 'Kui soovid kasutada bind-user kasutajate otsimiseks,t�psusta see siin. N�iteks \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Salas�na bind-user tarvis.';
$string['auth_ldap_contexts'] = 'Kontekstide loend, kus kasutajad paiknevad. Eralda erinevad kontekstid nii \';\'. N�iteks: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Kui v�imaldad kasutajate tekitamist emaili konfiguratsioonis, t�psusta kontekst, milles kasutajaid tekitatakse.See kontekst peaks erinema teiste kasutajate omast,et ei tekiks turvaprobleeme.seda konteksti pole vaja lisada ldap_context-muutujale, Moodle otsib automaatselt sellest kontekstist kasutajaid.';
$string['auth_ldap_creators'] = 'Gruppide loend, kelle liikmetel on luba tekitada uusi kursusi. Eralda multi-grupid nii \';\'. Enamasti midagi sellist \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_host_url'] = 'T�psusta LDAP host URL-formaadis nagu \'ldap://ldap.myorg.com/\' v�i \'ldaps://ldap.myorg.com/\' ';
$string['auth_ldap_memberattribute'] = 'T�psusta kasutaja liikme atribuut, kui kasutajad kuuluvad gruppi. Enamasti \'member\'';
$string['auth_ldap_search_sub'] = 'M��ra v��rtus &lt;&gt; 0 kui soovid kasutajaid alakontekstidest otsida.';
$string['auth_ldap_update_userinfo'] = 'V�rskenda kasutajanifot (eesnimi, perekonnanimi, aadress,..) alates LDAP-ist kuni Moodle\'ni. Vaata /auth/ldap/attr_mappings.php kaardistamisinfo saamiseks';
$string['auth_ldap_user_attribute'] = 'Atribuut kasutajate nimetamiseks / otsimiseks. Enamasti \'cn\'.';
$string['auth_ldapdescription'] = 'See meetod tagab autentsuse kontrolli v�rreldes v�lise LDAP serveriga.
Kui antud kasutajanimi ja salas�na kehtivad, tekitab Moodle uue kasutajakande oma andmebaasi.See moodul oskab lugeda kasutaja atribuute LDAP-ist ja eelt�ita soovitud v�ljad Moodle\'is.  Logied j�lgimiseks kontrollitakse �ksnes kasutajanime ja salas�na.';
$string['auth_ldapextrafields'] = 'Need v�ljad pole kohustuslikud. V�id otsustada eelt�ita m�ned Moodle\'I kasutajav�ljad infoga <B>LDAP v�ljadelt</B> mille t�psustad siin. <P> Kui j�tad need v�ljad t�hjaks, ei kanta LDAP\'ist midagi �le ja selle asemel kasutatakse Moodle\'I vaikeseadeid. <P> M�lemil puhul tohib kasutaja redigeerida k�iki neid v�lju, kui ta on sisse loginud.';
$string['auth_ldaptitle'] = 'Kasuta LDAP serverit';
$string['auth_manualdescription'] = 'See meetod v�tab kasutajatelt igasuguse v�imaluse endale kontosid tekitada. K�ik kontod tuleb tekitada k�sitsi admin. kasutaja poolt.';
$string['auth_manualtitle'] = 'Kontod ainult k�sitsi';
$string['auth_multiplehosts'] = 'Mitu hosti saad kirjeldada lihtsalt (n�iteks host1.ee;host2.ee;host3.ee)';
$string['auth_nntpdescription'] = 'See meetod kasutab NNTP serverit, et kontrollida, kas antud kasutajanimi ja salas�na kehtivad.';
$string['auth_nntphost'] = 'NNTP serveri aadress. Kasuta IP numbrit, mitte DNS nime.';
$string['auth_nntpport'] = 'Serveri port (119 on k�ige tavalisem)';
$string['auth_nntptitle'] = 'Kasuta NNTP serverit';
$string['auth_nonedescription'] = 'Kasutaja v�ib end sisse kirjutada ja tekitada kehiva konto otsekohe, ilma autentsuse kontrollita v�lisserveri suhtes ja ilma emaili teel kinnitamata. Selle v�imaluse kasutamisel ole ettevaatlik - m�tle turvalisusele ja haldamisprobleemidele, mida see v�ib tekitada.';
$string['auth_nonetitle'] = 'Ilma autentsuse kontrollita';
$string['auth_pop3description'] = 'See meetod kasutab POP3 serverit kontrollimaks, kas antud kasutajanimi ja salas�na kehtivad.';
$string['auth_pop3host'] = 'POP3 serveri aadress. Kasuta IP numbrit, mitte DNS nime.';
$string['auth_pop3port'] = 'Serveri port (110 on k�ige tavalisem)';
$string['auth_pop3title'] = 'Kasuta POP3 serverit';
$string['auth_pop3type'] = 'Serveri t��p. Kui sinu server kasutab turvasertifikaati, vali pop3cert.';
$string['auth_user_create'] = 'Luba tekitada kasutajaid';
$string['auth_user_creation'] = 'Uued(anon��msed) kasutajad v�ivad luua kasutajakontosid v�lise autentsuse kontrolli allika kaudu ja saada kinnituse emaili teel. Kui seda lubad, �ra unusta konfigureerida moodulspetsiifilisi valikuid kasutaja loomiseks.';
$string['auth_usernameexists'] = 'Valitud kasutajanimi on juba olemas. Palun vali uus.';
$string['authenticationoptions'] = 'Autentsuse kontrooli valikud';
$string['authinstructions'] = 'Siin v�id instrueerida kasutajaid, et nad teaksid, millist kasutajanime ja salas�na nad peaksid kasutama. Siia sisestatud tekst ilmub logimislehel. Kui j�tad selle v�lja t�hjaks, ei tr�kita mingeid instruktsioone.';
$string['changepassword'] = 'Muuda salas�na URL';
$string['changepasswordhelp'] = 'Siin v�id t�psustada asukohta, kus kasutajad saavad oma kasutajanime / salas�na taastada, kui see on ununenud. See antakse kasutajale klahvi kujul logimislehel ja tema kasutajalehel. Kui j�tad selle t�hjaks, siis klahvi ei tr�kita.';
$string['chooseauthmethod'] = 'Vali autentsuse kontrooli meetod: ';
$string['guestloginbutton'] = 'K�lalise logimisklahv';
$string['instructions'] = 'Instruktsioonid';
$string['md5'] = 'MD5 kr�pteering';
$string['plaintext'] = 'Lihttekst';
$string['showguestlogin'] = 'V�id peita v�i n�idata k�lalisele logimisklahvi logimislehel.';

?>
