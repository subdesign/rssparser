# Rssparser

Simple RSS feed parser Laravel Bundle

***

## Dependency (optional)

[Date bundle](http://bundles.laravel.com/bundle/date)   

## Installation

Clone the repo, put files into the _bundles/rssparser_ folder.

OR

    php artisan bundle:install rssparser

## Setup

Edit the bundle's config file, setup feed properties.  

Add bundle to the _application/bundles.php_
    
    'rssparser' => array('handles' => 'rssparser'),
    
If you want to automatically load the bundle, enter

    'rssparser' => array('handles' => 'rssparser', 'auto' => true),
    
## Usage

Load the bundle (if not autoloaded)

    Bundle::start('rssparser');
    
Parse rss feed

    $result = rssparser::parse();  
    
If you set _html_ result, you can design the list easily

    <div id="newsfeed">
    <ul>
    <li>...</li>
    </ul>

and if you set _raw_ result, you can form it as you like.  

If you have installed "Date" bundle, you can show dates like _1 day ago_ etc.

## License 

[MIT License](http://www.opensource.org/licenses/MIT)

## Author

C. 2013 Barna Szalai <b.sz@devartpro.com>

Feel free to contant me if you have any questions!



