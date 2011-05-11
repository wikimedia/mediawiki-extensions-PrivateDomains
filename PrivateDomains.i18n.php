<?php
/**
 * Internationalization file for PrivateDomains extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author Inez Korczyński <korczynski@gmail.com>
 */
$messages['en'] = array(
	'privatedomains-nomanageaccess' => "<p>Sorry, you do not have enough rights to manage the allowed private domains for this wiki. Only wiki bureaucrats and staff members have access.</p><p>If you aren't logged in, you probably [[Special:UserLogin|should]].</p>",
	'privatedomains' => 'Manage Private Domains',
	'privatedomains-ifemailcontact' => '<p>Otherwise, please contact [[Special:EmailUser/$1|$1]] if you have any questions.</p>',
	'saveprivatedomains-success' => 'Private Domains changes saved.',
	'privatedomains-invalidemail' => "<p>Sorry, access to this wiki is restricted to members of $1. If you have an email address affiliated with $1, you can enter or reconfirm your email address on your account preference page [[Special:Preferences|here]]. You can still view pages on this wiki, but you will be unable to edit.</p>",
	'privatedomains-affiliatenamelabel' => 'Name of organization:',
	'privatedomains-emailadminlabel' => 'Contact username for access problems or queries:',
	'privatedomains-instructions' => "<br /> <br /> <p>Below is the list of email domains allowed for editors of this wiki. Each line designates an email suffix that is given access for editing. This should be formatted with one suffix per line. For example:</p> <p style=\"width: 20%; padding:5px; border: 1px solid grey;\">cs.stanford.edu<br /> stanfordalumni.org</p> <p>This would allow edits from anyone with the email address whatever@cs.stanford.edu or whatever@stanfordalumni.org</p> <p><b>Enter the allowed domains in the text box below, and click \"save\".</b></p>",
	// For Special:ListGroupRights
	'right-privatedomains' => 'Manage Private Domains',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'privatedomains' => 'Bestuur private domeine',
	'saveprivatedomains-success' => 'Die wysigings aan privaatdomeine is gestoor.',
	'privatedomains-affiliatenamelabel' => 'Naam van organisasie:',
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author EugeneZelenko
 * @author Jim-by
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'privatedomains-nomanageaccess' => "Выбачайце, Вы ня маеце правоў для кіраваньня дазволенымі ўласнымі дамэнамі ў {{GRAMMAR:месны|{{SITENAME}}}}. Маюць доступ толькі бюракраты і супрацоўнікі.</p><p>Калі вы не ўвайшлі ў сыстэму, Вам, магчыма, [[Special:UserLogin|трэба ўвайсьці]].",
	'privatedomains' => 'Кіраваньне ўласнымі дамэнамі',
	'privatedomains-ifemailcontact' => 'У іншым выпадку, калі ласка, зьвярніцеся да [[Special:EmailUser/$1|$1]], калі Вы маеце якія-небудзь пытаньні.',
	'saveprivatedomains-success' => 'Зьмены ў прыватных дамэнах захаваныя.',
	'privatedomains-invalidemail' => 'Прабачце, доступ да {{GRAMMAR:родны|{{SITENAME}}}} забаронены для ўдзельнікаў $1. Калі Вы маеце адрас электроннай пошты зьвязаны з $1, Вы можаце ўвесьці альбо перапацьвердзіць Ваш адрас электроннай пошты на старонцы Вашых установак [[Special:Preferences|тут]]. Вы можаце праглядаць старонкі {{GRAMMAR:родны|{{SITENAME}}}}, але ня можаце іх рэдагаваць.',
	'privatedomains-affiliatenamelabel' => 'Назва арганізацыі:',
	'privatedomains-emailadminlabel' => 'Кантактнае імя ўдзельніка для праблемаў уваходу альбо запытаў:',
	'privatedomains-instructions' => 'Ніжэй пададзены сьпіс паштовых дамэнаў дазволеных для рэдактараў {{GRAMMAR:родны|{{SITENAME}}}}. Кожны радок вызначае суфікс адрасу электроннай пошты, які дазваляе доступ да рэдагаваньня. Ён павінен мець выгляд: адзін суфікс на радок. Напрыклад: </p><p style="width: 20%; padding:5px; border: 1px solid grey;">cs.stanford.edu<br /> stanfordalumni.org</p><p>Гэта дазволіць рэдагаваньне толькі удзельнікам з адрасам электроннай пошты whatever@cs.stanford.edu альбо whatever@stanfordalumni.org</p><p><b>Увядзіце дазволеныя дамэны ў тэкставае поле ніжэй і націсьніце «Захаваць».</b>',
);

