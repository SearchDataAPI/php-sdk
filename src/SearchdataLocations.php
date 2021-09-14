<?php 

namespace SearchdataSDK;

/***
 * Searchdata.io Google Search SDK
 */
class SearchdataLocations extends SearchDataSDK {
    /**
     * The constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->api_url = 'https://locations.searchdata.io/';
        $this->is_searchdata_api = false;
    }

    /**
     * Executes the API Call
     *
     * @param  string  $q  The query for the location
     * @param  integer  $limit  The limit
     * 
     * @return void
     */
    public function execute($q = null, $limit = null)
    {
        if (!is_null($q)) {
            $this->set_q($q);
        }
        if (!is_null($limit)) {
            $this->set_limit($limit);
        }
        if (!isset($this->params['q']) || empty($this->params['q'])) {
            throw new Exception('Missing "q" parameter');
        }
        if (!isset($this->params['limit']) || empty($this->params['limit'])) {
            throw new Exception('Missing "limit" parameter');
        }
        $response = parent::execute();
        $response = $this->process_response($response);
        return $response;
    }

    /**
     * Executes the API Call with Raw Parameters
     *
     * @return void
     */
    public function executeRaw($params = [])
    {
        if (!isset($params['q']) || empty($params['q'])) {
            throw new Exception('Missing "q" parameter');
        }
        if (!isset($params['limit']) || empty($params['limit'])) {
            throw new Exception('Missing "limit" parameter');
        }
        $response = parent::executeRaw($params);
        $response = $this->process_response($response);
        return $response;
    }

    /**
     * Set parameter q
     * 
     * @param  string  $value  The location that you are searching for. 
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
     * Set parameter limit
     * 
     * @param  integer  $value  The limit of location results received from the API (set it to the amount of results you want)
     *
     * @return void
     */
    public function set_limit($value)
    {
        if (gettype($value) != 'integer') {
            throw new Exception('Paramter "limit" is not of type "integer"');
        }
        $this->params['limit'] = $value;
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
     * Get parameter limit
     *
     * @return integer
     */
    public function get_limit()
    {
        return $this->params['limit'];
    }

    /**
     * Adds the extra merged value to the results from the API
     * 
     * @param  array  $response  The original response
     *
     * @return array
     */
    private function process_response($response)
    {
        $response['body'] = array_map(function($value) {
            $value['location'] = '"' . $value['Criteria ID'] . '","' . $value['Name'] . '","' . $value['Canonical Name'] . '","' . $value['Parent ID'] . '","' . $value['Country Code'] . '","' . $value['Target Type'] . '",' . $value['Status'];
            return $value;
        }, $response['body']);
        return $response;
    }
}