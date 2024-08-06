<h1>About this Project</h1>
<ul>
    <li>This is two pages web application</li>
        <ul>
            <li>Admin page [Admin can delete and update any user's blog after successfully login]</li>
            <li>User page   [User can only delete , create and update their own blog after sucessfully login] </li>
        </ul>
    <li>Using laravel/breeze for user authentication </li>
    
</ul>

## LARAVEL version 11
## PHP VERSION 8.2.12
## composer version 2.7.6
<hr>

<h1>How to run this web on your System </h1>
<ol>
    <li><h3> For Windows</h3></li>
    <ol>
        <li><h4>Composer Installation</h4></li>
            <ol>
                <li>Go through the link for Composer... https://getcomposer.org/</li>
                <li>Download the Composer-Setup.exe file, which is the Windows installer... or  by clicking this link   https://getcomposer.org/Composer-Setup.exe </li>
                <li>run the installer</li>
                    <ul>
                        <li>Double-click the Composer-Setup.exe file you downloaded.</li>
                        <li>Follow the prompts in the installation wizard. It will guide you through installing Composer and configuring it for your PHP installation.</li>
                    </ul>
                <li>Verify Installation</li>
                    <ul>
                        <li>Open Command Prompt (cmd) or PowerShell or (Windows+R) -> then open=> 'cmd'</li>
                        <li>Type composer --version and press Enter.</li>
                        <li>You should see the Composer version number, confirming the installation was successful.</li>
                    </ul>
                <li></li>
            </ol>
        <li><h4>Xampp Installation</h4></li>
            <ol>
                <li>Download XAMPP</li>
                <ul>
                    <li>Visit the XAMPP official website by clicking this link... https://www.apachefriends.org/ </li>
                    <li>Click on the "Download" button for Windows.</li>
                    <li>Choose the version of XAMPP you want to install and download the installer.</li>
                </ul>
                <li>Run the Installer</li>
                <ul>
                    <li>Locate the downloaded .exe file (e.g., xampp-windows-x64-x.x.x-0-setup.exe) and double-click it to start the installation process.</li>
                </ul>
                <li>Follow Installation Wizard</li>
                <ul>
                    <li>The XAMPP Setup Wizard will open. Click "Next" to proceed</li>
                    <li>Choose the components to install (i.e Apache, MySQL, PHP, etc.). By default, all components are selected</li>
                    <li>Choose the installation folder. The default is usually C:\xampp, but you can change it if desired.</li>
                    <li>Click "Next" and then "Install" to start the installation process.</li>
                </ul>
                <li>Complete Installation</li>
                <ul>
                    <li>Once the installation is complete, you can start the XAMPP Control Panel. You may be prompted to start the Control Panel automatically; if not, you can find it in the XAMPP installation directory.</li>
                </ul>                
                <li>Start Services</li>
                <ul>
                    <li>In the XAMPP Control Panel, start the Apache and MySQL services by clicking the "Start" buttons next to them.</li>
                    <li>You should now be able to access http://localhost in your web browser to see the XAMPP dashboard.</li>
                </ul>
            </ol>
        <li>Open phpMyAdmin from Xampp control panel.</li>
            <ul><li>create database and named it as 'blog_app'</li></ul>
        <li>open blog_app project directory from terminal or cmd </li>
            <ul>
                <li>run command for database migration~  'php artisan migrate' </li>
                <li>After sucessfully migration run this command~ 'php artisan serve' </li>
                    <ul>
                        <p>You will see this types of message in your terminal</p>
                        <li>Server running on [http://127.0.0.1:8000].
                            Press Ctrl+C to stop the server
                        </li>
                        <li>You can open browser and type localhost::8000 or 127.0.0.1:8000 or Ctrl + click the link which is show in your terminal or cmd</li>
                    </ul>
                <h5>Follow those steps You'll able to successfully runs this application </h5>
            </ul>
    </ol>
    <li>For Linux</li>
        <ol>
             <li><h4>Composer Installation</h4></li>
            <ol>
                <li>Open a terminal window.</li>
                <li>Install PHP and required packages. For example, on Ubuntu:
                    <pre><code>sudo apt updatesudo apt install php-cli php-mbstring unzip curl</code></pre>
                </li>
                <li>Download Composer:
                    <pre><code>curl -sS https://getcomposer.org/installer -o composer-setup.php</code></pre>
                </li>
                <li>Install Composer:
                    <pre><code>php composer-setup.php --install-dir=/usr/local/bin --filename=composer</code></pre>
                </li>
                <li>Verify Installation:
                    <pre><code>composer --version</code></pre>
                </li>
            </ol>
            <li><h4>XAMPP Installation</h4></li>
            <ol>
                <li>Download XAMPP:</li>
                <ul>
                    <li>Visit the XAMPP official website: <a href="https://www.apachefriends.org/">https://www.apachefriends.org/</a></li>
                    <li>Click on the "Download" button for Linux.</li>
                    <li>Download the `.run` installer file (e.g., `xampp-linux-x64-x.x.x-0-installer.run`).</li>
                </ul>
                <li>Make the Installer Executable:
                    <pre><code>chmod +x xampp-linux-x64-x.x.x-0-installer.run</code></pre>
                </li>
                <li>Run the Installer:
                    <pre><code>sudo ./xampp-linux-x64-x.x.x-0-installer.run</code></pre>
                </li>
                <li>Start XAMPP:
                    <pre><code>sudo /opt/lampp/lampp start</code></pre>
                </li>
                <li>Access XAMPP:
                    <ul>
                        <li>Open your web browser and navigate to <a href="http://localhost">http://localhost</a>.</li>
                    </ul>
                </li>
            </ol>
            <li>Open phpMyAdmin from the XAMPP Control Panel:</li>
                <ul>
                    <li>Create a database and name it 'blog_app'.</li>
                </ul>
             <li>Open the `blog_app` project directory from the terminal:</li>
            <ul>
                <li>Run the command for database migration: `php artisan migrate`.</li>
                <li>After a successful migration, run: `php artisan serve`.</li>
            <ul>
                <p>You will see a message similar to this in your terminal:</p>
                <li>Server running on [http://127.0.0.1:8000].</li>
                <li>Press Ctrl+C to stop the server.</li>
                <li>You can open your browser and type `localhost:8000`, `127.0.0.1:8000`, or Ctrl + click the link shown in your terminal.</li>
            </ul>
            <h5>Follow these steps, and you'll be able to successfully run the application.</h5>
        </ul>
    </ol>
</ol>
<hr>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
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

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

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
