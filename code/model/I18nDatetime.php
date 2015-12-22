<?php
/**
 * formats dates using strftime
 * depends on PHPs setlocale()
 * 
 * @package modules: i18n_fieldtypes
 * @author ivo.bathke
 */
class I18nDatetime extends SS_Datetime
{


    protected static $format_nice = false;
    protected static $format_nicedate = false;
    protected static $format_nice24 = false;

    /**
     * Returns the datetime in the format given or from the lang file
     * locale sould be set
     */
    public function Nice()
    {
        if ($this->value) {
            if (self::$format_nice !== false) {
                $format = self::$format_nice;
            } else {
                $format = _t('I18NDATETIME.DATETIMEFORMATNICE', '%m/%d/%G %I:%M%p');
            }
            return $this->FormatI18N($format);
        }
    }
    
    public function NiceDate()
    {
        if ($this->value) {
            if (self::$format_nice !== false) {
                $format = self::$format_nicedate;
            } else {
                $format = _t('I18NDATETIME.DATEFORMATNICE', '%m/%d/%G');
            }
            return $this->FormatI18N($format);
        }
    }
    
    public function Nice24()
    {
        if ($this->value) {
            if (self::$format_nice !== false) {
                $format = self::$format_nicedate24;
            } else {
                $format = _t('I18NDATETIME.DATETIMEFORMATNICE24', '%m/%d/%G');
            }
            return date($format, strtotime($this->value));
        }
    }

    public static function setFormatNice($format)
    {
        self::$format_nice = $format;
    }
    
    public static function setFormatNicedate($format)
    {
        self::$format_nicedate = $format;
    }
    
    public static function setFormatNice24($format)
    {
        self::$format_nice24 = $format;
    }
}
