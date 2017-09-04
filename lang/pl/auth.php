<?PHP // $Id$ 
      // auth.php - created with Moodle 1.3 - (2004052400)


$string['auth_dbdescription'] = 'Metoda ta wykorzystuje tabel� zewn�trznej bazy danych dla sprawdzenia czy podana nazwa u�ytkownika i has�o s� poprawne. W przypadku nowego konta, informacje z innych p�l r�wnie� mog� zosta� skopiowane do Moodle.';
$string['auth_dbextrafields'] = 'Te pola s� opcjonalne. Mo�esz wst�pnie wype�ni� niekt�re pola dotycz�ce u�ytkownika informacj� z <B>p�l zewn�trznej bazy danych</B>, kt�re tutaj okre�lasz. <P>Je�eli nic  w tym miejscu nie wpiszesz, u�yte zostan� warto�ci domy�lne. <P> W obu przypadkach, u�ytkownik b�dzie m�g� dokona� edycji tych p�l po zalogowaniu';
$string['auth_dbfieldpass'] = 'Nazwa pola zawieraj�cego has�a';
$string['auth_dbfielduser'] = 'Nazwa pola zawieraj�cego nazwy u�ytkownik�w';
$string['auth_dbhost'] = 'Komputer b�d�cy hostem serwera bazy danych.';
$string['auth_dbname'] = 'Nazwa bazy danych';
$string['auth_dbpass'] = 'Has�o dla powy�szej nazwy u�ytkownika';
$string['auth_dbpasstype'] = 'Okre�l format stosowany przez pole has�a. Kodowanie MD5 przydatne jest przy ��czeniu si� z innymi popularnymi aplikacjami sieci WWW, takimi jak PostNuke';
$string['auth_dbtable'] = 'Nazwa tabeli w bazie danych';
$string['auth_dbtitle'] = 'Korzystaj z zewn�trznej bazy danych';
$string['auth_dbtype'] = 'Rodzaj bazy danych (szczeg�owe informacje: <A HREF=../lib/adodb/readme.htm#drivers>ADOdb documentation</A>';
$string['auth_dbuser'] = 'Nazwa u�ytkownika maj�cego prawo dost�pu do odczytu z bazy';
$string['auth_emaildescription'] = 'Potwierdzenie e-mailem jest domy�ln� metod� uwierzytelniania. U�ytkownik rejestruje si� wybieraj�c w�asn�, now� nazw� u�ytkownika oraz has�o, a nast�pnie wysy�ane jest potwierdzenie na adres jego konta pocztowego. E-mail ten zawiera bezpieczny odno�nik do strony, na kt�rej u�ytkownik mo�e potwierdzi� zarejestrowanie swojego konta. Przy kolejnych logowaniach dokonywane jest tylko por�wnanie nazwy u�ytkownika i has�a z warto�ciami zapisanymi w bazie danych Moodle.';
$string['auth_emailtitle'] = 'Uwierzytelnienie z wykorzystaniem poczty elektronicznej';
$string['auth_imapdescription'] = 'Metoda ta korzysta z serwera IMAP w celu sprawdzenia czy podana nazwa u�ytkownika i has�o s� poprawne.';
$string['auth_imaphost'] = 'Adres serwera IMAP. Nale�y stosowa� adres IP, a nie nazw� DNS.';
$string['auth_imapport'] = 'Numer portu serwera IMAP, zwykle 142 lub 993.';
$string['auth_imaptitle'] = 'U�yj serwera IMAP';
$string['auth_imaptype'] = 'Typ serwera IMAP. Serwery IMAP mog� stosowa� r�ne rodzaje uwierzytelniania i negocjacji.';
$string['auth_ldap_bind_dn'] = 'Okre�l tutaj czy chcesz skorzysta� z funkcji bind-user do szukania u�ytkownik�w, np. \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Has�o dla funkcji bind-user';
$string['auth_ldap_contexts'] = 'Lista kontekst�w, w kt�rych znajduj� si� u�ytkownicy. Oddzielaj r�ne konteksty symbolem \';\', np. \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Je�eli w��czysz opcj� tworzenia u�ytkownik�w z potwierdzeniem poczt� elektroniczn�, zdefiniuj kontekst, w kt�rym tworzeni s� tacy u�ytkownicy. Powinien by� r�ni� si� od kontekstu innych u�ytkownik�w w celu unikni�cia problem�w zwi�zanych z bezpiecze�stwem. Nie musisz dodawa� tego kontekstu do zmiennej ldap_context-variable - Moodle automatycznie wyszuka u�ytkownik�w w tym kontek�cie.';
$string['auth_ldap_creators'] = 'Lista grup, kt�rych cz�onkowie mog� tworzy� nowe kursy. Oddziel kolejne grupy symbolem \';\'. Przyk�adowa lista: \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_host_url'] = 'Okre�l hosta LDAP za pomoc� adresu, np. URL\'ldap://ldap.myorg.com/\' lub \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_memberattribute'] = 'Okre�l atrybut cz�onkostwa u�ytkownika je�eli u�ytkownik nale�y do grupy. Zazwyczaj jest to \'member\'';
$string['auth_ldap_search_sub'] = 'Wpisz warto�� <> 0 je�eli chcesz szuka� u�ytkownik�w z podkontekst�w';
$string['auth_ldap_update_userinfo'] = 'Uaktualnij informacje o u�ytkowniku (imi�, nazwisko, adres...) z LDAP do Moodle. Informacje na temat mapowania: /auth/ldap/attr_mappings.php';
$string['auth_ldap_user_attribute'] = 'Atrybut u�ywany do nazywania/szukania u�ytkownik�w, zwykle \'cn\'.';
$string['auth_ldap_version'] = 'Wersja protoko�u LDAP u�ywana przez serwer.';
$string['auth_ldapdescription'] = 'Metoda ta zapewnia uwierzytelnienie wzgl�dem zewn�trznego serwera LDAP.<br> Je�eli podana nazwa u�ytkownika i has�o s� poprawne, Moodle dokonuje wpisu nowego u�ytkownika do swojej bazy danych. Modu� ten mo�e odczytywa� atrybuty u�ytkownika z LDAP i wst�pnie wype�ni� odpowiednie pola w Moodle. Przy kolejnych logowaniach sprawdzane s� tylko nazwa u�ytkownika i has�o.';
$string['auth_ldapextrafields'] = 'Te pola s� opcjonalne. Mo�esz wst�pnie wype�ni� niekt�re pola dotycz�ce u�ytkownik�w Moodle informacjami z okre�lonych tutaj <B>p�l LDAP.<B> <P> Je�eli pola te pozostawisz puste, �adne informacje nie zostan� przeniesione z LDAP i wykorzystane zostan� warto�ci domy�lne Moodle. <P> W obu przypadkach, u�ytkownik b�dzie m�g� dokona� edycji tych p�l po zalogowaniu.';
$string['auth_ldaptitle'] = 'U�yj serwera LDAP';
$string['auth_manualdescription'] = 'Metoda ta uniemo�liwia u�ytkownikom tworzenie w�asnych kont. Wszystkie konta musz� by� r�cznie utworzone przez administratora (Admin User).';
$string['auth_manualtitle'] = 'Tylko konta utworzone r�cznie';
$string['auth_multiplehosts'] = 'Mo�na wskaza� wi�cej komputer�w-host�w np. host1.com; host2.com; host3.com';
$string['auth_nntpdescription'] = 'Metoda ta wykorzystuje serwer NNTP w celu sprawdzenia czy podana nazwa u�ytkownika i has�o s� poprawne.';
$string['auth_nntphost'] = 'Adres serwera NNTP. Nale�y stosowa� adres IP, a nie nazw� DNS.';
$string['auth_nntpport'] = 'Port serwera (najcz�ciej 119)';
$string['auth_nntptitle'] = 'U�yj serwera NNTP';
$string['auth_nonedescription'] = 'U�ytkownicy mog� si� zarejestrowa� i niezw�ocznie utworzy� dzia�aj�ce konta, bez uwierzytelniania wzgl�dem zewn�trznego serwera i potwierdzenia e-mailem. Korzystaj z tej opcji ostro�nie pami�taj�c o mo�liwych problemach z bezpiecze�stwem i administracj�.';
$string['auth_nonetitle'] = 'Brak uwierzytelniania';
$string['auth_pop3description'] = 'Metoda ta wykorzystuje serwer POP3 w celu sprawdzenia czy podana nazwa u�ytkownika i has�o s� poprawne.';
$string['auth_pop3host'] = 'Adres serwera POP3. Nale�y stosowa� adres IP, a nie nazw� DNS.';
$string['auth_pop3port'] = 'Port serwera (najcz�ciej 110)';
$string['auth_pop3title'] = 'U�yj serwera POP3';
$string['auth_pop3type'] = 'Typ serwera. Je�eli Tw�j serwer wykorzystuje certyfikaty bezpiecze�stwa, wybierz pop3cert.';
$string['auth_user_create'] = 'W��cz opcj� tworzenia u�ytkownik�w';
$string['auth_user_creation'] = 'Nowi (anonimowi) u�ytkownicy mog� tworzy� konta u�ytkownika u�ywaj�c zewn�trznego �r�d�a uwierzytelniania z potwierdzeniem poczt� elektroniczn�. Je�eli w��czysz t� opcj�, pami�taj r�wnie� o skonfigurowaniu zwi�zanych z modu�ami opcji tworzenia u�ytkownik�w.';
$string['auth_usernameexists'] = 'Wybrana nazwa u�ytkownika ju� istnieje - prosz� wybra� inn�.';
$string['authenticationoptions'] = 'Opcje uwierzytelniania';
$string['authinstructions'] = 'Mo�esz tutaj wprowadzi� instrukcje dla Twoich u�ytkownik�w dotycz�ce nazwy u�ytkownika i has�a, kt�rych powinni u�ywa�. Tekst wpisany w tym miejscu pojawi si� na stronie logowania. Je�eli nic nie wpiszesz, nie zostan� wy�wietlone �adne instrukcje.';
$string['changepassword'] = 'Zmie� adres URL has�a';
$string['changepasswordhelp'] = 'Mo�esz tutaj okre�li� miejsce, w kt�rym Twoi u�ytkownicy mog� odzyska� lub zmieni� swoja nazw� u�ytkownika/has�o, je�eli ich zapomn�. Wybranie tej opcji spowoduje wy�wietlenie przycisku na stronie logowania i stronach u�ytkownika. Je�eli nic nie wpiszesz, przycisk nie zostanie wy�wietlony.';
$string['chooseauthmethod'] = 'Wybierz spos�b uwierzytelniania';
$string['guestloginbutton'] = 'Przycisk logowania jako go��';
$string['instructions'] = 'Instrukcje';
$string['md5'] = 'Kodowanie MD5';
$string['plaintext'] = 'Zwyk�y tekst';
$string['showguestlogin'] = 'Mo�esz ukry� b�d� pokaza� przycisk logowania jako go��';

?>
