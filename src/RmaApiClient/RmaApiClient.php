<?php

namespace RmaApiClient;

use RmaApiClient\Entities\Customer;
use RmaApiClient\Entities\CustomerType;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class RmaApiClient
{
    private const BASE_URL = 'https://service.runmyaccounts.com/api/latest/clients';

    public Client $client;

    public function __construct($rmaClient, $rmaApiKey) {
        $url = self::BASE_URL . '/' . $rmaClient . '/';

        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => $url,
            // You can set any number of default request options.
            'timeout'  => 2.0,
            'headers' => [
                'Accept' => 'application/json'
            ],
            'query' => [
                'api_key' => $rmaApiKey
            ]
        ]);
    }

    /**
     * @return Customer[]
     * @throws RmaApiClientException|GuzzleException
     */
    public function getCustomers(): array
    {
        $res = $this->client
            ->get('customers');

        if($res->getStatusCode() != 200) {
            throw new RmaApiClientException("getCustomers() => Status code != 200");
        }

        $data = json_decode(
            (string) $res->getBody(),
            true
        );

        $customers = [];
        foreach ($data['customer'] as $customer) {
            $customerType = CustomerType::Person;
            if($customer['typeofcontact'] == "company") {
                $customerType = CustomerType::Company;
            }

            $customers[] = new Customer(
                (int) $customer['id'],
                $customer['customernumber'],
                $customerType,
                $customer['name'],
                $customer['address1'],
                $customer['zipcode'],
                $customer['city'],
                $customer['country'],
                $customer['phone'],
                $customer['email']
            );
        }

        return $customers;
    }
}