/** Breton (Brezhoneg)
 * @author Gwenn-Ael
 */
$messages['br'] = array(
	'privatedomains_nomanageaccess' => "Ma digarezit,  n'ho peus ket gwirioù a-walc'h evit merañ domanioù prevez ar wiki-mañ. N'eus nemet ar vurevourien hag izili ar c'hoskor a c'hall mont warnañ.</p><p> Ma n'oc'h ket kevreet, ret e vefe deoc'h [[Special:UserLogin|kevreañ]] marteze.",
	'privatedomains' => 'Merañ an domanioù prevez',
	'privatedomains-ifemailcontact' => "Anez, kit e darempred gant [[Special:Emailuser/$1|$1]]  m'ho peus goulenn pe c'houlenn.",
	'saveprivatedomains-success' => 'Kemmoù en domanioù prevez saveteet.',
	'privatedomains-invalidemail' => "Ma digarezit, Miret eo ar moned d'ar wiki-mañ evit izili $1.  M'ho peus ur chomlec'h postel emezelet ouzh $1 e challit mont e-barzh pe adkarnaat ho chomlec'h postel war pajenn zibaboù ar gont [[Special:Preferences|amañ]]. Gallout a rit gwelet pajennoù ar wiki-mañ, met ne c'hallit ket kemmañ anezho.",
	'privatedomains-affiliatenamelabel' => 'Anv an aozadur :',
	'privatedomains-emailadminlabel' => "Anv implijer an darempred m'ho peus kudennoù mont pe rekedoù :",
	'privatedomains-instructions' => 'Diskwelet eo roll domanioù ar chomlec\'hioù postel zo aotreet evit embannerien ar wiki-mañ. Pep linenn a ziskouez ur rakverk postel a ro tro d\'an embannerien da vont warno. Furmadet e tle ar roll  bezañ gant ur rakverk dre linenn. Da skouer,  :</p><p style="width: 20%; padding:5px; border: 1px solid grey;">cs.stanford.edu<br /> stanfordalumni.org</p><p>p>This would allow edits from anyone with the email address whatever@cs.stanford.edu or whatever@stanfordalumni.org</p><p><b>Ebarzhit roll an domanioù aotreet er voest amañ amañ dindan ha klikit war « saveteiñ».</b>',
);

/** German (Deutsch)
 * @author LWChris
 */
$messages['de'] = array(
	'privatedomains-nomanageaccess' => "Sorry, du hast nicht genügend Rechte, um die erlaubten privaten Domains für dieses Wiki zu verwalten. Nur Wiki Bürokraten und Mitarbeiter haben Zugang.</p><p>Wenn du nicht eingeloggt bist, solltest du das wahrscheinlich [[Special:UserLogin|machen]].",
	'privatedomains' => 'Private Domains verwalten',
	'privatedomains-ifemailcontact' => 'Andernfalls wende dich bitte an [[Special:EmailUser/$1|$1]] falls du Fragen hast.',
	'saveprivatedomains-success' => 'Änderungen an privaten Domains gespeichert.',
	'privatedomains-invalidemail' => 'Tut uns leid, aber der Zugang zu diesem Wiki ist auf Mitglieder von $1 beschränkt. Wenn du eine E-Mail-Adresse von $1 besitzt, kannst du es betreten, oder bestätige deine E-Mail Adresse in deinen Konteneinstellungen [[Special:Preferences|hier]]. Du kannst weiterhin Seiten in diesem Wiki ansehen, wirst sie aber nicht bearbeiten können.',
	'privatedomains-affiliatenamelabel' => 'Name der Organisation:',
	'privatedomains-emailadminlabel' => 'Kontakt-Benutzername bei Zugangsproblemen oder Fragen:',
	'privatedomains-instructions' => 'Unten ist die Liste der erlaubten E-Mail-Domains für Editoren dieses Wikis. Jede Zeile bezeichnet einen E-Mail-Suffix, dem Bearbeitungen erlaubt werden. Dies sollte mit einem Suffix pro Zeile formatiert werden. Zum Beispiel:</p><p style="width: 20%; padding:5px; border: 1px solid grey;"> cs.stanford.edu<br /> stanfordalumni.org</p><p>Dies würde Bearbeitungen von jedem mit der E-Mail-Adresse whatever@cs.stanford.edu oder whatever@stanfordalumni.org erlauben.</p><p><b>Gib die erlaubten Domains in das Textfeld unterhalb ein und klicke auf "Speichern".</b>',
);

