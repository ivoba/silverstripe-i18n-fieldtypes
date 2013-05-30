I18n Fieldtypes Extension Module
========================================

Info
-----------------------------------------------

This module provides improved fieldtypes to handle Currency and Date for internationalization.  
It lets you define your formats via translation files or static setters.  

To enable the classes use:  

    Object::useCustomClass('SS_Datetime','I18nDatetime', true);

To set your formats, override the language file entries or set them directly like:  
    
    I18nDatetime::setFormatNice('%e. %B %G');

So you can easily customize the template methods like *Nice*, *NiceDate*, *Nice24* etc.  
For currency values it adds a *Pure* method, which formats the amount nicely but omits the symbol.  
Also a *Raw* wrapper is provided to unify the access to the unformatted value.    

For the Money class, which uses Zend Money, use a setter and a options array:  

    Object::useCustomClass('Money','I18nMoney', true);
    //@see http://framework.zend.com/manual/en/zend.currency.options.html
    I18nMoney::setOptions(array('display' => Zend_Currency::USE_SHORTNAME,
	  			'position' => Zend_Currency::RIGHT));
 
-----------------------------------------------

Maintainer Contact
-----------------------------------------------
Ivo Bathke https://github.com/ivoba  
see https://github.com/ivoba/silverstripe-i18n-fieldtypes/

Requirements
-----------------------------------------------
SilverStripe 3.0.+

Installation Instructions
-----------------------------------------------
1. copy folder to a i18n-fieldtypes folder in your SS3 installation.

2. copy configurations from this module's _config.php file
into mysite/_config.php file and edit settings as required.

