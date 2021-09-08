<?php 

namespace SearchdataSDK;

/***
 * Searchdata.io Google Autocomplete Search SDK
 */
class SearchdataGoogleAutocomplete extends SearchDataSDK {
    /**
     * The constructor
     *
     * @return void
     */
    public function __construct($api_key)
    {
        parent::__construct($api_key);
        $this->engine = 'google_autocomplete';
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
     * Get parameter q
     *
     * @return string
     */
    public function get_q($value)
    {
        return $this->params['q'];
    }
}