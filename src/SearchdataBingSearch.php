<?php 

namespace SearchdataSDK;

/***
 * Searchdata.io Bing Search SDK
 */
class SearchdataBingSearch extends SearchDataSDK {
    /**
     * The constructor
     *
     * @return void
     */
    public function __construct($api_key)
    {
        parent::__construct($api_key);
        $this->engine = 'bing';
        $this->api_url = 'https://api.searchdata.io/v1';
        $this->is_searchdata_api = true;
    }
    
    /**
     * Set parameter q
     * 
     * @param  string  $value  The terms that you are searching for (the query). 
     *
     * @return void
     */
    public function set_q($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "q" is not of type "string"');
        }
        
        $this->params['q'] = $value;
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
     * Set parameter cc
     * 
     * @param  string  $value  The country code from where you want to perform the search. 
     *
     * @return void
     */
    public function set_cc($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "cc" is not of type "string"');
        }
        
        $this->params['cc'] = $value;
    }

    /**
     * Set parameter setLang
     * 
     * @param  string  $value  The user interface language. 
     *
     * @return void
     */
    public function set_setLang($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "setLang" is not of type "string"');
        }
        
        $this->params['setLang'] = $value;
    }

    /**
     * Set parameter offset
     * 
     * @param  integer  $value  The offset of the bing search results. Represents the number of results that you want to skip. 
     *
     * @return void
     */
    public function set_offset($value)
    {
        if (gettype($value) != 'integer') {
            throw new Exception('Paramter "offset" is not of type "integer"');
        }
        
        $this->params['offset'] = $value;
    }

    /**
     * Set parameter mkt
     * 
     * @param  string  $value  The market where the results come from. 
     *
     * @return void
     */
    public function set_mkt($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "mkt" is not of type "string"');
        }
        
        $this->params['mkt'] = $value;
    }

    /**
     * Set parameter safeSearch
     * 
     * @param  string  $value  It's used to filter adult content. Must be a value from ["off","moderate","strict"]
     *
     * @return void
     */
    public function set_safeSearch($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "safeSearch" is not of type "string"');
        }
        if (!in_array($value, ["off","moderate","strict"])) {
            throw new Exception('Paramter "safeSearch" does not have a correct value');
        }
        $this->params['safeSearch'] = $value;
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
     * Get parameter q
     *
     * @return string
     */
    public function get_q()
    {
        return $this->params['q'];
    }

    /**
     * Get parameter device
     *
     * @return string
     */
    public function get_device()
    {
        return $this->params['device'];
    }

    /**
     * Get parameter cc
     *
     * @return string
     */
    public function get_cc()
    {
        return $this->params['cc'];
    }

    /**
     * Get parameter setLang
     *
     * @return string
     */
    public function get_setLang()
    {
        return $this->params['setLang'];
    }

    /**
     * Get parameter offset
     *
     * @return integer
     */
    public function get_offset()
    {
        return $this->params['offset'];
    }

    /**
     * Get parameter mkt
     *
     * @return string
     */
    public function get_mkt()
    {
        return $this->params['mkt'];
    }

    /**
     * Get parameter safeSearch
     *
     * @return string
     */
    public function get_safeSearch()
    {
        return $this->params['safeSearch'];
    }

    /**
     * Get parameter location
     *
     * @return string
     */
    public function get_location()
    {
        return $this->params['location'];
    }
}