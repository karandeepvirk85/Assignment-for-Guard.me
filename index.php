<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="sass/style.css"/>
        <title>
            Guarde Me Assignment
        </title>
    </head>
    <?php 
        // Get Assignment Class
        require_once('classes/Assignment_Controller.php');
        // Create Content Array 
        $assignmentContent = [
            array(
                "title" => "LITIGATION",
                "content" => "I am a paragrpah, Click here to  add your own text and edit me. It's easy"
            ),
            array(
                "title" => "BUSINESS",
                "content" => "I am a paragrpah, Click here to  add your own text and edit me. It's easy"
            ),
            array(
                "title" => "INSOLVENCY",
                "content" => "I am a paragrpah, Click here to  add your own text and edit me. It's easy"
            ),
            array(
                "title" => "FRAUD",
                "content" => "I am a paragrpah, Click here to  add your own text and edit me. It's easy"
            ),
            array(
                "title" => "DISPUTE RESOLUTION",
                "content" => "I am a paragrpah, Click here to  add your own text and edit me. It's easy"
            ),
            array(
                "title" => "TAX",
                "content" => "I am a paragrpah, Click here to  add your own text and edit me. It's easy"
            ),
        ];

        // Floyd Triangle
        $triangleValue = isset($_POST['floyd_triangle']) ? $_POST['floyd_triangle'] : 9;
        // String to Validate
        $stringToValidate = isset($_POST['string_to_validate']) ? $_POST['string_to_validate'] : 'sfR234ki*&';  
        // text for Crawler Function
        $strTextToSearch = isset($_POST['text_to_search']) ? trim($_POST['text_to_search']) : 'Real People. Real Solutions. Real Life.'; 
        // Init Class
        if(class_exists('AssignmentClass')){
            $assignmentObject = new AssignmentClass(
                $stringToValidate, 
                $assignmentContent, 
                $triangleValue, 
                $strTextToSearch
            );
        }
    ?>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Guard.Me Assignment</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="assets/assignment.pdf">Answers PDF</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://github.com/karandeepvirk85/Assignment-for-Guard.me">GitHub Repo</a>
                    </li>
                </ul>
            </div>
        </nav>
        <section>
            <div class="assignment-outer-container">
                <div class="string-validity">
                    <form method="POST" action="">
                        <div class="form-group">
                            <h1>Test Functions</h1>
                            <label class="mt-2" for="string-to-validate">String To Validate</label>
                            <input type="text" id="string-to-validate" class="form-control form-control-lg"  value="<?php echo !isset($_POST['string_to_validate']) ? $assignmentObject->stringToValidate : '';?>" placeholder="String to Check Validity" name="string_to_validate"/>
                            
                            <label class="mt-2" for="floyd-triangle">Floyd Triangle</label>
                            <input type ="number" id="floyd-triangle" class="form-control form-control-lg" value="<?php echo !isset($_POST['floyd_triangle']) ? $assignmentObject->triangleValue : '';?>" placeholder="Floyd Triangle Value" name="floyd_triangle"/>
                            
                            <label class="mt-2" for="text-to-search">Text to Search</label>
                            <input type ="text" id="text-to-search" class="form-control form-control-lg" name="text_to_search" value="<?php echo !isset($_POST['text_to_search']) ? $assignmentObject->strTextToSearch : '';?>" placeholder ="Text to Search (https://www.guard.me)"/>  
                            <button type="submit" class="mt-2 btn-lg btn btn-primary">Submit</button>
                        </div>
                    </form>

                    <div class="result">
                        <h1>RESULT</h1>
                        <p><strong><?php echo $assignmentObject->stringToValidate;?></strong> <?php echo $assignmentObject->isStringValid;?></p>
                        <p><?php echo $assignmentObject->crawlPage("https://www.guard.me", $assignmentObject->strTextToSearch);?></p>
                    </div>
                    
                    <div class="flyod-triangle">
                        <h1>Floyd Triangle</h1>
                        <?php echo nl2br($assignmentObject->printTriangle(6), false);?>
                    </div>
                </div>

                <div class="assignment-inner">
                    <div class="assignment-inner-left">
                        <h1>PRACTICE<span>AREAS</span></h1>
                    </div>
                    <div class="assignment-inner-right">
                        <div class="assignment-tiles-outer">
                            <?php
                            if(!empty($assignmentObject->assignmentContent)){
                                foreach($assignmentObject->assignmentContent as $arrContent){?>
                                    <div class="assignment-tiles">
                                        <div class="tile-inner">
                                            <div class="tile-title">
                                            <i class="fa fa-stop"></i>
                                            <h2><?php echo $arrContent['title'];?></h2>
                                        </div>
                                        <div class="tile-content"><?php echo $arrContent['content'];?></div>
                                        </div>
                                    </div>
                                <?php 
                                }
                            }?>
                        </div>
                    </div>
                </div> 
            </div>
        </section>
    </body>
</html>
