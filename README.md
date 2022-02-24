# chatApplicationPractice

The following information is what I chose to do and why for the purposes of this coding challenge. 

Name: Jake McCarthy
Time to complete: Rough estimate, 5 hours
most of that was spent reading documentation to learn about laravel and figuring out little syntax things. 
Can only provide a rough estimate as project was completed in between work for current employer, including weekends. 

1. set up docker, vscode, and laravel. 
- Chosen because I was familiar with docker and I didn't want to spend too much time setting up a server.
- Chosen because I wanted to learn the tools used by giftogram 
- Chosen because at worst,  I add another tool to the belt for my current Job. 

2. Setting Up laravel was pretty striaghtforward, Added Pusher because I would need real time updates for a chat API
- made a note to look into the lighter version of this library, which may be better for a mobile app

3. set up routes using API responses

4. over-complicated the project:
- added pusher, thought the project was far more complicated than it was. 
- after recieving advice to keep it simple, things went smoother. 


5. Potential changes for the project
- Unfinished: 
- error response was not being correctly set. Chose to move on and see if I could hit this before submission. Estimated time to fix, 1 hour to figure out user registration error, substantially less time after that. 


- General Changes: 
- checks for whether or not user who is being sent a message exists
- routes that included response bodies do not include response codes, so I would be adding these.
- Theory: wanted to look into setting up routes to include an index page style set up. (Similar to how ruby on rails sets up there index pages. 
- for example, when a user visits messages/ they would recieve a response of all the current chats that user is having. They would then be able to use that information to send a request for a specific chat. 


- Adding functionality:
- sending users messages to a "chat" model, and adding users to that chat model would allow the support of group messaging. 
- this would also allow us to have relationships that would let users invite users to chat (keeps users from getting messages they don't want)
- allow users to block each other
- and can be built out and customized a little more easily. 
- Included a few concepts in the migrations that were left over from the over complication. 

4. Identified middleware for throttling
- I had asked about this prior to starting the project, and I was really impressed by how early the laravel documentation included middleware, and included an example of throttling requests. 
- as this seemed easy to configure, this would be one of the last things I would set up

5. 





<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

