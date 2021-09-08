<?php 

/***
 * Searchdata.io SDK
 */
class SearchDataSDK {
    private $api_key;
    private $engine;
    private $params;

    /**
     * The constructor
     *
     * @return void
     */
    public function __construct($api_key)
    {
        $this->api_key = $api_key;
    }

    /**
     * Executes the API Call
     *
     * @return void
     */
    public function execute()
    {
        if (!isset($engine) || empty($engine)) {
            throw new Exception('Missing "engine" parameter');
        }
        if (!isset($api_key) || empty($api_key)) {
            throw new Exception('Missing "api_key" parameter');
        }
        return $this->apiCall($this->params);
    }

    /**
     * Executes the API Call with Raw Parameters
     *
     * @return void
     */
    public function executeRaw($params = [])
    {
        if (!isset($engine) || empty($engine)) {
            throw new Exception('Missing "engine" parameter');
        }
        if (!isset($api_key) || empty($api_key)) {
            throw new Exception('Missing "api_key" parameter');
        }
        return $this->apiCall($params);
    }

    /**
     * The constructor
     *
     * @return void
     */
    private function apiCall($params)
    {
        $params['api_key'] = $this->api_key;
        $params['engine'] = $this->engine;

        $query_string = http_build_query($params, '', '&', PHP_QUERY_RFC3986);

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.searchdata.io/v1?" . $query_string,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ]);
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
            throw new Exception($err);
        } else {
            return $response;
        }
    }
}