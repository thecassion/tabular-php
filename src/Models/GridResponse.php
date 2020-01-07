<?php
namespace tabularphp\Models;

class GridResponse {

    private $aggregationPayload;
    private $counter;
    private $currentPage =0;
    private $filteredRecordCount;
    private $payload;
    private $totalPages=1;
    private $totalRecordCount;

    function __construct($aggregationPayload, $counter, $currentPage, $filteredRecordCount,$payload, $totalPages, $totalRecordCount) {
        $this->aggregationPayload = $aggregationPayload;
        $this->counter = $counter;
        $this->currentPage = $currentPage;
        $this->filteredRecordCount = $filteredRecordCount;
        $this->payload = $payload;
        $this->totalPages = $totalPages;
        $this->totalRecordCount = $totalRecordCount;
      }



    /**
     * Get the value of aggregationPayload
     */
    public function getAggregationPayload()
    {
        return $this->aggregationPayload;
    }

    /**
     * Set the value of aggregationPayload
     *
     * @return  self
     */
    public function setAggregationPayload($aggregationPayload)
    {
        $this->aggregationPayload = $aggregationPayload;

        return $this;
    }

    /**
     * Get the value of counter
     */
    public function getCounter()
    {
        return $this->counter;
    }

    /**
     * Set the value of counter
     *
     * @return  self
     */
    public function setCounter($counter)
    {
        $this->counter = $counter;

        return $this;
    }

    /**
     * Get the value of currentPage
     */
    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * Set the value of currentPage
     *
     * @return  self
     */
    public function setCurrentPage($currentPage)
    {
        $this->currentPage = $currentPage;

        return $this;
    }

    /**
     * Get the value of filteredRecordCount
     */
    public function getFilteredRecordCount()
    {
        return $this->filteredRecordCount;
    }

    /**
     * Set the value of filteredRecordCount
     *
     * @return  self
     */
    public function setFilteredRecordCount($filteredRecordCount)
    {
        $this->filteredRecordCount = $filteredRecordCount;

        return $this;
    }

    /**
     * Get the value of payload
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Set the value of payload
     *
     * @return  self
     */
    public function setPayload($payload)
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * Get the value of totalPages
     */
    public function getTotalPages()
    {
        return $this->totalPages;
    }

    /**
     * Set the value of totalPages
     *
     * @return  self
     */
    public function setTotalPages($totalPages)
    {
        $this->totalPages = $totalPages;

        return $this;
    }

    /**
     * Get the value of totalRecordCount
     */
    public function getTotalRecordCount()
    {
        return $this->totalRecordCount;
    }

    /**
     * Set the value of totalRecordCount
     *
     * @return  self
     */
    public function setTotalRecordCount($totalRecordCount)
    {
        $this->totalRecordCount = $totalRecordCount;

        return $this;
    }
}
?>