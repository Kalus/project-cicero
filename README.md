

Project Cicero
===

Based off a starter theme called `_s`, or `underscores`: [![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

This ultra-minimal CSS might look like theme tartare but that means less stuff to get in your way when you're designing an awesome theme. Here are some of the other more interesting things you'll find here:

* A just right amount of lean, well-commented, modern, HTML5 templates.
* A helpful 404 template.
* A custom header implementation in `inc/custom-header.php` just add the code snippet found in the comments of `inc/custom-header.php` to your `header.php` template.
* Custom template tags in `inc/template-tags.php` that keep your templates clean and neat and prevent code duplication.
* Some small tweaks in `inc/template-functions.php` that can improve your theming experience.
* A script at `js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.
* 2 sample CSS layouts in `layouts/` for a sidebar on either side of your content.
* Smartly organized starter CSS in `style.css` that will help you to quickly get your design off the ground.
* Licensed under GPLv2 or later. :) Use it to make something cool.

Getting Started
---------------

**For Local Development**
1. Setup a local wordpress install using MAMP or similar. Your local Wordpress config isn't opinionated.
2. Clone this repo into your themes folder.
3. Install the dependencies with `npm install`. You can build SCSS changes with `npm run scss`.

Other Available Commands
------------------------

These commands are opinionated, and, frankly, pretty unexplored, but I wanted to get some semblance of linting and testing up.
1. `npm run autoprefixer`
2. `npm run stylelint`
3. `npm run stylefix`
4. _coming soon_ `npm run test`
