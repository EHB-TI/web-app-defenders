## Bladwijzers
* [Diagrammen](https://github.com/EHB-TI/web-app-defenders/blob/main/Diagrammen/DIAGRAMMEN.md)
* [Website URL (www.ehbdefendersblog.com)](https://ehbdefendersblog.com)

# Doelstelling
*Leg kort uit hoe deze webapp omzet zal maken of iets kan vergemakkelijken in het dagdagelijkse leven van zijn gebruikers.*

Met een blog kun je jezelf uiten, anderen inspireren en beter op de hoogte brengen over verschillende onderwerpen. Een blog is bovendien een van de beste kanalen om een online platform te starten en je content te delen met mensen over de hele wereld. Het starten van een blog kan echter erg overweldigend zijn. Als gevolg hiervan zal ons team een GDPR-conform, veilig blog-applicatie ontwikkelen waarop mensen hun expertise en visie kunnen delen. De web-app zal een gebruiksvriendelijke interface hebben waarmee gebruikers zich gemakkelijk en snel kunnen registreren of inloggen, blogposts delen, afbeeldingen toevoegen en posts van andere gebruikers liken en erop kunnen reageren. Voor wat betreft de features zullen we onze web-app de mogelijkheid bieden om met meerdere personen samen te werken aan een post. Als beheerder van de groep zal je andere leden kunnen uitnodigen om bij te dragen aan de post. Deze collaberatieve feature maakt onze app een uitstekende tool voor elk bedrijf.


# Acceptatiecriteria
*Hoe weten we of onze doelstellingen zijn bereikt?*

  - Gebruiker kan met enkele muis clicks een blog aanmaken. 
  - Andere gebruikers kunnen deze post raadplegen met alle details inbegrepen (auteur, aanmaakdatum post, bewerkingsdatum, reacties en aantal likes). 
  - Zelf opmerkingen en/of likes toevoegen. 
  - De eigenaar van de blog kan zijn/haar post verwijderen of bijwerken. 
  - Een gebruiker met administratierechten kan Alle blogs bijwerken of verwijderen. 
  - Een gebruiker zonder administratierechten heeft enkel het recht om zijn eigen post te bewerken of verwijderen. 
 
Als deze acties in een veilige wijze kunnen toegepast worden, waar alle rechten en toegangen gerespecteerd worden op de webapp en geen achterpoortjes openblijven om ontoegelaten actief te verwezenlijken, dan is ons doelstelling bereikt.
 
# [BEVEILIGING]

## HTTPS:
- [X] Gebruik van HTTPS
- [X] Er zal niet kunnen gesurfd worden naar de URL door te kopieren.
- [X] HSTS preload list.
- [X] Elk respons moet een Strict-Transport-Security header bevatten
- [X] DNS CAA encryt toepassing.
- [X] Domain krijgt een A op de website van 'ssllabs.com/ssltest'.

## SING UP:
- [X] Een user geeft een e-mail adres in en een wachtwoord.
- [X] Een wachtwoord kan bestaan uit de <printable> ASCII Karakters.
- [X] Een wachtwoord moet minstens 8 Karakters lang zijn.
- [X] Een user moet een bestaande e-mail adres ingeven.
- [X] Een Wachtwoord kan worden gekopieerd en geplakt.

## API:
- [X] HIBP api wordt gebruikt voor het weigeren van wachtwoorden die meer dan 300 keer als gebreached gemarkeerd zijn.

## SIGN IN:
- [X] Een user kan pas inloggen als hij zijn e-mail adres heeft bevestigd door te bewijzen dat het zijn e-mail adres is.
- [X] Bij het fout invoeren van een wachtwoord moet de user 60seconden wachten.
- [X] Er wordt gevraagd aan de user om de noodzakelijke cookies te accepteren.
  
## Gebruikersrollen:
Administrator heeft toegang tot
- [X] In -en uit te loggen
- [X] Beheren van gebruikers en de applicatie
- [X] Verwijderen van non-admin users
- [X] Een user promoten tot admin.
  
User heeft toegang tot
- [X] In -en uit te loggen
- [X] Bijwerken van profiel
- [X] Wijzigen van wachtwoord
- [X] Zoeken naar publieke blog posts
- [X] Toevoegen van comments aan publieke blog posts
- [X] Toevoegen, wijzigen of verwijderen van eigen blog posts
- [X] Publiceren van blog posts
- [X] Maken of verwijderen van bloggroep
 
User Group Administrator heeft toegang tot
- [X] Alle User rechten
- [X] Toevoegen of verwijderen van bestaande of niet-bestaande users aan een bloggroep
- [X] Toevoegen en wijzigen van blog posts behorende tot de bloggroep waarvan de user lid is
  
User Group Member heeft toegang tot
- [X] Alle User rechten
- [X] Wijzigen van blog posts behorende tot de bloggroep waarvan de user lid is
  
Visitor heeft toegang tot
- [X] Maken van een user account
- [X] Zoeken naar publieke blog posts
- [X] Bekijken van publieke blog posts

## USER RECHTEN:
- [X] Een user kan zijn profiel bekijken.
- [X] Een user kan zijn gegevens aanpassen.
- [X] Een user kan zijn account verwijderen
- [X] Een user kan zijn gegevens exporteren via E-mail.
- [X] Een Admin user heeft Full rechten. Kan een post bijwerken of verwijderen indien nodig ook een post aanmaken.

## PERSOONLIJKE GEGEVENS EN BESCHERMING:
- [X] GDPR wordt toegepast aan de website
- [ ] Website zal conform zijn met de privacy wetgeving.
- [X] Onderaan op de website op elke pagina zal er de privacyverklaringen staan.
- [X] Een user is op de hoogte van het gebruik van noodzakelijke cookies.
- [X] Een user kan contact nemen zaols vermeld in de privacyverklaring.

## BLOG:
- [X] Een user kan gewoon zijn eigen posts aanpassen of verwijderen.
- [X] Een user kan andere posts Liken & opmerkingen toevoegen.
- [X] Een Admin user kan alle posten bijwerken of verwijderen.

## Injections : App is beveiligd tegen onderstaande injections. 
- [X] CSRF
- [X] HTML injection
- [X] CSS injection
- [X] XSSI
- [X] Clickjacking
- [X] XSS
- [X] SQL injection
- [X] Command injection
  
  
# Threat model
*describe your threat model. One or more architectural diagram expected. Also a list of the principal threats and what you will do about them*
  * Link naar andere Interne/externe [diagrammen](https://github.com/EHB-TI/web-app-defenders/blob/main/Diagrammen/DIAGRAMMEN.md)
  
 ![External Services architectuur](https://github.com/EHB-TI/web-app-defenders/blob/main/Diagrammen/external%20services%20architectuur.png?raw=true)
  
| Naam | Bedreiging | Actie | Component | Status |
| :-----: | :-: | :-: | :-: | :-: |
| Encryptie naar MySql DB | Ondershepping van informatie tussen App en DB (MITM attack) | Communucatie naar de DB zal geencrypteerd worden aan de hand van Certificate | Data Stream en Database | ☑️ |
|Cryptographic Failures | Het niet gebruiken van Cryptografie voor gevoelige data.| Gevoelige data zal geencrypteerd & gehashed worden. | Wachtwoorden | ☑️ |
|Broken Access Control | De toegang verlenen voor onbevoegden op de componenten | Beveiliging via Authorisatie & authenticatie. | Beheer van Gebruikersrechten mechanisme | ☑️ |
|Injection | Bv: Gebruikers Data Is niet gevalideerd.  | Built-in mechanism voor XSS attacks + validaties langs de server-side.| Bestanden (zoals fotos), input velden & formulieren | ☑️ |
|Insecure Design | App Architectuur kwetsbaarheid  | Testen and building van de app op regelmatige basis. | Applicatie zelf & Bug's die componenten kunnen impacteren | ☑️ |
|Security Misconfiguration | Misgebruik van User rechten | Verwijderen/disabelen van onnodige rechten & features. Een Solid Security systeem implementeren.  | Bv: verwijderen van een Blog | ☑️ |
|Vulnerable and Outdated Components| Gebruik maken van niet up-to-date componenten. | Updates installeren op regelmatige basis + zien dat alle componenten altijd compatibel blijven. | programmeer taal zelf & extra features die van een derde partij komen | ☑️ |
|Software and Data Integrity Failures| Installeren van Plug-ins en en libraries van onvertrouwde bronnen. | Goed opletten dat plug-ins/libraries van vertrouwde websites/bronnen afkomstig zijn. | Kan impact hebben op heel het programma, afhankelijk waarvoor die plug-in/biblitohteek gebruikt is | ☑️ |
|Security Logging and Monitoring Failures | App zonder logging systeem. Untracked belangrijke activitieten van de users| Loggen van belangrijke activiteiten. | Authenticatie & Autorisatie mechanisme | ☑️ |
|Server-Side Request Forgery (SSRF) | Unvalidated User supplied URL  | We valideren alle data die van een user komt.| Local File Inclusion & toegang tot bestanden & toegang tot een service webserver | ☑️ |

 [Bron: OWASP Web Application Security Risks](https://owasp.org/www-project-top-ten/)
 
* Downgrade-attacks en cookie hijacking tegen te gaan
     * HSTS preload list
          * beleid/mechanisme dat een internetverbinding forceert via een beveiligd HTTPS-kanaal
 * man in the middle
     * DNS CAA encryt
          * Certificate Authority Authorization is een DNS record die voor extra beveiliging van je domeinnaam zorgt. In het specifiek helpt een CAA record voor een extra       validatieslag bij de uitgifte van SSL-certificate
  
* Spoofing attack
   * Auth0 login & register
        * het verkrijgen van toegang tot de inloggegevens van een specifieke persoon.
  
* kwaliteit van de SSL-beveiliging van een server
     * Domain krijgt een A op de website van 'ssllabs.com/ssltest'
          * Het SSL-certificaat wordt gecontroleerd op geldigheid en betrouwbaarheid, Ondersteuning van de server voor SSL protocollen, Support van de server voor uitwisseling van de sleutel, Ondersteuning van de codering (cipher).
  
* URL-manipulatie en -vergiftiging
     * Signed URL
          * geven in de tijd beperkte toegang tot bronnen aan iedereen die in het bezit is van de URL, ongeacht of de gebruiker een Google-account heeft

* Valse e-mail adressen
     * Bevestiging account via mail met Mailtrap
          * verifiëren tegen uit bekende datalekken openbaar geraakte wachtwoorden. Api die wachtwoorden dat meer dan 300 keer als has been pwned markeert weigert

* SQL-injectieaanvallen zoals XSS 
     * PDO-parameterbinding
          * waarden die als bindingen worden doorgegeven, niet hoeft op te schonen
          * Build-in mechanism van Laravel {{  }}
  
* CSFR attacks 
     * Onbevoegde activiteiten op de website 
          * We injecteren een verborgen CSFR token in forms om de aanvraag te valideren. 
* PHP-SHELLScript upload attack
     * validatiefunctionaliteit
          * Een minimale en maximale bestanduploadsgrootte instellen, beperking van het aantal gelijktijdige bestandsuploads, Hernoem alle bestanden bij het uploaden, Upload bestanden naar een niet-openbare map, 

  
* Verbroken authenticatie
     * Inlogpogingen met een snelheidslimiet 
         * Bij een foute wachtwoord voor een inlog poging, moet de user 60 seconden wachten

  
* Blootstelling aan gevoelige gegevens
     * salted hashing-functie - Bcrypt
         * Hash alle wachtwoorden, zijn hashfuncties waarbij de werkfactor in de loop van de tijd kan worden verhoogd naarmate het processorvermogen toeneem

 ## STRIDE-by-element
 | BEDREIGING | EIGENDOM VIOLATED | BEDREIGING DEFINITIE
| :-----: | :-: | :-: |
|S -> Spoofing identity		|= Athentication		|--- Doen alsof je iets of iemand anders bent dan jezelf|
|T -> Tampering with data	|= Integrity		|--- Iets wijzigen op schijf, netwerk, geheugen, ...|
|R -> Repudiation		|= Non-repudiation	|--- Beweren dat je iets niet hebt gedaan of niet verantwoordelijk was|
|I -> Information disclosure	|= Confidentiality	|--- Informatie verstrekken aan iemand die niet bevoegd is om er toegang toe te krijgen|
|D -> Denial of service		|= Availability		|--- Exhausting resources die nodig zijn om service te verlenen|
|E -> Elevation of privilege	|= Authorization		|--- Iemand iets laten doen waartoe hij niet bevoegd is|
    
### Spoofing
Oplossing
* Auth0 als authenticatiesysteem.
* Inlogpogingen beperken.
* E-mail wordt geverifieerd bij registratie; De gebruiker ontvangt een mail met een verificatiecode (die verloopt) om de e-mail te bevestigen.
* Implementatie van een correct wachtwoordbeleid; Minimumlengte voor het wachtwoord. Controleren of wachtwoord is blootgesteld geweest.
* Opnieuw authenticatie vereisen voor gevoelige features zoals het verwijderen van een account of het wijzigen van het wachtwoord.
* Identificatie van de client op basis van client en browser data. Een server kan verdachte User-Agents beperken of detecteren om spoofing te voorkomen.

### Tampering
Oplossing
* Correcte validatie van user input.
* Permissies

### Repudiation
Oplossing
* Logging: illegale operaties in een applicatie traceerbaar maken.
 
### Information disclosure
Oplossing
* Encryptie van data
* ACLs

### Denial of service
Oplossing
* Data Encryptie
* Permissies
    
### Elevation of privilege
  
    
# CI/CD & Deployement 
    
## Public URL
    
```sh
 https://www.ehbdefendersblog.com/   
```


## Beschrijving deployment 
- Telkens als er een code wordt gepushed naar de main branch of er gebeurt een merge in de main branch onze [Azure Pipeline](https://dev.azure.com/defenders-sp/Software%20Security/_build) zal een build + deployment proces starten.
    
- Eerste stap is de code clonen van de [GitHub Repo](https://github.com/EHB-TI/web-app-defenders).
Tweede stap is de app builden en testen. We kunnen deze proces volgen op [Azure Pipeline](https://dev.azure.com/defenders-sp/Software%20Security/_build).
Als de build van de app succesvol verloopt, kan de code als een container worden gedeployd naar onze [Container Registry](https://portal.azure.com/#@ehb.onmicrosoft.com/resource/subscriptions/a081c48b-ed6f-45e3-9e10-dcab2b4e4ee6/resourceGroups/EHBDEFENDERS_RESOURCE/providers/Microsoft.ContainerRegistry/registries/defendersehbRegistry/overview) (full name: defendersehbregistry.azurecr.io).
    
- Tijdens de build proces wordt de container getagt met de docker build ID. Bij elke deployment proces wordt deze met 1 verhoogd.
De container met de hoogste build ID wordt automatisch gepushed naar de [Azure App Service](https://portal.azure.com/#@ehb.onmicrosoft.com/resource/subscriptions/a081c48b-ed6f-45e3-9e10-dcab2b4e4ee6/resourceGroups/EHBDEFENDERS_RESOURCE/providers/Microsoft.Web/sites/ehbdefendersapp/appServices) (waar onze app draait). Hoogste build ID = meest recente container.
    
- 2 minuten na de finale deployment zal de nieuwe container gereed staan om requests te accepteren. Deze proces wordt opnieuw in gang gezet bij elke merge of een push naar onze MAIN branch.
