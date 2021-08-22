# Laravel package to launch toast notifications.

[![Latest Stable Version](http://poser.pugx.org/tonystore/livewire-notification/v)](https://packagist.org/packages/tonystore/livewire-notification) [![Total Downloads](http://poser.pugx.org/tonystore/livewire-notification/downloads)](https://packagist.org/packages/tonystore/livewire-notification) [![Latest Unstable Version](http://poser.pugx.org/tonystore/livewire-notification/v/unstable)](https://packagist.org/packages/tonystore/livewire-notification) [![License](http://poser.pugx.org/tonystore/livewire-notification/license)](https://packagist.org/packages/tonystore/livewire-notification)

This package provides assistance when using toast notifications. Using the [iziTOAST](https://izitoast.marcelodolza.com/) package, which allows us to launch elegant and responsive notifications, having the facility to apply a number of configurations that you will find available on their [official site](https://izitoast.marcelodolza.com/) .

## REQUIREMENTS

- [PHP >= 7.2](http://php.net/)
- [Laravel 7|8](https://laravel.com/)
- [Livewire](https://laravel-livewire.com/)
- [iziTOAST](https://izitoast.marcelodolza.com/)

## INSTALLATION VIA COMPOSER

### Step 1: Composer

Run this command line in console.

```sh
composer require tonystore/livewire-notification
```
### Step 2: Include component

Add the [iziTOAST](https://izitoast.marcelodolza.com/) CDN styles and script, and the component containing the script to launch the notifications.

```php
<head>
    <link href="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css" rel="stylesheet" type="text/css" />

</head>
 <body> 
    ...
    @livewireScripts
    ...
    <script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js">
    </script>
    ...

    //INSERT COMPONENT

       <x-livewire-notification::toast />

    //OR

    @component('livewire-notification::components.toast') @endcomponent
 </body> 
```

## Publish Config File

```sh
php artisan vendor:publish --provider="Tonystore\LivewireNotification\LivewireNotificationProvider" --tag="config"
```

### Default configuration

```php
//config/livewire-notification

return [
    'toast' => [
        'title' => '', //Defaut Title
        'position' => 'topRight', //Defaut Position
        'timeout' => 3000, //Display Time
        'modal' => null, //Very important, it defines if an event is triggered to close a Bootstrap modal.
    ],

```

## Usage

Now, in any Livewire component, you can launch notifications. To launch a notification you can choose between the different types available:
- success
- info
- error
- warning


## Example 1
Launch a simple notification with a personalized message.

```php
$this->alert(
        'success',
        'Example of notification.',
        );
        
```

## Example 2

Example of notification with modal event.

```php
$this->alert('info','Example of notification with modal event', [
        'modal' => '#hideModal'
    ]
);

```


To use more configurations, you can check the documentation on their [official site](https://izitoast.marcelodolza.com/) .
