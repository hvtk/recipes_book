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