/** German (formal address) (Deutsch (Sie-Form))
 * @author LWChris
 */
$messages['de-formal'] = array(
	'privatedomains-nomanageaccess' => "Entschuldigung, Sie haben nicht genügend Rechte, um die erlaubten privaten Domains für dieses Wiki zu verwalten. Nur Wiki Bürokraten und Mitarbeiter haben Zugang.</p><p>Wenn Sie nicht eingeloggt sind, sollten Sie dies wahrscheinlich [[Special:UserLogin|machen]].",
	'privatedomains-ifemailcontact' => 'Andernfalls wenden Sie sich bitte an [[Special:EmailUser/$1|$1]] falls Sie Fragen haben.',
	'privatedomains-invalidemail' => 'Tut uns leid, aber der Zugang zu diesem Wiki ist auf Mitglieder von $1 beschränkt. Wenn Sie eine E-Mail-Adresse von $1 besitzen, können Sie es betreten, oder bestätigen Sie Ihre E-Mail Adresse in Ihren Konteneinstellungen [[Special:Preferences|hier]]. Sie können weiterhin Seiten in diesem Wiki ansehen, werden sie aber nicht bearbeiten können.',
	'privatedomains-instructions' => 'Unten ist die Liste der erlaubten E-Mail-Domains für Editoren dieses Wikis. Jede Zeile bezeichnet einen E-Mail-Suffix, dem Bearbeitungen erlaubt werden. Dies sollte mit einem Suffix pro Zeile formatiert werden. Zum Beispiel:</p><p style="width: 20%; padding:5px; border: 1px solid grey;"> cs.stanford.edu<br /> stanfordalumni.org</p><p>Dies würde Bearbeitungen von jedem mit der E-Mail-Adresse whatever@cs.stanford.edu oder whatever@stanfordalumni.org erlauben.</p><p><b>Geben Sie die erlaubten Domains in das Textfeld unterhalb ein und klicken Sie auf "Speichern".</b>',
);

/** Spanish (Español)
 * @author Pertile
 */
$messages['es'] = array(
	'privatedomains-nomanageaccess' => "Lo sentimos, no tiene los privilegios suficientes para administrar los dominios privados permitidos para esta wiki. Solamente los burócratas wiki y los miembros del personal tienen acceso.</p><p>Si no accedió al sistema, probablemente [[Special:UserLogin|debería hacerlo]].",
	'privatedomains' => 'Administrar Dominios Privados',
	'privatedomains-ifemailcontact' => 'En caso contrario, póngase en contacto con [[Special:EmailUser/$1|$1]] por cualquier consulta.',
	'saveprivatedomains-success' => 'Se guardaron los cambios en los Dominios Privados.',
	'privatedomains-invalidemail' => 'Lo sentimos, el acceso a esta wiki está restringido a los miembros de $1. Si posee una cuenta de correo electrónico afiliada a $1, puede ingresarla o volver a confirmar su dirección de correo electrónico en la página de preferencias de su cuenta [[Special:Preferences|aquí]]. Todavía puede ver las páginas en esta wiki, pero no podrá editarlas.',
	'privatedomains-affiliatenamelabel' => 'Nombre de la organización:',
	'privatedomains-emailadminlabel' => 'Nombre de usuario del contacto para problemas o consultas:',
	'privatedomains-instructions' => 'A continuación se presenta la lista de dominios de correo electrónico permitidos para los editores de esta wiki. Cad línea designa un sufijo de correo electrónico que puede editar en esta wiki. Esta debería tener un formato de un sufijo por línea. Por ejemplo:</p><p style="width: 20%; padding:5px; border: 1px solid grey;">cs.stanford.edu<br /> stanfordalumni.org</p><p>El ejemplo anterior debería permitir las ediciones de alguien cuya dirección de correo sea loquesea@cs.stanford.edu o loquesea@stanfordalumni.org</p><p><b>Ingrese los dominios permitidos en el cuadro de texto que se muestra debajo y haga clic en "guardar".</b>',
);

/** Finnish (Suomi)
 * @author Centerlink
 */
$messages['fi'] = array(
	'privatedomains' => 'Hallinnoi yksityisiä verkkoalueita',
	'privatedomains-ifemailcontact' => 'Muussa tapauksessa, ota yhteys [[Special:EmailUser/$1|$1]], jos sinulla on kysyttävää.',
	'saveprivatedomains-success' => 'Yksityisen verkkoalueen muutokset on tallennettu.',
	'privatedomains-affiliatenamelabel' => 'Organisaation nimi:',
	'privatedomains-emailadminlabel' => 'Yhteystietokäyttäjänimi pääsypulmissa tai kyselyissä:',
);

