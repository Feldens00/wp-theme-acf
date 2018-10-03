<?php
require("controllers/default-controller.php");

$function = $_REQUEST['function'];

//http_response_code(404);
switch ($function) {
    case 'create-news':
        $news = new DefaultController();
        $return = $news->create_news();
        if ($return) {
          http_response_code(200);
          echo json_encode("ok");
        } 
        break;

    case 'send-contact':
        $contact = new DefaultController();
        $return = $contact->create_contact();
        if ($return) {
          http_response_code(200);
          echo json_encode("ok");
        } 
        break;

    default:
        # code...
        break;
}