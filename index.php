<?php
require_once('./smarty/Smarty.class.php');

session_start(); // definicja klasy znanim zaladujemy sesje 
//tworzy ciasteczko po ktorym nas rozponaje

$smarty = new Smarty();
//konfiguracja dla smarta katalogow i utowrzenie obiektu smarty
//tworzenie obiektu bazy danych
$db = new mysqli('localhost', 'root','','conversations');


$smarty->setTemplateDir('./templates');
$smarty->setCompileDir('./templates_c');
$smarty->setCacheDir('./cache');
$smarty->setConfigDir('./configs');

if(isset($_SESSION['userID']))
{
    $smarty->assign('name',$_SESSION['name']);
}

if(isset($_REQUEST['action'])){
    //zostalo przekazane polecenie do aplikacji
    //wyslanie zadania do aplikacji

    switch($_REQUEST['action'])
    {   case 'glowna':
            $smarty->display('index.tpl');
        break;
        case 'login':
            $smarty->display('login.tpl'); 
        break;
        //LIMIT 1  - zworci mi zawsze 1 wiersz albo 0 wierszy
        case 'checkLogin':
            $sql=$db->prepare("SELECT * FROM student WHERE email=? LIMIT 1");
            $sql->bind_param("s", $_REQUEST['email']);
            $sql->execute();
            //wyciagniecie wyniku kwerendy - obiekt typu get_result
            $result = $sql->get_result();
            //brak wierszy - nie ma takiego uzytkownika
            if($result->num_rows == 0) 
            {
                $smarty->assign('error',"Bledny login lub haslo");
                $smarty->display('login.tpl');
                exit;
            }
            $row = $result->fetch_assoc();//1 wiersz jako tablica asocjacyjna
            //porownanie hasla od uzytkownika z haslem z bazy danych
            if(password_verify($_REQUEST['passwd'],$row['passwd'])){
                //do sesji zapisuje informacje o uzytkowniku
                $_SESSION['userID'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['surname'] = $row['surname'];
                $smarty->assign('name',$_SESSION['name']);
                $smarty->display('index.tpl');

            }
            else
            {
                //niepoprawne
                $smarty->assign('error',"Bledny login lub haslo");
                $smarty->display('login.tpl');
            }
        break;
        case 'logoff':
            session_destroy();
            header('Location: index.php');
            break;
        case 'registration':
            $smarty->display('registration.tpl'); 
        break;
        case 'checkRegister':
            //wstawienie do tabeli za pomoca kwerendy prepare
            //ssss-4 stringi
            $sql = $db->prepare("INSERT INTO student (id,email,passwd,name,surname) VALUES(NULL, ?, ?, ?, ?)");
            $passwdHash = password_hash($_REQUEST['passwd'],PASSWORD_ARGON2I);//hashowanie hasla aby w bazie nie wyswietlalo sie
            $sql->bind_param("ssss", $_REQUEST['email'],$passwdHash,$_REQUEST['name'],$_REQUEST['surname']);
            $args =
        [
            'surname' => [
                'filter' => FILTER_VALIDATE_REGEXP,
                'options' => ['regexp' => '/^[A-Z]{1}[a-ząęłńśćźżó-]{1,25}$/']
            ],
            'email' => FILTER_SANITIZE_EMAIL,
            'name' => [
                'filter' => FILTER_VALIDATE_REGEXP,
                'options' => ['regexp' => '/^[A-Z]{1}[a-ząęłńśćźżó-]{1,25}$/']
            ],

        ];
            $dane = filter_input_array(INPUT_POST, $args);
            //pokaż tablicę po przefiltrowaniu - sprawdź wyniki filtrowania:
            //Sprawdź czy dane w tablicy $dane nie zawierają błędów walidacji:
            $errors = "";
            foreach ($dane as $key => $val) {
                 if ($val === false or $val === NULL) 
                 {
                     $errors .= $key . " ";
                }
            }
            if ($errors === "") 
            {
                $sql->execute();//wykonanie kwerendy
                $result = $sql->get_result();
                $smarty->display('login.tpl');
            } else {
                $smarty->assign('error',"Bledny format imienia lub nazwiska. Podaj z dużej litery");
                $smarty->display('registration.tpl');
            }
            break;
        case 'lessons':
            $sql=$db->prepare("SELECT * FROM teacher");
            $sql->execute();
            $result = $sql->get_result();
            $teachers = array();//tworzenie tablicy pustej
            while($row = $result ->fetch_assoc()) 
            {
                array_push($teachers, $row);//tworzenie tablicy nauczycieli ktora zaczytujemy z bazy danych
            }
            $smarty->assign('teachers',$teachers);//przekazanie tablicy do smarty

            //pobieranie danych calego spotkania dotyczace konkretnego pacjenta
            $sql = $db->prepare("SELECT *, meeting.id AS meeting_id FROM meeting 
                            LEFT JOIN teacher ON teacher.id = meeting.teacher WHERE student=?");
            $sql->bind_param('i', $_SESSION['userID']);
            $sql->execute();
            $meetings = array();
            $result = $sql->get_result();
            while($row = $result ->fetch_assoc())
            {
                array_push($meetings, $row);
            }
            $smarty->assign('meetings', $meetings);
            $smarty->display('lessons.tpl');
        break;
        case 'makeMeeting':
            //zaczytujemy dane z bazy danych aby utworzyc spotkanie na ktore użytkownik bedzie sie umwaial
            $sql = $db->prepare("SELECT *, meeting.id AS meeting_id FROM meeting 
                                LEFT JOIN teacher ON teacher.id = meeting.teacher 
                                LEFT JOIN room ON room.id = meeting.room 
                                WHERE teacher = ? AND student = 0");
            // studenta zmiania sie jezeli jestesmy umowieni na wizyte z 0 na id
            $sql->bind_param('i', $_REQUEST['teacher']);//bindujemy nauczyciela ktory student wybral
            $sql->execute();
            $result = $sql->get_result();
            $meetings = array();
            while($row = $result ->fetch_assoc())
            {
                array_push($meetings, $row);
            }
            $smarty->assign('meetings', $meetings);
            $smarty->display('room.tpl');
            break;
        case 'saveMeeting':
            $sql = $db->prepare("UPDATE meeting SET student = ? WHERE id = ?");
            $sql->bind_param("ii",$_SESSION['userID'],$_REQUEST['meeting_id']);
            $sql->execute();
            header('Location: index.php?action=lessons');
            break;
        case 'clearMeeting':
            //zerowanie id studenta ktory jest przypisany do wizyty
            $sql = $db->prepare("UPDATE meeting SET student = 0 WHERE id = ?");
            $sql->bind_param("i",$_REQUEST['meeting_id']);
            $sql->execute();
            header('Location: index.php?action=lessons');
            break;

        default:
             $smarty->display('index.tpl'); //jezeli akcja nierozpoznana to wyswieli strone glowna
        break;

    }
}
else{
    //wyswietlenie storny glownej
    $smarty->display('index.tpl');
}
?>