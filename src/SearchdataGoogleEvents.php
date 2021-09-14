<?php 

namespace SearchdataSDK;

/***
 * Searchdata.io Google Events Search SDK
 */
class SearchdataGoogleEvents extends SearchDataSDK {
    /**
     * The constructor
     *
     * @return void
     */
    public function __construct($api_key)
    {
        parent::__construct($api_key);
        $this->engine = 'google_events';
        $this->api_url = 'https://api.searchdata.io/v1';
        $this->is_searchdata_api = true;
    }
    
    /**
     * Set parameter q
     * 
     * @param  string  $value  The event that you are searching for (the query). 
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
     * Set parameter uule
     * 
     * @param  string  $value  The google encoded location that you want to use for your search. 
     *
     * @return void
     */
    public function set_uule($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "uule" is not of type "string"');
        }
        
        $this->params['uule'] = $value;
    }

    /**
     * Set parameter hl
     * 
     * @param  string  $value  The language you want to use for your google search. 
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
     * Set parameter gl
     * 
     * @param  string  $value  The country you want to use for your google search. 
     *
     * @return void
     */
    public function set_gl($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "gl" is not of type "string"');
        }
        
        $this->params['gl'] = $value;
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
     * Get parameter location
     *
     * @return string
     */
    public function get_location()
    {
        return $this->params['location'];
    }

    /**
     * Get parameter uule
     *
     * @return string
     */
    public function get_uule()
    {
        return $this->params['uule'];
    }

    /**
     * Get parameter hl
     *
     * @return string
     */
    public function get_hl()
    {
        return $this->params['hl'];
    }

    /**
     * Get parameter gl
     *
     * @return string
     */
    public function get_gl()
    {
        return $this->params['gl'];
    }

    /**
     * Get parameter google_domain
     *
     * @return string
     */
    public function get_google_domain()
    {
        return $this->params['google_domain'];
    }
}