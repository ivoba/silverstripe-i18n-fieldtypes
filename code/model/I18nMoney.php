<?php
/**
 * adds full access to the options of the Zend Currency Class
 * 
 * @package modules: i18n_fieldtypes
 * @author ivo.bathke
 */
class I18nMoney extends Money
{

    /**
     * possible options
     * @see http://framework.zend.com/manual/en/zend.currency.options.html
     'currency',
     'display',
     'format',
     'locale',
     'name',
     'position',
     'precision',
     'script',
     'service',
     'symbol',
     'value'
     
     NOTE locale is not supported, though the doku says so
     TODO file a bug @Zend & @sapphire
     */
    protected static $options = array();
    
    /**
     * @return string
     */
    public function Nice($options = array())
    {
        $options = $this->initOptions($options);
        $amount = $this->getAmount();
        if (!isset($options['display'])) {
            $options['display'] = Zend_Currency::USE_SYMBOL;
        }
        if (!isset($options['currency'])) {
            $options['currency'] = $this->getCurrency();
        }
        if (!isset($options['symbol'])) {
            $options['symbol'] = $this->currencyLib->getSymbol($this->getCurrency(), $this->getLocale());
        }
        return (is_numeric($amount)) ? $this->currencyLib->toCurrency($amount, $options) : '';
    }

    /**
     * @return string
     */
    public function Pure($options = array())
    {
        $options = $this->initOptions($options);
        if (isset($options['display'])) {
            $options['display'] = Zend_Currency::NO_SYMBOL;
        }
        $amount = $this->getAmount();
        return (is_numeric($amount)) ? $this->currencyLib->toCurrency($amount, $options) : '';
    }
    
    /**
     * @return decimal
     */
    public function Raw()
    {
        return $this->getAmount();
    }

    public static function setOptions($options)
    {
        self::$options = $options;
    }
    
    private function initOptions($options)
    {
        $this->currencyLib->setLocale(i18n::get_locale());
        return array_merge($options, self::$options);
    }
}
