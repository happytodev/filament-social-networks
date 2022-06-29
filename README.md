
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# Filament plugin to set and display your social networks icons on your website

[![Latest Version on Packagist](https://img.shields.io/packagist/v/happytodev/filament-social-networks.svg?style=flat-square)](https://packagist.org/packages/happytodev/filament-social-networks)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/happytodev/filament-social-networks/run-tests?label=tests)](https://github.com/happytodev/filament-social-networks/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/happytodev/filament-social-networks/Check%20&%20fix%20styling?label=code%20style)](https://github.com/happytodev/filament-social-networks/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/happytodev/filament-social-networks.svg?style=flat-square)](https://packagist.org/packages/happytodev/filament-social-networks)

This is a filamentphp plugin. It helps you to define the social networks you use in the filament backend, and display it on your website using Blade component provided.

![SCR-20220627-oj1](https://user-images.githubusercontent.com/425998/176250855-ed1c5a7a-f087-4542-9dd6-ee6d80f2b5f9.png)
_Display your social networks on your front with the help of Blade component provided in this plugin_

![SCR-20220628-pu3](https://user-images.githubusercontent.com/425998/176250895-86ba5af1-05b5-4570-81ec-cb2c7cd2ad22.png)
_List of all of your social networks_

![SCR-20220628-puf](https://user-images.githubusercontent.com/425998/176250917-c31b71c2-a5de-432a-a5e9-147c1469200a.png)
_Detail of one of your social network_

## Functionnalities

- possibility to add, modify, delete, list social networks among the following 21 : 
    - DevianArt
    - Discord
    - Facebook
    - Github
    - Instagram
    - LinkedIn
    - Medium
    - Pinterest
    - Reddit
    - Skype
    - Snapchat
    - Soundcloud
    - Telegram
    - TikTok
    - Tumblr
    - Twitch
    - Twitter
    - Vimeo
    - WattPad
    - WhatsApp
    - Youtube
- easy to install as Filament plugin (see below)
- possibility to use OrbitPHP or classical driver database
- social networks icons provided by default via svgporn
- possibility to add your custom icons if you want
- possibility to activate or not a social network
- by default link open in a new tab (target='_blank')

## On the roadmap

- [x] add more social networks
- [ ] improve form appearance
- [ ] deactivate already selected social network
- [ ] provide more Blade component to display on front
- [ ] add localization
- [x] add possibility to search the social network in the list
- if you have an idea of improvment, let me know !

## Support us

If you want and if you can, you can [sponsorship](https://github.com/sponsors/happytodev) this project. 

It will help me a lot ;-)


## Installation

You can install the package via composer:

```bash
composer require happytodev/filament-social-networks
```

### Database
#### Using filament-social-networks with Filament and Orbit driver

If you use Orbit as database driver, there is no migrations to launch.

Instead, you have to :

- install Orbit 

```bash
composer require ryangjchandler/orbit
```

- publish model file directly by using :

```bash
php artisan vendor:publish --tag="filament-social-networks-model-with-orbit"
```

### Using filament-social-networks with classical database drivers

You have to publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-social-networks-migrations"
php artisan migrate
```

- publish model file directly by using :

```bash
php artisan vendor:publish --tag="filament-social-networks-model-classical"
```

### Others publishable files

To use default picture for Social Network, you have to publish assets : 

```bash
php artisan vendor:publish --tag="filament-social-networks-assets"
```

Optionnaly, you can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-social-networks-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-social-networks-views"
```

## Usage

Connect to your Filament dashboard.

You will see a new entry in the menu `Social Networks`

You can add every available social networks

When you're satisfied, you can use where you want the Blade component provided by this plugin in your template file : 

```php
<x-happytodev-filament-social-networks />
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Frédéric Blanc](https://github.com/happytodev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
