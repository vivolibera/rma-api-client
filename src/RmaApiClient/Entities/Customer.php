<?php

namespace RmaApiClient\Entities;

class Customer
{
    private ?int $id;
    private ?string $customerNumber;
    private CustomerType $type;
    private string $name;
    private string $address1;
    private ?string $address2;
    private string $zipCode;
    private string $city;
    private string $country;
    private ?string $phone;
    private ?string $mobile;
    private ?string $email;

    public function __construct(
        $id,
        $customerNumber,
        $type,
        $name,
        $address1,
        $address2,
        $zipCode,
        $city,
        $country,
        $phone,
        $mobile,
        $email,
    ) {
        $this->id = $id;
        $this->customerNumber = $customerNumber;
        $this->type = $type;
        $this->name = $name;
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->zipCode = $zipCode;
        $this->city = $city;
        $this->country = $country;
        $this->phone = $phone;
        $this->mobile = $mobile;
        $this->email = $email;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getCustomerNumber(): ?string
    {
        return $this->customerNumber;
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
    public function getAddress1(): string
    {
        return $this->address1;
    }

    /**
     * @return string|null
     */
    public function getAddress2(): ?string
    {
        return $this->address2;
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
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @return string|null
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
}