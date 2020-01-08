<?php

class Filter {
    private $name;
    private $text;
    private $argument;
    private $operator;
    private $hasFilter;


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
     * Get the value of text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of text
     *
     * @return  self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get the value of argument
     */
    public function getArgument()
    {
        return $this->argument;
    }

    /**
     * Set the value of argument
     *
     * @return  self
     */
    public function setArgument($argument)
    {
        $this->argument = $argument;

        return $this;
    }

    /**
     * Get the value of operator
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Set the value of operator
     *
     * @return  self
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;

        return $this;
    }

    /**
     * Get the value of hasFilter
     */
    public function getHasFilter()
    {
        return $this->hasFilter;
    }

    /**
     * Set the value of hasFilter
     *
     * @return  self
     */
    public function setHasFilter($hasFilter)
    {
        $this->hasFilter = $hasFilter;

        return $this;
    }
}