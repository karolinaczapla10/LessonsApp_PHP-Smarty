<?php
require_once('./../smarty/Smarty.class.php');

session_start(); // definicja klasy znanim zaladujemy sesje 
//tworzy ciasteczko po ktorym nas rozponaje

$smarty = new Smarty();
//konfiguracja dla smarta katalogow i utowrzenie obiektu smarty
//tworzenie obiektu bazy danych
$db = new mysqli('localhost', 'root','','conversations');


$smarty->setTemplateDir('./../templates/admin');
$smarty->setCompileDir('./../templates_c');
$smarty->setCacheDir('./../cache');
$smarty->setConfigDir('./../configs');

if(isset($_SESSION['login']))
{
    $smarty->assign('login',$_SESSION['login']);
}
if(isset($_REQUEST['action']))
{
    //zapytanie do bazy aby sprawdzic popranosc loginu i hasla uzytkownika 
    switch($_REQUEST['action']){
        case 'checkLogin':
            $sql=$db->prepare("SELECT * FROM admin WHERE login=? LIMIT 1");
            $sql->bind_param("s", $_REQUEST['login']);
            $sql->execute();
            $result = $sql->get_result();
            if($result->num_rows == 0)
            {
                $smarty->assign('error',"Bledny login lub haslo");
                $smarty->display('login.tpl');
                exit;
            }
            $row = $result->fetch_assoc();
            if(password_verify($_REQUEST['passwd'],$row['passwd'])){
                $_SESSION['userID'] = $row['id'];
                $_SESSION['login'] = $row['login'];
                $smarty->assign('login',$_SESSION['login']);
                $smarty->display('index.tpl');

            }
            else
            {
                //niepoprawne
                $smarty->assign('error',"Bledny login lub haslo");
                $smarty->display('login.tpl');
            }
        break;
        default:
            $smarty->display('index.tpl');
            //pobieranhie danych i przekazywane do smarty do wygenerowania odpowiedniego widooku 
        case 'list':
            $sql = $db->prepare("SELECT * FROM teacher");
            $sql->execute();
            $result = $sql->get_result();
            $teachers = array();
            while($row=$result->fetch_assoc())
            {
                array_push($teachers, $row);
            }
            $smarty->assign('teachers', $teachers);
            $smarty->display('teachers.tpl');
        break;
        case 'studentList':
            $sql = $db->prepare("SELECT * FROM student WHERE ID > 0");
            $sql->execute();
            $result = $sql->get_result();
            $students= array();
            while($row=$result->fetch_assoc())
            {
                array_push($students, $row);
            }
            $smarty->assign('students', $students);
            $smarty->display('students.tpl');
            break;
        case 'roomList':
                $sql = $db->prepare("SELECT * FROM room");
                $sql->execute();
                $result = $sql->get_result();
                $rooms = array();
                while($row=$result->fetch_assoc())
                {
                    array_push($rooms, $row);
                }
                $smarty->assign('rooms', $rooms);
                $smarty->display('rooms.tpl');
            break;
        //formularz umozliwiajacy dodanie nowego terminu spotkania
        case 'blankMeeting':
            $sql = $db->prepare("SELECT * FROM teacher");
            $sql->execute();
            $result = $sql->get_result();
            $teachers = array();
            while($row=$result->fetch_assoc())
            {
                array_push($teachers, $row);
            }
            $smarty->assign('teachers', $teachers);
            $sql = $db->prepare("SELECT * FROM room");
            $sql->execute();
            $result = $sql->get_result();
            $rooms = array();
            while($row=$result->fetch_assoc())
            {
                array_push($rooms, $row);
            }
            $smarty->assign('rooms', $rooms);
            $smarty->display('blankMeeting.tpl');

        break;
        //dodaje nowe terminy spotkan do bazy danych na podstawie danych z formularza
        case 'addTermin': //wypelnienie dnia termiami
            $shiftStart = strtotime($_REQUEST['shiftStart']);
            $shiftEnd = strtotime($_REQUEST['shiftEnd']);
            $intervalSeconds = $_REQUEST['interval'] * 60;
            $currentTime = $shiftStart;
            $meetings = array();
            while($currentTime < $shiftEnd)
            {
                array_push($meetings, $currentTime);
                $currentTime += $intervalSeconds;
            }
            foreach($meetings as $meeting){
                $sql = $db->prepare("INSERT INTO meeting(id,date,student,teacher,room)
                VALUES (NULL, FROM_UNIXTIME(?),0,?,?)"); //pacjent jest pusty o id=0
                $sql->bind_param('iii',$meeting,$_REQUEST['teacher'],$_REQUEST['room']);
                $sql->execute();
            }
            $smarty->display('index.tpl');
        break;
        //konczy sesje
        case 'logoff':
            session_destroy();
            header('Location: index.php');
            break;
    }
}
else{
    if(isset($_SESSION['login']))
        $smarty->display('index.tpl');
    else
        $smarty->display('login.tpl');
}
?>