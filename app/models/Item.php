<?php
use LaravelBook\Ardent\Ardent;

/**
 * Item Model
 */
class Item extends Ardent {
  
  // Mass assignment whitelist
  protected $fillable = array('description');

  // Validations
  public static $rules = array(
    'description' => 'required'
  );

  // Relations
  public static $relationsData = array(
    'todo' => array(self::BELONGS_TO, 'Todo')
  );

  // Ardent magic
  public $autoHydrateEntityFromInput = true; // Auomatically pass in proper input data
  public $autoPurgeRedundantAttributes = true; // Automatically purge extra attributes

}