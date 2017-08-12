<?php

namespace Qbhy\LikeString;

class LikeString
{
    /**
     * @param $format
     * @param $str
     * @return bool
     */
    public static function formatFullMatch($format, $str)
    {
        $formatLen = strlen($format);
        $strLen = strlen($str);
        $mapping = [];
        if ($formatLen !== $strLen) {
            return false;
        }


        for ($i = 0; $i < $strLen; $i++) {
            if (!isset($mapping[$str[$i]])) {
                $mapping[$str[$i]] = $format[$i];
            }
            if ($mapping[$str[$i]] !== $format[$i]) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param string $format
     * @param bool $allowNilBegin
     * @return string
     */
    public static function generateNumeric($format, $allowNilBegin = false)
    {
        $numeric = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        $mapping = [];
        $formatLen = strlen($format);
        $out = '';

        if ($allowNilBegin === false) {
            array_splice($numeric, 0, 1);
        }

        for ($i = 0; $i < $formatLen; $i++) {
            if (!isset($mapping[$format[$i]])) {
                $mapping[$format[$i]] = self::randomPullFromArray($numeric);
            }
            if ($i === 0 && $allowNilBegin === false) {
                array_push($numeric, 0);
            }
            $out .= $mapping[$format[$i]];
        }
        return $out;
    }

    public static function randomPullFromArray(array &$arr)
    {
        $arrLimit = count($arr) - 1;
        if ($arrLimit === -1) {
            return null;
        }
        if ($arrLimit === 0) {
            $result = $arr[0];
            unset($arr[0]);
            return $result;
        }
        $index = rand(0, $arrLimit);
        $result = $arr[$index];
        array_splice($arr, $index, 1);
        return $result;
    }


}