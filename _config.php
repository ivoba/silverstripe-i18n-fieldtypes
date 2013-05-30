<?php
// * * * HIGHLY RECOMMENDED SETTINGS COMMON SILVERSTRIPE
//Currency::setCurrencySymbol('€');
//i18n::set_locale('de_DE');
//if you use Zend Currency dont set LC_ALL
//because of: http://framework.zend.com/issues/browse/ZF-8806
//and also SilverStripe Query Building might have troubles with floats
//setlocale (LC_TIME, 'de_DE@euro', 'de_DE.UTF-8', 'de_DE', 'de', 'ge');

// * * * I18N FIELDTYPES SETTINGS

//Date Formating -the PHP way-
//Object::useCustomClass('SS_Datetime','I18nDatetime', true);
//values then come from the lang file
//if you want to use custom formating then set also:
//I18nDatetime::setFormatNice('%e. %B %G');

//Date Formating -the Zend way-
//Object::useCustomClass('SS_Datetime','ZendDate', true);
//values then come from the lang file
//if you want to use custom formating then set also:
//ZendDate::setFormatNice('j. F Y, G:i');

//Money Formating -the SS Currency Way-
//Object::useCustomClass('Currency','I18nCurrency', true)
//values then come from the lang file
//if you want to use custom formating then set also:
//I18nCurrency::setDecimalDelimiter(','); 
//I18nCurrency::setThousandDelimiter('.'); 

//Money Formating -the Money / Zend way -
//Object::useCustomClass('Money','I18nMoney', true);
//@see http://framework.zend.com/manual/en/zend.currency.options.html
//I18nMoney::setOptions(array('display' => Zend_Currency::USE_SHORTNAME,
//	  			'position' => Zend_Currency::RIGHT));
