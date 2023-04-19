<?php
$Student = [
    [
        'id' => '1',
        'Name' => 'yasmeen_khaled',
        'phone' => '011279824256',
        
        'Section' => 'CS'

    ],
    [
        'id' => '2',
        'Name' => 'alaa_mohmed',
        'phone' => '010235486975',
        
        'Section' => 'IT'

    ],
    [
        'id' => '3',
        'Name' => 'nada_ahmed',
        'phone' => '012591136876',
        
        'Section' => 'CS'

    ],
    [
        'id' => '4',
        'Name' => 'salma_Ali',
        'phone' => '01011125951',
        
        'Section' => 'IT'


    ],
    [
        'id' => '5',
        'Name' => 'shemaa_abdallah',
        'phone' => '010235486975',
        
        'Section' => 'IT'


    ],
    [
        'id' => '6',
        'Name' => 'hoda_mohamed',
        'phone' => '010235486975',
        
        'Section' => 'CS'

    ],
    [
        'id' => '7',
        'Name' => 'aya_abdallah',
        'phone' => '011279824256',
        
        'Section' => 'CS'

    ],
    [
        'id' => '8',
        'Name' => 'sara_mohmed',
        'phone' => '010235486975',
        
        'Section' => 'IT'

    ],
    [
        'id' => '9',
        'Name' => 'rana_ahmed',
        'phone' => '011279824256',
        
        'Section' => 'CS'

    ],
    [
        'id' => '10',
        'Name' => 'rawan_mohmed',
        'phone' => '010235486975',
        
        'Section' => 'IT'

    ], [
        'id' => '11',
        'Name' => 'malak_Hamed',
        'phone' => '011279824256',
        
        'Section' => 'CS'

    ],
    [
        'id' => '12',
        'Name' => 'roaa_mohmed',
        'phone' => '010235486975',
        
        'Section' => 'IT'

    ], [
        'id' => '13',
        'Name' => 'asmaa_Hamed',
        'phone' => '011279824256',
        
        'Section' => 'CS'

    ],
    [
        'id' => '14',
        'Name' => 'asile_mohmed',
        'phone' => '010235486975',
        
        'Section' => 'IT'

    ],
    [
        'id' => '15',
        'Name' => 'nada_mohmed',
        'phone' => '010235486975',
        
        'Section' => 'IT'

    ],
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            margin: 0px;
            padding: 0px;
        }

        table,
        th,
        tr,
        td {
            border: solid 2px blue;
            color: green;
            padding: 5px;
            margin-bottom: 35px;

        }

        h1 {
            color: aliceblue;
            text-align: center;

        }

        .all_student_list {
            background-color: black;
            width: 100%;
            height: 100vh;
            margin: auto;
            display: flex;
            justify-content: center;
        }

        .all_student_list a {
            font-size: 20px;
            color: red;
            background-color: black;
            padding: 8px 35px;
            border-radius: 15px;
            text-decoration: none;
        }
    </style>

</head>

<body>
    <div class="all_student_list">
        <div class="list">

            <h1>List of Student </h1>
            <table>
                <tr>
                    <th>index</th>
                    <th>Name</th>
                    <th>Phone</th>
                    
                    <th>Section</th>
                </tr>
                <?php
                foreach ($Student as $data) {
                ?>
                    <tr>
                        <td><?php echo "{$data["id"]}" ?></td>
                        <td><?php echo "{$data["Name"]}" ?></td>
                        <td><?php echo "{$data["phone"]}" ?></td>
                        
                        <td><?php echo "{$data["Section"]}" ?></td>
                    </tr>
                <?php } ?>
            </table>
            <a href="./index.html">back To Home Page</a>
        </div>
    </div>
</body>