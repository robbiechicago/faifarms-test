# Laravel Test

## Introduction

This repository contains a test for candidate Laravel developers.

## Instructions

* Clone this repository
* Complete parts one and two of the test
* Create a new repository on GitHub
* Commit and push your changes to it
* Send us the URL

It shouldn't take you more than thirty minutes to complete all of the above.

If you have any questions just ask.

## Part One

The first part of the test focuses on Eloquent models.

In the `Models` directory you'll see three classes. These classes are incomplete Eloquent models.

The relationships between them are:

  * The `Author` model has many `Post` models
  * The `Post` model belongs to one `Author` model
  * The `Post` model has and belongs to many `Tag` models
  * The `Tag` model has and belongs to many `Post` models

Please complete the above relationships on the Eloquent models.

## Part Two

The second part of the test focuses on Artisan commands.

In the `Commands` directory you'll see a class. This class is an incomplete Artisan command.

The requirements are:

* It should convert a temperature from Fahrenheit to Celcius
* It should take one argument, the temperature in Fahrenheit
* It should validate that argument to ensure it is a valid integer or float
* It should output one line, the converted temperature in Celcius

Please complete the above requirements on the Artisan command.

## FAQs

> Do I need to include a Vagrantfile or Dockerfile? 

No, that's not necessary.

> What version of PHP can I assume is being used?

The latest stable version of PHP at the time of writing.

> Do I need to include a composer.json or composer.lock file?

No, you can assume that Laravel has been successfully installed by Composer.

> Can I use third party libraries?

No, Laravel should provide you with everything you need for this test.

> Do I need to write migrations for the Eloquent models?

No, assume these have been written for you.

> Can I use GitLab or Bitbucket instead of GitHub?

Sure, that's fine.