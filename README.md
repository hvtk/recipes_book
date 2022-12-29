

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

# The basis structure for the most common recources: (also in dutch)

Wanneer je uitzonderingen wilt maken en deze niet in de routes of in de controller kunt verwerken, kun je gebruik maken van "@" directives in de blades.

In hoofdstuk 'creating a basic model' van de laragigs tutorial wordt goed uitgelegd hoe het verwijzen werkt.

Het eerste wat je doet is een database configureren.

In de config/database.php kun je aangeven van welke database je gebruik maakt. In dit project is gebruik gemaakt van mysql.

In de terminal kun je een nieuwe database aanmaken. Ook kun je via de terminal de gebruikersnaam van de database aanpassen, overzicht van de database per gebruiker enz.

De tables hoef je niet via de terminal aan te maken omdat je via laravel gebruik kunt maken van migrations. Om je table te maken gebruik je artisan: php artisan make:migration create_userProfiles_table

Na het maken van de tables moet je de migration runnen: php artisan migrate.
(hiermee worden alle migrations gerunt)

Om snel je database te kunnen testen kun je gebruik maken van database seeding.
In de migrations folder, submap seeders, kun je in file DatabaseSeeder.php instellingen maken.
Met commando: php artisan db:seed worden de instellingen geactiveerd en kun je de gegevens in de database vinden.

Nu ga je een model maken: php artisan make:model 
UserProfile

Je kan ook gebruik maken van factories om info in je database in te laten vullen met "faker".

Hierna ga je layout view maken. Deze view wordt gebruikt als basis voor al je paginas in de applicatie.

Na het maken van de view voor het weergeven van bv meerdere recepten en enkele recepten, of je profile, wordt er gekeken of je componenten kan maken.

Hierna kun je kijken of je partials kunt maken.

De standaard onderdeel routes:
index - Show all listings
show - Show single listing
create - Show form to create new listing
store - Store new listing
edit - Show form to edit listing
update - Update listing
destroy - Delete listing

Hierna maak je een controller aan met het commande: php artisan make:controller UserProfileController

Nu ga je beginnen met het maken van de create form. (de index en de show page is al gemaakt)
Voor het maken van een create form heb je ook een route nodig.
Tevens moet er ook een functie gemaakt worden in de controller.

Om een file of een image in je pagina te kunnen laden moet je in de <form> enctype="multipart/form-data" toevoegen.

Ook moet je in de controller aangeven wat er moet gebeuren met de file of image.

Om er voor de zorgen dat de image 'public' is, moet de storage folder gelinked worden aan de public/storage folder. Dit kun je doen met het link commande van artisan.

Nu maak je de edit blade met de show edit form route en de edit function in de controller.

Hierna make je de update route en de update function in de UserProfileController

Wat nog rest is de delete function.
Hiervoor moet je een route maken en een destroy(delete) function in de UserProfileController


The info behind is in dutch because it is a memonic for me.
    
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

The info behind is also in dutch. It is the premise of my application.
    
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


Kandidaatklassen  (A= associatie)

