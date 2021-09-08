<?php 

namespace SearchdataSDK;

/***
 * Searchdata.io Yandex Search SDK
 */
class SearchdataYandexSearch extends SearchDataSDK {
    /**
     * The constructor
     *
     * @return void
     */
    public function __construct($api_key)
    {
        parent::__construct($api_key);
        $this->engine = 'yandex';
        $this->api_url = 'https://api.searchdata.io/v1';
        $this->is_searchdata_api = true;
    }

    /**
     * Set parameter text
     * 
     * @param  string  $value  The terms that you are searching for (the query). 
     *
     * @return void
     */
    public function set_text($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "text" is not of type "string"');
        }
        
        $this->params['text'] = $value;
    }

    /**
     * Set parameter device
     * 
     * @param  string  $value  The device used for your google search. Must be a value from ["desktop","mobile","tablet"]
     *
     * @return void
     */
    public function set_device($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "device" is not of type "string"');
        }
        if (!in_array($value, ["desktop","mobile","tablet"])) {
            throw new Exception('Paramter "device" does not have a correct value');
        }
        $this->params['device'] = $value;
    }

    /**
     * Set parameter lang
     * 
     * @param  string  $value  The language to use for the search. 
     *
     * @return void
     */
    public function set_lang($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "lang" is not of type "string"');
        }
        
        $this->params['lang'] = $value;
    }

    /**
     * Set parameter location
     * 
     * @param  string  $value  Defines where do you want the search to originate from. Please use SearchdataLocations to obtain a location. 
     *
     * @return void
     */
    public function set_location($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "location" is not of type "string"');
        }
        
        $this->params['location'] = $value;
    }

    /**
     * Set parameter lr
     * 
     * @param  string  $value  ID of the country or region to search. Determines the rules for ranking documents. 
     *
     * @return void
     */
    public function set_lr($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "lr" is not of type "string"');
        }
        
        $this->params['lr'] = $value;
    }

    /**
     * Set parameter p
     * 
     * @param  integer  $value  The page number. Count starts from 0. 
     *
     * @return void
     */
    public function set_p($value)
    {
        if (gettype($value) != 'integer') {
            throw new Exception('Paramter "p" is not of type "integer"');
        }
        
        $this->params['p'] = $value;
    }

    /**
     * Set parameter yandex_domain
     * 
     * @param  string  $value  The yandex domain from where the search is performed. 
     *
     * @return void
     */
    public function set_yandex_domain($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "yandex_domain" is not of type "string"');
        }
        
        $this->params['yandex_domain'] = $value;
    }

    /**
     * Get parameter text
     *
     * @return string
     */
    public function get_text($value)
    {
        return $this->params['text'];
    }

    /**
     * Get parameter device
     *
     * @return string
     */
    public function get_device($value)
    {
        return $this->params['device'];
    }

    /**
     * Get parameter lang
     *
     * @return string
     */
    public function get_lang($value)
    {
        return $this->params['lang'];
    }

    /**
     * Get parameter location
     *
     * @return string
     */
    public function get_location($value)
    {
        return $this->params['location'];
    }

    /**
     * Get parameter lr
     *
     * @return string
     */
    public function get_lr($value)
    {
        return $this->params['lr'];
    }

    /**
     * Get parameter p
     *
     * @return integer
     */
    public function get_p($value)
    {
        return $this->params['p'];
    }

    /**
     * Get parameter yandex_domain
     *
     * @return string
     */
    public function get_yandex_domain($value)
    {
        return $this->params['yandex_domain'];
    }
}