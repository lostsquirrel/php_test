<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        body {
            font-size: 1.6rem;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-content: flex-start;
            line-height: 1.5;
            height: 800px;
        }
        div {
            max-width: 350px;
        }
    </style>
</head>
<body>
    <?php
        function is_point($file) {
            return $file === "." || $file === ".." || $file === ".git";
        }

        function create_file_link($dir) {
            $list =  scandir($dir);
            // echo $list;
            // echo count($list);
            foreach ($list as $file) {
                
                // echo "xx";
                if (is_point($file)) {
                    continue;
                }
                // echo $file . "<br >";
                $next = $dir . "/" . $file;
                if (is_dir($next)) {
                    create_file_link($next);
                } else {
                    echo "<div><a href=\"$next\">$next</a></div>";
                }
            }
        }
        
        create_file_link(".");
        // echo "end";
       
    ?>
</body>
</html>