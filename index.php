<!DOCTYPE html>
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
    
    // String to Validate
    $stringToValidate = 'AsCfgf12*';
    
    // Init Class
    $assignmentObject = new AssignmentClass($stringToValidate, $assignmentContent);
?>
<head>
    <link rel="stylesheet" href="sass/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>
        Guarde Me Assignment
    </title>
</head>
<body>
    <section>
        <div class="assignment-outer-container">
            <div class="assignment-inner">
                <div class="assignment-inner-left">
                    <h1>PRACTICE<span>AREAS</span></h1>
                </div>
                <div class="assignment-inner-right">
                    <div class="assignment-tiles-outer">
                        <?php
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
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>