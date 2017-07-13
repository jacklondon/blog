<?php
/**
 * Created by PhpStorm.
 * User: JackLondon
 * Date: 10.07.2017
 * Time: 15:49
 */

namespace AppBundle\Tools;


class Slugger
{
    /**
     * @param string $string
     *
     * @return string
     */
    public function slugify($string)
    {
        return preg_replace('/\s+/', '-', mb_strtolower(trim(strip_tags($string)), 'UTF-8'));
    }
}