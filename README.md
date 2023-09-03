# JW-8.com

---

## Prerequisites
- Laravel Nova details
- Fly.io details

## Installation
- `git clone https://github.com/Cuji12/jw-8.com.git`
- `cd jw-8.com && cp .env.example .env`
- `sail up -d`
- `sail artisan key:generate`
- Create an auth.json file in the root directory with the details for Laravel Nova.
- `sail composer install`
- `sail npm install`
- `sail artisan nova:install`
- `sail artisan migrate`
- `sail npm run dev`
- Access website at `http://localhost` and Laravel Nova at `http://localhost/nova`


## Useful Information
### Configuring a Sail shell alias
- Run the following command in your terminal: `alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'`.
  To make this permanent, add it to your `~/.bashrc` or `~/.zshrc` file.

### Laravel Sail
All commands you use to interact with the Laravel application should use the `sail` prefix. E.g. running migrations
would be `sail artisan migrate`. The same goes for creating models, Laravel Nova resources etc.

### Laravel Nova
You need to store the Laravel Nova credentials in an auth.json file so `composer install` can successfully
install the private repository. Refer to the Laravel Nova documentation for commands, fields and all the rest: https://nova.laravel.com/docs/4.0/resources/.

#### Useful Nova Commands:
- `sail artisan nova:resource {resource-name}` - Create a new resource
- `sail artisan nova:user` - Create a new user

#### Admin Access
Emails for admin access are whitelisted in the `gate()` method of the `NovaServiceProvider`. You can add your email there.

### TailwindCSS
If you need to extend the Tailwind library with colours / new breakpoints, you can do so in the `tailwind.config.js` file. For further
information refer to the TailwindCSS documentation: https://tailwindcss.com/docs/configuration.
