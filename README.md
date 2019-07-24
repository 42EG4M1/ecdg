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


## SVG Sprite generate

    $ npm run svg

If you want to add a new image to the SVG sprite, put it in 'src/assets/svgs' directory and type above command.  


## Favicon generate　(only the first)

    $ npm run favicon


## Directory

The dist directory is destored at the same level as the working directory.  

    themes/
     ├─ dev-ecdg/ (working directory) - Do not deploy!!
     │   ├─ gulp/
     │   │   ├─ tasks/
     │   │   └─ config.js
     │   ├─ src/
     │   │   ├─ assets/
     │   │   │   ├─ favicon/
     │   │   │   ├─ images/
     │   │   │   ├─ scripts/
     │   │   │   ├─ styles/
     │   │   │   └─ svgs/
     │   │   ├─ inc/
     │   │   ├─ template-parts/
     │   │   ├─ index.php
     │   │   ├─ style.css
     │   │   ...
     │   ├─ node_modules/
     │   ├─ .git/
     │   ├─ .gitignore
     │   ├─ package.json
     │   ├─ gulpfile.js
     │   ├─ README.md
     │   ├─ faviconData.json
     │   └─ _sample.html
     │
     ├─ ecdg/ (dest directory) - Deploy
     │   ├─ assets/
     │   ├─ inc/
     │   ├─ template-parts
     │   ├─ index.php
     │   ├─ style.css
     │   ...
     ...


## Synchronize with production
Synchronization with production is done from VagrantSSH in a WordMove.

    $ cd [local directory]
    $ vagrant up
    $ vagrant ssh
    $ cd /vagrant/
    $ wordmove pull --all
    // Local Development theme(dev-ecdg) is not deleted.

When data synchronization is completed, login to the local WordPress and set the original customizer item to False.


## Deploy to production
Deployment is done from VagrantSSH in a WordMove.

    $ vagrant ssh
    $ cd /vagrant/
    $ wordmove push -t

Deploy only Upload themes directory.


## Commit Message

    Fix    - Bug fixes.
    Add    - Add a new files and functions.
    Modify - Fixing features that are not bugs.
    Clean  - Organize by refactoring etc.
    Remove - Delete files.
    Rename - Rename files.
    Update - Update files.


## Update
19.07.24 Support gulp4.
