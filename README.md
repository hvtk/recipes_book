# recipe_book
An recipe book made in Laravel with MySQL on Ubuntu(Linux)

# To start a laravel project, these parts are important:

The used version of MySQL: mysql  Ver 8.0.30 for Linux on x86_64 (MySQL Community Server - GPL)

The used version of PHP: PHP 7.4.3 (cli) (built: Jun 13 2022 13:43:30) ( NTS )

I have used Visual Studio Code as my source-code editor.
There are also some extensions I have installed:
Laravel Blade snippets / PHP Namespace Resolver / PHP Intelephense

To make a laravel project I have installed composer. 
After installed composer you have to install laravel for composer:
composer global require laravel/installer 

After install laravel on composer, you can make a new laravel project with command:
laravel new recipe_book

'recipe_book' is the name from your laravel project.

The structure from this project is based on a tutorial on YouTube that I have followed:
Laravel From Sreatch 2022 | 4+ Hour Course  https://www.youtube.com/watch?v=MYyJ4PuL4pY&t=480s  

I use tailwindcss from the website, not integrated in the project. So there is a <script> in the layout.blade

(The info behind is in dutch because it is a memonic for me)
Wat moet er in een receptenboek komen (de eerste opzet):
- het recept
- recept rubrieken
- keukengerei
- uitleg over het keukengerei
- ingrediënten
- hoeveelheid van de ingrediënten
- afbeeldingen van de ingrediënten
- uitleg over de ingrediënten
- de stappen die gedaan moeten worden
- die geschatte tijd die nodig is om het recept te maken
– een afbeelding van het eindresultaat
– de houdbaarheid
– commentaar

gebruikersaccounts:
Inloggen / uitloggen | Mijn account, naam aanpassen
Vrienden met andere gebruikersaccounts | recepten delen | toegangsrechten tot recepten managen
recepten:
Maken / aanpassen / verwijderen
Ingredientenlijst → Berekening kosten
Stappen, volgorde van stappen
Automatische doorrekening voor een hoeveelheid personen
ingredientendatabase:
Kosten per item/gewicht


Business requirements:

Het "doel" is het maken van een receptenboek waarin alle info staat die nodig is voor het maken van een recept en andere info die je over een recept wilt weten zoals: maak tijd, houdbaarheid, allergie, voor hoeveel personen, welk keukengereedschap heb je nodig, de ingredienten ect.
Het "resultaat" is het snel kunnen vinden van een recept voor bepaalde situaties, voor bepaalde allergien, voor een x-aantal personen ect.


Functionele eisen:

Het kunnen omschrijven van alles wat van belang is voor het maken van een recept en de informatie over een recept, denkend aan bv. voor hoeveel personen het is, allergenen info.
De info van het recept wordt opgeslagen in een database.
De recepten zijn door andere gebruikers in te zien, mits de maker dat wil. Dit moet dus in te stellen zijn.
Er moet een database zijn van het keukengereedschap. Deze database moet door de gebruiker aan te vullen zijn. Ook moet deze database gebruikt kunnen worden als zoekopdracht voor recepten waar bepaald keukengereedschap voor nodig is.
Er moet een database zijn van ingredienten. Deze database moet door de gebruiker aan te vullen zijn. Ook moet deze database gebruikt kunnen worden als zoekopdracht voor recepten met bepaalde ingredienten. De ingredienten moeten op gewicht/hoeveelheid en kosten per item/gewicht aangeduid worden en aangeven voor hoeveel personen een bepaald recept is, zodat deze informatie gebruikt kan worden om automatisch de hoeveelheid ingredienten voor meerdere personen uit te laten rekenen. Ook moet het programma de uiteindelijke prijs aan kunnen geven.
Er moet een profiel of account aan te maken zijn met daarin de mogelijkheid om de Whatsapp, Instagram, Facebook adressen in te vullen zodat mocht de gebruiker dit willen je vrienden met andere gebruikers kan worden. Ook moet er een optie zijn om dit naar aanleiding van het gebruikersaccount van het receptenboek te doen. Er moet een optie zijn om de info in het account of profiel aan te passen. Ook moet het mogelijk zijn je email en/of wachtwoord aan te passen.
De recepten moeten op een eenvoudige manier te managen zijn. Dus aan te passen, verwijderen, alle recepten verwijderen van een specifieke gebruiker.
Ter verduidelijking moet het mogelijk zijn om van alles wat voor het recept nodig is een afbeelding te plaatsen. Mocht de gebruiker het handig vinden moet het ook mogelijk zijn een bestand toe te voegen.
In eerste instantie moet het recept bestaan uit de volgende onderdelen:
de naam van het recept
een rubriek. bv bakken/braden/frituren
keukengerei met de nodige uitleg
allergenen info
ingredienten: -hoeveelheid
-prijs per onderdeel
-voor hoeveel personen het recept is
-aanpassing hoeveelheid bij ander aantal personen
-optie indien mogelijk bij een bepaalde alergie
-uitleg over de ingredienten
het stappenplan voor het maken van het recept
de geschatte tijd voor het maken van het recept
de houdbaarheid van het recept en of het in te vriezen is
commentaar
Het moet mogelijk zijn het recept uit te breiden/velden toe te voegen, mocht blijken dat dat door gebruik wenselijk is.
De database moet zo gemaakt zijn dat je kan zoeken op naam/rubriek/allergie/minimun aantal personen/de geschatte tijd om het te maken
De applicatie moet goed te gebruiken zijn op een laptop/desktop/tablet/surface/smartphone


Niet functionele eisen:

De layout voor het maken van een recept moet duidelijk en overzichtelijk zijn.
De layout van het account moet duidelijk en overzichtelijk zijn.
De indeling van de gebruikte layout moet opties zoals: naar homapage, naar profiel/account, ect op dezelfde en een logische plek weergeven. Alleen die opties die in een bepaalde fase van het gebruik van de website nodig kunnen zijn, moeten aanwezig zijn.
De applicatie moet beveiligd zijn tegen misbruik.
