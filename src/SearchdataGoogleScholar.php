<?php 

namespace SearchdataSDK;

/***
 * Searchdata.io Google Scholar Search SDK
 */
class SearchdataGoogleScholar extends SearchDataSDK {
    /**
     * The constructor
     *
     * @return void
     */
    public function __construct($api_key)
    {
        parent::__construct($api_key);
        $this->engine = 'google_scholar';
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
     * Set parameter cites
     * 
     * @param  string  $value  Parameter defines unique ID for an article to trigger Cited By searches. 
     *
     * @return void
     */
    public function set_cites($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "cites" is not of type "string"');
        }
        
        $this->params['cites'] = $value;
    }

    /**
     * Set parameter as_ylo
     * 
     * @param  string  $value  The parameter defines the year from when you want the results to be included. 
     *
     * @return void
     */
    public function set_as_ylo($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "as_ylo" is not of type "string"');
        }
        
        $this->params['as_ylo'] = $value;
    }

    /**
     * Set parameter as_yhi
     * 
     * @param  string  $value  The parameter defines the year until which you want the results to be included. 
     *
     * @return void
     */
    public function set_as_yhi($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "as_yhi" is not of type "string"');
        }
        
        $this->params['as_yhi'] = $value;
    }

    /**
     * Set parameter scisbd
     * 
     * @param  integer  $value  Represents if it should include only abstract results (set on 1) or all the results (set on 0). Must be a value from [0,1]
     *
     * @return void
     */
    public function set_scisbd($value)
    {
        if (gettype($value) != 'integer') {
            throw new Exception('Paramter "scisbd" is not of type "integer"');
        }
        if (!in_array($value, [0,1])) {
            throw new Exception('Paramter "scisbd" does not have a correct value');
        }
        $this->params['scisbd'] = $value;
    }

    /**
     * Set parameter as_vis
     * 
     * @param  string  $value  Represents if you would like to include citations or not. Set it to 1 to exclude citations or 0 otherwise. Must be a value from [0,1]
     *
     * @return void
     */
    public function set_as_vis($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "as_vis" is not of type "string"');
        }
        if (!in_array($value, [0,1])) {
            throw new Exception('Paramter "as_vis" does not have a correct value');
        }
        $this->params['as_vis'] = $value;
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
     * Get parameter q
     *
     * @return string
     */
    public function get_q()
    {
        return $this->params['q'];
    }

    /**
     * Get parameter cites
     *
     * @return string
     */
    public function get_cites()
    {
        return $this->params['cites'];
    }

    /**
     * Get parameter as_ylo
     *
     * @return string
     */
    public function get_as_ylo()
    {
        return $this->params['as_ylo'];
    }

    /**
     * Get parameter as_yhi
     *
     * @return string
     */
    public function get_as_yhi()
    {
        return $this->params['as_yhi'];
    }

    /**
     * Get parameter scisbd
     *
     * @return integer
     */
    public function get_scisbd()
    {
        return $this->params['scisbd'];
    }

    /**
     * Get parameter as_vis
     *
     * @return string
     */
    public function get_as_vis()
    {
        return $this->params['as_vis'];
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
     * Get parameter safe
     *
     * @return string
     */
    public function get_safe()
    {
        return $this->params['safe'];
    }
}