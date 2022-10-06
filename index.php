<?php
class StringValidate{

    public $stringToValidate;
    public $isStringValid = false;

    function __construct($string){
        $this->stringToValidate = $string;
        $this->isStringValid();
    }
    /**
    * 
    * ->String Validate
    * @ at least one letter
    * @ at least two digits
    * @ at least one special character, excluding the exclamation mark
    * @ minimum 5 characters, maximum 20 characters
    * @ the third letter must be uppercase
    * @ it must contain 1 vowel (a, e, i, o, u)
    */
    public function isStringValid(){
        if(empty($this->stringToValidate) || strpos($this->stringToValidate,'!') || ctype_upper(substr($this->stringToValidate, 2, 1)) === false){
            $this->isStringValid = false;
        } 

        $this->isStringValid = preg_match("/^(?=.*\d)(?=.*..[A-Z])(?=.*[a-z])(?=.*[A-Z])(?=.*\W)(?=.*[aeiou]).{5,20}.$/i", $this->stringToValidate) ? true : false;
    }

    /**
     * Print Floyd Triagle
     * @ Parameter: Rows
     * 
     */
    // public function printTriangle($numberRows){
    //     $val = 1;
    //     for($i = 1; $i <= $numberRows; $i++) {
    //     for($j = 1; $j <= $i; $j++) {
    //         echo "$val "; 
    //         $val++;
    //     }
    //         echo "\n"; 
    //     }
    // }

    public function FloydTriangle($n){
        $strHtml = '';
        $value = 1;
        for($i = 1; $i <= $n; $i++) {
          for($j = 1; $j <= $i; $j++) {
            $strHtml .= $value; 
            $value++;
          }
          $strHtml .= "\r\n";
        }
        return $strHtml;
      }
}

$stringValidateObject = new StringValidate('jkWki123*');
?>

<h1>Guard.Me Assignment</h1>
<h2>String Validate</h2>
<p>
<?php 
    var_dump($stringValidateObject->isStringValid);
?>
<h2>Floyd Triangle</h2>
<?php
    echo nl2br($stringValidateObject->FloydTriangle(20));
?>
