<?php
use LaravelBook\Ardent\Ardent;
use Illuminate\Auth\UserInterface;

/**
 * User Model
 */
class User extends Ardent implements UserInterface {
  
  // Mass assignment whitelist
  protected $fillable = array('name', 'email', 'password', 'password_confirmation');

  // Validations
  public static $rules = array(
    'name' => 'required',
    'email' => 'required|email',
    'password' => 'required|alpha_num|min:8|confirmed',
    'password_confirmation' => 'required|alpha_num|min:8'
  );

  // Relations
  public static $relationsData = array(
    'todos' => array(self::HAS_MANY, 'Todo')
  );

  // Ardent magic
  public static $passwordAttributes  = array('password');
  public $autoHydrateEntityFromInput = true; // Auomatically pass in proper input data
  public $autoPurgeRedundantAttributes = true; // Automatically purge password_confirmation
  public $autoHashPasswordAttributes = true; // Auto-hash password

  /**
   * Get the unique identifier for the user.
   *
   * @return mixed
   */
  public function getAuthIdentifier() {
    return $this->getKey();
  }

  /**
   * Get the password for the user.
   *
   * @return string
   */
  public function getAuthPassword() {
    return $this->password;
  }
  
  

  

}