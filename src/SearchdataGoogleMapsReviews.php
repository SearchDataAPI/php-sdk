<?php 

namespace SearchdataSDK;

/***
 * Searchdata.io Google Maps Reviews Search SDK
 */
class SearchdataGoogleMapsReviews extends SearchDataSDK {
    /**
     * The constructor
     *
     * @return void
     */
    public function __construct($api_key)
    {
        parent::__construct($api_key);
        $this->engine = 'google_maps_reviews';
        $this->api_url = 'https://api.searchdata.io/v1';
        $this->is_searchdata_api = true;
    }
    
    /**
     * Set parameter q
     * 
     * @param  string  $value  The place given for results. It has to be constructed in the next sequence: !4m5!3m4!1s + data_id + !8m2!3d + latitude + !4d + longitude. 
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
}