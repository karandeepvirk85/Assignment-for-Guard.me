<?php
class AssignmentClass{

    public $stringToValidate;
    public $isStringValid = 'String is Not Valid';
    public $assignmentContent;
    public $triAngleValue;
	public $strTextToSearch;

    function __construct($string, $assignmentContent, $triAngleValue = 9, $strTextToSearch){
        $this->stringToValidate = trim($string);
        $this->assignmentContent = $assignmentContent;
        $this->isStringValid();
        $this->triangleValue = $triAngleValue;
		$this->strTextToSearch = $strTextToSearch;
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
        if(empty($this->stringToValidate)){
          $this->isStringValid = 'String Cannot be Empty';
          return;
        }
        if(strpos($this->stringToValidate,'!') > 0){
          $this->isStringValid = 'String cannot have " ! " Symbol';
          return;
        } 
        if(ctype_upper(substr($this->stringToValidate, 2, 1)) === false){
          $this->isStringValid = 'Third Letter must be Upper Case';
          return;
        }

        $this->isStringValid = preg_match("/^(?=.*\d)(?=.*..[A-Z])(?=.*[a-z])(?=.*[A-Z])(?=.*\W)(?=.*[aeiou]).{5,20}.$/i", $this->stringToValidate) ? 'String is Valid' : 'String is not Valid';
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

    public function printTriangle(){
        $strHtml = '';
        $value = 1;
        for($i = 1; $i <= $this->triangleValue; $i++) {
          for($j = 1; $j <= $i; $j++) {
            $strHtml .= $value; 
            $value++;
          }
          $strHtml .= "\r\n";
        }
        return $strHtml;
    }

	/**
	 * Check if text exists in a page
	 */
	public function crawlPage($strUrl){
		
		$webString = file_get_contents($strUrl);

		if (strpos($webString, $this->strTextToSearch) !== false) {
			return $this->strTextToSearch.' found in https://www.guard.me';
		}else{
			return $this->strTextToSearch.' NOT found in https://www.guard.me';;
		}
	}
}

?>
