 <?php
    function count_users()
    {
        // 'count' Is In the same directory level
        $archive = 'count.txt';
        if (file_exists($archive)) {

            $count =  file_get_contents($archive) + 1;
            file_put_contents($archive, $count); // Modify the number
            return $count;
        } else {
            // create and initialize '$archive' with count 1
            file_put_contents($archive, 1);
            return 1;
        }
    }
    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Visits counter (Billy Rodriguez M.)</title>
 </head>

 <body>
     <h1>Visit counter</h1>
     <div class="visits">
         <p class="number">You have <?php echo count_users(); ?> 'visits!'</p>
     </div>
 </body>

 </html>