<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2020-01-05
 * Time: 11:21
 */

namespace App\Entities\Admin;

use App\Entities\BaseEntity;

/**
 * Class LogEntity
 * @package App\Entities\Admin
 * @ORM\Entity
 */
class LogEntity extends BaseEntity
{
    /**
     * @ORM\Column(type="string", length="255")
     * @var string
     */
    protected $openid;

    /**
     * @ORM\Column(type="string", length="255")
     * @var string
     */
    protected $url;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $data;

    /**
     * @ORM\Column(type="string", length="255")
     * @var string
     */
    protected $message;

    /**
     * @ORM\Column(type="string", length="255")
     * @var string
     */
    protected $ip_address;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $user_agent;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $browser;

    /**
     * @ORM\Column(type="string", length="255")
     * @var string
     */
    protected $browser_version;

    /**
     * @ORM\Column(type="string", length="255")
     * @var string
     */
    protected $mobile;

    /**
     * @ORM\Column(type="string", length="255")
     * @var string
     */
    protected $platform;

    /**
     * @ORM\Column(type="string", length="255")
     * @var string
     */
    protected $ip_country;

    /**
     * @ORM\Column(type="string", length="255")
     * @var string
     */
    protected $ip_province;

    /**
     * @ORM\Column(type="string", length="255")
     * @var string
     */
    protected $ip_city;

    /**
     * @ORM\Column(type="string", length="255")
     * @var string
     */
    protected $ip_district;

    /**
     * @ORM\Column(type="string", length="255")
     * @var string
     */
    protected $ip_isp;

    /**
     * @ORM\Column(type="integer")
     * @var string
     */
    protected $year;

    /**
     * @ORM\Column(type="integer")
     * @var string
     */
    protected $month;

    /**
     * @ORM\Column(type="integer")
     * @var string
     */
    protected $day;

    /**
     * @ORM\Column(type="integer")
     * @var string
     */
    protected $hour;

    /**
     * @ORM\Column(type="integer")
     * @var string
     */
    protected $minute;

    /**
     * @ORM\Column(type="integer")
     * @var string
     */
    protected $timestamp;

    public function __construct()
    {
        unset($this->is_deleted);
    }

    /**
     * @return string
     */
    public function getOpenid()
    {
        return $this->openid;
    }

    /**
     * @param string $openid
     * @return LogEntity
     */
    public function setOpenid($openid)
    {
        $this->openid = $openid;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return LogEntity
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param string $data
     * @return LogEntity
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return LogEntity
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }

    /**
     * @param string $ip_address
     * @return LogEntity
     */
    public function setIpAddress($ip_address)
    {
        $this->ip_address = $ip_address;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserAgent()
    {
        return $this->user_agent;
    }

    /**
     * @param string $user_agent
     * @return LogEntity
     */
    public function setUserAgent($user_agent)
    {
        $this->user_agent = $user_agent;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrowser()
    {
        return $this->browser;
    }

    /**
     * @param string $browser
     * @return LogEntity
     */
    public function setBrowser($browser)
    {
        $this->browser = $browser;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrowserVersion()
    {
        return $this->browser_version;
    }

    /**
     * @param string $browser_version
     * @return LogEntity
     */
    public function setBrowserVersion($browser_version)
    {
        $this->browser_version = $browser_version;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     * @return LogEntity
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * @param string $platform
     * @return LogEntity
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return string
     */
    public function getIpCountry()
    {
        return $this->ip_country;
    }

    /**
     * @param string $ip_country
     * @return LogEntity
     */
    public function setIpCountry($ip_country)
    {
        $this->ip_country = $ip_country;
        return $this;
    }

    /**
     * @return string
     */
    public function getIpProvince()
    {
        return $this->ip_province;
    }

    /**
     * @param string $ip_province
     * @return LogEntity
     */
    public function setIpProvince($ip_province)
    {
        $this->ip_province = $ip_province;
        return $this;
    }

    /**
     * @return string
     */
    public function getIpCity()
    {
        return $this->ip_city;
    }

    /**
     * @param string $ip_city
     * @return LogEntity
     */
    public function setIpCity($ip_city)
    {
        $this->ip_city = $ip_city;
        return $this;
    }

    /**
     * @return string
     */
    public function getIpDistrict()
    {
        return $this->ip_district;
    }

    /**
     * @param string $ip_district
     * @return LogEntity
     */
    public function setIpDistrict($ip_district)
    {
        $this->ip_district = $ip_district;
        return $this;
    }

    /**
     * @return string
     */
    public function getIpIsp()
    {
        return $this->ip_isp;
    }

    /**
     * @param string $ip_isp
     * @return LogEntity
     */
    public function setIpIsp($ip_isp)
    {
        $this->ip_isp = $ip_isp;
        return $this;
    }

    /**
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param string $year
     * @return LogEntity
     */
    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

    /**
     * @return string
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @param string $month
     * @return LogEntity
     */
    public function setMonth($month)
    {
        $this->month = $month;
        return $this;
    }

    /**
     * @return string
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param string $day
     * @return LogEntity
     */
    public function setDay($day)
    {
        $this->day = $day;
        return $this;
    }

    /**
     * @return string
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * @param string $hour
     * @return LogEntity
     */
    public function setHour($hour)
    {
        $this->hour = $hour;
        return $this;
    }

    /**
     * @return string
     */
    public function getMinute()
    {
        return $this->minute;
    }

    /**
     * @param string $minute
     * @return LogEntity
     */
    public function setMinute($minute)
    {
        $this->minute = $minute;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param string $timestamp
     * @return LogEntity
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }
}