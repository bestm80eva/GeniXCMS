# GeniXCMS
> Update Notice: Please Update to version v0.0.8.

[![Build Status](https://travis-ci.org/semplon/GeniXCMS.svg?branch=master)](https://travis-ci.org/semplon/GeniXCMS)
[![CircleCI](https://circleci.com/gh/semplon/GeniXCMS.svg?style=shield&circle-token=c2ef105b7d61e90dadd066ad0e25e3f53d97c6c1)](https://circleci.com/gh/semplon/GeniXCMS)
[![wercker status](https://app.wercker.com/status/69ad23cfc66fab2f4155d69bf4d47d0d/s "wercker status")](https://app.wercker.com/project/bykey/69ad23cfc66fab2f4155d69bf4d47d0d)
[![Codeship](https://codeship.com/projects/64d60110-3e1c-0133-6054-5a0949beaeb8/status?branch=master)](https://codeship.com/projects/102695)

[![Latest Stable Version](https://poser.pugx.org/genix/cms/v/stable)](https://packagist.org/packages/genix/cms) [![Total Downloads](https://poser.pugx.org/genix/cms/downloads)](https://packagist.org/packages/genix/cms) [![Latest Unstable Version](https://poser.pugx.org/genix/cms/v/unstable)](https://packagist.org/packages/genix/cms) [![License](https://poser.pugx.org/genix/cms/license)](https://packagist.org/packages/genix/cms)

[![Gitter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/semplon/GeniXCMS?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Documentation Status](https://readthedocs.org/projects/genixcms/badge/?version=latest)](http://genixcms.readthedocs.org/en/latest/?badge=latest)


**GeniXCMS** is a PHP Based Content Management System and Framework (*CMSF*). It's a simple and lightweight of CMSF. Very suitable for **Intermediate PHP developer** to **Advanced Developer**. Some manual configurations are needed to make this application to work.

### Why GeniXCMS
This CMSF is a starter point to build your own online applications. With already build User manager, Content manager (Post, Pages), Menu manager, etc made you easy to add your own code and build your own custom web applications.

### Credits
**GeniXCMS** is using some of **FOSS** (free and opensource software) like :
- Twitter **Bootstrap**,
- **Summernote** Text Editor,
- **JQuery**,
- **PHP**,
- **MySQL**,
- **SB-Admin 2**,
- etc.

### Requirements
* PHP >=5.5.9
* MySQL 4

### Recommended
* MariaDB Server

### Feature Request

[![Feature Requests](http://feathub.com/semplon/GeniXCMS?format=svg)](http://feathub.com/semplon/GeniXCMS)

### Installation

#### Manual Upload

Upload all files to your site.

Set this directory permission to 777 (writable) :

- inc/config
- inc/themes
- inc/mods
- assets/images
- assets/images/uploads
- assets/images/uploads/thumbs


After upload is done. Open your site at the browser. eg: http://yoursite.com

The installation wizard will appear, just follow all the instructions.

#### Using Composer

We are now ready for composer installation. Run this command at your server.

`php composer.phar create-project genix/cms`

more detail about composer, please read the documentation at http://getcomposer.org

more details of installation :
http://docs.genixcms.org/en/latest/user-guide/installation/

### Upgrading

- Upload all files, except `inc/config/config.php`.
- edit config.php, rename `SECURITY` become `SECURITY_KEY`
- Run at your browser `http://yourwebsite.com/upgrade.php`.

### Showcase
Showcase URL :
- http://demo.genixcms.org

### License
**GeniXCMS** License : [**MIT License**](LICENSE)

### Website
Link : http://www.genixcms.org

### Donate
![Donate Us](https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif)

### Developer
Developed by : Puguh Wijayanto - www.metalgenix.com
