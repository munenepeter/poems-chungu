<?php

namespace Chungu\Models;

use Chungu\Core\Mantle\App;

class Model {

    protected $primaryKey = 'id';
    public function __get($name) {
        return $name;
    }
    public function __set($name, $value) {
        $this->$name = $value;
    }
    public static function getInstance() {
        $model_name = new static;
        return $model_name;
    }


    private static function tableName() {

        //get table name form the model
        $tableName  = get_class(static::getInstance());
        //convert to lowercase and pluralize it
        $tableName  = plural(strtolower($tableName), 2);
        // remove the namespace
        $tableName = substr($tableName, strrpos($tableName, '\\') + 1);

        return $tableName;
        //users
    }

    public static function create(array $data) {

        App::get('database')->insert(static::tableName(), $data);
        //User::create(['name'=>'peter']);
    }
    public static function update($dataToUpdate, $where, $isValue) {

        App::get('database')->update(static::tableName(), $dataToUpdate, $where, $isValue);
        //User::create(['name'=>'peter']);
    }
    /**
     * Delete a record
     * @param string $where name of column in db
     * @param string $isValue value of the column
     * 
     * @return bool
     */
    public static function delete($where, $isValue) {

        return App::get('database')->delete(static::tableName(), $where, $isValue);
        //User::delete('id', 23]);
    }
    public static function all() {
        //Returns all the records in the db for a certain  model/table

        return App::get('database')->selectAll(static::tableName());
        //User::all();
    }
    public static function select($column, $value, $condition = "=") {
        //Returns all the records in the db for a certain  model/table
        return App::get('database')->selectAllWhere(static::tableName(), $column, $condition, $value);
        //User::select('id',89);
    }

    /**
     * Model::Where
     * 
     * Selects given column names given a certain condition
     * 
     * @param array $columns The columns in the db to select from
     * @param array $condition The condition to be fulfiled by the where clause
     * 
     * @example 
     * Model::where(['id', 'name','slug'], ['id', 90]);
     * 
     * @return \Chungu\Models\Model;
     */
    public static function where($columns, $condition) {
        //Returns all the records in the db for a certain  model/table

        return  App::get('database')->selectWhere(static::tableName(), $columns, $condition);
        //User::where(['id', 'name','slug'], ['id', 90]); -> return id, name & slug where the id is 90
    }
    public static function query(string $sql) {
        //Returns all the records in the db for a certain  model/table

        return  App::get('database')->query($sql);
        //User::query(Select ,, form , ); 
    }
    public static function count(array $condition) {
        //Returns all the records in the db for a certain  model/table

        return  App::get('database')->count(static::tableName(), $condition)[0]->count;
        //User::query(Select ,, form , ); 
    }
    /**
     * find
     * 
     * Selects every where an id matches the one given
     * 
     * @param int $id the id of the column to be selected
     * 
     * @return \Chungu\Models\Model;
     */
    public static function find($id) {

        $item =  App::get('database')->selectAllWhereID(static::tableName(), $id);
        
        if (empty($item)) {
            throw new \Exception(message: "There is no results for your query!", code: 404);
        }
        return $item[0];
    }


    public function belongsTo($relatedModelClass, $foreignKey = null) {
        $foreignKey = $foreignKey ?: $this->getForeignKey($relatedModelClass);

        // Fetch the related model based on the foreign key value
        return $relatedModelClass::find($this->$foreignKey);
    }

    public function hasMany($relatedModelClass, $foreignKey = null) {
        $foreignKey = $foreignKey ?: $this->getForeignKey();

        // Fetch all related models that have the foreign key matching this model's primary key
        return $relatedModelClass::where($foreignKey, $this->{$this->primaryKey})->get();
    }

    protected function getForeignKey($relatedModelClass = null) {
        if (!$relatedModelClass) {
            $relatedModelClass = get_called_class();
        }

        return strtolower(class_basename($relatedModelClass)) . '_' . $this->primaryKey;
    }
}
