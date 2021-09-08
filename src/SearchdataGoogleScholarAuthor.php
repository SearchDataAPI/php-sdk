<?php 

namespace SearchdataSDK;

/***
 * Searchdata.io Google Scholar Author Search SDK
 */
class SearchdataGoogleScholarAuthor extends SearchDataSDK {
    /**
     * The constructor
     *
     * @return void
     */
    public function __construct($api_key)
    {
        parent::__construct($api_key);
        $this->engine = 'google_scholar_author';
        $this->api_url = 'https://api.searchdata.io/v1';
        $this->is_searchdata_api = true;
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
     * Set parameter author_id
     * 
     * @param  string  $value  Represents the id of the author. 
     *
     * @return void
     */
    public function set_author_id($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "author_id" is not of type "string"');
        }
        
        $this->params['author_id'] = $value;
    }

    /**
     * Set parameter view_op
     * 
     * @param  string  $value  Is used to view specific parts of the page. Must be a value from ["view_citation","list_colleagues"]
     *
     * @return void
     */
    public function set_view_op($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "view_op" is not of type "string"');
        }
        if (!in_array($value, ["view_citation","list_colleagues"])) {
            throw new Exception('Paramter "view_op" does not have a correct value');
        }
        $this->params['view_op'] = $value;
    }

    /**
     * Set parameter sort
     * 
     * @param  string  $value  Sorts the results. Can be set as title to sort by title or pubdate to sort by published date. Must be a value from ["title","pubdate"]
     *
     * @return void
     */
    public function set_sort($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "sort" is not of type "string"');
        }
        if (!in_array($value, ["title","pubdate"])) {
            throw new Exception('Paramter "sort" does not have a correct value');
        }
        $this->params['sort'] = $value;
    }

    /**
     * Set parameter citation_id
     * 
     * @param  string  $value  It's used to retrieve a specific citation. It is required when view_op is set on view_citation. 
     *
     * @return void
     */
    public function set_citation_id($value)
    {
        if (gettype($value) != 'string') {
            throw new Exception('Paramter "citation_id" is not of type "string"');
        }
        
        $this->params['citation_id'] = $value;
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
     * Get parameter device
     *
     * @return string
     */
    public function get_device($value)
    {
        return $this->params['device'];
    }

    /**
     * Get parameter author_id
     *
     * @return string
     */
    public function get_author_id($value)
    {
        return $this->params['author_id'];
    }

    /**
     * Get parameter view_op
     *
     * @return string
     */
    public function get_view_op($value)
    {
        return $this->params['view_op'];
    }

    /**
     * Get parameter sort
     *
     * @return string
     */
    public function get_sort($value)
    {
        return $this->params['sort'];
    }

    /**
     * Get parameter citation_id
     *
     * @return string
     */
    public function get_citation_id($value)
    {
        return $this->params['citation_id'];
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
     * Get parameter start
     *
     * @return integer
     */
    public function get_start($value)
    {
        return $this->params['start'];
    }

    /**
     * Get parameter num
     *
     * @return integer
     */
    public function get_num($value)
    {
        return $this->params['num'];
    }
}