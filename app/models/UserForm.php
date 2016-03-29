<?php

class UserForm extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $user_id;

    /**
     *
     * @var string
     */
    public $form_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource("'user-form'");
        $this->belongsTo("user_id","Users","id");
        $this->belongsTo("form_id","Forms","id");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user-form';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return UserForm[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return UserForm
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
