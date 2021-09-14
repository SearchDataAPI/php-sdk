<?php 

namespace SearchdataSDK;

/***
 * Searchdata.io Google Search SDK
 */
class SearchdataGoogleSearch extends SearchDataSDK {
    /**
     * The constructor
     *
     * @return void
     */
    public function __construct($api_key)
    {
        parent::__construct($api_key);
        $this->engine = 'google';
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
     * Set parameter flatten_results
     * 
     * @param  integer  $value  Whether or not to flatten the results. It can be set to 1 (to flatten results) or 0. Must be a value from [0,1]
     *
     * @return void
     */
    public function set_flatten_results($value)
    {
        if (gettype($value) != 'integer') {
            throw new Exception('Paramter "flatten_results" is not of type "integer"');
        }
        if (!in_array($value, [0,1])) {
            throw new Exception('Paramter "flatten_results" does not have a correct value');
        }
        $this->params['flatten_results'] = $value;
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
     * Set parameter cookie
     * 
     * @param  string  $value  Set cookies for your google search. The string must be url encoded.
     *
     * @return void
     */
    public function set_cookie($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "cookie" is not of type "string"');
        }
        
        $this->params['cookie'] = $value;
    }

    /**
     * Set parameter empty_results
     * 
     * @param  integer  $value  Can be set to 0 (to hide empty results) or 1 (to display empty results)Must be a value from [0,1]
     *
     * @return void
     */
    public function set_empty_results($value)
    {
        if (gettype($value) != 'integer') {
            throw new Exception('Paramter "empty_results" is not of type "integer"');
        }
        if (!in_array($value, [0,1])) {
            throw new Exception('Paramter "empty_results" does not have a correct value');
        }
        $this->params['empty_results'] = $value;
    }

    /**
     * Set parameter time_period
     * 
     * @param  string  $value  The period of time for the results. Must be a value from ["last_hour","last_day","last_week","last_month","last_year","custom"]
     *
     * @return void
     */
    public function set_time_period($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "time_period" is not of type "string"');
        }
        if (!in_array($value, ["last_hour","last_day","last_week","last_month","last_year","custom"])) {
            throw new Exception('Paramter "time_period" does not have a correct value');
        }
        $this->params['time_period'] = $value;
    }

    /**
     * Set parameter time_period_min
     * 
     * @param  string  $value  The minimum value for time period when the time_period parameter is set to custom. 
     *
     * @return void
     */
    public function set_time_period_min($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "time_period_min" is not of type "string"');
        }
        
