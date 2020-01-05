<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2020-01-05
 * Time: 14:19
 */

namespace App\Libraries;


use App\Entities\Admin\LogEntity;
use App\Models\Admin\LogModel;

class Utils
{
    /**
     * @param string $url
     * @param null $data
     * @param string $message
     * @param null $openid
     * @return bool
     */
    public static function log($url = '', $data = null, $message = '', $openid = null)
    {
        //保存新数据
        $timestamp = time();

        $country = null;
        $province = null;
        $city = null;
        $district = null;
        $isp = null;

        if (is_array($data) || is_object($data)) {
            $data = \GuzzleHttp\json_encode($data);
        }

        $logEntity = new LogEntity();
        $logEntity
            ->setOpenid($openid)
            ->setUrl($url)
            ->setData($data)
            ->setMessage($message)
            ->setIpAddress(request()->ip())
            ->setUserAgent(request()->userAgent())
            ->setBrowser(\Agent::browser())
            ->setBrowserVersion(\Agent::version(\Agent::browser()))
            ->setMobile(\Agent::mobileGrade())
            ->setPlatform(\Agent::platform())
            ->setIpCountry($country)
            ->setIpProvince($province)
            ->setIpCity($city)
            ->setIpDistrict($district)
            ->setYear(date('Y', $timestamp))
            ->setMonth(date('m', $timestamp))
            ->setDay(date('d', $timestamp))
            ->setHour(date('H', $timestamp))
            ->setMinute(date('i', $timestamp))
            ->setTimestamp($timestamp)
            ->setDateAdd(date_insert_string());

        $result = LogModel::getInstance()->insert($logEntity);

        return $result;
    }
}