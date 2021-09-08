<?php 

/***
 * Searchdata.io Google Scholar Profiles Search SDK
 */
class SearchdataGoogleScholarProfiles extends SearchDataSDK {
    /**
     * The constructor
     *
     * @return void
     */
    public function __construct($api_key)
    {
        parent::__construct($api_key);
        $this->engine = 'google_scholar_profiles';
        $this->api_url = 'https://api.searchdata.io/v1';
        $this->is_searchdata_api = true;
    }
    
    /**
     * Set parameter mauthors
     * 
     * @param  string  $value  The terms that you are searching for (the query). 
     *
     * @return void
     */
    public function set_mauthors($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "mauthors" is not of type "string"');
        }
        
        $this->params['mauthors'] = $value;
    }

    /**
     * Set parameter after_author
     * 
     * @param  string  $value  Defines the next page token and must preceed the value of before_author. 
     *
     * @return void
     */
    public function set_after_author($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "after_author" is not of type "string"');
        }
        
        $this->params['after_author'] = $value;
    }

    /**
     * Set parameter before_author
     * 
     * @param  string  $value  Defines the previous page token. 
     *
     * @return void
     */
    public function set_before_author($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "before_author" is not of type "string"');
        }
        
        $this->params['before_author'] = $value;
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
     * Get parameter mauthors
     *
     * @return string
     */
    public function get_mauthors($value)
    {
        return $this->params['mauthors'];
    }

    /**
     * Get parameter after_author
     *
     * @return string
     */
    public function get_after_author($value)
    {
        return $this->params['after_author'];
    }

    /**
     * Get parameter before_author
     *
     * @return string
     */
    public function get_before_author($value)
    {
        return $this->params['before_author'];
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
}