/** French (Français)
 * @author Alexandre Emsenhuber
 */
$messages['fr'] = array(
	'privatedomains-nomanageaccess' => "<p>Désolé, vous n'avez les droits suffisants pour gérer les domaines privés de ce wiki. Seuls les bureaucrates et les membres du personnel y ont accès.</p><p>Si vous n'êtes pas connecté, vous devriez probablement [[Special:UserLogin|vous connecter]].</p>",
	'privatedomains' => 'Gérer les domaines privés',
	'privatedomains-ifemailcontact' => '<p>Sinon, veuillez contacter [[Special:EmailUser/$1|$1]] si vous avec une question.</p>',
	'saveprivatedomains-success' => 'Modifications dans les domaines privés sauvegardés.',
	'privatedomains-invalidemail' => "<p>Désolé, l'accès à ce wiki est réservé aux membre de $1. Si vos avez une adresse de courriel affiliée avec $1, vous pouvez entrer ou reconfirmer votre adresse de courriel dans sur la page de préférences du compte [[Special:Preferences|ici]]. Vous pouvez toujours voir les pages de ce wiki, mais vous ne pouvez pas le modifier.</p>",
	'privatedomains-affiliatenamelabel' => "Nom de l'organisation :",
	'privatedomains-emailadminlabel' => "Nom d'utilisateur du contact pour des problèmes d'accès ou requêtes :",
	'privatedomains-instructions' => "<br /> <br /> <p>La liste des domaines des adresses de courriel autorisées pour les éditeurs de ce wiki est affichée ci-dessous. Chaque ligne désigne un suffixe d'adresse de courriel qui donne accès aux éditeurs. La liste doit être formatée avec un suffixe par ligne. Par exemple :</p> <p style=\"width: 20%; padding:5px; border: 1px solid grey;\">cs.stanford.edu<br /> stanfordalumni.org</p> <p>Ceci permettra à toutes les personnes ayant une adresse de courriel se terminant par « @cs.stanford.edu » et  « @stanfordalumni.org » de modifier le wiki.</p> <p><b>Entrez la liste des domaines autorisés dans la boîte ci-dessous et cliquez sur « sauvegarder ».</b></p>",
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'privatedomains-nomanageaccess' => "<p>Sentímolo, non ten os dereitos necesarios para xestionar os dominios privados deste wiki. Só os burócratas do wiki e os membros do persoal teñen acceso.</p><p>Se non accedeu ao sistema, probabelmente [[Special:UserLogin|debería]] facelo.</p>",
	'privatedomains' => 'Xestionar os dominios privados',
	'privatedomains-ifemailcontact' => '<p>Se non, póñase en contacto con [[Special:EmailUser/$1|$1]] se ten algunha dúbida.</p>',
	'saveprivatedomains-success' => 'Gardáronse os cambios feitos nos dominios privados.',
	'privatedomains-invalidemail' => "<p>Sentímolo, o acceso a este wiki está restrinxido aos membros de $1. Se ten un enderezo de correo electrónico afiliado con $1, pode entrar ou confirmar o seu enderezo de correo electrónico na páxina de preferencias da súa conta [[Special:Preferences|aquí]]. Aínda pode ver páxinas neste wiki, pero non será capaz de editalas.</p>",
	'privatedomains-affiliatenamelabel' => 'Nome da organización:',
	'privatedomains-emailadminlabel' => 'Nome de usuario de contacto para os problemas de acceso ou dúbida:',
	'privatedomains-instructions' => "<br /> <br /> <p>A continuación está a lista de dominios de correo electrónico autorizados para os editores deste wiki. Cada liña designa un sufixo que dá acceso á edición. A lista debe estar ordenada de xeito que haxa un sufixo por liña. Por exemplo:</p> <p style=\"width: 20%; padding:5px; border: 1px solid grey;\">cs.stanford.edu<br /> stanfordalumni.org</p> <p>Isto permitirá as edicións de aqueles que teña un enderezo de correo electrónico o_que_sexa@cs.stanford.edu ou o_que_sexa@stanfordalumni.org</p> <p><b>Insira os dominios autorizados no cadro de texto de embaixo e prema en \"Gardar\".</b></p>",
);