        $this->params['time_period_min'] = $value;
    }

    /**
     * Set parameter time_period_max
     * 
     * @param  string  $value  The maximum value for time period when the time_period parameter is set to custom. 
     *
     * @return void
     */
    public function set_time_period_max($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "time_period_max" is not of type "string"');
        }
        
        $this->params['time_period_max'] = $value;
    }

    /**
     * Set parameter sort_by
     * 
     * @param  string  $value  Sorts the results. Must be a value from ["relevance","date"]
     *
     * @return void
     */
    public function set_sort_by($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "sort_by" is not of type "string"');
        }
        if (!in_array($value, ["relevance","date"])) {
            throw new Exception('Paramter "sort_by" does not have a correct value');
        }
        $this->params['sort_by'] = $value;
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
     * Set parameter lr
     * 
     * @param  string  $value  The languages as a list separated through |. For example: lang_en|lang_ar .
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
     * Set parameter start
     * 
     * @param  integer  $value  The offset of the google search results. Represents the number of results that you want to skip. 
     *
     * @return void
     */
    public function set_start($value)
    {
        if (gettype($value) != 'integer') {
            throw new Exception('Paramter "start" is not of type "integer"');
        }
        
        $this->params['start'] = $value;
    }

    /**
     * Set parameter num
     * 
     * @param  integer  $value  The number of results returned on each page. 
     *
     * @return void
     */
    public function set_num($value)
    {
        if (gettype($value) != 'integer') {
            throw new Exception('Paramter "num" is not of type "integer"');
        }
        
        $this->params['num'] = $value;
    }

    /**
     * Set parameter ijn
     * 
     * @param  integer  $value  Parameter defines the page number for Google Images. There are 100 images per page. This parameter is equivalent to start (offset) = ijn * 100. 
     *
     * @return void
     */
    public function set_ijn($value)
    {
        if (gettype($value) != 'integer') {
            throw new Exception('Paramter "ijn" is not of type "integer"');
        }
        
        $this->params['ijn'] = $value;
    }

    /**
     * Set parameter safe
     * 
     * @param  string  $value  This parameter allows you to filter or not the adult content. Must be a value from ["active","off"]
     *
     * @return void
     */
    public function set_safe($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "safe" is not of type "string"');
        }
        if (!in_array($value, ["active","off"])) {
            throw new Exception('Paramter "safe" does not have a correct value');
        }
        $this->params['safe'] = $value;
    }

    /**
     * Set parameter filter
     * 
     * @param  integer  $value  Defines if the filters for similar results and omitted results are on (set to 1) or off (set to 0). Must be a value from [0,1]
     *
     * @return void
     */
    public function set_filter($value)
    {
        if (gettype($value) != 'integer') {
            throw new Exception('Paramter "filter" is not of type "integer"');
        }
        if (!in_array($value, [0,1])) {
            throw new Exception('Paramter "filter" does not have a correct value');
        }
        $this->params['filter'] = $value;
    }

    /**
     * Set parameter nfpr
     * 
     * @param  integer  $value  Defines if it should exclude or not the auto-corrected query. Can have the value 1 to exclude results or 0 otherwise. Must be a value from [0,1]
     *
     * @return void
     */
    public function set_nfpr($value)
    {
        if (gettype($value) != 'integer') {
            throw new Exception('Paramter "nfpr" is not of type "integer"');
        }
        if (!in_array($value, [0,1])) {
            throw new Exception('Paramter "nfpr" does not have a correct value');
        }
        $this->params['nfpr'] = $value;
    }

    /**
     * Set parameter tbs
     * 
     * @param  string  $value  The parameter defines advanced search parameters that aren't possible in the regular query field. (e.g., advanced search for patents, dates, news, videos, images, apps, or text contents). 
     *
     * @return void
     */
    public function set_tbs($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "tbs" is not of type "string"');
        }
        
        $this->params['tbs'] = $value;
    }

    /**
     * Set parameter ludocid
     * 
     * @param  string  $value  Defines the id (CID) of the Google My Business listing you want to scrape. Also known as Google Place ID. 
     *
     * @return void
     */
    public function set_ludocid($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "ludocid" is not of type "string"');
        }
        
        $this->params['ludocid'] = $value;
    }

    /**
     * Set parameter lsig
     * 
     * @param  string  $value  Parameter that you might have to use to force the knowledge graph map view to show up. 
     *
     * @return void
     */
    public function set_lsig($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "lsig" is not of type "string"');
        }
        
        $this->params['lsig'] = $value;
    }

    /**
     * Set parameter tbm
     * 
     * @param  string  $value  The parameter defines the type of search you want to do. It can be isch for images, vid for videos, nws for news or shop for shoping. If left unset it will continue with the regular search. Must be a value from ["isch","vid","nws","shop"]
     *
     * @return void
     */
    public function set_tbm($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "tbm" is not of type "string"');
        }
        if (!in_array($value, ["isch","vid","nws","shop"])) {
            throw new Exception('Paramter "tbm" does not have a correct value');
        }
        $this->params['tbm'] = $value;
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
     * Get parameter flatten_results
     *
     * @return integer
     */
    public function get_flatten_results()
    {
        return $this->params['flatten_results'];
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
     * Get parameter cookie
     *
     * @return string
     */
    public function get_cookie()
    {
        return $this->params['cookie'];
    }

    /**
     * Get parameter empty_results
     *
     * @return integer
     */
    public function get_empty_results()
    {
        return $this->params['empty_results'];
    }

    /**
     * Get parameter time_period
     *
     * @return string
     */
    public function get_time_period()
    {
        return $this->params['time_period'];
    }

    /**
     * Get parameter time_period_min
     *
     * @return string
     */
    public function get_time_period_min()
    {
        return $this->params['time_period_min'];
    }

    /**
     * Get parameter time_period_max
     *
     * @return string
     */
    public function get_time_period_max()
    {
        return $this->params['time_period_max'];
    }

    /**
     * Get parameter sort_by
     *
     * @return string
     */
    public function get_sort_by()
    {
        return $this->params['sort_by'];
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
     * Get parameter lr
     *
     * @return string
     */
    public function get_lr()
    {
        return $this->params['lr'];
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

    /**
     * Get parameter start
     *
     * @return integer
     */
    public function get_start()
    {
        return $this->params['start'];
    }

    /**
     * Get parameter num
     *
     * @return integer
     */
    public function get_num()
    {
        return $this->params['num'];
    }

    /**
     * Get parameter ijn
     *
     * @return integer
     */
    public function get_ijn()
    {
        return $this->params['ijn'];
    }

    /**
     * Get parameter safe
     *
     * @return string
     */
    public function get_safe()
    {
        return $this->params['safe'];
    }

    /**
     * Get parameter filter
     *
     * @return integer
     */
    public function get_filter()
    {
        return $this->params['filter'];
    }

    /**
     * Get parameter nfpr
     *
     * @return integer
     */
    public function get_nfpr()
    {
        return $this->params['nfpr'];
    }

    /**
     * Get parameter tbs
     *
     * @return string
     */
    public function get_tbs()
    {
        return $this->params['tbs'];
    }

    /**
     * Get parameter ludocid
     *
     * @return string
     */
    public function get_ludocid()
    {
        return $this->params['ludocid'];
    }

    /**
     * Get parameter lsig
     *
     * @return string
     */
    public function get_lsig()
    {
        return $this->params['lsig'];
    }

    /**
     * Get parameter tbm
     *
     * @return string
     */
    public function get_tbm()
    {
        return $this->params['tbm'];
    }
}