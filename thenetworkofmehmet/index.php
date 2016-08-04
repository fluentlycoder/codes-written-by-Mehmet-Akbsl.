<?php require('core/init.php'); ?>

<?php
//Create Topic Object
$topic = new Topic;

$user = new User;


//Get Template & Assign Vars
$template = new Template('templates/frontpage.php');

//Just an example.>    $template->heading = 'This is the template heading';    // ' Echo $heading ' in the frontpage.php 

// Assign Vars  getting the topic from libraries
$template->topics = $topic->getAllTopics();

$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();
$template->totalUsers = $user->getTotalUsers();

// $template->topicNumber = $topic->newTopicNumber();





//Display template
echo $template;