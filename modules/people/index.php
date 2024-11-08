<!DOCTYPE html>
<html lang="de">

<head>
    <title>Nterslak</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/res/html/head.html'; ?>
    <link rel="stylesheet" href="/modules/people/style.css">
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/res/html/header.html'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/res/html/nav.html'; ?>
    <main>
        <div class="people-nav">
            <a href="#" class="noscript-hide">
                <!-- This icon is provided by Heroicons: https://heroicons.com/ -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                </svg>
            </a>
            <a href="./add">
                <!-- This icon is provided by Heroicons: https://heroicons.com/ -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </a>
            <a href="./connections">
                <!-- This icon is provided by Heroicons: https://heroicons.com/ -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                </svg>
            </a>
        </div>
        <div class="people-table">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Example data, replace with your actual data source
                    $people = [
                        ['name' => 'John Doe', 'email' => 'john@example.com', 'phone' => '123-456-7890'],
                        ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'phone' => '987-654-3210'],
                        ['name' => 'Alice Johnson', 'email' => 'alice@example.com', 'phone' => '555-123-4567'],
                        ['name' => 'Karen Nelson', 'email' => 'karen@example.com', 'phone' => '555-345-6780'],
                        ['name' => 'Liam O\'Connor', 'email' => 'liam@example.com', 'phone' => '555-456-7891'],
                        ['name' => 'Mia Patel', 'email' => 'mia@example.com', 'phone' => '555-567-8902'],
                        ['name' => 'Noah Quinn', 'email' => 'noah@example.com', 'phone' => '555-678-9013'],
                        ['name' => 'Olivia Roberts', 'email' => 'olivia@example.com', 'phone' => '555-789-0124'],
                        ['name' => 'Paul Scott', 'email' => 'paul@example.com', 'phone' => '555-890-1235'],
                        ['name' => 'Quinn Taylor', 'email' => 'quinn@example.com', 'phone' => '555-901-2346'],
                        ['name' => 'Rachel Underwood', 'email' => 'rachel@example.com', 'phone' => '555-012-3457'],
                        ['name' => 'Sam Vance', 'email' => 'sam@example.com', 'phone' => '555-123-4569'],
                        ['name' => 'Tina White', 'email' => 'tina@example.com', 'phone' => '555-234-5670'],
                        ['name' => 'Uma Xavier', 'email' => 'uma@example.com', 'phone' => '555-345-6781'],
                        ['name' => 'Victor Young', 'email' => 'victor@example.com', 'phone' => '555-456-7892'],
                        ['name' => 'Wendy Zane', 'email' => 'wendy@example.com', 'phone' => '555-567-8903'],
                        ['name' => 'Xander Adams', 'email' => 'xander@example.com', 'phone' => '555-678-9014'],
                        ['name' => 'Yara Brown', 'email' => 'yara@example.com', 'phone' => '555-789-0125'],
                        ['name' => 'Zach Carter', 'email' => 'zach@example.com', 'phone' => '555-890-1236'],
                        ['name' => 'Ava Davis', 'email' => 'ava@example.com', 'phone' => '555-901-2347'],
                        ['name' => 'Ben Evans', 'email' => 'ben@example.com', 'phone' => '555-012-3458'],
                        ['name' => 'Cara Foster', 'email' => 'cara@example.com', 'phone' => '555-123-4570'],
                        ['name' => 'Dan Green', 'email' => 'dan@example.com', 'phone' => '555-234-5671'],
                        ['name' => 'Ella Harris', 'email' => 'ella@example.com', 'phone' => '555-345-6782'],
                        ['name' => 'Finn Irving', 'email' => 'finn@example.com', 'phone' => '555-456-7893'],
                        ['name' => 'Grace Johnson', 'email' => 'grace@example.com', 'phone' => '555-567-8904'],
                        ['name' => 'Henry King', 'email' => 'henry@example.com', 'phone' => '555-678-9015'],
                        ['name' => 'Isla Lee', 'email' => 'isla@example.com', 'phone' => '555-789-0126'],
                        ['name' => 'Jack Martin', 'email' => 'jack@example.com', 'phone' => '555-890-1237'],
                        ['name' => 'Kara Nelson', 'email' => 'kara@example.com', 'phone' => '555-901-2348'],
                        ['name' => 'Leo O\'Brien', 'email' => 'leo@example.com', 'phone' => '555-012-3459'],
                        ['name' => 'Maya Patel', 'email' => 'maya@example.com', 'phone' => '555-123-4571'],
                        ['name' => 'Nina Quinn', 'email' => 'nina@example.com', 'phone' => '555-234-5672'],
                        ['name' => 'Bob Brown', 'email' => 'bob@example.com', 'phone' => '555-234-5678'],
                        ['name' => 'Charlie Davis', 'email' => 'charlie@example.com', 'phone' => '555-345-6789'],
                        ['name' => 'Diana Evans', 'email' => 'diana@example.com', 'phone' => '555-456-7890'],
                        ['name' => 'Evan Foster', 'email' => 'evan@example.com', 'phone' => '555-567-8901'],
                        ['name' => 'Fiona Green', 'email' => 'fiona@example.com', 'phone' => '555-678-9012'],
                        ['name' => 'George Harris', 'email' => 'george@example.com', 'phone' => '555-789-0123'],
                        ['name' => 'Hannah Irving', 'email' => 'hannah@example.com', 'phone' => '555-890-1234'],
                        ['name' => 'Ian Johnson', 'email' => 'ian@example.com', 'phone' => '555-901-2345'],
                        ['name' => 'Jackie King', 'email' => 'jackie@example.com', 'phone' => '555-012-3456'],
                        ['name' => 'Kevin Lee', 'email' => 'kevin@example.com', 'phone' => '555-123-4568'],
                        ['name' => 'Laura Martin', 'email' => 'laura@example.com', 'phone' => '555-234-5679']
                    ];

                    foreach ($people as $person) {
                        echo '<tr>';
                        echo '<td><a href="./person/?id=personid">' . htmlspecialchars($person['name']) . '</a></td>';
                        echo '<td>' . htmlspecialchars($person['email']) . '</td>';
                        echo '<td>' . htmlspecialchars($person['phone']) . '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <style>
        #nav_entry_people {
            background-color: var(--primaryColor);
            color: var(--black);
        }
    </style>
</body>

</html>