/** Hungarian (Magyar)
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'privatedomains' => 'Privát tartományok kezelése',
	'privatedomains-affiliatenamelabel' => 'Szervezet neve:',
	'privatedomains-emailadminlabel' => 'Kapcsolattartó neve hozzáférési problémák vagy kérdések esetére:',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'privatedomains-nomanageaccess' => "Pardono, tu non ha le derectos necessari pro gerer le dominios private de iste wiki. Solmente le bureaucrates del wiki e le personal ha accesso.</p><p>Si tu non ha aperite un session, tu deberea probabilemente [[Special:UserLogin|facer lo]].",
	'privatedomains' => 'Gerer dominios private',
	'privatedomains-ifemailcontact' => 'Si non, contacta [[Special:EmailUser/$1|$1]] si tu ha alcun questiones.',
	'saveprivatedomains-success' => 'Le alterationes in le dominios private ha essite salveguardate.',
	'privatedomains-invalidemail' => 'Pardono, le accesso a iste wiki es restringite al membros de $1. Si tu ha un adresse de e-mail affiliate con $1, tu pote entrar o reconfirmar tu adresse de e-mail in [[Special:Preferences|le pagina de preferentias de tu conto]]. Tu pote vider paginas in iste wiki, ma non modificar los.',
	'privatedomains-affiliatenamelabel' => 'Nomine del organisation:',
	'privatedomains-emailadminlabel' => 'Nomine de usator de contacto pro problemas de accesso o questiones:',
	'privatedomains-instructions' => 'Hic infra se trova le lista de dominios de e-mail permittite pro le contributores de iste wiki. Cata linea designa un suffixo de e-mail que da accesso al modification. Isto debe esser formatate con un suffixo per linea. Per exemplo:</p><p style="width: 20%; padding:5px; border: 1px solid grey;">cs.stanford.edu<br /> stanfordalumni.org</p><p>Isto permitterea le modificationes de omne persona con le adresse de e-mail quecunque@cs.stanford.edu o quecunque@stanfordalumni.org</p><p><b>Entra le dominios permittite in le quadro de texto sequente, e clicca "salveguardar".</b>',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'privatedomains-affiliatenamelabel' => 'Numm vun der Organisatioun',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'privatedomains-nomanageaccess' => "Жалиме, немате доволно права за да раководите со дозволените приватни домени за ова вики. Само вики-бирократи и членови на персоналот имаат таков пристап.</p><p>Ако не сте најавени, веројатно ќе [[Special:UserLogin|треба да се најавите]].",
	'privatedomains' => 'Раководење со приватни домени',
	'privatedomains-ifemailcontact' => 'Во спротивно, обратете се на [[Special:EmailUser/$1|$1]] ако имате било какви прашања.',
	'saveprivatedomains-success' => 'Промените во приватните домени се зачувани.',
	'privatedomains-invalidemail' => 'Жалиме, но само членови на $1 имаат пристап на ова вики. Ако имате е-поштенска адреса здружена со $1, можете да ја внесете или препотврдите на страницата за нагодување на сметката [[Special:Preferences|тука]]. Ќе можете и понатаму да ги гледате страниците на ова вики, но нема да можете да уредувате.',
	'privatedomains-affiliatenamelabel' => 'Име на организација:',
	'privatedomains-emailadminlabel' => 'Корисничко име за контакт при проблеми или прашања за пристап:',
	'privatedomains-instructions' => 'Подолу е наведен список на е-поштенски домени дозволени за уредниците на ова вики. Во секој ред е назначена е-поштенска наставка што добива право на уредување. Ова треба да се форматира со по една наставка за секој ред. На пример:</p><p style="width: 20%; padding:5px; border: 1px solid grey;">cs.stanford.edu<br /> stanfordalumni.org</p><p>Ова дозволува уредувања од секој со адреса нешто@cs.stanford.edu или нешто@stanfordalumni.org</p><p><b>Во полето подолу внесете ги дозволените домени, и кликнете на „зачувај“.</b>',
);

/** Dutch (Nederlands)
 * @author Mark van Alphen
 * @author Mitchel Corstjens
 * @author Siebrand Mazeland
 */
