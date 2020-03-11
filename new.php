<?php
                            if(isset($_POST['submit'])){
                            // As output of $_POST['Color'] is an array we have to use foreach Loop to display individual value
                            foreach ($_POST['Color'] as $select)
                            {
                            echo "You have selected :" .$select; // Displaying Selected Value
                            }
                            ?>