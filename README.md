# Application and deal handling.

Single page app for handling new deal applications. 

## Installation

1. Run ``` composer install ``` to generate depedencies in vendor folder

2. Change database values in app/Core/Database.php


![Database.php](https://i.imgur.com/NIuxn6H.jpg)

## Usage
Amount and email is saved into database. 

Afterwards correct partner is appointed to deal entry and status set to 'ask'.

When partner has completed deal review, possibility to change deal status to 'offer' and send email to client.


## To-Do Improvements

1. Possibly refactor code in to smaller more specific classes.
