<?php
namespace tabularphp\Connectors\Codeigniter;

use tabularphp\Models\GridResponse;

class  Response {

    private $subset ;

    private $request;

    function __construct($subset,$request){
        $this->subset =$subset;
        $this->request = $request;
    }

    public static function createGridResponse($subset,$request) {
        self::handleDatagridRequest();
    }

    private static function handleDatagridRequest(){
        var_dump($_POST);
    }

    private function getAggregationPayload(){

    }

    private function applyFiltering(){

    }

    private function applySorting(){

    }


    private function applyFreeTextSearch(){

    }


    /**
     * Get the value of subset
     */
    public function getSubset()
    {
        return $this->subset;
    }

    /**
     * Set the value of subset
     *
     * @return  self
     */
    public function setSubset($subset)
    {
        $this->subset = $subset;

        return $this;
    }

    /**
     * Get the value of request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set the value of request
     *
     * @return  self
     */
    public function setRequest($request)
    {
        $this->request = $request;

        return $this;
    }
}

?>