Doel					irrelevant						
Receptenboek	        irrelevant
Info					 klasse					attribuut	A				Information
Recept				     klasse	       A									Recipe
Info					redundant
Recept			  		redundant	
Maak tijd			    klasse					attribuut      A			RecipeMakeTime		
Houdbaarheid	        klasse					attribuut		A			RecipeShelfLife
Allergie				klasse					attribuut		A		AllergyType	
Hoeveel personen	    klasse			    attribuut		A			ForHowManyPersons
Keukengerei				klasse			    attribuut		A			Kitchenware
Ingredienten			 klasse			    attribuut		A			Ingredients
Resultaat				klasse				A								Result
Vinden					klasse		operatie		A					ToFind
Recept					redundant
Bepaalde situaties		klasse		A									CertainSituations					
Bepaalde allergieen		klasse		A								 CertainAllergies
Aantal personen			klasse		A									NumberOfPersons
Omschrijven					klasse		attribuut		A				Description
Maken							irrelevant										ToMake
Recept						redundant
Informatie					redudant			
Recept						redundant
Hoeveelheid personen	redundant
Allergenen info			klasse			attribuut	A					AllergyInformation
Info							redundant
Recept						redundant
Opgeslagen				klasse		operatie    A						Stored				
Database				klasse			operatie   A					Database
Recepten				klasse  operatie	A							Recipes
Andere						irrelevant
Gebruikers				klasse    A											Users
In te zien					klasse		operatie  A						 RecipesToSee		
Mits de maker dat wil		klasse		operatie  A			    	ProvidedByUser
In te stellen					klasse		operatie  A					Configure
Database				redundant
Keukengereedschap	redundant
Database				redundant
Zoekopdracht			klasse		operatie   A			        	Search
Recepten				redundant
Bepaald						klasse    A									Determined		
Keukengereedschap	redundant
Database				redundant
Ingredienten			redundant
Database				redundant
Gebruiker					redundant
Aan te vullen			klasse			operatie   A			    ToFillIn		
Database				redundant
Zoekopdracht			redundant
Recepten				redundant
Bepaald					redundant
Keukengereedschap	redundant
Ingredienten			redundant
Ingredienten			redundant
Gewicht						klasse			attribuut   A			Weight
Hoeveelheid		klasse			attribuut   A						Quantity
Item		klasse			attribuut   A								Item
Kosten per gewicht		klasse  attribuut   A					    CostPerWeight
Kosten per hoeveelheid		klasse  attribuut   A			        CostPerQuantity
Kosten per item		klasse  attribuut   A					        CostPerItem
Aangeven					klasse   A									Indicate							
Hoeveel personen		redundant									
Bepaald recept			klasse  A									CertainRecipe								
Informatie					redundant	
Automatisch				klasse		operatie   A			    	Automatic
Hoeveelheid 			klasse   A									 Quantity
Rekenen					klasse			operatie	A			     ToCalculate
Programma				irrelevant
Uiteindelijke prijs		klasse			operatie	A			    FinalPrice
Profiel						klasse   attribuut	A					Profile	
Account					klasse		attribuut	A					Account
Mogelijkheid			klasse			operatie	A		      	Possibility
WhatsApp			klasse		attribuut	A					    WhatsApp
Instagram			klasse		attribuut	A					    Instagram
Facebook			klasse		attribuut	A					    Facebook
Adressen			klasse		A									SocialMediaAddress
Gebruiker			klasse		A									User
Vrienden			klasse	A										Friends
Andere gebruikers		klasse	A							        OtherUsers
Optie					klasse		operatie	A				    Option
Info 					redundant
Aan te passen	klasse		operatie	A				            ToChange
Recepten			redundant
Mogelijk			redundant
Name 	klasse		attribuut		A							    Name
Email 	klasse		attribuut		A							    Email
Wachtwoord 		    klasse		attribuut	A			 	        Password	
Eenvoudige			irrelevant
Managen				klasse		operatie	A			            ToManage	
Verwijderen			klasse		operatie	A			            ToDelete
Alle verwijderen		klasse  operatie	A			            ToDeleteAll
Specifieke				redundant (search)			
Verduidelijking			klasse		A							    Clarification								
Afbeelding				klasse		A							    AddImage
Bestand toevoegen       klasse 	A						            AddFile
Onderdelen				klasse	A								    RecipeParts
Naam						klasse    attribuut		A		        RecipeName
Rubriek						klasse		attribuut	A			    RecipeSection
Keukengerei				redundant
Uitleg						klasse		attribuut	A				RecipeExplanation	 
Stappenplan recept		klasse		attribuut	A	            	RecipeRoadmap	
Geschatte tijd			redundant
Houdbaarheid			redundant
In te vriezen			klasse			attribuut	A			    RecipeToFreeze
Commentaar			klasse			attribuut	A			        RecipeComment
Uitbreiden					klasse		operatie	A			    ToExpend
Velden toevoegen   klasse		operatie	A			            AddFields
Wenselijk					irrelevant
Zoeken						redundant
Gebruiken				klasse	A									ToUseBy
Laptop					klasse		attribuut	A					Laptop
Desktop				klasse		attribuut	A						Desktop
Tablet					klasse		attribuut	A						Tablet
Surface				klasse		attribuut	A						Surface
Smartphone			klasse		attribuut	A					    Smartphone
Layout					irrelevant
Duidelijk				irrelevant
Overzichtelijk		irrelevant
Indeling				irrelevant
Homepage		irrelevant
Logisch				irrelevant
Fase				irrelevant
Bepaalde		klasse	A											Particular										
Aanwezig		klasse	A											Present						
Beveiligd		klasse	A												Secured
Misbruik		irrelevant							
Recipe section option		klasse  A							    RecipeSectionOption
Database Kitchenware		klasse	A						        DatabaseKitchenware
Database Ingredients		klasse 	A							    DatabaseIngredients
Authentication				klasse	A								Authentication
Register						klasse 		operatie	A			Register
Login						klasse  	operatie	A				Login
Logout					klasse  	operatie	A					Logout
																A	UserFirstName
																A	UserLastName
																A   UserStreet
																A	UserStreetnumber
																A	UserPostalcode
																A   UserCity
																A	UserCountry
																A	UserBirthday
																A   UserGender
																A	UserPhonenumber
    
Class-diagram frist intent:

![class-diagram](https://user-images.githubusercontent.com/75074496/192549060-f5a09815-eda8-44f6-b1b2-ebfc4bc997c6.svg)


Class-diagram second intent:

![class-diagram rev B](https://user-images.githubusercontent.com/75074496/193286548-57b10bde-5fa9-4d84-8467-43d2d30132cb.svg)


Class-diagram third intent (for the time being the starting point for the application)

![class-diagram rev A](https://user-images.githubusercontent.com/75074496/193009536-e98ca33c-720c-4342-aa0b-86de8534f2dc.svg)


Class-diagram fourh intent (for the time being the first revision from the starting point for the application)
![class-diagram rev C](https://user-images.githubusercontent.com/75074496/201524243-a3a95a20-3332-42f7-808e-3ea17cce0448.svg)

