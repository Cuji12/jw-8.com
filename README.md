# JW-8.com

---

## Prerequisites
- Laravel Nova details
- Fly.io details

## Installation
- `git clone https://github.com/Cuji12/jw-8.com.git`
- `cd jw-8.com && cp .env.example .env`
- `sail composer install`
- `sail npm install`
- `sail up -d`
- `sail artisan key:generate`

- `sail artisan nova:install`
- `sail artisan migrate`
- `npm run dev`
- Access website at `http://localhost` and Laravel Nova at `http://localhost/nova`
- You can view the local mail server dashboard at `http://localhost:8025`

## Fly.io
### Downloading the CLI
You can look at the instructions for downloading the Fly CLI on your machine here: https://fly.io/docs/flyctl/install/
### Deployment
The app is deployed to https://fly.io, I recommend just creating a local txt file in the project outside of source control
with the following:
- `fly deploy --build-secret nova_user="cu.janeway@gmail.com" --build-secret nova_license_key="LICENSE_KEY"`

The build secrets are required to install the private repo during the build process of the containers. 

### Configuring Contact Form Email
If you want to change the email in which the contact form sends out to, you'll need to configure the secret for 
`NOTIFY_RECIPIENT` and `NOTIFY_RECIPIENT_NAME`. You can do this with the following command:
- `fly secrets set NOTIFY_RECIPIENT="YOUR EMAIL" NOTIFY_RECIPIENT_NAME="YOUR NAME"`
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

### Site Content
When it comes to adding site content via the admin dashboard, I would recommend not using tables as it's not possible
to make them mobile responsive. Feel free to add as much, or as little content, otherwise because it'll scale 
properly.
