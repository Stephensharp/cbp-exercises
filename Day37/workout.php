<?php

require_once 'messages.php';

messages::loadFlashedMessages();

// messages::success('Class successfully made');

// messages::warning('With great power comes great responsibility');

// messages::flashMessages();



foreach(messages::getMessages() as $type => $messages)
{
    foreach($messages as $message)
    {
        echo '<div class="message '.$type.'">'.$message.'</div>';
    }
}
?>