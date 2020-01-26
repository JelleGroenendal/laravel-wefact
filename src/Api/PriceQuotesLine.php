<?php

namespace Invato\Wefact\Api;

class PriceQuotesLine extends AbstractApi
{
    /**
     * @see https://www.wefact.nl/developer/api/offertes/pricequoteline-add
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function add($params)
    {
        return $this->post(array_merge(['controller' => 'pricequoteline', 'action' => 'add'], $params));
    }

    /**
     * @see https://www.wefact.nl/developer/api/offertes/pricequoteline-delete
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function delete($params)
    {
        return $this->post(array_merge(['controller' => 'pricequoteline', 'action' => 'delete'], $params));
    }
}