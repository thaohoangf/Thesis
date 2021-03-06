<?php

class District extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    public $id;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var string
     */
    public $type;

    /**
     *
     * @var string
     */
    public $location;

    /**
     *
     * @var string
     */
    public $provinceid;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'district';
    }

    public function initialize()
    {
        $this->hasMany("id","Ward","districtid");
        $this->belongsTo("provinceid","Province","id");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return District[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return District
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
