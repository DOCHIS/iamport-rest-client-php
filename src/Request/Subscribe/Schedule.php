<?php

namespace Iamport\RestClient\Request\Subscribe;

use Iamport\RestClient\Request\RequestTrait;

/**
 * Class Schedule.
 *
 * @property string $merchant_uid
 * @property mixed  $schedule_at
 * @property float  $amount
 * @property float  $tax_free
 * @property string $name
 * @property string $buyer_name
 * @property string $buyer_email
 * @property string $buyer_tel
 * @property string $buyer_addr
 * @property string $buyer_postcode
 * @property string $notice_url
 */
class Schedule
{
    use RequestTrait;

    /**
     * @var string
     */
    protected $merchant_uid;

    /**
     * @var mixed
     */
    protected $schedule_at;

    /**
     * @var float
     */
    protected $amount;

    /**
     * @var float
     */
    protected $tax_free;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $buyer_name;

    /**
     * @var string
     */
    protected $buyer_email;

    /**
     * @var string
     */
    protected $buyer_tel;

    /**
     * @var string
     */
    protected $buyer_addr;

    /**
     * @var string
     */
    protected $buyer_postcode;

    /**
     * @var string
     */
    protected $notice_url;

    /**
     * Schedule constructor.
     *
     * @param string $merchant_uid
     * @param mixed  $schedule_at  unix timestamp 혹은 date 포맷형태의 문자열
     * @param float  $amount
     */
    public function __construct(string $merchant_uid, $schedule_at, float $amount)
    {
        $this->merchant_uid = $merchant_uid;
        $this->setScheduleAt($schedule_at);
        $this->amount = $amount;
    }

    /**
     * @param string $merchant_uid
     */
    public function setMerchantUid(string $merchant_uid): void
    {
        $this->merchant_uid = $merchant_uid;
    }

    /**
     * @param mixed $schedule_at
     */
    public function setScheduleAt($schedule_at): void
    {
        $this->schedule_at = $this->dateToTimestamp($schedule_at);
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @param float $tax_free
     */
    public function setTaxFree(float $tax_free): void
    {
        $this->tax_free = $tax_free;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $buyer_name
     */
    public function setBuyerName(string $buyer_name): void
    {
        $this->buyer_name = $buyer_name;
    }

    /**
     * @param string $buyer_email
     */
    public function setBuyerEmail(string $buyer_email): void
    {
        $this->buyer_email = $buyer_email;
    }

    /**
     * @param string $buyer_tel
     */
    public function setBuyerTel(string $buyer_tel): void
    {
        $this->buyer_tel = $buyer_tel;
    }

    /**
     * @param string $buyer_addr
     */
    public function setBuyerAddr(string $buyer_addr): void
    {
        $this->buyer_addr = $buyer_addr;
    }

    /**
     * @param string $buyer_postcode
     */
    public function setBuyerPostcode(string $buyer_postcode): void
    {
        $this->buyer_postcode = $buyer_postcode;
    }

    /**
     * @param string $notice_url
     */
    public function setNoticeUrl(string $notice_url): void
    {
        $this->notice_url = $notice_url;
    }
}
