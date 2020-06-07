<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing CountryGroupsRequestType
 *
 * 
 * XSD Type: countryGroupsRequest
 */
class CountryGroupsRequestType extends CountryGroupsRequestSrcType
{

    /**
     * @var string $lang
     */
    private $lang = null;

    /**
     * @var int $provider
     */
    private $provider = null;

    /**
     * Gets as lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Sets a new lang
     *
     * @param string $lang
     * @return self
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * Gets as provider
     *
     * @return int
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Sets a new provider
     *
     * @param int $provider
     * @return self
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }


}

