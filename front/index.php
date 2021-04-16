<html>
    <head>
     <link rel="stylesheet" href="styles.css">
     <title> Docker User </title>
    </head>
    <body>
        <h1> Welcome to Docker Student Info API UI </h1>
        <h2> API methods localhost/5000/: </h2>
        <ul>
            <?php
                $json = file_get_contents('http://api/');
                $obj = json_decode($json);
                $names = $obj->ret;
                foreach ($names as $name) {
                    echo "<li><h3>  http://api/ +  $name </h3></li>";
                }
            ?>   
        </ul>
        
        <h2> Student Info: </h2>
            <h2 id="getFirstName"> call getFirstName() </h2>
            <ul>
                <div id="getFirstNameRes" style="display: block"> 
                        <?php
                            $json = file_get_contents('http://api/getFirstName');
                            $obj = json_decode($json);
                            $names = $obj->ret;
                            foreach ($names as $name) {
                                echo "<li><h3> First Name: $name </h3></li>";
                            }
                        ?>   
                </div>
            </ul>

            <h2 id="getLastName"> call getLastName() </h2>
            <ul>
                <div id="getLastNameRes" style="display: none"> 
                <?php
                    $json = file_get_contents('http://api/getLastName');
                    $obj = json_decode($json);
                    $names = $obj->ret;
                    foreach ($names as $name) {
                        echo "<li><h3> Last Name: $name </h3></li>";
                    }
                ?>
                </div>   
            </ul>

         <h2 id="getUni"> call getUni() </h2>
        <ul>
             <div id="getUniRes" style="display: none"> 
            <?php
                $json = file_get_contents('http://api/getUni');
                $obj = json_decode($json);
                $names = $obj->ret;
                foreach ($names as $name) {
                    echo "<li><h3> University: $name </h3></li>";
                }
            ?>
            </div>   
        </ul>

         <h2 id="getCourse"> call getCourse() </h2>
        <ul>
             <div id="getCourseRes" style="display: none"> 
            <?php
                $json = file_get_contents('http://api/getCourse');
                $obj = json_decode($json);
                $names = $obj->ret;
                foreach ($names as $name) {
                    echo "<li><h3> Course: $name </h3></li>";
                }
            ?>
            </div>   
        </ul>

         <h2 id="getGPA"> call getGPA() </h2>
        <ul>
             <div id="getGPARes" style="display: none"> 
            <?php
                $json = file_get_contents('http://api/getGPA');
                $obj = json_decode($json);
                $names = $obj->ret;
                foreach ($names as $name) {
                    echo "<li><h3> GPA: $name </h3></li>";
                }
            ?>
            </div>   
        </ul>
     <script src="back.js"></script>
        
    </body>
</html>