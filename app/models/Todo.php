<?php
use LaravelBook\Ardent\Ardent;

/**
 * Todo Model
 */
class Todo extends Ardent {
  
  // Mass assignment whitelist
  protected $fillable = array('title');

  // Validations
  public static $rules = array(
    'title' => 'required'
  );

  // Relations
  public static $relationsData = array(
    'user' => array(self::BELONGS_TO, 'User'),
    'items' => array(self::HAS_MANY, 'Item')
  );

  // Ardent magic
  public $autoHydrateEntityFromInput = true; // Auomatically pass in proper input data
  public $autoPurgeRedundantAttributes = true; // Automatically purge extra attributes

}