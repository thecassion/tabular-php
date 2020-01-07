<?php
namespace tabularphp\Models;

class GridRequest {

    private $counter;
    private $search;
    private $skip;
    private $take;
    private $columns;
    private $timezoneOffset;

    function __construct($counter,$search,$skip,$take,$columns,$timezoneOffset){
        $this->counter = $counter;
        $this->search = $search;
        $this->skip = $skip;
        $this->take = $take;
        $this->columns = $columns;
        $this->timezoneOffset = $timezoneOffset;
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
     * Get the value of search
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * Set the value of search
     *
     * @return  self
     */
    public function setSearch($search)
    {
        $this->search = $search;

        return $this;
    }

    /**
     * Get the value of skip
     */
    public function getSkip()
    {
        return $this->skip;
    }

    /**
     * Set the value of skip
     *
     * @return  self
     */
    public function setSkip($skip)
    {
        $this->skip = $skip;

        return $this;
    }

    /**
     * Get the value of take
     */
    public function getTake()
    {
        return $this->take;
    }

    /**
     * Set the value of take
     *
     * @return  self
     */
    public function setTake($take)
    {
        $this->take = $take;

        return $this;
    }

    /**
     * Get the value of columns
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * Set the value of columns
     *
     * @return  self
     */
    public function setColumns($columns)
    {
        $this->columns = $columns;

        return $this;
    }

    /**
     * Get the value of timezoneOffset
     */
    public function getTimezoneOffset()
    {
        return $this->timezoneOffset;
    }

    /**
     * Set the value of timezoneOffset
     *
     * @return  self
     */
    public function setTimezoneOffset($timezoneOffset)
    {
        $this->timezoneOffset = $timezoneOffset;

        return $this;
    }
}