<?php
    session_start();

    if( isset($_POST['button']) )
    {
        $_SESSION['category'] = $_POST['choices'];
        if ( $_POST['choices'] == "fm44a" ) // Full marathon - Adult
        {
            $_SESSION['raceCategories'] = "Full Marathon";
            $_SESSION['raceDistance']   = "42.195 km";
            $_SESSION['raceDate']       = "Sunday 1 July 2018";
            $_SESSION['arrivalTime']    = "4am";
            $_SESSION['startTime']      = "5am";
            $_SESSION['minAge']         = "18";
            $_SESSION['raceCutOffTime'] = "6 hour 45 minutes";
            $_SESSION['racePrice']      = "RM 80";
        } elseif ( $_POST['choices'] == "hm22a" ) // Half marathon - Adult
        {
            $_SESSION['raceCategories'] = "Half Marathon";
            $_SESSION['raceDistance']   = "21.95 km";
            $_SESSION['raceDate']       = "Sunday 1 July 2018";
            $_SESSION['arrivalTime']    = "5am";
            $_SESSION['startTime']      = "6am";
            $_SESSION['minAge']         = "15";
            $_SESSION['raceCutOffTime'] = "3 hours 20 minutes";
            $_SESSION['racePrice']      = "RM 80";
        } elseif ( $_POST['choices'] == "hm10a" ) // 10km run - Adult
        {
            $_SESSION['raceCategories'] = "10km Marathon (Adult)";
            $_SESSION['raceDistance']   = "10 km";
            $_SESSION['raceDate']       = "Sunday 1 July 2018";
            $_SESSION['arrivalTime']    = "5.30am";
            $_SESSION['startTime']      = "6.30am";
            $_SESSION['minAge']         = "13";
            $_SESSION['raceCutOffTime'] = "1 hours 40 minutes";
            $_SESSION['racePrice']      = "RM 80";
        } elseif ( $_POST['choices'] == "hm10c" ) // 10km run - Child
        {
            $_SESSION['raceCategories'] = "10km Marathon (Child)";
            $_SESSION['raceDistance']   = "10 km";
            $_SESSION['raceDate']       = "Sunday 1 July 2018";
            $_SESSION['arrivalTime']    = "5.30am";
            $_SESSION['startTime']      = "6.30am";
            $_SESSION['minAge']         = "6";
            $_SESSION['raceCutOffTime'] = "1 hours 40 minutes";
            $_SESSION['racePrice']      = "RM 40";
        } elseif ( $_POST['choices'] == "fr10c" ) // Fun run - Child
        {
            $_SESSION['raceCategories'] = "Fun Run";
            $_SESSION['raceDistance']   = "5 km";
            $_SESSION['raceDate']       = "Sunday 1 July 2018";
            $_SESSION['arrivalTime']    = "6.30am";
            $_SESSION['startTime']      = "7.30am";
            $_SESSION['minAge']         = "6";
            $_SESSION['raceCutOffTime'] = "45 minutes";
            $_SESSION['racePrice']      = "RM 20";
        }

        header("Location: ../registration-section-2.php");
    }
?>