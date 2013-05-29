<?php
/**
 * allows more customization of the Silverstripe Currency Formating
 *
 * @package modules: i18n_fieldtype
 * @author ivo.bathke
 */
class I18nCurrency extends Currency {

	protected static $decimalDelimiter = false;
	protected static $thousandDelimiter = false;

	public static function getCurrencySymbol() {
		return self::$currencySymbol;
	}

	/**
	 * formats value with Symbol and Delimiter
	 * @see Currency::Nice()
	 */
	public function Nice() {
		if(isset($this->value)){
			self::init();
			$val = self::$currencySymbol . number_format(abs($this->value), 2, self::$decimalDelimiter, self::$thousandDelimiter);
			if($this->value < 0) return "($val)";
			else return $val;
		}
	}

	/**
	 * formats without symbol but with delimiter
	 * @return string
	 */
	public function Pure() {
		if(isset($this->value)){
			self::init();
			return number_format(abs($this->value), 2, self::$decimalDelimiter, self::$thousandDelimiter);
		}
	}

	/**
	 * return unformatted value
	 */
	public function Raw() {
		$this->getValue();
	}

	public static function setDecimalDelimiter($value) {
		self::$decimalDelimiter = $value;
	}

	public static function setThousandDelimiter($value) {
		self::$thousandDelimiter = $value;
	}

	public static function getDecimalDelimiter() {
		return self::$decimalDelimiter;
	}

	public static function getThousandDelimiter() {
		return self::$thousandDelimiter;
	}

	private static function init() {
		if(self::$decimalDelimiter === false){
			self::$decimalDelimiter = _t('CURRENCY.DECIMALDELIMITER','.');
		}
		if(self::$thousandDelimiter === false){
			self::$thousandDelimiter = _t('CURRENCY.THOUSANDDELIMITER','');
		}
	}
}