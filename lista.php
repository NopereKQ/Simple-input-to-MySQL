<html>
    <head>
        <title>lista osob</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/luxonauta/luxa@latest/dist/compressed/luxa.css">
        <style>
            body {
                font-family: "Roboto", sans-serif;
                color: white;
                background-color: #22212c;
                font-size: 24px;
            }

            section {
                min-height: 100vh;
                padding: 4rem;
            } 
        </style>
    </head>
    <body>
    <section class="has-dflex-center">
        <div class="lx-container-70">
            <div class="lx-row">
                <table class="lx-table">
                <tbody>
                <?php try
                {
                    $con = new PDO('mysql:host=localhost;dbname=stoliki', "root", "");
                    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $query = "SELECT * FROM rezerwacja";
                    $result = $con->query($query);
                    $row = $result->fetch(PDO::FETCH_ASSOC);
                    foreach ($row as $field => $value)
                    {
                        print " <th>$field</th>";
                    }
                    print " </tr>";
                    $data = $con->query($query);
                    $data->setFetchMode(PDO::FETCH_ASSOC);
                    foreach ($data as $row)
                    {
                        print " <tr>";
                        foreach ($row as $name => $value)
                        {
                            print " <td>$value</td>";
                        }
                        print " </tr>";
                    }
                    print "</table>";
                }
                catch(PDOException $e)
                {
                    echo 'ERROR: ' . $e->getMessage();
                } ?>
                    </tbody>
                    </table>
            </div>
        </div>
    </section>
    </body>
</html>