# HappyBurger

This work is a wordpress theme to demontrate widget features and page templating. More details about implemented features read [here](#implemented-functionality).

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

* Download and install MAMP or MAMP PRO to run the local server on your machine

[MAMP or MAMP PRO](https://www.mamp.info/en/)

* Set these properties to the local server

```
Server Name: localhost
Admin: root
Password: root
Database Name: wordpress
```

* Clone this repo on your local server

* Import SQL DB from dump file WP_dump.sql

* Run web-server and MySQL using MAMP

* Download and install the latest version of WordPress [here](https://wordpress.org/download/)

* Set the happyBurger theme by copying the whole happyBurger to the wp-content/theme/ of your WordPress folder on your local server

* Congrats! Good Job! Now you're all set and good to go.

* Open homepage in the browser

* Hover over pages and look into admin panel to find installed widgets

## Implemented Functionality

### Home page customization

Using customizer toolbar you are able to change the main image, heading and main text on the homepage.

### Home page box widgets

Using box widgets functionality you are able to change the content in 3 boxes on homepage from admin panel:
* image
* text under the image

### Submenus

You are able to create a submenus that will render as a dropdown in navigation panel

### Posts

Blog page renders all published posts with post's thumbnail. Each post can be published in 3 different types: standart, gallery, aside.

### Post's comments

Post page renders all published comments by logged in users.



# Project Files

## PHP

### Partials

````
wp_materialize_navwalker.php - code snippet to implement materialize css navigation dropdown submenu
header.php - header of the website
footer.php - footer of the website
content-aside.php - post type aside
content-gallery.php - post type gallery
content-page.php - to display the title as a link to the post's permalink for the page
content-single.php - to display the title as a link to the post's permalink for the post
content.php
functions.php - all custom functions
customizer.php - theme customizer
````

### Pages

````
index.php - home page
page.php - single page template
sidebar.php - sidebar template
single.php - single post template
front-page.php - front page of website
````

## CSS

```
style.css - holds all custom styles
```

## Project Folders

```
/css - all css files
/images - all images
/inc - includes
/template-parts - template parts
```

## Built With

### Style

[Materialize CSS](https://materializecss.com)

### CMS

[WordPress](https://wordpress.org)

### Back End

PHP 7

### Database

MySQL v.5.6.35

## Authors

**Paul Kurski** - [kurskiypavel](https://github.com/kurskiypavel)
