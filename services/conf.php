<?php

class CONF {

    /* Flag for demo version */
    public $DEMO_VERSION = false;

    /* Data configuration for database */
    public $DB_SERVER   = "localhost";
    public $DB_USER     = "id14643598_user";
    public $DB_PASSWORD = "g8m!A(~$0tE+kCQC";
    public $DB_NAME     = "id14643598_db";

    /* FCM key for notification */
    public $FCM_KEY     = "AIzaSyA-u_huc8HXDdFDxhhifTl93jpZjimHKlY";


    /* [ IMPORTANT ] be careful when edit this security code, use AlphaNumeric only*/
    /* This string must be same with security code at Android, if its different android unable to submit order */
    public $SECURITY_CODE = "Bttm54yPJpsrh76SKEjt5IhNQuZiUnKxT9Cu0DUztr5zCdc80llPWQIDU1wYbrMM3kTAbuWm0NV2TTQErt9ZJYafI6DUkqVxEfix";

    /* Mailer config ---------------------------------------------------- */

    // change with yours
    public $SMTP_EMAIL      = "allan.bacongan19@gmail.com";
    public $SMTP_PASSWORD   = "password";
    public $SMTP_HOST       = "allan.bacongan19@gmail.com";
    public $SMTP_PORT       = 562;

    // for administrator & for buyer
    public $SUBJECT_EMAIL_NEW_ORDER = " New Order";
    public $TITLE_REPORT_NEW_ORDER  = "New Order";

    // for buyer
    public $SUBJECT_EMAIL_ORDER_PROCESSED   = "Order PROCESSED";
    public $TITLE_REPORT_ORDER_PROCESSED    = "Order Status Change to PROCESSED";

    public $SUBJECT_EMAIL_ORDER_UPDATED     = "Order Data Updated";
    public $TITLE_REPORT_ORDER_UPDATED      = "Order Data Updated By Admin";
}

?>