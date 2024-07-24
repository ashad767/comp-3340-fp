<?php
$CFG = new stdClass();

# Replace the following URL with your site's URL...
$CFG->base_url = '';

# Site-wide password salt...
$CFG->site_wide_password_salt = '';

# Set a "global"  session timeout...
$CFG->session_timeout = 60*10; // in seconds

# Database information...
$CFG->dbtype = '';
$CFG->dbhost = '';
$CFG->dbname = '';
$CFG->dbuser = '';
$CFG->dbpass = '';

# Special database "admin" security settings...
$CFG->db_admin_permit_create_drop = FALSE;
$CFG->db_admin_only_allow_ip = '';

# e.g., Special email support address...
$CFG->emailaddr_support = '';

?>
