<?php
namespace tabularphp\Models;

class GridColumn {
    private $name;
    private $label;
    private $sortable;
    private $sortOrder;
    private $sortDirection;
    private $filter;
    private $searchable;
    private $dataType;
    private $aggregate;


    function __construct($name,$label,$sortable,$sortOrder,$sortDirection,$filter,$searchable,$dataType,$aggregate){
            $this->name = $name;
            $this->label = $label;
            $this->sortable = $sortable;
            $this->sortOrder = $sortOrder;
            $this->sortDirection = $sortDirection;
            $this->filter = $filter;
            $this->searchable = $searchable;
            $this->dataType = $dataType;
            $this->aggregate = $aggregate;
    }
    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of label
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set the value of label
     *
     * @return  self
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get the value of sortable
     */
    public function getSortable()
    {
        return $this->sortable;
    }

    /**
     * Set the value of sortable
     *
     * @return  self
     */
    public function setSortable($sortable)
    {
        $this->sortable = $sortable;

        return $this;
    }

    /**
     * Get the value of sortOrder
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Set the value of sortOrder
     *
     * @return  self
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get the value of sortDirection
     */
    public function getSortDirection()
    {
        return $this->sortDirection;
    }

    /**
     * Set the value of sortDirection
     *
     * @return  self
     */
    public function setSortDirection($sortDirection)
    {
        $this->sortDirection = $sortDirection;

        return $this;
    }

    /**
     * Get the value of filter
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Set the value of filter
     *
     * @return  self
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * Get the value of searchable
     */
    public function getSearchable()
    {
        return $this->searchable;
    }

    /**
     * Set the value of searchable
     *
     * @return  self
     */
    public function setSearchable($searchable)
    {
        $this->searchable = $searchable;

        return $this;
    }

    /**
     * Get the value of dataType
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * Set the value of dataType
     *
     * @return  self
     */
    public function setDataType($dataType)
    {
        $this->dataType = $dataType;

        return $this;
    }

    /**
     * Get the value of aggregate
     */
    public function getAggregate()
    {
        return $this->aggregate;
    }

    /**
     * Set the value of aggregate
     *
     * @return  self
     */
    public function setAggregate($aggregate)
    {
        $this->aggregate = $aggregate;

        return $this;
    }
}