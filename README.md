# Street Group - Technical Exercise

> This excercise is designed to let you show your understanding of web application development,
> as well as give you an opportunity to showcase some Laravel skills. While we're happy for people
> to go the extra mile, it's absolutely not necessary to add any features above and beyond the ones specified
> below. We'd rather see a small amount of solid, sensible code than lots of rushed and incomplete code.

In this exercise you will be adding a couple of new features to a simple Laravel application,
which allows people to share and vote on their favourite dog photos.

Firstly, you'll need to get the application up and running. There are a couple of prerequisites
you'll need to install:

* [PHP](https://www.php.net/manual/en/install.php)
* [Composer](https://getcomposer.org/doc/00-intro.md)
* [Git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)

Once you've got these, clone this repository, and then run the following commands:

```
composer install
php artisan migrate:fresh
php artisan db:seed
```

You should then be able to run `php artisan serve`, and open up [http://localhost:8000](http://localhost:8000) 
in your browser to see the application.

## Step One

We'd like to be able to upload our own dog pictures to the site. On the homepage, there's a link to
a "Add your own dog" page, which is currently unfinished - we'd like you to finish it!

The upload should:

* Present a form that asks for a name and an image, and when submitted:
    * Saves a new picture to the database
    * Saves the uploaded file to the public folder
    * Redirects the user back to the homepage.

There is stubbed out code in a couple of places as a starting point:

* `resources/views/upload.blade.php` - this should be extended to add a new upload form
* `app/Http/Controllers/PictureController` - please implement the `store` method here

There is a test in `tests/Feature/PictureControllerTest` which should pass once this is implemented. 
You can run the tests by running `php artisan test`.

Feel free to style the form however you'd like - the application uses [Tailwind](https://tailwindcss.com/) for 
styling, or you can add your own custom css to `public/css/app.css`.

## Step Two

We'd now like to be able to upvote our favourite dogs. Each picture in the database has a `votes` column
already - we need you to implement a feature that:

* Allows users to send a `POST` request to `/pictures/{picture}/upvote` (where `{picture}` is an ID)
* Increments the vote count for that picture by one
* Redirects to the homepage once done

You should also add a supporting test case for this in `tests/Feature/PictureControllerTest` - there 
is a commented out `test_upvote_a_dog` method for this purpose.

## Supporting Documentation

* [Laravel Docs](https://laravel.com/docs/8.x)
* [Tailwind Docs](https://tailwindcss.com/docs)

Feel free to refactor as much or as little as you'd like - if you feel the tests could be improved, or
would like to implement the feature in a different way, that's absolutely fine. 

