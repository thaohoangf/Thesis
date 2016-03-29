<?php

use Phalcon\Mvc\Model\Validator\Email as Email;

class Users extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
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
    public $fullname;

    /**
     *
     * @var string
     */
    public $password;

    /**
     *
     * @var string
     */
    public $date_of_birth;

    /**
     *
     * @var integer
     */
    public $code;

    /**
     *
     * @var string
     */
    public $class;

    /**
     *
     * @var string
     */
    public $phone;

    /**
     *
     * @var string
     */
    public $email;

    /**
     *
     * @var integer
     */
    public $role_id;

    public function initialize()
    {
        $this->belongsTo("ethnic_code","Ethnic","id");
        $this->belongsTo("major_code","Major","id");
        $this->hasMany("id","UserForm","user_id");
        $this->hasManyToMany("id","UserForm","user_id","form_id","Forms","id");
    }

    /**
     * Validations and business logic
     *
     * @return boolean
     */


    public function validation()
    {
        $this->validate(
            new Email(
                array(
                    'field' => 'email',
                    'required' => true,
                )
            )
        );

        if ($this->validationHasFailed() == true) {
            return false;
        }

        return true;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'users';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    public function addUser($information)
    {
        (new Users())->$this->save($information);
    }
}
