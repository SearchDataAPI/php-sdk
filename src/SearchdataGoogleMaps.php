<?php 

/***
 * Searchdata.io Google Maps Search SDK
 */
class SearchdataGoogleMaps extends SearchDataSDK {
    /**
     * The constructor
     *
     * @return void
     */
    public function __construct($api_key)
    {
        parent::__construct($api_key);
        $this->engine = 'google_maps';
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
     * Set parameter type
     * 
     * @param  string  $value  The type of search. Must be a value from ["search","place"]
     *
     * @return void
     */
    public function set_type($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "type" is not of type "string"');
        }
        if (!in_array($value, ["search","place"])) {
            throw new Exception('Paramter "type" does not have a correct value');
        }
        $this->params['type'] = $value;
    }

    /**
     * Set parameter data
     * 
     * @param  string  $value  This parameter is required only if type is set to place. It has to be constructed in the next sequence: !4m5!3m4!1s + data_id + !8m2!3d + latitude + !4d + longitude 
     *
     * @return void
     */
    public function set_data($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "data" is not of type "string"');
        }
        
        $this->params['data'] = $value;
    }

    /**
     * Set parameter ll
     * 
     * @param  string  $value  Parameter defines GPS coordinates of location where you want your q (query) to be applied. It has to be constructed in the next sequence: @ + latitude + , + longitude + , + zoom 
     *
     * @return void
     */
    public function set_ll($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "ll" is not of type "string"');
        }
        
        $this->params['ll'] = $value;
    }

    /**
     * Set parameter hl
     * 
     * @param  string  $value  The language you want to use for your google maps search. 
     *
     * @return void
     */
    public function set_hl($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "hl" is not of type "string"');
        }
        
        $this->params['hl'] = $value;
    }

    /**
     * Set parameter google_domain
     * 
     * @param  string  $value  Represents the domain from google that you want to use for your search. 
     *
     * @return void
     */
    public function set_google_domain($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "google_domain" is not of type "string"');
        }
        
        $this->params['google_domain'] = $value;
    }

    /**
     * Get parameter q
     *
     * @return string
     */
    public function get_q($value)
    {
        return $this->params['q'];
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
     * Get parameter type
     *
     * @return string
     */
    public function get_type($value)
    {
        return $this->params['type'];
    }

    /**
     * Get parameter data
     *
     * @return string
     */
    public function get_data($value)
    {
        return $this->params['data'];
    }

    /**
     * Get parameter ll
     *
     * @return string
     */
    public function get_ll($value)
    {
        return $this->params['ll'];
    }

    /**
     * Get parameter hl
     *
     * @return string
     */
    public function get_hl($value)
    {
        return $this->params['hl'];
    }

    /**
     * Get parameter google_domain
     *
     * @return string
     */
    public function get_google_domain($value)
    {
        return $this->params['google_domain'];
    }
}