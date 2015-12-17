<?php
require_once 'Zend/Date.php';

/**
 * adds full access to the options of the Zend Date Class
 * @see http://framework.zend.com/manual/en/zend.date.html
 *
 * @package modules: i18n_fieldtypes
 * @author ivo.bathke
 */
class ZendDate extends SS_Datetime
{

    protected static $format_nice = false;
    protected static $format_nicedate = false;
    protected static $format_nice24 = false;
    protected static $format_pure = false;

    public function Nice($format = false)
    {
        if ($this->value) {
            if ($format === false) {
                if (self::$format_nice !== false) {
                    $format = self::$format_nice;
                } else {
                    $format = _t('ZENDDATE.DATETIMEFORMATNICE', 'd/m/Y H:i a');
                }
            }
            Zend_Date::setOptions(array('format_type' => 'php'));
            $ZD = new Zend_Date($this->value, i18n::get_locale());
            return $ZD->toString($format);
        }
    }

    public function NiceDate()
    {
        if ($this->value) {
            if (self::$format_nicedate !== false) {
                $format = self::$format_nicedate;
            } else {
                $format = _t('ZENDDATE.DATEFORMATNICE', 'd/m/Y');
            }
            return $this->Nice($format);
        }
    }

    public function Nice24()
    {
        if ($this->value) {
            if (self::$format_nice24 !== false) {
                $format = self::$format_nice24;
            } else {
                $format = _t('ZENDDATE.DATETIMEFORMATNICE24', 'd/m/Y H:i');
            }
            return $this->Nice($format);
        }
    }

    public function Pure()
    {
        if ($this->value) {
            if (self::$format_pure !== false) {
                $format = self::$format_pure;
            } else {
                $format = _t('ZENDDATE.DATEFORMATPURE', 'd/m/Y H:i:s');
            }
            return $this->Nice($format);
        }
        return $this->Nice($format);
    }

    public static function setFormatNice($format)
    {
        self::$format_nice = $format;
    }

    public static function setFormatNicedate($format)
    {
        self::$format_nicedate = $format;
    }

    public static function setFormatPure($format)
    {
        self::$format_pure = $format;
    }
}
