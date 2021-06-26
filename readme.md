# Telegram Crawler
## A Package built for Laravel to extract data from public telegram channels

## Features

- Extract channel name
- Extract channel description
- Extract channel image
- Extract channel members count
- Extract channel links count
- Extract channel videos count
- Extract channel images count
- Extract channel messages as object
- Extract channel specific message by Identifier
- Extract channel message date
- Extract channel message views

## Requirements
| Technology | Version |
| ------ | ------ |
| PHP | > 7.3 |
| Laravel |  > 8 |

## Installation
You can install the package via composer:

```sh
composer require shariaty/telegram-crawler
```

Publish the config file (see config/telegram.php), you could publish the config file:

```sh
php artisan vendor:publish --provider="Shariaty\TelegramCrawler\TelegramCrawlerServiceProvider"
```
> Note: This package requires composer Version 2 to be installed.

Enjoy!


## Usage
Import The facade
```sh
use Shariaty\TelegramCrawler\Facades\TelegramCrawler;
```
Create an instance using Facade with the name of the channel.
```sh
$channel = TelegramCrawler::load("tahran_sabza");
```
Use any of below methods to retrive data.
```sh
$channel->getName();
$channel->getDescription();
$channel->getImage();
$channel->getMembersCount();
$channel->getLinksCount();   
$channel->getVideoCount();  
$channel->getPhotoCount();
$channel->getMessages();
$channel->getMessages(100);
$channel->getMessages()->first()->date;
$channel->getMessages()->first()->views;
$channel->getMessages()->first()->text;
```