$messages['nl'] = array(
	'privatedomains' => 'Privédomeinen beheren',
	'privatedomains-affiliatenamelabel' => 'Organisatienaam:',
	'privatedomains-emailadminlabel' => 'Neem contact op met gebruikersnaam voor toegangsproblemen of als je vragen hebt',
	'privatedomains-ifemailcontact' => '<p>Anders, contacteer a.u.b. [[Special:EmailUser/$1|$1]] als je vragen hebt.</p>',
	'privatedomains-instructions' => "<br /> <br /> <p>Onderstaande is een lijst van email domeinen toegestaan voor bewerkers op deze wiki. Elke regel wijst een email achtervoegsel toe die in staat is om deze wiki te bewerken. Formateer dit met een achtervoegsel per regel. Voorbeeld</p> <p style=\"width: 20%; padding:5px; border: 1px solid grey;\">cs.stanford.edu<br /> stanfordalumni.org</p> <p>Dit zou iedereen toe moeten staan om te bewerken met het email adres whatever@cs.stanford.edu of whatever@stanfordalumni.org</p> <p><b>Type de toegestane domeinen in de onderstaande tekst box, en klik op \"opslaan\".</b></p>",
	'privatedomains-invalidemail' => "<p>Sorry, toegang tot deze wiki is alleen toegestaan voor leden van $1. Als je een email adres hebt die verwant is met $1, kan je je email adres invoeren of bevestigen op je account voorkeuren pagina [[Special:Preferences|hier]]. Je kan nog steeds pagina's op de wiki bekijken, maar kan niet bewerken.</p>",
	'privatedomains-nomanageaccess' => "<p>Sorry, maar je hebt niet genoeg rechten om privé domeinen voor deze wiki te beheren. Alleen wiki bureaucraten en staff leden hebben toegang.</p><p>Als je niet ingelogd bent, zou je dat [[Special:UserLogin|moeten doen]].</p>",
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Nghtwlkr
 */
$messages['no'] = array(
	'privatedomains-nomanageaccess' => 'Beklager, du har ikke nok rettigheter til å håndtere tillatte private domener for denne wikien. Kun wikibyråkrater og stabsmedlemmer har tilgang.</p><p>Du bør [[Special:UserLogin|logge inn]] om du ikke alt har gjort det.',
	'privatedomains' => 'Håndter private domener',
	'privatedomains-ifemailcontact' => 'Hvis ikke, kontakt [[Special:EmailUser/$1|$1]] om du har spørsmål.',
	'saveprivatedomains-success' => 'Endringer for private domener lagret.',
	'privatedomains-invalidemail' => 'Beklager, tilgang til denne wikien er begrenset til medlemmer av $1. Om du har en e-postadresse tilknyttet $1 kan du skrive den inn eller bekrefte den på din side for [[Special:Preferences|kontoinnstillinger]]. Du kan fortsatt se sidene på denne wikien, men du kan ikke redigere dem.',
	'privatedomains-affiliatenamelabel' => 'Navn på organisasjon:',
	'privatedomains-emailadminlabel' => 'Kontakt brukernavn for tilgangsproblemer eller spørsmål:',
	'privatedomains-instructions' => 'Under er en liste over e-postdomener som er tillatt for bidragsytere i denne wikien. Hver linje angir et e-postsuffiks som er gitt tilgang til redigering. Denne bør være formatert med ett suffiks per linje. For eksempel:</p><p style="width:20%; padding:5px; border:1px solid grey;">cs.stanford.edu<br /> stanfordalumni.org</p><p>Dette ville tillatt redigeringer fra enhver med e-postadresse hvasomhelst@cs.stanford.edu og hvasomhelst@stanfordalumni.org</p><p><b>Skriv inn tillatte domener i tekstboksen under og klikk «lagre».</b>',
);

/** Polish (Polski)
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'privatedomains-nomanageaccess' => 'Nie masz wystarczających uprawnień do zarządzania prywatnymi domenami tej wiki. Robić to mogą wyłącznie członkowie grup biurokraci oraz personel.

Jeśli nie jesteś zalogowany możliwe, że powinieneś najpierw [[Special:UserLogin|zalogować się]].',
	'privatedomains' => 'Zarządzanie prywatnymi domenami',
	'privatedomains-ifemailcontact' => 'W przeciwnym wypadku należy kontaktować się z [[Special:EmailUser/$1|$1]], o ile masz jakieś pytania.',
	'saveprivatedomains-success' => 'Zmiany dla domen prywatnych zostały zapisane.',
	'privatedomains-invalidemail' => 'Dostęp do tej wiki został ograniczony do członków $1. Jeśli masz adres e-mail powiązany z $1, możesz wprowadzić lub potwierdzić swój adres e‐mail na [[Special:Preferences|stronie preferencji]]. Nadal możesz przeglądać strony, ale edycja nie będzie możliwa.',
	'privatedomains-affiliatenamelabel' => 'Nazwa organizacji',
	'privatedomains-emailadminlabel' => 'Użytkownik kontaktowy w sprawie pytań lub problemów z dostępem',
	'privatedomains-instructions' => 'Poniżej znajduje się lista domen poczty elektronicznej dostępnych dla redaktorów tej wiki. Każdy wiersz określa sufiks adresu e-mail, którego posiadanie umożliwia edycję. Należy umieścić jedną końcówkę w jednej linii. Na przykład:</p>
<p style="width: 20%; padding:5px; border: 1px solid grey;">cs.stanford.edu<br /> stanfordalumni.org</p>
<p>Pozwoli to edytować np posiadaczom adresów whatever@cs.stanford.edu lub whatever@stanfordalumni.org</p>
<p><b>Wprowadź dozwolone domeny w polu tekstowym i kliknij przycisk „{{int:saveprefs}}“.</b>',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'privatedomains-nomanageaccess' => "<p>Belavans a l'ha pa basta drit për gestì ël domini privà për sta wiki-sì. Mach mangiapapé dla wiki e mèmber ëd l'echip a l'han acess.</p><p>S'a l'é pa rintrà ant ël sistema, a peul esse [[Special:UserLogin|ch'a deva felo]].</p>",
	'privatedomains' => 'Gestiss Domini Privà',
	'privatedomains-ifemailcontact' => "<p>Dësnò, për piasì ch'a contata [[Special:EmailUser/$1|$1]] s'a l'has chèich chestion.</p>",
	'saveprivatedomains-success' => 'Salvà ij cangiament ai Domini Privà.',
	'privatedomains-invalidemail' => "<p>Belavans l'acess a sta wiki-sì a l'é arstrenzù ai mèmber ëd $1. S'a l'ha n'adrëssa ëd pòsta eletrònica afilià con $1, a peul anserì o riconfirmé soa adrëssa an soa pàgina dle preferense ëd sò cont [[Special:Preferences|ambelessì]]. A peul ancó visualisé pàgine an sta wiki-sì, ma a podrà pa fé 'd modìfiche.</p>",
	'privatedomains-instructions' => "<br /> <br /> <p>Sota a-i é la lista dij domini ëd pòsta eletrònica përmëttù a j'editor dë sta wiki-sì. Minca linia a spessìfica un sufiss ëd pòsta eletrònica che a l'ha acess për modifiché. Sòn a dovrìa pijé la forma con un sufiss për linia. Për esempi:</p> <p style=\"width: 20%; padding:5px; border: 1px solid grey;\">cs.stanford.edu<br /> stanfordalumni.org</p> <p>Sòn a përmët modìfiche da tuti coj ch'a l'han l'adrëssa ëd pòsta eletrònica whatever@cs.stanford.edu o whatever@stanfordalumni.org</p> <p><b>Ch'a anserissa ij domini përmëttù ant la casela ëd test sì-sota, e ch'a sgnaca \"salvé\".</b></p>",
	'privatedomains-affiliatenamelabel' => "Nòm ëd l'organisassion:",
	'privatedomains-emailadminlabel' => "Contata nòm utent për problem d'acess o custion:",
);

/** Portuguese (Português)
 * @author Hamilton Abreu
 */
$messages['pt'] = array(
	'privatedomains-nomanageaccess' => "Desculpe, mas não tem privilégios para administrar os domínios privados permitidos nesta wiki. Só os burocratas e os membros da equipa têm acesso.</p><p>Se não se autenticou, provavelmente [[Special:UserLogin|devia]].",
	'privatedomains' => 'Administrar Domínios Privados',
	'privatedomains-ifemailcontact' => 'Caso contrário, contacte [[Special:EmailUser/$1|$1]] se tiver dúvidas, por favor.',
	'saveprivatedomains-success' => 'As alterações aos Domínios Privados foram gravadas.',
	'privatedomains-invalidemail' => 'Desculpe, mas o acesso a esta wiki está restrito aos membros de $1. Se tem um correio electrónico afiliado com $1 pode introduzir ou reconfirmar o endereço de correio electrónico na página de preferências da sua conta [[Special:Preferences|aqui]]. Pode continuar a ver as páginas da wiki, mas não pode editá-las.',
	'privatedomains-affiliatenamelabel' => 'Nome da organização:',
	'privatedomains-emailadminlabel' => 'Nome do utilizador de contacto para problemas e questões:',
	'privatedomains-instructions' => 'É apresentada abaixo a lista de domínios de correio electrónico permitidos para os editores desta wiki. Cada linha designa um sufixo de correio electrónico com permissões de edição. Deve existir um sufixo por linha. Por exemplo:</p><p style="width: 20%; padding:5px; border: 1px solid grey;">uma.pt<br /> unl.pt</p><p>Isto permite edições a todos aqueles com um endereço de correio electrónico nome@uma.pt ou nome@unl.pt</p><p><b>Introduza os domínios permitidos na caixa de texto abaixo e clique "gravar".</b>',
);

/** Russian (Русский)
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'privatedomains-nomanageaccess' => "Извините, у вас недостаточно полномочий для управления частными доменами этой вики. Только вики-бюрократы и сотрудники имеют подобный доступ.</p><p>Если вы не вошли в систему, то вам, вероятно, [[Special:UserLogin|следует это сделать]].",
	'privatedomains' => 'Управление частными доменами',
	'privatedomains-ifemailcontact' => 'В противном случае, просим обращаться к [[Special:EmailUser/$1|$1]], если у вас есть какие-либо вопросы.',
	'saveprivatedomains-success' => 'Изменения в частных доменах сохранены.',
	'privatedomains-invalidemail' => 'Извините, доступ к этой вики доступен только для членов $1. Если у вас есть адрес электронной почты, связанный с $1, вы можете ввести или подтвердить ваш адрес электронной почты на вашей [[Special:Preferences|странице настроек]]. Вы можете просматривать страницы этой вики, но вы не сможете их править.',
	'privatedomains-affiliatenamelabel' => 'Название организации:',
	'privatedomains-emailadminlabel' => 'Контактное имя участника для запросов или проблем с доступом:',
	'privatedomains-instructions' => 'Ниже приведён список почтовых доменов, допустимых для редакторов этой вики. Каждая строка обозначает суффикс адреса электронной почты, позволяющего производить правки. На каждой строке должно быть не более одного суффикса. Например: </p> <p style="width: 20%; padding:5px; border: 1px solid grey;">cs.stanford.edu<br /> stanfordalumni.org</p> <p>Подобная настройка позволит править статьи участникам, обладающим электронными адресами  whatever@cs.stanford.edu и whatever@stanfordalumni.org</p> <p><b>Введите разрешённые домены в представленное ниже текстовое поле и нажмите «Сохранить».</b>',
);

/** Serbian Cyrillic ekavian (Српски (ћирилица))
 * @author Verlor
 */
$messages['sr-ec'] = array(
	'privatedomains-affiliatenamelabel' => 'Име организације:',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'privatedomains-affiliatenamelabel' => 'సంస్థ యొక్క పేరు:',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'privatedomains-nomanageaccess' => "Paumanhin, walang kang sapat na mga karapatang upang pamahalaan ang mga dominyong pribado para sa wiking ito.  Tanging mga burokrato at mga kasaping tauhan ng wiki lamang ang makakapunta..</p><p>Kung hindi ka nakalagda, maaaring [[Special:UserLogin|dapat]] kang lumagda.",
	'privatedomains' => 'Pamahalaan ang mga Dominyong Pribado',
	'privatedomains-ifemailcontact' => 'O kaya, mangyaring makipag-ugnayan kay [[Special:EmailUser/$1|$1]] kung mayroon kang anumang mga katanungan.',
	'saveprivatedomains-success' => 'Sinagip ang mga pagbabago sa Mga Dominyong Pribado.',
	'privatedomains-invalidemail' => 'Paumahin, nakalaan lamang ang pagpasok sa wiking para sa mga kasapi ng $1.  Kung mayroon kang adres ng e-liham na may kaugnayan sa $1, maipapasok mo o muling patunayan ang adres mo ng e-liham sa pahina ng mga nais mo sa iyong akawnt [[Special:Preferences|dito]]. Maaari mo pa ring tingnan ang mga pahina sa wiking ito, subalit hindi ka makapamamatnugot.',
	'privatedomains-affiliatenamelabel' => 'Pangalan ng organisasyon:',
	'privatedomains-emailadminlabel' => 'Makipag-ugnayan sa pangalan ng tagagamit para sa mga suliranin sa pagpunta o mga tanong:',
	'privatedomains-instructions' => 'Nasa ibaba ang talaan ng mga dominyo ng e-liham na ipinapahintulot para sa mga patnugot ng wiking ito.  Bawat guhit ay nagtatalaga ng isang hulaping makakapunta para sa pamamatnugot.  Dapat itong anyuhang may isang hulapi bawat guhit.  Bilang halimbawa:</p><p style="width: 20%; padding:5px; border: 1px solid grey;">cs.stanford.edu<br /> stanfordalumni.org</p><p>Magpapahintulot ito ng mga pagbabago mula kaninuman na may adres ng e-liham na anuman@cs.stanford.edu o anuman@stanfordalumni.org</p><p><b>Ipasok ang pinapayagang mga dominyo sa loob ng kahon ng tekstong nasa ibaba, at pindutin ang "sagipin".</b>',
);