switch ($_REQUEST['action']) {
    case 'write':
        file_put_contents('config.txt', $_REQUEST['config']);
        break;
    case 'read':
        $s = file_get_contents('config.txt');
        echo json_encode($s);
        break;
}