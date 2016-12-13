<p style="text-align: center; max-width: 640px; margin: 0 auto 80px;">
  <a href="http://ecdesigngallery.com/" target="_blank">
    <img src="https://raw.githubusercontent.com/42EG4M1/ecdg/master/src/screenshot.png" alt="img">
  </a>
</p>

# ecdesigngallery

WordPress theme.  
This theme is set up for use with VCCW.  


[http://ecdesigngallery.com/](http://ecdesigngallery.com/)

## Clone
    $ cd ~/app/ecdesigngallery.com/public_html/wp/wp-content/themes
    $ git clone git@github.com:42EG4M1/ecdg.git dev-ecdg

## Install npm packages
    $ npm i

## Build
    $ npm run gulp

## Favicon generate
    $ npm run favicon

The dist directory is destored at the same level as the working directory.  

    ├─ dev-ecdg (working directory)
    │   ├─ gulp
    │   │   ├─ tasks
    │   │   ...
    │   ├─ src
    │   │   ├─ assets
    │   │   ...
    │   ├─ .git
    │   ├─ .gitignore
    │   ├─ package.json
    │   ├─ gulpfile.js
    │   ├─ README.md
    │   ...
    ├─ ecdg (dest directory)
    ...

