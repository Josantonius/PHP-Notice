<?php
/**
 * PHP library for handling errors and notices.
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2016 - 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/PHP-Notice
 * @since      1.0.0
 */

namespace Josantonius\Notice;

/**
 * Notice handler.
 *
 * @since 1.0.0
 */
class Notice {

    /**
     * Array with list of notices.
     *
     * @since 1.0.0
     *
     * @var array
     */
    public static $notices;

    /**
     * Default language to display notices.
     *
     * @since 1.0.0
     *
     * @var string
     */
    public static $lang;

    /**
     * Load Jsond file with notices.
     *
     * @since 1.0.0
     *
     * @param string $lang → language
     *
     * @return array → notices
     */
    protected static function load($lang = 'en') {

        if ($lang !== self::$lang) {

            self::$notices = null;

            self::$lang = $lang;
        }

        if (is_null(self::$notices)) {

            $filepath = __DIR__ . '/resources/notices.jsond';

            $jsonFile = file_get_contents($filepath);

            $notices  = json_decode($jsonFile, true);

            self::$notices = $notices['data'][self::$lang];

            unset($notices);
        }

        return self::$notices;
    }
                                                                                
    /**
     * Get message from the notice code.
     *
     * If the definition does not exist and the class HTTPStatusCode exists,
     * the definition of the HTTPStatusCode class will be used.
     *
     * @link https://github.com/Josantonius/PHP-HTTPStatusCode
     *
     * @since 1.0.0
     *
     * @param string $code → notice code
     *
     * @return string → notice
     */
    public static function get($code, $lang = 'en') {

        self::load($lang);

        if (class_exists('Josantonius\\HTTPStatusCode') && $code > 99 && $code < 512) {

            if (!isset(self::$notices[$code]) || empty(self::$notices[$code])) {

                return HTTPStatusCode::get($code, self::$lang);
            }
        }

        return (isset(self::$notices[$code])) ? self::$notices[$code] : 'Undefined';
    }

    /**
     * Get a notices array.
     *
     * @since 1.0.0
     *
     * @param string $lang → language
     *
     * @return array → all notices saved
     */
    public static function getAll($lang = 'en') {

        self::load($lang);

        return self::$notices;
    }
}
