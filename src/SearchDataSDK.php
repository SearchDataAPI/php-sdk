<?php 

/***
 * Searchdata.io SDK
 */
class SearchDataSDK {
    protected $api_key;
    protected $engine;
    protected $params;
    protected $api_url;
    protected $is_searchdata_api;

    /**
     * The constructor
     *
     * @return void
     */
    public function __construct($api_key = "")
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
        if ($this->is_searchdata_api) {
            if (!isset($this->engine) || empty($this->engine)) {
                throw new Exception('Missing "engine" parameter');
            }
            if (!isset($this->api_key) || empty($this->api_key)) {
                throw new Exception('Missing "api_key" parameter');
            }
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
        if ($this->is_searchdata_api) {
            if (!isset($this->engine) || empty($this->engine)) {
                throw new Exception('Missing "engine" parameter');
            }
            if (!isset($this->api_key) || empty($this->api_key)) {
                throw new Exception('Missing "api_key" parameter');
            }
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
        if ($this->is_searchdata_api) {
            $params['api_key'] = $this->api_key;
            $params['engine'] = $this->engine;
        }

        $query_string = http_build_query($params, '', '&', PHP_QUERY_RFC3986);

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $this->api_url . "?" . $query_string,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ]);
        
        $response = curl_exec($curl);
        $err = curl_error($curl);

        $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
        $header = substr($response, 0, $header_size);
        $body = substr($response, $header_size);
        
        curl_close($curl);
        
        if ($err) {
            throw new Exception($err);
        } else {
            return [
                'header' => $header,
                'body' => json_decode($body, true)
            ];
        }
    }
}