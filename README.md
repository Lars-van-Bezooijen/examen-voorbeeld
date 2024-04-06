<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Solar Panel App Install:
- git clone this repository
- composer install
- copy .env.example .env
- fill your personal .env data (database, mailserver etc)
- php artisan key:generate
- php artisan migrate
- php artisan db:seed
- npm run dev
- php artisan serve

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).




Conventies
 - Naamgeving van variabelen
 - Bestands namen en structuur
 - Welke packages je gebruikt (Bijv. Tailwind of normale CSS)
 - Database tabellen/fields benaming (En bijv. altijd een id)
 - Curly brackets op volgende regel of zelfde regel
 - PSR-standaarden (Globale PHP conventies)

Werkafspraken
 - Wat doe je als je later komt
 - Hoe het reviewen er uit ziet van een ticket
 - Hoe doen we pauzes
 - Verantwoordelijkheden per persoon (Bijv. iemand checkt alles van de databases na, soort rollen)
 - Wat doe je als het niet goed gaat in het groepje

Definition of Done
 - Afsprakenlijst van wat er moet gebeuren voordat iederen ticket op afgerond gezet mag worden
 - Voorbeelden: 
    . Ticket moet gereviewed worden door iemand anders
    . De opgeleverde code voldoet aan de conventies
    . Alle acceptatiecriteria is behaald van de user story
    . De ticket staat in de master branch (iedereen kan het pullen en testen)

User stories
 - Format: Als (rol) wil ik (functie), zodat (reden)
 - Maak de lijst van user stories geordend (Bijv. per rol een lijstje of per entiteit)
 - Alle user stories is je product backlog

Planning
 - Je gaat niet heel de product backlog maken
 - Maak een sprint backlog: verzamel alle user stories die je kan uitwerken in deze sprint
    . Wordt gekeken of je de juiste user stories kiest, zodat je de kern van de applicatie werkend heb
    . Elke user story in de sprint planning krijgt minimaal 4 acceptatiecriteria (Wanneer is de userstory af?)
 - Kanban bord (Kolom ideeën: Product backlog, Todo (Sprint planning), In progress, Ready for review, In review, Done en eventueel een kolom voor tickets waar niemand mee verder komt)
 - Wordt er actief bijgehouden wie wat aan het doen is op het kanban bord

--- 

Wireframes
 - Je werkt een aantal user stories uit in de flow van de user story in wireframes, je hoeft niet heel de applicatie te maken (Bijv. geen login)

Activiteitendiagram (swimming lanes)
 - Uitwerken van de flow van een functionaliteit
 - Maak alleen activiteitendiagrammen van functionaliteiten die moeilijk kunnen zijn. Of kies iets waar iedereen anders over kan denken (Geen inloggen)
 - Voorbeeld webshop betaling:
    . Gebruiker vult zijn gegevens in
    . Gebruiker klikt op volgende
    . Validatie check: Zijn de gegeven juist
    . Ja -> doe dit. Nee -> doe dat 
    . Etc...
 - Geef boven de swimming lanes de user story aan waar het om gaat (de functionaliteit)
 - Er is maar één startpunt en eindpunt

ERD
 - Naamgeving tabellen en fields
 - Aangeven of het PK of FK is
 - Pijlen many to one, many to many (koppeltabel)
 - Wat voor datatype het gaat worden in de database
 (- Many is altijd de 3 poot symbool en wijst altijd naar de FK)

Sitemap
 - Hiearchie van de website
 - Homepagina -> waar kan je vanaf hier heen. Dit steeds verder uitwerken naar beneden
 - Pluspunt: 2 sitemaps: Als je bent ingelogd en niet ingelogd

--- 

Code / Ontwikkelen
 - Is de code efficiënt geschreven? (Bijv. database queries)
 - Is er nagedacht over validaties
 - Staan er logische comments (Bijv. bij een rare oplossing voor iets wat niet gelijk duidelijk is voor een ander)
 - Of variable en functie namen duidelijk zijn (Beschrijven ze zichzelf goed genoeg)
 - Is de projectstructuur en bestandenstructuur netjes

Git
 - Commits: zijn de descriptions duidelijk voor wat je hebt gedaan
 - Werk je netjes in branches (Tenzij anders aangegeven in de conventies)

Daily standups
 - Je begint elke dag met een daily standup
    . Je zegt wat je gister heb gedaan, wat je gaat doen en of je ergens nog gaat tegen aanlopen
 - Beoordeling:
    . Niet te lang - 5-10 min (Stopwatch)
    . Reageren op elkaar en niet alleen luisteren

Tests
 - Komer er per test de acceptatie criteria terug
 - Komt er validatie checks terug? Edge cases bedenken per user story
 - Per test bepalen ja of nee
 - Ruimte voor opmerkingen, ook als de test slaagt
 - Uit de testen komt een testrapport

Retrospective
 - Ene laatste dag van het examen
 - Einde van een sprint ga je met zijn allen doorlopen hoe het is gegaan
 - Doel: Je reflecteert op je zelf. Wat heb je goed gedaan, wat minder. En hoe kan je het oplossen.
 - Ook als groep kijken wat er goed en minder ging. Hoe ga je dit volgende keer voorkomen.

Presentatie / Individuele oplevering
 - Laatste dag
 - Eerst met het groepje demonstreren (Mag het presentatie ervoor, duurt ongeveer 10 min)
 - Beoordeling presentatie:
    . Genoeg oogcontact met de klant. Je geeft een demonstratie aan de klant. Interactie
    . Iedereen moet een rol hebben in de presentatie
    . Hoe ga je om met errors/bugs? Bijv. Heb je gedacht aan oplossingen en noem deze. Niet de error uitleggen aan de klant.
    . Presenteer het alsof je het aan het verkopen bent
 - Individuele oplevering:
    . Meer technisch
    . Begrijp je het programma volledig
    . Vragen over functies hoe het werkt
    . Wat als je meer tijd had om dit beter te maken?
    . Wat is een stuk code waar je trots op bent?

 