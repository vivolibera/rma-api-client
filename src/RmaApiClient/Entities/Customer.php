<?php

namespace RmaApiClient\Entities;

class Customer
{
    private int $id;
    private string $customernumber;
    private CustomerType $type;
    private string $name;
    private string $address;
    private string $zipCode;
    private string $city;
    private string $country;
    private string $phone;
    private string $email;

    public function __construct(
        $id,
        $customernumber,
        $type,
        $name,
        $address,
        $zipCode,
        $city,
        $country,
        $phone,
        $email,
    ) {
        $this->id = $id;
        $this->customernumber = $customernumber;
        $this->type = $type;
        $this->name = $name;
        $this->address = $address;
        $this->zipCode = $zipCode;
        $this->city = $city;
        $this->country = $country;
        $this->phone = $phone;
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCustomernumber(): string
    {
        return $this->customernumber;
    }

    /**
     * @return CustomerType
     */
    public function getType(): CustomerType
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
}